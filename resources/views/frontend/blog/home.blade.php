@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/blogHP.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
@endpush

@section('content')
  <section class="blogHP-banner">
    <picture>
      <img src="{{ asset('assets/frontend/images/blogHome-banner.jpg') }}" alt="banner image" class="w-full banner-img" />
    </picture>
    <div class="banner-main">
      <div class="container">
        <h1 class="banner-content">
          <span>Welcome to </span>
          <strong>
            The Blue Ocean <br />
            Blog Hub!
          </strong>
        </h1>
      </div>
    </div>
  </section>

  <section class="blogHP-two-cols">
    <div class="container">
      <h2><span>Blue Ocean Insights </span> <strong>Explore, Learn & Grow!</strong></h2>
      <div class="col-content">
        <p>Stay ahead with the latest industry trends, expert insights, and company updates. Whether you're looking to explore <strong>Blue Ocean Corporation’s journey or gain valuable industry knowledge</strong>, we’ve got you covered!</p>
      </div>
    </div>
  </section>

  <hr />

  <section class="blogHP-whyHere">
    <div class="container">
      <picture>
        <img src="{{ asset('assets/frontend/images/whyHere-banner.jpg') }}" alt="banner image" class="w-full banner-img" />
      </picture>
      <div class="whyHere-content">
        <h2><span>What You’ll</span> <strong>Find Here</strong></h2>
      </div>
    </div>
  </section>

  <section class="blogHP-tabs-wapper">
    <div class="container">
      <div class="tabs">
        <ul class="tab-links" id="default-styled-tab" data-tabs-toggle="#blog-styled-tab-content" role="tablist">
          <li><button class="active" id="boc-inside-tab" data-tabs-target="#styled-boc-inside" type="button" role="tab" aria-controls="styled-boc-inside" aria-selected="true">Inside Blue Ocean</button></li>
          <li><button id="expert-edge-styled-tab" data-tabs-target="#styled-expert-edge" type="button" role="tab" aria-controls="styled-expert-edge" aria-selected="false">Expert Edge Insights</button></li>
        </ul>
      </div>
      <div class="tabs-container">
        <div class="tabs-content tab" id="styled-boc-inside" role="tabpanel" aria-labelledby="boc-inside-tab">
          <div class="tabs-text">
            <h2>Our Story, Our Impact</h2>
            <h3>Discover the heartbeat of Blue Ocean Corporation!</h3>
            <p>From our achievements and milestones to behind-the-scenes stories, this category gives you a deeper look into who we are, what we do, and how we continue to shape industries with innovation and excellence.</p>

            <ul class="listItem">
              <li>Get company news, success stories & event highlights</li>
              <li>See how Blue Ocean is making an impact globally</li>
              <li>Learn about our latest programs & initiatives</li>
            </ul>
          </div>
          @if(isset($blogList['insideBlueOceanLatest']) && count($blogList['insideBlueOceanLatest']))
            <div class="carousel-wapper">
              <h4>Blue Ocean <span>|</span>Our Newest Stories</h4>
              <div class="slider-tabpan">
                @foreach($blogList['insideBlueOceanLatest'] as $insideBlueOceanLatest)
                  <div>
                    @php
                      $bannerImages = json_decode($insideBlueOceanLatest->banner_images, true);
                    @endphp
                    <img src="{{ asset('storage/'.($bannerImages[0] ?? '')) }}" alt="" />
                    <div class="carousel-info">
                      <strong>{{ $insideBlueOceanLatest->blog_title }}: A Strategic Guide</strong>
                      <a href="{{ route('blog.details', $insideBlueOceanLatest->slug) }}" class="btn primary-btn">
                        Explore {{ $insideBlueOceanLatest->blog_title }}
                        <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                      </a>
                    </div>
                  </div>
                @endforeach
              </div>

              <div class="custom-controls text-center mt-5">
                <button type="button" id="prev" class="btn primary-btn iconOnly">
                  <img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" />
                </button>

                <button id="next" type="button" class="btn primary-btn iconOnly">
                  <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                </button>
              </div>
            </div>
          @endif
        </div>
        <div class="tabs-content tab hidden" id="styled-expert-edge" role="tabpanel" aria-labelledby="expert-edge-styled-tab">
          <div class="tabs-text">
            <h2>Lets’s Elevate You</h2>
            <h3>Gain industry knowledge from thought leaders!</h3>
            <p>Our experts break down complex topics into valuable insights, helping you stay informed and ahead in your career. From career guidance to industry innovations, this section is your gateway to professional growth.</p>

            <ul class="listItem">
              <li>Insights from top industry experts & trainers</li>
              <li>Tips, strategies & best practices for professionals</li>
              <li>Stay updated with the latest market trends & researc</li>
            </ul>
          </div>
          @if(isset($blogList['expertEdgeInsightLatest']) && count($blogList['expertEdgeInsightLatest']))
            <div class="carousel-wapper">
              <h4>Blue Ocean <span>|</span>Our Newest Stories</h4>
              <div class="slider-tabpan-inn">
                @foreach($blogList['expertEdgeInsightLatest'] as $expertEdgeInsightLatest)
                  <div>
                    @php
                      $bannerImages = json_decode($expertEdgeInsightLatest->banner_images, true);
                    @endphp
                    <img src="{{ asset('storage/'.($bannerImages[0] ?? '')) }}" alt="" />
                    <div class="carousel-info">
                      <strong>{{ $insideBlueOceanLatest->blog_title }}: A Strategic Guide</strong>
                      <a href="{{ route('blog.details', $insideBlueOceanLatest->slug) }}" class="btn primary-btn">
                        Explore {{ $insideBlueOceanLatest->blog_title }}
                        <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                      </a>
                    </div>
                  </div>
                @endforeach
              </div>

              <div class="custom-controls text-center mt-5">
                <button type="button" id="prev2" class="btn primary-btn iconOnly">
                  <img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" />
                </button>

                <button id="next2" type="button" class="btn primary-btn iconOnly">
                  <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                </button>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </section>

  @if(isset($blogList['otherBlogs']) && count($blogList['otherBlogs']))
    <section class="blogList-wrapper">
      <div class="container">
        {{--<div class="listHeader">
          <h2>Innovation Through Time - Past Blog Treasures</h2>
          <div class="listHeader-right">
            <div class="searchBox">
              <input type="text" name="Search Blogs" id="" placeholder="Search Blogs" class="searchInput" />
              <button type="button" class="searchBtn">
                <img src="{{ asset('assets/frontend/images/search-icon.svg') }}" alt="" />
              </button>
            </div>
            <div class="selectBox">
              <select name="" id="">
                <option value="3 Months">3 Months</option>
                <option value="6 Months">6 Months</option>
                <option value="9 Months">9 Months</option>
                <option value="12 Months">12 Months</option>
              </select>
            </div>
          </div>
        </div>--}}

        <div class="blogList">
          @foreach($blogList['otherBlogs'] as $otherBlog)
            <div class="list-item">
              <div class="item-img">
                <img src="{{ asset('storage/blogs/'.$otherBlog->blog_thumb_image) }}" alt="" />
              </div>
              <div class="item-info">
                <h4>{{ $otherBlog->blog_title }}</h4>
                <strong>{{ $otherBlog->blog_short_description }}</strong>
                <a href="{{ route('blog.details', $otherBlog->slug) }}" class="btn primary-btn">
                  <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                </a>
              </div>
            </div>
          @endforeach
        </div>

        <div class="pagination py-5">
          @include('frontend.blog.include.pagination')
        </div>
      </div>
    </section>
  @endif

  <div class="newletterWrapper">
    <div class="container">
      <h3>
        <strong>Catch Every Wave!</strong>
        <span>Stay Connected to Blue Ocean News.</span>
      </h3>
      <div class="newsLetterbox">
        <input class="inputDefault" type="text" name="email" id="newsletterEmail" placeholder="Email address" />
        <button class="btn primary-btn" id="submitNewsletter">Submit</button>
        <div id="newsletterMsg" style="margin-top: 10px; color: red;"></div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
  <script>
    const slider = tns({
      container: '.slider-tabpan',
      items: 1,
      slideBy: 'page',
      autoplay: false,
      controls: false, // disable built-in controls
      nav: false,      // disable dots
      loop: false
    });

    document.getElementById('prev').addEventListener('click', () => {
      slider.goTo('prev');
    });

    document.getElementById('next').addEventListener('click', () => {
      slider.goTo('next');
    });

    let blogSlider = document.querySelector(".slider-tabpan-inn");
    if(blogSlider) { 
      const slider2 = tns({
        container: '.slider-tabpan-inn',
        items: 1,
        slideBy: 'page',
        autoplay: false,
        controls: false, // disable built-in controls
        nav: false,      // disable dots
        loop: false
      });

      document.getElementById('prev2').addEventListener('click', () => {
        slider2.goTo('prev');
      });

      document.getElementById('next2').addEventListener('click', () => {
        slider2.goTo('next');
      });
    }

    document.getElementById('submitNewsletter').addEventListener('click', function (e) {
      e.preventDefault();
      
      const emailInput = document.getElementById('newsletterEmail');
      const messageBox = document.getElementById('newsletterMsg');
      const email = emailInput.value.trim();

      // Simple email regex pattern
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      messageBox.style.color = 'red'; // Default color

      if (!email) {
        messageBox.textContent = 'Email is required.';
        return;
      }

      if (!emailPattern.test(email)) {
        messageBox.textContent = 'Please enter a valid email address.';
        return;
      }

      // Clear previous messages
      messageBox.textContent = '';

      // Prepare data
      const formData = new FormData();
      formData.append('email', email);

      // Send AJAX request
      fetch('/blogs/subscribe-newsletter', {
        method: 'POST',
        body: formData,
        headers: {
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          messageBox.style.color = 'green';
          messageBox.textContent = 'Subscribed successfully!';
          emailInput.value = '';
        } else {
          messageBox.textContent = data.message || 'Something went wrong.';
        }
      })
      .catch(error => {
        console.error('Error:', error);
        messageBox.textContent = 'An error occurred. Please try again later.';
      });
    });
  </script>
@endpush