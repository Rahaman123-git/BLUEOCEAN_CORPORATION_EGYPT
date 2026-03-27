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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('events.index') }}">Events</a></li>
          <li class="breadcrumb-item active" aria-current="page">Event details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="eventdetailsform" id="eventdetailsform" action="{{ route('events.update', $event->id) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Event name (en)<span class="text-danger">*</span></label>
                  <input type="text" name="event_name_en" id="eventnameen" class="form-control" placeholder="Event name (en)" value="{{ $event->name_en }}">
                  <div id="event_name_en" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Event name (ar)<span class="text-danger">*</span></label>
                  <input type="text" name="event_name_ar" id="eventnamear" class="form-control" placeholder="Event name (ar)" value="{{ $event->name_ar }}">
                  <div id="event_name_ar" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Event location (en)<span class="text-danger">*</span></label>
                  <input type="text" name="event_location_en" id="eventlocationen" class="form-control" placeholder="Event location (en)" value="{{ $event->location_en }}">
                  <div id="event_location_en" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Event location (ar)<span class="text-danger">*</span></label>
                  <input type="text" name="event_location_ar" id="eventlocationar" class="form-control" placeholder="Event location (ar)" value="{{ $event->location_ar }}">
                  <div id="event_location_ar" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Event date & time<span class="text-danger">*</span></label>
                  <input type="text" name="event_date_time" id="eventdatetime" class="form-control datetimepicker" placeholder="Event date & time" value="{{ $event->date_time }}">
                  <div id="event_date_time" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Event registration link<span class="text-danger">*</span></label>
                  <input type="text" name="event_registration_link" id="eventregistrationlink" class="form-control" placeholder="Event registration link" value="{{ $event->registration_link }}">
                  <div id="event_registration_link" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="{{ ($event->image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="eventimage" class="form-label">Event image<span class="text-danger">*</span></label>
                  <input type="file" name="event_image" class="form-control" id="eventimage" accept="image/*">
                  <div id="event_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($event->image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/events/'.$event->image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_event_image" value="{{ $event->image }}">
                  </div>
                </div>
              @endif
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Event status<span class="text-danger">*</span></label>
                  <select name="status" id="status" class="form-control" data-placeholder="Event status">
                    <option value="">Select event status</option>
                    <option value="active" {{ ($event->status == 'active') ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ ($event->status == 'inactive') ? 'selected' : '' }}>Inactive</option>
                  </select>
                  <div id="status" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">Event description (en)<span class="text-danger">*</span></label>
                  <div name="event_description_en" class="summernote">{!! $event->description_en !!}</div>
                  <div id="event_description_en" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="form-label">Event description (ar)<span class="text-danger">*</span></label>
                  <div name="event_description_ar" class="summernote">{!! $event->description_ar !!}</div>
                  <div id="event_description_ar" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('events.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary eventdetailssave">Save</a>
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