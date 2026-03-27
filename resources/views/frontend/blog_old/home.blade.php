@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/blogHP.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
@endpush

@section('content')
<!-- Section Starts Here 1 -->
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
<!-- Section End Here 1 -->

<!-- Section Starts Here 2 -->
<section class="blogHP-two-cols">
  <div class="container">
    <h2><span>Blue Ocean Insights </span> <strong>Explore, Learn & Grow!</strong></h2>
    <div class="col-content">
      <p>Stay ahead with the latest industry trends, expert insights, and company updates. Whether you're looking to explore <strong>Blue Ocean Corporation’s journey or gain valuable industry knowledge</strong>, we’ve got you covered!</p>
    </div>
  </div>
</section>
<!-- Section End Here 2 -->

<hr />

<!-- Section Starts Here 3 -->
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

<!-- Section End Here 3 -->

<!-- Section Starts Here 4 -->
       <section class="blogHP-tabs-wapper">
            <div class="container">


                <div class="tabs">
                    <ul class="tab-links" id="default-styled-tab" data-tabs-toggle="#certificate-styled-tab-content"
                        role="tablist">
                        <li><button class="active" id="certificate-styled-tab" data-tabs-target="#styled-certificate"
                                type="button" role="tab" aria-controls="styled-certificate" aria-selected="true">Inside
                                Blue Ocean</button></li>
                        <li><button id="affiliate-styled-tab" data-tabs-target="#styled-affiliate" type="button"
                                role="tab" aria-controls="styled-affiliate" aria-selected="false">Expert Edge
                                Insights</button></li>
                    </ul>
                </div>
                <div class="tabs-container">
                    <div class="tabs-content tab" id="styled-certificate" role="tabpanel"
                        aria-labelledby="certificate-styled-tab">
                        <div class="tabs-text">
                            <h2>Our Story, Our Impact</h2>
                            <h3>Discover the heartbeat of Blue Ocean Corporation!</h3>
                            <p>From our achievements and milestones to behind-the-scenes stories, this category gives
                                you a deeper look into who we are, what we do, and how we continue to shape industries
                                with innovation and excellence.</p>

                            <ul class="listItem">
                                <li>Get company news, success stories & event highlights</li>
                                <li>See how Blue Ocean is making an impact globally</li>
                                <li>Learn about our latest programs & initiatives</li>
                            </ul>
                        </div>
                        <div class="carousel-wapper">
                            <h4>Blue Ocean <span>|</span>Our Newest Stories</h4>
                            <div class="slider-tabpan">
                                <div>
                                     <img src="{{ asset('assets/frontend/images/blog-carousel-img1.jpg') }}" alt="">
                                    <div class="carousel-info">
                                        <strong>Procuring Consulting Services: A Strategic Guide</strong>
                                        <a href="#" class="btn primary-btn">Explore Procuring Consulting Services
                                             <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}">
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/frontend/images/blog-carousel-img2.jpg') }}" alt="">
                                    <div class="carousel-info">
                                        <strong>Procuring Consulting Services: A Strategic Guide</strong>
                                        <a href="#" class="btn primary-btn">Explore Procuring Consulting Services
                                            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="custom-controls text-center mt-5">
                                <button type="button" id="prev" class="btn primary-btn iconOnly">
                                    <img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}">
                                </button>

                                <button id="next" type="button" class="btn primary-btn iconOnly">
                                    <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-content tab hidden" id="styled-affiliate" role="tabpanel"
                        aria-labelledby="affiliate-styled-tab">
                        <div class="tabs-text">
                            <h2>Lets’s Elevate You</h2>
                            <h3>Gain industry knowledge from thought leaders!</h3>
                            <p>Our experts break down complex topics into valuable insights, helping you stay informed
                                and ahead in your career. From career guidance to industry innovations, this section is
                                your gateway to professional growth.</p>

                            <ul class="listItem">
                                <li>Insights from top industry experts & trainers</li>
                                <li>Tips, strategies & best practices for professionals</li>
                                <li>Stay updated with the latest market trends & researc</li>
                            </ul>
                        </div>
                        <div class="carousel-wapper">
                            <h4>Blue Ocean <span>|</span>Our Newest Stories</h4>
                            <div class="slider-tabpan-inn">
                               <div>
                                     <img src="{{ asset('assets/frontend/images/blog-carousel-img1.jpg') }}" alt="">
                                    <div class="carousel-info">
                                        <strong>Procuring Consulting Services: A Strategic Guide</strong>
                                        <a href="#" class="btn primary-btn">Explore Procuring Consulting Services
                                            <img src="../images/icons/arrow-right.svg">
                                        </a>
                                    </div>
                                </div>
                                <div>
                                    <img src="{{ asset('assets/frontend/images/blog-carousel-img2.jpg') }}" alt="">
                                    <div class="carousel-info">
                                        <strong>Procuring Consulting Services: A Strategic Guide</strong>
                                        <a href="#" class="btn primary-btn">Explore Procuring Consulting Services
                                            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}">
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="custom-controls text-center mt-5">
                                <button type="button" id="prev2" class="btn primary-btn iconOnly">
                                     <img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}">
                                </button>

                                <button id="next2" type="button" class="btn primary-btn iconOnly">
                                    <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Section Starts Here 5 -->
<section class="blogList-wrapper">
  <div class="container">
    <div class="listHeader">
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
    </div>

    <div class="blogList">
      <div class="list-item">
        <div class="item-img">
          <img src="{{ asset('assets/frontend/images/item-img1.jpg') }}" alt="" />
        </div>
        <div class="item-info">
          <h4>Annual General Meeting in Kerala 2024</h4>
          <strong>A Night of Achievements and Ambitions</strong>
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
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
          <a href="{{ route('blog.details') }}" class="btn primary-btn">
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
    </div>

    <div class="listPagination">
      <ul>
        <li>
          <button type="button"><img src="{{ asset('assets/frontend/images/arrowLeft-gray.svg') }}" alt="" /> Previous</button>
        </li>
        <li class="active"><button type="button">1</button></li>
        <li><button type="button">2</button></li>
        <li><button type="button">3</button></li>
        <li><button type="button">...</button></li>
        <li><button type="button">10</button></li>
        <li><button type="button">11</button></li>
        <li>
          <button type="button">Next <img src="{{ asset('assets/frontend/images/arrowRight-gray.svg') }}" alt="" /></button>
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- Section End Here 5 -->

<!-- Section Starts Here 6 -->
<div class="newletterWrapper">
  <div class="container">
    <h3>
      <strong>Catch Every Wave!</strong>
      <span>Stay Connected to Blue Ocean News.</span>
    </h3>
    <div class="newsLetterbox">
      <input class="inputDefault" type="text" name="email" id="" placeholder="Email address" />
      <button class="btn primary-btn">Submit</button>
    </div>
  </div>
</div>
<!-- Section End Here 6 -->
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
    </script>
    <script>
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
    </script>

@endpush