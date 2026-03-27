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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('awards.index') }}">Awards</a></li>
          <li class="breadcrumb-item active" aria-current="page">Award details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="awarddetailsform" id="awarddetailsform" action="{{ route('awards.update', $award->id) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Award category<span class="text-danger">*</span></label>
                  <input type="text" name="award_category" id="awardcategory" class="form-control" placeholder="Award category" value="{{ $award->category }}">
                  <div id="award_category" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Award title<span class="text-danger">*</span></label>
                  <input type="text" name="award_title" id="awardtitle" class="form-control" placeholder="Award title" value="{{ $award->title }}">
                  <div id="award_title" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Awarding Body</label>
                  <input type="text" name="awarding_body" id="awardingbody" class="form-control" placeholder="Awarding Body" value="{{ $award->awarding_body }}">
                  <div id="awarding_body" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="{{ ($award->image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="awardimage" class="control-label">Award image<span class="text-danger">*</span></label>
                  <input type="file" name="award_image" class="form-control" id="awardimage" accept="image/*">
                  <div id="award_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($award->image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/awards/'.$award->image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_award_image" value="{{ $award->image }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Significance</label>
                  <div name="award_significance" class="summernote">{!! $award->significance !!}</div>
                  <div id="award_significance" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Impact</label>
                  <div name="award_impact" class="summernote">{!! $award->impact !!}</div>
                  <div id="award_impact" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('awards.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary awarddetailssave">Save</a>
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