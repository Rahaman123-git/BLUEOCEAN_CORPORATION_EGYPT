<?php

namespace App\Http\Controllers\WebsiteContent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;
use App\Models\WebsiteContent\Location;

class LocationController extends Controller
{
    /**
     * Display a list of all resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $locations = Location::all();
        return view('website-content.locations.index', compact('locations'));
    }

    /**
     * Show the form to create a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('website-content.locations.create');
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
            try{
                $locationImagePath = '';

                $validator = Validator::make($request->all(), [
                    'location_name'     => 'required|string|max:255',
                    'location_address'  => 'required|string',
                    'location_landmark' => 'required|string',
                    'phone_no'          => 'required|string',
                    'email_id'          => 'required|string',
                    // 'google_hgmap_url'    => 'required|string',
                    'location_image'    => 'nullable|image|max:2048',
                    'location_status'   => 'required|string|in:active,inactive'
                ]);
        
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('location_image')){
                    $locationImagePath = $request->file('location_image')->store('locations', 'public');
                }

                Location::create([
                    'location_name'     => $request->location_name,
                    'location_address'  => $request->location_address,
                    'location_landmark' => $request->location_landmark ?? null,
                    'phone_no'          => $request->phone_no ?? null,
                    'email_id'          => $request->email_id ?? null,
                    'google_map_url'    => $request->google_map_url ?? null,
                    'image'             => $locationImagePath ? basename($locationImagePath) : null,
                    'status'            => $request->location_status ?? null
                ]);
        
                session()->flash('success', 'Location registered successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('website.content.locations.index')
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
        $location = Location::findOrFail($id);
        return view('website-content.locations.edit', compact('location'));
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
            try{
                $locationImagePath = '';

                $location = Location::findOrFail($id);

                $validator = Validator::make($request->all(), [
                    'location_name'     => 'required|string|max:255',
                    'location_address'  => 'required|string',
                    'location_landmark' => 'required|string',
                    'phone_no'          => 'required|string',
                    'email_id'          => 'required|string',
                    // 'google_map_url'    => 'required|string',
                    'location_image'    => 'nullable|image|max:2048',
                    'location_status'   => 'required|string|in:active,inactive'
                ]);
               
                if($validator->fails()){
                    return response()->json([
                        'status' => 'error',
                        'errors' => $validator->errors(),
                    ], 422);
                }

                if($request->file('location_image')){
                    $locationImagePath = $request->file('location_image')->store('locations', 'public');
                    Storage::disk('public')->delete('locations/'.$request->existing_location_image);
                }else{
                    if($request->existing_location_image){
                        $locationImagePath = 'locations/'.$request->existing_location_image;
                    }
                }

                $location->update([
                    'location_name'     => $request->location_name,
                    'location_address'  => $request->location_address,
                    'location_landmark' => $request->location_landmark ?? null,
                    'phone_no'          => $request->phone_no ?? null,
                	'email_id'          => $request->email_id ?? null,
                    'google_map_url'    => $request->google_map_url ?? null,
                    'image'             => $locationImagePath ? basename($locationImagePath) : null,
                    'status'            => $request->location_status ?? null
                ]);
        
                session()->flash('success', 'Location details updated successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('website.content.locations.index')
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
                $location = Location::findOrFail($id);
                $location->delete();

                session()->flash('success', 'Location details deleted successfully!');
                return response()->json([
                    'status'      => 'success',
                    'redirectUrl' => route('website.content.locations.index')
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