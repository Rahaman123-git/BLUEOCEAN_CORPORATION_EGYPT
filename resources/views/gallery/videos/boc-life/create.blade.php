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
          <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Gallery</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('galleries.index', [$media, $tag]) }}">BOC life videos</a></li>
          <li class="breadcrumb-item active" aria-current="page">BOC life video details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="gallerydetailsform" id="gallerydetailsform" action="{{ route('galleries.store', [$media, $tag]) }}">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Video year<span class="text-danger">*</span></label>
                  <select name="video_year" id="videoyear" class="form-control" data-placeholder="Video year">
                    <option value="">Select video year</option>
                    @for($year = 2020; $year <= Carbon\Carbon::now()->year; $year++)
                      <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                  </select>
                  <div id="photo_year" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Video title<span class="text-danger">*</span></label>
                  <input type="text" name="video_title" id="videotitle" class="form-control" placeholder="Video title">
                  <div id="video_title" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Video url<span class="text-danger">*</span></label>
                  <input type="text" name="video_url" id="videourl" class="form-control" placeholder="Video url">
                  <div id="video_url" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="videothumbimage" class="control-label">Video thumb image<span class="text-danger">*</span></label>
                  <input type="file" name="video_thumb_image" class="form-control" id="videothumbimage" accept="image/*">
                  <div id="video_thumb_image" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('galleries.index', [$media, $tag]) }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary gallerydetailssave">Save</a>
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