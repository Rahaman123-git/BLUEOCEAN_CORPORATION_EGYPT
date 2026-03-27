<?php

namespace App\Http\Controllers\Conference;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;
use App\Models\Conference\Conference;
use App\Models\Conference\ConferenceSponsor;
use App\Models\Conference\ConferenceKeynoteTopic;
use App\Models\Conference\ConferenceSpeaker;

class ConferenceController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $conferences = Conference::orderBy('event_date', 'desc')->get();
        return view('conferences.index', compact('conferences'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('conferences.create');
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
            $bannerFilePath = '';
            $homePageBannerFilePath = '';
            $eventCategoryPahgeBannerFilePath = '';
            $eventLogoFilePath = '';
            $eventHotelImageFilePath = '';

            try{
                $validator = Validator::make($request->all(), [
                    'event_category'                            => 'required|string',
                    'event_title'                               => 'required|string|max:255',
                    'event_logo'                                => 'required|image|max:2048',
                    'first_line_text_beside_logo'               => 'required|string',
                    'second_line_text_beside_logo'              => 'required|string',
                    'banner_file'                               => 'required|mimes:jpg,jpeg,png,gif,mp4|max:102400',
                    'home_page_banner_file'                     => 'required|mimes:jpg,jpeg,png,gif,svg|max:20480',
                    'event_category_page_banner_file'           => 'required|mimes:jpg,jpeg,png,gif,svg|max:20480',
                    'summary_text_beside_logo'                  => 'required|string',
                    'event_hotel_name'                          => 'required|string|max:255',
                    'event_location'                            => 'required|string|max:255',
                    'event_hotel_image'                         => 'required|image|max:2048',
                    'event_date'                                => 'required|string|max:10',
                    'first_line_text_beside_event_hotel_image'  => 'required|string',
                    'second_line_text_beside_event_hotel_image' => 'required|string',
                    'no_of_delegates'                           => 'required|string|max:50',
                    'no_of_organizations'                       => 'required|string|max:50',
                    'no_of_speakers'                            => 'required|string|max:50',
                    'participan_sectors'                        => 'required|string',
                    'conference_opportunities'                  => 'required|string',
                    'sponsor_advantages'                        => 'required|string',
                    'individual_award_categories'               => 'required|string',
                    'organization_award_categories'             => 'required|string',
                    'registration_fees'                         => 'required|string|max:25',
                    'registration_url'                          => 'required|string'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('banner_file')){
                    $bannerFilePath = $request->file('banner_file')->store('conferences/event', 'public');
                }

                if($request->file('home_page_banner_file')){
                    $homePageBannerFilePath = $request->file('home_page_banner_file')->store('conferences/event', 'public');
                }

                if($request->file('event_category_page_banner_file')){
                    $eventCategoryPahgeBannerFilePath = $request->file('event_category_page_banner_file')->store('conferences/event', 'public');
                }
                
                if($request->file('event_logo')){
                    $eventLogoFilePath = $request->file('event_logo')->store('conferences/event', 'public');
                }
                
                if($request->file('event_hotel_image')){
                    $eventHotelImageFilePath = $request->file('event_hotel_image')->store('conferences/event', 'public');
                }
               
                Conference::create([
                    'event_category'                            => $request->event_category,
                    'event_title'                               => $request->event_title,
                    'slug'                                      => Str::of($request->event_title)->slug('-'),
                    'event_logo'                                => $eventLogoFilePath ? basename($eventLogoFilePath) : null,
                    'first_line_text_beside_logo'               => $request->first_line_text_beside_logo,
                    'second_line_text_beside_logo'              => $request->second_line_text_beside_logo,
                    'banner_file'                               => $bannerFilePath ? basename($bannerFilePath) : null,
                    'home_page_banner_file'                     => $homePageBannerFilePath ? basename($homePageBannerFilePath) : null,
                    'event_category_page_banner_file'           => $eventCategoryPahgeBannerFilePath ? basename($eventCategoryPahgeBannerFilePath) : null,
                    'summary_text_beside_logo'                  => $request->summary_text_beside_logo,
                    'event_hotel_name'                          => $request->event_hotel_name,
                    'event_location'                            => $request->event_location,
                    'event_hotel_image'                         => $eventHotelImageFilePath ? basename($eventHotelImageFilePath) : null,
                    'event_date'                                => Carbon::createFromFormat('d.m.Y', $request->event_date)->format('Y-m-d'),
                    'first_line_text_beside_event_hotel_image'  => $request->first_line_text_beside_event_hotel_image,
                    'second_line_text_beside_event_hotel_image' => $request->second_line_text_beside_event_hotel_image,
                    'no_of_delegates'                           => $request->no_of_delegates,
                    'no_of_organizations'                       => $request->no_of_organizations,
                    'no_of_speakers'                            => $request->no_of_speakers,
                    'participan_sectors'                        => $request->participan_sectors,
                    'conference_opportunities'                  => $request->conference_opportunities,
                    'sponsor_advantages'                        => $request->sponsor_advantages,
                    'individual_award_categories'               => $request->individual_award_categories,
                    'organization_award_categories'             => $request->organization_award_categories,
                    'registration_fees'                         => $request->registration_fees,
                    'registration_url'                          => $request->registration_url
                ]);
        
                session()->flash('success', 'Conference details registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('conferences.index')
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
        $conference = Conference::findOrFail($id);

        return view('conferences.edit', compact('conference'));
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
            $bannerFilePath = '';
            $homePageBannerFilePath = '';
            $eventCategoryPahgeBannerFilePath = '';
            $eventLogoFilePath = '';
            $eventHotelImageFilePath = '';

            try{
                $conference = Conference::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'event_category'                            => 'required|string',
                    'event_title'                               => 'required|string|max:255',
                    'event_logo'                                => 'nullable|image|max:2048',
                    'first_line_text_beside_logo'               => 'required|string',
                    'second_line_text_beside_logo'              => 'required|string',
                    'banner_file'                               => 'nullable|mimes:jpg,jpeg,png,gif,mp4|max:102400',
                    'home_page_banner_file'                     => 'nullable|mimes:jpg,jpeg,png,gif,svg|max:20480',
                    'event_category_page_banner_file'           => 'nullable|mimes:jpg,jpeg,png,gif,svg|max:20480',
                    'summary_text_beside_logo'                  => 'required|string',
                    'event_hotel_name'                          => 'required|string|max:255',
                    'event_location'                            => 'required|string|max:255',
                    'event_hotel_image'                         => 'nullable|image|max:2048',
                    'event_date'                                => 'required|string|max:10',
                    'first_line_text_beside_event_hotel_image'  => 'required|string',
                    'second_line_text_beside_event_hotel_image' => 'required|string',
                    'no_of_delegates'                           => 'required|string|max:50',
                    'no_of_organizations'                       => 'required|string|max:50',
                    'no_of_speakers'                            => 'required|string|max:50',
                    'participan_sectors'                        => 'required|string',
                    'conference_opportunities'                  => 'required|string',
                    'sponsor_advantages'                        => 'required|string',
                    'individual_award_categories'               => 'required|string',
                    'organization_award_categories'             => 'required|string',
                    'registration_fees'                         => 'required|string|max:25',
                    'registration_url'                          => 'required|string'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('banner_file')){
                    $bannerFilePath = $request->file('banner_file')->store('conferences/event', 'public');
                    Storage::disk('public')->delete('conferences/event/'.$request->existing_banner_file);
                }else{
                    if($request->existing_banner_file){
                        $bannerFilePath = 'conferences/event/'.$request->existing_banner_file;
                    }
                }

                if($request->file('home_page_banner_file')){
                    $homePageBannerFilePath = $request->file('home_page_banner_file')->store('conferences/event', 'public');
                    Storage::disk('public')->delete('conferences/event/'.$request->existing_home_page_banner_file);
                }else{
                    if($request->existing_home_page_banner_file){
                        $homePageBannerFilePath = 'conferences/event/'.$request->existing_home_page_banner_file;
                    }
                }

                if($request->file('event_category_page_banner_file')){
                    $eventCategoryPahgeBannerFilePath = $request->file('event_category_page_banner_file')->store('conferences/event', 'public');
                    Storage::disk('public')->delete('conferences/event/'.$request->existing_event_category_page_banner_file);
                }else{
                    if($request->existing_event_category_page_banner_file){
                        $eventCategoryPahgeBannerFilePath = 'conferences/event/'.$request->existing_event_category_page_banner_file;
                    }
                }

                if($request->file('event_logo')){
                    $eventLogoFilePath = $request->file('event_logo')->store('conferences/event', 'public');
                    Storage::disk('public')->delete('conferences/event/'.$request->existing_event_logo);
                }else{
                    if($request->existing_event_logo){
                        $eventLogoFilePath = 'conferences/event/'.$request->existing_event_logo;
                    }
                }

                if($request->file('event_hotel_image')){
                    $eventHotelImageFilePath = $request->file('event_hotel_image')->store('conferences/event', 'public');
                    Storage::disk('public')->delete('conferences/event/'.$request->existing_event_hotel_image);
                }else{
                    if($request->existing_event_hotel_image){
                        $eventHotelImageFilePath = 'conferences/event/'.$request->existing_event_hotel_image;
                    }
                }

                $conference->update([
                    'event_category'                            => $request->event_category,
                    'event_title'                               => $request->event_title,
                    'slug'                                      => Str::of($request->event_title)->slug('-'),
                    'event_logo'                                => $eventLogoFilePath ? basename($eventLogoFilePath) : null,
                    'first_line_text_beside_logo'               => $request->first_line_text_beside_logo,
                    'second_line_text_beside_logo'              => $request->second_line_text_beside_logo,
                    'banner_file'                               => $bannerFilePath ? basename($bannerFilePath) : null,
                    'home_page_banner_file'                     => $homePageBannerFilePath ? basename($homePageBannerFilePath) : null,
                    'event_category_page_banner_file'           => $eventCategoryPahgeBannerFilePath ? basename($eventCategoryPahgeBannerFilePath) : null,
                    'summary_text_beside_logo'                  => $request->summary_text_beside_logo,
                    'event_hotel_name'                          => $request->event_hotel_name,
                    'event_location'                            => $request->event_location,
                    'event_hotel_image'                         => $eventHotelImageFilePath ? basename($eventHotelImageFilePath) : null,
                    'event_date'                                => Carbon::createFromFormat('d.m.Y', $request->event_date)->format('Y-m-d'),
                    'first_line_text_beside_event_hotel_image'  => $request->first_line_text_beside_event_hotel_image,
                    'second_line_text_beside_event_hotel_image' => $request->second_line_text_beside_event_hotel_image,
                    'no_of_delegates'                           => $request->no_of_delegates,
                    'no_of_organizations'                       => $request->no_of_organizations,
                    'no_of_speakers'                            => $request->no_of_speakers,
                    'participan_sectors'                        => $request->participan_sectors,
                    'conference_opportunities'                  => $request->conference_opportunities,
                    'sponsor_advantages'                        => $request->sponsor_advantages,
                    'individual_award_categories'               => $request->individual_award_categories,
                    'organization_award_categories'             => $request->organization_award_categories,
                    'registration_fees'                         => $request->registration_fees,
                    'registration_url'                          => $request->registration_url
                ]);
        
                session()->flash('success', 'Conference details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('conferences.index')
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
    public function sponsors($id): View
    {
        $conference = Conference::findOrFail($id);
        $conferenceSponsors  = ConferenceSponsor::where('conference_id', $conference->id)->get();
        
        return view('conferences.sponsors', compact('conference', 'conferenceSponsors'));
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
    public function updateSponsors(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $conference = Conference::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    // 'sponsor_advantages' => 'required|string',
                    'sponsor_category'   => 'required|array',
                    'sponsor_category.*' => 'required|string',
                    // 'sponsors_logo'      => 'required|array',
                    // 'sponsors_logo.*.*'  => 'required|image|max:2048',
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }
                
                ConferenceSponsor::where('conference_id', $conference->id)->delete();

                foreach ($request->sponsor_category as $sKey => $sponsorCategory) {
                    if ($request->hasFile('sponsors_logo') && $request->file('sponsors_logo')[$sKey]) {
                        $sponsorLogoFilePath[$sKey] = $request->file('sponsors_logo')[$sKey]->store('conferences/sponsor', 'public');
                    }else{
                        if(isset($request->existing_speaker_image[$sKey]) && $request->existing_speaker_image[$sKey]){
                            $speakerImageFilePath[$sKey] = 'conferences/speaker/'.$request->existing_speaker_image[$sKey];
                        }
                    }

                    ConferenceSponsor::create([
                        'conference_id'    => $conference->id,
                        'sponsor_category' => $sponsorCategory,
                        'sponsors_logo'    => (isset($sponsorLogoFilePath[$sKey]) && $sponsorLogoFilePath[$sKey]) ? basename($sponsorLogoFilePath[$sKey]) : null
                    ]);
                }
        
                session()->flash('success', 'Conference speaker details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('conferences.edit', $conference->id)
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
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function keynoteTopics($id): View
    {
        $conference = Conference::findOrFail($id);
        $conferenceKeynoteTopics  = ConferenceKeynoteTopic::where('conference_id', $conference->id)->get();
        
        return view('conferences.keynote-topics', compact('conference', 'conferenceKeynoteTopics'));
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
    public function updateKeynoteTopics(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $conference = Conference::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'topic_title'     => 'required|array',
                    'topic_title.*'   => 'required|string',
                    // 'topic_image'     => 'required|array',
                    // 'topic_image.*'   => 'required|image|max:2048',
                    'topic_details'   => 'required|array',
                    'topic_details.*' => 'required|string',
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                ConferenceKeynoteTopic::where('conference_id', $conference->id)->delete();

                foreach ($request->topic_title as $tKey => $topicTitle) {
                    if ($request->hasFile('topic_image') && $request->file('topic_image')[$tKey]) {
                        $topicImageFilePath[$tKey] = $request->file('topic_image')[$tKey]->store('conferences/topic-keynote', 'public');
                    }else{
                        if(isset($request->existing_topic_image[$tKey]) && $request->existing_topic_image[$tKey]){
                            $topicImageFilePath[$tKey] = 'conferences/topic-keynote/'.$request->existing_topic_image[$tKey];
                        }
                    }

                    ConferenceKeynoteTopic::create([
                        'conference_id' => $conference->id,
                        'topic_title'   => $topicTitle,
                        'topic_details' => $request->topic_details[$tKey],
                        'topic_image'   => (isset($topicImageFilePath[$tKey]) && $topicImageFilePath[$tKey]) ? basename($topicImageFilePath[$tKey]) : null
                    ]);
                }
        
                session()->flash('success', 'Conference keynote topic details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('conferences.edit', $conference->id)
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
    public function speakers($id): View
    {
        $conference = Conference::findOrFail($id);
        $conferenceSpeakers = ConferenceSpeaker::where('conference_id', $conference->id)->get();
        
        return view('conferences.speakers', compact('conference', 'conferenceSpeakers'));
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
    public function updateSpeakers(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $conference = Conference::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'speaker_name'     => 'required|array',
                    'speaker_name.*'   => 'required|string',
                    'speaker_designation'   => 'required|array',
                    'speaker_designation.*' => 'required|string',
                    // 'speaker_image'     => 'required|array',
                    // 'speaker_image.*'   => 'required|image|max:2048',
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                ConferenceSpeaker::where('conference_id', $conference->id)->delete();

                foreach ($request->speaker_name as $sKey => $speakerName) {
                    if ($request->hasFile('speaker_image') && $request->file('speaker_image')[$sKey]) {
                        $speakerImageFilePath[$sKey] = $request->file('speaker_image')[$sKey]->store('conferences/speaker', 'public');
                    }else{
                        if(isset($request->existing_speaker_image[$sKey]) && $request->existing_speaker_image[$sKey]){
                            $speakerImageFilePath[$sKey] = 'conferences/speaker/'.$request->existing_speaker_image[$sKey];
                        }
                    }

                    ConferenceSpeaker::create([
                        'conference_id'       => $conference->id,
                        'speaker_name'        => $speakerName,
                        'speaker_designation' => $request->speaker_designation[$sKey],
                        'speaker_details'     => $request->speaker_details[$sKey],
                        'speaker_image'       => (isset($speakerImageFilePath[$sKey]) && $speakerImageFilePath[$sKey]) ? basename($speakerImageFilePath[$sKey]) : null
                    ]);
                }
        
                session()->flash('success', 'Conference speaker details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('conferences.edit', $conference->id)
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
                $conference = Conference::findOrFail($id);
                $conference->delete();

                session()->flash('success', 'Conference details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('conferences.index')
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