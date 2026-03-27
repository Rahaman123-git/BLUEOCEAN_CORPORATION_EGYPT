<?php

namespace App\Http\Controllers\Consulting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\Consulting\ConsultingCompany;
use App\Models\Consulting\Consulting;

class ConsultingController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $consulting = Consulting::all();
        return view('consulting.consulting.index', compact('consulting'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $consultingCompanies = ConsultingCompany::all();
        return view('consulting.consulting.create', compact('consultingCompanies'));
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
            $caseStudyFilePath = '';

            try{
                $validator = Validator::make($request->all(), [
                    'consulting_company_id'         => 'required|integer',
                    'consulting_title'              => 'required|string|max:255',
                    'challenge'                     => 'required|string',
                    'highlighted_summary'           => 'required|string',
                    'highlighted_issue'             => 'required|string',
                    'boc_engagement_approach'       => 'required|string',
                    'solutions_designed_delivered'  => 'required|string',
                    'business_impact_delivered'     => 'required|string',
                    'key_learnings_recommendations' => 'required|string',
                    'why_boc'                       => 'required|string',
                    'case_study_banner_image'       => 'required|image|max:2048',
                    'case_study_image'              => 'required|image|max:2048',
                    'case_study_thumb_image'        => 'required|image|max:2048'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('case_study_file')){
                    $caseStudyFilePath = $request->file('case_study_file')->store('consulting/case-studies', 'public');
                }
               
                Consulting::create([
                    'consulting_company_id'         => $request->consulting_company_id,
                    'consulting_title'              => $request->consulting_title,
                    'slug'                          => Str::of($request->consulting_title)->slug('-'),
                    'challenge'                     => $request->challenge,
                    'highlighted_summary'           => $request->highlighted_summary,
                    'highlighted_issue'             => $request->highlighted_issue,
                    'boc_engagement_approach'       => $request->boc_engagement_approach,
                    'solutions_designed_delivered'  => $request->solutions_designed_delivered,
                    'business_impact_delivered'     => $request->business_impact_delivered,
                    'key_learnings_recommendations' => $request->key_learnings_recommendations,
                    'why_boc'                       => $request->why_boc,
                    'case_study_file'               => $caseStudyFilePath ? basename($caseStudyFilePath) : null
                ]);
        
                session()->flash('success', 'Consulting details registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('consulting.index')
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
        $consulting          = Consulting::findOrFail($id);

        return view('consulting.consulting.edit', compact('consultingCompanies', 'consulting'));
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
            $caseStudyFilePath = '';
            $caseStudyImagePath = '';
            $caseStudyThumbImagePath = '';
            $caseStudyBannerImagePath = '';

            try{
                $consulting = Consulting::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'consulting_company_id'         => 'required|integer',
                    'consulting_title'              => 'required|string|max:255',
                    'challenge'                     => 'required|string',
                    'highlighted_summary'           => 'required|string',
                    'highlighted_issue'             => 'required|string',
                    'boc_engagement_approach'       => 'required|string',
                    'solutions_designed_delivered'  => 'required|string',
                    'business_impact_delivered'     => 'required|string',
                    'key_learnings_recommendations' => 'required|string',
                    'why_boc'                       => 'required|string',
                    'case_study_banner_image'       => 'required|image|max:2048',
                    'case_study_image'              => 'required|image|max:2048',
                    'case_study_thumb_image'        => 'required|image|max:2048'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('case_study_banner_image')){
                    $caseStudyBannerImagePath = $request->file('case_study_banner_image')->store('consulting/case-studies', 'public');
                    Storage::disk('public')->delete('consulting/case-studies/'.$request->existing_case_study_banner_image);
                }else{
                    if($request->existing_case_study_banner_image){
                        $caseStudyBannerImagePath = 'consulting/case-studies/'.$request->existing_case_study_banner_image;
                    }
                }

                if($request->file('case_study_image')){
                    $caseStudyImagePath = $request->file('case_study_image')->store('consulting/case-studies', 'public');
                    Storage::disk('public')->delete('consulting/case-studies/'.$request->existing_case_study_image);
                }else{
                    if($request->existing_case_study_image){
                        $caseStudyImagePath = 'consulting/case-studies/'.$request->existing_case_study_image;
                    }
                }

                if($request->file('case_study_thumb_image')){
                    $caseStudyThumbImagePath = $request->file('case_study_thumb_image')->store('consulting/case-studies', 'public');
                    Storage::disk('public')->delete('consulting/case-studies/'.$request->existing_case_study_thumb_image);
                }else{
                    if($request->existing_case_study_thumb_image){
                        $caseStudyThumbImagePath = 'consulting/case-studies/'.$request->existing_case_study_thumb_image;
                    }
                }

                if($request->file('case_study_file')){
                    $caseStudyFilePath = $request->file('case_study_file')->store('consulting/case-studies', 'public');
                    Storage::disk('public')->delete('consulting/case-studies/'.$request->existing_case_study_file);
                }else{
                    if($request->existing_case_study_file){
                        $caseStudyFilePath = 'consulting/case-studies/'.$request->existing_case_study_file;
                    }
                }

                $consulting->update([
                    'consulting_company_id'         => $request->consulting_company_id,
                    'consulting_title'              => $request->consulting_title,
                    'slug'                          => Str::of($request->consulting_title)->slug('-'),
                    'challenge'                     => $request->challenge,
                    'highlighted_summary'           => $request->highlighted_summary,
                    'highlighted_issue'             => $request->highlighted_issue,
                    'boc_engagement_approach'       => $request->boc_engagement_approach,
                    'solutions_designed_delivered'  => $request->solutions_designed_delivered,
                    'business_impact_delivered'     => $request->business_impact_delivered,
                    'key_learnings_recommendations' => $request->key_learnings_recommendations,
                    'why_boc'                       => $request->why_boc,
                    'case_study_banner_image'       => $caseStudyBannerImagePath ? basename($caseStudyBannerImagePath) : null,
                    'case_study_image'              => $caseStudyImagePath ? basename($caseStudyImagePath) : null,
                    'case_study_thumb_image'        => $caseStudyThumbImagePath ? basename($caseStudyThumbImagePath) : null,
                    'case_study_file'               => $caseStudyFilePath ? basename($caseStudyFilePath) : null,
                ]);
        
                session()->flash('success', 'Consulting details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('consulting.index')
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
                $consulting = Consulting::findOrFail($id);
                $consulting->delete();

                session()->flash('success', 'Case study details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('consulting.index')
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