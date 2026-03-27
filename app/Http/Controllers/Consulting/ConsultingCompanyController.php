<?php

namespace App\Http\Controllers\Consulting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Consulting\ConsultingCompany;

class ConsultingCompanyController extends Controller
{
    /**
     * Display a list of all resource.
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $consultingCompanies = ConsultingCompany::all();
        return view('consulting.companies.index', compact('consultingCompanies'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('consulting.companies.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        if($request->ajax()){
            $companyLogoImagePath = '';

            try{
                $validator = Validator::make($request->all(), [
                    'company_name' => 'required|string|max:255',
                    'company_logo' => 'required|image|max:2048'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('company_logo')){
                    $companyLogoImagePath = $request->file('company_logo')->store('consulting/companies', 'public');
                }

                ConsultingCompany::create([
                    'company'     => $request->company_name,
                    'description' => $request->company_description ?? null,
                    'image'       => $companyLogoImagePath ? basename($companyLogoImagePath) : null
                ]);
        
                session()->flash('success', 'Consulting company registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('consulting.companies.index')
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
        $consultingCompany = ConsultingCompany::findOrFail($id);
        return view('consulting.companies.edit', compact('consultingCompany'));
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
            $companyLogoImagePath = '';

            try{
                $consultingCompany = ConsultingCompany::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'company_name' => 'required|string|max:255',
                    'company_logo' => 'nullable|image|max:2048',
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('company_logo')){
                    $companyLogoImagePath = $request->file('company_logo')->store('consulting/companies', 'public');
                    Storage::disk('public')->delete('consulting/companies/'.$request->existing_company_logo);
                }else{
                    if($request->existing_company_logo){
                        $companyLogoImagePath = 'consulting/companies/'.$request->existing_company_logo;
                    }
                }

                $consultingCompany->update([
                    'company'     => $request->company_name,
                    'description' => $request->company_description ?? null,
                    'image'       => $companyLogoImagePath ? basename($companyLogoImagePath) : null,
                ]);
        
                session()->flash('success', 'Consulting company details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('consulting.companies.index')
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