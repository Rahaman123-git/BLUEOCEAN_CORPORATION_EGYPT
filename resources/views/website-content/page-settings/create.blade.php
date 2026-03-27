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
          <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Website content</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('website.content.page.settings.index') }}">Page settings</a></li>
          <li class="breadcrumb-item" aria-current="page">Page setting details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="pagesettingdetailsform" id="pagesettingdetailsform" action="{{ route('website.content.page.settings.store') }}">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Page type<span class="text-danger">*</span></label>
                  <select name="page_type" id="pagetype" class="form-control" data-placeholder="Page type">
                    <option value="">Select page type</option>
                    <option value="HOME_PAGE">Home page</option>
                    <option value="ABOUT_US">About us</option>
                    <option value="CONSULTING">Consulting</option>
                    <option value="TRAINING">Training</option>
                    <option value="CORPORATE_TRAINING">Corporate training</option>
                    <option value="CONFERENCES">Conferences</option>
                    <option value="NEWS">News</option>
                  </select>
                  <div id="page_type" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Page title<span class="text-danger">*</span></label>
                  <input type="text" name="page_title" id="pagetitle" class="form-control" placeholder="Page title">
                  <div id="page_title" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Meta details</label>
                  <textarea name="meta_details" id="metadetails" class="form-control" placeholder="Meta details"></textarea>
                  <div id="meta_details" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Page schema</label>
                  <textarea name="page_schema" id="pageschema" class="form-control" placeholder="Page schema"></textarea>
                  <div id="page_schema" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bannerfile" class="form-label">Banner file<span class="text-danger">*</span></label>
                  <input type="file" name="banner_file" class="form-control" id="bannerfile" accept="image/*,video/mp4">
                  <div id="banner_file" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('website.content.page.settings.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary pagesettingdetailssave">Save</a>
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