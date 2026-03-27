<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;
use App\Models\Course\Course;
use App\Models\Course\CourseSchedule;
use App\Models\Course\CourseCalendarFile;

class CourseScheduleController extends Controller
{
    /**
     * Sync and store course schedule caledar data from ZOHO.
     */
    public function syncSchedule()
    {
        $courseCalendar = [];

        $courses = Course::where(function ($query) {
            $query->whereNotNull('zoho_id')
                ->where('zoho_id', '!=', 0);
        })->pluck('id', 'zoho_id')->toArray();
    
        // $clientId = '1000.4R6VGJZYU7KMEUV4OR9FW3V5MGCTSA';          // Replace with the actual Client ID
        // $clientSecret = '6b60fbf8388c6e78e39e167d43f317012014763a8a';  // Replace with the actual Client Secret
        // $refreshToken = '1000.9e54ce6455348025abb2d2a9fa8f4150.6c646a304ec054174c84271733690e03';
    	
    	$clientId = '1000.JOWD2CLLNY94LLXEQ0REL3MECMO2ZC';          // Replace with the actual Client ID
        $clientSecret = '9ada6109e5a502e91801304f60d56b44ced545998b';  // Replace with the actual Client Secret
        $refreshToken = '1000.871d5db305ef945c61c2108142fc129e.8178c53626db228c8bb3df8eb9ecf9c7';

        // Zoho API URL to refresh the token
        $tokenUrl = 'https://accounts.zoho.com/oauth/v2/token';

        // Prepare the data to be sent via POST
        $data = [
            'grant_type'    => 'refresh_token',
            'client_id'     => $clientId,
            'client_secret' => $clientSecret,
            'refresh_token' => $refreshToken,
        ];

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $tokenUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); // Send data as a URL-encoded string
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Disable SSL verification (only for testing, not recommended in production)

        $tokenResponse = curl_exec($ch);

        if(curl_errno($ch)) {
            echo 'cURL Error: ' . curl_error($ch);
        }

        curl_close($ch);

        $tokenResponse = json_decode($tokenResponse, true);
        $accessToken = $tokenResponse['access_token'];

        $offset = 0;
		$limit = 200;
        $coqlUrl = 'https://www.zohoapis.com/crm/v2/coql';
    	
