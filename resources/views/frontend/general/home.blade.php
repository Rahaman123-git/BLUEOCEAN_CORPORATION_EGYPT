@extends('layouts.frontend.app')
@section('title', ($pageSetting->page_title ?? ''))
@section('meta-description', ($pageSetting->meta_details ?? ''))
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/consulting.css') }}">
@endpush

@section('content')
  <style type="text/css">
      .mobile-girl {
        pointer-events: none;
      }
      .location-row {
        position: relative;
        z-index: 10;
      }
      .girl_halp {
        position: absolute;
        z-index: 1;
      }
      .location-row .active {
        font-weight: 700;
      }
      .wrapper-slider {
        display: flex;
        gap: 20px;
        width: max-content;
      }
      .cta-section-image-row-container {
        overflow: hidden;
        white-space: nowrap;
      }
       .event-timer.home-coming-event {
    margin: 35px 0 0 23px;
}
      /* #tabBgImage.tab1 {
        left: 12rem;
        top: -3.3rem;
      }
      #tabBgImage.tab2 {
        left: 4rem;
        top: -35px;
      }
      #tabBgImage.tab3 {
        left: 2rem;
        top: 3.7rem;
        width: 80%;
      }
      #tabBgImage.tab4 {
        left: 2rem;
        top: 6.3rem;
        width: 80%;
      }
      #tabBgImage.tab5 {
        left: 2rem;
        top: 0.5rem;
        width: 80%;
      }
      #tabBgImage.tab6 {
        left: 0rem;
        top: 3.5rem;
        width: 83%;
      } */
      .lft {
        position: relative;
        left: 30px;
      }
  </style>

  <!-- Banner Section Starts Here -->
  <section class="hero-banner-section">
    <div class="hero-banner-wrap">
      @if($pageSetting->media_type == 'image')
        <picture>
          <source media="(max-width:770px)" srcset="{{ asset('assets/frontend/images/Top-banner-image.png') }}" />
          <img src="{{ asset('storage/website-content/page-settings/'.$pageSetting->banner_file) }}" alt="banner image" class="w-full banner-img" />
        </picture>
        <div class="hero-banner-main">
          <div class="container h-full">
            <div class="hero-banner-text">
              <h1 class="hero-banner-heading font-light">
                <span class="block font-light">Crystallizing insights.</span>
                Driving Transformation.
              </h1>
            </div>
          </div>
        </div>
      @elseif($pageSetting->media_type == 'video')
        <!-- Banner video Section Starts Here -->
        <div class="w-full">
          <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls="">
            <source src="{{ asset('storage/website-content/page-settings/'.$pageSetting->banner_file) }}" type="video/mp4" />
            <source src="" type="video/ogv" />
            <source src="" type="video/webm" />
            Your browser does not support the video tag.
          </video>
        </div>
      @endif
    </div>
  </section>

  <!-- About Section Starts Here -->
  <section class="about-section relative home-about-block ">
    <div class="diveder_angle absolute top">
      <img src="{{ asset('assets/frontend/images/con-bowld-img/devider_angle.png') }}" alt="" />
    </div>
    <div class="right-triangle">
      <img src="{{ asset('assets/frontend/images/about-bg.png') }}" class="about-bg" alt="triangle image" />
      <img src="{{ asset('assets/frontend/images/about-bg-mobile-text.png') }}" class="about-angle-mobile" alt="" />
      <div class="items-start justify-between">
        <img src="{{ asset('assets/frontend/images/home-polygon-3.png') }}" alt="triangle image"
          class="blue-angle-home" />
      </div>
    </div>
    <div class="right_bottom_angle">
      <img src="{{ asset('assets/frontend/images/right_two-angle-shape.png') }}" alt="angle" />
    </div>
    <div class="experience-band pb-0">
      <div class="container">
        <div class="experience-band-main">
          <div class="experience-band-text">
            <h2 class="experience-band-heading animate__animated animate__fadeInUp">
              Refracting Challenges Into
              <span class="block font-bold">A Spectrum Of Opportunities</span>
            </h2>
          </div>
          <div class="experience-band-img">
            <img src="{{ asset('assets/frontend/images/experience-icon.svg') }}" class="w-full" />
          </div>
        </div>
      </div>
    </div>
    <div class="about-main">
      <div class="container">
        <div class="about-main-text">
          <div class="basis-1/2">
            <p class="body-text mb-8 2xl:mb-10 animate__animated animate__fadeInUp">
             With 28 years of expertise, we are a leading global conglomerate committed to transforming challenges into progress. Our strategic approach aligns business goals with changing landscapes, enabling organizations and professionals to achieve meaningful and measurable growth.
            </p>
            <div class="about-mobile-view animate__animated animate__fadeInUp">
            <p class="text-2xl text-primary font-bold" style="font-weight:500!important">By delivering tailored solutions backed by proven frameworks, we help shape resilient organizations that adapt, lead, and thrive in dynamic environment.</p>
  
              <p class="text-2xl text-primary font-bold" style=" Display: none; font-weight:500!important">We illuminate new
                  possibilities and turn your vision into a
                  tangible reality, exceeding your expectations every step of the way.</p>
              <div class="traingle-banner mt-5 md:mt-0">
                <img src="{{ asset('assets/frontend/images/home-traingle-image.png') }}" alt="" />
              </div>
              <div class="opertunaty-text animate__animated animate__fadeInUp">
                <h3 class="sub-heading text-primary font-semibold pt-8 animate__animated animate__fadeInUp">
                  Transforming Businesses
                </h3>
                <p class="body-text width-modify-home animate__animated animate__fadeInUp">
                  Delivering strategic solutions that reshape organizations, optimize performance, and enable sustainable growth. We align business objectives with evolving needs, empowering companies to adapt, lead, and thrive in dynamic markets.
                </p>
              </div>
              <div class="btn-wrap mt-4">
                <a href="{{ route('consulting.home') }}" class="btn inline-block no-underline">
                  <div class="right-triangle-icon animate__animated animate__fadeInUp triangle-shape">
  					<p>Consulting</p>
                  </div>
                </a>
                <!-- Read More Button and Line in Same Row -->
                <div class="read-more-wrap">
                  <hr class="read-line">
                  <a href="{{ route('consulting.home') }}" class="read-more-btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="opertunaty-text">
              <h3 class="sub-heading text-primary font-semibold pt-8 animate__animated animate__fadeInUp">
                Empowering Professionals
              </h3>
              <p class="body-text width-modify-home animate__animated animate__fadeInUp">Equipping individuals and organizations with innovative programs that blend cutting-edge insights and practical application, building enduring capabilities and fostering meaningful impact.</p>
              <div class="btn-wrap mt-4">
                <a href="{{ route('training.home') }}" class="btn inline-block">
                  <div class="right-triangle-icon animate__animated animate__fadeInUp">
                    <p>Training</p>
                  </div>
                </a>
                <!-- Read More Button and Line in Same Row -->
                <div class="read-more-wrap">
                  <hr class="read-line">
                  <a href="{{ route('training.home') }}" class="read-more-btn">Read More</a>
                </div>
              </div>
            </div>
            <div class="opertunaty-text">
              <h3 class="sub-heading text-primary font-semibold pt-8 animate__animated animate__fadeInUp">
                Connecting Visionaries
              </h3>
              <p class="body-text width-modify-home animate__animated animate__fadeInUp">Fostering impactful platforms where leaders, innovators, and decision-makers engage in meaningful dialogue, exchange ideas, and influence the future.</p>
              <div class="btn-wrap mt-4">
                <a href="{{ route('conferences.home') }}" class="btn inline-block">
                  <div class="right-triangle-icon animate__animated animate__fadeInUp">
                    <p>Conference</p>
                  </div>
                </a>
                  <div class="read-more-wrap">
                    <hr class="read-line">
                    <a href="{{ route('conferences.home') }}" class="read-more-btn">Read More</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="basis-1/2 flex flex-col justify-between">
            <div class="block angle-textline-home inmobile-hide triengle-text">
              <h4 class="float-text-home ml-[40%] mt-[10%] animate__animated animate__fadeInUp">
                Transforming
                <strong>Businesses</strong>
              </h4>
              <h4 class="float-text-home ml-[25%] mt-[10%] animate__animated animate__fadeInUp">
                Empowering
                <strong>Professionals</strong>
              </h4>
              <h4 class="float-text-home ml-[10%] mt-[10%] animate__animated animate__fadeInUp">
                Connecting
                <strong><span class="lft">Visionaries</span></strong>
              </h4>
            </div>
            <div class="pt-10 step-home discover-box">
              <p class="text-black text-lg lg:text-2xl mb-1 animate__animated animate__fadeInUp" style="display:none;">Step into the
                realm of possibilities -</p>
              <h5
                class="text-primary text-3xl lg:text-[clamp(16px, 1.145vw, 34px)] animate__animated animate__fadeInUp">
                Ready to transform, learn, and connect?
              </h5>
              <p class="text-primary text-3xl mt-0 font-bold animate__animated animate__fadeInUp" style="Font-size: clamp(24px, 1.6vw, 30px) !important; font-weight:700">
               
              </p>
              <div class="btn-wrap mt-10">
                <a href="{{ route('general.contact.us') }}" class="btn primary-btn site-button-hover">
                 Connect Us
                  <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="home-slider-section relative">
    <div class="slider-container">
      <!-- <ul class="controls" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
        <li class="prev" data-controls="prev" aria-controls="customize" tabindex="-1">
            <i class="fas fa-angle-left fa-5x"></i>
        </li>
        <li class="next" data-controls="next" aria-controls="customize" tabindex="-1">
            <i class="fas fa-angle-right fa-5x"></i>
        </li>
      </ul> -->
      <div class="sucess-slide">
        <div class="slider-item">
          <div class="home-slider-wrap relative">
            <div class="slider-float-triangle">
              <img src="{{ asset('assets/frontend/images/left-slide-gradent.png') }}" />
              <div class="slider-float-text">
                <h2 class="text-2xl lg:text-4xl font-semibold">
                  <span class="block text-lg lg:text-xl font-normal"> Insightful Conferences </span>
                  Connecting Leaders to Drive Change
                </h2>
              </div>
            </div>
            <div class="home-slider-img">
              <picture>
                <source srcset="{{ asset('assets/frontend/images/home-slider-1-mobile.png') }}" media="(max-width: 640px)" />
                <img src="{{ asset('assets/frontend/images/home-slider-1.png') }}" />
              </picture>
            </div>
            <div>
              <div class="container">
                <div class="lg:w-[55%] ml-auto py-6 slider-btm-text">
                  <p class="text-gray text-xl lg:text-2xl slider-text">Our flagship conferences bring together industry leaders, innovators, and decision-makers to engage in meaningful dialogue, exchange pioneering ideas, and drive sector evolution. These premier forums inspire collaboration and empower thought leadership that shapes tomorrow.</p>
                  
                  <p class="text-light-blue mt-6 text-xl lg:text-1xl slider-text">Uniting insights, sparking transformation.</p>
                  <div class="btn-wrap mt-10">
                    <a href="{{ route('conferences.home') }}" class="btn primary-btn">
                      Know More
                      <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
{{-- temporary hidden as requested by content team
        <div class="slider-item">
          <div class="home-slider-wrap relative">
            <div class="slider-float-triangle">
              <img src="{{ asset('assets/frontend/images/left-slide-gradent.png') }}" />
              <div class="slider-float-text">
                <h2 class="text-2xl lg:text-4xl font-semibold">
                  <span class="block text-lg lg:text-xl font-normal">Clarity of Transformation</span>
                  IIluminating the road to success
                </h2>
              </div>
            </div>
            <div class="home-slider-img">
              <picture>
                <source srcset="{{ asset('assets/frontend/images/home-slider-2-mobile.png') }}" media="(max-width: 640px)" />
                <img src="{{ asset('assets/frontend/images/home-slider-2.png') }}" />
              </picture>
            </div>
            <div>
              <div class="container">
                <div class="lg:w-[55%] ml-auto py-6 slider-btm-text">
                  <p class="text-gray text-xl lg:text-2xl slider-text">
                    We empower businesses with cutting-edge consulting strategies, professionals with globally recognized training, and industry leaders with knowledge-sharing conferences. Our holistic approach fosters innovation, enhances
                    operational efficiency, and drives sustainable growth for organizations worldwide.
                  </p>
                  <p class="text-light-blue mt-6 text-xl lg:text-2xl slider-text">Illuminating Possibilities, Empowering Transformation</p>
                  <div class="btn-wrap mt-10">
                    <a href="{{ route('consulting.home') }}" class="btn primary-btn">
                      Know More
                      <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
--}}
        <div class="slider-item">
          <div class="home-slider-wrap relative">
            <div class="slider-float-triangle">
              <img src="{{ asset('assets/frontend/images/left-slide-gradent.png') }}" />
              <div class="slider-float-text">
                <h2 class="text-2xl lg:text-4xl font-semibold">
                  <span class="block text-lg lg:text-xl font-normal">World Class Training</span>
                  Where Learning Aligns with Strategic Purpose
                </h2>
              </div>
            </div>
            <div class="home-slider-img">
              <picture>
                <source srcset="{{ asset('assets/frontend/images/home-slider-3-mobile.png') }}" media="(max-width: 640px)" />
                <img src="{{ asset('assets/frontend/images/home-slide-traning-image.png') }}" />
              </picture>
            </div>
            <div>
              <div class="container">
                <div class="lg:w-[55%] ml-auto py-6 slider-btm-text">
                  <p class="text-gray text-xl lg:text-2xl slider-text">
                    Our training programs are thoughtfully designed to build transformative skills across diverse domains. Led by industry experts, each session challenges convention and encourages reimagining possibilities through applied knowledge and strategic foresight.
                  </p>
                  <p class="text-light-blue mt-6 text-xl lg:text-2xl slider-text">Move beyond competency, step into mastery.</p>
                  <div class="btn-wrap mt-10">
                    <a href="{{ route('training.home') }}" class="btn primary-btn">
                      Know More
                      <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slider-item">
          <div class="home-slider-wrap relative">
            <div class="slider-float-triangle">
              <img src="{{ asset('assets/frontend/images/left-slide-gradent.png') }}" />
              <div class="slider-float-text">
                <h2 class="text-2xl lg:text-4xl font-semibold">
                  <span class="block text-lg lg:text-xl font-normal">Strategic Business Transformation</span>
                  Driving Strategic Impact Through Insight
                </h2>
              </div>
            </div>
            <div class="home-slider-img">
              <picture>
                <source srcset="{{ asset('assets/frontend/images/consulting-mobile.png') }}" media="(max-width: 640px)" />
                <img src="{{ asset('assets/frontend/images/boc-home-consulting-img.png') }}" />
              </picture>
            </div>
            <div>
              <div class="container">
                <div class="lg:w-[55%] ml-auto py-6 slider-btm-text">
                  <p class="text-gray text-xl lg:text-2xl slider-text">
                   Our consulting solutions help organizations identify challenges, uncover opportunities, and create sustainable value across industries. By delivering data-driven, actionable strategies, we enable measurable improvements in performance and growth.

                  </p>
                  <p class="text-light-blue mt-6 text-xl lg:text-2xl slider-text">Precision in vision. Clarity in execution</p>
                  <div class="btn-wrap mt-10">
                    <a href="{{ route('general.home') }}" class="btn primary-btn">
                      Know More
                      <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <ul class="controls certificate-arrow flex" id="custom-control-sucess" aria-label="Carousel Navigation" tabindex="0">
        <li class="prev mr-2 prev-nw" data-controls="prev" aria-controls="tns2" tabindex="-1">
          <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
        </li>
        <li class="next next-nw" data-controls="next" aria-controls="tns2" tabindex="-1">
          <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
        </li>
      </ul>
    </div>
  </section>

  <!-- Visionaries Block -->
  <section class="visionaries relative">
    <div class="right-blue-angle absolute right-0">
      <img src="{{ asset('assets/frontend/images/about_angle.png') }}" alt="" class="w-full" />
    </div>
    <div class="block_header py-4">
      <div class="container mx-auto">
        <div class="row flex items-center">
          <div class="col-xl-12">
            <div class="header_text">
              <h2>
                <span class="block font-light" style="font-size:64px; font-weight:700">28+ Years</span>
                 of Global Leadership and Innovation
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="vission_box relative home-vission">
      <picture id="tabPicture">
        <source media="(max-width:640px)" srcset="{{ asset('assets/frontend/images/vission_banner-mobile.png') }}" />
        <img src="{{ asset('assets/frontend/images/vission_banner.png') }}" alt="" class="img-fluid w-full zoom-img" />
      </picture>

      <div class="vission_text relative">
        <h4 class="only-mobile-show">
          Excellence.<br />
          Trust.<br />
          Influence.
        </h4>
        <div class="container mx-auto">
          <div class="flex">
            <div class="vission-content">
           <p class="legacy-text"> </p>
              <p class="text-white mb-4">
               With a legacy spanning nearly three decades, we have consistently championed professional growth and transformative business solutions. Our continued journey reflects a deep commitment to advancing industries and empowering careers across diverse sectors worldwide.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mx-auto">
      <div class="row flex items-center">
        <div class="lg:w-2/3 lg:ml-auto lg:py-10 py-6">
          <div class="header_text py-5">
            <h2>
              <span class="font-bold textbld">Explore our legacy and vision for the future.
            </h2>
            <div class="mb-5 xl:mb-5 mt-4 gap_mdf">
              <a href="{{ route('general.about.us') }}" class="bg-blue-theme text-white font-bold py-2 px-4 inline-flex items-center m-auto lg:ml-auto">
                Our Story <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="blue_trangle_text home-ang-modify">
      <h4>
        Excellence.<br />
        Trust.<br />
        Influence.
      </h4>
    </div>
  </section>

  <!-- Award Block -->
  <section class="certificate">
    <div class="certificate_top relative">
      <div class="container h-full">
        <div class="flex flex-wrap items-center h-full">
          <div class="width-forty">
            <div class="cretificate_text">
			<h2 class="font-bold">
              <span class="block font-light" style="font-size:34px;"> Honoured with</span>
  				<span class="block" style="font-size:34px; font-weight:700">30+ International Awards</span>
				</h2>
              <p class="mt-4">
                Recognized globally for excellence, Blue Ocean Corporation has earned over 30 prestigious accolades including the ASCM Awards of Excellence, Dubai Quality Appreciation Award, Great Place to Work certification, Logistics Consultancy of the Year, Global Training and Development Leadership Award, and honors from the Ministry of Human Resources & Emiratisation. These achievements reflect our enduring commitment to innovation, quality, and transformative impact across consulting, training, and organizational development.

              </p>
            </div>
          </div>
          <div class="width-sixty">
            <div class="slider-container cert-slide-content">
              <div class="certificate-slider">
                @if(isset($awards) && !empty($awards))
                  @foreach($awards as $award)
                    @php 
                      $awardImages = json_decode($award->image, true);
                    @endphp
                    @foreach($awardImages as $awardImage)
                      <div class="slider-item">
                        <div class="panic-slider"><img src="{{ asset('storage/awards/'.$awardImage) }}" alt="{{ $award->title }}" /></div>
                      </div>
                    @endforeach
                  @endforeach
                @endif
              </div>
              <ul class="controls certificate-arrow home-certificate-slide flex" id="custom-control" aria-label="Carousel Navigation" tabindex="0">
                <li class="prev mr-2" data-controls="prev" aria-controls="tns2" tabindex="-1">
                  <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
                </li>
                <li class="next" data-controls="next" aria-controls="tns2" tabindex="-1">
                  <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="certificate_bottom home-certificate">
      <div class="container">
        <div class="flex flex-wrap items-start">
          <div class="width-thirty">
            <div class="compny_logo">
              <img src="{{ asset('assets/frontend/images/final_boc_logo.svg') }}" alt="" class="w-full h-auto m-auto" />
            </div>
          </div>
          <div class="width-sixty">
            <div class="header_text lg:ml-0 symbol-left">
              <h2>
                A Symbol of Quality, <br />
                Leadership and Trust
              </h2>
              <div class="mt-2">
                <a href="{{ route('general.awards') }}" class="btn btn_text pl-none">
                 Our Achievements <span><img src="{{ asset('assets/frontend/images/icons/arrow-right-outline.svg') }}" alt="" /></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Bridging Block-->
  <section class="bridging_blocK relative">
    <div class="left_sheap_right absolute">
      <img src="{{ asset('assets/frontend/images/polygon_1.png') }}" alt="" />
    </div>
    <div class="container">
      <div class="flex flex-wrap">
        <div class="md:w-full lg:w-1/2">
          <div class="header_text bridge-left">
            <h2>
              <span class="block"> A Global Network of </span>
              <span style="font-size:34px; font-weight:600">Future-Focused Professionals</span>
            </h2>
            <p class="para_three mt-4">
             Our training programs deliver real-world value, having equipped over 500,000 professionals with in-demand skills and internationally recognized certifications. By focusing on global standards, we help individuals stay competitive in today’s dynamic and fast-evolving environment.

            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid p-0">
      <div class="flex flex-wrap">
        <!-- <div class="w-full lg:w-1/2">
          <div class="tab-location-box">
            <div id="tab1" class="tab mt-1 items-center px-12 w-full">
              <div class="tab_inner_box relative tab-content-container" id="tabContent">
                <picture id="tabPicture">
                  <source id="tabSource" media="(min-width:720px)" srcset="{{ asset('assets/frontend/images/Subtract.jpg') }}" />
                  <img id="tabImage" src="{{ asset('assets/frontend/images/tab_one_mobile.png') }}" alt="banner image" class="w-full h-auto" />
                </picture>
                <div class="tab_inner absolute w-full">
                  <div class="container">
                    <div class="flex flex-wrap">
                      <div class="w-full md:w-1/2">
                        <div class="tab_left">
                          <img src="{{ asset('assets/frontend/images/company_logo_tab.png') }}" alt="" />
                          <h2 id="tabHeading" class="text-white">DUBAI</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <div class="w-full lg:w-1/2 mt-16 ml-6 mob-marging">
          <div class="tab-location-box">
            <div id="tab1" class="tab mt-1 items-center px-12 w-full">
              <div class="tab_inner_box relative tab-content-container" id="tabContent">
                <div class="relative">
                  <picture id="tabPicture">
                    <!-- <source id="tabSource" media="(max-width:620px)" srcset="{{ asset('assets/frontend/images/Subtract.jpg') }}" /> -->
                    <img id="tabImage" src="{{ asset('assets/frontend/images/Subtract.jpg') }}" alt="banner image" class="w-full h-auto" />
                  </picture>
                  <img id="tabBgImage" src="{{ asset('assets/frontend/images/country/dubai vector.svg') }}" alt="Overlay" class="absolute bottom-0 left-0 md:w-32 md:h-32 highlight-tab1" />
                  <!-- <img id="tabBgImage" src="{{ asset('assets/frontend/images/country/dubai-vector.svg') }}" alt="Overlay" class="absolute top-0 left-0 md:w-32 md:h-32 tab1"/> -->

                  <div class="tab_inner absolute w-full -top-10">
                    <div class="container p-0">
                      <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2">
                          <div class="tab_left">
                           
                            <img src="{{ asset('assets/frontend/images/company_logo_tab.png') }}" alt="" />
                             <h2 id="tabHeading" class="text-white">DUBAI</h2>
                            <p class="text-white hidden" id="pIndia">Delhi <span py-3="">|</span> Pune <span py-3="">|</span> Hyderabad <span py-3="">|</span> Kochi</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full lg:w-1/2">
          <div class="counter-text-home">
            <div class="homecounter-slider">
              <!-- <div class="counter-box counter-countres">
                <div class="counter_text">
                    <p class="uppercase">Operations Across Countries</p>
                  <div class="flex justify-start">
                    <h3 class="tab-counter" data-count="20">20</h3>
                    <span>+</span>
                  </div>
                
                </div>
              </div> 
        
              <div class="counter-box counter-programs">
                <div class="counter_text">
                  <p class="uppercase"></p>
                  <div class="flex justify-start">
                    <h3 class="tab-counter" data-count="20"></h3>
                    <span></span>
                  </div>
                </div>
              </div> -->
              <div class="counter-box counter-alumini">
                <div class="counter_text">
                  
                  <div class="flex justify-start">
                    <h3 class="tab-counter" data-count="20">500000</h3>
                    <span>+</span>
                  </div>
                  <p class="uppercase">ALUMNI Worldwide</p>
                </div>
              </div>
              <div class="counter-box counter-trade">
                <div class="counter_text">
                  <div class="flex justify-start">
                    <h3 class="tab-counter" data-count="20">75</h3>
                    <span>+</span>
                  </div>
                  <p class="uppercase">Nationalities Trained</p>
                </div>
              </div>
              <div class="counter-box counter-client">
                <div class="counter_text">
                  
                  <div class="flex justify-start">
                    <h3 class="tab-counter" data-count="20">2500</h3>
                    <span>+</span>
                  </div>
                  <p class="uppercase">CORPORATE CLIENTS</p>
                </div>
              </div>
              <div class="counter-box counter-award">
                <div class="counter_text">
                 <div class="flex justify-start">
                    <h3 class="tab-counter" data-count="20">30</h3>
                    <span>+</span>
                  </div>
                   <p class="uppercase">International Awards</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="lg:mt-5 flex flex-row items-center px-12 justify-between location-row">
        <div data-tabopen="tab1" class="tabbtn border-t-2 border-r-2 cursor-pointer border-l-2 border-purple-600 px-2 py-1 text-purple-700 font-medium active">
          Dubai
        </div>
        <div data-tabopen="tab2" class="tabbtn border-b-2 cursor-pointer border-purple-600 px-2 py-1">
          London
        </div>
        <div data-tabopen="tab3" class="tabbtn border-b-2 cursor-pointer border-purple-600 px-2 py-1">
          RIYADH
        </div>
        <div data-tabopen="tab4" class="tabbtn border-b-2 cursor-pointer border-purple-600 px-2 py-1">
          ABU Dhabi
        </div>
        <div data-tabopen="tab5" class="tabbtn border-b-2 cursor-pointer border-purple-600 px-2 py-1">
          Cairo
        </div>
        <div data-tabopen="tab6" class="tabbtn border-b-2 cursor-pointer border-purple-600 px-2 py-1">
          INDIA
        </div>
      </div>
    </div>
  </section>

  <!-- Trusted Partner -->
  <section class="trusted-partner relative">
    <div class="container mx-auto px-4">
      <div class="flex flex-wrap">
        <div class="w-full">
          <div class="trust_left home-right-girl">
           
            <h3 class="impect_text my-3">
              <span class="block font-light" style="font-size:34px;">From Strategic Corporate Training to 
              <span class="block font-bold">Business Transformation </span>
            </h3>
           
            <p class="mt-3">
           We deliver strategic training solutions trusted by 2,500+ corporate clients worldwide. Our development and consulting services are tailored to meet the evolving needs of organizations, fostering competence, continuity, and a competitive edge in a rapidly changing global landscape.
            </p>
            <img src="{{ asset('assets/frontend/images/bcb-girl-image.png') }}" alt="" class="girl-mobile-view" />
            <h3 class="impect_text mt-3">
              <span> Impacting</span><br />
              the future of innovation
            </h3>
            <div class="mt-4">
              <a href="{{ route('general.contact.us') }}" class="btn primary-btn">Connect With Us<img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></a>

              <!-- <a href="javascript:void(0)" class="btn primary-btn" data-modal-target="enquery-form-modal" data-modal-toggle="enquery-form-modal">Enquery Now<img
                  src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"  /></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="girl_halp absolute">
      <img src="{{ asset('assets/frontend/images/girl-halp_image.png') }}" alt="" class="img-fluid girl-hide" />
      <img src="{{ asset('assets/frontend/images/girl-halp_image-mobile.png') }}" alt="" class="img-fluid mobile-girl" />
    </div>
  </section>

  <!-- News And Insight -->
  <section class="news_home relative trusted-section">
    <div class="container">
      <div class="diveder_angle">
        <img src="{{ asset('assets/frontend/images/devider_angle.png') }}" alt="" />
      </div>
      <!-- <div class="right_down-angel">
        <img src="{{ asset('assets/frontend/images/news_down-angle.png') }}" alt="" class="w-full h-auto" />
      </div> -->
      <div class="container mx-auto px-0">
        <div class="w-full">
          <h3 class="news_title">
            News and Insights
          </h3>
          <h3 class="news_title-mobile hidden">News and <strong>insights</strong></h3>
        </div>
      </div>
      <div class="trusted-image-wrap mt-10">
        <div class="cta-section-image-rows-wrapper">
          <!-- Row 1 -->
          <div class="cta-section-image-row-container row-1">
            <div class="wrapper-slider slider-1">
              <img src="{{ asset('assets/frontend/images/news/01.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/02.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/03.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/04.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/05.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/06.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/07.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/08.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/09.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/11.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/12.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/13.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/14.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/15.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/16.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/17.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/18.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/11.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/08.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/03.png') }}" />
              <!-- Add more -->
            </div>
          </div>
          <div class="news-center-box">
            Waves of Progress: Stories and Trends That Shape Tomorrow
          </div>

          <!-- Row 2 -->
          <div class="cta-section-image-row-container row-2">
            <div class="wrapper-slider slider-2">
              <img src="{{ asset('assets/frontend/images/news/a.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/b.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/c.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/d.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/e.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/f.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/g.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/h.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/i.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/k.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/l.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/m.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/n.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/o.png') }}" />
              <img src="{{ asset('assets/frontend/images/news/p.png') }}" />
            </div>
          </div>
          <div class="btn-wrap mt-3">
            <a href="{{ route('general.news.insight') }}" class="btn primary-btn">
              Discover More
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div>
        </div>
      </div>
      <!-- <div class="trusted-image-wrap">
              <img src="{{ asset('assets/frontend/images/trusted-img.png') }}" class="trusted-image">
              <img src="{{ asset('assets/frontend/images/endorsed-Worldwide..png') }}" class="trusted-image-mobile">

              <div class="news-divider">
                  <div class="divider-line divider-one"></div>
                  <div class="divider-line divider-two"></div>
                  <div class="divider-line divider-three"></div>
                  <div class="divider-line divider-four"></div>
              </div>
              <div class="news-center-box">
                  Unveil your genius redefine possibility
              </div>
          </div> -->
      <!-- <div class="btn-wrap mt-3">
            <a href="{{ route('general.news.insight') }}" class="btn primary-btn">
              Discover More
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div> -->
    </div>
  </section>

  <!-- VOICE OF Success -->
  <section class="voice-success-section new-corner-gray">
    <div class="container">
      <div class="voice-success-head voic-succ flex flex-wrap lg:flex-row">
        <div class="w-full">
          <h2 class="sub-heading text-primary">Voices of <strong>Success</strong></h2>
        </div>
      </div>
      <div class="voice-success-main">
        <div class="voice-success-testi w-full lg:w-1/2 relative">
          <div class="slider-group">
          

            <div class="voic-sucess-slider-home">
              <div class="item">
                <div class="testimonial-list boc-testimonial">
                  <div class="testimonial-item bg-[#4BA1BE]">
                    <div class="testimonial-wrap">
                      <img src="{{ asset('assets/frontend/images/testimonial-flag.png') }}" class="testimonial-img" />
                      <div class="testimonial-text">
                        I had an incredible experience with Blue Ocean Academy! From the moment I enrolled, I was met with professionalism, expertise, and a commitment to excellence. The instructors were knowledgeable, supportive, and passionate about their subjects, making learning both engaging and insightful.
                      </div>
                      <div class="testimonial-info">
                        <h3 class="testimonial-name">Franjolyn Guerrero</h3>
                        <p class="testimonial-designation">Supply HR Coordinator.</p>
                       <p class="testimonial-designation">FZE</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-list boc-testimonial">
                  <div class="testimonial-item bg-[#4BA1BE]">
                    <div class="testimonial-wrap">
                      <img src="{{ asset('assets/frontend/images/testimonial-flag.png') }}" class="testimonial-img" />
                      <div class="testimonial-text">
                        I joined the academy for CISCP and CISCM classes. The sessions were a notch above expectations, and the tutor’s insights and inputs have been truly valuable in shaping my career journey. I highly recommend this institution to anyone looking to advance their career and give it a strong boost through certification programs

                      </div>
                      <div class="testimonial-info">
                        <h3 class="testimonial-name">Aswathi C.S</h3>
                        <p class="testimonial-designation">Procurement Supervisor</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="item">
                <div class="testimonial-list boc-testimonial">
                  <div class="testimonial-item bg-[#4BA1BE]">
                    <div class="testimonial-wrap">
                      <img src="{{ asset('assets/frontend/images/testimonial-flag.png') }}" class="testimonial-img" />
                      <div class="testimonial-text">
                        A truly enriching experience! I successfully completed the CIPP CIPM certification from Blue Ocean Academy certified from IPSCMI-USA, elevating my procurement and supply chain expertise to the next level. The faculty was exceptional, offering deep industry insights and practical strategies. The entire process was seamless, thanks to Mr. Sameer’s outstanding coordination. If you are looking for a globally recognized certification with top-tier training, Blue Ocean Academy is the place to be!.

                      </div>
                      <div class="testimonial-info">
                        <h3 class="testimonial-name">Rana Elneshwy</h3>
                        <p class="testimonial-designation">Strategic Sourcing Manager</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="item">
                <div class="testimonial-list boc-testimonial">
                  <div class="testimonial-item bg-[#4BA1BE]">
                    <div class="testimonial-wrap">
                      <img src="{{ asset('assets/frontend/images/testimonial-flag.png') }}" class="testimonial-img" />
                      <div class="testimonial-text">
                       I would like to thank Blue Ocean for inviting us to IPSC Dubai 2025.
