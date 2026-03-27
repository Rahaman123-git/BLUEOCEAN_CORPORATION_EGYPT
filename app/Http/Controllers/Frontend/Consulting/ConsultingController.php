<?php

namespace App\Http\Controllers\Frontend\Consulting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
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
        return view('frontend.consulting.home');
    }
    
    public function precisionStrategy(): View
    {
        return view('frontend.consulting.precision-strategy');
    }

    public function strategicImpact(): View
    {
        $consultingCompanies = [];
        $otherCaseStudies = [];
        
        $consulting = Consulting::select('*')
            ->selectRaw('ROW_NUMBER() OVER (PARTITION BY consulting_company_id ORDER BY id DESC) as row_num')
            ->from('consulting')
            ->whereNotNull('consulting_company_id')
            ->orderBy('consulting_company_id')
            ->get()
            ->where('row_num', 1) // keep only top 1 per company
            ->take(3); // limit to 3 different companies

        $caseStudies = $consulting->values();

        if($caseStudies->count()){
            $consultingCompanies = ConsultingCompany::whereIn('id', $consulting->pluck('consulting_company_id')->toArray())->get();
            $otherCaseStudies = Consulting::whereNotIn('id', $consulting->pluck('id')->toArray())->inRandomOrder()->limit(3)->get();
        }

        return view('frontend.consulting.strategic-impact', compact('consultingCompanies', 'caseStudies', 'otherCaseStudies'));
    }

    public function caseStudies($slug): View
    {
        $caseStudy = Consulting::where('slug', $slug)->first();

        if($caseStudy){
            $relatedCaseStudies = Consulting::where('consulting_company_id', $caseStudy->consulting_company_id)
                ->where('slug', '!=', $slug)
                ->inRandomOrder()
                ->limit(3)
                ->get();
           
            return view('frontend.consulting.case-studies', compact('caseStudy', 'relatedCaseStudies'));
        }else{
            abort(404);
        }
    }

    public function register(): View
    {
        return view('frontend.consulting.register');
    }
}