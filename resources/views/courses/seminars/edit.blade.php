@extends('layouts.app')

@section('content')
  @if(session('success'))
    <span class="flashstatus display-none">SUCCESS</span> 
    <span class="flashmessage display-none">{{ session('success') }}</span>
  @endif
  @if(session('error'))
    <span class="flashstatus display-none">ERROR</span> 
    <span class="flashmessage display-none">{{ session('error') }}</span>
  @endif
  <div class="loader"></div>
  <!--breadcrumb-->
  <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="ps-3 pl-0i">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.index') }}">Courses</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.seminars.index') }}">Seminars</a></li>
          <li class="breadcrumb-item active" aria-current="page">Seminar details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="courseseminardetailsform" id="courseseminardetailsform" action="{{ route('courses.seminars.update', $seminar->id) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Seminar type<span class="text-danger">*</span></label>
                  <select name="seminar_type" id="seminartype" class="form-control" data-placeholder="Seminar type">
                    <option value="">Select seminar type</option>
                    <option value="FREE_SEMINAR" {{ ($seminar->seminar_type == 'FREE_SEMINAR') ? 'selected' : '' }}>Free seminar</option>
                    <option value="PAID_SEMINAR" {{ ($seminar->seminar_type == 'PAID_SEMINAR') ? 'selected' : '' }}>Paid seminar</option>
                  </select>
                  <div id="seminar_type" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Seminar title initial</label>
                  <input type="text" name="seminar_title_initial" id="seminartitleinitial" class="form-control" placeholder="Seminar title initial" value="{{ $seminar->seminar_title_initial }}">
                  <div id="seminar_title_initial" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Seminar title<span class="text-danger">*</span></label>
                  <input type="text" name="seminar_title" id="seminartitle" class="form-control" placeholder="Seminar title" value="{{ $seminar->seminar_title }}">
                  <div id="seminar_title" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Seminar location<span class="text-danger">*</span></label>
                  <input type="text" name="seminar_location" id="seminarlocation" class="form-control" placeholder="Seminar location" value="{{ $seminar->seminar_location }}">
                  <div id="seminar_location" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Seminar date<span class="text-danger">*</span></label>
                  <input type="text" name="seminar_date" id="seminardate" class="form-control datepicker" placeholder="Seminar date" value="{{ Carbon\Carbon::parse($seminar->seminar_date)->format('d.m.Y') }}">
                  <div id="seminar_date" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="{{ ($seminar->seminar_banner_image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="seminarbannerimage" class="form-label">Seminar banner image (preferred size 992 * 260)<span class="text-danger">*</span></label>
                  <input type="file" name="seminar_banner_image" class="form-control" id="seminarbannerimage" accept="image/*">
                  <div id="seminar_banner_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($seminar->seminar_banner_image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/courses/seminars/'.$seminar->seminar_banner_image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_seminar_banner_image" value="{{ $seminar->seminar_banner_image }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="{{ ($seminar->seminar_registration_page_banner_image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="seminarregistrationpagebannerimage" class="form-label">Seminar registration page banner image (preferred size 1440 * 456)<span class="text-danger">*</span></label>
                  <input type="file" name="seminar_registration_page_banner_image" class="form-control" id="seminarregistrationpagebannerimage" accept="image/*">
                  <div id="seminar_registration_page_banner_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($seminar->seminar_registration_page_banner_image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/courses/seminars/'.$seminar->seminar_registration_page_banner_image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_seminar_registration_page_banner_image" value="{{ $seminar->seminar_registration_page_banner_image }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Seminar details</label>
                  <div name="seminar_description" class="summernote">{!! $seminar->seminar_description !!}</div>
                  <div id="seminar_description" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('courses.seminars.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary courseseminardetailssave">Save</a>
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