<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Conference\Conference;
use App\Models\Gallery\Gallery;
use Carbon\Carbon;

class GalleryController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @param string $media
     * @param string $tag
     * @return \Illuminate\View\View
     */
    public function index(Request $request, $media, $tag): View
    {
        if($media == 'photos'){
            if($tag == 'boc-life'){
                $galleries = Gallery::where(['media_type' => $media, 'page_type' => $tag])->get();
                return view('gallery.photos.boc-life.index', compact('media', 'tag', 'galleries'));
            }else if($tag == 'training'){
                $galleries = Gallery::where(['media_type' => $media, 'page_type' => $tag])->get();
                return view('gallery.photos.training.index', compact('media', 'tag', 'galleries'));
            }else if($tag == 'event'){
                $conference = Conference::findOrFail($request->q);
                $galleries = Gallery::where(['media_type' => $media, 'page_type' => $tag, 'conference_id' => $conference->id])->get();

                return view('gallery.photos.conference.index', compact('media', 'tag', 'conference', 'galleries'));
            }else{
                abort(404);
            }
        }else if($media == 'videos'){
            if($tag == 'boc-life'){
                $galleries = Gallery::where(['media_type' => $media, 'page_type' => $tag])->get();
                return view('gallery.videos.boc-life.index', compact('media', 'tag', 'galleries'));
            }else if($tag == 'training'){
                $galleries = Gallery::where(['media_type' => $media, 'page_type' => $tag])->get();
                return view('gallery.videos.training.index', compact('media', 'tag', 'galleries'));
            }else if($tag == 'event'){
                $conference = Conference::findOrFail($request->q);
                $galleries = Gallery::where(['media_type' => $media, 'page_type' => $tag, 'conference_id' => $conference->id])->get();

                return view('gallery.videos.conference.index', compact('media', 'tag', 'conference', 'galleries'));
            }else{
                abort(404);
            }
        }
    }

    /**
     * Show the form to create a new resource.
     *
     * @param string $tag
     * @return \Illuminate\View\View
     */
    public function create(Request $request, $media, $tag): View
    {
        if($media == 'photos'){
            if($tag == 'boc-life'){
                return view('gallery.photos.boc-life.create', compact('media', 'tag'));
            }else if($tag == 'training'){
                return view('gallery.photos.training.create', compact('media', 'tag'));
            }else if($tag == 'event'){
                $conference = Conference::findOrFail($request->q);
                $conferenceYear = Carbon::createFromFormat('d.m.Y', $conference->event_date)->year;
                
                return view('gallery.photos.conference.create', compact('media', 'tag', 'conference', 'conferenceYear'));
            }else{
                abort(404);
            }
        }else if($media == 'videos'){
            if($tag == 'boc-life'){
                return view('gallery.videos.boc-life.create', compact('media', 'tag'));
            }else if($tag == 'training'){
                return view('gallery.videos.training.create', compact('media', 'tag'));
            }else if($tag == 'event'){
                $conference = Conference::findOrFail($request->q);
                $conferenceYear = Carbon::createFromFormat('d.m.Y', $conference->event_date)->year;
                
                return view('gallery.videos.conference.create', compact('media', 'tag', 'conference', 'conferenceYear'));
            }else{
                abort(404);
            }
        }
    }

    /**
     * Store a newly created resource in the database.
     * 
     * @param \Illuminate\Http\Request $request
     * @param string $tag
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, $media, $tag): JsonResponse
    {
        if($request->ajax()){
            $galleryImagePath = '';
            $videoImagePath = '';

            try{
                if($media == 'photos'){
                    if(in_array($tag, ['boc-life', 'training'])){
                        $validator = Validator::make($request->all(), [
                            'photo_year'    => 'required|string',
                            'photo_title'   => 'required|string|max:255',
                            'gallery_image' => 'required|image|max:2048'
                        ]);
                    }else if($tag == 'event'){
                        $validator = Validator::make($request->all(), [
                            'conference_id' => 'required|exists:conferences,id',
                            'photo_year'    => 'required|string',
                            'photo_title'   => 'required|string|max:255',
                            'gallery_image' => 'required|image|max:2048'
                        ]);
                    }
        
                    if($validator->fails()){
                        return response()->json([
                            'status' => 'error',
                            'errors' => $validator->errors(),
                        ], 422);
                    }

                    if($request->file('gallery_image')){
                        $galleryImagePath = $request->file('gallery_image')->store('gallery/photos', 'public');
                    }
                }else if($media == 'videos'){
                    if(in_array($tag, ['boc-life', 'training'])){
                        $validator = Validator::make($request->all(), [
                            'video_year'        => 'required|string',
                            'video_title'       => 'required|string|max:255',
                            'video_url'         => 'required|url|max:255',
                            'video_thumb_image' => 'required|image|max:2048'
                        ]);
                    }else if($tag == 'event'){
                        $validator = Validator::make($request->all(), [
                            'conference_id'     => 'required|exists:conferences,id',
                            'video_year'        => 'required|string',
                            'video_title'       => 'required|string|max:255',
                            'video_url'         => 'required|url|max:255',
                            'video_thumb_image' => 'required|image|max:2048'
                        ]);
                    }
        
                    if($validator->fails()){
                        return response()->json([
                            'status' => 'error',
                            'errors' => $validator->errors(),
                        ], 422);
                    }

                    if($request->file('video_thumb_image')){
                        $videoImagePath = $request->file('video_thumb_image')->store('gallery/videos', 'public');
                    }
                }

                Gallery::create([
                    'media_type'        => $media,
                    'page_type'         => $tag,
                    'conference_id'     => $request->conference_id ?? null,
                    'photo_year'        => $request->photo_year ?? null,
                    'video_year'        => $request->video_year ?? null,
                    'photo_title'       => $request->photo_title ?? null,
                    'video_title'       => $request->video_title ?? null,
                    'image'             => $galleryImagePath ? basename($galleryImagePath) : null,
                    'video_url'         => $request->video_url ?? null,
                    'video_thumb_image' => $videoImagePath ? basename($videoImagePath) : null
                ]);
            
                session()->flash('success', 'Gallery media registered successfully!');
                
                if($tag == 'event'){
                    return response()->json([
                        'status'      => 'success',
                        'redirectUrl' => route('galleries.index', [$media, $tag, 'q' => $request->conference_id])
                    ], 200);
                }else{
                    return response()->json([
                        'status'      => 'success',
                        'redirectUrl' => route('galleries.index', [$media, $tag])
                    ], 200);
                }
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
     * Show the form for editing the specified resource.
     *
     * @param string $tag
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit(Request $request, $media, $tag, $id): View
    {
        $gallery = Gallery::findOrFail($id);

        if($media == 'photos'){
            if($tag == 'boc-life'){
                return view('gallery.photos.boc-life.edit', compact('media', 'tag', 'gallery'));
            }else if($tag == 'training'){
                return view('gallery.photos.training.edit', compact('media', 'tag', 'gallery'));
            }else if($tag == 'event'){
                $conference = Conference::findOrFail($request->q);
                $conferenceYear = Carbon::createFromFormat('d.m.Y', $conference->event_date)->year;

                return view('gallery.photos.conference.edit', compact('media', 'tag', 'conference', 'conferenceYear', 'gallery'));
            }else{
                abort(404);
            }
        }else if($media == 'videos'){
            if($tag == 'boc-life'){
                return view('gallery.videos.boc-life.edit', compact('media', 'tag', 'gallery'));
            }else if($tag == 'training'){
                return view('gallery.videos.training.edit', compact('media', 'tag', 'gallery'));
            }else if($tag == 'event'){
                $conference = Conference::findOrFail($request->q);
                $conferenceYear = Carbon::createFromFormat('d.m.Y', $conference->event_date)->year;

                return view('gallery.videos.conference.edit', compact('media', 'tag', 'conference', 'conferenceYear', 'gallery'));
            }else{
                abort(404);
            }
        }
    }

    /**
     * Update the specified resource in the database.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $tag
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $media, $tag, $id): JsonResponse
    {
        if($request->ajax()){
            $galleryImagePath = '';
            $videoImagePath = '';

            try{
                $gallery = Gallery::findOrFail($id);

                if($media == 'photos'){
                    if(in_array($tag, ['boc-life', 'training'])){
                        $validator = Validator::make($request->all(), [
                            'photo_year'    => 'required|string',
                            'photo_title'   => 'required|string|max:255',
                            'gallery_image' => 'nullable|image|max:2048'
                        ]);
                    }else if($tag == 'event'){
                        $validator = Validator::make($request->all(), [
                            'conference_id' => 'required|exists:conferences,id',
                            'photo_year'    => 'required|string',
                            'photo_title'   => 'required|string|max:255',
                            'gallery_image' => 'nullable|image|max:2048'
                        ]);
                    }
               
                    if($validator->fails()){
                        return response()->json([
                            'status' => 'error',
                            'errors' => $validator->errors(),
                        ], 422);
                    }

                    if($request->file('gallery_image')){
                        $galleryImagePath = $request->file('gallery_image')->store('gallery/photos', 'public');
                        Storage::disk('public')->delete('gallery/photos/'.$request->existing_gallery_image);
                    }else{
                        if($request->existing_gallery_image){
                            $galleryImagePath = 'gallery/photos/'.$request->existing_gallery_image;
                        }
                    }
                }else if($media == 'videos'){
                    if(in_array($tag, ['boc-life', 'training'])){
                        $validator = Validator::make($request->all(), [
                            'video_year'        => 'required|string',
                            'video_title'       => 'required|string|max:255',
                            'video_url'         => 'required|url|max:255',
                            'video_thumb_image' => 'nullable|image|max:2048'
                        ]);
                    }else if($tag == 'event'){
                        $validator = Validator::make($request->all(), [
                            'conference_id'     => 'required|exists:conferences,id',
                            'video_year'        => 'required|string',
                            'video_title'       => 'required|string|max:255',
                            'video_url'         => 'required|url|max:255',
                            'video_thumb_image' => 'nullable|image|max:2048'
                        ]);
                    }
        
                    if($validator->fails()){
                        return response()->json([
                            'status' => 'error',
                            'errors' => $validator->errors(),
                        ], 422);
                    }

                    if($request->file('video_thumb_image')){
                        $videoImagePath = $request->file('video_thumb_image')->store('gallery/videos', 'public');
                        Storage::disk('public')->delete('gallery/videos/'.$request->existing_video_thumb_image);
                    }else{
                        if($request->existing_video_thumb_image){
                            $videoImagePath = 'gallery/videos/'.$request->existing_video_thumb_image;
                        }
                    }
                }

                $gallery->update([
                    'media_type'        => $media,
                    'page_type'         => $tag,
                    'conference_id'     => $request->conference_id ?? null,
                    'photo_year'        => $request->photo_year ?? null,
                    'video_year'        => $request->video_year ?? null,
                    'photo_title'       => $request->photo_title ?? null,
                    'video_title'       => $request->video_title ?? null,
                    'image'             => $galleryImagePath ? basename($galleryImagePath) : null,
                    'video_url'         => $request->video_url ?? null,
                    'video_thumb_image' => $videoImagePath ? basename($videoImagePath) : null
                ]);
        
                session()->flash('success', 'Gallery media details updated successfully!');

                if($tag == 'event'){
                    return response()->json([
                        'status'      => 'success',
                        'redirectUrl' => route('galleries.index', [$media, $tag, 'q' => $request->conference_id])
                    ], 200);
                }else{
                    return response()->json([
                        'status'      => 'success',
                        'redirectUrl' => route('galleries.index', [$media, $tag])
                    ], 200);
                }
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
    public function destroy(Request $request, $media, $tag, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $gallery = Gallery::findOrFail($id);
                $gallery->delete();

                session()->flash('success', 'Gallery media details deleted successfully!');

                if($tag == 'event'){
                    return response()->json([
                        'status'      => 'success',
                        'redirectUrl' => route('galleries.index', [$media, $tag, 'q' => $gallery->conference_id])
                    ], 200);
                }else{
                    return response()->json([
                        'status'      => 'success',
                        'redirectUrl' => route('galleries.index', [$media, $tag])
                    ], 200);
                }
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