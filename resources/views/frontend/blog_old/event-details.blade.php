@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/blog-detail.css') }}">
@endpush

@section('content')
<!-- Section Starts Here 1 -->
<div class="blogDetails-banner">
  <div class="blogDetailSlider">
    <div>
      <img src="{{ asset('assets/frontend/images/blogDetail-Banner.jpg') }}" alt="banner image" class="w-full banner-img" />
    </div>
    <div>
      <img src="{{ asset('assets/frontend/images/blogDetail-Banner.jpg') }}" alt="banner image" class="w-full banner-img" />
    </div>
    <div>
      <img src="{{ asset('assets/frontend/images/blogDetail-Banner.jpg') }}" alt="banner image" class="w-full banner-img" />
    </div>
  </div>
</div>
<!-- Section End Here 1 -->

<!-- Section Starts Here 2 -->
<section class="blogDetails-two-cols">
  <div class="container">
    <div class="col-heading">
      <h2>
        <strong>Celebrating Excellence at AGM 2025</strong>
        The most anticipated award category
        <strong class="large-text">“CAPTAIN”</strong>
      </h2>
    </div>
    <div class="col-content">
      <p>A true leader with exemplary vision, commitment, and dedication, guiding the team toward greater heights. This well-deserved recognition reflects outstanding contributions and an unwavering drive for excellence.</p>
    </div>
  </div>
</section>
<!-- Section End Here 2 -->
<hr />

<!-- Section Starts Here 3 -->
<div class="blueBox">
  <div class="container">
    <p>In honor of this achievement, Mohammed Irfan was presented with a <strong>brand-new Nissan Patrol</strong>, an <strong>iPhone 16 Pro Max</strong>, and a <strong>Rolex watch!</strong></p>
    <p><strong>Congratulations, Mohammed Irfan! </strong></p>
    <p>Wishing continued success and many more milestones ahead!</p>
  </div>
</div>
<!-- Section End Here 3 -->

<!-- Section Starts Here 4 -->
<div class="two-col-right">
  <div class="container">
    <div class="mainContainer">
      <div class="imgWrapper">
        <img src="{{ asset('assets/frontend/images/blogDetail-img1.jpg') }}" alt="" />
      </div>
      <div class="imgWrapper">
        <img src="{{ asset('assets/frontend/images/blogDetail-img1.jpg') }}" alt="" />
      </div>
      <div class="imgWrapper">
        <img src="{{ asset('assets/frontend/images/blogDetail-img2.jpg') }}" alt="" />
      </div>
    </div>
    <aside class="right-sidebar">
      <div class="sidebar-heading">
        <h3>AGM 2025 Related Blog</h3>
      </div>
      <div class="sidebar-content">
        <div class="ratedBlog-list">
          <div class="ratedBlog-item">
            <h4>2025 Kicked off with a Splash!</h4>
            <p>Blue Ocean's Annual General Meeting brought together team members from all Blue Ocean offices for two unforgettable days</p>

            <a href="#" class="btn primary-btn">
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div>
          <div class="ratedBlog-item">
            <h4>Champion of Champions</h4>
            <p>A true embodiment of excellence - unparalleled dedication, exceptional leadership, and a relentless drive for success</p>

            <a href="#" class="btn primary-btn">
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div>
          <div class="ratedBlog-item">
            <h4>The cultural events at AGM 2025</h4>
            <p>a spectacular celebration of creativity and togetherness, showcasing the vibrant spirit of our team representing over 18 nationalities!</p>

            <a href="#" class="btn primary-btn">
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div>
        </div>

        <div class="blogReelsWrapper">
          <h4>AGM Awards Reel</h4>
          <div class="blogReels-item">
            <img src="{{ asset('assets/frontend/images/AGMAwardReel-1.jpg') }}" alt="" />
            <a class="playIcon" href="#">
              <span><img src="{{ asset('assets/frontend/images/play-circle-white.svg') }}" alt="" /></span>
            </a>
          </div>
        </div>
      </div>
    </aside>
  </div>
</div>
<!-- Section End Here 4 -->

<!-- Section Starts Here 5 -->
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
    </div>
  </div>
</section>
<!-- Section End Here 5 -->
@endsection