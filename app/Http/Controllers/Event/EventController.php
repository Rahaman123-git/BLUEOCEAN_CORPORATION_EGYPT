<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;
use App\Models\Event\Event;

class EventController extends Controller
{
    /**
     * Display a listing of users with a specific user type.
     * 
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $events = Event::all();
        return view('events.index', compact('events'));
    }

    /**
     * Display the doctor registration view.
     */
    public function create(): View
    {
        return view('events.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): JsonResponse
    {
        if($request->ajax()){
            try{
                $validator = Validator::make($request->all(), [
                    'event_name_en'           => 'required|string|max:255',
                    'event_name_ar'           => 'required|string|max:255',
                    'event_location_en'       => 'required|string|max:255',
                    'event_location_ar'       => 'required|string|max:255',
                    'event_date_time'         => 'required|string|max:255',
                    'event_registration_link' => 'required|string|max:255',
                    'event_image'             => 'required|image|max:2048',
                    'event_description_en'    => 'required|string',
                    'event_description_ar'    => 'required|string',
                    'status'                  => 'required|string|in:active,inactive',
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                $eventImagePath = $request->file('event_image')->store('events', 'public');

                Event::create([
                    'name_en'           => $request->event_name_en,
                    'name_ar'           => $request->event_name_ar,
                    'location_en'       => $request->event_location_en,
                    'location_ar'       => $request->event_location_ar,
                    'date_time'         => Carbon::createFromFormat('d.m.Y H:i', $request->event_date_time, 'Asia/Kolkata')->utc()->toDateTimeString(),
                    'registration_link' => $request->event_registration_link,
                    'description_en'    => $request->event_description_en,
                    'description_ar'    => $request->event_description_ar,
                    'image'             => $eventImagePath ? basename($eventImagePath) : null,
                    'status'            => $request->status
                ]);
        
                session()->flash('success', 'Event registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('events.index')
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

    public function edit($id): View
    {
        $event = Event::findOrFail($id);
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $event = Event::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'event_name_en'           => 'required|string|max:255',
                    'event_name_ar'           => 'required|string|max:255',
                    'event_location_en'       => 'required|string|max:255',
                    'event_location_ar'       => 'required|string|max:255',
                    'event_date_time'         => 'required|string|max:255',
                    'event_registration_link' => 'required|string|max:255',
                    'event_image'             => 'nullable|image|max:2048',
                    'event_description_en'    => 'required|string',
                    'event_description_ar'    => 'required|string',
                    'status'                  => 'required|string|in:active,inactive',
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('event_image')){
                    $eventImagePath = $request->file('event_image')->store('events', 'public');
                    Storage::disk('public')->delete('events/'.$request->existing_event_image);
                }else{
                    $eventImagePath = 'events/'.$request->existing_event_image;
                }
                
                $event->update([
                    'name_en'           => $request->event_name_en,
                    'name_ar'           => $request->event_name_ar,
                    'location_en'       => $request->event_location_en,
                    'location_ar'       => $request->event_location_ar,
                    'date_time'         => Carbon::createFromFormat('d.m.Y H:i', $request->event_date_time, 'Asia/Kolkata')->utc()->toDateTimeString(),
                    'registration_link' => $request->event_registration_link,
                    'description_en'    => $request->event_description_en,
                    'description_ar'    => $request->event_description_ar,
                    'image'             => $eventImagePath ? basename($eventImagePath) : null,
                    'status'            => $request->status
                ]);
        
                session()->flash('success', 'Event details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('events.index')
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

    public function destroy(Request $request, $id): JsonResponse
    {
        if($request->ajax()){
            try{
                $event = Event::findOrFail($id);
                $event->delete();

                session()->flash('success', 'Event details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('events.index')
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