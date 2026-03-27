@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/blog-category.css') }}">
@endpush

@section('content')
<!-- Section Starts Here 1 -->
<div class="blogCat-bannerSlider">
  <div class="blogCatBanner">
    <div>
      <img src="{{ asset('assets/frontend/images/blogCategory-banner1.jpg') }}" alt="banner image" class="w-full banner-img" />
    </div>
    <div>
      <img src="{{ asset('assets/frontend/images/blogCategory-banner1.jpg') }}" alt="banner image" class="w-full banner-img" />
    </div>
    <div>
      <img src="{{ asset('assets/frontend/images/blogCategory-banner1.jpg') }}" alt="banner image" class="w-full banner-img" />
    </div>
  </div>
  <a class="highlight-link" href="#">AGM 2025 Highlight <img src="{{ asset('assets/frontend/images/play-circle-blue.svg') }}" alt="" /></a>
</div>
<!-- Section End Here 1 -->

<!-- Section Starts Here 2 -->
<section class="blogCat-two-cols">
  <div class="container">
    <div class="col-heading">
      <h2>
        Celebrating <br />
        Excellence <br />
        <strong>AGM 2025</strong>
      </h2>
      <span><img src="{{ asset('assets/frontend/images/voco-logo.jpg') }}" alt="" /></span>
    </div>
    <div class="col-content">
      <h3>Intro about AGM 2025 Event</h3>
      <p>Stay ahead with the latest industry trends, expert insights, and company updates. Whether you're looking to explore <strong>Blue Ocean Corporation’s journey or gain valuable industry knowledge,</strong> we’ve got you covered!</p>
    </div>
  </div>
</section>
<!-- Section End Here 2 -->
<hr />

<!-- Section Starts Here 3 -->
<div class="blog-category-details">
  <div class="container">
    <div class="sliderWrapper">
      <div class="blogCatSlider">
        <div><img src="{{ asset('assets/frontend/images/catSlider-img1.jpg') }}" alt="" /></div>
        <div><img src="{{ asset('assets/frontend/images/catSlider-img2.jpg') }}" alt="" /></div>
      </div>
    </div>

    <div class="details-content">
      <h3>Information about AGM 2025 Event</h3>
      <div class="blogDetails-two-col">
        <div class="col-left">
          <p>AGM 2025 commenced with a group photo, capturing the smiling faces of Blue Ocean members from every corner. Together in one frame, we set the tone for an exciting and unforgettable day.</p>
          <p>Dr. Sathya Menon took the stage, introducing the event with his inspiring words, followed by a motivating speech by Mr. Abdul Azeez. The energy was palpable with excitement radiating from every face.</p>
          <p>The excitement doesn’t end here, we have more updates and surprise elements to share. Stay tuned for the next wave of moments!</p>
          <p>For a visual recap of the AGM, check out these nostalgic images.</p>
        </div>
        <div class="col-right">
          <p>
            AGM 2025 was a joyous occasion as we celebrated the remarkable milestone of our team members who have dedicated 10 years to Blue Ocean. The event was filled with emotions, especially when it was announced that 10% of the basic
            salary would be credited monthly to the spouse’s or immediate family member’s account—apart from the salary—as a token of gratitude for their unwavering support.
          </p>
          <p>And also, we honored those marking 5 years of commitment to Blue Ocean, which added another golden moment to AGM 2025. Each milestone is a testament to dedication, growth, and teamwork.</p>
          <p>Here’s to many more years of success, growth & togetherness!</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Section End Here 3 -->

