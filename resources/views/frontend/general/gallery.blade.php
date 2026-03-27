@extends('layouts.frontend.app')
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style-last.css') }}">
@endpush
@section('content')
  <section class="topBanner gallery-page relative">
    <img src="{{ asset('assets/frontend/images/latest-added/main-gallery/gallery-banner.png') }}" alt="" class="topBannerImg" />
    <div class="bannerOverlay gallery-overlay">
      <div class="container">
        <h2>
          Experience Blue Ocean
          <span>Moments That Inspire!</span>
        </h2>
      </div>
    </div>
  </section>

  <section class="about-section relative gallery-about">
    <div class="diveder_angle absolute top">
      <img src="{{ asset('assets/frontend/images/con-bowld-img/devider_angle.png') }}" alt="" />
    </div>
    <div class="experience-band pb-0">
      <div class="container">
        <div class="flex flex-wrap items-center">
          <div class="experience-band-text">
            <h2 class="experience-band-heading">
              Snapshots of Success.
              <span class="block font-bold">Memories of Excellence.</span>
            </h2>
          </div>
          <div class="w-full lg:w-1/2">
            <p class="body-text mb-8 2xl:mb-10">
              Welcome to the <strong>Blue Ocean Corporation Gallery</strong>—where we capture the energy, passion, and achievements that define us! From global conferences to engaging training sessions, from leadership summits to team
              celebrations, every moment tells a story of growth and innovation.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Life at BOC Gallery -->
  <section class="boclife-gallery">
    <div class="container">
      <div class="boc-life-content">
        <h3>Life at Blue Ocean</h3>
        <div class="boclife-slider">
          <div class="gallery-wrapper">
            <div class="gallery-slider">
              <div class="gallery-contentone">
                <img src="{{ asset('assets/frontend/images/latest-added/gallery-page/gallery-slider1.png') }}" alt="" />
                <!-- <div class="title-links flex flex-wrap items-center">
                  <div class="slide-title w-full md:w-1/2">
                      <h3>Blue Ocean Corporation | <span>AGM 2025</span></h3>
                  </div>
                  <div class="link-btn text-right w-full md:w-1/2">
                      <a href="boc-life-gallery.html" class="btn primary-btn">Explore
                          AGM 2025
                          <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}">
                      </a>
                  </div>
                </div> -->
              </div>
              <div class="gallery-contentone">
                <img src="{{ asset('assets/frontend/images/latest-added/gallery-page/gallery-slider1.png') }}" alt="" />
              </div>
            </div>
            <div class="flex justify-center gap-2 mt-5 slider-navigation">
              <button class="prev-btn"><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" /></button>
              <button class="next-btn"><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></button>
            </div>
          </div>
        </div>
        <div class="title-links flex flex-wrap items-center mt-5">
          <div class="slide-title w-full md:w-1/2">
            <h3>Blue Ocean Corporation | <span>AGM 2025</span></h3>
          </div>
          <div class="link-btn text-right w-full md:w-1/2">
            <a href="boc-life-gallery.html" class="btn primary-btn">
              Explore AGM 2025
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div>
        </div>
      </div>

      <div></div>
    </div>
  </section>

  <!-- EXplore Journey -->
  <section class="explore-sliders">
    <div class="container">
      <div class="journey-box">
        <h3>Explore Our Journey</h3>
        <div class="journey-slider-one relative flex flex-wrap mb-6">
          <div class="blue-border-trangle"></div>
          <div class="gallery-overlap top-0">
            <h3>
              Life at<br />
              <span>Blue Ocean</span>
            </h3>
            <h4>
              Candid moments of teamwork, fun and collaboration
            </h4>
            <a href="boc-life-gallery.html" class="link-box"><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></a>
          </div>
          <div class="slider-part">
            <div class="life-boc-ft">
              <div class="slider-content">
                <img src="{{ asset('assets/frontend/images/latest-added/main-gallery/gallery-banner.png') }}" alt="" />
              </div>
              <!-- <div class="slider-content">
                <img src="{{ asset('assets/frontend/images/latest-added/main-gallery/gallery-banner.png') }}" alt="">
              </div> -->
            </div>
          </div>
        </div>
        <div class="journey-slider-one relative flex flex-wrap mb-6">
          <div class="blue-border-trangle"></div>
          <div class="gallery-overlap top-0 confrance-gradent">
            <h3><span>Conferences</span></h3>
            <h4>Relive industry-leading events and expert discussions.</h4>
            <a href="conferences-gallery.html" class="link-box"><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></a>
          </div>
          <div class="slider-part">
            <div class="conferences-gallery">
              <div class="slider-content">
                <img src="{{ asset('assets/frontend/images/latest-added/main-gallery/gallery-banner.png') }}" alt="" />
              </div>
              <!-- <div class="slider-content">
                <img src="{{ asset('assets/frontend/images/latest-added/main-gallery/gallery-banner.png') }}" alt="">
              </div> -->
            </div>
          </div>
        </div>
        <div class="journey-slider-one relative flex flex-wrap mb-6">
          <div class="blue-border-trangle"></div>
          <div class="gallery-overlap top-0 traning-gradent">
            <h3><span>Training</span></h3>
            <h4>See our impactful training sessions in action.</h4>
            <a href="traning-gallery.html" class="link-box"><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></a>
          </div>
          <div class="slider-part">
            <div class="traning-gallery">
              <div class="slider-content">
                <img src="{{ asset('assets/frontend/images/latest-added/main-gallery/gallery-banner.png') }}" alt="" />
              </div>
              <!-- <div class="slider-content">
                <img src="{{ asset('assets/frontend/images/latest-added/main-gallery/gallery-banner.png') }}" alt="">
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- leadership Gallery -->
  <section class="leaders-gallery relative">
    <div class="bottom-angle">
      <img src="{{ asset('assets/frontend/images/element.png') }}" alt="" class="w-full" />
    </div>
    <div class="container">
      <div class="journey-box">
        <h3>Leadership Conclave</h3>
      </div>
      <div class="slider-content">
        <div class="slider-part">
          <div class="slider-wrapper">
            <div class="leader-gallery">
              <div class="slider-content">
                <img src="{{ asset('assets/frontend/images/latest-added/gallery-page/leader-gallery.png') }}" alt="" class="w-full" />
                <div class="leader-gl-text relative">
                  <img src="{{ asset('assets/frontend/images/latest-added/gallery-page/slider-top-angle.png') }}" alt="" class="top-angle-slider" />
                  <div class="social-links-text">
                    <p class="text-white">
                      <a href="https://www.linkedin.com/in/sathyamenon" class="underline text-white">Dr. Sathya Menon FCIPS, FCMI, FCILT , CPM, CISCM, CICCM</a> the group CEO of Blue Ocean Corporation, was recently honored by
                      <strong>
                        <br />
                        𝐃𝐫. 𝐑𝐚𝐦𝐝𝐚𝐬 𝐀𝐭𝐡𝐰𝐚𝐥𝐞, 𝐌𝐢𝐧𝐢𝐬𝐭𝐞𝐫 𝐨𝐟 𝐒𝐨𝐜𝐢𝐚𝐥 𝐉𝐮𝐬𝐭𝐢𝐜𝐞 𝐚𝐧𝐝 𝐄𝐦𝐩𝐨𝐰𝐞𝐫𝐦𝐞𝐧𝐭, 𝐆𝐨𝐯𝐞𝐫𝐧𝐦𝐞𝐧𝐭 𝐨𝐟 𝐈𝐧𝐝𝐢𝐚
                      </strong>
                      , for his remarkable achievements in Logistics and Supply Chain Management education. This prestigious recognition took place on the sidelines of the 6th Global Education Exchange Conference, Dubai, organized by Dr.
                      Jitendra Matlani, President of Middle East World Book of Records, London.
                    </p>
                    <p class="socite-text">
                      <a
                        href="https://www.linkedin.com/posts/blue-ocean-management-training_blueocean-groupceo-unionminister-activity-7300386989911019521-AUks/?utm_source=share&utm_medium=member_desktop&rcm=ACoAAAH5mVkBmSinE59uy7ZgfaHejbE5AraU3-g"
                        class="flex items-center"
                      >
                        <span class="icon-social"><img src="{{ asset('assets/frontend/images/latest-added/gallery-page/IN.png') }}" alt="" /></span>

                        <span class="truncation-text">
                          https://www.linkedin.com/posts/blue-ocean-management-training_blueocean-groupceo-unionminister-activity-7300386989911019521-AUks/?utm_source=share&utm_medium=member_desktop&rcm=ACoAAAH5mVkBmSinE59uy7ZgfaHejbE5AraU3-g
                        </span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="slider-content">
                <img src="{{ asset('assets/frontend/images/latest-added/gallery-page/leader-gallery2.png') }}" alt="" class="w-full" />
                <div class="leader-gl-text relative">
                  <img src="{{ asset('assets/frontend/images/latest-added/gallery-page/slider-top-angle.png') }}" alt="" class="top-angle-slider" />
                  <div class="social-links-text">
                    <p class="text-white">
                      We are beyond thrilled to announce that Blue Ocean Corporation has been Recognized as the 2nd 𝐁𝐞𝐬𝐭 𝐖𝐨𝐫𝐤𝐩𝐥𝐚𝐜𝐞 𝐢𝐧 𝐭𝐡𝐞 𝐔𝐀𝐄 by Great Place to Work, in the Medium Category. This incredible achievement is a proof of our strong
                      commitment to fostering a people-first culture, one that empowers, inspires, and nurtures every individual in the team.
                    </p>
                    <p class="socite-text">
                      <a
                        href="https://www.linkedin.com/posts/blue-ocean-management-training_we-are-beyond-thrilled-to-announce-that-blue-activity-7297612058269814784-nROz/?utm_source=share&utm_medium=member_desktop&rcm=ACoAAAH5mVkBmSinE59uy7ZgfaHejbE5AraU3-g"
                        class="flex items-center"
                      >
                        <span class="icon-social"><img src="{{ asset('assets/frontend/images/latest-added/gallery-page/IN.png') }}" alt="" /></span>
                        <span class="truncation-text">
                          https://www.linkedin.com/posts/blue-ocean-management-training_we-are-beyond-thrilled-to-announce-that-blue-activity-7297612058269814784-nROz/?utm_source=share&utm_medium=member_desktop&rcm=ACoAAAH5mVkBmSinE59uy7ZgfaHejbE5AraU3-g
                        </span>
                      </a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex justify-center gap-2 mt-5 slider-navigation" id="">
              <button class="prev-btn"><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" /></button>
              <button class="next-btn"><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-section relative gallery-about">
    <div class="experience-band pb-0">
      <div class="container">
        <div class="flex flex-wrap items-center subscribe-box">
          <div class="experience-band-text subcribe-header">
            <h2 class="experience-band-heading">
              <span class="block font-bold"> Catch Every Wave!</span>
              Stay Connected to Blue Ocean News.
            </h2>
          </div>
          <div class="w-full lg:w-1/2">
            <div class="subcribe-box text-right">
              <from class="subscribe">
                <input type="text" placeholder="Email address" />
                <input type="button" value="Submit" class="submit-input" />
              </from>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/gallery.js') }}"></script>
@endpush