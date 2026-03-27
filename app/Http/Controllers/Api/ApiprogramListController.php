<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

// Models
use App\Models\Course\Course;
use App\Models\Course\CourseSchedule;
use App\Models\Course\Category;
use App\Models\Course\Affiliation;

class ApiprogramListController extends Controller
{
    /**
     * GET /api/apiprogram-list
     *
     * Optional query params:
     * - keyword       : string
     * - schedule      : YYYY-MM-DD (any day in the month to filter)
     * - category      : CSV of category name_en values
     * - certification : CSV of affiliation short_name_en values
     * - language      : CSV of language codes/labels stored in DB
     * - format        : CSV of course_learning_mode values (e.g., Online, Offline)
     * - location      : CSV of course_venue values
     * - per_page      : 1..50 (default 5)
     * - page          : integer (pagination)
     * - course_type   : CERTIFICATION_TRAINING or CORPORATE_TRAINING (default CERTIFICATION_TRAINING)
     */
    public function index(Request $request)
    {
        // ---- Validate (lenient) ----
        $request->validate([
            'keyword'       => ['nullable','string','max:200'],
            'schedule'      => ['nullable','date'],
            'category'      => ['nullable','string'],
            'certification' => ['nullable','string'],
            'language'      => ['nullable','string'],
            'format'        => ['nullable','string'],
            'location'      => ['nullable','string'],
            'per_page'      => ['nullable','integer','min:1','max:50'],
            'page'          => ['nullable','integer','min:1'],
            'course_type'   => ['nullable','in:CERTIFICATION_TRAINING,CORPORATE_TRAINING'],
        ]);

        // Helpers
        $csv = fn(string $key) => collect(explode(',', (string)$request->input($key,'')))
            ->map(fn($v)=>trim($v))->filter()->values()->all();

        $today        = Carbon::today();
        $afterSix     = $today->copy()->addMonths(6);
        $afterTwelve  = $today->copy()->addMonths(12);

        $categories     = $request->filled('category')      ? $csv('category')      : [];
        $certifications = $request->filled('certification') ? $csv('certification') : [];
        $languages      = $request->filled('language')      ? $csv('language')      : [];
        $formats        = $request->filled('format')        ? $csv('format')        : [];
        $locations      = $request->filled('location')      ? $csv('location')      : [];

        $courseType = strtoupper($request->input('course_type', 'CERTIFICATION_TRAINING'));

        // ---------------------------------------------------------------------
        // COURSES list (category, affiliation, images, nearest schedule, links)
        // ---------------------------------------------------------------------
        $courseQuery = Course::query()
            ->with([
                'category',
                'affiliation',
                'nearestSchedule' => function ($q) use ($formats) {
                    if (!empty($formats)) {
                        $q->whereIn('course_learning_mode', $formats);
                    }
                    $q->whereDate('course_start_date', '>=', now())
                      ->orderBy('course_start_date', 'asc')
                      ->limit(1);
                },
            ])
            ->where('course_type', $courseType);

        if ($kw = $request->input('keyword')) {
            $courseQuery->where(function ($q) use ($kw) {
                $q->where('course_short_title_en','like',"%{$kw}%")
                  ->orWhere('course_title_en','like',"%{$kw}%");
            });
        }

        if (!empty($categories)) {
            $courseQuery->whereHas('category', fn($q)=>$q->whereIn('name_en',$categories));
        }
        if (!empty($certifications)) {
            $courseQuery->whereHas('affiliation', fn($q)=>$q->whereIn('short_name_en',$certifications));
        }
        if (!empty($languages)) {
            $courseQuery->whereIn('course_language', $languages);
        }
        if (!empty($formats)) {
            $courseQuery->whereHas('schedules', fn($q)=>$q->whereIn('course_learning_mode',$formats));
        }
        if (!empty($locations)) {
            $courseQuery->whereHas('schedules', fn($q)=>$q->whereIn('course_venue',$locations));
        }

        if ($request->filled('schedule')) {
            $m = Carbon::parse($request->input('schedule'));
            $start = $m->copy()->startOfMonth()->toDateString();
            $courseQuery->whereHas('schedules', function ($q) use ($start, $formats) {
                if (!empty($formats)) $q->whereIn('course_learning_mode',$formats);
                $q->whereDate('course_start_date','>=',$start);
            });
        }

        $perPage = (int) $request->input('per_page', 5);
        $courses = $courseQuery
            ->orderBy('id','desc')
            ->paginate($perPage)
            ->appends($request->query());

        // Map items to the exact fields your Blade uses (plus image URLs)
        $items = $courses->getCollection()->map(function ($c) {
            $nearest = $c->nearestSchedule;

            // Image URLs via public disk (works with storage:link & S3)
            $courseImage = $c->course_image
                ? Storage::disk('public')->url('courses/courses/'.$c->course_image)
                : asset('assets/frontend/images/placeholder-course.png');

            $affLogo = optional($c->affiliation)->image
                ? Storage::disk('public')->url('courses/affiliations/'.$c->affiliation->image)
                : asset('assets/frontend/images/placeholder-affiliation.png');

            // Schedule formatting like Blade
            $start = $nearest ? Carbon::parse($nearest->course_start_date) : null;
            $end   = $nearest ? Carbon::parse($nearest->course_end_date) : null;

            $formattedStart = $start ? $start->format('M d') : null;
            $formattedEnd   = $end   ? $end->format("M d ’y") : null;

            // Online/Offline pill label
            $modeLabel = $nearest?->course_learning_mode === 'Online' ? 'Online'
                       : ($nearest?->course_learning_mode ? 'Offline' : null);

            return [
                'id'              => $c->id,
                'slug'            => $c->slug,
                'type'            => $c->course_type,
                'short_title'     => $c->course_short_title_en,
                'title'           => $c->course_title_en,
                'language'        => $c->course_language,
                'category_name'   => optional($c->category)->name_en,
                'certification'   => optional($c->affiliation)->short_name_en,

                // ✅ image fields exposed in JSON
                'course_image'    => $courseImage,
                'affiliation_logo'=> $affLogo,

                'nearest_schedule' => $nearest ? [
                    'start_date_display' => $formattedStart,     // "Sep 05"
                    'end_date_display'   => $formattedEnd,       // "Sep 10 ’25"
                    'start_date'         => optional($nearest->course_start_date)?->toDateString(),
                    'end_date'           => optional($nearest->course_end_date)?->toDateString(),
                    'duration_days'      => $nearest->course_duration,
                    'mode'               => $nearest->course_learning_mode,
                    'mode_pill'          => $modeLabel,          // "Online" or "Offline"
                    'venue'              => $nearest->course_venue,
                ] : null,

                'links' => [
                    'details'  => route('training.course.details', $c->slug),
                    'register' => [
                        'modal_target' => 'registration-form-modal',
                        'course_id'    => $c->id,
                        'short_title'  => $c->course_short_title_en,
                        'title'        => $c->course_title_en,
                    ],
                ],
            ];
        })->values();

        // ---------------------------------------------------------------------
        // CALENDAR (today → +12m), grouped by "F | Y"
        // ---------------------------------------------------------------------
        $sixMonthGroups = [];
        $twelveMonthGroups = [];

        try {
            $scheduleBase = CourseSchedule::query()
                ->with(['course' => fn($q) => $q->select('id','slug','course_title_en','course_type')])
                ->whereBetween('course_start_date', [$today, $afterTwelve])
                ->whereHas('course', fn($q)=>$q->where('course_type',$courseType));

            if ($kw = $request->input('keyword')) {
                $scheduleBase->where(function($q) use ($kw) {
                    $q->where('course_short_title_en','like',"%{$kw}%")
                      ->orWhere('course_title_en','like',"%{$kw}%");
                });
            }
            if (!empty($formats))   $scheduleBase->whereIn('course_learning_mode',$formats);
            if (!empty($locations)) $scheduleBase->whereIn('course_venue',$locations);

            if ($request->filled('schedule')) {
                $m = Carbon::parse($request->input('schedule'));
                $s = $m->copy()->startOfMonth()->toDateString();
                $e = $m->copy()->endOfMonth()->toDateString();
                $scheduleBase->whereDate('course_start_date','>=',$s)
                             ->whereDate('course_end_date','<=',$e);
            }

            $schedules = $scheduleBase->orderBy('course_start_date','asc')->get();

            $groupWindow = function ($from, $to) use ($schedules) {
                return $schedules->filter(function ($s) use ($from,$to) {
                    $d = Carbon::parse($s->course_start_date);
                    return $d->between($from,$to);
                })->groupBy(function ($s) {
                    return Carbon::parse($s->course_start_date)->format('F | Y');
                })->map(function ($items, $label) {
                    return [
                        'label' => $label,
                        'items' => $items->map(function ($s) {
                            return [
                                'course_id'    => $s->course_id,
                                'course_slug'  => optional($s->course)->slug,
                                'course_title' => optional($s->course)->course_title_en,
                                'start_date'   => optional($s->course_start_date)?->toDateString(),
                                'end_date'     => optional($s->course_end_date)?->toDateString(),
                                'mode'         => $s->course_learning_mode,
                                'venue'        => $s->course_venue,
                            ];
                        })->values()->all(),
                    ];
                })->values()->all();
            };

            $sixMonthGroups    = $groupWindow($today, $afterSix);
            $twelveMonthGroups = $groupWindow($afterSix, $afterTwelve);
        } catch (\Throwable $e) {
            Log::warning('Calendar build skipped', ['error' => $e->getMessage()]);
            $sixMonthGroups = [];
            $twelveMonthGroups = [];
        }

        // ---------------------------------------------------------------------
        // FILTER OPTIONS (dropdowns) — categories + certifications
        // ---------------------------------------------------------------------
        $filterOptions = [
            'categories'     => [],
            'certifications' => [],
        ];
        try {
            $filterOptions['categories']     = Category::where('course_type','CERTIFICATION_TRAINING')->pluck('name_en','name_en');
            $filterOptions['certifications'] = Affiliation::pluck('short_name_en','short_name_en');
        } catch (\Throwable $e) {
            Log::warning('Filter options skipped', ['error' => $e->getMessage()]);
        }

        // ---------------------------------------------------------------------
        // RESPONSE
        // ---------------------------------------------------------------------
        return response()->json([
            'meta' => [
                'title'       => 'API Program List',
                'description' => 'Programs API in JSON format',
                'course_type' => $courseType,
            ],
            'filters' => [
                'active' => [
                    'keyword'       => $request->input('keyword'),
                    'schedule'      => $request->input('schedule'),
                    'category'      => $categories,
                    'certification' => $certifications,
                    'language'      => $languages,
                    'format'        => $formats,
                    'location'      => $locations,
                ],
                'options' => $filterOptions,
            ],
            'courses' => [
                'items' => $items,
                'pagination' => [
                    'current_page' => $courses->currentPage(),
                    'per_page'     => $courses->perPage(),
                    'total'        => $courses->total(),
                    'last_page'    => $courses->lastPage(),
                    'next_page_url'=> $courses->nextPageUrl(),
                    'prev_page_url'=> $courses->previousPageUrl(),
                ],
            ],
            'calendar' => [
                'six_month'    => $sixMonthGroups,
                'twelve_month' => $twelveMonthGroups,
            ],
        ]);
    }
}
