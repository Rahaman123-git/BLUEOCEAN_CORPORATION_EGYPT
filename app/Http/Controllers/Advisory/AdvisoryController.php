<?php

namespace App\Http\Controllers\Advisory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Advisory\Advisory;

class AdvisoryController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $advisories = Advisory::all();
        return view('advisories.index', compact('advisories'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('advisories.create');
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
            $advisorImagePaths = '';

            try{
                $validator = Validator::make($request->all(), [
                    'advisor_name'  => 'required|string|max:255',
                    'designation'   => 'required|string|max:255',
                    'organisation'  => 'required|string|max:255',
                    'brief_bio'     => 'required|string',
                    'details_bio'   => 'required|string',
                    'advisor_image' => 'required|image|max:2048'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('advisor_image')){
                    $advisorImagePaths = $request->file('advisor_image')->store('advisories', 'public');
                }

                Advisory::create([
                    'slug'          	=> Str::of($request->advisor_name)->slug('-'),
                    'advisor_name'  	=> $request->advisor_name,
                    'designation'   	=> $request->designation,
                    'organisation'  	=> $request->organisation,
                    'expertise'     	=> $request->expertise ?? null,
                    'contributions' 	=> $request->contributions ?? null,
                    'brief_bio'     	=> $request->brief_bio,
                    'details_bio'   	=> $request->details_bio,
                    'details_bio_table' => $request->details_bio_table,
                    'image'         	=> $advisorImagePaths ? basename($advisorImagePaths) : null
                ]);
        
                session()->flash('success', 'Advisory registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('advisories.index')
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
        $advisory = Advisory::findOrFail($id);
        return view('advisories.edit', compact('advisory'));
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
            $advisorImagePaths = '';

            try{
                $advisory = Advisory::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'advisor_name'  => 'required|string|max:255',
                    'designation'   => 'required|string|max:255',
                    'organisation'  => 'required|string|max:255',
                    'brief_bio'     => 'required|string',
                    'details_bio'   => 'required|string',
                    'advisor_image' => 'nullable|image|max:2048'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }
            
                if($request->file('advisor_image')){
                    $advisorImagePaths = $request->file('advisor_image')->store('advisories', 'public');
                    Storage::disk('public')->delete('advisories/'.$request->existing_advisor_image);
                }else{
                    $advisorImagePaths = 'advisories/'.$request->existing_advisor_image;
                }

                $advisory->update([
                    'advisor_name'  	=> $request->advisor_name,
                    'designation'   	=> $request->designation,
                    'organisation'  	=> $request->organisation,
                    'expertise'     	=> $request->expertise ?? null,
                    'contributions' 	=> $request->contributions ?? null,
                    'brief_bio'     	=> $request->brief_bio,
                    'details_bio'   	=> $request->details_bio,
                	'details_bio_table' => $request->details_bio_table,
                    'image'         	=> $advisorImagePaths ? basename($advisorImagePaths) : null
                ]);
        
                session()->flash('success', 'Advisory details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('advisories.index')
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
                $advisory = Advisory::findOrFail($id);
                $advisory->delete();

                session()->flash('success', 'Advisory details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('advisories.index')
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