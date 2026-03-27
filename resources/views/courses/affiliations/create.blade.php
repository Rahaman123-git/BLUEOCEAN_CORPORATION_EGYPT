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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.affiliations.index') }}">Affiliations</a></li>
          <li class="breadcrumb-item active" aria-current="page">Affiliation details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="courseaffiliationdetailsform" id="courseaffiliationdetailsform" action="{{ route('courses.affiliations.store') }}">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Affiliation short name<span class="text-danger">*</span></label>
                  <input type="text" name="affiliation_short_name_en" id="affiliationshortnameen" class="form-control" placeholder="Affiliation short name">
                  <div id="affiliation_short_name_en" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Affiliation name<span class="text-danger">*</span></label>
                  <input type="text" name="affiliation_name_en" id="affiliationnameen" class="form-control" placeholder="Affiliation name">
                  <div id="affiliation_name_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Affiliation text bg color<span class="text-danger">*</span></label>
                  <input type="text" name="affiliation_text_bg_color_code" id="affiliationtextbgcolor" class="form-control" placeholder="Affiliation text bg color">
                  <div id="affiliation_text_bg_color_code" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="affiliationimage" class="control-label">Affiliation image<span class="text-danger">*</span></label>
                  <input type="file" name="affiliation_image" class="form-control" id="affiliationimage" accept="image/*">
                  <div id="affiliation_image" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Affiliation details<span class="text-danger">*</span></label>
                  <div name="affiliation_description_en" class="summernote"></div>
                  <div id="affiliation_description_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Affliation course details<span class="text-danger">*</span></label>
                  <div name="affiliation_course_description_en" class="summernote"></div>
                  <div id="affiliation_course_description_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('courses.affiliations.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary courseaffiliationdetailssave">Save</a>
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