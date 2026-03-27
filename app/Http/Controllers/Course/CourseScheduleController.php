<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Course\Course;
use App\Models\Course\CourseSchedule;
use App\Models\Course\CourseCalendarFile;

class CourseScheduleController extends Controller
{
    /**
     * Preview page: runs token -> pricing -> retail -> corporate steps
     * and shows samples + counts WITHOUT writing to DB.
     */
    public function syncReport(Request $request)
    {
        // Load config/credentials
        $clientId     = config('services.zoho.client_id');
        $clientSecret = config('services.zoho.client_secret');
        $refreshToken = config('services.zoho.refresh_token');
        $region       = config('services.zoho.region', 'us');

        // Region-aware endpoints
        $oauthHost = [
            'us'=>'https://accounts.zoho.com',
            'eu'=>'https://accounts.zoho.eu',
            'in'=>'https://accounts.zoho.in',
            'au'=>'https://accounts.zoho.com.au',
            'jp'=>'https://accounts.zoho.jp',
        ][$region] ?? 'https://accounts.zoho.com';

        $apiHost = [
            'us'=>'https://www.zohoapis.com',
            'eu'=>'https://www.zohoapis.eu',
            'in'=>'https://www.zohoapis.in',
            'au'=>'https://www.zohoapis.com.au',
            'jp'=>'https://www.zohoapis.jp',
        ][$region] ?? 'https://www.zohoapis.com';

        $tokenUrl = $oauthHost . '/oauth/v2/token';
        $coqlUrl  = $apiHost   . '/crm/v2/coql';

        // Courses map
        $courses = Course::whereNotNull('zoho_id')
            ->where('zoho_id', '!=', 0)
            ->pluck('id', 'zoho_id')
            ->toArray();

        // Report scaffold
        $report = [
            'token' => [
                'http' => null,
                'has_token' => false,
                'endpoint' => $tokenUrl,
                'error' => null,
                'error_description' => null,
                'raw' => null,
                'errors' => [],
            ],
            'pricing' => ['pages' => 0, 'found' => 0, 'samples' => []],
            'retail'  => ['pages' => 0, 'found' => 0, 'samples' => []],
            'corp'    => ['pages' => 0, 'found' => 0, 'samples' => []],
            'summary' => ['courses' => 0, 'schedules' => 0, 'insertable_rows' => 0],
            'breadcrumbs' => [],
        ];

        // --- Token
        $data = [
            'grant_type'    => 'refresh_token',
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
            'refresh_token' => $refreshToken,
        ];

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => $tokenUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data),
            CURLOPT_SSL_VERIFYPEER => true,
        ]);
        $tokenRaw  = curl_exec($ch);
        $tokenCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if (curl_errno($ch)) {
            $report['token']['errors'][] = 'cURL: ' . curl_error($ch);
        }
        curl_close($ch);

        $tokenJson = json_decode($tokenRaw, true);
        $report['token']['http'] = $tokenCode;
        $report['token']['raw'] = $tokenRaw;
        if (is_array($tokenJson)) {
            $report['token']['error'] = $tokenJson['error'] ?? null;
            $report['token']['error_description'] = $tokenJson['error_description'] ?? null;
        }
        $accessToken = $tokenJson['access_token'] ?? null;
        $report['token']['has_token'] = (bool)$accessToken;

        if (!$accessToken) {
            $report['breadcrumbs'][] = 'Skipped COQL calls: missing access token.';
            return view('courses.sync-report', [
                'report'         => $report,
                'courses'        => $courses,
                'products'       => [],
                'courseCalendar' => [],
            ]);
        }

        // --- COQL helper
        $callCoql = function (string $query) use ($coqlUrl, $accessToken, &$report) {
            $body = ['select_query' => $query];
            $ch = curl_init();
            curl_setopt_array($ch, [
                CURLOPT_URL            => $coqlUrl,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => json_encode($body),
                CURLOPT_HTTPHEADER     => [
                    'Authorization: Zoho-oauthtoken ' . $accessToken,
                    'Content-Type: application/json',
                ],
                CURLOPT_SSL_VERIFYPEER => true,
            ]);
            $raw  = curl_exec($ch);
            $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (curl_errno($ch)) {
                $report['breadcrumbs'][] = 'COQL cURL: ' . curl_error($ch);
            }
            curl_close($ch);

            $json = json_decode($raw, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                $report['breadcrumbs'][] = 'COQL JSON: ' . json_last_error_msg();
            }
            return [$code, $json, $raw];
        };

        $limit  = 200;
        $products = [];
        $courseCalendar = [];

        // --- Pricing
        $offset = 0;
        do {
            $query = "SELECT Currency, Formula_1, Product_Names, Product_Names.id, Product_Names.Course_Type,
                      Product_Names.Product_Name, Mode_Of_Delivery
                      FROM Pricing
                      WHERE Currency='USD' AND Country = 'United Arab Emirates'
                      LIMIT {$offset}, {$limit}";
            [$code, $resp] = $callCoql($query);
            $data = $resp['data'] ?? [];
            $info = $resp['info'] ?? [];
            $cnt  = is_array($data) ? count($data) : 0;

            $report['pricing']['pages']++;
            $report['pricing']['found'] += $cnt;
            $report['breadcrumbs'][] = "PRICING page={$report['pricing']['pages']} http={$code} offset={$offset} count={$cnt} more=" . (($info['more_records'] ?? false) ? 'yes' : 'no');

            if ($cnt) {
                foreach ($data as $row) {
                    $pid = $row['Product_Names.id'] ?? null;
                    if (!$pid) continue;

                    if (!isset($products[$pid])) {
                        $products[$pid] = [
                            'productName'  => $row['Product_Names.Product_Name'] ?? '',
                            'courseType'   => $row['Product_Names.Course_Type'] ?? '',
                            'currency'     => $row['Currency'] ?? '',
                            'onlinePrice'  => 0,
                            'offlinePrice' => 0,
                        ];
                    }
                    if (($row['Mode_Of_Delivery'] ?? '') === 'Online') {
                        $products[$pid]['onlinePrice'] = $row['Formula_1'] ?? 0;
                    } elseif (($row['Mode_Of_Delivery'] ?? '') === 'Offline') {
                        $products[$pid]['offlinePrice'] = $row['Formula_1'] ?? 0;
                    }
                }
                foreach (array_slice($data, 0, 5) as $s) {
                    $report['pricing']['samples'][] = $s;
                }
            }
            $more = $info['more_records'] ?? false;
            $offset += $limit;
        } while ($more);

        // --- Retail (Batch_Module)
        $offset = 0;
        do {
            $query = "select Name, Course_Name, Course_Type, Delivery_Platform, Language, Course_Code, Batch_Type, Batch_Start_Date, Start_Time,
                      Batch_End_Date, End_Time, Time_Zone, Country, Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, City, Currency,
                      Batch_Duration_Days, Layout
                      from Batch_Module
                      where Layout = '5834669000178712068'
                      order by id
                      LIMIT {$offset}, {$limit}";
            [$code, $resp] = $callCoql($query);
            $data = $resp['data'] ?? [];
            $info = $resp['info'] ?? [];
            $cnt  = is_array($data) ? count($data) : 0;

            $report['retail']['pages']++;
            $report['retail']['found'] += $cnt;
            $report['breadcrumbs'][] = "RETAIL page={$report['retail']['pages']} http={$code} offset={$offset} count={$cnt} more=" . (($info['more_records'] ?? false) ? 'yes' : 'no');

            if ($cnt) {
                foreach ($data as $t) {
                    $cid = $t['Course_Name']['id'] ?? null;
                    if (!$cid) continue;

                    if (count($report['retail']['samples']) < 5) {
                        $report['retail']['samples'][] = $t;
                    }

                    $startOk = !empty($t['Batch_Start_Date']) && (
                        Carbon::parse($t['Batch_Start_Date'])->isToday() ||
                        Carbon::parse($t['Batch_Start_Date'])->isFuture()
                    );

                    if ($startOk && isset($courses[$cid]) && isset($products[$cid])) {
                        $row = [
                            'scheduleCouseName' => $t['Name'] ?? '',
                            'deliveryPlatform'  => $t['Delivery_Platform'] ?? '',
                            'language'          => $t['Language'] ?? '',
                            'courseCode'        => $t['Course_Code'] ?? '',
                            'batchType'         => $t['Batch_Type'] ?? '',
                            'city'              => $t['City'] ?? '',
                            'country'           => $t['Country'] ?? '',
                            'currency'          => $products[$cid]['currency'] ?? '',
                            'courseFee'         => (($t['Batch_Type'] ?? '') === 'Online')
                                                    ? ($products[$cid]['onlinePrice'] ?? 0)
                                                    : ($products[$cid]['offlinePrice'] ?? 0),
                            'timeZone'          => $t['Time_Zone'] ?? '',
                            'batchStartDate'    => $t['Batch_Start_Date'] ?? null,
                            'batchEndDate'      => $t['Batch_End_Date'] ?? null,
                            'startTime'         => $t['Start_Time'] ?? '',
                            'endTime'           => $t['End_Time'] ?? '',
                            'batchDurationDays' => $t['Batch_Duration_Days'] ?? null,
                            'sunday'            => $t['Sunday'] ?? 0,
                            'monday'            => $t['Monday'] ?? 0,
                            'tuesday'           => $t['Tuesday'] ?? 0,
                            'wednesday'         => $t['Wednesday'] ?? 0,
                            'thursday'          => $t['Thursday'] ?? 0,
                            'friday'            => $t['Friday'] ?? 0,
                            'saturday'          => $t['Saturday'] ?? 0,
                        ];

                        if (isset($courseCalendar[$cid]['schedule'])) {
                            $courseCalendar[$cid]['schedule'][] = $row;
                        } else {
                            $courseCalendar[$cid] = [
                                'id'         => $cid,
                                'title'      => $products[$cid]['productName'] ?? '',
                                'courseType' => $products[$cid]['courseType'] ?? '',
                                'schedule'   => [$row],
                            ];
                        }
                    }
                }
            }
            $more = $info['more_records'] ?? false; // <-- correct source
            $offset += $limit;
        } while ($more);

        // --- Corporate (Batch_Corporate)
        $offset = 0;
        do {
            $query = "select Name, Batch_Start_Date, Batch_End_Date, Batch_Type, City, Country, Course_Code, Course_Name, Currency,
                      Language, Number_of_Sessions, Number_of_Students, Same_time_for_all_sessions, Time_Zone, Layout
                      from Batch_Corporate
                      where id is not null
                      order by id
                      LIMIT {$offset}, {$limit}";
            [$code, $resp] = $callCoql($query);
            $data = $resp['data'] ?? [];
            $info = $resp['info'] ?? [];
            $cnt  = is_array($data) ? count($data) : 0;

            $report['corp']['pages']++;
            $report['corp']['found'] += $cnt;
            $report['breadcrumbs'][] = "CORP page={$report['corp']['pages']} http={$code} offset={$offset} count={$cnt} more=" . (($info['more_records'] ?? false) ? 'yes' : 'no');

            if ($cnt) {
                foreach ($data as $t) {
                    if (count($report['corp']['samples']) < 5) {
                        $report['corp']['samples'][] = $t;
                    }

                    $cid = $t['Course_Name']['id'] ?? null;
                    if (!$cid) continue;

                    $startOk = !empty($t['Batch_Start_Date']) && (
                        Carbon::parse($t['Batch_Start_Date'])->isToday() ||
                        Carbon::parse($t['Batch_Start_Date'])->isFuture()
                    );

                    if ($startOk && isset($courses[$cid])) {
                        $row = [
                            'scheduleCouseName' => $t['Name'] ?? '',
                            'deliveryPlatform'  => '',
                            'language'          => $t['Language'] ?? '',
                            'courseCode'        => $t['Course_Code'] ?? '',
                            'batchType'         => $t['Batch_Type'] ?? '',
                            'city'              => $t['City'] ?? '',
                            'country'           => $t['Country'] ?? '',
                            'currency'          => '',
                            'courseFee'         => 0,
                            'timeZone'          => $t['Time_Zone'] ?? '',
                            'batchStartDate'    => $t['Batch_Start_Date'] ?? null,
                            'batchEndDate'      => $t['Batch_End_Date'] ?? null,
                            'startTime'         => '',
                            'endTime'           => '',
                            'batchDurationDays' => $t['Number_of_Sessions'] ?? 0,
                            'sunday'            => 0,'monday'=>0,'tuesday'=>0,'wednesday'=>0,'thursday'=>0,'friday'=>0,'saturday'=>0,
                        ];

                        if (isset($courseCalendar[$cid]['schedule'])) {
                            $courseCalendar[$cid]['schedule'][] = $row;
                        } else {
                            $courseCalendar[$cid] = [
                                'id'         => $cid,
                                'title'      => $t['Course_Name']['name'] ?? '',
                                'courseType' => 'Corporate Course',
                                'schedule'   => [$row],
                            ];
                        }
                    }
                }
            }
            $more = $info['more_records'] ?? false; // <-- correct source
            $offset += $limit;
        } while ($more);

        // --- Summary
        $report['summary']['courses'] = count($courseCalendar);
        $report['summary']['schedules'] = array_sum(array_map(
            fn($c) => isset($c['schedule']) ? count($c['schedule']) : 0, $courseCalendar
        ));
        $report['summary']['insertable_rows'] = $report['summary']['schedules'];

        return view('courses.sync-report', [
            'report'         => $report,
            'courses'        => $courses,
            'products'       => $products,
            'courseCalendar' => $courseCalendar,
        ]);
    }

    /**
     * Full sync: writes to DB (with logging and safe guards).
     */
    public function syncSchedule()
    {
        // Load config/credentials
        $clientId     = config('services.zoho.client_id');
        $clientSecret = config('services.zoho.client_secret');
        $refreshToken = config('services.zoho.refresh_token');
        $region       = config('services.zoho.region', 'us');

        // Region-aware endpoints
        $oauthHost = [
            'us'=>'https://accounts.zoho.com',
            'eu'=>'https://accounts.zoho.eu',
            'in'=>'https://accounts.zoho.in',
            'au'=>'https://accounts.zoho.com.au',
            'jp'=>'https://accounts.zoho.jp',
        ][$region] ?? 'https://accounts.zoho.com';

        $apiHost = [
            'us'=>'https://www.zohoapis.com',
            'eu'=>'https://www.zohoapis.eu',
            'in'=>'https://www.zohoapis.in',
            'au'=>'https://www.zohoapis.com.au',
            'jp'=>'https://www.zohoapis.jp',
        ][$region] ?? 'https://www.zohoapis.com';

        $tokenUrl = $oauthHost . '/oauth/v2/token';
        $coqlUrl  = $apiHost   . '/crm/v2/coql';

        // Courses map
        $courses = Course::whereNotNull('zoho_id')
            ->where('zoho_id', '!=', 0)
            ->pluck('id', 'zoho_id')
            ->toArray();

        // Token
        $data = [
            'grant_type'    => 'refresh_token',
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
            'refresh_token' => $refreshToken,
        ];

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => $tokenUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data),
            CURLOPT_SSL_VERIFYPEER => true,
        ]);
        $tokenRaw  = curl_exec($ch);
        $tokenCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if (curl_errno($ch)) {
            Log::error('Zoho TOKEN cURL', ['err' => curl_error($ch)]);
        }
        curl_close($ch);

        $tokenJson = json_decode($tokenRaw, true);
        $accessToken = $tokenJson['access_token'] ?? null;
        if (!$accessToken) {
            Log::error('Zoho TOKEN error', [
                'http' => $tokenCode,
                'raw'  => $tokenRaw,
                'error' => $tokenJson['error'] ?? null,
                'desc'  => $tokenJson['error_description'] ?? null,
                'region'=> $region,
            ]);
            session()->flash('error', 'Zoho token error. Check logs for details.');
            return redirect()->back();
        }

        // COQL helper
        $callCoql = function (string $query) use ($coqlUrl, $accessToken) {
            $body = ['select_query' => $query];
            $ch = curl_init();
            curl_setopt_array($ch, [
                CURLOPT_URL            => $coqlUrl,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST           => true,
                CURLOPT_POSTFIELDS     => json_encode($body),
                CURLOPT_HTTPHEADER     => [
                    'Authorization: Zoho-oauthtoken ' . $accessToken,
                    'Content-Type: application/json',
                ],
                CURLOPT_SSL_VERIFYPEER => true,
            ]);
            $raw  = curl_exec($ch);
            $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $err  = curl_errno($ch) ? curl_error($ch) : null;
            curl_close($ch);

            $json = json_decode($raw, true);
            return [$code, $json, $raw, $err];
        };

        $limit  = 200;
        $products = [];
        $courseCalendar = [];

        // Pricing
        $offset = 0;
        do {
            $query = "SELECT Currency, Formula_1, Product_Names, Product_Names.id, Product_Names.Course_Type,
                      Product_Names.Product_Name, Mode_Of_Delivery
                      FROM Pricing
                      WHERE Currency='USD' AND Country = 'United Arab Emirates'
                      LIMIT {$offset}, {$limit}";
            [$code, $resp, $raw, $err] = $callCoql($query);
            if ($err) Log::error('PRICING cURL', ['err' => $err]);
            $data = $resp['data'] ?? [];
            $info = $resp['info'] ?? [];
            if (is_array($data)) {
                foreach ($data as $row) {
                    $pid = $row['Product_Names.id'] ?? null;
                    if (!$pid) continue;

                    if (!isset($products[$pid])) {
                        $products[$pid] = [
                            'productName'  => $row['Product_Names.Product_Name'] ?? '',
                            'courseType'   => $row['Product_Names.Course_Type'] ?? '',
                            'currency'     => $row['Currency'] ?? '',
                            'onlinePrice'  => 0,
                            'offlinePrice' => 0,
                        ];
                    }
                    if (($row['Mode_Of_Delivery'] ?? '') === 'Online') {
                        $products[$pid]['onlinePrice'] = $row['Formula_1'] ?? 0;
                    } elseif (($row['Mode_Of_Delivery'] ?? '') === 'Offline') {
                        $products[$pid]['offlinePrice'] = $row['Formula_1'] ?? 0;
                    }
                }
            }
            $more = $info['more_records'] ?? false;
            $offset += $limit;
        } while ($more);

        // Retail
        $offset = 0;
        $skipped = ['no_course_map' => 0, 'no_product' => 0, 'date_past' => 0];
        do {
            $query = "select Name, Course_Name, Course_Type, Delivery_Platform, Language, Course_Code, Batch_Type, Batch_Start_Date, Start_Time,
                      Batch_End_Date, End_Time, Time_Zone, Country, Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, City, Currency,
                      Batch_Duration_Days, Layout
                      from Batch_Module
                      where Layout = '5834669000178712068'
                      order by id
                      LIMIT {$offset}, {$limit}";
            [$code, $resp, $raw, $err] = $callCoql($query);
            if ($err) Log::error('RETAIL cURL', ['err' => $err]);

            $data = $resp['data'] ?? [];
            $info = $resp['info'] ?? [];
            if (is_array($data)) {
                foreach ($data as $t) {
                    $cid = $t['Course_Name']['id'] ?? null;
                    if (!$cid) continue;

                    $isFutureOrToday = !empty($t['Batch_Start_Date']) &&
                        (Carbon::parse($t['Batch_Start_Date'])->isToday() ||
                         Carbon::parse($t['Batch_Start_Date'])->isFuture());

                    if (!$isFutureOrToday) { $skipped['date_past']++; continue; }
                    if (!array_key_exists($cid, $courses)) { $skipped['no_course_map']++; continue; }
                    if (!array_key_exists($cid, $products)) { $skipped['no_product']++; continue; }

                    $row = [
                        'scheduleCouseName' => $t['Name'] ?? '',
                        'deliveryPlatform'  => $t['Delivery_Platform'] ?? '',
                        'language'          => $t['Language'] ?? '',
                        'courseCode'        => $t['Course_Code'] ?? '',
                        'batchType'         => $t['Batch_Type'] ?? '',
                        'city'              => $t['City'] ?? '',
                        'country'           => $t['Country'] ?? '',
                        'currency'          => $products[$cid]['currency'] ?? '',
                        'courseFee'         => (($t['Batch_Type'] ?? '') === 'Online')
                                                ? ($products[$cid]['onlinePrice'] ?? 0)
                                                : ($products[$cid]['offlinePrice'] ?? 0),
                        'timeZone'          => $t['Time_Zone'] ?? '',
                        'batchStartDate'    => $t['Batch_Start_Date'] ?? null,
                        'batchEndDate'      => $t['Batch_End_Date'] ?? null,
                        'startTime'         => $t['Start_Time'] ?? '',
                        'endTime'           => $t['End_Time'] ?? '',
                        'batchDurationDays' => $t['Batch_Duration_Days'] ?? null,
                        'sunday'            => $t['Sunday'] ?? 0,
                        'monday'            => $t['Monday'] ?? 0,
                        'tuesday'           => $t['Tuesday'] ?? 0,
                        'wednesday'         => $t['Wednesday'] ?? 0,
                        'thursday'          => $t['Thursday'] ?? 0,
                        'friday'            => $t['Friday'] ?? 0,
                        'saturday'          => $t['Saturday'] ?? 0,
                    ];

                    if (isset($courseCalendar[$cid]['schedule'])) {
                        $courseCalendar[$cid]['schedule'][] = $row;
                    } else {
                        $courseCalendar[$cid] = [
                            'id'         => $cid,
                            'title'      => $products[$cid]['productName'] ?? '',
                            'courseType' => $products[$cid]['courseType'] ?? '',
                            'schedule'   => [$row],
                        ];
                    }
                }
            }
            $more = $info['more_records'] ?? false;
            $offset += $limit;
        } while ($more);

        // Corporate
        $offset = 0;
        do {
            $query = "select Name, Batch_Start_Date, Batch_End_Date, Batch_Type, City, Country, Course_Code, Course_Name, Currency,
                      Language, Number_of_Sessions, Number_of_Students, Same_time_for_all_sessions, Time_Zone, Layout
                      from Batch_Corporate
                      where id is not null
                      order by id
                      LIMIT {$offset}, {$limit}";
            [$code, $resp, $raw, $err] = $callCoql($query);
            if ($err) Log::error('CORP cURL', ['err' => $err]);

            $data = $resp['data'] ?? [];
            $info = $resp['info'] ?? [];
            if (is_array($data)) {
                foreach ($data as $t) {
                    $cid = $t['Course_Name']['id'] ?? null;
                    if (!$cid) continue;

                    $isFutureOrToday = !empty($t['Batch_Start_Date']) &&
                        (Carbon::parse($t['Batch_Start_Date'])->isToday() ||
                         Carbon::parse($t['Batch_Start_Date'])->isFuture());
                    if (!$isFutureOrToday || !array_key_exists($cid, $courses)) { continue; }

                    $row = [
                        'scheduleCouseName' => $t['Name'] ?? '',
                        'deliveryPlatform'  => '',
                        'language'          => $t['Language'] ?? '',
                        'courseCode'        => $t['Course_Code'] ?? '',
                        'batchType'         => $t['Batch_Type'] ?? '',
                        'city'              => $t['City'] ?? '',
                        'country'           => $t['Country'] ?? '',
                        'currency'          => '',
                        'courseFee'         => 0,
                        'timeZone'          => $t['Time_Zone'] ?? '',
                        'batchStartDate'    => $t['Batch_Start_Date'] ?? null,
                        'batchEndDate'      => $t['Batch_End_Date'] ?? null,
                        'startTime'         => '',
                        'endTime'           => '',
                        'batchDurationDays' => $t['Number_of_Sessions'] ?? 0,
                        'sunday'            => 0,'monday'=>0,'tuesday'=>0,'wednesday'=>0,'thursday'=>0,'friday'=>0,'saturday'=>0,
                    ];

                    if (isset($courseCalendar[$cid]['schedule'])) {
                        $courseCalendar[$cid]['schedule'][] = $row;
                    } else {
                        $courseCalendar[$cid] = [
                            'id'         => $cid,
                            'title'      => $t['Course_Name']['name'] ?? '',
                            'courseType' => 'Corporate Course',
                            'schedule'   => [$row],
                        ];
                    }
                }
            }
            $more = $info['more_records'] ?? false;
            $offset += $limit;
        } while ($more);

        // Count inserts
        $toInsert = 0;
        foreach ($courseCalendar as $c) {
            $toInsert += isset($c['schedule']) ? count($c['schedule']) : 0;
        }

        if ($toInsert === 0) {
            Log::warning('CourseSchedule sync: nothing to insert', [
                'courseCalendar_courses' => count($courseCalendar ?? []),
                'skipped' => $skipped ?? [],
            ]);
            session()->flash('warning', 'No schedules to insert. Check mapping, dates, or pricing filters. (See logs)');
            return redirect()->back();
        }

        try {
            DB::beginTransaction();

            CourseSchedule::truncate();

            $inserted = 0;
            $firstFailures = 0;

            foreach ($courseCalendar as $cKey => $cCalendar) {
                if (!isset($courses[$cKey])) {
                    if ($firstFailures < 10) {
                        Log::warning('Missing course map for Zoho ID', ['zoho_id' => $cKey]);
                        $firstFailures++;
                    }
                    continue;
                }
                foreach ($cCalendar['schedule'] as $cDetails) {
                    CourseSchedule::create([
                        'course_id'            => $courses[$cKey],
                        'delivery_platform'    => $cDetails['deliveryPlatform'] ?? null,
                        'language'             => $cDetails['language'] ?? null,
                        'course_code'          => $cDetails['courseCode'] ?? null,
                        'course_learning_mode' => $cDetails['batchType'] ?? null,
                        'course_venue'         => $cDetails['city'] ?? null,
                        'country'              => $cDetails['country'] ?? null,
                        'course_currency'      => $cDetails['currency'] ?? null,
                        'course_amount'        => $cDetails['courseFee'] ?? 0,
                        'timezone'             => $cDetails['timeZone'] ?? null,
                        'course_start_date'    => $cDetails['batchStartDate'] ?? null,
                        'course_end_date'      => $cDetails['batchEndDate'] ?? null,
                        'start_time'           => $cDetails['startTime'] ?? null,
                        'end_time'             => $cDetails['endTime'] ?? null,
                        'course_duration'      => $cDetails['batchDurationDays'] ?? null,
                        'sunday'               => $cDetails['sunday'] ?? 0,
                        'monday'               => $cDetails['monday'] ?? 0,
                        'tuesday'              => $cDetails['tuesday'] ?? 0,
                        'wednesday'            => $cDetails['wednesday'] ?? 0,
                        'thursday'             => $cDetails['thursday'] ?? 0,
                        'friday'               => $cDetails['friday'] ?? 0,
                        'saturday'             => $cDetails['saturday'] ?? 0,
                    ]);
                    $inserted++;
                }
            }

            DB::commit();

            Log::info('CourseSchedule sync: inserted', [
                'courses'  => count($courseCalendar),
                'rows'     => $inserted,
                'skipped'  => $skipped ?? [],
            ]);

            session()->flash('success', "Course schedule synced! courses=".count($courseCalendar)." • inserted={$inserted}");
            return redirect()->back();

        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error('CourseSchedule sync failed', ['ex' => $e->getMessage()]);
            session()->flash('error', 'DB write failed: '.$e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Store a newly uploaded year calendar file(s).
     */
    public function storeCalendarFile(Request $request): JsonResponse
    {
        $certificateCalendarPath = '';
        $corporateCalendarPath = '';

        if($request->ajax()){
            try{
                $validator = Validator::make($request->all(), [
                    'certificate_calendar' => 'nullable|mimes:pdf|max:2048|required_without:corporate_calendar',
                    'corporate_calendar'   => 'nullable|mimes:pdf|max:2048|required_without:certificate_calendar'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('certificate_calendar')){
                    $certificateCalendarPath = $request->file('certificate_calendar')->store('courses/calendar', 'public');
                }else{
                    if($request->existing_certificate_calendar){
                        $certificateCalendarPath = 'courses/calendar/'.$request->existing_certificate_calendar;
                    }
                }

                if($request->file('corporate_calendar')){
                    $corporateCalendarPath = $request->file('corporate_calendar')->store('courses/calendar', 'public');
                }else{
                    if($request->existing_corporate_calendar){
                        $corporateCalendarPath = 'courses/calendar/'.$request->existing_corporate_calendar;
                    }
                }

                CourseCalendarFile::upsert([
                    ['id' => 1, 'calendar' => 'certificate', 'file' => ($certificateCalendarPath ? basename($certificateCalendarPath) : null)],
                    ['id' => 2, 'calendar' => 'corporate', 'file' => ($corporateCalendarPath ? basename($corporateCalendarPath) : null)],
                ], ['id'], ['calendar', 'file']);
        
                session()->flash('success', 'Course full year calendar file uploaded successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.index')
                ], 200);
            } catch (\Exception $e) {
                session()->flash('error', 'Something went wrong. Please try again.');
                return response()->json([
                    'status' => 'error',
                ], 500);
            }
        }else{
            abort(404);
        }
    }
	public function syncReportCommit(Request $request)
{
    // Reuse the writer
    return $this->syncSchedule();
}
}
