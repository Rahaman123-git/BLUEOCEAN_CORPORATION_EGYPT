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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.categories.index') }}">Categories</a></li>
          <li class="breadcrumb-item active" aria-current="page">Category details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="coursecategorydetailsform" id="coursecategorydetailsform" action="{{ route('courses.categories.store') }}">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Course type<span class="text-danger">*</span></label>
                  <select name="course_type" id="coursetype" class="form-control" data-placeholder="Course type">
                    <option value="">Select course type</option>
                    <option value="CERTIFICATION_TRAINING">Certification program (retail)</option>
                    <option value="CORPORATE_TRAINING">Corporate training</option>
                  </select>
                  <div id="course_type" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Category name<span class="text-danger">*</span></label>
                  <input type="text" name="category_name_en" id="categorynameen" class="form-control" placeholder="Category name">
                  <div id="category_name_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="categoryimage" class="form-label">Category image</label>
                  <input type="file" name="category_image" class="form-control" id="categoryimage" accept="image/*">
                  <div id="category_image" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Category details</label>
                  <div name="category_description_en" class="summernote"></div>
                  <div id="category_description_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('courses.categories.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary coursecategorydetailssave">Save</a>
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