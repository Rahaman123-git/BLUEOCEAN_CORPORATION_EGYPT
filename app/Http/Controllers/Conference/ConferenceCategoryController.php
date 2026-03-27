<?php

namespace App\Http\Controllers\Conference;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;
use App\Models\Conference\ConferenceCategory;

class ConferenceCategoryController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $conferenceCategories = ConferenceCategory::all();
        return view('conferences.categories.index', compact('conferenceCategories'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('conferences.categories.create');
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
            $categoryLogoFilePath = '';
            $categoryBannerFilePath = '';

            try{
                $validator = Validator::make($request->all(), [
                    'category_short_title' => 'required|string',
                    'category_title'       => 'required|string',
                    'category_logo_file'   => 'required|mimes:jpg,jpeg,png,gif,webp,svg|max:20480',
                    'category_banner_file' => 'required|mimes:jpg,jpeg,png,gif,webp,svg|max:20480',
                    'category_details'     => 'required|string'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('category_logo_file')){
                    $categoryLogoFilePath = $request->file('category_logo_file')->store('conferences/category', 'public');
                }

                if($request->file('category_banner_file')){
                    $categoryBannerFilePath = $request->file('category_banner_file')->store('conferences/category', 'public');
                }
               
                ConferenceCategory::create([
                    'category_short_title' => $request->category_short_title,
                    'category_title'       => $request->category_title,
                    'category_logo'        => $categoryLogoFilePath ? basename($categoryLogoFilePath) : null,
                    'category_banner'      => $categoryBannerFilePath ? basename($categoryBannerFilePath) : null,
                    'category_details'     => $request->category_details
                ]);
        
                session()->flash('success', 'Conference category details registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('conferences.categories.index')
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
        $conferenceCategory = ConferenceCategory::findOrFail($id);
        return view('conferences.categories.edit', compact('conferenceCategory'));
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
            $categoryLogoFilePath = '';
            $categoryBannerFilePath = '';

            try{
                $conferenceCategory = ConferenceCategory::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'category_short_title' => 'required|string',
                    'category_title'       => 'required|string',
                    'category_logo_file'   => 'nullable|mimes:jpg,jpeg,png,gif,webp,svg|max:20480',
                    'category_banner_file' => 'nullable|mimes:jpg,jpeg,png,gif,webp,svg|max:20480',
                    'category_details'     => 'required|string'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('category_logo_file')){
                    $categoryLogoFilePath = $request->file('category_logo_file')->store('conferences/category', 'public');
                    Storage::disk('public')->delete('conferences/category/'.$request->existing_category_logo);
                }else{
                    if($request->existing_category_logo){
                        $categoryLogoFilePath = 'conferences/category/'.$request->existing_category_logo;
                    }
                }

                if($request->file('category_banner_file')){
                    $categoryBannerFilePath = $request->file('category_banner_file')->store('conferences/category', 'public');
                    Storage::disk('public')->delete('conferences/category/'.$request->existing_category_banner);
                }else{
                    if($request->existing_category_banner){
                        $categoryBannerFilePath = 'conferences/category/'.$request->existing_category_banner;
                    }
                }
               
                $conferenceCategory->update([
                    'category_short_title' => $request->category_short_title,
                    'category_title'       => $request->category_title,
                    'category_logo'        => $categoryLogoFilePath ? basename($categoryLogoFilePath) : null,
                    'category_banner'      => $categoryBannerFilePath ? basename($categoryBannerFilePath) : null,
                    'category_details'     => $request->category_details
                ]);
        
                session()->flash('success', 'Conference category details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('conferences.categories.index')
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
                $conferenceCategory = ConferenceCategory::findOrFail($id);
                $conferenceCategory->delete();

                session()->flash('success', 'Conference category details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('conferences.categories.index')
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