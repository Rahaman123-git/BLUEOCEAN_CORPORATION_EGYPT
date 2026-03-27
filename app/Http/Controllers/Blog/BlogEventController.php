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
use App\Models\Blog\BlogEvent;

class BlogEventController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index($id): View
    {
        $blog       = Blog::findOrFail($id);
        $blogEvents = BlogEvent::with('blog')->where('blog_id', $id)->get();
       
        return view('blogs.events.index', compact('blog', 'blogEvents'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create($id): View
    {
        $blog = Blog::findOrFail($id);
        return view('blogs.events.create', compact('blog'));
    }

    /**
     * Store a newly created resource in the database.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, $id): JsonResponse
    {
        $blogEventThumbImagePath = '';
        $bannerImagePaths = [];
        $eventImagePaths = [];

        if($request->ajax()){
            try{
                $validator = Validator::make($request->all(), [
                    'event_title' => 'required|string|max:255',
                    'is_highlighted_event' => 'required|in:YES,NO',
                    'event_short_description' => 'nullable|string|max:255',
                    'event_thumb_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
                    'event_details' => 'required|string',
                    'event_highlighted_details' => 'nullable|string',
                    'banner_images' => 'required|array|min:1',
                    'banner_images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
                    'event_images' => 'nullable|array',
                    'event_images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
                    'reel_video_title' => 'nullable|string|required_with:reel_video_url',
                    'reel_video_url' => 'nullable|url|required_with:reel_video_title',
                    'video_blog_url_1' => 'nullable|url',
                    'video_blog_url_2' => 'nullable|url',
                    'video_blog_url_3' => 'nullable|url',
                    'video_blog_url_4' => 'nullable|url',
                    'video_blog_url_5' => 'nullable|url',
                    'video_blog_url_6' => 'nullable|url',
                    'video_blog_url_7' => 'nullable|url',
                    'video_blog_url_8' => 'nullable|url',
                    'video_blog_url_9' => 'nullable|url',
                    'video_blog_url_10'=> 'nullable|url',
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }
                
                if($request->hasFile('event_thumb_image')){
                    $blogEventThumbImagePath = $request->file('event_thumb_image')->store('blogs/events', 'public');
                }

                if($request->hasFile('banner_images')){
                    foreach($request->file('banner_images') as $file){
                        $bannerImagePaths[] = $file->store('blogs/events', 'public');
                    }
                }

                if($request->hasFile('event_images')){
                    foreach($request->file('event_images') as $file) {
                        $eventImagePaths[] = $file->store('blogs/events', 'public');
                    }
                }
                
                BlogEvent::create([
                    'blog_id'                   => $id,
                    'slug'                      => Str::of($request->event_title)->slug('-'),
                    'event_title'               => $request->event_title,
                    'is_highlighted_event'      => $request->is_highlighted_event,
                    'event_short_description'   => $request->event_short_description,
                    'event_thumb_image'         => basename($blogEventThumbImagePath),
                    'event_details'             => $request->event_details,
                    'event_highlighted_details' => $request->event_highlighted_details,
                    'banner_images'             => json_encode($bannerImagePaths),
                    'event_images'              => json_encode($eventImagePaths),
                    'reel_video_title'          => $request->reel_video_title,
                    'reel_video_url'            => $request->reel_video_url,
                    'video_blog_urls'           => json_encode([
                        $request->video_blog_url_1,
                        $request->video_blog_url_2,
                        $request->video_blog_url_3,
                        $request->video_blog_url_4,
                        $request->video_blog_url_5,
                        $request->video_blog_url_6,
                        $request->video_blog_url_7,
                        $request->video_blog_url_8,
                        $request->video_blog_url_9,
                        $request->video_blog_url_10,
                    ])
                ]);
        
                session()->flash('success', 'Blog event registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('blog.events.events.index ', $id)
                ], 200);
            } catch (\Exception $e) {
                dd($e);
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
    public function edit($id, $eventId): View
    {
        $blog      = Blog::findOrFail($id);
        $blogEvent = BlogEvent::findOrFail($eventId);

        return view('blogs.events.edit', compact('blog', 'blogEvent'));
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
    public function update(Request $request, $id, $eventId): JsonResponse
    {
        $blogEventThumbImagePath = '';
        $bannerImagePaths = [];
        $eventImagePaths = [];
        
        if($request->ajax()){
            try{
                $blogEvent = BlogEvent::findOrFail($eventId);

                $validator = Validator::make($request->all(), [
                    'event_title' => 'required|string|max:255',
                    'is_highlighted_event' => 'required|in:YES,NO',
                    'event_short_description' => 'nullable|string|max:255',
                    'event_thumb_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
                    'event_details' => 'required|string',
                    'event_highlighted_details' => 'nullable|string',
                    'banner_images' => 'nullable|array|min:1',
                    'banner_images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
                    'event_images' => 'nullable|array',
                    'event_images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
                    'reel_video_title' => 'nullable|string|required_with:reel_video_url',
                    'reel_video_url' => 'nullable|url|required_with:reel_video_title',
                    'video_blog_url_1' => 'nullable|url',
                    'video_blog_url_2' => 'nullable|url',
                    'video_blog_url_3' => 'nullable|url',
                    'video_blog_url_4' => 'nullable|url',
                    'video_blog_url_5' => 'nullable|url',
                    'video_blog_url_6' => 'nullable|url',
                    'video_blog_url_7' => 'nullable|url',
                    'video_blog_url_8' => 'nullable|url',
                    'video_blog_url_9' => 'nullable|url',
                    'video_blog_url_10'=> 'nullable|url',
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('event_thumb_image')){
                    $blogEventThumbImagePath = $request->file('event_thumb_image')->store('blogs/events', 'public');
                    Storage::disk('public')->delete('blogs/events/'.$request->existing_event_thumb_image);
                }else{
                    $blogEventThumbImagePath = 'blogs/events/'.$request->existing_event_thumb_image;
                }

                if($request->file('banner_images')){
                    foreach($request->file('banner_images') as $bannerImage){
                        $bannerImagePaths[] = $bannerImage->store('blogs/events', 'public');
                    }
                    
                    $existingBannerImages = json_decode($request->existing_banner_images, true);
                    foreach($existingBannerImages as $bannerImage){
                        Storage::disk('public')->delete($bannerImage);
                    }
                }else{
                    $bannerImagePaths = json_decode($request->existing_banner_images, true);
                }

                if($request->file('event_images')){
                    foreach($request->file('event_images') as $eventImage){
                        $eventImagePaths[] = $eventImage->store('blogs/events', 'public');
                    }

                    $existingEventImages = json_decode($request->existing_event_images, true);
                    foreach($existingEventImages as $eventImage){
                        Storage::disk('public')->delete($eventImage);
                    }
                }else{
                    $eventImagePaths = json_decode($request->existing_event_images, true);
                }
                
                $blogEvent->update([
                    'event_title'               => $request->event_title,
                    'is_highlighted_event'      => $request->is_highlighted_event,
                    'event_short_description'   => $request->event_short_description,
                    'event_thumb_image'         => basename($blogEventThumbImagePath),
                    'event_details'             => $request->event_details,
                    'event_highlighted_details' => $request->event_highlighted_details,
                    'banner_images'             => json_encode($bannerImagePaths),
                    'event_images'              => json_encode($eventImagePaths),
                    'reel_video_title'          => $request->reel_video_title,
                    'reel_video_url'            => $request->reel_video_url,
                    'video_blog_urls'           => json_encode([
                        $request->video_blog_url_1,
                        $request->video_blog_url_2,
                        $request->video_blog_url_3,
                        $request->video_blog_url_4,
                        $request->video_blog_url_5,
                        $request->video_blog_url_6,
                        $request->video_blog_url_7,
                        $request->video_blog_url_8,
                        $request->video_blog_url_9,
                        $request->video_blog_url_10,
                    ])
                ]);
                
                session()->flash('success', 'Blog event details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('blog.events.events.index', $id)
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
    public function destroy(Request $request, $id, $eventId): JsonResponse
    {
        if($request->ajax()){
            try{
                $blogEvent = BlogEvent::findOrFail($eventId);
                $blogEvent->delete();

                session()->flash('success', 'Blog event details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('blog.events.events.index', $blogEvent->blog_id)
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