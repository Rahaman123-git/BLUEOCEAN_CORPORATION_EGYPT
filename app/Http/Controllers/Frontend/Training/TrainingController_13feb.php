<?php

namespace App\Http\Controllers\Frontend\Training;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Course\Category;
use App\Models\Course\Affiliation;
use App\Models\Course\Course;
use App\Models\Course\CourseSchedule;
use App\Models\Course\Seminar;
use App\Models\Course\Testimonial;
use App\Models\Course\CourseCalendarFile;
use App\Models\WebsiteContent\Marquee;
use Carbon\Carbon;
use Illuminate\Support\Str;

class TrainingController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        // $data['metaKeyword'] = '';
        // $data['metaAuthor'] = '';
        // $data['metaDetails'] = '';
        // $data['metaSchema'] = '';
        // $data['metaCanonical'] = '';
        // title, canoial, details, author,

        // Get the first seminar today or in the future
        $highlightedSeminar = Seminar::where('seminar_date', '>=', Carbon::now())
            ->orderBy('seminar_date', 'asc')
            ->first();

        // Get other upcoming seminars
        $upcomingSeminarsQuery = Seminar::where('seminar_date', '>', Carbon::now())
            ->orderBy('seminar_date', 'asc');

        if ($highlightedSeminar) {
            $upcomingSeminarsQuery->where('id', '!=', $highlightedSeminar->id);
        }

        $upcomingSeminars = $upcomingSeminarsQuery->get();

        $testimonials['TEXT_TESTIMONIAL'] = Testimonial::where([
            'testimonial_type' => 'TEXT_TESTIMONIAL', 
            // 'course_id' => $course->id
        ])->orderBy('id', 'DESC')->get();

        $testimonials['VIDEO_TESTIMONIAL'] = Testimonial::where([
            'testimonial_type' => 'VIDEO_TESTIMONIAL', 
            // 'course_id' => $course->id
        ])->orderBy('id', 'DESC')->get();

    	$marquees = Marquee::where('page_type', 'TRAINING')->get();
    
        return view('frontend.training.home', compact('highlightedSeminar', 'upcomingSeminars', 'testimonials', 'marquees'));
    }
    
    public function certificationProgramsOld(Request $request): View|JsonResponse
    {
        $courseType = 'CERTIFICATION_TRAINING';
        $today = Carbon::today();
        $afterSixMonths = $today->copy()->addMonths(6);
        $afterTwelveMonths = $today->copy()->addMonths(12);
        
        $courseQuery = Course::with([
            'category',
            'affiliation',
            // 'nearestSchedule',
            'nearestSchedule' => function ($query) use ($request) {
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }
                $query->orderByRaw('ABS(DATEDIFF(course_start_date, CURDATE()))')
                    ->orderBy('course_start_date', 'asc');
            }
        ])
        ->where('course_type', 'CERTIFICATION_TRAINING');

        if($request->filled('keyword')){
            $keyword = $request->input('keyword');
            $courseQuery->where(function ($query) use ($keyword) {
                $query->where('course_short_title_en', 'like', "%$keyword%")
                    ->orWhere('course_title_en', 'like', "%$keyword%");
            });
        }

        if($request->filled('schedule')){
            $courseMonth = Carbon::parse($request->input('schedule'));
                    
            $startOfMonth = $courseMonth->startOfMonth()->format('Y-m-d');
            $endOfMonth = $courseMonth->endOfMonth()->format('Y-m-d');

            $courseQuery->whereHas('nearestSchedule', function ($query) use ($startOfMonth, $endOfMonth, $request){
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }
                
                $query->whereDate('course_start_date', '>=', $startOfMonth)
                    ->whereDate('course_end_date', '<=', $endOfMonth)
                    ->limit(1);

            });
        }else{
            // No specific schedule: find nearest with optional format filter
            $courseQuery->whereHas('nearestSchedule', function ($query) use ($request) {
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }

                $query->orderByRaw("ABS(DATEDIFF(course_start_date, CURDATE()))")
                    ->limit(1);
            });

            /* // No course schedule: show nearest to today (past/running/future)
            $courseQuery->whereHas('nearestSchedule', function ($query){
                $query->orderByRaw("ABS(DATEDIFF(course_start_date, CURDATE()))")->limit(1);;
            }); */
        }

        if ($request->filled('category')){
            $categories = explode(',', $request->input('category'));
            $courseQuery->whereHas('category', function ($query) use ($categories){
                $query->whereIn('name_en', $categories);
            });
        }
        
        if ($request->filled('certification')){
            $certifications = explode(',', $request->input('certification'));
            $courseQuery->whereHas('affiliation', function ($query) use ($certifications){
                $query->whereIn('short_name_en', $certifications);
            });
        }

        if($request->filled('language')){
            $languages = explode(',', $request->input('language'));
            $courseQuery->whereIn('course_language', $languages);
        }
        
        if($request->filled('format')){
            $formats = explode(',', $request->input('format'));
            $courseQuery->whereHas('schedules', function ($q) use ($formats){
                $q->whereIn('course_learning_mode', $formats);
            });
        }
            
        if($request->filled('location')){
            $locations = explode(',', $request->input('location'));
            $courseQuery->whereHas('schedules', function ($q) use ($locations){
                $q->whereIn('course_venue', $locations);
            });
        }
        
        $courses = $courseQuery->paginate(5)->appends(request()->query());
        
        // Single Query: fetch all schedules from today → +12 months
        $courseSchedules = CourseSchedule::whereHas('course', function ($query) use ($request){
            $query->where('course_type', 'CERTIFICATION_TRAINING');

            if($request->filled('keyword')){
                $keyword = $request->input('keyword');
                $query->where(function ($q) use ($keyword) {
                    $q->where('course_short_title_en', 'like', "%$keyword%")
                        ->orWhere('course_title_en', 'like', "%$keyword%");
                });
            }

            if($request->filled('schedule')){
                $courseMonth = Carbon::parse($request->input('schedule'));
                        
                $startOfMonth = $courseMonth->startOfMonth()->format('Y-m-d');
                $endOfMonth = $courseMonth->endOfMonth()->format('Y-m-d');
    
                $query->whereHas('schedules', function ($q) use ($startOfMonth, $endOfMonth, $request){
                    $q->whereDate('course_start_date', '>=', $startOfMonth)
                        ->whereDate('course_end_date', '<=', $endOfMonth);

                    if ($request->filled('format')) {
                        $formats = explode(',', $request->input('format'));
                        $q->whereIn('course_learning_mode', $formats);
                    }
                });
            }
            
            if ($request->filled('category')){
                $categories = explode(',', $request->input('category'));
                $query->whereHas('category', function ($q) use ($categories){
                    $q->whereIn('name_en', $categories);
                });
            }
            
            if ($request->filled('certification')){
                $certifications = explode(',', $request->input('certification'));
                $query->whereHas('affiliation', function ($q) use ($certifications){
                    $q->whereIn('short_name_en', $certifications);
                });
            }

            if($request->filled('language')){
                $languages = explode(',', $request->input('language'));
                $query->whereIn('course_language', $languages);
            }
            
            if($request->filled('format')){
                $formats = explode(',', $request->input('format'));
                $query->whereHas('schedules', function ($q) use ($formats){
                    $q->whereIn('course_learning_mode', $formats);
                });
            }
                
            if($request->filled('location')){
                $locations = explode(',', $request->input('location'));
                $query->whereHas('schedules', function ($q) use ($locations){
                    $q->whereIn('course_venue', $locations);
                });
            }
        })
        ->whereBetween('course_start_date', [$today, $afterTwelveMonths])
        // Optional: learning mode filter at the schedule level too
        ->when($request->filled('format'), function ($query) use ($request) {
            $formats = explode(',', $request->input('format'));
            $query->whereIn('course_learning_mode', $formats);
        })
        ->orderBy('course_start_date', 'asc')
        ->get();
        
        // Split into two sets manually:
        $firstSixMonthsSchedules = $courseSchedules->filter(function ($schedule) use ($today, $afterSixMonths){
            $startDate = Carbon::parse($schedule->course_start_date);
            return $startDate->between($today, $afterSixMonths);
        })->groupBy(function ($schedule){
            return Carbon::parse($schedule->course_start_date)->format('F | Y');
        });

        $nextSixMonthsSchedules = $courseSchedules->filter(function ($schedule) use ($afterSixMonths, $afterTwelveMonths){
            $startDate = Carbon::parse($schedule->course_start_date);
            return $startDate->between($afterSixMonths, $afterTwelveMonths);
        })->groupBy(function ($schedule){
            return Carbon::parse($schedule->course_start_date)->format('F | Y');
        });

        if($request->ajax()){
            return response()->json([
                'success' => true,
                'courses' => view('frontend.training.include.courses')
                    ->with(['courses' => $courses])
                    ->render(),
                'pagination' => view('frontend.training.include.pagination')
                    ->with(['courses' => $courses])
                    ->render(),
                'calendar' => view('frontend.training.include.calendar')
                    ->with(['courseType' => $courseType, 'firstSixMonthsSchedules' => $firstSixMonthsSchedules, 'nextSixMonthsSchedules' => $nextSixMonthsSchedules])
                    ->render()
            ]);
        }else{
            $filterQueries = $request->except('page');
            $courseCategories = Category::where('course_type', 'CERTIFICATION_TRAINING')->pluck('name_en', 'name_en');
            $coursesCertifications = Affiliation::pluck('short_name_en', 'short_name_en');
            $courseShortTitles = (clone $courseQuery)->pluck('course_short_title_en');
            $courseTitles = (clone $courseQuery)->pluck('course_title_en');
            $courseLocations = CourseSchedule::get()->pluck('course_venue')->unique()->mapWithKeys(function ($item) {
                return [$item => $item];
            });
            $courseCalendarFile = CourseCalendarFile::where('calendar', 'certificate')->pluck('file', 'calendar')->toArray();
          
            return view('frontend.training.certification-program', compact('courseType', 'filterQueries', 'courseCategories',
                'coursesCertifications', 'courses', 'courseShortTitles', 'courseTitles', 'courseLocations', 'firstSixMonthsSchedules', 
                'nextSixMonthsSchedules', 'courseCalendarFile'));
        }
    }
	
	public function certificationPrograms(Request $request): View|JsonResponse
    {
        $courseType = 'CERTIFICATION_TRAINING';
        $today = Carbon::today();
        $afterSixMonths = $today->copy()->addMonths(6);
        $afterTwelveMonths = $today->copy()->addMonths(12);

        $courseQuery = Course::with([
            'category',
            'affiliation',
            // 'nearestSchedule',
            'nearestSchedule' => function ($query) use ($request) {
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }
                /* $query->orderByRaw('ABS(DATEDIFF(course_start_date, CURDATE()))')
                    ->orderBy('course_start_date', 'asc'); */
                $query->whereDate('course_start_date', '>=', now())
                    ->orderBy('course_start_date', 'asc')
                    ->limit(1);
            }
        ])
        ->withMin(['schedules as nearest_start_date' => function ($query) use ($request) {
            $query->whereDate('course_start_date', '>=', now());

            if ($request->filled('format')) {
                $formats = explode(',', $request->input('format'));
                $query->whereIn('course_learning_mode', $formats);
            }
        }], 'course_start_date')
        ->where('course_type', 'CERTIFICATION_TRAINING')
        ->orderByRaw('ISNULL(nearest_start_date), nearest_start_date ASC');

        if($request->filled('keyword')){
            $keyword = $request->input('keyword');
            $courseQuery->where(function ($query) use ($keyword) {
                $query->where('course_short_title_en', 'like', "%$keyword%")
                    ->orWhere('course_title_en', 'like', "%$keyword%");
            });
        }
 
        if($request->filled('schedule')){
            $courseMonth = Carbon::parse($request->input('schedule'));
                    
            $startOfMonth = $courseMonth->startOfMonth()->format('Y-m-d');
            $endOfMonth = $courseMonth->endOfMonth()->format('Y-m-d');

            $courseQuery->whereHas('schedules', function ($query) use ($startOfMonth, $endOfMonth, $request) {
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }

                $query->whereDate('course_start_date', '>=', $startOfMonth);
                    // ->whereDate('course_end_date', '<=', $endOfMonth);
                    // ->limit(1)

            });
        }/* else{
            // No specific schedule: find nearest with optional format filter
            $courseQuery->whereHas('nearestSchedule', function ($query) use ($request) {
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }

                $query->orderByRaw("ABS(DATEDIFF(course_start_date, CURDATE()))")
                    ->limit(1);
            });

            /* // No course schedule: show nearest to today (past/running/future)
            $courseQuery->whereHas('nearestSchedule', function ($query){
                $query->orderByRaw("ABS(DATEDIFF(course_start_date, CURDATE()))")->limit(1);;
            }); *
        } */

        if ($request->filled('category')){
            $categories = explode(',', $request->input('category'));
            $courseQuery->whereHas('category', function ($query) use ($categories){
                $query->whereIn('name_en', $categories);
            });
        }
        
        if ($request->filled('certification')){
            $certifications = explode(',', $request->input('certification'));
            $courseQuery->whereHas('affiliation', function ($query) use ($certifications){
                $query->whereIn('short_name_en', $certifications);
            });
        }

        if($request->filled('language')){
            $languages = explode(',', $request->input('language'));
            $courseQuery->whereIn('course_language', $languages);
        }
        
        if($request->filled('format')){
            $formats = explode(',', $request->input('format'));
            $courseQuery->whereHas('schedules', function ($q) use ($formats){
                $q->whereIn('course_learning_mode', $formats);
            });
        }
            
        if($request->filled('location')){
            $locations = explode(',', $request->input('location'));
            $courseQuery->whereHas('schedules', function ($q) use ($locations){
                $q->whereIn('course_venue', $locations);
            });
        }
        
        $courses = $courseQuery->paginate(5)->appends(request()->query());
        
        // Single Query: fetch all schedules from today → +12 months
        $courseSchedules = CourseSchedule::whereHas('course', function ($query) use ($request){
            $query->where('course_type', 'CERTIFICATION_TRAINING');

            if($request->filled('keyword')){
                $keyword = $request->input('keyword');
                $query->where(function ($q) use ($keyword) {
                    $q->where('course_short_title_en', 'like', "%$keyword%")
                        ->orWhere('course_title_en', 'like', "%$keyword%");
                });
            }

            if($request->filled('schedule')){
                $courseMonth = Carbon::parse($request->input('schedule'));
                        
                $startOfMonth = $courseMonth->startOfMonth()->format('Y-m-d');
                $endOfMonth = $courseMonth->endOfMonth()->format('Y-m-d');
    
                $query->whereHas('schedules', function ($q) use ($startOfMonth, $endOfMonth, $request){
                    $q->whereDate('course_start_date', '>=', $startOfMonth)
                        ->whereDate('course_end_date', '<=', $endOfMonth);

                    if ($request->filled('format')) {
                        $formats = explode(',', $request->input('format'));
                        $q->whereIn('course_learning_mode', $formats);
                    }
                });
            }
            
            if ($request->filled('category')){
                $categories = explode(',', $request->input('category'));
                $query->whereHas('category', function ($q) use ($categories){
                    $q->whereIn('name_en', $categories);
                });
            }
            
            if ($request->filled('certification')){
                $certifications = explode(',', $request->input('certification'));
                $query->whereHas('affiliation', function ($q) use ($certifications){
                    $q->whereIn('short_name_en', $certifications);
                });
            }

            if($request->filled('language')){
                $languages = explode(',', $request->input('language'));
                $query->whereIn('course_language', $languages);
            }
            
            if($request->filled('format')){
                $formats = explode(',', $request->input('format'));
                $query->whereHas('schedules', function ($q) use ($formats){
                    $q->whereIn('course_learning_mode', $formats);
                });
            }
                
            if($request->filled('location')){
                $locations = explode(',', $request->input('location'));
                $query->whereHas('schedules', function ($q) use ($locations){
                    $q->whereIn('course_venue', $locations);
                });
            }
        })
        ->whereBetween('course_start_date', [$today, $afterTwelveMonths])
        // Optional: learning mode filter at the schedule level too
        ->when($request->filled('format'), function ($query) use ($request) {
            $formats = explode(',', $request->input('format'));
            $query->whereIn('course_learning_mode', $formats);
        })
        ->orderBy('course_start_date', 'asc')
        ->get();
        
        // Split into two sets manually:
        $firstSixMonthsSchedules = $courseSchedules->filter(function ($schedule) use ($today, $afterSixMonths){
            $startDate = Carbon::parse($schedule->course_start_date);
            return $startDate->between($today, $afterSixMonths);
        })->groupBy(function ($schedule){
            return Carbon::parse($schedule->course_start_date)->format('F | Y');
        });

        $nextSixMonthsSchedules = $courseSchedules->filter(function ($schedule) use ($afterSixMonths, $afterTwelveMonths){
            $startDate = Carbon::parse($schedule->course_start_date);
            return $startDate->between($afterSixMonths, $afterTwelveMonths);
        })->groupBy(function ($schedule){
            return Carbon::parse($schedule->course_start_date)->format('F | Y');
        });

        if($request->ajax()){
            return response()->json([
                'success' => true,
                'courses' => view('frontend.training.include.courses')
                    ->with(['courses' => $courses])
                    ->render(),
                'pagination' => view('frontend.training.include.pagination')
                    ->with(['courses' => $courses])
                    ->render(),
                'calendar' => view('frontend.training.include.calendar')
                    ->with(['courseType' => $courseType, 'firstSixMonthsSchedules' => $firstSixMonthsSchedules, 'nextSixMonthsSchedules' => $nextSixMonthsSchedules])
                    ->render()
            ]);
        }else{
            $filterQueries = $request->except('page');
            $courseCategories = Category::where('course_type', 'CERTIFICATION_TRAINING')->pluck('name_en', 'name_en');
            $coursesCertifications = Affiliation::pluck('short_name_en', 'short_name_en');
            $courseShortTitles = (clone $courseQuery)->pluck('course_short_title_en');
            $courseTitles = (clone $courseQuery)->pluck('course_title_en');
            $courseLocations = CourseSchedule::get()->pluck('course_venue')->unique()->mapWithKeys(function ($item) {
                return [$item => $item];
            });
            $courseCalendarFile = CourseCalendarFile::where('calendar', 'certificate')->pluck('file', 'calendar')->toArray();
          
            return view('frontend.training.certification-program', compact('courseType', 'filterQueries', 'courseCategories',
                'coursesCertifications', 'courses', 'courseShortTitles', 'courseTitles', 'courseLocations', 'firstSixMonthsSchedules', 
                'nextSixMonthsSchedules', 'courseCalendarFile'));
        }
    }

    public function affliations(): View
    {
        $affiliations = Affiliation::with('courses')->get();
        return view('frontend.training.affliation', compact('affiliations'));
    }
    
    public function affliationsExpanded(): View
    {
        $affiliations = Affiliation::with('courses')->get();
        return view('frontend.training.affliation-expanded', compact('affiliations'));
    }
    
    public function corporate(): View
    {
        $courses = Course::where('course_type', 'CORPORATE_TRAINING')
            ->inRandomOrder()
            ->take(9)
            ->get();
        $testimonials['TEXT_TESTIMONIAL'] = Testimonial::where([
            'testimonial_type' => 'TEXT_TESTIMONIAL', 
            // 'course_id' => $course->id
        ])->orderBy('id', 'DESC')->get();

        $testimonials['VIDEO_TESTIMONIAL'] = Testimonial::where([
            'testimonial_type' => 'VIDEO_TESTIMONIAL', 
            // 'course_id' => $course->id
        ])->orderBy('id', 'DESC')->get();

        return view('frontend.training.corporate', compact('courses', 'testimonials'));
    }

    public function corporateProgramsOld(Request $request): View|JsonResponse
    {
        $courseType = 'CORPORATE_TRAINING';
        $today = Carbon::today();
        $afterSixMonths = $today->copy()->addMonths(6);
        $afterTwelveMonths = $today->copy()->addMonths(12);

        $courseQuery = Course::with([
            'category',
            'affiliation',
            // 'nearestSchedule',
            'nearestSchedule' => function ($query) use ($request) {
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }
                $query->orderByRaw('ABS(DATEDIFF(course_start_date, CURDATE()))')
                    ->orderBy('course_start_date', 'asc');
            }
        ])
        ->where('course_type', 'CORPORATE_TRAINING');

        if($request->filled('keyword')){
            $keyword = $request->input('keyword');
            $courseQuery->where(function ($query) use ($keyword) {
                $query->where('course_short_title_en', 'like', "%$keyword%")
                    ->orWhere('course_title_en', 'like', "%$keyword%");
            });
        }

        if($request->filled('schedule')){
            $courseMonth = Carbon::parse($request->input('schedule'));
                    
            $startOfMonth = $courseMonth->startOfMonth()->format('Y-m-d');
            $endOfMonth = $courseMonth->endOfMonth()->format('Y-m-d');

            $courseQuery->whereHas('nearestSchedule', function ($query) use ($startOfMonth, $endOfMonth, $request){
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }

                $query->whereDate('course_start_date', '>=', $startOfMonth)
                    ->whereDate('course_end_date', '<=', $endOfMonth)
                    ->limit(1);

            });
        }else{
            // No specific schedule: find nearest with optional format filter
            $courseQuery->whereHas('nearestSchedule', function ($query) use ($request) {
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }

                $query->orderByRaw("ABS(DATEDIFF(course_start_date, CURDATE()))")
                    ->limit(1);
            });

            /* // No course schedule: show nearest to today (past/running/future)
            $courseQuery->whereHas('nearestSchedule', function ($query){
                $query->orderByRaw("ABS(DATEDIFF(course_start_date, CURDATE()))")->limit(1);;
            }); */
        }

        if ($request->filled('category')){
            $categories = explode(',', $request->input('category'));
            $courseQuery->whereHas('category', function ($query) use ($categories){
                $query->whereIn('name_en', $categories);
            });
        }
        
        if ($request->filled('certification')){
            $certifications = explode(',', $request->input('certification'));
            $courseQuery->whereHas('affiliation', function ($query) use ($certifications){
                $query->whereIn('short_name_en', $certifications);
            });
        }

        if($request->filled('language')){
            $languages = explode(',', $request->input('language'));
            $courseQuery->whereIn('course_language', $languages);
        }
        
        if($request->filled('format')){
            $formats = explode(',', $request->input('format'));
            $courseQuery->whereHas('schedules', function ($q) use ($formats){
                $q->whereIn('course_learning_mode', $formats);
            });
        }
            
        if($request->filled('location')){
            $locations = explode(',', $request->input('location'));
            $courseQuery->whereHas('schedules', function ($q) use ($locations){
                $q->whereIn('course_venue', $locations);
            });
        }
        
        $courses = $courseQuery->paginate(5)->appends(request()->query());;
        
        // Single Query: fetch all schedules from today → +12 months
        $courseSchedules = CourseSchedule::whereHas('course', function ($query) use ($request){
            $query->where('course_type', 'CORPORATE_TRAINING');

            if($request->filled('keyword')){
                $keyword = $request->input('keyword');
                $query->where(function ($query) use ($keyword) {
                    $query->where('course_short_title_en', 'like', "%$keyword%")
                        ->orWhere('course_title_en', 'like', "%$keyword%");
                });
            }

            if($request->filled('schedule')){
                $courseMonth = Carbon::parse($request->input('schedule'));
                        
                $startOfMonth = $courseMonth->startOfMonth()->format('Y-m-d');
                $endOfMonth = $courseMonth->endOfMonth()->format('Y-m-d');
    
                $query->whereHas('schedules', function ($q) use ($startOfMonth, $endOfMonth, $request){
                    $q->whereDate('course_start_date', '>=', $startOfMonth)
                        ->whereDate('course_end_date', '<=', $endOfMonth);

                    if ($request->filled('format')) {
                        $formats = explode(',', $request->input('format'));
                        $q->whereIn('course_learning_mode', $formats);
                    }
                });
            }
            
            if ($request->filled('category')){
                $categories = explode(',', $request->input('category'));
                $query->whereHas('category', function ($q) use ($categories){
                    $q->whereIn('name_en', $categories);
                });
            }
            
            if ($request->filled('certification')){
                $certifications = explode(',', $request->input('certification'));
                $query->whereHas('affiliation', function ($q) use ($certifications){
                    $q->whereIn('short_name_en', $certifications);
                });
            }

            if($request->filled('language')){
                $languages = explode(',', $request->input('language'));
                $query->whereIn('course_language', $languages);
            }
            
            if($request->filled('format')){
                $formats = explode(',', $request->input('format'));
                $query->whereHas('schedules', function ($q) use ($formats){
                    $q->whereIn('course_learning_mode', $formats);
                });
            }
                
            if($request->filled('location')){
                $locations = explode(',', $request->input('location'));
                $query->whereHas('schedules', function ($q) use ($locations){
                    $q->whereIn('course_venue', $locations);
                });
            }
        })
        ->whereBetween('course_start_date', [$today, $afterTwelveMonths])
        // Optional: learning mode filter at the schedule level too
        ->when($request->filled('format'), function ($query) use ($request) {
            $formats = explode(',', $request->input('format'));
            $query->whereIn('course_learning_mode', $formats);
        })
        ->orderBy('course_start_date', 'asc')
        ->get();
        
        // Split into two sets manually:
        $firstSixMonthsSchedules = $courseSchedules->filter(function ($schedule) use ($today, $afterSixMonths){
            $startDate = Carbon::parse($schedule->course_start_date);
            return $startDate->between($today, $afterSixMonths);
        })->groupBy(function ($schedule){
            return Carbon::parse($schedule->course_start_date)->format('F | Y');
        });

        $nextSixMonthsSchedules = $courseSchedules->filter(function ($schedule) use ($afterSixMonths, $afterTwelveMonths){
            $startDate = Carbon::parse($schedule->course_start_date);
            return $startDate->between($afterSixMonths, $afterTwelveMonths);
        })->groupBy(function ($schedule){
            return Carbon::parse($schedule->course_start_date)->format('F | Y');
        });

        if($request->ajax()){
            return response()->json([
                'success' => true,
                'courses' => view('frontend.training.include.courses')
                    ->with(['courses' => $courses])
                    ->render(),
                'pagination' => view('frontend.training.include.pagination')
                    ->with(['courses' => $courses])
                    ->render(),
                'calendar' => view('frontend.training.include.calendar')
                    ->with(['courseType' => $courseType, 'firstSixMonthsSchedules' => $firstSixMonthsSchedules, 'nextSixMonthsSchedules' => $nextSixMonthsSchedules])
                    ->render()
            ]);
        }else{
            $filterQueries = $request->except('page');
            $courseCategories = Category::where('course_type', 'CORPORATE_TRAINING')->pluck('name_en', 'name_en');
            $coursesCertifications = Affiliation::pluck('short_name_en', 'short_name_en');
            $courseShortTitles = (clone $courseQuery)->pluck('course_short_title_en');
            $courseTitles = (clone $courseQuery)->pluck('course_title_en');
            $courseLocations = CourseSchedule::get()->pluck('course_venue')->unique()->mapWithKeys(function ($item) {
                return [$item => $item];
            });
            $courseCalendarFile = CourseCalendarFile::where('calendar', 'corporate')->pluck('file', 'calendar')->toArray();
            
            return view('frontend.training.corporate-program', compact('courseType', 'filterQueries', 'courseCategories', 
                'coursesCertifications', 'courses', 'courseShortTitles', 'courseTitles', 'courseLocations', 'firstSixMonthsSchedules', 
                'nextSixMonthsSchedules', 'courseCalendarFile'));
        }
    }

	public function corporatePrograms(Request $request): View|JsonResponse
    {
        $courseType = 'CORPORATE_TRAINING';
        $today = Carbon::today();
        $afterSixMonths = $today->copy()->addMonths(6);
        $afterTwelveMonths = $today->copy()->addMonths(12);

        $courseQuery = Course::with([
            'category',
            'affiliation',
            // 'nearestSchedule',
            'nearestSchedule' => function ($query) use ($request) {
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }
                /* $query->orderByRaw('ABS(DATEDIFF(course_start_date, CURDATE()))')
                    ->orderBy('course_start_date', 'asc'); */
                $query->whereDate('course_start_date', '>=', now())
                    ->orderBy('course_start_date', 'asc')
                    ->limit(1);
            }
        ])
        ->withMin(['schedules as nearest_start_date' => function ($query) use ($request) {
            $query->whereDate('course_start_date', '>=', now());

            if ($request->filled('format')) {
                $formats = explode(',', $request->input('format'));
                $query->whereIn('course_learning_mode', $formats);
            }
        }], 'course_start_date')
        ->where('course_type', 'CORPORATE_TRAINING')
        ->orderByRaw('ISNULL(nearest_start_date), nearest_start_date ASC');
        // ->orderBy('nearest_start_date', 'asc');

        if($request->filled('keyword')){
            $keyword = $request->input('keyword');
            $courseQuery->where(function ($query) use ($keyword) {
                $query->where('course_short_title_en', 'like', "%$keyword%")
                    ->orWhere('course_title_en', 'like', "%$keyword%");
            });
        }

        if($request->filled('schedule')){
            $courseMonth = Carbon::parse($request->input('schedule'));
                    
            $startOfMonth = $courseMonth->startOfMonth()->format('Y-m-d');
            $endOfMonth = $courseMonth->endOfMonth()->format('Y-m-d');

            // $courseQuery->whereHas('nearestSchedule', function ($query) use ($startOfMonth, $endOfMonth, $request){
            $courseQuery->whereHas('schedules', function ($query) use ($startOfMonth, $endOfMonth, $request) {
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }

                $query->whereDate('course_start_date', '>=', $startOfMonth);
                    // ->whereDate('course_end_date', '<=', $endOfMonth);
                    // ->limit(1)

            });
        }/* else{
            // No specific schedule: find nearest with optional format filter
            $courseQuery->whereHas('nearestSchedule', function ($query) use ($request) {
                if ($request->filled('format')) {
                    $formats = explode(',', $request->input('format'));
                    $query->whereIn('course_learning_mode', $formats);
                }

                $query->orderByRaw("ABS(DATEDIFF(course_start_date, CURDATE()))")
                    ->limit(1);
            });

            /* // No course schedule: show nearest to today (past/running/future)
            $courseQuery->whereHas('nearestSchedule', function ($query){
                $query->orderByRaw("ABS(DATEDIFF(course_start_date, CURDATE()))")->limit(1);;
            }); *
        } */

        if ($request->filled('category')){
            $categories = explode(',', $request->input('category'));
            $courseQuery->whereHas('category', function ($query) use ($categories){
                $query->whereIn('name_en', $categories);
            });
        }
        
        if ($request->filled('certification')){
            $certifications = explode(',', $request->input('certification'));
            $courseQuery->whereHas('affiliation', function ($query) use ($certifications){
                $query->whereIn('short_name_en', $certifications);
            });
        }

        if($request->filled('language')){
            $languages = explode(',', $request->input('language'));
            $courseQuery->whereIn('course_language', $languages);
        }
        
        if($request->filled('format')){
            $formats = explode(',', $request->input('format'));
            $courseQuery->whereHas('schedules', function ($q) use ($formats){
                $q->whereIn('course_learning_mode', $formats);
            });
        }
            
        if($request->filled('location')){
            $locations = explode(',', $request->input('location'));
            $courseQuery->whereHas('schedules', function ($q) use ($locations){
                $q->whereIn('course_venue', $locations);
            });
        }
        
        $courses = $courseQuery->paginate(5)->appends(request()->query());
        // dd($courses);
        // Single Query: fetch all schedules from today → +12 months
        $courseSchedules = CourseSchedule::whereHas('course', function ($query) use ($request){
            $query->where('course_type', 'CORPORATE_TRAINING');

            if($request->filled('keyword')){
                $keyword = $request->input('keyword');
                $query->where(function ($query) use ($keyword) {
                    $query->where('course_short_title_en', 'like', "%$keyword%")
                        ->orWhere('course_title_en', 'like', "%$keyword%");
                });
            }

            if($request->filled('schedule')){
                $courseMonth = Carbon::parse($request->input('schedule'));
                        
                $startOfMonth = $courseMonth->startOfMonth()->format('Y-m-d');
                $endOfMonth = $courseMonth->endOfMonth()->format('Y-m-d');
    
                $query->whereHas('schedules', function ($q) use ($startOfMonth, $endOfMonth, $request){
                    $q->whereDate('course_start_date', '>=', $startOfMonth)
                        ->whereDate('course_end_date', '<=', $endOfMonth);

                    if ($request->filled('format')) {
                        $formats = explode(',', $request->input('format'));
                        $q->whereIn('course_learning_mode', $formats);
                    }
                });
            }
            
            if ($request->filled('category')){
                $categories = explode(',', $request->input('category'));
                $query->whereHas('category', function ($q) use ($categories){
                    $q->whereIn('name_en', $categories);
                });
            }
            
            if ($request->filled('certification')){
                $certifications = explode(',', $request->input('certification'));
                $query->whereHas('affiliation', function ($q) use ($certifications){
                    $q->whereIn('short_name_en', $certifications);
                });
            }

            if($request->filled('language')){
                $languages = explode(',', $request->input('language'));
                $query->whereIn('course_language', $languages);
            }
            
            if($request->filled('format')){
                $formats = explode(',', $request->input('format'));
                $query->whereHas('schedules', function ($q) use ($formats){
                    $q->whereIn('course_learning_mode', $formats);
                });
            }
                
            if($request->filled('location')){
                $locations = explode(',', $request->input('location'));
                $query->whereHas('schedules', function ($q) use ($locations){
                    $q->whereIn('course_venue', $locations);
                });
            }
        })
        ->whereBetween('course_start_date', [$today, $afterTwelveMonths])
        // Optional: learning mode filter at the schedule level too
        ->when($request->filled('format'), function ($query) use ($request) {
            $formats = explode(',', $request->input('format'));
            $query->whereIn('course_learning_mode', $formats);
        })
        ->orderBy('course_start_date', 'asc')
        ->get();
        
        // Split into two sets manually:
        $firstSixMonthsSchedules = $courseSchedules->filter(function ($schedule) use ($today, $afterSixMonths){
            $startDate = Carbon::parse($schedule->course_start_date);
            return $startDate->between($today, $afterSixMonths);
        })->groupBy(function ($schedule){
            return Carbon::parse($schedule->course_start_date)->format('F | Y');
        });

        $nextSixMonthsSchedules = $courseSchedules->filter(function ($schedule) use ($afterSixMonths, $afterTwelveMonths){
            $startDate = Carbon::parse($schedule->course_start_date);
            return $startDate->between($afterSixMonths, $afterTwelveMonths);
        })->groupBy(function ($schedule){
            return Carbon::parse($schedule->course_start_date)->format('F | Y');
        });

        if($request->ajax()){
            return response()->json([
                'success' => true,
                'courses' => view('frontend.training.include.courses')
                    ->with(['courses' => $courses])
                    ->render(),
                'pagination' => view('frontend.training.include.pagination')
                    ->with(['courses' => $courses])
                    ->render(),
                'calendar' => view('frontend.training.include.calendar')
                    ->with(['courseType' => $courseType, 'firstSixMonthsSchedules' => $firstSixMonthsSchedules, 'nextSixMonthsSchedules' => $nextSixMonthsSchedules])
                    ->render()
            ]);
        }else{
            $filterQueries = $request->except('page');
            $courseCategories = Category::where('course_type', 'CORPORATE_TRAINING')->pluck('name_en', 'name_en');
            $coursesCertifications = Affiliation::pluck('short_name_en', 'short_name_en');
            $courseShortTitles = (clone $courseQuery)->pluck('course_short_title_en');
            $courseTitles = (clone $courseQuery)->pluck('course_title_en');
            $courseLocations = CourseSchedule::get()->pluck('course_venue')->unique()->mapWithKeys(function ($item) {
                return [$item => $item];
            });
            $courseCalendarFile = CourseCalendarFile::where('calendar', 'corporate')->pluck('file', 'calendar')->toArray();
            
            return view('frontend.training.corporate-program', compact('courseType', 'filterQueries', 'courseCategories', 
                'coursesCertifications', 'courses', 'courseShortTitles', 'courseTitles', 'courseLocations', 'firstSixMonthsSchedules', 
                'nextSixMonthsSchedules', 'courseCalendarFile'));
        }
    }

    public function courseDetails($slug): View
    {
        $course = Course::where('slug', $slug)->first();
        
        if($course){
            $today = Carbon::today();
            $afterSixMonths = Carbon::today()->addMonths(6);
            $afterTwelveMonths = Carbon::today()->addMonths(12);

            // Single query to fetch all relevant schedules (today → +12 months)
            $courseSchedules = CourseSchedule::whereHas('course', function ($query) use($course) {
            	$query->where('id', $course->id);
                $query->where('course_type', $course->course_type);
            })
            ->whereBetween('course_start_date', [$today, $afterTwelveMonths])
            ->orderBy('course_start_date', 'asc')
            ->get();

            // Split into first 6 months
            $firstSixMonthsSchedules = $courseSchedules->filter(function ($schedule) use ($today, $afterSixMonths) {
                $startDate = Carbon::parse($schedule->course_start_date);
                return $startDate->between($today, $afterSixMonths);
            })->groupBy(function ($schedule) {
                return Carbon::parse($schedule->course_start_date)->format('F | Y');
            });

            // Split into 6–12 months
            $nextSixMonthsSchedules = $courseSchedules->filter(function ($schedule) use ($afterSixMonths, $afterTwelveMonths) {
                $startDate = Carbon::parse($schedule->course_start_date);
                return $startDate->between($afterSixMonths, $afterTwelveMonths);
            })->groupBy(function ($schedule) {
                return Carbon::parse($schedule->course_start_date)->format('F | Y');
            });

            $testimonials['TEXT_TESTIMONIAL'] = Testimonial::where([
                'testimonial_type' => 'TEXT_TESTIMONIAL', 
                'course_id' => $course->id
            ])->orderBy('id', 'DESC')->get();

            $testimonials['VIDEO_TESTIMONIAL'] = Testimonial::where([
                'testimonial_type' => 'VIDEO_TESTIMONIAL', 
                'course_id' => $course->id
            ])->orderBy('id', 'DESC')->get();
            
            if($course->course_type == 'CERTIFICATION_TRAINING'){
                return view('frontend.training.certification-course-details', compact('course', 'firstSixMonthsSchedules', 'nextSixMonthsSchedules', 'testimonials'));
            }else if($course->course_type == 'CORPORATE_TRAINING'){
                return view('frontend.training.corporate-course-details', compact('course', 'firstSixMonthsSchedules', 'nextSixMonthsSchedules', 'testimonials'));
            }
        }else{
            abort(404);
        }
    }

    public function webinarSeminar(): View
    {
        // Get the first seminar today or in the future
        $highlightedSeminar = Seminar::where('seminar_date', '>=', Carbon::now())
            ->orderBy('seminar_date', 'asc')
            ->first();

        // Get other upcoming seminars
        $upcomingSeminarsQuery = Seminar::where('seminar_date', '>', Carbon::now())
            ->orderBy('seminar_date', 'asc');

        if ($highlightedSeminar) {
            $upcomingSeminarsQuery->where('id', '!=', $highlightedSeminar->id);
        }

        $upcomingSeminars = $upcomingSeminarsQuery->get();

        // Get other past seminars
        $pastSeminars = Seminar::where('seminar_date', '<', Carbon::now())
            ->orderBy('seminar_date', 'desc')
            ->get();
            
        return view('frontend.training.webinar-seminer', compact('highlightedSeminar', 'upcomingSeminars', 'pastSeminars'));
    }
    
    public function webinarSeminarRegister($slug): View
    {
        $seminar = Seminar::where('slug', $slug)->first();

        if($seminar){
            return view('frontend.training.webinar-seminer-register', compact('seminar'));
        }else{
            abort(404);
        }
    }
	public function register(): View
    {
        return view('frontend.training.register');
    }
	public function supplychainmanagementfundamentalsg(): View
    {
        return view('frontend.training.supply-chain-management-fundamentals');
    }
	public function registerscmf(): View {
        return view('frontend.training.scmf-register');

    }
	public function exportAllProgramsCsv()
{
    $filename = 'programs_export_' . now()->format('Ymd_His') . '.csv';

    $headers = [
        'Content-Type' => 'text/csv; charset=UTF-8',
        'Content-Disposition' => "attachment; filename=\"{$filename}\"",
    ];

    return response()->stream(function () {
        $out = fopen('php://output', 'w');

        // UTF-8 BOM for Excel
        fprintf($out, chr(0xEF).chr(0xBB).chr(0xBF));

        // CSV header
        fputcsv($out, [
            'Program ID',
			'Progran Code',
            'Program name',
            'Final URL',
            'Thumbnail image URL',
            'Image URL',
            'Course Methodology',
			'Target Audience',
			'Target Competencies',
            'Program description' ,'Course Objectives',
        ]);

        Course::with('affiliation')
            ->orderBy('id', 'asc')
            ->chunk(200, function ($courses) use ($out) {
                foreach ($courses as $course) {

                    // ✅ IMPORTANT: Replace this route name with your real one
                    // Example: route('training.course.details', $course->slug)
                    $finalUrl = route('training.course.details', $course->slug);

                    $imageUrl = $course->course_image
                        ? asset('storage/courses/courses/' . $course->course_image)
                        : '';

                    $thumbnailUrl = $imageUrl; // change if you have a thumbnail field

                    $Methodology = trim($course->course_methodology_en ?? '' );
					$Audience = trim($course->course_target_audience_en ?? '');
					$Competencies = trim($course->course_target_competencies_en ?? '' );
					
					$description = trim($course->course_methodology_en ?? '' );
					$Objectives = trim($course->course_objectives_en ?? '' );	

                    $programName = trim(($course->course_title_en ?? ''));
					$course_short_title_en = trim(($course->course_short_title_en ?? ''));
                    fputcsv($out, [
                        $course->id,
						$course_short_title_en,
                        $programName,
                        $finalUrl,
                        $thumbnailUrl,
                        $imageUrl,
                        $Methodology,
                        $Audience,
						$Competencies,
                        $description,
						$Objectives,                       
                    ]);
                }
            });

        fclose($out);
    }, 200, $headers);
}

}