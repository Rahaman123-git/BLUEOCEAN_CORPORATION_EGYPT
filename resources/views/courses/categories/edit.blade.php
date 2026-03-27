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
        <form name="coursecategorydetailsform" id="coursecategorydetailsform" action="{{ route('courses.categories.update', $category->id) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Course type<span class="text-danger">*</span></label>
                  <select name="course_type" id="coursetype" class="form-control" data-placeholder="Course type">
                    <option value="">Select course type</option>
                    <option value="CERTIFICATION_TRAINING" {{ ($category->course_type == 'CERTIFICATION_TRAINING') ? 'selected' : '' }}>Certification program (retail)</option>
                    <option value="CORPORATE_TRAINING" {{ ($category->course_type == 'CORPORATE_TRAINING') ? 'selected' : '' }}>Corporate training</option>
                  </select>
                  <div id="course_type" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Category name<span class="text-danger">*</span></label>
                  <input type="text" name="category_name_en" id="categorynameen" class="form-control" placeholder="Category name" value="{{ $category->name_en }}">
                  <div id="category_name_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="{{ ($category->image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="categoryimage" class="form-label">Category image</label>
                  <input type="file" name="category_image" class="form-control" id="categoryimage" accept="image/*">
                  <div id="category_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($category->image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/courses/categories/'.$category->image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_category_image" value="{{ $category->image }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Category details</label>
                  <div name="category_description_en" class="summernote">{!! $category->description_en !!}</div>
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