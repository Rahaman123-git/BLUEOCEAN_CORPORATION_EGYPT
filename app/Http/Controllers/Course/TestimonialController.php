<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Course\Course;
use App\Models\Course\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $testimonials = Testimonial::all();
        return view('courses.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $courses = Course::all();
        return view('courses.testimonials.create', compact('courses'));
    }

    /**
     * Store a newly created resource in the database.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        if($request->ajax()){
            $clientImagePath = '';
         
            try{
                $validator = Validator::make($request->all(), [
                    'testimonial_type' => 'required|string|in:TEXT_TESTIMONIAL,VIDEO_TESTIMONIAL',
                    'course_id' => 'required|exists:courses,id',

                    'client_name' => 'nullable|string|max:255',
                    'client_designation' => 'nullable|string|max:255',
                    'client_testimonial' => 'nullable|string',
                    'client_image' => 'nullable|image|max:2048',

                    'client_testimonial_video_url' => 'nullable|string|max:255'
                ]);

                $validator->sometimes(['client_name', 'client_designation', 'client_testimonial'], 'required', function ($input) {
                    return $input->testimonial_type === 'TEXT_TESTIMONIAL';
                });

                $validator->sometimes('client_testimonial_video_url', 'required', function ($input) {
                    return $input->testimonial_type === 'VIDEO_TESTIMONIAL';
                });
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->testimonial_type == 'TEXT_TESTIMONIAL'){
                    if($request->file('client_image')){
                        $clientImagePath = $request->file('client_image')->store('courses/testimonials', 'public');
                    }

                    Testimonial::create([
                        'testimonial_type'   => $request->testimonial_type,
                        'course_id'          => $request->course_id,
                        'client_name'        => $request->client_name,
                        'client_designation' => $request->client_designation,
                        'client_testimonial' => $request->client_testimonial ?? null,
                        'image'              => $clientImagePath ? basename($clientImagePath) : null,
                    ]);
                }else if($request->testimonial_type == 'VIDEO_TESTIMONIAL'){
                    Testimonial::create([
                        'testimonial_type'             => $request->testimonial_type,
                        'course_id'                    => $request->course_id,
                        'client_testimonial_video_url' => $request->client_testimonial_video_url
                    ]);
                }
        
                session()->flash('success', 'Course testimonial registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.testimonials.index')
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id): View
    {
        $courses = Course::all();
        $testimonial = Testimonial::findOrFail($id);
        return view('courses.testimonials.edit', compact('courses', 'testimonial'));
    }

    /**
     * Update the specified resource in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            $clientImagePath = '';
            
            try{
                $testimonial = Testimonial::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'testimonial_type' => 'required|string|in:TEXT_TESTIMONIAL,VIDEO_TESTIMONIAL',
                    'course_id' => 'required|exists:courses,id',

                    'client_name' => 'nullable|string|max:255',
                    'client_designation' => 'nullable|string|max:255',
                    'client_testimonial' => 'nullable|string',
                    'client_image' => 'nullable|image|max:2048',

                    'client_testimonial_video_url' => 'nullable|string|max:255'
                ]);

                $validator->sometimes(['client_name', 'client_designation', 'client_testimonial'], 'required', function ($input) {
                    return $input->testimonial_type === 'TEXT_TESTIMONIAL';
                });

                $validator->sometimes('client_testimonial_video_url', 'required', function ($input) {
                    return $input->testimonial_type === 'VIDEO_TESTIMONIAL';
                });
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->testimonial_type == 'TEXT_TESTIMONIAL'){
                    if($request->file('client_image')){
                        $clientImagePath = $request->file('client_image')->store('courses/testimonials', 'public');
                        Storage::disk('public')->delete('courses/testimonials/'.$request->existing_client_image);
                    }else{
                        if($request->existing_client_image){
                            $clientImagePath = 'courses/testimonials/'.$request->existing_client_image;
                        }
                    }

                    $testimonial->update([
                        'course_id'          => $request->course_id,
                        'client_name'        => $request->client_name,
                        'client_designation' => $request->client_designation,
                        'client_testimonial' => $request->client_testimonial ?? null,
                        'image'              => $clientImagePath ? basename($clientImagePath) : null,
                    ]);
                }else if($request->testimonial_type == 'VIDEO_TESTIMONIAL'){
                    $testimonial->update([
                        'course_id'                    => $request->course_id,
                        'client_testimonial_video_url' => $request->client_testimonial_video_url
                    ]);
                }

                session()->flash('success', 'Course testimonial details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.testimonials.index')
                ], 200);
            } catch (\Exception $e) {dd($e);
                session()->flash('error', 'Something went wrong. Please try again.');
                return response()->json([
                    'status' => 'error',
                ], 500);
            }
        }else{
            abort(404);
        }
    }

    /**
     * Remove the specified resource from the database.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $testimonial = Testimonial::findOrFail($id);
                $testimonial->delete();

                session()->flash('success', 'Course testimonial details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.testimonials.index')
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