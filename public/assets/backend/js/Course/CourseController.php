<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Course\Category;
use App\Models\Course\Affiliation;
use App\Models\Course\Course;
use App\Models\Course\CourseModule;
use App\Models\Course\CourseCalendarFile;

class CourseController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $courses = Course::all();
        $courseCalendarFiles = CourseCalendarFile::pluck('file', 'calendar')->toArray();
        
        return view('courses.courses.index', compact('courses', 'courseCalendarFiles'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $courseCategories = [];

        $categories    = Category::all();
        $affiliations  = Affiliation::all();
        
        if($categories){
            foreach($categories as $category){
                $courseCategories[$category->course_type][] = [
                    'id'   => $category->id,
                    'name' => $category->name_en
                ];
            }
        }
       
        return view('courses.courses.create', compact('courseCategories', 'affiliations'));
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
        $courseBrochurePath = '';

        if($request->ajax()){
            try{
                $validator = Validator::make($request->all(), [
                    'slug'                          => Str::of($request->course_title_en)->slug('-'),
                    'course_type'                   => 'required|string|in:CERTIFICATION_TRAINING,CORPORATE_TRAINING',
                    'course_short_title_en'         => 'required|string|max:25',
                    'course_title_en'               => 'required|string|max:255',
                    'course_category_id'            => 'required|exists:course_categories,id',
                    // 'course_affiliation_id'         => 'required|exists:course_affiliations,id',
                    'course_language'               => 'required|string|in:Arabic,English',
                    // 'course_traning_location'       => 'required|string|in:India,Dubai',
                    'course_image'                  => 'required|image|max:2048',
                    'course_brochure'               => 'nullable|mimes:pdf|max:2048',
                    // 'course_price'                  => 'nullable|number',
                    'course_methodology_en'         => 'required|string',
                    'course_objectives_en'          => 'required|string',
                    'course_target_audience_en'     => 'required|string',
                    'course_target_competencies_en' => 'required|string'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                $courseImagePath = $request->file('course_image')->store('courses/courses', 'public');
                if($request->file('course_brochure')){
                    $courseBrochurePath = $request->file('course_brochure')->store('courses/courses', 'public');
                }
               
                Course::create([
                    'zoho_id'                       => $request->course_zoho_id,
                    'slug'                          => Str::of($request->course_title_en)->slug('-'),
                    'course_type'                   => $request->course_type,
                    'course_short_title_en'         => $request->course_short_title_en,
                    'course_title_en'               => $request->course_title_en,
                    'course_category_id'            => $request->course_category_id,
                    'course_affiliation_id'         => $request->course_affiliation_id ?? null,
                    'course_language'               => $request->course_language,
                    // 'course_traning_location'       => $request->course_traning_location,
                    'course_image'                  => $courseImagePath ? basename($courseImagePath) : null,
                    'course_brochure'               => $courseBrochurePath ? basename($courseBrochurePath) : null,
                    // 'course_price'                  => ($request->course_type == 'CORPORATE_TRAINING') ? ($request->course_price ?? NULL) : NULL,
                    'course_methodology_en'         => $request->course_methodology_en,
                    'course_objectives_en'          => $request->course_objectives_en,
                    'course_target_audience_en'     => $request->course_target_audience_en,
                    'course_target_competencies_en' => $request->course_target_competencies_en,
                    'course_meta_details'           => $request->course_meta_details,
                    'course_schema'                 => $request->course_schema
                ]);
        
                session()->flash('success', 'Course registered successfully!');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id): View
    {
        $course            = Course::findOrFail($id);
        $categories        = Category::all();
        $affiliations      = Affiliation::all();
        $currentCategories = Category::where('course_type', $course->course_type)->get();
        
        return view('courses.courses.edit', compact('categories', 'affiliations', 'currentCategories', 'course'));
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
            try{
                $course = Course::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'course_type'                   => 'required|string|in:CERTIFICATION_TRAINING,CORPORATE_TRAINING',
                    'course_short_title_en'         => 'required|string|max:25',
                    'course_title_en'               => 'required|string|max:255',
                    'course_category_id'            => 'required|exists:course_categories,id',
                    // 'course_affiliation_id'         => 'required|exists:course_affiliations,id',
                    'course_language'               => 'required|string|in:Arabic,English',
                    // 'course_traning_location'       => 'required|string|in:India,Dubai',
                    'course_image'                  => 'nullable|image|max:2048',
                    'course_brochure'               => 'nullable|mimes:pdf|max:2048',
                    // 'course_price'                  => 'nullable|number',
                    'course_methodology_en'         => 'required|string',
                    'course_objectives_en'          => 'required|string',
                    'course_target_audience_en'     => 'required|string',
                    'course_target_competencies_en' => 'required|string'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('course_image')){
                    $courseImagePath = $request->file('course_image')->store('courses/courses', 'public');
                    Storage::disk('public')->delete('courses/courses/'.$request->existing_course_image);
                }else{
                    $courseImagePath = 'courses/courses/'.$request->existing_course_image;
                }

                if($request->file('course_brochure')){
                    $courseBrochurePath = $request->file('course_brochure')->store('courses/courses', 'public');
                    Storage::disk('public')->delete('courses/courses/'.$request->existing_course_brochure);
                }else{
                    $courseBrochurePath = 'courses/courses/'.$request->existing_course_brochure;
                }
                
                $course->update([
                    'zoho_id'                       => $request->course_zoho_id,
                    'slug'                          => Str::of($request->course_title_en)->slug('-'),
                    'course_type'                   => $request->course_type,
                    'course_short_title_en'         => $request->course_short_title_en,
                    'course_title_en'               => $request->course_title_en,
                    'course_category_id'            => $request->course_category_id,
                    'course_affiliation_id'         => $request->course_affiliation_id ?? null,
                    'course_language'               => $request->course_language,
                    // 'course_traning_location'       => $request->course_traning_location,
                    'course_image'                  => $courseImagePath ? basename($courseImagePath) : null,
                    'course_brochure'               => $courseBrochurePath ? basename($courseBrochurePath) : null,
                    // 'course_price'                  => ($request->course_type == 'CORPORATE_TRAINING') ? ($request->course_price ?? NULL) : NULL,
                    'course_methodology_en'         => $request->course_methodology_en,
                    'course_objectives_en'          => $request->course_objectives_en,
                    'course_target_audience_en'     => $request->course_target_audience_en,
                    'course_target_competencies_en' => $request->course_target_competencies_en,
                    'course_meta_details'           => $request->course_meta_details,
                    'course_schema'                 => $request->course_schema
                ]);
                
                session()->flash('success', 'Course details updated successfully!');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function module($id): View
    {
        $course               = Course::findOrFail($id);
        $courseModules        = explode('-', $course->course_short_title_en);
        $courseModuleDetails  = CourseModule::where('course_id', $course->id)->first();
        
        return view('courses.courses.module', compact('course', 'courseModules', 'courseModuleDetails'));
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
    public function updateModule(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $course = Course::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'course_module_introduction_en' => 'required|array',
                    'course_module_introduction_en.*' => 'required|string',
                    'course_module_title_en' => 'required|array',
                    'course_module_title_en.*' => 'required|array',
                    'course_module_title_en.*.*' => 'required|string|max:255',
                    // 'course_module_details_en' => 'required|array',
                    // 'course_module_details_en.*' => 'required|array',
                    // 'course_module_details_en.*.*' => 'required|string'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }
               
                $courseModule = CourseModule::where('course_id', $course->id)->first();
                
                /* if($courseModule){
                    $courseModule->course_module_introduction_en = json_encode($request->course_module_introduction_en);
                    $courseModule->course_module_title_en        = json_encode($request->course_module_title_en);
                    $courseModule->course_module_details_en      = json_encode($request->course_module_details_en);

                    $courseModule->save();
                }else{
                    CourseModule::create([
                        'course_id'                     => $course->id, 
                        'course_module_introduction_en' => json_encode($request->course_module_introduction_en), 
                        'course_module_title_en'        => json_encode($request->course_module_title_en), 
                        'course_module_details_en'      => json_encode($request->course_module_details_en)
                    ]);
                } */

                CourseModule::upsert([
                    [
                        'course_id'                     => $course->id, 
                        'course_module_introduction_en' => json_encode($request->course_module_introduction_en), 
                        'course_module_title_en'        => json_encode($request->course_module_title_en), 
                        'course_module_details_en'      => json_encode($request->course_module_details_en)
                    ],
                ], uniqueBy: [
                    'course_id'
                ], update: [
                    'course_module_introduction_en', 
                    'course_module_title_en', 
                    'course_module_details_en'
                ]);
        
                session()->flash('success', 'Course module details updated successfully!');
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
                $course = Course::findOrFail($id);
                $course->delete();

                session()->flash('success', 'Course details deleted successfully!');
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