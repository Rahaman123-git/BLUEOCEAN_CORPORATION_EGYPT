<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use App\Models\Course\Seminar;

class SeminarController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $seminars = Seminar::latest()->get();
        return view('courses.seminars.index', compact('seminars'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('courses.seminars.create');
    }

    /**
     * Store a newly created resource in the database.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     * 
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)//: JsonResponse
    {
        if($request->ajax()){
            $seminarBannerImagePath = '';
            $seminarRegistrationPageBannerImagePath = '';
           
            try{
                $validator = Validator::make($request->all(), [
                    'seminar_type'                           => 'required|string|in:FREE_SEMINAR,PAID_SEMINAR',
                    'seminar_title_initial'                  => 'nullable|string|max:25',
                    'seminar_title'                          => 'required|string|max:255',
                    'seminar_location'                       => 'required|string|max:50',
                    'seminar_date'                           => 'required|string|max:10',
                    'seminar_banner_image'                   => 'required|image|max:2048',
                    'seminar_registration_page_banner_image' => 'required|image|max:2048'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('seminar_banner_image')){
                    $seminarBannerImagePath = $request->file('seminar_banner_image')->store('courses/seminars', 'public');
                }

                if($request->file('seminar_registration_page_banner_image')){
                    $seminarRegistrationPageBannerImagePath = $request->file('seminar_registration_page_banner_image')->store('courses/seminars', 'public');
                }
                
                Seminar::create([
                    'slug'                                    => Str::of($request->seminar_title)->slug('-'),
                    'seminar_type'                            => $request->seminar_type,
                    'seminar_title_initial'                   => $request->seminar_title_initial,
                    'seminar_title'                           => $request->seminar_title,
                    'seminar_location'                        => $request->seminar_location,
                    'seminar_date'                            => Carbon::createFromFormat('d.m.Y', $request->seminar_date),
                    'seminar_description'                     => $request->seminar_description,
                    'seminar_banner_image'                    => $seminarBannerImagePath ? basename($seminarBannerImagePath) : null,
                    'seminar_registration_page_banner_image'  => $seminarRegistrationPageBannerImagePath ? basename($seminarRegistrationPageBannerImagePath) : null,
                ]);
        
                session()->flash('success', 'Course seminar registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.seminars.index')
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
        $seminar = Seminar::findOrFail($id);
        return view('courses.seminars.edit', compact('seminar'));
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
            $seminarBannerImagePath = '';
            $seminarRegistrationPageBannerImagePath = '';

            try{
                $seminar = Seminar::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'seminar_type'                           => 'required|string|in:FREE_SEMINAR,PAID_SEMINAR',
                    'seminar_title_initial'                  => 'nullable|string|max:25',
                    'seminar_title'                          => 'required|string|max:255',
                    'seminar_location'                       => 'required|string|max:50',
                    'seminar_date'                           => 'required|string|max:10',
                    'seminar_banner_image'                   => 'nullable|image|max:2048',
                    'seminar_registration_page_banner_image' => 'nullable|image|max:2048'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('seminar_banner_image')){
                    $seminarBannerImagePath = $request->file('seminar_banner_image')->store('courses/seminars', 'public');
                    Storage::disk('public')->delete('courses/seminars/'.$request->existing_seminar_banner_image);
                }else{
                    if($request->existing_seminar_banner_image){
                        $seminarBannerImagePath = 'courses/seminars/'.$request->existing_seminar_banner_image;
                    }
                }

                if($request->file('seminar_registration_page_banner_image')){
                    $seminarRegistrationPageBannerImagePath = $request->file('seminar_registration_page_banner_image')->store('courses/seminars', 'public');
                    Storage::disk('public')->delete('courses/seminars/'.$request->existing_seminar_registration_page_banner_image);
                }else{
                    if($request->existing_seminar_registration_page_banner_image){
                        $seminarRegistrationPageBannerImagePath = 'courses/seminars/'.$request->existing_seminar_registration_page_banner_image;
                    }
                }
                
                $seminar->update([
                    // 'slug'                                    => Str::of($request->seminar_title)->slug('-'),
                    'seminar_type'                            => $request->seminar_type,
                    'seminar_title_initial'                   => $request->seminar_title_initial,
                    'seminar_title'                           => $request->seminar_title,
                    'seminar_location'                        => $request->seminar_location,
                    'seminar_date'                            => Carbon::createFromFormat('d.m.Y', $request->seminar_date),
                    'seminar_description'                     => $request->seminar_description,
                    'seminar_banner_image'                    => $seminarBannerImagePath ? basename($seminarBannerImagePath) : null,
                    'seminar_registration_page_banner_image'  => $seminarRegistrationPageBannerImagePath ? basename($seminarRegistrationPageBannerImagePath) : null,
                ]);
        
                session()->flash('success', 'Course seminar details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.seminars.index')
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
                $seminar = Seminar::findOrFail($id);
                $seminar->delete();

                session()->flash('success', 'Course seminar details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('courses.categories.index')
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