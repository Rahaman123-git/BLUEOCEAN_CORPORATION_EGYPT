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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('galleries.index', [$media, $tag]) }}">BOC life</a></li>
          <li class="breadcrumb-item active" aria-current="page">BOC life photo details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="gallerydetailsform" id="gallerydetailsform" action="{{ route('galleries.update', [$media, $tag, 'id' => $gallery->id]) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Photo year<span class="text-danger">*</span></label>
                  <select name="photo_year" id="photoyear" class="form-control" data-placeholder="Photo year">
                    <option value="">Select photo year</option>
                    @for($year = 2020; $year <= Carbon\Carbon::now()->year; $year++)
                      <option value="{{ $year }}" {{ ($gallery->photo_year == $year) ? 'selected' : '' }}>{{ $year }}</option>
                    @endfor
                  </select>
                  <div id="photo_year" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Photo title<span class="text-danger">*</span></label>
                  <input type="text" name="photo_title" id="phototitle" class="form-control" placeholder="Photo title" value="{{ $gallery->photo_title }}">
                  <div id="photo_title" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="{{ ($gallery->image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="galleryimage" class="form-label">Gallery photo<span class="text-danger">*</span></label>
                  <input type="file" name="gallery_image" class="form-control" id="galleryimage" accept="image/*">
                  <div id="gallery_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($gallery->image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/gallery/photos/'.$gallery->image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_gallery_image" value="{{ $gallery->image }}">
                  </div>
                </div>
              @endif
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