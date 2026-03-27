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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('advisories.index') }}">Advisories</a></li>
          <li class="breadcrumb-item active" aria-current="page">Advisory details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="advisorydetailsform" id="advisorydetailsform" action="{{ route('advisories.update', $advisory->id) }}">
          	@csrf
			@method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Advisor name<span class="text-danger">*</span></label>
                  <input type="text" name="advisor_name" id="advisorname" class="form-control" placeholder="Advisor name" value="{{ $advisory->advisor_name }}">
                  <div id="advisor_name" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Designation<span class="text-danger">*</span></label>
                  <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation" value="{{ $advisory->designation }}">
                  <div id="designation" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Organisation<span class="text-danger">*</span></label>
                  <input type="text" name="organisation" id="organisation" class="form-control" placeholder="Organisation" value="{{ $advisory->organisation }}">
                  <div id="organisation" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Expertise</label>
                  <input type="text" name="expertise" id="expertise" class="form-control" placeholder="Expertise" value="{{ $advisory->expertise }}">
                  <div id="expertise" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Contributions</label>
                  <textarea name="contributions" id="contributions" class="form-control" placeholder="Contributions">{{ $advisory->contributions }}</textarea>
                  <div id="contributions" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Brief bio.<span class="text-danger">*</span></label>
                  <textarea name="brief_bio" id="brief_bio" class="form-control" placeholder="Brief bio.">{{ $advisory->brief_bio }}</textarea>
                  <div id="brief_bio" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Details bio.<span class="text-danger">*</span></label>
                  <textarea name="details_bio" class="summernote">{!! $advisory->details_bio !!}</textarea>
                  <div id="details_bio" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="{{ ($advisory->image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="advisorimage" class="control-label">Advisor image<span class="text-danger">*</span></label>
                  <input type="file" name="advisor_image" class="form-control" id="advisorimage" accept="image/*">
                  <div id="advisor_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($advisory->image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/advisories/'.$advisory->image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_advisor_image" value="{{ $advisory->image }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('advisories.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary advisorydetailssave">Save</a>
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