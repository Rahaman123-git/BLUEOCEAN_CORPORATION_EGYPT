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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('conferences.index') }}">Conferences</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('conferences.edit', $conference->id) }}">Event details</a></li>
          <li class="breadcrumb-item active" aria-current="page">Event speakers</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="conferencespeakerdetailsform" id="conferencespeakerdetailsform" action="{{ route('conferences.update.speakers', $conference->id) }}" enctype="multipart/form-data">
          @method('PUT')
          <div class="card-body">
            @if(isset($conferenceSpeakers) && count($conferenceSpeakers))
              @foreach($conferenceSpeakers as $cKey => $conferenceSpeaker)
                <div class="row mb-3 speaker">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Speaker name<span class="text-danger">*</span></label>
                      <input type="text" name="speaker_name[{{ $cKey }}]" class="form-control" placeholder="Speaker name" value="{{ $conferenceSpeaker->speaker_name }}">
                      <div id="speaker_name_{{ $cKey }}" class="invalid-feedback"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Speaker designation<span class="text-danger">*</span></label>
                      <input type="text" name="speaker_designation[{{ $cKey }}]" class="form-control" placeholder="Speaker designation" value="{{ $conferenceSpeaker->speaker_designation }}">
                      <div id="speaker_designation_{{ $cKey }}" class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <!--/span-->
                <div class="row mb-3 speaker">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Speaker details</label>
                      <div name="speaker_details[{{ $cKey }}]" class="summernote">{!! $conferenceSpeaker->speaker_details !!}</div>
                      <div id="speaker_details_{{ $cKey }}" class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
                <!--/span-->
                <div class="row mb-3 speaker">
                  <div class="col-md-5">
                    <div class="form-group">
                      <label class="control-label">Speaker image</label>
                      <input type="file" name="speaker_image[{{ $cKey }}]" class="form-control" accept="image/*">
                      <div id="speaker_image_{{ $cKey }}" class="invalid-feedback"></div>
                    </div>
                  </div>
                  <div class="col-md-1 mt-20">
                    @if($loop->last)
                      <a href="javascript:void(0)" class="newspeakerdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new speaker"></i></a>
                    @endif
                    @if(count($conferenceSpeakers) > 1)
                      <a href="javascript:void(0)" class="removespeakerdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this speaker details"></i></a>
                    @endif
                  </div>  
                </div>
              @endforeach
              <input type="hidden" name="speakercurrentindex" value="{{ (count($conferenceSpeakers) - 1) }}">
            @else
              <div class="row mb-3 speaker">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Speaker name<span class="text-danger">*</span></label>
                    <input type="text" name="speaker_name[0]" class="form-control" placeholder="Speaker name">
                    <div id="speaker_name_0" class="invalid-feedback"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Speaker designation<span class="text-danger">*</span></label>
                    <input type="text" name="speaker_designation[0]" class="form-control" placeholder="Speaker designation">
                    <div id="speaker_designation_0" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="row mb-3 speaker">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-label">Speaker details</label>
                    <div name="speaker_details[0]" class="summernote"></div>
                    <div id="speaker_details_0" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
              <!--/span-->
              <div class="row mb-3 speaker">
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="control-label">Speaker image</label>
                    <input type="file" name="speaker_image[0]" class="form-control" accept="image/*">
                    <div id="speaker_image_0" class="invalid-feedback"></div>
                  </div>
                </div>
                <div class="col-md-1 mt-20">
                  <a href="javascript:void(0)" class="newspeakerdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new speaker"></i></a>
                </div>  
              </div>
              <input type="hidden" name="speakercurrentindex" value="0">
            @endif
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary conferencespeakerdetailssave">Save</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection