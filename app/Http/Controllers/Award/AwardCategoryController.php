<?php

namespace App\Http\Controllers\Award;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Award\AwardCategory;

class AwardCategoryController extends Controller
{
    /**
     * Display a list of all resource.
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $awardCategories = AwardCategory::all();
        return view('awards.award-categories', compact('awardCategories'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        if($request->ajax()){
            try{
                $validator = Validator::make($request->all(), [
                    'category_name' => 'required|string|max:255',
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }
                
                AwardCategory::create([
                    'category' => $request->category_name
                ]);
                
                session()->flash('success', 'Award category registered successfully!');

                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('awards.categories.index')
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
                $awardCategory = AwardCategory::findOrFail($id);
                $awardCategory->delete();

                session()->flash('success', 'Award category details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('awards.categories.index')
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