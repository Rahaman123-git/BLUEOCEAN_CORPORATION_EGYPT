<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\News\News;

class NewsController extends Controller
{
    /**
     * Display a list of all resource.
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, $newsCategory): JsonResponse
    {
        if($request->ajax()){
            $featuredNewsImagePath = '';
            
            try{
                if($newsCategory == 'featured'){
                    $validator = Validator::make($request->all(), [
                        'featured_news_image' => 'required|image|max:2048',
                    ]);
                }else if($newsCategory == 'digitalMediaLink'){
                    $validator = Validator::make($request->all(), [
                        'digital_media_url' => 'required|url',
                    ]);
                }
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->has('featured_news_image') && $request->file('featured_news_image')){
                    $featuredNewsImagePath = $request->file('featured_news_image')->store('news', 'public');
                }

                News::create([
                    'category'            => $newsCategory,
                    'digital_media_url'   => $request->digital_media_url ?? null,
                    'featured_news_image' => $featuredNewsImagePath ? basename($featuredNewsImagePath) : null,
                ]);
                
                if($newsCategory == 'featured'){
                    session()->flash('success', 'Featured news registered successfully!');
                }else if($newsCategory == 'digitalMediaLink'){
                    session()->flash('success', 'News digital media link registered successfully!');
                }

                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('news.index')
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

    public function destroy(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $news = News::findOrFail($id);
                $news->delete();

                session()->flash('success', 'News details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('news.index')
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