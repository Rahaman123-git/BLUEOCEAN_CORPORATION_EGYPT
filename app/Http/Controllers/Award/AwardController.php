<?php

namespace App\Http\Controllers\Award;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Award\AwardCategory;
use App\Models\Award\Award;

class AwardController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $awards = Award::all();
        return view('awards.index', compact('awards'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $awardCategories = AwardCategory::all();
        return view('awards.create', compact('awardCategories'));
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
            $awardImagePaths = [];

            try{
                $validator = Validator::make($request->all(), [
                    'award_category_id'  => 'required|string|max:255',
                    'award_title'        => 'required|string|max:255',
                    'awarding_body'      => 'nullable|string|max:255',
                    'award_significance' => 'nullable|string',
                    'award_impact'       => 'nullable|string',
                    'award_image'        => 'required|array',
                    'award_image.*'      => 'image|max:2048'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if ($request->hasFile('award_image')) {
                    foreach ($request->file('award_image') as $image) {
                        $path = $image->store('awards', 'public');
                        $awardImagePaths[] = basename($path); // or use $path if you want full relative path
                    }
                }

                Award::create([
                    'award_category_id' => $request->award_category_id,
                    'title'             => $request->award_title,
                    'awarding_body'     => $request->awarding_body ?? null,
                    'significance'      => $request->award_significance ?? null,
                    'impact'            => $request->award_impact ?? null,
                    'image'             => count($awardImagePaths) ? json_encode($awardImagePaths) : null
                ]);
        
                session()->flash('success', 'Award registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('awards.index')
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id): View
    {
        $award = Award::findOrFail($id);
        return view('awards.edit', compact('award'));
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
                $award = Award::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'award_category'     => 'required|string|max:255',
                    'award_title'        => 'required|string|max:255',
                    'awarding_body'      => 'nullable|string|max:255',
                    'award_significance' => 'nullable|string',
                    'award_impact'       => 'nullable|string',
                    'award_image'        => 'nullable|image|max:2048'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }
            
            	if ($request->hasFile('award_image')) {
                    foreach ($request->file('award_image') as $image) {
                        $path = $image->store('awards', 'public');
                        $awardImagePaths[] = basename($path); // or use $path if you want full relative path
                    }
                }else{
                	$awardImagePath = json_encode($request->existing_award_image);
                }

                /* if($request->file('award_image')){
                    $awardImagePath = $request->file('award_image')->store('awards', 'public');
                    Storage::disk('public')->delete('awards/'.$request->existing_award_image);
                }else{
                    $awardImagePath = 'awards/'.$request->existing_award_image;
                } */

                $award->update([
                    'category'      => $request->award_category,
                    'title'         => $request->award_title,
                    'awarding_body' => $request->awarding_body ?? null,
                    'significance'  => $request->award_significance ?? null,
                    'impact'        => $request->award_impact ?? null,
                    'image'         => count($awardImagePaths) ? json_encode($awardImagePaths) : null
                ]);
        
                session()->flash('success', 'Award details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('awards.index')
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
                $award = Award::findOrFail($id);
                $award->delete();

                session()->flash('success', 'Award details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('awards.index')
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