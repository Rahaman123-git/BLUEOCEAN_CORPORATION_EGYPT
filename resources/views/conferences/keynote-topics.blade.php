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
          <li class="breadcrumb-item active" aria-current="page">Event keynote topics</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="conferencekeynotetopicdetailsform" id="conferencekeynotetopicdetailsform" action="{{ route('conferences.update.keynote.topics', $conference->id) }}" enctype="multipart/form-data">
          @method('PUT')
          <div class="card-body">
            @if(isset($conferenceKeynoteTopics) && count($conferenceKeynoteTopics))
              @foreach($conferenceKeynoteTopics as $cKey => $conferenceKeynoteTopic)
                <div class="row mb-3 keynotetopic">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="control-label">Topic title<span class="text-danger">*</span></label>
                      <input type="text" name="topic_title[{{ $cKey }}]" class="form-control" placeholder="Topic title" value="{{ $conferenceKeynoteTopic->topic_title }}">
                      <div id="topic_title_{{ $cKey }}" class="invalid-feedback"></div>
                    </div>
                  </div>
                  <div class="{{ ($conferenceKeynoteTopic->topic_image) ? 'col-md-4' : 'col-md-5' }}">
                    <div class="form-group">
                      <label class="control-label">Topic image</label>
                      <input type="file" name="topic_image[{{ $cKey }}]" class="form-control" accept="image/*">
                      <div id="topic_image_{{ $cKey }}" class="invalid-feedback"></div>
                    </div>
                  </div>
                  @if($conferenceKeynoteTopic->topic_image)
                    <div class="col-md-1 mt-35">
                      <div class="form-group">
                        <a href="{{ asset('storage/conferences/topic-keynote/'.$conferenceKeynoteTopic->topic_image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                        <input type="hidden" name="existing_topic_image[{{ $cKey }}]" value="{{ $conferenceKeynoteTopic->topic_image }}">
                      </div>
                    </div>
                  @endif
                  <div class="col-md-1 mt-20">
                    @if($loop->last)
                      <a href="javascript:void(0)" class="newkeynotetopicdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new topic"></i></a>
                    @endif
                    @if(count($conferenceKeynoteTopics) > 1)
                      <a href="javascript:void(0)" class="removekeynotetopicdetailsrow text-danger"><i class="bi bi-trash-fill fs-4" title="Remove this topic details"></i></a>
                    @endif
                  </div>  
                </div>
                <!--/span-->
                <div class="row mb-3 keynotetopic">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="form-label">Topic details<span class="text-danger">*</span></label>
                      <div name="topic_details[{{ $cKey }}]" class="summernote">{!! $conferenceKeynoteTopic->topic_details !!}</div>
                      <div id="topic_details_{{ $cKey }}" class="invalid-feedback"></div>
                    </div>
                  </div>
                </div>
              @endforeach
              <input type="hidden" name="keynotetopiccurrentindex" value="{{ (count($conferenceKeynoteTopics) - 1) }}">
            @else
              <div class="row mb-3 keynotetopic">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label">Topic title<span class="text-danger">*</span></label>
                    <input type="text" name="topic_title[0]" class="form-control" placeholder="Topic title">
                    <div id="topic_title_0" class="invalid-feedback"></div>
                  </div>
                </div>
                <div class="col-md-5">
                  <div class="form-group">
                    <label class="control-label">Topic image</label>
                    <input type="file" name="topic_image[0]" class="form-control" accept="image/*">
                    <div id="topic_image_0" class="invalid-feedback"></div>
                  </div>
                </div>
                <div class="col-md-1 mt-20">
                  <a href="javascript:void(0)" class="newkeynotetopicdetailsrow text-warning"><i class="bi bi-plus-circle fs-4" title="Add new topic"></i></a>
                </div>  
              </div>
              <!--/span-->
              <div class="row mb-3 keynotetopic">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="form-label">Topic details<span class="text-danger">*</span></label>
                    <div name="topic_details[0]" class="summernote"></div>
                    <div id="topic_details_0" class="invalid-feedback"></div>
                  </div>
                </div>
              </div>
              <input type="hidden" name="keynotetopiccurrentindex" value="0">
            @endif
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('conferences.edit', $conference->id) }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary conferencekeynotetopicdetailssave">Save</a>
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