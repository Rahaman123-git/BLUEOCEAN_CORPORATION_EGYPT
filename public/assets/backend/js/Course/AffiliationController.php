<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Course\Affiliation;

class AffiliationController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $affiliations = Affiliation::all();
        return view('courses.affiliations.index', compact('affiliations'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('courses.affiliations.create');
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
            $affiliationImagePath = '';

            try{
                $validator = Validator::make($request->all(), [
                    'affiliation_short_name_en'         => 'required|string|max:25',
                    'affiliation_name_en'               => 'required|string|max:255',
                    'affiliation_description_en'        => 'required|string',
                    'affiliation_course_description_en' => 'required|string',
                    'affiliation_text_bg_color_code'    => 'required|string',
                    'affiliation_image'                 => 'required|image|max:2048'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('affiliation_image')){
                    $affiliationImagePath = $request->file('affiliation_image')->store('courses/affiliations', 'public');
                }

                Affiliation::create([
                    'short_name_en'                  => $request->affiliation_short_name_en,
                    'name_en'                        => $request->affiliation_name_en,
                    'description_en'                 => $request->affiliation_description_en,
                    'course_description_en'          => $request->affiliation_course_description_en,
                    'affiliation_text_bg_color_code' => $request->affiliation_text_bg_color_code,
                    'image'                          => $affiliationImagePath ? basename($affiliationImagePath) : null
                ]);
        
                session()->flash('success', 'Course affiliation registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.affiliations.index')
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
        $affiliation = Affiliation::findOrFail($id);
        return view('courses.affiliations.edit', compact('affiliation'));
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
                $affiliation = Affiliation::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'affiliation_short_name_en'         => 'required|string|max:25',
                    'affiliation_name_en'               => 'required|string|max:255',
                    'affiliation_description_en'        => 'required|string',
                    'affiliation_course_description_en' => 'required|string',
                    'affiliation_text_bg_color_code'    => 'required|string',
                    'affiliation_image'                 => 'nullable|image|max:2048'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('affiliation_image')){
                    $affiliationImagePath = $request->file('affiliation_image')->store('courses/affiliations', 'public');
                    Storage::disk('public')->delete('courses/affiliations/'.$request->existing_affiliation_image);
                }else{
                    $affiliationImagePath = 'courses/affiliations/'.$request->existing_affiliation_image;
                }

                $affiliation->update([
                    'short_name_en'                  => $request->affiliation_short_name_en,
                    'name_en'                        => $request->affiliation_name_en,
                    'description_en'                 => $request->affiliation_description_en,
                    'course_description_en'          => $request->affiliation_course_description_en,
                    'affiliation_text_bg_color_code' => $request->affiliation_text_bg_color_code,
                    'image'                          => $affiliationImagePath ? basename($affiliationImagePath) : null
                ]);
        
                session()->flash('success', 'Course affiliation details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.affiliations.index')
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
                $subCategory = Affiliation::findOrFail($id);
                $subCategory->delete();

                session()->flash('success', 'Course affiliation details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.affiliations.index')
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