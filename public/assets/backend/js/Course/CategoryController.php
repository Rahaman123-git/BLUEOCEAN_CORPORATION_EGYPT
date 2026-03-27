<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Course\Category;

class CategoryController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $categories = Category::all();
        return view('courses.categories.index', compact('categories'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('courses.categories.create');
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
            $categoryImagePath = '';

            try{
                $validator = Validator::make($request->all(), [
                    'course_type'             => 'required|string|in:CERTIFICATION_TRAINING,CORPORATE_TRAINING',
                    'category_name_en'        => 'required|string|max:255',
                    'category_image'          => 'nullable|image|max:2048',
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('category_image')){
                    $categoryImagePath = $request->file('category_image')->store('courses/categories', 'public');
                }

                Category::create([
                    'course_type'    => $request->course_type,
                    'name_en'        => $request->category_name_en,
                    'description_en' => $request->category_description_en ?? null,
                    'image'          => $categoryImagePath ? basename($categoryImagePath) : null,
                ]);
        
                session()->flash('success', 'Course category registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.categories.index')
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
        $category = Category::findOrFail($id);
        return view('courses.categories.edit', compact('category'));
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
            $categoryImagePath = '';

            try{
                $category = Category::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'course_type'             => 'required|string|in:CERTIFICATION_TRAINING,CORPORATE_TRAINING',
                    'category_name_en'        => 'required|string|max:255',
                    'category_image'          => 'nullable|image|max:2048'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('category_image')){
                    $categoryImagePath = $request->file('category_image')->store('courses/categories', 'public');
                    Storage::disk('public')->delete('courses/categories/'.$request->existing_category_image);
                }else{
                    if($request->existing_category_image){
                        $categoryImagePath = 'courses/categories/'.$request->existing_category_image;
                    }
                }

                $category->update([
                    'name_en'        => $request->category_name_en,
                    'name_ar'        => $request->category_name_ar,
                    'description_en' => $request->category_description_en,
                    'description_ar' => $request->category_description_ar,
                    'image'          => $categoryImagePath ? basename($categoryImagePath) : null,
                    'status'         => $request->status
                ]);
        
                session()->flash('success', 'Course category details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.categories.index')
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
                $category = Category::findOrFail($id);
                $category->delete();

                session()->flash('success', 'Course category details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.categories.index')
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