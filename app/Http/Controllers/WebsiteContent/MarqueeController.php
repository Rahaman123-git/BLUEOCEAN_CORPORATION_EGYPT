<?php

namespace App\Http\Controllers\WebsiteContent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\WebsiteContent\Marquee;

class MarqueeController extends Controller
{
    /**
     * Display a list of all resource.
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $marquees = Marquee::all();
        return view('website-content.marquees.marquees', compact('marquees'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        if($request->ajax()){
            $marqueeImagePath = '';

            try{
                $validator = Validator::make($request->all(), [
                    'page_type'     => 'required|string|in:HOME,CONSULTING,TRAINING,CONFERENCE',
                    'marquee_image' => 'required|image|max:2048'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }
                
                if($request->file('marquee_image')){
                    $marqueeImagePath = $request->file('marquee_image')->store('website-content/marquees', 'public');
                }

                Marquee::create([
                    'page_type' => $request->page_type,
                    'image'     => $marqueeImagePath ? basename($marqueeImagePath) : null
                ]);
                
                session()->flash('success', 'Marquee registered successfully!');

                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('website.content.marquees.index')
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
                $marquee = Marquee::findOrFail($id);
                $marquee->delete();

                session()->flash('success', 'Marquee details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('website.content.marquees.index')
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