It’s truly inspiring to be among so many accomplished individuals, especially the legendary cricketer Sourav Ganguly, whose presence was particularly motivating. This event has not only broadened our perspectives but also contributed meaningfully to enhancing our quality of life.

                      </div>
                      <div class="testimonial-info">
                        <h3 class="testimonial-name">Mohd Rabie</h3>
                        <p class="testimonial-designation">CEO, Enzy Mint</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="item">
                <div class="testimonial-list boc-testimonial">
                  <div class="testimonial-item bg-[#4BA1BE]">
                    <div class="testimonial-wrap">
                      <img src="{{ asset('assets/frontend/images/testimonial-flag.png') }}" class="testimonial-img" />
                      <div class="testimonial-text">
                        Absolutely worth it! The CIPP CIPM certification from Blue Ocean Academy certified by IPSCMI-USA gave me the knowledge and confidence to excel in procurement and supply chain management. The instructors were industry experts who made complex topics easy to understand. What stood out was the seamless process and exceptional support from Mr. Sameer from enrollment to certification, everything was handled perfectly. A must-do certification for career growth!
                      </div>
                      <div class="testimonial-info">
                        <h3 class="testimonial-name">Engineer Gihad Elhassan</h3>
                        <p class="testimonial-designation">GM Operation and Project, MI&T Engineering Consultants</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="item">
                <div class="testimonial-list boc-testimonial">
                  <div class="testimonial-item bg-[#4BA1BE]">
                    <div class="testimonial-wrap">
                      <img src="{{ asset('assets/frontend/images/testimonial-flag.png') }}" class="testimonial-img" />
                      <div class="testimonial-text">
                       I recently attended Blue Ocean's webinar, which was a significant training session that was worth attending. The content was well-presented and valuable. I appreciate the knowledge shared and the practical insights provided.
                      </div>
                      <div class="testimonial-info">
                        <h3 class="testimonial-name">Mathiraj M</h3>
                        <p class="testimonial-designation">QA/QC Manager,Trinity Mechanical Services L.L.C</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                        
               <div class="item">
                <div class="testimonial-list boc-testimonial">
                  <div class="testimonial-item bg-[#4BA1BE]">
                    <div class="testimonial-wrap">
                      <img src="{{ asset('assets/frontend/images/testimonial-flag.png') }}" class="testimonial-img" />
                      <div class="testimonial-text">
                        I recently completed Airport Ground Operations. I had an amazing experience with Blue Ocean Academy! I was met with professionalism, expertise, and a commitment to excellence. The instructor Mr. Hamid was knowledgeable, supportive, patient and very good in explaining about the subject. The class was interactive with videos regarding the subject. Gained insights and deep understanding about the subject.
                      </div>
                      <div class="testimonial-info">
                        <h3 class="testimonial-name">Lorna Pinto</h3>
                        <p class="testimonial-designation">    </p>
                      </div>
                    </div>
                  </div>
                </div>
                        
              </div>
            </div>
              <ul class="controls certificate-arrow flex" id="custom-control-tstm" aria-label="Carousel Navigation" tabindex="0">
        <li class="prev mr-2 prev-nw" data-controls="prev" aria-controls="tns2" tabindex="-1">
          <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
        </li>
        <li class="next next-nw" data-controls="next" aria-controls="tns2" tabindex="-1">
          <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
        </li>
      </ul>
          </div>
        </div>

        <div class="voice-success-media margin-video-box w-full lg:w-1/2 relative">
          <div class="slider-group">
          

            <div class="video-sucess-home">
              <div class="item">
                <div class="voice-success-media-wrap">
                  <div class="voice-success-media-img">
                    <iframe
                      width="100%"
                      height="450"
                      src="https://www.youtube.com/embed/MVQssl7OnnY?si=srYzwa-SUFNsovNs"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>
              </div>
                <div class="item">
                <div class="voice-success-media-wrap">
                  <div class="voice-success-media-img">
                    <iframe
                      width="100%"
                      height="450"
                      src="https://www.youtube.com/embed/U6HYERJ96-Q?si=32R94s_BqscShekG"
                      title="YouTube video player"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                </div>
              </div>
            </div>
              <ul class="controls certificate-arrow flex" id="custom-control-video" aria-label="Carousel Navigation" tabindex="0">
        <li class="prev mr-2 prev-nw" data-controls="prev" aria-controls="tns2" tabindex="-1">
          <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
        </li>
        <li class="next next-nw" data-controls="next" aria-controls="tns2" tabindex="-1">
          <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
        </li>
      </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Upcoming Event -->
  <section class="home_events seminar-section">
    @if(isset($upcomingConference) && !empty($upcomingConference))
      <div class="container">
        <div class="seminar-head w-full md:w-1/ upcomming-home">
          <h4 class="event_text font-bold text-center">Upcoming Events</h4>
        </div>
      </div>
      <div class="container">
        <div class="seminar-rectangle-wrap">
          <div class="seminar-rectangle">
            @php
              $eventDate = \Carbon\Carbon::createFromFormat('d.m.Y', $upcomingConference->event_date)->format('jS F, Y l');
            @endphp
            <p class="rectangle-text">Date: {{ $eventDate }} | At ‘ {{ $upcomingConference->event_hotel_name }}’ {{ $upcomingConference->event_location }}</p>
          </div>
        </div>
      </div>
    @endif
    <div class="relative">
      <div class="container">
        @if(isset($upcomingConference) && !empty($upcomingConference))
          <div class="seminar-main-wrap w-full md:w-1/2">
            <!-- <div class="flex flex-row gap-0">
              <div class="seminar-bg-wrap home-event-img sm:w-1/2">
                <img src="{{ asset('assets/frontend/images/delhievent2025.png') }}" />
              </div>
              <div class="seminar-text-main home-event-text sm:w-1/2">
                <img src="{{ asset('assets/frontend/images/event-slider-logo.png') }}" />
                <div class="event_text">
                  <h3>RESILIENT AND RELIABLE SUPPLY CHAINS: POWERING INDIA'S GROWTH!</h3>
                  <h4>Futuristic Skills to Fule Progress</h4>
                </div>
                <div class="btn-wrap mt-3 event-register">
                        
                  <a href="#" class="btn primary-btn">
                    Register Now
                    <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                  </a>
                </div>
              </div>
            </div> -->
            <div class="relative flex flex-wrap w-full items-center">
              <img src="{{ asset('storage/conferences/event/'.$upcomingConference->home_page_banner_file) }}" alt="angle" class="w-full upcoming-event-ad" />
              <div class="container upcoming-event-ad-sm">
                <img src="{{ asset('assets/frontend/images/newImages/upcoming-event-ad-sm.png') }}" alt="angle" class="w-full" />
              </div>
              <div class="new-eventoverlap absolute w-full top-0 h-100 h-full">
                <div class="flex">
                  <div class="w-1/2">
                    <div class="event-link-btn">
                      @if(!\Carbon\Carbon::parse($upcomingConference->event_date)->isPast())
						<a href="{{ route('conferences.upcoming.event', $upcomingConference->slug) }}" class="btn primary-btn bg-blue-600 text-white py-3 px-5 mt-3">
	  					   Register Now
	  					   <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
						</a>
					  @endif
                    </div>
                  </div>
                  <div class="w-1/2">
                    <div class="event-timer home-coming-event">
                      <div id="timer" class="flex text-white">
                        <div id="days">
                          00 <br />
                          <span class="block">Days</span>
                        </div>
                        |
                        <div id="hours">
                          00 <br />


                          <span class="block">Hours</span>
                        </div>
                        |
                        <div id="minutes">
                          00 <br />
                          <span class="block">Minutes</span>
                        </div>
                        |
                        <div id="seconds">
                          00 <br />
                          <span class="block">Seconds</span>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" id="upcomingeventdate" value="{{ $upcomingConference->event_date }}">
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif

        @if(isset($seminars) && !empty($seminars))
          <div class="seminar-all-list-wrap w-full md:h-1/2">
            <div class="slider-container">
              <div class="seminar-list event-slider">
                @foreach($seminars as $seminar)
                  <a href="{{ route('training.webinar.seminar.register', $seminar->slug) }}">
                  <div class="seminar-list-wrap slider-item">
                    <div class="seminar-item">
                      <div class="seminar-wrap">
                        <h5><small>{{ (($seminar->seminar_type == 'FREE_SEMINAR') ? 'Free ' : 'Paid ') }} Webinar</small></h5>
                        <h6>
                          <small>{{ $seminar->seminar_title }}</small>
                        </h6>
                        @php
                          $seminarDate = \Carbon\Carbon::parse($seminar->seminar_date)->format('jS F Y');
                        @endphp
                        <span class="date-semi">{{ $seminarDate }}</span>
                      </div>
                    </div>
                  </div>
                  </a>
                @endforeach
              </div>
            </div>
            @if(count($seminars) > 1)
              <ul class="controls certificate-arrow flex event-control" id="customize-controls" aria-label="Carousel Navigation" tabindex="0">
                <li class="prev mr-2 prev-event" data-controls="prev" aria-controls="tns2" tabindex="-1">
                  <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
                </li>
                <li class="next next-event" data-controls="next" aria-controls="tns2" tabindex="-1">
                  <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
                </li>
              </ul>
            @endif
          </div>
        @endif
        <div style="clear:both"></div>
      </div>
    </div>
