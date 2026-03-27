<?php

namespace App\Http\Controllers\WebsiteContent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\WebsiteContent\PageSetting;

class PageSettingsController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $pageSettings = PageSetting::all();
        return view('website-content.page-settings.index', compact('pageSettings'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('website-content.page-settings.create');
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
            try{
                $mediaType = '';
                $bannerFilePath = '';

                $validator = Validator::make($request->all(), [
                    'page_type'   => 'required|string|in:HOME_PAGE,ABOUT_US,CONSULTING,TRAINING,CORPORATE_TRAINING,CONFERENCES,NEWS',
                    'page_title'  => 'required|string||max:255',
                    'banner_file' => 'required|file|mimetypes:image/jpeg,image/png,image/gif,image/svg+xml,video/mp4|max:51200', // max: 50MB
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->has('banner_file') && $request->file('banner_file')){
                    $fileExtension = $request->file('banner_file')->getClientOriginalExtension();
                    
                    if(in_array(strtolower($fileExtension), ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'])){
                        $mediaType = 'image';
                    }elseif(in_array(strtolower($extension), ['mp4'])){
                        $mediaType = 'video';
                    }

                    $bannerFilePath = $request->file('banner_file')->store('website-content/page-settings', 'public');
                }

                PageSetting::create([
                    'page_type'    => $request->page_type,
                    'page_title'   => $request->page_title,
                    'meta_details' => $request->meta_details,
                    'page_schema'  => $request->page_schema,
                    'media_type'   => $mediaType,
                    'banner_file'  => $bannerFilePath ? basename($bannerFilePath) : null
                ]);
        
                session()->flash('success', 'Page settings registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('website.content.page.settings.index')
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
        $pageSetting = PageSetting::findOrFail($id);
        return view('website-content.page-settings.edit', compact('pageSetting'));
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
                $mediaType = '';
                $bannerFilePath = '';

                $pageSetting = PageSetting::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'page_type'   => 'required|string|in:HOME_PAGE,ABOUT_US,CONSULTING,TRAINING,CORPORATE_TRAINING,CONFERENCES,NEWS',
                    'page_title'  => 'required|string||max:255',
                    'banner_file' => 'nullable|file|mimetypes:image/jpeg,image/png,image/gif,image/svg+xml,video/mp4|max:51200', // max: 50MB
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->has('banner_file') && $request->file('banner_file')){
                    $fileExtension = $request->file('banner_file')->getClientOriginalExtension();
                    
                    if(in_array(strtolower($fileExtension), ['jpg', 'jpeg', 'png', 'gif', 'svg', 'webp'])){
                        $mediaType = 'image';
                    }elseif(in_array(strtolower($fileExtension), ['mp4'])){
                        $mediaType = 'video';
                    }

                    $bannerFilePath = $request->file('banner_file')->store('website-content/page-settings', 'public');
                    Storage::disk('public')->delete('page-settings/'.$request->existing_banner_file);
                }else{
                    if($request->existing_banner_file){
                        $bannerFilePath = 'page-settings/'.$request->existing_banner_file;
                    }
                }

                if($mediaType){
                    $pageSetting->update([
                        'page_type'    => $request->page_type,
                        'page_title'   => $request->page_title,
                        'meta_details' => $request->meta_details,
                        'page_schema'  => $request->page_schema,
                        'media_type'   => $mediaType,
                        'banner_file'  => $bannerFilePath ? basename($bannerFilePath) : null,
                    ]);
                }else{
                    $pageSetting->update([
                        'page_type'    => $request->page_type,
                        'page_title'   => $request->page_title,
                        'meta_details' => $request->meta_details,
                        'page_schema'  => $request->page_schema,
                        'banner_file'  => $bannerFilePath ? basename($bannerFilePath) : null,
                    ]);
                }
        
                session()->flash('success', 'Page setting details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('website.content.page.settings.index')
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
                $pageSetting = PageSetting::findOrFail($id);
                $pageSetting->delete();

                session()->flash('success', 'Page setting details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('website.content.page.settings.index')
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