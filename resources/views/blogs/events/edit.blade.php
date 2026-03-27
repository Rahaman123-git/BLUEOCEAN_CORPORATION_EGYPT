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
        <form name="blogeventdetailsform" id="blogeventdetailsform" action="{{ route('blog.events.events.update', [$blog->id, $blogEvent->id]) }}">
          @method('PUT')
          <div class="card-body">
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Event title<span class="text-danger">*</span></label>
                  <input type="text" name="event_title" id="eventtitle" class="form-control" placeholder="Event title" value="{{ $blogEvent->event_title }}">
                  <div id="event_title" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Is highlighted event<span class="text-danger">*</span></label>
                  <select name="is_highlighted_event" id="ishighlightedevent" class="form-control" data-placeholder="Is highlighted event">
                    <option value="">Select your answer</option>
                    <option value="YES" {{ ($blogEvent->is_highlighted_event == 'YES') ? 'selected' : '' }}>Yes</option>
                    <option value="NO" {{ ($blogEvent->is_highlighted_event == 'NO') ? 'selected' : '' }}>No</option>
                  </select>
                  <div id="is_highlighted_event" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Event short description</label>
                  <input type="text" name="event_short_description" id="eventshortdescription" class="form-control" placeholder="Event short description" value="{{ $blogEvent->event_short_description }}">
                  <div id="event_short_description" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="{{ ($blogEvent->event_thumb_image) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="eventthumbimage" class="control-label">Event thumb image (preferred size: 467x339 px)<span class="text-danger">*</span></label>
                  <input type="file" name="event_thumb_image" class="form-control" id="eventthumbimage" accept="image/*">
                  <div id="event_thumb_image" class="invalid-feedback"></div>
                </div>
              </div>
              @if($blogEvent->event_thumb_image)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="{{ asset('storage/blogs/events/'.$blogEvent->event_thumb_image) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
                    <input type="hidden" name="existing_event_thumb_image" value="{{ $blogEvent->event_thumb_image }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Event details<span class="text-danger">*</span></label>
                  <div name="event_details" class="summernote">{!! $blogEvent->event_details !!}</div>
                  <div id="event_details" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">Event highlighted details</label>
                  <div name="event_highlighted_details" class="summernote">{!! $blogEvent->event_highlighted_details !!}</div>
                  <div id="event_highlighted_details" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="{{ ($blogEvent->banner_images) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="bannerimages" class="control-label">Banner images (preferred size: 1920x751 px)<span class="text-danger">*</span></label>
                  <input type="file" name="banner_images[]" class="form-control" id="bannerimages" accept="image/*" multiple>
                  <div id="banner_images" class="invalid-feedback"></div>
                </div>
              </div>
              @if($blogEvent->banner_images)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="javascript:void(0)" class="text-primary" data-bs-toggle="modal" data-bs-target="#bannerImagesModal" title="Views"><i class="bi bi-eye-fill"></i></a>
                    <input type="hidden" name="existing_banner_images" value="{{ $blogEvent->banner_images }}">
                  </div>
                </div>
              @endif
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Reel video title</label>
                  <input type="text" name="reel_video_title" id="reelvideotitle" class="form-control" placeholder="Reel video title" value="{{ $blogEvent->reel_video_title }}">
                  <div id="reel_video_title" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Reel video url</label>
                  <input type="text" name="reel_video_url" id="reelvideourl" class="form-control" placeholder="Reel video url" value="{{ $blogEvent->reel_video_url }}">
                  <div id="reel_video_url" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="{{ ($blogEvent->event_images) ? 'col-md-5' : 'col-md-6' }}">
                <div class="form-group">
                  <label for="eventimages" class="control-label">Event images (preferred size: 953x495 px)</label>
                  <input type="file" name="event_images[]" class="form-control" id="eventimages" accept="image/*" multiple>
                  <div id="event_images" class="invalid-feedback"></div>
                </div>
              </div>
              @if($blogEvent->event_images)
                <div class="col-md-1 mt-35">
                  <div class="form-group">
                    <a href="javascript:void(0)" class="text-primary" data-bs-toggle="modal" data-bs-target="#eventImagesModal" title="Views"><i class="bi bi-eye-fill"></i></a>
                    <input type="hidden" name="existing_event_images" value="{{ $blogEvent->event_images }}">
                  </div>
                </div>
              @endif
            </div>
            <!--/span-->
            @php
              $videoBlogUrls = json_decode($blogEvent->video_blog_urls, true);
            @endphp
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Vidoe blog url - 1</label>
                  <input type="text" name="video_blog_url_1" id="videoblogurl_1" class="form-control" placeholder="Reel video title" value="{{ $videoBlogUrls[0] ?? '' }}">
                  <div id="video_blog_url_1" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Vidoe blog url - 2</label>
                  <input type="text" name="video_blog_url_2" id="videoblogurl_2" class="form-control" placeholder="Reel video title" value="{{ $videoBlogUrls[1] ?? '' }}">
                  <div id="video_blog_url_2" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Vidoe blog url - 3</label>
                  <input type="text" name="video_blog_url_3" id="videoblogurl_3" class="form-control" placeholder="Reel video title" value="{{ $videoBlogUrls[2] ?? '' }}">
                  <div id="video_blog_url_3" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Vidoe blog url - 4</label>
                  <input type="text" name="video_blog_url_4" id="videoblogurl_4" class="form-control" placeholder="Reel video title" value="{{ $videoBlogUrls[3] ?? '' }}">
                  <div id="video_blog_url_4" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Vidoe blog url - 5</label>
                  <input type="text" name="video_blog_url_5" id="videoblogurl_5" class="form-control" placeholder="Reel video title" value="{{ $videoBlogUrls[4] ?? '' }}">
                  <div id="video_blog_url_5" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Vidoe blog url - 6</label>
                  <input type="text" name="video_blog_url_6" id="videoblogurl_6" class="form-control" placeholder="Reel video title" value="{{ $videoBlogUrls[5] ?? '' }}">
                  <div id="video_blog_url_6" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Vidoe blog url - 7</label>
                  <input type="text" name="video_blog_url_7" id="videoblogurl_7" class="form-control" placeholder="Reel video title" value="{{ $videoBlogUrls[6] ?? '' }}">
                  <div id="video_blog_url_7" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Vidoe blog url - 8</label>
                  <input type="text" name="video_blog_url_9" id="videoblogurl_8" class="form-control" placeholder="Reel video title" value="{{ $videoBlogUrls[7] ?? '' }}">
                  <div id="video_blog_url_9" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row mb-3">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Vidoe blog url - 9</label>
                  <input type="text" name="video_blog_url_9" id="videoblogurl_9" class="form-control" placeholder="Reel video title" value="{{ $videoBlogUrls[8] ?? '' }}">
                  <div id="video_blog_url_9" class="invalid-feedback"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="control-label">Vidoe blog url - 10</label>
                  <input type="text" name="video_blog_url_10" id="videoblogurl_10" class="form-control" placeholder="Reel video title" value="{{ $videoBlogUrls[9] ?? '' }}">
                  <div id="video_blog_url_10" class="invalid-feedback"></div>
                </div>
              </div>
            </div>
            <!--/span-->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="pull-left">
                    <a href="{{ route('blog.events.events.index', $blog->id) }}" class="btn btn-danger">Back</a> 
                    <a href="javascript:void(0)" class="btn btn-primary blogeventdetailssave">Save</a>
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
            $bannerImages = json_decode($blogEvent->banner_images, true);
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

  <!-- Event Images Modal -->
  <div class="modal" id="eventImagesModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
          @php
            $eventImages = json_decode($blogEvent->event_images, true);
          @endphp
          @if(count($eventImages))
            <table class="table">
              <tbody>
                @foreach($eventImages as $eventImage)
                  <tr>
                    <td>Image - {{ ++$loop->index }}</td>
                    <td>
                      <a href="{{ asset('storage/'.$eventImage) }}" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views" target="_blank"><i class="bi bi-cloud-download-fill"></i></a>
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