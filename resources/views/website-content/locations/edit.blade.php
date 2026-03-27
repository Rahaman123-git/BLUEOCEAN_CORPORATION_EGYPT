@extends('layouts.app')

@section('content')
  @if(session('success'))
    <span class="flashstatus d-none">SUCCESS</span> 
    <span class="flashmessage d-none">{{ session('success') }}</span>
  @endif
  @if(session('error'))
    <span class="flashstatus d-none">ERROR</span> 
    <span class="flashmessage d-none">{{ session('error') }}</span>
  @endif
  <div class="loader"></div>
  <!--breadcrumb-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="ps-3 pl-0i">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Website content</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('website.content.locations.index') }}">Locations</a></li>
          <li class="breadcrumb-item" aria-current="page">Location details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="locationdetailsform" id="locationdetailsform" action="{{ route('website.content.locations.update', $location->id) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Location name<span class="text-danger">*</span></label>
                  <input type="text" name="location_name" id="locationname" class="form-control" placeholder="Location name" value="{{ $location->location_name }}">
                  <div id="location_name" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Location status<span class="text-danger">*</span></label>
                  <select name="location_status" id="locationstatus" class="form-control" data-placeholder="Location status">
                    <option value="">Select location status</option>
                    <option value="active" {{ ($location->status == 'active') ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ ($location->status == 'inactive') ? 'selected' : '' }}>Inactive</option>
                  </select>
                  <div id="location_status" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Location address<span class="text-danger">*</span></label>
                  <textarea name="location_address" id="locationaddress" class="form-control" placeholder="Location address">{{ $location->location_address }}</textarea>
                  <div id="location_address" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Location landmark<span class="text-danger">*</span></label>
                  <textarea name="location_landmark" id="locationlandmark" class="form-control" placeholder="Location landmark">{{ $location->location_landmark }}</textarea>
                  <div id="location_landmark" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Phone no.<span class="text-danger">*</span></label>
                  <input type="text" name="phone_no" id="phoneno" class="form-control" placeholder="Phone no." value="{{ $location->phone_no }}">
                  <div id="phone_no" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Email id.<span class="text-danger">*</span></label>
                  <input type="text" name="email_id" id="emailid" class="form-control" placeholder="Email id." value="{{ $location->email_id }}">
                  <div id="email_id" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
			  <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Google map URL</label>
                  <input type="text" name="google_map_url" id="googlemapurl" class="form-control" placeholder="Google map URL" value="{{ $location->google_map_url }}">
                  <div id="google_map_url" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="{{ ($location->image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="locationimage" class="form-label">Location image</label>
                  <input type="file" name="location_image" class="form-control" id="locationimage" accept="image/*">
                  <div id="location_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($location->image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/locations/'.$location->image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_location_image" value="{{ $location->image }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('website.content.locations.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary locationdetailssave">Save</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--end row-->
@endsection