@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/blog-detail.css') }}">
@endpush

@section('content')
  @if($blogEvent->banner_images)
    @php
      $bannerImages = json_decode($blogEvent->banner_images, true);
    @endphp
    <div class="blogDetails-banner">
      <div class="blogDetailSlider">
        @foreach($bannerImages as $bannerImage)
          <div>
            <img src="{{ asset('storage/'.$bannerImage) }}" alt="banner image" class="w-full banner-img" />
          </div>
        @endforeach
      </div>
    </div>
  @endif

  <section class="blogDetails-two-cols">
    <div class="container">
      {!! $blogEvent->event_details !!}
    </div>
  </section>
  <hr />

  <div class="blueBox">
    <div class="container">
      {!! $blogEvent->event_highlighted_details !!}
    </div>
  </div>

  <div class="two-col-right">
    <div class="container">
      <div class="mainContainer">
        @php
          $eventImages = json_decode($blogEvent->event_images, true);
        @endphp
        @foreach($eventImages as $eventImage)
          <div class="imgWrapper">
            <img src="{{ asset('storage/'.$eventImage) }}" alt="" />
          </div>
        @endforeach
      </div>

      <aside class="right-sidebar">
        @if($relatedBlogEvents)
          <div class="sidebar-heading">
            <h3>Related Blog</h3>
          </div>
        @endif
        <div class="sidebar-content">
          @if($relatedBlogEvents)
            @foreach($relatedBlogEvents as $relatedBlogEvent)
              <div class="ratedBlog-list">
                <div class="ratedBlog-item">
                  <h4>{{ $relatedBlogEvent->event_title }}</h4>
                  <p>{{ $relatedBlogEvent->event_short_description }}</p>

                  <a href="{{ route('blog.event.details', $relatedBlogEvent->slug) }}" class="btn primary-btn">
                    <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                  </a>
                </div>
              </div>
            @endforeach
          @endif

          @if($blogEvent->reel_video_title && $blogEvent->reel_video_url)
            <div class="blogReelsWrapper">
              <h4>{{ $blogEvent->reel_video_title }}</h4>
              <div class="blogReels-item">
                <!-- If you want to keep the thumbnail with a play icon, uncomment below -->
                <img src="{{ asset('assets/frontend/images/AGMAwardReel-1.jpg') }}" alt="" />
                <a class="playIcon" href="{{ $blogEvent->reel_video_url }}" target="_blank">
                  <span><img src="{{ asset('assets/frontend/images/play-circle-white.svg') }}" alt="" /></span>
                </a>
              </div>
            </div>
          @endif
        </div>
      </aside>
    </div>
  </div>

  @php
    $videoBlogURLs = json_decode($blogEvent->video_blog_urls, true);
  @endphp
  @if(count($videoBlogURLs))
    <section class="videoBlog-wrapper">
      <div class="container">
        <h2>Video Blogs</h2>
        <div class="videoBlog-grid">
          @foreach($videoBlogURLs as $videoBlogURL)
            @if($videoBlogURL)
              <div class="videoItem">
                <iframe width="100%" height="315" src="{{ $videoBlogURL }}" frameborder="0" allowfullscreen></iframe>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </section>
  @endif
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/blog-slider') }}"></script>
@endpush
