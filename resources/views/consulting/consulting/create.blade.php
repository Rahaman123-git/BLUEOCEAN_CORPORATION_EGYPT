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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('consulting.index') }}">Consulting</a></li>
          <li class="breadcrumb-item active" aria-current="page">Case study details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="consultingdetailsform" id="consultingdetailsform" action="{{ route('consulting.store') }}">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Consulting company<span class="text-danger">*</span></label>
                  <select name="consulting_company_id" id="consultingcompanyid" class="form-control" data-placeholder="Consulting company">
                    <option value="">Select consulting company</option>
                    @isset($consultingCompanies)
                      @foreach($consultingCompanies as $consultingCompany)
                        <option value="{{ $consultingCompany->id }}">{{ $consultingCompany->company }}</option>
                      @endforeach
                    @endisset
                  </select>
                  <div id="consulting_company_id" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Consulting title<span class="text-danger">*</span></label>
                  <input type="text" name="consulting_title" id="consultingtitle" class="form-control" placeholder="Consulting title">
                  <div id="consulting_title" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Challenge<span class="text-danger">*</span></label>
                  <textarea name="challenge" id="challenge" class="form-control" placeholder="Challenge"></textarea>
                  <div id="challenge" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Highlighted issue<span class="text-danger">*</span></label>
                  <div name="highlighted_issue" class="summernote"></div>
                  <div id="highlighted_issue" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Highlighted summary<span class="text-danger">*</span></label>
                  <textarea name="highlighted_summary" id="highlightedsummary" class="form-control" placeholder="Highlighted Summary"></textarea>
                  <div id="highlighted_summary" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">BOC engagement approach<span class="text-danger">*</span></label>
                  <div name="boc_engagement_approach" class="summernote"></div>
                  <div id="boc_engagement_approach" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Solutions designed and delivered<span class="text-danger">*</span></label>
                  <div name="solutions_designed_delivered" class="summernote"></div>
                  <div id="solutions_designed_delivered" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Business impact delivered<span class="text-danger">*</span></label>
                  <div name="business_impact_delivered" class="summernote"></div>
                  <div id="business_impact_delivered" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Key learnings & recommendations<span class="text-danger">*</span></label>
                  <div name="key_learnings_recommendations" class="summernote"></div>
                  <div id="key_learnings_recommendations" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Why the client chose Blue Ocean consulting<span class="text-danger">*</span></label>
                  <div name="why_boc" class="summernote"></div>
                  <div id="why_boc" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="casestudybannerimage" class="control-label">Case study banner image<span class="text-danger">*</span></label>
                  <input type="file" name="case_study_banner_image" class="form-control" id="casestudybannerimage" accept="image/*">
                  <div id="case_study_banner_image" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="casestudyimage" class="control-label">Case study image<span class="text-danger">*</span></label>
                  <input type="file" name="case_study_image" class="form-control" id="casestudyimage" accept="image/*">
                  <div id="case_study_image" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="casestudythumbimage" class="control-label">Case study thumb image<span class="text-danger">*</span></label>
                  <input type="file" name="case_study_thumb_image" class="form-control" id="casestudythumbimage" accept=".pdf">
                  <div id="case_study_thumb_image" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="casestudyfile" class="control-label">Case study file</label>
                  <input type="file" name="case_study_file" class="form-control" id="casestudyfile" accept=".pdf">
                  <div id="case_study_file" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('consulting.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary consultingdetailssave">Save</a>
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