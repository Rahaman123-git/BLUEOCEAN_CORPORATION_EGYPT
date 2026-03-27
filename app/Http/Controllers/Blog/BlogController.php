<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Blog\Blog;
use Carbon\Carbon;

class BlogController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $blogs = Blog::orderBy('id', 'DESC')->get();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('blogs.create');
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
        $blogThumbImagePath = '';
        $introductionImagePath = '';
        $bannerImagesPaths = [];
        $highlightedImagesPaths = [];

        if($request->ajax()){
             try{
                $validator = Validator::make($request->all(), [
                    'blog_type' => 'required|string|in:INSIDE_BLUE_OCEAN,EXPERT_EDGE_INSIGHTS,PRESS_REALESE',
                    'blog_title' => 'required|string|max:255',
                	
                    'blog_short_description' => 'nullable|string|max:255',
                    'blog_thumb_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'introduction_title' => 'required|string|max:255',
                    'introduction_details' => 'nullable|string',
                    'introduction_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'introduction_video_title'=> 'nullable|string|max:255',
                    'introduction_video_url'  => 'nullable|url',
                    'banner_images' => 'required|array',
                    'banner_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'highlighted_images' => 'nullable|array',
                    'highlighted_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'blog_details' => 'required|string',
					'created_by' => 'nullable|string',
					'published_date' => 'nullable|date_format:d.m.Y',
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }
                
                if($request->hasFile('blog_thumb_image')){
                    $blogThumbImagePath = $request->file('blog_thumb_image')->store('blogs', 'public');
                }

                if($request->hasFile('introduction_image')){
                    $introductionImagePath = $request->file('introduction_image')->store('blogs', 'public');
                }

                if($request->hasFile('banner_images')){
                    foreach($request->file('banner_images') as $bannerImage){
                        $bannerImagesPaths[] = $bannerImage->store('blogs', 'public');
                    }
                }

                if($request->hasFile('highlighted_images')){
                    foreach($request->file('highlighted_images') as $highlightedImage){
                        $highlightedImagesPaths[] = $highlightedImage->store('blogs', 'public');
                    }
                }
				 
				 $publishedDate = Carbon::createFromFormat('d.m.Y', $request->published_date)->format('Y-m-d');
				$createdBy = $request->created_by ?: 'Admin';
                
                Blog::create([
                    'blog_type'               => $request->blog_type,
                    'slug'                    => Str::of($request->blog_title)->slug('-'),
                    'blog_title'              => $request->blog_title,
                    'blog_short_description'  => $request->blog_short_description,
                    'blog_thumb_image'        => $blogThumbImagePath ? basename($blogThumbImagePath) : null,
                    'introduction_title'      => $request->introduction_title,
                    'introduction_details'    => $request->introduction_details,
                    'introduction_image'      => $introductionImagePath ? basename($introductionImagePath) : null,
                    'introduction_video_title'=> $request->introduction_video_title,
                    'introduction_video_url'  => $request->introduction_video_url,
                    'banner_images'           => $bannerImagesPaths ? json_encode($bannerImagesPaths) : null,
                    'highlighted_images'      => $highlightedImagesPaths ? json_encode($highlightedImagesPaths) : null,
                    'blog_details'            => $request->blog_details,
                    'created_by'            => $createdBy,
                    'published_date'            => $publishedDate
                ]);
        
                session()->flash('success', 'Blog registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('blog.events.index')
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
        $blog = Blog::findOrFail($id);
        return view('blogs.edit', compact('blog'));
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
        $blogThumbImagePath = '';
        $introductionImagePath = '';
        $bannerImagesPaths = [];
        $highlightedImagesPaths = [];
        
        if($request->ajax()){
            try{
                $blog = Blog::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'blog_type' => 'required|string|in:INSIDE_BLUE_OCEAN,EXPERT_EDGE_INSIGHTS',
                    'blog_title' => 'required|string|max:255',
                    'blog_short_description' => 'nullable|string|max:255',
                    'blog_thumb_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'introduction_title' => 'required|string|max:255',
                    'introduction_details' => 'nullable|string',
                    'introduction_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'introduction_video_title'=> 'nullable|string|max:255',
                    'introduction_video_url'  => 'nullable|url',
                    'banner_images' => 'nullable|array',
                    'banner_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'highlighted_images' => 'nullable|array',
                    'highlighted_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'blog_details' => 'required|string',
                    'created_by' => 'nullable|string',
					'published_date' => 'nullable|date_format:d.m.Y',
                ]);

                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('blog_thumb_image')){
                    $blogThumbImagePath = $request->file('blog_thumb_image')->store('blogs', 'public');
                    Storage::disk('public')->delete('blogs/'.$request->existing_blog_thumb_image);
                }else{
                    $blogThumbImagePath = 'blogs/'.$request->existing_blog_thumb_image;
                }

                if($request->file('introduction_image')){
                    $introductionImagePath = $request->file('introduction_image')->store('blogs', 'public');
                    Storage::disk('public')->delete('blogs/'.$request->existing_introduction_image);
                }else{
                    $introductionImagePath = 'blogs/'.$request->existing_introduction_image;
                }

                if($request->file('banner_images')){
                    foreach($request->file('banner_images') as $bannerImage){
                        $bannerImagesPaths[] = $bannerImage->store('blogs', 'public');
                    }

                    $existingBannerImages = json_decode($request->existing_banner_images, true);
                    foreach($existingBannerImages as $bannerImage){
                        Storage::disk('public')->delete($bannerImage);
                    }
                }else{
                    $bannerImagesPaths = json_decode($request->existing_banner_images, true);
                }

                if($request->file('highlighted_images')){
                    foreach($request->file('highlighted_images') as $highlightedImage){
                        $highlightedImagesPaths[] = $highlightedImage->store('blogs', 'public');
                    }

                    $existingHighlightedImages = json_decode($request->existing_highlighted_images, true);
                    foreach($existingHighlightedImages as $highlightedImage){
                        Storage::disk('public')->delete($highlightedImage);
                    }
                }else{
                    $highlightedImagesPaths = json_decode($request->existing_highlighted_images, true);
                }
				
				$publishedDate = Carbon::createFromFormat('d.m.Y', $request->published_date)->format('Y-m-d');
				$createdBy = $request->created_by ?: 'Admin';
                
                $blog->update([
                    'blog_type'               => $request->blog_type,
                    'blog_title'              => $request->blog_title,
                	'slug'                    => Str::of($request->blog_title)->slug('-'),
                    'blog_short_description'  => $request->blog_short_description,
                    'blog_thumb_image'        => $blogThumbImagePath ? basename($blogThumbImagePath) : null,
                    'introduction_title'      => $request->introduction_title,
                    'introduction_details'    => $request->introduction_details,
                    'introduction_image'      => $introductionImagePath ? basename($introductionImagePath) : null,
                    'introduction_video_title'=> $request->introduction_video_title,
                    'introduction_video_url'  => $request->introduction_video_url,
                    'banner_images'           => $bannerImagesPaths ? json_encode($bannerImagesPaths) : null,
                    'highlighted_images'      => $highlightedImagesPaths ? json_encode($highlightedImagesPaths) : null,
                    'blog_details'            => $request->blog_details,
                    'created_by'              => $createdBy,
                    'published_date'          => $publishedDate
                ]);
                
                session()->flash('success', 'Blog details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('blog.events.index')
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
                $blog = Blog::findOrFail($id);
                $blog->delete();

                session()->flash('success', 'Blog details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('blog.events.index')
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