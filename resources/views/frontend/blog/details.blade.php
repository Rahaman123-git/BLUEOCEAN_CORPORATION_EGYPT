@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/blog-category.css') }}">

<style>.blog-meta-wrap{
  margin-bottom: 14px;
}

.blog-title{
  margin-bottom: 10px;
  font-weight: 700;
}

.blog-meta{
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 10px;
  font-size: 14px;
  color: #6b7280;
}

.meta-item{
  display: inline-flex;
  align-items: center;
  gap: 8px;
}

.meta-icon{
  width: 16px;
  height: 16px;
  opacity: 0.8;
}

.meta-dot{
  color: #9ca3af;
}
</style>

@endpush

@section('content')
  @if($blog->banner_images)
    @php
      $bannerImages = json_decode($blog->banner_images, true);
    @endphp
    <div class="blogCat-bannerSlider">
      <div class="blogCatBanner">
        @foreach($bannerImages as $bannerImage)
          <div>
            <img src="{{ asset('storage/'.$bannerImage) }}" alt="banner image" class="w-full banner-img" />
          </div>
        @endforeach
      </div>
      @if($blog->introduction_video_title && $blog->introduction_video_url)
        <a class="highlight-link" href="{{ $blog->introduction_video_url }}">{{ $blog->introduction_video_title }} <img src="{{ asset('assets/frontend/images/play-circle-blue.svg') }}" alt="" /></a>
      @endif
    </div>
  @endif

  <section class="blogCat-two-cols">
    <div class="container">
      <div class="blog-title-wrap">
  <h2 class="blog-title">{!! $blog->introduction_title !!}</h2>

  {{-- meta must be under title --}}
  <div class="blog-meta-wrap">
    <div class="blog-meta">
      <span class="meta-item">
        <img src="{{ asset('assets/frontend/images/icons/user.png') }}" class="meta-icon" alt="Author">
        <span class="meta-text">{{ !empty($blog->created_by) ? $blog->created_by : 'Blue Ocean Corporation' }}</span>
      </span>

      <span class="meta-dot">•</span>

      <span class="meta-item">
        <img src="{{ asset('assets/frontend/images/icons/calendar.svg') }}" class="meta-icon" alt="Date">
        <span class="meta-text">{{ $blog->published_date ? \Carbon\Carbon::parse($blog->published_date)->format('d M Y') : $blog->created_at->format('d M Y') }}</span>
      </span>
    </div>
  </div>
</div>

		
     <!-- <div class="col-heading">
        @php
          $introductionTitle = explode('<br />', breakByChars($blog->introduction_title, 11));
        @endphp
        <h2>
          @if(count($introductionTitle))
            @foreach ($introductionTitle as $index => $line)
              {!! $index === count($introductionTitle) - 1 ? '<strong>' . e($line) . '</strong>' : e($line) . '<br />' !!}
            @endforeach
          @endif
        </h2>
        @if($blog->introduction_image)
          <span><img src="{{ asset('storage/blogs/'.$blog->introduction_image) }}" alt="" /></span>
        @endif
      </div>
      <div class="col-content">
        {!! $blog->introduction_details !!}
      </div>-->
    </div>
  </section>
  <hr />

  <div class="blog-category-details">
    <div class="container">
      @if($blog->highlighted_images)
        @php
          $highlightedImages = json_decode($blog->highlighted_images, true);
        @endphp
        <div class="sliderWrapper">
          <div class="blogCatSlider">
            @foreach($highlightedImages as $highlightedImage)
              <div>
                <img src="{{ asset('storage/'.$highlightedImage) }}" alt="" />
              </div>
            @endforeach
          </div>
        </div>
      @endif

      {!! $blog->blog_details !!}
    </div>
  </div>

  @if(isset($blogEvents) && count($blogEvents))
    <section class="blogList-wrapper blogCat-list">
      <div class="container no-border">
        <div class="listHeader catList">
          <h2>{{ $blog->introduction_title }}</h2>
          {{--<div class="listHeader-right">
            <div class="searchBox">
              <input type="text" name="Search Blogs" id="" placeholder="Search by  > performance, Awards ..* by Pre-filed Hint text" class="searchInput" />
              <button type="button" class="searchBtn">
                <img src="{{ asset('assets/frontend/images/search-icon.svg') }}" alt="" />
              </button>
            </div>
            <div class="selectBox">
              <select name="" id="">
                <option value="3 Months">Latest 3 Months</option>
                <option value="6 Months">6 Months</option>
                <option value="9 Months">9 Months</option>
                <option value="12 Months">12 Months</option>
              </select>
            </div>
          </div>--}}
        </div>

        <div class="blogList">
          @foreach($blogEvents as $blogEvent)
            <div class="list-item">
              <div class="item-img">
                <img src="{{ asset('storage/blogs/events/'.$blogEvent->event_thumb_image) }}" alt="" />
              </div>
              <div class="item-info">
                <h4>{{ $blogEvent->event_title }}</h4>
                <strong>{{ $blogEvent->event_short_description }}</strong>
                <a href="{{ route('blog.event.details', $blogEvent->slug) }}" class="btn primary-btn">
                  <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                </a>
              </div>
            </div>
          @endforeach
        </div>

        {{--<div class="list-bottomLink">
          <a href="{{ route('blog.event.details') }}" class="arrowLink"> <span>View More</span> <img src="{{ asset('assets/frontend/images/icons/arrow-right-outline.svg') }}" alt="" /> </a>
        </div>--}}
      </div>
    </section>
  @endif

  @if($highlightedBlogEvent)
    @php
      $bannerImages = json_decode($highlightedBlogEvent->banner_images, true);
    @endphp      
    <div class="catImgWrapper">
      <div class="container">
        <img src="{{ asset('storage/'.($bannerImages[0] ?? '')) }}" alt="" />
        <div class="cat-details">
          <p>
            {{ $highlightedBlogEvent->event_title }} : {{ $highlightedBlogEvent->event_short_description }}
          </p>
          <a href="{{ route('blog.event.details', $highlightedBlogEvent->slug) }}" class="btn primary-btn">
            View More
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
    </div>

    @php
      $videoBlogURLs = json_decode($highlightedBlogEvent->video_blog_urls, true);
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
  @endif
@endsection

@push('scripts')
<script src="{{ asset('assets/frontend/js/blog-slider') }}"></script>
@endpush