    	do {
        	$requestBody["select_query"] = "SELECT Currency, Formula_1, Product_Names, Product_Names.id, Product_Names.Course_Type, 
                                        	Product_Names.Product_Name, Mode_Of_Delivery FROM Pricing WHERE Currency='USD' AND 
                                        	Country = 'United Arab Emirates' LIMIT $offset, $limit";

        	$ch = curl_init();

        	curl_setopt($ch, CURLOPT_URL, $coqlUrl);
        	curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestBody));
        	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        	curl_setopt($ch, CURLOPT_HTTPHEADER, [
            	'Authorization: Zoho-oauthtoken ' . $accessToken
        	]);

        	$productResponse = curl_exec($ch);
                
        	if(curl_errno($ch)) {
            	echo 'cURL Error: ' . curl_error($ch);
        	}

        	curl_close($ch);
        	$productResponse = json_decode($productResponse, true);
        	
        	if(isset($productResponse['data']) && !empty($productResponse['data']) && is_array($productResponse['data'])){
            	foreach($productResponse['data'] as $product){
                	if(isset($products[$product['Product_Names.id']])){
                    	if($product['Mode_Of_Delivery'] == 'Online'){
                        	$products[$product['Product_Names.id']]['onlinePrice'] = $product['Formula_1'];
                     	}else if($product['Mode_Of_Delivery'] == 'Offline'){
                        	$products[$product['Product_Names.id']]['offlinePrice'] = $product['Formula_1'];
                    	}
                	}else{
                    	$products[$product['Product_Names.id']] = [
                        	'productName'  => $product['Product_Names.Product_Name'],
                        	'courseType'   => $product['Product_Names.Course_Type'],
                        	'currency'     => $product['Currency'],
                        	'onlinePrice'  => (($product['Mode_Of_Delivery'] == 'Online') ? $product['Formula_1'] : 0),
                        	'offlinePrice' => (($product['Mode_Of_Delivery'] == 'Offline') ? $product['Formula_1'] : 0)
                    	];
                	}
            	}
        	}
        
        	$moreRecords = $productResponse['info']['more_records'] ?? false;
    		$offset += $limit;
       	} while ($moreRecords);


        $offset = 0;
		$limit = 200;

        do {
            $requestBody["select_query"] = "select Name, Course_Name, Course_Type, Delivery_Platform, Language, Course_Code, Batch_Type, Batch_Start_Date, Start_Time,
                                            Batch_End_Date, End_Time, Time_Zone, Country, Sunday, Monday, Tuesday, Wednesday, Thursday, Friday, Saturday, City, Currency,
                                            Batch_Duration_Days, Layout from Batch_Module where Layout = '5834669000178712068' order by id LIMIT $offset, $limit";
                                        
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $coqlUrl);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestBody));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Zoho-oauthtoken ' . $accessToken  // Use the new Access Token
            ]);

            $retailTrainingCalendarResponse = curl_exec($ch);
            
            if(curl_errno($ch)) {
                echo 'cURL Error: ' . curl_error($ch);
            }

            curl_close($ch);
            $retailTrainingCalendarResponse = json_decode($retailTrainingCalendarResponse, true);

            if(isset($retailTrainingCalendarResponse['data'])){
                foreach($retailTrainingCalendarResponse['data'] as $trainingCalendar){
                    if(
                        (
                            isset($trainingCalendar['Course_Name']['id']) && 
                            (
                                Carbon::parse($trainingCalendar['Batch_Start_Date'])->isToday() || 
                                Carbon::parse($trainingCalendar['Batch_Start_Date'])->isFuture()
                            )
                        ) &&
                        (
                            array_key_exists($trainingCalendar['Course_Name']['id'], $courses) && 
                            array_key_exists($trainingCalendar['Course_Name']['id'], $products)
                        )
                    ){
                        if(isset($courseCalendar[$trainingCalendar['Course_Name']['id']]['schedule'])){
                            $courseCalendar[$trainingCalendar['Course_Name']['id']]['schedule'][] = [
                                'scheduleCouseName' => $trainingCalendar['Name'],
                                'deliveryPlatform' => $trainingCalendar['Delivery_Platform'],
                                'language' => $trainingCalendar['Language'],
                                'courseCode' => $trainingCalendar['Course_Code'],
                                'batchType' => $trainingCalendar['Batch_Type'],
                                'city' => $trainingCalendar['City'],
                                'country' => $trainingCalendar['Country'],
                                'currency' => $products[$trainingCalendar['Course_Name']['id']]['currency'] ?? '',
                                'courseFee' => (($trainingCalendar['Batch_Type'] == 'Online') ? ($products[$trainingCalendar['Course_Name']['id']]['onlinePrice'] ?? 0) : ($products[$trainingCalendar['Course_Name']['id']]['offlinePrice'] ?? 0)),
                                'timeZone' => $trainingCalendar['Time_Zone'],
                                'batchStartDate' => $trainingCalendar['Batch_Start_Date'],
                                'batchEndDate' => $trainingCalendar['Batch_End_Date'],
                                'startTime' => $trainingCalendar['Start_Time'],
                                'endTime' => $trainingCalendar['End_Time'],
                                'batchDurationDays' => $trainingCalendar['Batch_Duration_Days'],
                                'sunday' => $trainingCalendar['Sunday'],
                                'monday' => $trainingCalendar['Monday'],
                                'tuesday' => $trainingCalendar['Tuesday'],
                                'wednesday' => $trainingCalendar['Wednesday'],
                                'thursday' => $trainingCalendar['Thursday'],
                                'friday' => $trainingCalendar['Friday'],
                                'saturday' => $trainingCalendar['Saturday']
                            ];
                        }else{
                            $courseCalendar[$trainingCalendar['Course_Name']['id']] = [
                                'id' => $trainingCalendar['Course_Name']['id'],
                                'title' => $products[$trainingCalendar['Course_Name']['id']]['productName'] ?? '', // $trainingCalendar['Course_Name']['name'],
                                'courseType' => $products[$trainingCalendar['Course_Name']['id']]['courseType'],
                                'schedule' => [
                                    [
                                        'scheduleCouseName' => $trainingCalendar['Name'],
                                        'deliveryPlatform' => $trainingCalendar['Delivery_Platform'],
                                        'language' => $trainingCalendar['Language'],
                                        'courseCode' => $trainingCalendar['Course_Code'],
                                        'batchType' => $trainingCalendar['Batch_Type'],
                                        'city' => $trainingCalendar['City'],
                                        'country' => $trainingCalendar['Country'],
                                        'currency' => $products[$trainingCalendar['Course_Name']['id']]['currency'] ?? '',
                                        'courseFee' => (($trainingCalendar['Batch_Type'] == 'Online') ? ($products[$trainingCalendar['Course_Name']['id']]['onlinePrice'] ?? 0) : ($products[$trainingCalendar['Course_Name']['id']]['offlinePrice'] ?? 0)),
                                        'timeZone' => $trainingCalendar['Time_Zone'],
                                        'batchStartDate' => $trainingCalendar['Batch_Start_Date'],
                                        'batchEndDate' => $trainingCalendar['Batch_End_Date'],
                                        'startTime' => $trainingCalendar['Start_Time'],
                                        'endTime' => $trainingCalendar['End_Time'],
                                        'batchDurationDays' => $trainingCalendar['Batch_Duration_Days'],
                                        'sunday' => $trainingCalendar['Sunday'],
                                        'monday' => $trainingCalendar['Monday'],
                                        'tuesday' => $trainingCalendar['Tuesday'],
                                        'wednesday' => $trainingCalendar['Wednesday'],
                                        'thursday' => $trainingCalendar['Thursday'],
                                        'friday' => $trainingCalendar['Friday'],
                                        'saturday' => $trainingCalendar['Saturday']
                                    ]
                                ]
                            ];
                        }
                    }
                }
            }

            $moreRecords = $productResponse['info']['more_records'] ?? false;
    		$offset += $limit;
        } while ($moreRecords);

        $offset = 0;
		$limit = 200;

        do {
            $requestBody["select_query"] = "select Name, Batch_Start_Date, Batch_End_Date, Batch_Type, City, Country, Course_Code, Course_Name, Currency, 
                                            Language, Number_of_Sessions, Number_of_Students, Same_time_for_all_sessions, Time_Zone, Layout from Batch_Corporate 
                                            where id is not null order by id LIMIT $offset, $limit";
             
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, $coqlUrl);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestBody));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Zoho-oauthtoken ' . $accessToken  // Use the new Access Token
            ]);

            $corporateTrainingCalendarResponse = curl_exec($ch);

            if(curl_errno($ch)) {
                echo 'cURL Error: ' . curl_error($ch);
            }

            curl_close($ch);
            $corporateTrainingCalendarResponse = json_decode($corporateTrainingCalendarResponse, true);
            
            if(isset($corporateTrainingCalendarResponse['data'])){
                foreach($corporateTrainingCalendarResponse['data'] as $trainingCalendar){
                    $corporateTrainingIds[] = $trainingCalendar['Course_Name']['id'];
                    if(
                        (
                            isset($trainingCalendar['Course_Name']['id']) && 
                            (
                                Carbon::parse($trainingCalendar['Batch_Start_Date'])->isToday() || 
                                Carbon::parse($trainingCalendar['Batch_Start_Date'])->isFuture()
                            )
                        ) &&
                        (
                            array_key_exists($trainingCalendar['Course_Name']['id'], $courses)
                        )
                    ){
                        if(isset($courseCalendar[$trainingCalendar['Course_Name']['id']]['schedule'])){
                            $courseCalendar[$trainingCalendar['Course_Name']['id']]['schedule'][] = [
                                'scheduleCouseName' => $trainingCalendar['Name'],
                                'deliveryPlatform' => '',
                                'language' => $trainingCalendar['Language'],
                                'courseCode' => $trainingCalendar['Course_Code'],
                                'batchType' => $trainingCalendar['Batch_Type'],
                                'city' => $trainingCalendar['City'],
                                'country' => $trainingCalendar['Country'],
                                'currency' => '',
                                'courseFee' => 0,
                                'timeZone' => $trainingCalendar['Time_Zone'],
                                'batchStartDate' => $trainingCalendar['Batch_Start_Date'],
                                'batchEndDate' => $trainingCalendar['Batch_End_Date'],
                                'startTime' => '',
                                'endTime' => '',
                                'batchDurationDays' => $trainingCalendar['Number_of_Sessions'],
                                'sunday' => 0,
                                'monday' => 0,
                                'tuesday' => 0,
                                'wednesday' => 0,
                                'thursday' => 0,
                                'friday' => 0,
                                'saturday' => 0
                            ];
                        }else{
                            $courseCalendar[$trainingCalendar['Course_Name']['id']] = [
                                'id' => $trainingCalendar['Course_Name']['id'],
                                'title' => $trainingCalendar['Course_Name']['name'] ?? '',
                                'courseType' => 'Corporate Course',
                                'schedule' => [
                                    [
                                        'scheduleCouseName' => $trainingCalendar['Name'],
                                        'deliveryPlatform' => '',
                                        'language' => $trainingCalendar['Language'],
                                        'courseCode' => $trainingCalendar['Course_Code'],
                                        'batchType' => $trainingCalendar['Batch_Type'],
                                        'city' => $trainingCalendar['City'],
                                        'country' => $trainingCalendar['Country'],
                                        'currency' => '',
                                        'courseFee' => 0,
                                        'timeZone' => $trainingCalendar['Time_Zone'],
                                        'batchStartDate' => $trainingCalendar['Batch_Start_Date'],
                                        'batchEndDate' => $trainingCalendar['Batch_End_Date'],
                                        'startTime' => '',
                                        'endTime' => '',
                                        'batchDurationDays' => $trainingCalendar['Number_of_Sessions'],
                                        'sunday' => 0,
                                        'monday' => 0,
                                        'tuesday' => 0,
                                        'wednesday' => 0,
                                        'thursday' => 0,
                                        'friday' => 0,
                                        'saturday' => 0
                                    ]
                                ]
                            ];
                        }
                    }
                }
            }

            $moreRecords = $productResponse['info']['more_records'] ?? false;
    		$offset += $limit;
        } while ($moreRecords);
    	
        // dd($moreRecords, $courseCalendar);
        
        if(!empty($courseCalendar) && is_array($courseCalendar)){
            CourseSchedule::truncate();
            
            foreach($courseCalendar as $cKey => $cCalendar){
                foreach($cCalendar['schedule'] as $cDetails){
                    CourseSchedule::create([
                        'course_id' => $courses[$cKey],
                        'delivery_platform' => $cDetails['deliveryPlatform'] ?? NULL,
                        'language' => $cDetails['language'] ?? NULL,
                        'course_code' => $cDetails['courseCode'] ?? NULL,
                        'course_learning_mode' => $cDetails['batchType'] ?? NULL,
                        'course_venue' => $cDetails['city'] ?? NULL,
                        'country' => $cDetails['country'] ?? NULL,
                        'course_currency' => $cDetails['currency'] ?? NULL,
                        'course_amount' => $cDetails['courseFee'] ?? 0,
                        'timezone' => $cDetails['timeZone'] ?? NULL,
                        'course_start_date' => $cDetails['batchStartDate'] ?? NULL,
                        'course_end_date' => $cDetails['batchEndDate'] ?? NULL,
                        'start_time' => $cDetails['startTime'] ?? NULL,
                        'end_time' => $cDetails['endTime'] ?? NULL,
                        'course_duration' => $cDetails['batchDurationDays'] ?? NULL,
                        'sunday' => $cDetails['sunday'] ?? 0,
                        'monday' => $cDetails['monday'] ?? 0,
                        'tuesday' => $cDetails['tuesday'] ?? 0,
                        'wednesday' => $cDetails['wednesday'] ?? 0,
                        'thursday' => $cDetails['thursday'] ?? 0,
                        'friday' => $cDetails['friday'] ?? 0,
                        'saturday' => $cDetails['saturday'] ?? 0
                    ]);
                }
            }
        }

        session()->flash('success', 'Course schedule synced successfully!');
        return redirect()->back();
    }
    
    /**
     * Store a newly created resource in the database.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Validation\ValidationException
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
}