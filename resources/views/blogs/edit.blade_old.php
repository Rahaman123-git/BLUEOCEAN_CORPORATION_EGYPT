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
      <div class="d-flex justify-content-end">
        <a href="javascript:void(0)" id="otherdetails" class="btn btn-outline-secondary dropdown-toggle pull-right px-5" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-book-half"></i> Other details</a>
        <ul class="dropdown-menu" aria-labelledby="otherdetails">
          <li><a href="{{ route('blog.events.events.index', $blog->id) }}" class="dropdown-item">Blog events</a></li>
        </ul>
      </div>
      <hr/>
      <div class="card">
        <form name="blogdetailsform" id="blogdetailsform" action="{{ route('blog.events.update', $blog->id) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Blog type<span class="text-danger">*</span></label>
                  <select name="blog_type" id="blogtype" class="form-control" data-placeholder="Blog type">
                    <option value="">Select blog type</option>
                    <option value="INSIDE_BLUE_OCEAN" {{ ($blog->blog_type == 'INSIDE_BLUE_OCEAN') ? 'selected' : '' }}>Inside Blue Ocean</option>
                    <option value="EXPERT_EDGE_INSIGHTS" {{ ($blog->blog_type == 'EXPERT_EDGE_INSIGHTS') ? 'selected' : '' }}>Expert Edge Insights</option>
                  </select>
                  <div id="blog_type" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Blog title<span class="text-danger">*</span></label>
                  <input type="text" name="blog_title" id="blogtitle" class="form-control" placeholder="Blog title" value="{{ $blog->blog_title }}">
                  <div id="blog_title" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Blog short description</label>
                  <input type="text" name="blog_short_description" id="blog_short_description" class="form-control" placeholder="Blog short description" value="{{ $blog->blog_short_description }}">
                  <div id="Blog short description" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="{{ ($blog->blog_thumb_image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="blogthumbimage" class="control-label">Blog thumb image (preferred size: 467x339 px)<span class="text-danger">*</span></label>
                  <input type="file" name="blog_thumb_image" class="form-control" id="blogthumbimage" accept="image/*">
                  <div id="blog_thumb_image" class="invalid-feedback"></div>

                </div>
              </div>
              @if($blog->blog_thumb_image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/blogs/'.$blog->blog_thumb_image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_blog_thumb_image" value="{{ $blog->blog_thumb_image }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Introduction title<span class="text-danger">*</span></label>
                  <input type="text" name="introduction_title" id="introductiontitle" class="form-control" placeholder="Introduction title" value="{{ $blog->introduction_title }}">
                  <div id="introduction_title" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="{{ ($blog->introduction_image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="introductionimage" class="control-label">Introduction image</label>
                  <input type="file" name="introduction_image" class="form-control" id="introductionimage" accept="image/*">
                  <div id="introduction_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($blog->introduction_image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/blogs/'.$blog->introduction_image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_introduction_image" value="{{ $blog->introduction_image }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Introduction video title</label>
                  <input type="text" name="introduction_video_title" id="introductionvideotitle" class="form-control" placeholder="Introduction video title" value="{{ $blog->introduction_video_title }}">
                  <div id="introduction_video_title" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Introduction video url</label>
                  <input type="text" name="introduction_video_url" id="introductionvideourl" class="form-control" placeholder="Introduction video url" value="{{ $blog->introduction_video_url }}">
                  <div id="introduction_video_url" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Introduction details<span class="text-danger">*</span></label>
                  <div name="introduction_details" class="summernote">{!! $blog->introduction_details !!}</div>
                  <div id="introduction_details" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="{{ ($blog->banner_images) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="bannerimages" class="control-label">Banner images (preferred size: 1920x588 px)<span class="text-danger">*</span></label>
                  <input type="file" name="banner_images[]" class="form-control" id="bannerimages" accept="image/*" multiple>
                  <div id="banner_images" class="invalid-feedback"></div>
                </div>
              </div>
              @if($blog->banner_images)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="javascript:void(0)" class="text-primary" data-bs-toggle="modal" data-bs-target="#bannerImagesModal" title="Views"><i class="bi bi-eye-fill"></i></a>
                    <input type="hidden" name="existing_banner_images" value="{{ $blog->banner_images }}">
                  </div>
                </div>
              @endif
              <div class="{{ ($blog->highlighted_images) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="highlightedmages" class="control-label">Highlighted images (preferred size: 1440x524 px)</label>
                  <input type="file" name="highlighted_images[]" class="form-control" id="highlightedmages" accept="image/*" multiple>
                  <div id="highlighted_images" class="invalid-feedback"></div>
                </div>
              </div>
              @if($blog->highlighted_images)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="javascript:void(0)" class="text-primary" data-bs-toggle="modal" data-bs-target="#highlightedImagesModal" title="Views"><i class="bi bi-eye-fill"></i></a>
                    <input type="hidden" name="existing_highlighted_images" value="{{ $blog->highlighted_images }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Blog details<span class="text-danger">*</span></label>
                  <div name="blog_details" class="summernote">{!! $blog->blog_details !!}</div>
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

  <!-- Banner Images Modal -->
  <div class="modal" id="bannerImagesModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
          @php
            $bannerImages = json_decode($blog->banner_images, true);
          @endphp
          @if(count($bannerImages))
            <table class="table">
              <tbody>
                @foreach($bannerImages as $bannerImage)
                  <tr>
                    <td>Image - {{ ++$loop->index }}</td>
                    <td>
                      <a href="{{ asset('storage/'.$bannerImage) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          @endif
        </div>
      </div>
    </div>
  </div>

  <!-- Highlighted Images Modal -->
  <div class="modal" id="highlightedImagesModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
          @php
            $highlightedImages = json_decode($blog->highlighted_images, true);
          @endphp
          @if(count($highlightedImages))
            <table class="table">
              <tbody>
                @foreach($highlightedImages as $highlightedImage)
                  <tr>
                    <td>Image - {{ ++$loop->index }}</td>
                    <td>
                      <a href="{{ asset('storage/'.$highlightedImage) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection