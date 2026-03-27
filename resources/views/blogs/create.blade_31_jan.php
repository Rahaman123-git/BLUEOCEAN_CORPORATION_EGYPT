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
          <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('blog.events.index') }}">Blogs</a></li>
          <li class="breadcrumb-item active" aria-current="page">Blog details</li>
        </ol>
      </nav>
    </div>
  </div>
  <!--end breadcrumb-->
  <div class="row">
    <div class="col-xl-12 mx-auto">
      <hr/>
      <div class="card">
        <form name="blogdetailsform" id="blogdetailsform" action="{{ route('blog.events.store') }}">
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Blog type<span class="text-danger">*</span></label>
                  <select name="blog_type" id="blogtype" class="form-control" data-placeholder="Blog type">
                    <option value="">Select blog type</option>
                    <option value="INSIDE_BLUE_OCEAN">Inside Blue Ocean</option>
                    <option value="EXPERT_EDGE_INSIGHTS">Expert Edge Insights</option>
                  </select>
                  <div id="blog_type" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Blog title<span class="text-danger">*</span></label>
                  <input type="text" name="blog_title" id="blogtitle" class="form-control" placeholder="Blog title">
                  <div id="blog_title" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Blog short description</label>
                  <input type="text" name="blog_short_description" id="blogshortdescription" class="form-control" placeholder="Blog short description">
                  <div id="blog_short_description" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="blogthumbimage" class="control-label">Blog thumb image (preferred size: 467x339 px)<span class="text-danger">*</span></label>
                  <input type="file" name="blog_thumb_image" class="form-control" id="blogthumbimage" accept="image/*">
                  <div id="blog_thumb_image" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Introduction title<span class="text-danger">*</span></label>
                  <input type="text" name="introduction_title" id="introductiontitle" class="form-control" placeholder="Introduction title">
                  <div id="introduction_title" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="introductionimage" class="control-label">Introduction image</label>
                  <input type="file" name="introduction_image" class="form-control" id="introductionimage" accept="image/*">
                  <div id="introduction_image" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Introduction video title</label>
                  <input type="text" name="introduction_video_title" id="introductionvideotitle" class="form-control" placeholder="Introduction video title">
                  <div id="introduction_video_title" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Introduction video url</label>
                  <input type="text" name="introduction_video_url" id="introductionvideourl" class="form-control" placeholder="Introduction video url">
                  <div id="introduction_video_url" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Introduction details<span class="text-danger">*</span></label>
                  <div name="introduction_details" class="summernote"></div>
                  <div id="introduction_details" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bannerimages" class="control-label">Banner images (preferred size: 1920x588 px)<span class="text-danger">*</span></label>
                  <input type="file" name="banner_images[]" class="form-control" id="bannerimages" accept="image/*" multiple>
                  <div id="banner_images" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="highlightedmages" class="control-label">Highlighted images (preferred size: 1440x524 px)</label>
                  <input type="file" name="highlighted_images[]" class="form-control" id="highlightedmages" accept="image/*" multiple>
                  <div id="highlighted_images" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Blog details<span class="text-danger">*</span></label>
                  <div name="blog_details" class="summernote"></div>
                  <div id="blog_details" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('blog.events.index') }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary blogdetailssave">Save</a>
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