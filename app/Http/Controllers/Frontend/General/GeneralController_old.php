<?php

namespace App\Http\Controllers\Frontend\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;
use App\Models\Course\Seminar;
use App\Models\News\News;
use App\Models\Advisory\Advisory;
use App\Models\Award\Award;
use App\Models\WebsiteContent\PageSetting;

class GeneralController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
    
    	$news 	= News::where('category', 'featured')->get();
    	$awards = Award::all();
    
        return view('frontend.general.home', compact('news', 'awards'));
    }

    public function aboutUs(): View
    {
    	$awards = Award::all();
        return view('frontend.general.about-us', compact('awards'));
    }

    public function newsInsight(): View
    {
       
    
    $perPage = 10;

    	$news['featured'] = News::where('category', 'featured')->orderBy('id', 'desc')
                        ->paginate($perPage);
    	$news['digitalMediaURL'] = News::where('category', 'digitalMediaLink')->get();
        $pageSetting = PageSetting::where('page_type', 'NEWS')->first();
    
        return view('frontend.general.news-insight', compact('news', 'pageSetting'));
    
    }
    
     public function advisoryBoard(): View
    {
        $advisories = Advisory::all();
        return view('frontend.general.advisory-board', compact('advisories'));
    }

    public function advisoryMemberDetails($slug): View
    {
        if($slug == 'sourav-ganguly'){
            return view('frontend.general.advisory-member.sourav-ganguly');
        }else if($slug == 'michael-proffitt'){
            return view('frontend.general.advisory-member.michael-proffitt');
        }else if($slug == 'dr-sathya-menon'){
            return view('frontend.general.advisory-member.sathya-menon');
        }else if($slug == 'abdul-azeez'){
            return view('frontend.general.advisory-member.abdul-azeez');
        }else if($slug == 'john-ellis'){
            return view('frontend.general.advisory-member.john-ellis');
        }else if($slug == 'vs-ramachandran'){
            return view('frontend.general.advisory-member.vs-ramachandran');
        }else{
            $advisoryMember = Advisory::where('slug', $slug)->first();

            if($advisoryMember){
                return view('frontend.general.advisory-member.member-details', compact('advisoryMember'));
            }else{
                abort(404);
            }
        }
    }
  
    public function awards(): View
    {
    	$awards = Award::all();
        
        if($awards){
            foreach($awards as $award){
                $awardCategorywise[$award->category->category][] = $award;
            }
        }
    
        return view('frontend.general.awards', compact('awardCategorywise'));
    }

    public function gallery($category = ''): View
    {
    	if($category == 'training'){
            return view('frontend.general.training-gallery');
        }else if($category == 'conferences'){
            return view('frontend.general.conferences-gallery');
        }else if($category == 'boc-life'){
            return view('frontend.general.boc-life-gallery');
        }else{
            return view('frontend.general.gallery');
        }
    }

    public function bocLife(): View
    {
        return view('frontend.general.boc-life');
    }

    public function careers(): View
    {
        return view('frontend.general.careers');
    }

    public function faq(): View
    {
        return view('frontend.general.faq');
    }

    public function privacyPolicy(): View
    {
        return view('frontend.general.privacy-policy');
    }

    public function termsConditions(): View
    {
        return view('frontend.general.terms-conditions');
    }
    
    public function contactUs(): View
    {
        return view('frontend.general.contact-us');
    }
}