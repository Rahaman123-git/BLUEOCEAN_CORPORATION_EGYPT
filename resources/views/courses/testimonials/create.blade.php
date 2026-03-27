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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.index') }}">Courses</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.testimonials.index') }}">Testimonials</a></li>
          <li class="breadcrumb-item active" aria-current="page">Testimonial details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="coursetestimonialdetailsform" id="coursetestimonialdetailsform" action="{{ route('courses.testimonials.store') }}">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Testimonial type<span class="text-danger">*</span></label>
                  <select name="testimonial_type" id="testimonialtype" class="form-control" data-placeholder="Testimonial type">
                    <option value="">Select testimonial type</option>
                    <option value="TEXT_TESTIMONIAL">Text testimonial</option>
                    <option value="VIDEO_TESTIMONIAL">Video testimonial</option>
                  </select>
                  <div id="testimonial_type" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Course<span class="text-danger">*</span></label>
                  <select name="course_id" id="courseid" class="form-control" data-placeholder="Course">
                    <option value="">Select course</option>
                    @isset($courses)
                      @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_title_en }}</option>
                      @endforeach
                    @endisset
                  </select>
                  <div id="course_id" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3 texttestimonial d-none">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Client name<span class="text-danger">*</span></label>
                  <input type="text" name="client_name" id="clientname" class="form-control" placeholder="Client name">
                  <div id="client_name" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Client designation<span class="text-danger">*</span></label>
                  <input type="text" name="client_designation" id="clientdesignation" class="form-control" placeholder="Client designation">
                  <div id="client_designation" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3 texttestimonial d-none">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="clientimage" class="form-label">Client image</label>
                  <input type="file" name="client_image" class="form-control" id="clientimage" accept="image/*">
                  <div id="client_image" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3 videotestimonial d-none">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="clientimage" class="form-label">Client testimonial video url<span class="text-danger">*</span></label>
                  <input type="text" name="client_testimonial_video_url" id="clienttestimonialvideourl" class="form-control">
                  <div id="client_testimonial_video_url" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3 texttestimonial d-none">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Client testimonial details<span class="text-danger">*</span></label>
                  <div name="client_testimonial" class="summernote"></div>
                  <div id="client_testimonial" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('courses.testimonials.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary coursetestimonialdetailssave">Save</a>
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