<!-- Section Starts Here 4 -->
<section class="blogList-wrapper blogCat-list">
  <div class="container no-border">
    <div class="listHeader catList">
      <h2>Celebrating Excellence at AGM 2025</h2>
      <div class="listHeader-right">
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
      </div>
    </div>

    <div class="blogList">
      <div class="list-item">
        <div class="item-img">
          <img src="{{ asset('assets/frontend/images/item-img1.jpg') }}" alt="" />
        </div>
        <div class="item-info">
          <h4>Annual General Meeting in Kerala 2024</h4>
          <strong>A Night of Achievements and Ambitions</strong>
          <a href="{{ route('blog.event.details') }}" class="btn primary-btn">
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
      <div class="list-item">
        <div class="item-img">
          <img src="{{ asset('assets/frontend/images/item-img2.jpg') }}" alt="" />
        </div>
        <div class="item-info">
          <h4>Sourav Ganguly Visited</h4>
          <strong>Blue Ocean Corporation Office</strong>
          <a href="{{ route('blog.event.details') }}" class="btn primary-btn">
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
      <div class="list-item">
        <div class="item-img">
          <img src="{{ asset('assets/frontend/images/item-img3.jpg') }}" alt="" />
        </div>
        <div class="item-info">
          <h4>Blue Ocean Launched</h4>
          <strong>ASCM Enterprise Standards for Sustainability</strong>
          <a href="{{ route('blog.event.details') }}" class="btn primary-btn">
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
      <div class="list-item">
        <div class="item-img">
          <img src="{{ asset('assets/frontend/images/placeHolder-img.png') }}" alt="" />
        </div>
        <div class="item-info">
          <h4>&nbsp;</h4>
          <strong>&nbsp;</strong>
          <a href="{{ route('blog.event.details') }}" class="btn primary-btn">
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
      <div class="list-item">
        <div class="item-img">
          <img src="{{ asset('assets/frontend/images/placeHolder-img.png') }}" alt="" />
        </div>
        <div class="item-info">
          <h4>&nbsp;</h4>
          <strong>&nbsp;</strong>
          <a href="{{ route('blog.event.details') }}" class="btn primary-btn">
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
      <div class="list-item">
        <div class="item-img">
          <img src="{{ asset('assets/frontend/images/placeHolder-img.png') }}" alt="" />
        </div>
        <div class="item-info">
          <h4>&nbsp;</h4>
          <strong>&nbsp;</strong>
          <a href="{{ route('blog.event.details') }}" class="btn primary-btn">
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>

      <div class="list-item">
        <div class="item-img">
          <img src="{{ asset('assets/frontend/images/placeHolder-img.png') }}" alt="" />
        </div>
        <div class="item-info">
          <h4>&nbsp;</h4>
          <strong>&nbsp;</strong>
          <a href="{{ route('blog.event.details') }}" class="btn primary-btn">
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
      <div class="list-item">
        <div class="item-img">
          <img src="{{ asset('assets/frontend/images/placeHolder-img.png') }}" alt="" />
        </div>
        <div class="item-info">
          <h4>&nbsp;</h4>
          <strong>&nbsp;</strong>
          <a href="{{ route('blog.event.details') }}" class="btn primary-btn">
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
      <div class="list-item">
        <div class="item-img">
          <img src="{{ asset('assets/frontend/images/placeHolder-img.png') }}" alt="" />
        </div>
        <div class="item-info">
          <h4>&nbsp;</h4>
          <strong>&nbsp;</strong>
          <a href="{{ route('blog.event.details') }}" class="btn primary-btn">
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
    </div>

    <div class="list-bottomLink">
      <a href="{{ route('blog.event.details') }}" class="arrowLink"> <span>View More</span> <img src="{{ asset('assets/frontend/images/icons/arrow-right-outline.svg') }}" alt="" /> </a>
    </div>
  </div>
</section>
<!-- Section End Here 4 -->

<!-- Section Starts Here 5 -->
<div class="catImgWrapper">
  <div class="container">
    <img src="{{ asset('assets/frontend/images/cat-image.jpg') }}" alt="" />
    <div class="cat-details">
      <p>
        AGM 2025 was a joyous occasion as we celebrated the remarkable milestone of our team members who have dedicated 10 years to Blue Ocean.
      </p>
      <a href="{{ route('blog.event.details') }}" class="btn primary-btn">
        View More
        <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
      </a>
    </div>
  </div>
</div>
<!-- Section End Here 5 -->

<!-- Section Starts Here 6 -->
<section class="videoBlog-wrapper">
  <div class="container">
    <h2>Video Blogs</h2>
    <div class="videoBlog-grid">
      <div class="videoItem">
        <img src="{{ asset('assets/frontend/images/video-placeHolder.jpg') }}" alt="" />
        <div class="video-title">
          Awards
        </div>
      </div>
      <div class="videoItem">
        <img src="{{ asset('assets/frontend/images/video-placeHolder.jpg') }}" alt="" />
        <div class="video-title">
          performance
        </div>
      </div>

      <div class="videoItem">
        <img src="{{ asset('assets/frontend/images/video-placeHolder.jpg') }}" alt="" />
        <div class="video-title">
          Awards
        </div>
      </div>
      <div class="videoItem">
        <img src="{{ asset('assets/frontend/images/video-placeHolder.jpg') }}" alt="" />
        <div class="video-title">
          performance
        </div>
      </div>

      <div class="videoItem">
        <img src="{{ asset('assets/frontend/images/video-placeHolder.jpg') }}" alt="" />
        <div class="video-title">
          Awards
        </div>
      </div>
      <div class="videoItem">
        <img src="{{ asset('assets/frontend/images/video-placeHolder.jpg') }}" alt="" />
        <div class="video-title">
          performance
        </div>
      </div>

      <div class="videoItem">
        <img src="{{ asset('assets/frontend/images/video-placeHolder.jpg') }}" alt="" />
        <div class="video-title">
          Awards
        </div>
      </div>
      <div class="videoItem">
        <img src="{{ asset('assets/frontend/images/video-placeHolder.jpg') }}" alt="" />
        <div class="video-title">
          performance
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section End Here 6 -->
@endsection

@push('scripts')
<script src="{{ asset('assets/frontend/js/blog-slider') }}"></script>
@endpush

