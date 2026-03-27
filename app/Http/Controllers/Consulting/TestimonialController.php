<?php

namespace App\Http\Controllers\Consulting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Consulting\ConsultingCompany;
use App\Models\Consulting\Testimonial;

class TestimonialController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $testimonials = Testimonial::all();
        return view('consulting.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $consultingCompanies = ConsultingCompany::all();
        return view('consulting.testimonials.create', compact('consultingCompanies'));
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
            $clientImagePath = '';
         
            try{
                $validator = Validator::make($request->all(), [
                    'testimonial_type'      => 'required|string|in:TEXT_TESTIMONIAL',
                    'consulting_company_id' => 'required|exists:consulting_companies,id',
                    'client_name'           => 'required|string|max:255',
                    'client_designation'    => 'required|string|max:255',
                    'client_testimonial'    => 'required|string'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->testimonial_type == 'TEXT_TESTIMONIAL'){
                    Testimonial::create([
                        'testimonial_type'      => $request->testimonial_type,
                        'consulting_company_id' => $request->consulting_company_id,
                        'client_name'           => $request->client_name,
                        'client_designation'    => $request->client_designation,
                        'client_testimonial'    => $request->client_testimonial ?? null
                    ]);
                }
        
                session()->flash('success', 'Consulting testimonial registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('consulting.testimonials.index')
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
        $consultingCompanies = ConsultingCompany::all();
        $testimonial = Testimonial::findOrFail($id);
        
        return view('consulting.testimonials.edit', compact('consultingCompanies', 'testimonial'));
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
            $clientImagePath = '';
            
            try{
                $testimonial = Testimonial::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'testimonial_type'      => 'required|string|in:TEXT_TESTIMONIAL',
                    'consulting_company_id' => 'required|exists:consulting_companies,id',
                    'client_name'           => 'required|string|max:255',
                    'client_designation'    => 'required|string|max:255',
                    'client_testimonial'    => 'required|string'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->testimonial_type == 'TEXT_TESTIMONIAL'){
                    $testimonial->update([
                        'testimonial_type'      => $request->testimonial_type,
                        'consulting_company_id' => $request->consulting_company_id,
                        'client_name'           => $request->client_name,
                        'client_designation'    => $request->client_designation,
                        'client_testimonial'    => $request->client_testimonial ?? null
                    ]);
                }

                session()->flash('success', 'Consulting testimonial details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('consulting.testimonials.index')
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
    public function destroy(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $testimonial = Testimonial::findOrFail($id);
                $testimonial->delete();

                session()->flash('success', 'Consulting testimonial details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('consulting.testimonials.index')
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