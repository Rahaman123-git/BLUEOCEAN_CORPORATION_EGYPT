@extends('layouts.frontend.app')
@section('title', ' Life @ Blue Ocean Corporation')
@section('meta-description', 'Life @ Blue Ocean Corporation. Join our team & be part of a dynamic culture that fosters innovation & growth.')
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/lifeatboc.css') }}">
  <style>
    .boxes3 {
        height: 175px;
        width: 153px;
    }

    #n img {
        max-height: none !important;
        max-width: none !important;
        background: none !important
    }

    #inst i {
        max-height: none !important;
        max-width: none !important;
        background: none !important
    }
  </style>
@endpush

@section('content')
  <!-- Boc Slider -->
 
  <div class="w-full">
            <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls="" autoplay muted>
              <source src="{{ asset('assets/frontend/images/conference-video/Life-of-blue-Ocean-video-2025-final.mp4') }}" type="video/mp4">
              <source src="" type="video/ogv">
              <source src="" type="video/webm">
              Your browser does not support the video tag.
            </video>
          </div>
  {{-- 
<div class="slider-container life-bocSlider relative">
  <div class="boclifeSlider">
    <div class="slider-item relative">
      <picture>
        <img src="{{ asset('assets/frontend/images/life-at-boc/slider1.png') }}" alt="banner image" class="img-fluid d-block w-full" />
      </picture>
      <div class="absolute w-full life-text">
        <div class="container">
          <div class="flex">
            <h5 class="life-boc-text">
              <span class="font-light">Life at</span><br />
              Blue Ocean Corporation
            </h5>
          </div>
        </div>
      </div>
    </div>
    <div class="slider-item relative">
      <picture>
        <img src="{{ asset('assets/frontend/images/life-at-boc/slider1.png') }}" alt="banner image" class="img-fluid d-block w-full" />
      </picture>
      <div class="absolute w-full life-text">
        <div class="container">
          <div class="flex">
            <h5 class="life-boc-text">
              Life at<br />
              Blue Ocean Corporation
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
--}}

  <!-- About Section Starts Here -->
  <section class="about-section relative about-lifeboc">
    <div class="diveder-angle">
      <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
   <div class="video-shap video-life">
        <img src="{{ asset('assets/frontend/images/life-at-boc/banner-bottom-angle.png') }}" alt="triangle image" class="video-topangle" />   
      <video autoplay loop muted>
      <source src="{{ asset('assets/frontend/images/life-at-boc/life-at-boc.mov') }}" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
  </div> 
    <div class="experience-band pb-0">
      <div class="container">
        <div class="experience-band-main py-10">
          <div class="experience-band-text">
            <h2 class="experience-band-heading">
              A Culture of Innovation,
              <span class="block font-bold">Excellence & Growth</span>
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="about-main">
      <div class="container">
        <div class="about-main-text xl:mt-10">
          <div class="basis-1/2">
            <p class="body-text mb-8 2xl:mb-10 leading-normal">
              <strong> At Blue Ocean Corporation</strong>, we believe in more than just business success - we believe in people. Our culture is built on innovation, collaboration, and continuous learning, making us one of the most
              sought-after workplaces in the industry. From fostering career growth to celebrating our achievements together, we create an environment where passion meets purpose.
            </p>
            <p class="text-2xl text-blue-light font-normal">
              Join us and Be<br />
              part of something <strong class="block font-bold">extraordinary!</strong>
            </p>
          </div>
          <div class="basis-1/2 flex flex-col justify-between relative">
              <div class="innovation-backvideo">
      <video autoplay loop muted>
      <source src="{{ asset('assets/frontend/images/life-at-boc/life-at-boc.mov') }}" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    </div>
            <div class="piramid-heading video-overlap-mob">
              <h4 class="ml-[25%] mt-[1%] uppercase">Innovation</h4>
              <h4 class="ml-[20%] mt-[1%] uppercase">Excellence</h4>
              <h4 class="ml-[15%] mt-[1%] uppercase">Empowerment</h4>
              <h4 class="ml-[10%] mt-[1%] uppercase">Collaboration</h4>
              <h4 class="ml-[5%] mt-[1%] uppercase">Customer-Centric</h4>
              <h4 class="ml-[0%] mt-[1%] uppercase">Continuous Learning</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section Ends Here -->

  <!-- Drive Us -->
  <section class="drive-us">
    <div class="flex flex-wrap">
      <div class="w-full xl:w-1/2">
        <div class="banner-festivals relative">
          <img src="{{ asset('assets/frontend/images/life-at-boc/left-banner.png') }}" alt="" class="w-full max-w-full image-clip-add" />
          <img src="{{ asset('assets/frontend/images/life-at-boc/festive-cover.png') }}" class="festive-cover w-full max-w-full absolute top-0" alt="" />
        </div>
      </div>
      <div class="w-full xl:w-1/2">
        <div class="drive-us-test">
          <h2>
            What Drives Us? <br />
            Our Culture & Values
          </h2>
          <p>We thrive on a culture that fosters growth, integrity, and excellence. At Blue Ocean Corporation, every team member is empowered to innovate and make an impact.</p>
          <div class="mt-6">
            <a href="#" class="btn primary-btn">
              Experience Life @ Blue Ocean
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Drive Us End -->

  <!-- boc-feature -->
  <section class="boc-feature relative">
    <img src="" alt="" />
    <picture class="relative">
      <source media="(min-width:959px)" srcset="{{ asset('assets/frontend/images/life-at-boc/gradent-background.png') }}" />
      <img src="{{ asset('assets/frontend/images/life-at-boc/gradent-background-mobile.png') }}" alt="banner image" class="w-full max-w-full feature-bocbg" />
      <div class="absolute overlap-banner"></div>
    </picture>
    <div class="dimond-shap absolute top-0 left-0">
      <img src="{{ asset('assets/frontend/images/life-at-boc/gradent-background-center.png') }}" alt="" class="" />
    </div>
    <div class="absolute top-0 w-full h-full flex items-center">
      <div class="container">
        <div class="flex flex-col lg:flex-row gap-4 p-4">
          <div class="w-full lg:w-1/3">
            <div class="flex feature-box items-start">
              <div class="featurelife-img">
                <img src="{{ asset('assets/frontend/images/life-at-boc/trangle-right.png') }}" alt="" class="w-full" />
              </div>
              <div class="feature-box-text">
                <h3>Innovation</h3>
                <p>We embrace new ideas and challenge the status quo.</p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/3"></div>
          <div class="w-full lg:w-1/3">
            <div class="flex feature-box items-start">
              <div class="featurelife-img">
                <img src="{{ asset('assets/frontend/images/life-at-boc/trangle-right.png') }}" alt="" class="w-full" />
              </div>
              <div class="feature-box-text">
                <h3>Empowerment</h3>
                <p>We trust and empower our people to make a difference.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-4 p-4 margin-gap-feature">
          <div class="w-full lg:w-1/3">
            <div class="flex feature-box items-start">
              <div class="featurelife-img">
                <img src="{{ asset('assets/frontend/images/life-at-boc/trangle-right.png') }}" alt="" class="w-full" />
              </div>
              <div class="feature-box-text">
                <h3>Excellence</h3>
                <p>We set high standards and exceed them.</p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/3"></div>
          <div class="w-full lg:w-1/3">
            <div class="flex feature-box items-start">
              <div class="featurelife-img">
                <img src="{{ asset('assets/frontend/images/life-at-boc/trangle-right.png') }}" alt="" class="w-full" />
              </div>
              <div class="feature-box-text">
                <h3>Customer-Centric</h3>
                <p>Delivering value is at the heart of what we do.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="flex flex-col lg:flex-row gap-4 p-4">
          <div class="w-full lg:w-1/3">
            <div class="flex feature-box items-start">
              <div class="featurelife-img">
                <img src="{{ asset('assets/frontend/images/life-at-boc/trangle-right.png') }}" alt="" class="w-full" />
              </div>
              <div class="feature-box-text">
                <h3>Collaboration</h3>
                <p>Together, we achieve greatness.</p>
              </div>
            </div>
          </div>
          <div class="w-full lg:w-1/3"></div>
          <div class="w-full lg:w-1/3">
            <div class="flex feature-box items-start">
              <div class="featurelife-img">
                <img src="{{ asset('assets/frontend/images/life-at-boc/trangle-right.png') }}" alt="" class="w-full" />
              </div>
              <div class="feature-box-text">
                <h3>Continuous Learning</h3>
                <p>Growth never stops here.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End boc-feature -->

  <!-- Team Image -->
  <section class="team-image relative">
    <img src="{{ asset('assets/frontend/images/life-at-boc/team-photo.png') }}" alt="" class="image-clip-team" />
  </section>
  <!-- Team Image End -->

  <!-- Work Place -->
  <section class="work-place">
    <div class="container">
      <div class="work-place">
        <h3 class="font-semibold">A Workplace That Cares</h3>
        <p>
          At Blue Ocean Corporation, we go beyond just a paycheck. <br />
          We offer an environment where employees thrive both professionally and personally.
        </p>
        <ul class="list list-disc">
          <li>Hybrid & Flexible Work Options</li>
          <li>Access to World-Class Training & Certifications</li>
          <li>Award-Winning Workplace Culture</li>
          <li>Generous Paid Time Off & Wellness Programs</li>
          <li>Exciting Team Events & Celebrations</li>
          <li>Employee Rewards & Recognition Programs</li>
        </ul>
        <h2 class="sub-heading text-primary">
          Grow With Us:<br />
          <strong>Your Career at Blue Ocean</strong>
        </h2>
        <p class="work-para">
          At Blue Ocean Corporation, we don’t just offer jobs - we build careers.<br />
          Whether you're a fresh graduate or an experienced professional, we provide opportunities to grow, lead, and innovate.
        </p>

        <div class="flex gap-3 flex-col md:flex-row">
          <div class="w-full lg:w-1/3">
            <div class="bule-ocean">
              <h4>Internal Promotions & Career Growth Paths</h4>
            </div>
          </div>
          <div class="w-full lg:w-1/3">
            <div class="bule-ocean">
              <h4>Mentorship & Leadership Training Programs</h4>
            </div>
          </div>
          <div class="w-full lg:w-1/3">
            <div class="bule-ocean">
              <h4>Global Career Opportunities</h4>
            </div>
          </div>
        </div>
        <h4 class="mt-10 sub-heading text-primary">
          
          <strong> Explore our job openings below.</strong>
        </h4>
        <div class="mt-6">
          <a href="https://careers.blueoceancorporation.com/jobs/Careers" class="btn primary-btn">
            Experience Life @ Blue Ocean
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Work Place End-->

  <!-- Follow Up -->
  <section class="follow-up">
    <div class="flex flex-wrap">
      <div class="follow-text">Follow the Journey</div>
      <div class="follow-bg w-full">
        Stay connected with us and see what<br />
        life at Blue Ocean Corporation is all about!
      </div>
    </div>
  </section>

  <section class="instagram-feed">
    <div class="container">
      <div class="feeds">
        <h3>Join the conversation with</h3>
        <h2 class="hastag">#LifeAtBlueOcean!</h2>
        <div class="flex flex-wrap items-center">
          <div class="w-full lg:w-1/2">
            <ul class="flex flex-wrap mt-6 justify-center lg:justify-start">
              <li>
                <a href="https://www.facebook.com/BlueOceanAcademy/"><img src="{{ asset('assets/frontend/images/life-at-boc/facebook.png') }}" alt="" /></a>
              </li>
              <li>
                <a href="https://twitter.com/blueoceantrg?lang=en"><img src="{{ asset('assets/frontend/images/life-at-boc/twiter.png') }}" alt="" /></a>
              </li>
              <li>
                <a href="https://twitter.com/blueoceantrg?lang=en"><img src="{{ asset('assets/frontend/images/life-at-boc/x-icon.png') }}" alt="" /></a>
              </li>
              <li>
                <a href="https://www.youtube.com/c/BlueOceanAcademy-corporate-training/featured"><img src="{{ asset('assets/frontend/images/life-at-boc/youtube.png') }}" alt="" /></a>
              </li>
              <li>
                <a href="https://www.linkedin.com/school/blue-ocean-management-training/mycompany/?viewAsMember=true"><img src="{{ asset('assets/frontend/images/life-at-boc/linkdin.png') }}" alt="" /></a>
              </li>
              <li>
                <a href="https://www.instagram.com/blueoceandubai/"><img src="{{ asset('assets/frontend/images/life-at-boc/instagram.png') }}" alt="" /></a>
              </li>
            </ul>
          </div>
          <div class="w-full lg:w-1/2">
            <form class="year-dropdown">
              <select
                id="countries"
                class="bg-gray-50 border border-gray-600 text-gray-600 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              >
                <option>Select Year</option>
                <option>Select Year</option>
                <option>Select Year</option>
              </select>
            </form>
          </div>
        </div>
      </div>
      <div class="feed-details">
        <blockquote
          class="instagram-media"
          data-instgrm-permalink="https://www.instagram.com/lifeatblueocean/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D#"
          data-instgrm-version="12"
          style="
            background: #fff;
            border: 0;
            border-radius: 3px;
            box-shadow: 0 0 1px 0 rgba(0, 0, 0, 0.5), 0 1px 10px 0 rgba(0, 0, 0, 0.15);
            margin: 1px;
            max-width: 100%;
            min-width: 326px;
            padding: 0;
            width: 100%;
            width: undefinedpx;
            height: undefinedpx;
            max-height: 100%;
            width: undefinedpx;
          "
        >
          <div style="padding: 16px;">
            <a
              id="main_link"
              href="lifeatblueocean/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D#"
              style="background: #ffffff; line-height: 0; padding: 0 0; text-align: center; text-decoration: none; width: 100%;"
              target="_blank"
            >
              <div style="display: flex; flex-direction: row; align-items: center;">
                <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div>
                <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                  <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div>
                  <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div>
                </div>
              </div>
              <div style="padding: 19% 0;"></div>
              <div style="display: block; height: 50px; margin: 0 auto 12px; width: 50px;">
                <svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                      <g>
                        <path
                          d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"
                        ></path>
                      </g>
                    </g>
                  </g>
                </svg>
              </div>
              <div style="padding-top: 8px;">
                <div style="color: #3897f0; font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-weight: 550; line-height: 18px;">
                  View this post on Instagram
                </div>
              </div>
              <div style="padding: 12.5% 0;"></div>
              <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                <div>
                  <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div>
                  <div style="background-color: #f4f4f4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div>
                  <div style="background-color: #f4f4f4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div>
                </div>
                <div style="margin-left: 8px;">
                  <div style="background-color: #f4f4f4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div>
                  <div style="width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg);"></div>
                </div>
                <div style="margin-left: auto;">
                  <div style="width: 0px; border-top: 8px solid #f4f4f4; border-right: 8px solid transparent; transform: translateY(16px);"></div>
                  <div style="background-color: #f4f4f4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div>
                  <div style="width: 0; height: 0; border-top: 8px solid #f4f4f4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div>
                </div>
              </div>
              <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div>
                <div style="background-color: #f4f4f4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div>
              </div>
            </a>
            <p
              style="
                color: #c9c8cd;
                font-family: Arial, sans-serif;
                font-size: 14px;
                line-height: 17px;
                margin-bottom: 0;
                margin-top: 8px;
                overflow: hidden;
                padding: 8px 0 7px;
                text-align: center;
                text-overflow: ellipsis;
                white-space: nowrap;
              "
            >
              <a
                href="lifeatblueocean/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D#"
                style="color: #c9c8cd; font-family: Arial, sans-serif; font-size: 14px; font-style: normal; font-weight: normal; line-height: 17px; text-decoration: none;"
                target="_blank"
              >
                Shared post
              </a>
              on <time style="font-family: Arial, sans-serif; font-size: 14px; line-height: 17px;">Time</time>
            </p>
          </div>
        </blockquote>
        <script src="https://www.instagram.com/embed.js"></script>
        
        <div style="overflow: auto; position: absolute; height: 0pt; width: 0pt;"><a href="https://www.embedista.com/instagramfeed">Embed Instagram Post</a> Code Generator</div>
      </div>
      <div class="text-end">
        <a href="#" class="btn load-more">
          Load More <span><img src="{{ asset('assets/frontend/images/icons/arrow-right-outline.svg') }}" alt="" /></span>
        </a>
      </div>
    </div>
  </section>
  <!-- Follow Up End -->

  <!-- Gallery -->
  <section class="life-gallery">
    <div class="container">
      <!--Start Here-->
      <div class="w-full border-top-solid"></div>
      <div class="flex flex-col gap-4">
        <div class="gallery-video">
          <div class="feeds">
            <h2 class="text-3xl font-medium">Life@Blue Ocean Gallery!</h2>
          </div>

          <div class="grid grid-cols-1 mt-6 gap-9 sm:grid-cols-2 md:grid-cols-2">
            <div>
              <iframe
                class="w-full aspect-video ..."
                src="https://www.youtube.com/embed/P0LT7P-eYEs"
                title="IPSC Riyadh Highlight Video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
            </div>
            <div>
              <iframe
                class="w-full aspect-video ..."
                src="https://www.youtube.com/embed/YK7DQLvkZWY"
                title="IPSC Riyadh Highlight Video"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
            </div>
          </div>
        </div>
      </div>

      <div class="text-end mb-8">
        <a href="#" class="btn load-more">
          Explore Life @ BlueOcean Gallery <span><img src="{{ asset('assets/frontend/images/icons/arrow-right-outline.svg') }}" alt="" /></span>
        </a>
      </div>
      <!-- End Here -->
    </div>
  </section>

  <section class="newsletter-section pt-4 pb-10 relative">
    <div class="diveder-angle hidden lg:block top-0 -mt-9">
      <img src="{{ asset('assets/frontend/images/element.png') }}" alt="" />
    </div>
    <div class="container">
      <div class="flex flex-col lg:flex-row lg:items-center gap-5 py-4 lg:py-8 px-4 lg:px-[60px] border border-black">
        <div class="basis-1/2">
          <h2 class="text-2xl lg:text-[34px] text-primary"><span class="font-medium block">Catch Every Wave!</span> Stay Connected to Blue Ocean News.</h2>
        </div>
        <div class="basis-1/2">
          <form class="flex items-center gap-5 max-w-sm mx-auto">
            <label for="simple-search" class="sr-only">Email Address</label>
            <div class="relative w-full">
              <input type="text" id="simple-search" class="border border-[#999999] block w-full py-3 px-5" placeholder="Email address" required="" />
            </div>
            <button type="submit" class="btn primary-btn">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var sliderElement = document.querySelector(".boclifeSlider");
      
      if (sliderElement) {
        tns({
          container: ".boclifeSlider",
          items: 1,
          slideBy: "page",
          autoplay: true,
          autoplayTimeout: 2000,
          speed: 1000,
          gutter: 20,
          controls: true,
          nav: false,
          autoplayButton: false,
          autoplayButtonOutput: false,
          rewind: true,
          // Comment or update below line if you don't have a custom control element
          // controlsContainer: "#customize-controls"
        });
      }else{
        console.warn("Slider element not found");
      }
    });
  </script>
@endpush