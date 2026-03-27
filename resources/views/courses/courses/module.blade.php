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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('courses.edit', $course->id) }}">Course details</a></li>
          <li class="breadcrumb-item active" aria-current="page">Course module details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="coursemoduledetailsform" id="coursemoduledetailsform" action="{{ route('courses.update.module', $course->id) }}">
          @method('PUT')
          <div class="card-body">
            @if(count($courseModules))
              <ul class="nav nav-tabs nav-primary" role="tablist">
                @foreach($courseModules as $cKey => $courseModule)
                  <li class="nav-item" role="presentation">
                    <a class="nav-link {{ !$cKey ? 'active' : '' }}" data-bs-toggle="tab" href="#{{ $courseModule }}" module="{{ $courseModule }}" role="tab" aria-selected="true">
                      <div class="d-flex align-items-center">
                        <div class="tab-title">{{ $courseModule }}</div>
                      </div>
                    </a>
                  </li>
                @endforeach
              </ul>
            @endif
            @if(count($courseModules))
              <div class="tab-content py-3">
                @foreach($courseModules as $cKey => $courseModule)
                  <div class="tab-pane fade {{ !$cKey ? 'active show' : '' }}" id="{{ $courseModule }}" role="tabpanel">
                    <div class="row mb-3">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="control-label">Course module introduction<span class="text-danger">*</span></label>
                          <textarea name="course_module_introduction_en[{{ $courseModule }}]" class="form-control" placeholder="Course module introduction">{{ $courseModuleDetails->course_module_introduction_en[$courseModule] ?? '' }}</textarea>
                          <div id="course_module_introduction_en_{{ $courseModule }}" class="invalid-feedback"></div>
                        </div>
                      </div>
                    </div>
                    <!--/span-->
                    @php $loopIndex = 1; @endphp
                    @if($courseModuleDetails && $courseModuleDetails->course_module_title_en[$courseModule])
                      @foreach($courseModuleDetails->course_module_title_en[$courseModule] as $mKey => $moduleTitle)
                        <div class="row mb-3 coursemoduletitle">
                          <div class="col-md-10">
                            <div class="form-group">
                              <label class="control-label">Course module title<span class="text-danger">*</span></label>
                              <input type="text" name="course_module_title_en[{{ $courseModule }}][{{ $mKey }}]" class="form-control" placeholder="Course module title" value="{{ $moduleTitle }}">
                              <div id="course_module_title_en_{{ $courseModule }}_{{ $mKey }}" class="invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="col-md-2 mt-3 coursemoduleaction">
                            @if(count($courseModuleDetails->course_module_title_en[$courseModule]) == $loopIndex)
                              <a href="javascript:;" class="text-warning coursemoduleadd" aria-label="Add new module" data-bs-original-title="Add new module"><i class="bi bi-plus-circle fs-4"></i></a>
                              @if(count($courseModuleDetails->course_module_title_en[$courseModule]) > 1)
                                <a href="javascript:;" class="text-danger coursemoduleremove" aria-label="Delete module" data-bs-original-title="Delete module"><i class="bi bi-trash-fill fs-4"></i></a>
                              @endif
                            @else
                              <a href="javascript:;" class="text-warning coursemoduleadd" aria-label="Add new module" data-bs-original-title="Add new module"><i class="bi bi-plus-circle fs-4"></i></a>
                            @endif
                          </div>
                        </div>
                        <!--/span-->
                        <div class="row mb-3 coursemoduledetails">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label class="control-label">Course module details<span class="text-danger">*</span></label>
                              <div name="course_module_details_en[{{ $courseModule }}][{{ $mKey }}]" class="summernote">{!! $courseModuleDetails->course_module_details_en[$courseModule][$mKey] !!}</div>
                              <div id="course_module_details_en_{{ $courseModule }}_{{ $mKey }}" class="invalid-feedback"></div>
                            </div>
                          </div>
                        </div>
                        <!--/span-->
                        @php $loopIndex++; @endphp
                      @endforeach
                    @else
                      <div class="row mb-3 coursemoduletitle">
                        <div class="col-md-10">
                          <div class="form-group">
                            <label class="control-label">Course module title<span class="text-danger">*</span></label>
                            <input type="text" name="course_module_title_en[{{ $courseModule }}][0]" class="form-control" placeholder="Course module title">
                            <div id="course_module_title_en_{{ $courseModule }}_0" class="invalid-feedback"></div>
                          </div>
                        </div>
                        <div class="col-md-2 mt-3 coursemoduleaction">
                          <a href="javascript:;" class="text-warning coursemoduleadd" aria-label="Add new module" data-bs-original-title="Add new module"><i class="bi bi-plus-circle fs-4"></i></a>
                        </div>
                      </div>
                      <!--/span-->
                      <div class="row mb-3 coursemoduledetails">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="control-label">Course module details<span class="text-danger">*</span></label>
                            <div name="course_module_details_en[{{ $courseModule }}][0]" class="summernote"></div>
                            <div id="course_module_details_en_{{ $courseModule }}_0" class="invalid-feedback"></div>
                          </div>
                        </div>
                      </div>
                      <!--/span-->
                    @endif
                  </div>
                @endforeach
              </div>
            @endif
            <div class="row coursemodulesave">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('courses.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary coursemoduledetailssave">Save</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <input type="hidden" name="coursemodulecurrentindex" value="0">
  <!--end row-->
@endsection