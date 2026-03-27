<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Course\Trainer;

class TrainerController extends Controller
{
    /**
     * Display a list of all resource.
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $trainers = Trainer::all();
        return view('courses.trainers.index', compact('trainers'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        if($request->ajax()){
            $trainerImagePath = '';
            
            try{
                $validator = Validator::make($request->all(), [
                    'trainer_image' => 'required|image|max:2048',
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->has('trainer_image') && $request->file('trainer_image')){
                    $trainerImagePath = $request->file('trainer_image')->store('courses/trainers', 'public');
                }

                Trainer::create([
                    'trainer_image' => $trainerImagePath ? basename($trainerImagePath) : null
                ]);
                
                session()->flash('success', 'Trainer registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.trainers.index')
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
                $trainer = Trainer::findOrFail($id);
                $trainer->delete();

                session()->flash('success', 'Trainer details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.trainers.index')
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