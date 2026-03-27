<?php

namespace App\Http\Controllers\Frontend\Lead;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Course\Course;
use App\Models\Course\CourseCalendarFile;
use App\Models\Lead\Lead;

class LeadController extends Controller
{
    /**
     * Store a newly created resource in the database.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)//: JsonResponse
    {
        $fileUrl = '';

        try{
            do {
                $token = Str::random(60);
            } while (Lead::where('token', $token)->exists());

            Lead::create([
                'token'          => $token,
                'lead_source'    => $request->leadsource,
                'lead_source_id' => (($request->leadsource != 'courseCalendar') ? $request->leadsourceid : NULL),
                'first_name'     => $request->fname,
                'last_name'      => $request->lname,
                'email'          => $request->email,
                'phone_no'       => $request->full_phone,
                'city'           => $request->city,
                'country'        => $request->country,
                'website'        => $request->c_website,    
                'designation'    => $request->position,
                'news_letter'    => $request->otherinfo,
                'status'         => 'active'
            ]);
            
            if($request->leadsource == 'courseBrochure'){
                $course = Course::find($request->leadsourceid);
                
                if($course->course_brochure){
                    $fileUrl = asset('storage/courses/courses/'.$course->course_brochure);
                }
            }else if($request->leadsource == 'courseCalendar'){
                if($request->leadsourceid == 'certificate'){
                    $courseCalendarFile = CourseCalendarFile::where('calendar', 'certificate')->first();

                    if($courseCalendarFile){
                        $fileUrl = asset('storage/courses/calendar/'.$courseCalendarFile->file);
                    }
                }else if($course->course_type == 'corporate'){
                    $courseCalendarFile = CourseCalendarFile::where('calendar', 'corporate')->first();

                    if($courseCalendarFile){
                        $fileUrl = asset('storage/courses/calendar/'.$courseCalendarFile->file);
                    }
                }
            }

            return response()->json([
                'status' => 'success',
                'source' => $request->leadsource,
                'url'    => $fileUrl
            ], 200);
        } catch (\Exception $e) {dd($e);
            return response()->json([
                'status'  => 'error',
                'message' => 'Something went wrong. Please try again.'
            ], 500);
        }
    }

    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function registerSuccess($token): View
    {
        $lead = Lead::where('token', $token)->first();dd($lead);
        return view('frontend.lead.register-success', compact('lead'));
    }
}