<div style="clear:both"></div>
    <!-- Marque Block -->
    <div class="sponsor p-0 overflow-hidden sponser-padding home-sponser">
      <div class="container" style="margin-top: 70px;">
        <h2 class="font-bold">
          <span class="block font-light" style="font-size: clamp(20px, 5vw, 34px); color: #0c1896;"> Our Clientele </span>
          <span class="block" style="font-size: clamp(20px, 5vw, 34px); font-weight: 700; color: #0c1896;">Transforming Businesses, Together</span>
        </h2>
        <p class="mt-4">
          We take pride in partnering with visionary businesses that dare to dream big. From startups to industry giants, our collaborations have driven transformative success, turning challenges into opportunities and goals into
          achievements. Together, we’re shaping the future of business.
        </p>
      </div>

      <section class="sponser-details-p mt-20gap">
        <div class="container">
          <h3 class="text-4xl text-blue-text-hdr font-semibold mb-8"></h3>

          <div class="flex flex-wrap gap-2 lg:flex-row">
            <div class="sponser-box w-50 lg:w-1/4">
              <img src="{{ asset('assets/frontend/images/boc-corporate-home/1.png') }}" alt="" />
              <p></p>
            </div>
            <div class="sponser-box w-50 lg:w-1/4">
              <img src="{{ asset('assets/frontend/images/boc-corporate-home/2.png') }}" alt="" />
            </div>
            <div class="sponser-box w-50 lg:w-1/4">
              <img src="{{ asset('assets/frontend/images/boc-corporate-home/3.png') }}" alt="" />
            </div>
            <div class="sponser-box w-50 lg:w-1/4">
              <img src="{{ asset('assets/frontend/images/boc-corporate-home/4.png') }}" alt="" />
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>

      <div class="marquee-container">
        <!-- Marque 
        <div class="marquee-content">
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
          <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
        </div>-->
      </div>
    </div>
    <div class="contact_bottom py-6">
      <div class="container max-w-7xl mx-auto px-4">
        <div class="row flex flex-col md:flex-row items-center justify-between">
          <div class="email_ftr flex flex-col md:flex-row items-center gap-4 h-full">
            <div class="header_text">
              <h2 class="ft-top-hdr">
                <span class="block" style="font-weight:600">Discover new pathways to 
                growth, innovation, and leadership.</span>
            
              </h2>
            </div>

            <div class="mail_add">
              <a href="{{ route('general.contact.us') }}" class="flex items-center bg-blue-600 text-white px-4 py-2 hover:bg-blue-700 transition">
                <span class="mr-3"><i class="fa-solid fa-envelope"></i></span> Let’s Connect
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Block -->
  <div id="enquery-form-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-5xl overheight-modal">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow-sm">
        <button type="button" class="absolute right-5 top-5 text-gray-400 bg-transparent text-sm w-8 h-8 lg:w-10 lg:h-10 ms-auto inline-flex justify-center items-center" data-modal-hide="enquery-form-modal">
          <svg class="w-3 h-3 lg:h-6 lg:w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
          </svg>
          <span class="sr-only">Close modal</span>
        </button>

        <div class="form-sec-modal">
          <aside style="background-image: url(https://bocdemosite.sacloud.online/assets/frontend/images/enquery-form.png);">
            <div class="form-over">
              <a href="#"><img src="https://bocdemosite.sacloud.online/assets/frontend/images/consulting/boc-logo.webp" alt="" /></a>
            </div>
            <a href="https://blueoceancorporation.com/" class="form-over-bot text-white hover:text-blue">
              www.blueoceancorporation.com
            </a>
          </aside>
          <div class="form-area">
            <form class="max-w-sm">
              <h4 class="pb-2 font-bold text-gray-700 margin-modify-form">Register / Enquiry Form</h4>
              <div class="flex gap-5">
                <div class="basis-1/2">
                  <div class="mb-3">
                    <label for="firstname" class="block mb-2 text-sm font-medium dark:text-white">First Name*</label>
                    <input
                      type="text"
                      id="firstname"
                      class="bg-gray-50 border border-gray-300 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="First Name*"
                      required
                    />
                  </div>
                </div>
                <div class="basis-1/2">
                  <div class="mb-3">
                    <label for="lastname" class="block mb-2 text-sm font-medium dark:text-white">Last Name*</label>
                    <input
                      type="text"
                      id="lastname"
                      class="bg-gray-50 border border-gray-300 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="Last Name*"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="email" class="block mb-2 text-sm font-medium dark:text-white">Email*</label>
                <input
                  type="email"
                  id="email"
                  class="bg-gray-50 border border-gray-300 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="example@mail.com"
                  required
                />
              </div>
              <div class="flex">
                <div class="w-full">
                  <label for="phone" class="block mb-2 text-sm font-medium dark:text-white">Phone No</label>
                </div>
              </div>
              <div class="flex gap-5">
                <div class="basis-1/2">
                  <div class="mb-3">
                    <input
                      type="text"
                      id="phone"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="United Aeab Emirates"
                      required
                    />
                  </div>
                </div>
                <div class="basis-1/2">
                  <div class="mb-3">
                    <input
                      type="text"
                      id="phone"
                      class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                      placeholder="+971  12 345 6789"
                      required
                    />
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label for="comp-name" class="block mb-2 text-sm font-medium dark:text-white">Company Name*</label>
                <input
                  type="text"
                  id="comp-name"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Company Name*"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="comp-name" class="block mb-2 text-sm font-medium dark:text-white">Company Website*</label>
                <input
                  type="text"
                  id="comp-name"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Company Name*"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="comp-name2" class="block mb-2 text-sm font-medium text-red-700">Work Domain*</label>
                <select
                  id="comp-name2"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                  <option selected>add here</option>
                  <option value="US">add here 2</option>
                  <option value="CA">add here 3</option>
                  <option value="FR">add here 4</option>
                  <option value="DE">add here 5</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="comp-name" class="block mb-2 text-sm font-medium text-gray-900">Short description about your business </label>
                <textarea
                  id="message"
                  rows="4"
                  class="block p-1.5 w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  placeholder="Leave a comment..."
                ></textarea>
              </div>
              <div class="flex items-start mb-10">
                <div class="flex items-center h-5">
                  <input
                    id="terms"
                    type="checkbox"
                    value=""
                    class="w-4 ms-2 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                    required=""
                  />
                </div>
                <label for="terms" class="ml-4 text-sm font-medium text-gray-900 dark:text-gray-100">
                  I agree to receive other information from Blue Ocean Corporation
                </label>
              </div>
              <button
                type="submit"
                class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-none text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
              >
                Submit
              </button>
            </form>
          </div>
        </div>
        <div class="enquery-text-box">
          <p class="m-hdr"><strong>1. Enquiry Form (1st Level):</strong></p>
          <ul class="enquery-list">
            <li>When a user fills out the initial enquiry form, their information (e.g., name, email, phone number, etc.) should be saved locally (e.g., in the browser's local storage or session storage).</li>
            <li>Provide a clear confirmation message to the user that their information has been successfully saved.</li>
            <li>Ensure the form is simple, with minimal required fields, to reduce friction and encourage completion.</li>
          </ul>
          <p class="sub-m-hder">1. Course Registration:</p>
          <ul class="enquery-list">
            <li>When the user proceeds to register for a specific course, their saved information should auto-fill the registration form.</li>
            <li>Clearly indicate which fields have been auto-filled and allow users to edit or update the information if needed.</li>
            <li>Provide an option for users to opt-out of auto-filling if they prefer to manually enter their details.</li>
          </ul>
          <p class="sub-m-hder">2. User Consent and Transparency:</p>
          <ul class="enquery-list">
            <li>Inform users upfront that their information will be saved for future use (e.g., "Your information will be saved to make your next steps easier. You can edit it anytime.").</li>
            <li>Ensure compliance with data privacy regulations (e.g., GDPR) by providing a clear privacy policy and obtaining user consent.</li>
          </ul>
          <p class="sub-m-hder">3. Error Handling and Validation:</p>

          <ul class="enquery-list">
            <li>If the saved information is incomplete or outdated, prompt the user to update it before proceeding with course registration.</li>
            <li>Provide clear error messages and guidance if any issues arise during the auto-fill process.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')

<!-- <script src="https://unpkg.com/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>

<script>
  window.addEventListener("load", function () {
    gsap.registerPlugin(ScrollTrigger);

    var sectionWrappers = document.querySelectorAll(".cta-section-image-rows-wrapper");

    for (var i = 0; i < sectionWrappers.length; i++) {
      var section = sectionWrappers[i];
      var rowContainers = section.querySelectorAll(".cta-section-image-row-container");

      for (var j = 0; j < rowContainers.length; j++) {
        var imageSection = rowContainers[j];
        var wrapper = imageSection.querySelector(".wrapper-slider");
        var images = wrapper.querySelectorAll("img");

        var isOdd = j % 2 !== 0;
        var xStart = isOdd ? "50%" : -0.5 * wrapper.scrollWidth;
        var xEnd = isOdd ? -1 * (wrapper.scrollWidth - imageSection.offsetWidth) : 0;

        var tl = gsap.timeline({
          scrollTrigger: {
            trigger: section,
            start: "top bottom",
            end: "bottom top",
            invalidateOnRefresh: true,
            scrub: 1
          }
        });

        tl.fromTo(wrapper, { x: xStart }, { x: xEnd })
          .to(images, { scale: 1.0 }, "<"); // Optional zoom effect
      }
    }
  });
</script> -->
<script type="text/javascript">
    const tabData = {
        tab1: {
            desktop: "{{ asset('assets/frontend/images/country/dubai vector.svg') }}",
            mobile: "{{ asset('assets/frontend/images/tab_one_mobile.png') }}",
            heading: "DUBAI",
            cities: ""
        },
        tab2: {
            desktop: "{{ asset('assets/frontend/images/country/london.svg') }}",
            mobile: "{{ asset('assets/frontend/images/londan-tab-mobile.png') }}",
            heading: "LONDON",
            cities: ""
        },
        tab3: {
            desktop: "{{ asset('assets/frontend/images/country/riyadh 1.svg') }}",
            mobile: "{{ asset('assets/frontend/images/rayad-mobile.png') }}",
            heading: "RIYADH",
            cities: ""
        },
        tab4: {
            desktop: "{{ asset('assets/frontend/images/country/abu dhabi outline.svg') }}",
            mobile: "{{ asset('assets/frontend/images/abudabi-mobile.png') }}",
            heading: "ABU DHABI",
            cities: ""
        },
        tab5: {
            desktop: "{{ asset('assets/frontend/images/country/Cairo.svg') }}",
            mobile: "{{ asset('assets/frontend/images/cairo-mobile.png') }}",
            heading: "CAIRO",
            cities: ""
        },
        tab6: {
            desktop: "{{ asset('assets/frontend/images/country/India location.svg') }}",
            mobile: "{{ asset('assets/frontend/images/india-tab-mobile.png') }}",
            heading: "INDIA",
            cities: "DELHI | PUNE | HYDERABAD | KOCHI"
        }
    };
</script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
<!--  <script src="{{ asset('assets/frontend/js/home.js') }}"></script> -->

<script>
    gsap.registerPlugin(ScrollTrigger);

    // First slider (left to right)
    gsap.from(".slider-1", {
        x: () => -(document.querySelector(".slider-1").scrollWidth - window.innerWidth),
        ease: "none",
        scrollTrigger: {
            trigger: ".row-1",
            start: "top bottom",
            end: "bottom top",
            scrub: true,
        }
    });

    // Second slider (right to left)
    gsap.to(".slider-2", {
        x: () => -(document.querySelector(".slider-2").scrollWidth - window.innerWidth),
        ease: "none",
        scrollTrigger: {
            trigger: ".row-2",
            start: "top bottom",
            end: "bottom top",
            scrub: true,
        }
    });
</script>


<script>
var countSlider = tns({
 container: '.homecounter-slider',
       items: 1,
       slideBy: 'page',
        autoplay: true,
        mode: "gallery",
        controls: false,
        loop: true,
        nav: false,
        autoplay: true,
        speed: 800,
        autoplayButtonOutput: false,
        mouseDrag: true,
        lazyload: true,
    });
</script>
<script>

    //  Certificate Slider
    const slidernew = tns({
        container: '.certificate-slider',
        swipeAngle: false,
        speed: 400,
        loop: true,
        items: 1,
        slideBy: '1',
        nav: false,
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        lazyload: true,
        gutter: 0,
        mode: 'carousel',
        controlsContainer: "#custom-control",

    });
</script>
<script>
    // EVENT 
    const sliderTesti = tns({
        container: '.voic-sucess-slider-home',
        loop: true,
        slideBy: 'page',
        nav: false,
        speed: 400,
        autoplayButtonOutput: false,
        mouseDrag: true,
        lazyload: true,
        mode: 'carousel',
        controlsContainer: "#custom-control-tstm",
        responsive: {
            640: {
                items: 1,
                gutter: 20,
            },

            768: {
                items: 2
            }
        }
    });
</script>
<script>
    // EVENT 
    const sliderTvideo = tns({
        container: '.video-sucess-home',
        loop: true,
        items: 1,
        slideBy: 'page',
        nav: false,
        speed: 400,
        autoplayButtonOutput: false,
        mouseDrag: true,
        lazyload: true,
        mode: 'carousel',
        controlsContainer: "#custom-control-video",
      
    });
</script>

<script>
    // EVENT 
    const sliderEvent = tns({
        container: '.event-slider',
        loop: true,
        items: 2,
        slideBy: 'page',
        nav: false,
        speed: 400,
        autoplayButtonOutput: false,
        mouseDrag: true,
        lazyload: true,
        mode: 'carousel',
        controlsContainer: "#customize-controls",
        responsive: {
            640: {
                items: 1,
                gutter: 20,
            },

            768: {
                items: 2
            }
        }
    });
</script>
<script>
    // Our Business Slider
    let visionSlider = document.querySelector(".sucess-slide");
    if (visionSlider) {
        var slider = tns({
            container: visionSlider,
            items: 1,
            slideBy: "page",
            autoplay: true,
            autoplayButtonOutput: false,
            controls: false,
            nav: true,
            navPosition: 'bottom',
            navClass: 'success-nav',
            navAsThumbnails: 'true',
            autoplayTimeout: 3000,
            mode: 'gallery',
            speed: 1800,
            responsive: {
                640: {
                    items: 1,
                    controls: false,
                    nav: true,
                },

                768: {
                    items: 1
                }
            }
        });
    }

    setTimeout(() => {
        const navContainer = document.querySelector('.tns-nav');
        if (navContainer) {
            navContainer.classList.add('success-nav'); // 👈 Add your class here
        }
    }, 100);



</script>
<script>


    const tabBtns = document.querySelectorAll(".tabbtn");

    const tabImage = document.getElementById("tabImage");
    const tabSource = document.getElementById("tabSource");
    const tabHeading = document.getElementById("tabHeading");
    const tabCities = document.getElementById("tabCities");
    const tabBgImage = document.getElementById("tabBgImage");
    const pIndia = document.getElementById("pIndia");
    let previousTabKey = null;

    tabBtns.forEach((tabBtn) => {
        tabBtn.addEventListener("click", () => {
            const tabKey = tabBtn.getAttribute("data-tabopen");
            const data = tabData[tabKey];
            // Add new class
            tabBgImage.classList.add(tabKey);

            tabBgImage.src = data.desktop;

            // tabBgImage.classList.add(tabKey);
            if (previousTabKey) {
                tabBgImage.classList.remove(previousTabKey);
            }


            // Update the previousTabKey
            previousTabKey = tabKey;
            if (tabKey === 'tab6') {
                // Add CSS class when tab2 is active
                pIndia.classList.remove("hidden");
            } else {
                pIndia.classList.add("hidden");
            }

            // Update images
            // tabSource.srcset = data.desktop;
            // tabImage.src = data.mobile;

            // // Update heading
            tabHeading.textContent = data.heading;

            // Update sub-text if present
            // if (data.cities) {
            //   tabCities.textContent = data.cities;
            //   tabCities.classList.remove("hidden");
            // } else {
            //   tabCities.classList.add("hidden");
            // }

            // Update tab button styles
            tabBtns.forEach((btn) => {
                btn.className =
                    "tabbtn border-b-2 border-purple-600 px-2 py-1 cursor-pointer";
            });
            tabBtn.className =
                "tabbtn font-medium border-t-2 border-r-2 border-l-2 border-purple-600 px-2 py-1 text-purple-700 cursor-pointer active";
        });
    });

</script>
<script>
  function startCountdown(targetDate) {
      let timerInterval;

      function updateTimer() {
        const now = new Date().getTime();
        const timeLeft = targetDate - now;

        if (timeLeft <= 0) {
          document.getElementById("timer").innerHTML = "Registration closed!";
          clearInterval(timerInterval); // Now we can access timerInterval
          return;
        }

        const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days + "<br><span class='block'>Days</span>";
        document.getElementById("hours").innerHTML = hours + "<br><span class='block'>Hours</span>";
        document.getElementById("minutes").innerHTML = minutes + "<br><span class='block'>Minutes</span>";
        document.getElementById("seconds").innerHTML = seconds + "<br><span class='block'>Seconds</span>";
      }

      updateTimer();
      timerInterval = setInterval(updateTimer, 1000); // Now we can safely assign timerInterval
    }

    // Set your target date (YYYY, MM (0-based), DD, HH, MM, SS)
    document.addEventListener("DOMContentLoaded", function() {
      const upcomingeventdate = document.querySelector('#upcomingeventdate').value;

      if (upcomingeventdate) {
        const [day, month, year] = upcomingeventdate.split('.').map(Number); // Split by '.' and convert to numbers
        const countdownDate = new Date(year, month - 1, day, 0, 0, 0).getTime(); // Month is zero-based
        
        startCountdown(countdownDate);
      } else {
        console.error('Date input is empty or not found');
      }
    });

</script>
@endpush