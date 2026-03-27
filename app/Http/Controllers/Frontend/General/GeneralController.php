<?php

namespace App\Http\Controllers\Frontend\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\News\News;
use App\Models\Conference\Conference;
use App\Models\Course\Seminar;
use App\Models\Advisory\Advisory;
use App\Models\Award\Award;
use App\Models\Gallery\Gallery;
use App\Models\WebsiteContent\PageSetting;
use Carbon\Carbon;

class GeneralController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        /* $upcomingConference = Conference::where('event_date', '>', Carbon::now())
            ->orderBy('event_date', 'asc')->first(); */
    	$upcomingConference = Conference::orderBy('event_date', 'desc')->first();
        $seminars           = Seminar::where('seminar_date', '>', Carbon::now())
            ->orderBy('seminar_date', 'desc')
            ->get();
    	$news 	            = News::where('category', 'featured')->get();
    	$awards             = Award::all();
        $pageSetting        = PageSetting::where('page_type', 'HOME_PAGE')->first();
    
        return view('frontend.general.home', compact('upcomingConference', 'news', 'awards', 'pageSetting'));
    }

    public function aboutUs(): View
    {
    	$awards = Award::all();
        $pageSetting = PageSetting::where('page_type', 'ABOUT_US')->first();
       
        return view('frontend.general.about-us', compact('awards', 'pageSetting'));
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

    public function gallery(Request $request, $category = ''): View
    {
        $conferenceIds = [];
        $conferenceYear = [];
        $conferenceTitle = [];
        $photoEventYears = [];
        $videoEventYears = [];
        $photoGalleries = [];
        $videoGalleries = [];

        if(in_array($category, ['boc-life', 'training'])){
            $photoGalleries = Gallery::where(['media_type' => 'photos', 'page_type' => $category])->get();
            
            if($photoGalleries->count()){
                $photoEventYears = $photoGalleries->pluck('photo_year')->toArray();
                $photoEventYears = array_unique($photoEventYears);
                sort($photoEventYears);
            }

            $videoGalleries = Gallery::where(['media_type' => 'videos', 'page_type' => $category])->get();
            
            if($videoGalleries->count()){
                $videoEventYears = $videoGalleries->pluck('video_year')->toArray();
                $videoEventYears = array_unique($videoEventYears);
                sort($videoEventYears);
            }

            if($category == 'boc-life'){
                return view('frontend.general.boc-life-gallery', compact('photoEventYears', 'videoEventYears', 'photoGalleries', 'videoGalleries'));
            }else if($category == 'training'){
                return view('frontend.general.training-gallery', compact('photoEventYears', 'videoEventYears', 'photoGalleries', 'videoGalleries'));
            }
        }else if($category == 'event'){
            if(!$request->has('q') || !$request->has('e')){
                abort(404);
            }

            if(!in_array($request->q, ['IPSC', 'IHRC', 'CXO', 'BOWLD'])){
                abort(404);
            }
            
            $conferenceCategory = $request->q;
            $conferenceEvent = $request->e;
            $conferenceLocation = trim(str_replace($conferenceCategory, '', $conferenceEvent));

            $groupWiseConferences = Conference::select('id', 'event_category', 'event_location')
                ->orderBy('id')
                ->get()
                ->unique('event_category')
                ->pluck('event_location', 'event_category')->toArray();

            $defaultEvent['IPSC']  = (isset($groupWiseConferences['IPSC']) ? ('IPSC '.$groupWiseConferences['IPSC']) : '');
            $defaultEvent['IHRC']  = (isset($groupWiseConferences['IHRC']) ? ('IHRC '.$groupWiseConferences['IHRC']) : '');
            $defaultEvent['CXO']   = (isset($groupWiseConferences['CXO']) ? ('CXO '.$groupWiseConferences['CXO']) : '');
            $defaultEvent['BOWLD'] = (isset($groupWiseConferences['BOWLD']) ? ('BOWLD '.$groupWiseConferences['BOWLD']) : '');
            
            $conferences = Conference::where('event_category', $conferenceCategory)->get();

            if($conferences->count()){
                foreach($conferences as $conference){
                    if($conferenceLocation == $conference->event_location){
                        $conferenceIds[] = $conference->id;
                        $conferenceTitle[$conference->event_location] = $conference->event_category.' '.$conference->event_location;
                    }
                }
            
                if(count($conferenceIds)){
                    $photoGalleries = Gallery::where(['media_type' => 'photos', 'page_type' => $category])
                            ->where('image', '!=', '')
                            ->whereNotNull('image')
                            ->whereIn('conference_id', $conferenceIds)
                            ->get();
                    
                    if($photoGalleries->count()){
                        $photoEventYears = $photoGalleries->pluck('photo_year')->toArray();
                        $photoEventYears = array_unique($photoEventYears);
                        sort($photoEventYears);
                    }

                    $videoGalleries = Gallery::where(['media_type' => 'videos', 'page_type' => $category])
                        ->where('video_url', '!=', '')
                        ->whereNotNull('video_url')
                        ->whereIn('conference_id', $conferenceIds)->get();
                    
                    if($videoGalleries->count()){
                        $videoEventYears = $videoGalleries->pluck('video_year')->toArray();
                        $videoEventYears = array_unique($videoEventYears);
                        sort($videoEventYears);
                    }
                }
            }
           
            return view('frontend.general.conferences-gallery', compact('conferenceCategory', 'conferenceEvent', 'conferenceTitle', 'defaultEvent', 'photoEventYears', 'videoEventYears', 'photoGalleries', 'videoGalleries'));
        }else{
            $groupWiseConferences = Conference::select('id', 'event_category', 'event_location')
                ->where('event_category', 'IPSC')
                ->orderBy('id')
                ->get()
                ->unique('event_category')
                ->pluck('event_location', 'event_category')->toArray();

            $defaultIPSCEvent = (isset($groupWiseConferences['IPSC']) ? ('IPSC '.$groupWiseConferences['IPSC']) : '');

            return view('frontend.general.gallery', compact('defaultIPSCEvent'));
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