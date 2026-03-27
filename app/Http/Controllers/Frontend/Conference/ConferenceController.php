<?php

namespace App\Http\Controllers\Frontend\Conference;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Conference\ConferenceCategory;
use App\Models\Conference\Conference;
use App\Models\Conference\ConferenceSponsor;
use App\Models\Conference\ConferenceKeynoteTopic;
use App\Models\Conference\ConferenceSpeaker;
use App\Models\WebsiteContent\PageSetting;
use Carbon\Carbon;

class ConferenceController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $conferenceCategories = ConferenceCategory::all();
        /* $upcomingConference = Conference::where('event_date', '>', Carbon::now())
            ->orderBy('event_date', 'desc')->first(); */
    	$upcomingConference = Conference::orderBy('event_date', 'desc')->first();
        $pageSetting = PageSetting::where('page_type', 'CONFERENCES')->first();

        return view('frontend.conference.home', compact('conferenceCategories', 'upcomingConference', 'pageSetting'));
    }
    
    public function upcomingEvent($slug): View
    {
        $conference = Conference::where('slug', $slug)->first();

        if($conference){
            $conferenceSponsors = ConferenceSponsor::where('conference_id', $conference->id)->get();
            $conferenceKeynoteTopics = ConferenceKeynoteTopic::where('conference_id', $conference->id)->get();
            $conferenceSpeakers = ConferenceSpeaker::where('conference_id', $conference->id)->get();

            return view('frontend.conference.upcoming-event', compact('conference', 'conferenceSponsors', 'conferenceKeynoteTopics', 'conferenceSpeakers'));
        }else{
            abort(404);
        }
    }

    public function ipsc(): View
    {
        /* $upcomingConference = Conference::where('event_date', '>', Carbon::now())
            ->orderBy('event_date', 'desc')->first(); */
    	$upcomingConference = Conference::orderBy('event_date', 'desc')->first();
        return view('frontend.conference.ipsc', compact('upcomingConference'));
    }

    public function ipscRiyadh2024(): View
    {
        return view('frontend.conference.ipsc-riyadh-2024');
    }

    public function ipscLondon2024(): View
    {
        return view('frontend.conference.ipsc-london-2024');
    }

    public function ipscMumbai2024(): View
    {
        return view('frontend.conference.ipsc-mumbai-2024');
    }

    public function ipscDubai2021(): View
    {
        return view('frontend.conference.ipsc-dubai-2021');
    }

    public function ipscRiyadh2016(): View
    {
        return view('frontend.conference.ipsc-riyadh-2016');
    }

    public function ipscAbudhabi2016(): View
    {
        return view('frontend.conference.ipsc-abudhabi-2016');
    }

    public function ipscDubai2016(): View
    {
        return view('frontend.conference.ipsc-dubai-2016');
    }

    public function ipscDubai2014(): View
    {
        return view('frontend.conference.ipsc-dubai-2014');
    }

    public function ipscQatar2014(): View
    {
        return view('frontend.conference.ipsc-qatar-2014');
    }

    public function ihrc(): View
    {
        /* $upcomingConference = Conference::where('event_date', '>', Carbon::now())
            ->orderBy('event_date', 'desc')->first(); */
    	$upcomingConference = Conference::orderBy('event_date', 'desc')->first();
        return view('frontend.conference.ihrc', compact('upcomingConference'));
    }

    public function ihrcDubai2022(): View
    {
        return view('frontend.conference.ihrc-dubai-2022');
    }

    public function cxo(): View
    {
        /* $upcomingConference = Conference::where('event_date', '>', Carbon::now())
            ->orderBy('event_date', 'desc')->first(); */
    	$upcomingConference = Conference::orderBy('event_date', 'desc')->first();
        return view('frontend.conference.cxo', compact('upcomingConference'));
    }

    public function cxoDubai2024(): View
    {
        return view('frontend.conference.cxo-dubai-2024');
    }

    public function bowld(): View
    {
        /* $upcomingConference = Conference::where('event_date', '>', Carbon::now())
            ->orderBy('event_date', 'desc')->first(); */
    	$upcomingConference = Conference::orderBy('event_date', 'desc')->first();
        return view('frontend.conference.bowld', compact('upcomingConference'));
    }
    
    public function bowldEvent2025(): View
    {
        return view('frontend.conference.bowld-event-2025');
    }

    public function bowldEvent2024(): View
    {
        return view('frontend.conference.bowld-event-2024');
    }

    public function bowldEvent2023(): View
    {
        return view('frontend.conference.bowld-event-2023');
    }

    public function bowldEvent2022(): View
    {
        return view('frontend.conference.bowld-event-2022');
    }

    public function bowldEvent2021(): View
    {
        return view('frontend.conference.bowld-event-2021');
    }

    public function awards(): View
    {
        return view('frontend.conference.awards');
    }

    public function register(): View
    {
        return view('frontend.conference.register');
    }
}