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
          <li class="breadcrumb-item active" aria-current="page">Course details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <div class="d-flex justify-content-end">
        <a href="{{ route('courses.module', $course->id) }}" class="btn btn-outline-secondary pull-right px-5" target="_blank"><i class="bi bi-book-half"></i> Course module details</a>
      </div>
      <hr/>
      <div class="card">
        <form name="coursedetailsform" id="coursedetailsform" action="{{ route('courses.update', $course->id) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Course type<span class="text-danger">*</span></label>
                  <select name="course_type" id="coursetype" class="form-control" data-placeholder="Course type">
                    <option value="">Select course type</option>
                    <option value="CERTIFICATION_TRAINING" coursecategories="{{ isset($courseCategories['CERTIFICATION_TRAINING']) ? json_encode($courseCategories['CERTIFICATION_TRAINING']) : '' }}" {{ ($course->course_type == 'CERTIFICATION_TRAINING') ? 'selected' : '' }}>Certification program (retail)</option>
                    <option value="CORPORATE_TRAINING" coursecategories="{{ isset($courseCategories['CORPORATE_TRAINING']) ? json_encode($courseCategories['CORPORATE_TRAINING']) : '' }}" {{ ($course->course_type == 'CORPORATE_TRAINING') ? 'selected' : '' }}>Corporate training</option>
                  </select>
                  <div id="course_type" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Course short title<span class="text-danger">*</span></label>
                  <input type="text" name="course_short_title_en" id="courseshorttitleen" class="form-control" placeholder="Course short title" value="{{ $course->course_short_title_en }}">
                  <div id="course_short_title_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Course title<span class="text-danger">*</span></label>
                  <input type="text" name="course_title_en" id="coursetitleen" class="form-control" placeholder="Course title" value="{{ $course->course_title_en }}">
                  <div id="course_title_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Course category<span class="text-danger">*</span></label>
                  <select name="course_category_id" id="coursecategoryid" class="form-control" data-placeholder="Course category">
                    <option value="">Select course category</option>
                    @isset($currentCategories)
                      @foreach($currentCategories as $currentCategory)
                        <option value="{{ $currentCategory->id }}" {{ ($course->course_category_id == $currentCategory->id) ? 'selected' : '' }}>{{ $currentCategory->name_en }}</option>
                      @endforeach
                    @endisset
                  </select>
                  <div id="course_category_id" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Course affiliation</label>
                  <select name="course_affiliation_id" id="courseaffiliationid" class="form-control" data-placeholder="Course affiliations">
                    <option value="">Select course affiliation</option>
                    @isset($affiliations)
                      @foreach($affiliations as $affiliation)
                        <option value="{{ $affiliation->id }}" {{ ($course->course_affiliation_id == $affiliation->id) ? 'selected' : '' }}>{{ $affiliation->name_en }}</option>
                      @endforeach
                    @endisset
                  </select>
                  <div id="course_affiliation_id" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Course language<span class="text-danger">*</span></label>
                  <select name="course_language" id="courselanguage" class="form-control" data-placeholder="Course language">
                    <option value="">Select course language</option>
                    <option value="Arabic" {{ ($course->course_language == 'Arabic') ? 'selected' : '' }}>Arabic</option>
                    <option value="English" {{ ($course->course_language == 'English') ? 'selected' : '' }}>English</option>
                  </select>
                  <div id="course_language" class="invalid-feedback"></div>
                </div>
              </div>
              {{--<div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Training location<span class="text-danger">*</span></label>
                  <select name="course_traning_location" id="coursetraninglocation" class="form-control" data-placeholder="Training location">
                    <option value="">Select traning location</option>
                    <option value="India" {{ ($course->course_traning_location == 'India') ? 'selected' : '' }}>India</option>
                    <option value="Dubai" {{ ($course->course_traning_location == 'Dubai') ? 'selected' : '' }}>Dubai</option>
                  </select>
                  <div id="course_traning_location" class="invalid-feedback"></div>
                </div>
              </div>--}}
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Course ZOHO id.</label>
                  <input type="text" name="course_zoho_id" id="coursezohoid" class="form-control" placeholder="Course Zoho id." value="{{ $course->zoho_id }}">
                  <div id="course_zoho_id" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="{{ ($course->course_image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="courseimage" class="control-label">Course image<span class="text-danger">*</span></label>
                  <input type="file" name="course_image" class="form-control" id="courseimage" accept="image/*">
                  <div id="course_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($course->course_image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/courses/courses/'.$course->course_image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_course_image" value="{{ $course->course_image }}">
                  </div>
                </div>
              @endif
              <div class="{{ ($course->course_brochure) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="coursebrochure" class="control-label">Course brochure</label>
                  <input type="file" name="course_brochure" class="form-control" id="coursebrochure" accept=".pdf">
                  <div id="course_brochure" class="invalid-feedback"></div>
                </div>
              </div>
              @if($course->course_brochure)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/courses/courses/'.$course->course_brochure) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_course_brochure" value="{{ $course->course_brochure }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Course methodology<span class="text-danger">*</span></label>
                  <textarea name="course_methodology_en" id="coursemethodologyen" class="form-control" placeholder="Course methodology">{{ $course->course_methodology_en }}</textarea>
                  <div id="course_methodology_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Course objectives<span class="text-danger">*</span></label>
                  <div name="course_objectives_en" class="summernote">{!! $course->course_objectives_en !!}</div>
                  <div id="course_objectives_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Target audience<span class="text-danger">*</span></label>
                  <textarea name="course_target_audience_en" id="coursetargetaudienceen" class="form-control" placeholder="Target audience">{{ $course->course_target_audience_en }}</textarea>
                  <div id="course_target_audience_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Target competencies<span class="text-danger">*</span></label>
                  <div name="course_target_competencies_en" class="summernote">{!! $course->course_target_competencies_en !!}</div>
                  <div id="course_target_competencies_en" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Course meta details</label>
                  <textarea name="course_meta_details" id="coursemetadetails" class="form-control" placeholder="Course meta details">{{ $course->course_meta_details }}</textarea>
                  <div id="course_meta_details" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Course schema</label>
                  <textarea name="course_schema" id="courseschema" class="form-control" placeholder="Course schema">{{ $course->course_schema }}</textarea>
                  <div id="course_schema" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('courses.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary coursedetailssave">Save</a>
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