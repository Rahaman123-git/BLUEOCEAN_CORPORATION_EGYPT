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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('consulting.companies.index') }}">Consulting companies</a></li>
          <li class="breadcrumb-item active" aria-current="page">Consulting company details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="consultingcompanydetailsform" id="consultingcompanydetailsform" action="{{ route('consulting.companies.update', $consultingCompany->id) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Company name<span class="text-danger">*</span></label>
                  <input type="text" name="company_name" id="companyname" class="form-control" placeholder="Company name" value="{{ $consultingCompany->company }}">
                  <div id="company_name" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="{{ ($consultingCompany->image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="companylogo" class="form-label">Company logo<span class="text-danger">*</span></label>
                  <input type="file" name="company_logo" class="form-control" id="companylogo" accept="image/*">
                  <div id="company_logo" class="invalid-feedback"></div>
                </div>
              </div>
              @if($consultingCompany->image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/consulting/companies/'.$consultingCompany->image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_company_logo" value="{{ $consultingCompany->image }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="form-label">Company details</label>
                  <div name="company_description" class="summernote">{{ $consultingCompany->description }}</div>
                  <div id="company_description" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('consulting.companies.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary consultingcompanydetailssave">Save</a>
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