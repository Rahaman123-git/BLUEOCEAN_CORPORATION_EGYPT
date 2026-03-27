@extends('layouts.frontend.app')
@section('title', ($pageSetting->page_title ?? ''))
@section('meta-description', ($pageSetting->meta_details ?? ''))

@push('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style-javinGlobal.css') }}" />
@endpush

@section('content')
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
            <h1 class="hero-banner-heading font-light fixt-top">
              <span class="block font-light">Synergizing Innovation</span>
              Connecting Possibilities
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

  <!-- <section class="banner_block banner-custom">
    <div class="banner_image relative">
      <picture>
        <source media="(max-width:770px)" srcset="{{ asset('assets/frontend/images/Top-banner-image.png') }}" />
        <img src="{{ asset('assets/frontend/images/hero-banner.svg') }}" alt="banner image" class="w-full banner-img" />
      </picture>
      <div class="banner_content absolute w-full top-0 h-full">
        <div class="container h-full">
          <div class="grid-cols-12 h-full">
            <div class="flex justify-end items-center lg:items-end h-full">
              <h1 class="banner_text text-white text-left font-light">
                <span class="block">Synergizing Innovation</span>
                Connecting Possibilities
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Home About Block -->
  @if(isset($upcomingConference) && !empty($upcomingConference))
    <section class="about_block relative secondSection-page">
      <a href="{{ route('conferences.upcoming.event', $upcomingConference->slug) }}" class="strip-link">
        <div class="ipsc_stripe absolute banner-bottom-strip ipsc-new-bg">
          <!-- <img src="{{ asset('assets/frontend/images/ipsc-text-gradent.png') }}" alt="" class="w-full h-auto" /> -->
          <div class="flex ipsc-cont-strip">
            <div>
              <img src="{{ asset('assets/frontend/images/ipsc_hover.svg') }}" alt="" />
            </div>
            @php
              $conferenceYear = \Carbon\Carbon::createFromFormat('d.m.Y', $upcomingConference->event_date)->year;
            @endphp
            <div class="strip-text">{{ $upcomingConference->event_category }} <span>{{ $conferenceYear }}</span></div>
          </div>
        </div>
      </a>
      <div class="diveder_angle absolute confrance-leftangle">
        <img src="{{ asset('assets/frontend/images/con-bowld-img/devider_angle.png') }}" alt="" />
      </div>
      
      <section class="py-10 aboutSection-custom">
        <div class="container mx-auto px-4">
          <div class="custom-grid">
            <div class="about-content p-6 mb-6 md:mb-0">
              <div>
                <div class="flex flex-wrap items-center pt-6">
                  <div class="w-full flex flex-col sm:flex-row flex-wrap aboutsectionHeading">
                    <div class="header_text">
                      <h2 class="text-3xl font-bold">
                        <span class="block">Connecting Visionaries</span>
                        Through Engagement
                      </h2>
                    </div>
                    <div class="exprience_icon text-end pl-9">
                      <img src="{{ asset('assets/frontend/images/con-bowld-img/exprience_icon.svg') }}" alt="Exprience icon" class="w-full h-auto" />
                    </div>
                  </div>
                </div>

                <div class="sectionContent">
                  <p class="">
                    For over 28 years Blue Ocean Corporation has been a leading name in the training, consulting, and conference domain.
                  </p>
                  <p class="">
                    Blue Ocean Conferences brings together leaders, experts, and innovators from across the globe through our flagship events such as the International Procurement and Supply Chain Conference (IPSC), International Human Resource
                    Conference (IHRC), and Blue Ocean Women’s Leadership Development (BOWLD). These platforms create dynamic spaces for collaboration, knowledge sharing, and breakthrough thinking.

                    <strong></strong>.
                  </p>
                  <p class=""><strong>Blue Ocean Conferences brings together strong leadership and fosters the development of innovative ideas.</strong></p>
                  <div class="conference-image">
                    <img src="{{ asset('assets/frontend/images/newImages/conference-image-sm.png') }}" alt="triangle image" class="w-full h-auto for phone" />
                  </div>
                  <h4 class="confic-text">
                    Elevate Engagement -
                    <span class="block">Transformation Connections into Impact</span>
                  </h4>
                </div>
              </div>

              <div class="about-btn">
                <div class="">
                  <a href="https://blueoceancorporation.com/conferences/ipsc-2025" class="btn primary-btn bg-blue-600 text-white py-3 px-5 mt-3" contenteditable="false" style="cursor: pointer;">
                    Register Now <span><img src="https://blueoceancorporation.com/assets/frontend/images/icons/arrow-right.svg" alt="" /></span>
                  </a>
                </div>
              </div>
            </div>

            <div class="text-white p-6 rightaboutus">
              <div class="triangleImage">
                <img src="{{ asset('assets/frontend/images/newImages/confarence_about.png') }}" alt="triangle image" class="w-full h-auto for desktop" />
              </div>
            </div>
          </div>
        </div>
      </section>

      @if(isset($upcomingConference) && !empty($upcomingConference))
        <div class="container-fluid g-0 mx-auto upcoming-event-custom">
          <div class="flex flex-wrap items-center">
            <div class="lg:w-1/2 flex flex- w-full upcoming-event-ads">
              <!-- <div class="ipsc-date flex flex-wrap w-full items-center">
                <div class="pl-4 py-10 pe-10 ipsc_date-details p-4 conforence-event-left">
                  <img src="{{ asset('assets/frontend/images/con-bowld-img/IPSC2026.svg') }}" alt="" />
                  <div class="flex flex-wrap items-center">
                    <div class="col-md-6 col-6 w-1/2">
                      <div class="confrance_date text-center">
                        <p>Date:</p>
                        <h2 class="fixed-date text-3xl font-bold">12<sup>th</sup></h2>
                        <p class="text-uppercase">April 2025</p>
                      </div>
                    </div>
                    <div class="col-md-6 col-6 w-1/2">
                      <div class="confrance_date text-center">
                        <p>Venue:</p>
                        <h2 class="fixed-date text-3xl font-bold">W</h2>
                        <p class="text-uppercase">Dubai THE PALM</p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="pt-4 ipsc_coundown conforence-event-right">
                  <h4 class="elevate_text mb-2">
                    <span>
                      Redefining Global Trade:<br />
                      UAE Shaping Sustainable Supply <br />
                      Chains for Future
                    </span>
                  </h4>
                  <p class="para_two text-dark mb-2 text-lg text-gray-700">Digital Driven Sustainably Committed</p>
                  <div class="red_flag_box flex items-center">
                    <div class="flag_img">
                      <img src="{{ asset('assets/frontend/images/con-bowld-img/red-flag.png') }}" alt="" />
                    </div>
                    <div class="chief-guest">
                      <p>Chief Guest and Patron</p>
                      <h4 class="mb-1">His Excellency</h4>
                      <h4 class="uppercase">
                        Seikh Nahayan bin <br />
                        Mabarak AI Nahyan
                      </h4>
                    </div>
                  </div>
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

                  <a href="#" class="btn primary-btn bg-blue-600 text-white py-2 px-4 mt-3">
                    Get in Touch <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
                  </a>
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
                      <div class="event-timer">
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
                  
            <div class="lg:w-1/2 w-full">
              <div class="opportunity">
                <div class="header_text">
                  <h2 class=""><span>Our Flagship </span> Conferences</h2>
                  <p class="para_three mt-3 text-lg">Bring together global industry leaders, policy-makers, and innovators from top organizations</p>
                  <p class="para_three mt-4 text-lg last">
                    Feature powerful keynote addresses by high-impact voices shaping the future
                  </p>
                  <p class="para_three mt-4 text-lg last">
                    Include expert-led panel discussions offering diverse, cross-industry perspectives
                  </p>
                  <p class="para_three mt-4 text-lg last">
                    Showcase real-world case studies focused on practical solutions and proven strategies
                  </p>
                </div>

                <!-- <div class="header_text">
                  <h2 class=""><span>Our Flagship and</span> Opportunities</h2>
                  <p class="para_three mt-3 text-lg">Our dynamic platforms and conferences are spaces where
                    thought leaders, innovators, and decision-makers converge, weaving the future through
                    collaboration and dialogue.</p>
                  <h4 class="confic-text-small">
                    When ideas illuminate like currents of transformation, sparking the new paradigms and
                    possibilities.
                  </h4>
                  <p class="para_three mt-4 text-lg last">
                    In this shared realm, visionaries unite, guiding the evolution of industries with collective
                    wisdom. Together, we forge the path to a future where innovation is not just imagined, but
                    realized in harmony.
                  </p>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <input type="hidden" id="upcomingeventdate" value="{{ $upcomingConference->event_date }}">
      @endif

      <div class="right_bottom_angle">
        <img src="{{ asset('assets/frontend/images/con-bowld-img//right_conferance_about.png') }}" alt="angle" />
      </div>
    </section>
  @endif

  <section class="expertise_block relative expertise-custom">
    <div class="expertise_top_angle">
      <img src="{{ asset('/assets/frontend/images/newImages/expertise_top_polygon.png') }}" alt="top angle" />
    </div>
    <div class="container mx-auto">
      <div class="flex flex-wrap items-center">
        <div class="w-full">
          <div class="expertish_text py-4">
            <h2 class="text-white mb-5">Expertise That Drives Impact</h2>
            <div class="flex flex-wrap lg:flex-nowrap">
              <div class="w-full mb-6 md:w-1/3 expt-righttt">
                <h4 class="text-white mb-2 mt-4">Connecting People</h4>
                <p class="text-white">Facilitating meaningful interactions that strengthen partnerships and encourage collaboration across industries.</p>
              </div>
              <div class="w-full mb-6 px-0 lg:px-6 md:w-1/3 expt-righttt">
                <h4 class="text-white mb-2 mt-4">Empowering Change Management</h4>
                <p class="text-white">We provide practical guidance and tools that help organizations embrace change and transform challenges into opportunities.</p>
              </div>
              <div class="w-full mb-6 md:w-1/3 expt-righttt">
                <h4 class="text-white mb-2 mt-4">Leveraging Technology</h4>
                <p class="text-white">Sharing expert knowledge on adopting innovative technologies to improve business performance and stay competitive.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="expertise_bottom_angle">
      <img src="{{ asset('/assets/frontend/images/newImages/expertise_bottom_angle.png') }}" alt="angle" />
    </div>
  </section>

  {{-- Transfering Trough Innocation - Content --}}
  @php
    $cards = [
      [
        'title' => 'Illuminating the Future of Supply Chain – Transforming Complexity into Opportunity.',
        'img' => 'IPSC2026.svg',
        'route' => route('conferences.ipsc'),
        'alt' => 'IPSC',
        'color' => 'text-blue-600',
        'bg' => 'linear-gradient(270deg, #0340CE 0%, #01B3F8 100%)',
      ],
      [
        'title' => 'Reframing the Workforce – Empowering People, Driving Change.',
        'img' => 'IHRC.svg',
        'route' => route('conferences.ihrc'),
        'alt' => 'IHRC',
        'color' => 'text-green-600',
        'bg' => 'linear-gradient(40deg, rgba(170, 207, 58, 1) 0%, rgb(62, 114, 248) 65%)',
      ],
      [
        'title' => 'Refracting Challenges into Strategies – Balancing Resilience & Sustainability in Supply Chains.',
        'img' => 'CXO-round table.svg',
        'route' => route('conferences.cxo'),
        'alt' => 'CXO',
        'color' => 'text-cyan-600',
        'bg' => 'linear-gradient(61deg, rgba(26, 187, 188, 1) 0%, rgba(0, 172, 173, 1) 65%)',
      ],
      [
        'title' => 'A Spectrum of Strength – Inspiring Women, Igniting Leadership.',
        'img' => 'BOWLD-1.svg',
        'route' => route('conferences.bowld'),
        'alt' => 'BOWLD',
        'color' => 'text-pink-600',
        'bg' => 'linear-gradient(61deg, rgba(235, 0, 139, 1) 0%, rgba(71, 3, 135, 1) 65%)',
      ],
    ];
  @endphp
  {{-- Transfering Trough Innocation - Content --}}

  <section class="inovation overflow-hidden inovation-custom transformInovation-Section">
    <div class="container mx-auto">
      <div class="flex flex-wrap">
        <div class="expertish_text">
          <div class="header_text py-5">
            <h2><span>Transforming through </span>Innovation</h2>
            <p class="mt-4 text-xl">
              Our conferences are global platforms for thought leadership, collaboration, and innovation. By bringing together industry leaders, visionaries, and change-makers, we create opportunities for knowledge-sharing, networking, and
              actionable insights.
            </p>
          </div>
        </div>
      </div>
   
     
    <div class="inovation-custom-lg flex flex-wrap">
      <div class="hover-image mb-4">
        <div class="inovation_logo relative">
          <img src="{{ asset('assets/frontend/images/con-bowld-img/IPSC2026.svg') }}" alt="" class="w-full main-logo" />
          <div class="inovation-hover flex items-center inovation-hover-two">
            <div class="inv_hov-image">
              <img src="{{ asset('assets/frontend/images/con-bowld-img/ipsc_hover.svg') }}" alt="" class="w-full" />
            </div>
            <div class="inv_hov-text">
              <div class="header_text py-3">
                <h2 class="text-white">
                  <span class="text-white font-normal">Connecting Global – <br /></span> Supply Chain Leaders.
                </h2>
              </div>
              <a href="{{ route('conferences.ipsc') }}" class="btn btn_theme btn_text success-btn text-white">
                Explore More<span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="hover-image mb-4">
        <div class="inovation_logo relative gradent-two">
          <img src="{{ asset('assets/frontend/images/con-bowld-img/IHRC.svg') }}" alt="" class="w-full main-logo"/>
          <div class="inovation-hover flex items-center">
            <div class="inv_hov-image">
              <img src="{{ asset('assets/frontend/images/con-bowld-img/IHRC-hover.svg') }}" alt="" class="w-full"/>
            </div>
            <div class="inv_hov-text">
              <div class="header_text py-3">
                <h2 class="text-white"><span class="text-white">Connecting  Strategic –</br></span>HR Leaders</h2>
              </div>
              <a href="{{ route('conferences.ihrc') }}" class="btn btn_theme btn_text success-btn text-white">Explore More
                <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt=""/></span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="hover-image mb-4">
        <div class="inovation_logo relative gradent-three">
          <img src="{{ asset('assets/frontend/images/con-bowld-img/CXO-round table.svg') }}" alt="" class="w-full main-logo" />
          <div class="inovation-hover flex items-center inovation-hover-three">
            <div class="inv_hov-image">
              <img src="{{ asset('assets/frontend/images/con-bowld-img/cxo_white.svg') }}" alt="" class="w-full" />
            </div>
            <div class="inv_hov-text">
              <div class="header_text py-3">
                <h2 class="text-white">
                  <span class="text-white">Connecting Visionary <br /> </span>C-suite Leaders
                </h2>
              </div>
              <a href="{{ route('conferences.cxo') }}" class="btn btn_theme btn_text success-btn text-white">
                Explore More<span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="hover-image mb-4 bottom-content">
        <div class="inovation_logo relative gradent-four">
          <img src="{{ asset('assets/frontend/images/con-bowld-img/BOWLD-1.svg') }}" alt="" class="main-logo" />
          <div class="inovation-hover inovation-bottom flex items-center inovation-hover-four">
            <div class="inv_hov-image">
              <img src="{{ asset('assets/frontend/images/con-bowld-img/WD-white.svg') }}" alt="" class="" />
            </div>
            <div class="inv_hov-text">
              <div class="header_text py-1">
                <h2 class="text-white">
                  <span class="text-white">Connecting Influential –<br /> </span>Women Leaders
                </h2>
              </div>
              <a href="{{ route('conferences.bowld') }}" class="btn btn_theme btn_text success-btn text-white">
                Explore More<span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>
    {{-------------------------------- After 480px --------------------------------}}
    <div class="inovation-custom-sm static-section overflow-hidden py-10">
      <div class="">
        <div class="flex flex-wrap justify-center gap-6">
          @foreach($cards as $card)
          <div class="static-card shadow p-1 text-center w-[300px]" style="background: {{ $card['bg'] }}">
            <div class="img-box flex">
              <img src="{{ asset('assets/frontend/images/con-bowld-img/' . $card['img']) }}" alt="{{ $card['alt'] }}" class="mx-auto mb-4 max-h-[100px]" />
            </div>

            <div class="content-div text-start">
              <h2 class="font-normal text-white mb-2 leading-snug text-[24px]">
                @php $parts = explode('–', $card['title']); @endphp {{ $parts[0] }} @if(isset($parts[1])) – <span class="font-medium">{{ $parts[1] }}</span>
                @endif
              </h2>

              <a href="{{ $card['route'] }}" class="inline-flex text-white items-center font-bold {{ $card['color'] }} mt-2 text-[24px]">
                Explore More
                <img class="ml-4" src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" />
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    {{-------------------------------- After 480px --------------------------------}}
  </section>

  <section class="home_slider relative signature-event">
    <div class="signature_right">
      <img src="{{ asset('assets/frontend/images/con-bowld-img/sighature_right.png') }}" alt="" />
    </div>
    <div class="container mx-auto">
      <div class="flex flex-wrap">
        <div class="w-full">
          <div class="header_text sectionHeading-custom">
            <h2 class="font-fourty">
              <span>Join the Global Movement -</span>
              Our Signature Event
            </h2>
          </div>
        </div>
      </div>
    </div>

    @if(isset($conferenceCategories) && count($conferenceCategories))
      <div class="slider-conf relative pb-8 conferance-slid hideOnMobile">
        <div class="signatureevent-slider signatureMovement-custom">
          @foreach($conferenceCategories as $cCategory)
            <div class="slider-item">
              <div class="silder_img">
                <div class="TriangleBox">
                  <img src="{{ asset('assets/frontend/images/con-bowld-img/Triangel Graphic.png') }}" alt="" class="graphic-angle triangle-customImage" />
                </div>
                <img src="{{ asset('storage/conferences/category/'.$cCategory->category_banner) }}" class="block w-full slider-twoimage" alt="..." />
              </div>
              <div class="triangle-gradient absolute signature_angle-content gradent-confrence">
                <div class="gradent_content">
                  <div class="logoContent">
                    <img src="{{ asset('storage/conferences/category/'.$cCategory->category_logo) }}" alt="" />
                  </div>
                  <h3 class="mt-4">{{ $cCategory->category_title }}</h3>
                  @php
                    $categoryDetails = extractHtmlContent($cCategory->category_details);
                  @endphp
                  @if($categoryDetails['uppertext'])
                    <p class="text-dark mt-3 font-medium leading-1">{{ $categoryDetails['uppertext'] }}</p>
                  @endif
                  @if(count($categoryDetails['bulletpoints']))
                    <ul class="mt-3 list-disc pl-8">
                      @foreach($categoryDetails['bulletpoints'] as $bulletpoint)
                        <li>{{ $bulletpoint }}</li>
                      @endforeach
                    </ul>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <ul class="controls certificate-arrow home-certificate-slide flex" id="custom-signatureEvent" aria-label="Carousel Navigation" tabindex="0">
          <li class="prev mr-2" data-controls="prev" aria-controls="tns2" tabindex="-1">
            <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
          </li>
          <li class="next" data-controls="next" aria-controls="tns2" tabindex="-1">
            <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
          </li>
        </ul>
      </div>

      {{------------------------------------------ Start Mobile slider ------------------------------------------}}
      <div class="SignatrueEvent-mobile showOnMobile">
        <div class="container mx-auto">
          <div class="signatureEventSlider">
            @foreach($conferenceCategories as $cCategory)
              <div class="slider-item">
                <div class="signatureEvent-image">
                  <div class="trigangleImage">
                    <img src="{{ asset('assets/frontend/images/newImages/mobileSignatrueEventTriangle.png') }}" class="block w-full" alt="Triangle" />
                    <div class="icon">
                      <img src="{{ asset('storage/conferences/category/'.$cCategory->category_logo) }}" alt="Icon" />
                    </div>
                  </div>
                  <img src="{{ asset('storage/conferences/category/'.$cCategory->category_banner) }}" class="block w-full" alt="Main Slide" />
                </div>
                <div class="content-slider">
                  <h3 class="mt-4">{{ $cCategory->category_title }}</h3>
                  @php
                    $categoryDetails = extractHtmlContent($cCategory->category_details);
                  @endphp
                  @if($categoryDetails['uppertext'])
                    <p class="text-dark mt-3 font-medium leading-1">{{ $categoryDetails['uppertext'] }}</p>
                  @endif
                  @if(count($categoryDetails['bulletpoints']))
                    <ul class="mt-3 list-disc pl-8">
                      @foreach($categoryDetails['bulletpoints'] as $bulletpoint)
                        <li>{{ $bulletpoint }}</li>
                      @endforeach
                    </ul>
                  @endif
                </div>
              </div>
            @endforeach
          </div>

          <!-- Arrow Controls -->
          <ul class="controls certificate-arrow home-certificate-slide flex justify-center" id="custom-controlSignature" aria-label="Carousel Navigation">
            <li class="prev mr-2" data-controls="prev">
              <span>
                <img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="Previous" />
              </span>
            </li>
            <li class="next" data-controls="next">
              <span>
                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="Next" />
              </span>
            </li>
          </ul>
        </div>
      </div>
      {{------------------------------------------ End Mobile slider ------------------------------------------}}
    @endif
    {{-- <div class="right_blue_arrow "></div> --}}
  </section>

  <section class="exporreSection">
    <div class="container mx-auto mt-12">
      <div class="row flex flex-wrap">
        <div class="expertish_text explore-custom">
          <div class="explore_box explore_opportunities">
            <h4 class="ft-size-24">
              Explore limitless opportunities with
              <span class="impect_text ft-size-24">Blue Ocean Corporation</span>
              where transformation meets innovation.
            </h4>
            <div class="mt-2">
              <a href="#" class="btn btn_theme btn_text success-btn font-bold">
                View all Conferences<span> <img src="{{ asset('assets/frontend/images/consulting/arrow-right-blue.webp') }}" alt="" /></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=" amliplifySecton sponsor_benefit relative sectionTitleSize">
    <div class="container mx-auto">
      <div class="row flex flex-wrap">
        <div class="expertish_text w-full">
          <div class="header_text">
            <h2 class="mb-2">
              <span class="block">
                Enhance Your Brand Visibility
              </span>
            </h2>
          </div>
        </div>
      </div>
      <div class="row flex flex-wrap">
        <div class="w-full">
          <div class="text_hover_box relative overflow-hidden">
            <div class="img-hover_box">
              <img src="{{ asset('assets/frontend/images/con-bowld-img/hover-one.jpg') }}" alt="" />
              <img src="{{ asset('assets/frontend/images/con-bowld-img/hover-two.jpg') }}" alt="" class="hover-image" />
            </div>
            <div class="hover_text" style="display: none;">
              <h2>Be Seen. Be Heard. Be Transformative</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container mx-auto sponsershipSlider-desktop ">
      <div class="row flex flex-wrap">
        <div class="lg:w-2/3 w-full">
          <div class="benefit_content mt-4 sectionTitleSize">
            <h2>Sponsorship Benefits</h2>
            <!-- <div class="list-benefit mt-3">
              <ul class="flex list-none m-0">
                <li class="benefit-item" data-target="#benefit-1">
                  Exclusive <br />
                  Branding Opportunities
                </li>
                <li class="benefit-item" data-target="#benefit-2">
                  Networking<br />
                  Access
                </li>
                <li class="benefit-item" data-target="#benefit-3">
                  Thought<br />
                  Leadership
                </li>
                <li class="benefit-item" data-target="#benefit-4">
                  Custom<br />
                  Packages
                </li>
              </ul>
              <div id="benefit-1" class="benefit-box">
                <p>Exclusive Branding Opportunities Networking Access Thought Leadership Custom Packages Maximize your brand’s visibility and impact through event and site branding and exposure on digital platforms.</p>
              </div>
              <div id="benefit-2" class="benefit-box">
                <p>Gain access to keynote sessions, panel discussions, and workshops.</p>
              </div>
              <div id="benefit-3" class="benefit-box">
                <p>Gain access to keynote sessions, panel discussions, and workshops.</p>
              </div>
              <div id="benefit-4" class="benefit-box">
                <p>
                  Benefit from customized sponsorship packages that align with your brand’s goals, ensuring maximum impact and targeted engagement.
                </p>
              </div>
            </div> -->

            <div class="list-benefit befinift-custom mt-3">
              <ul class="flex list-none m-0">
                <li class="benefit-item" data-target="#benefit-1" onclick="toggleBenefit(1)">
                  Exclusive <br />
                  Branding Opportunities
                </li>
                <li class="benefit-item" data-target="#benefit-2" onclick="toggleBenefit(2)">
                  Networking<br />
                  Access
                </li>
                <li class="benefit-item" data-target="#benefit-3" onclick="toggleBenefit(3)">
                  Thought<br />
                  Leadership
                </li>
                <li class="benefit-item" data-target="#benefit-4" onclick="toggleBenefit(4)">
                  Custom<br />
                  Packages
                </li>
              </ul>
              <div id="benefit-1" class="benefit-box">
                <p>Maximize your brand’s visibility and impact through event and site branding and exposure on digital platforms.</p>
              </div>
              <div id="benefit-2" class="benefit-box">
                <p>Gain access to key note sessions, panel discussions and workshops.</p>
              </div>
              <div id="benefit-3" class="benefit-box">
                <p>Gain access to key note sessions, panel discussions and workshops.</p>
              </div>
              <div id="benefit-4" class="benefit-box">
                <p>Benefit from customized sponsorship packages that align with your brand’s goals, ensuring maximum impact and targeted engagement.</p>
              </div>
            </div>

            <div class="partenerWithUs-desktop">
              <h3 class="impect_text mt-5">
              <span>Partner with Us! </span><br />
              <div class="mt-2 mt-lg-5 text-center md:text-left">
                <a href="#" class="btn primary-btn bg-blue-600 text-white py-2 px-4">
                  Enquiry Now
                  <span>
                    <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt=""/>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @php
      $sponsorships = [
        [
          'title' => 'Exclusive <br> Branding Opportunities',
          'description' => 'Maximize your brand’s visibility and impact through event and site branding and exposure on digital platforms.',
        ],
        [
          'title' => 'Networking <br> Access',
          'description' => 'Gain access to key note sessions, panel discussions and workshops.',
        ],
        [
          'title' => 'Thought <br> Leadership',
          'description' => 'Gain access to key note sessions, panel discussions and workshops.',
        ],
        [
          'title' => 'Custom <br> Packages',
          'description' => 'Benefit from customized sponsorship packages that align with your brand’s goals, ensuring maximum impact and targeted engagement.',
        ],
        // Add as many as needed...
      ];
    @endphp

    {{---------------------- Start Sponsership Benifit mobile ----------------------}}
    <div class="sponsershipSlider-mobile mt-8 showOnMobile">
      <div class="container mx-auto">
        <div class="sectionTitle-blueocean">
          <h2>Sponsorship <span>Benefits</span></h2>
        </div>

        <div class="slider-container cert-slide-content two">
          <div class="sponsershipSlider">
            @foreach($sponsorships as $item)
            <div class="slider-item">
              <div class="sponshipBox">
                <div class="upperText">
                  <h4>{!! $item['title'] !!}</h4>
                </div>
                <div class="contentLower">
                  <p>{{ $item['description'] }}</p>
                </div>
              </div>
            </div>
            @endforeach
          </div>

          <!-- Arrow Controls -->
          <ul class="controls certificate-arrow home-certificate-slide flex sponsershipSlideButton" id="custom-control" aria-label="Carousel Navigation">
            <li class="prev mr-2" data-controls="prev">
              <span><img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-left.svg" alt="Previous" /></span>
            </li>
            <li class="next" data-controls="next">
              <span><img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-right.svg" alt="Next" /></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    {{---------------------- End Sponsership Benifit mobile ----------------------}}

    <div class="partenerWithUs-mobile mt-24 pt-8">
      <div class="container mx-auto">
        <div class="sectionTitle-blueocean mb-2">
          <h2>Partner with Us & <span class="block">Shape up the Future - </span></h2>
        </div>
        <div>
          <img src="{{ asset('assets/frontend/images/newImages/partner-withusMobile.png') }}" alt="" />
        </div>

        <div class="sectionTitle-blueocean two">
          <h2>
            Become a sponsor today!
          </h2>

          <div>
            <a href="http://127.0.0.1:8000/conferences/awards" class="btn primary-btn bg-blue-600 text-white py-2 px-4 margin-bottom- mt-4" contenteditable="false" style="cursor: pointer;">
              Sponsorship Enquiry
              <span>
                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" />
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="right_man_angel absolute">
      <img src="{{ asset('assets/frontend/images/con-bowld-img/right_man-angel.png') }}" alt="" class="img-fluid" />
      <div class="hover-right-angle">
        <img src="{{ asset('assets/frontend/images/con-bowld-img/hover-two.jpg') }}" alt="" />
      </div>
    </div>
  </section>

  <!-- Bridging Block-->
  <section class="create-impact position-relative video_conferance blue-traingle-none videoconference-custom">
    <div class="shapeCorner">
      <img src="{{ asset('assets/frontend/images/newImages/bluetiangleshape.png') }}" alt="" />
    </div>

    <div class="diveder_angle">
      <img src="{{ asset('assets/frontend/images/con-bowld-img/devider_angle.png') }}" alt="" />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="header_text impact-left">
            <h2>
              Ready to Create an Impact?
            </h2>
            <h4 class="test"><span class="d-block">Let’s Turn Possibilities into Progress</span></h4>
          </div>
          <div class="ratio ratio-16x9 mt-3 overflow-hidden">
            <!-- <video autoplay muted loop class="" controls height="" width="">
              <source src="{{ asset('assets/frontend/images/about-video.mp4') }}" type="video/mp4">
              <source src="{{ asset('assets/frontend/images/about-video.ogg') }}" type="video/ogg">
              <source src="{{ asset('assets/frontend/images/con-bowld-img/video_file.mp4') }}" type="video/mp4" class="object-fit-contain w-full" autoplay>
              Your browser does not support the video tag.
            </video> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="conference-video">
    <div class="container px-0">
      <video autoplay muted loop class="video-wrapper" controls height="" width="">
        <source src="{{ asset('assets/frontend/images/ipsc-video/boc-hghlight.mp4') }}" type="video/mp4" />
        <source src="{{ asset('assets/frontend/images/about-video.ogg') }}" type="video/ogg" />
        <!-- <source src="{{ asset('assets/frontend/images/con-bowld-img/video_file.mp4') }}" type="video/mp4" class="object-fit-contain w-full" autoplay> -->
        Your browser does not support the video tag.
      </video>
    </div>
  </section>

  <section class="conference-video-mobile">
    <div class="container mx-auto">
      <video autoplay muted loop class="video-wrapper" controls height="" width="">
        <source src="{{ asset('assets/frontend/images/ipsc-video/boc-hghlight.mp4') }}" type="video/mp4" />
        <source src="{{ asset('assets/frontend/images/about-video.ogg') }}" type="video/ogg" />
        <!-- <source src="{{ asset('assets/frontend/images/con-bowld-img/video_file.mp4') }}" type="video/mp4" class="object-fit-contain w-full" autoplay> -->
        Your browser does not support the video tag.
      </video>
    </div>
  </section>

  <!-- Visionaries Block -->
  <section class="visionaries relative">
    <div class="container mx-auto">
      <div class="row flex flex-wrap items-center">
        <div class="w-full expertish_textt">
          <h3 class="impect_text mt-3 mt-c-20 ft-size-32">
            <span class="">Join Our</span><br />
            Upcoming global events!
          </h3>
          <div class="mb-xl-5 mb-5 mt-4 gap_mdf">
            <a href="#" class="btn primary-btn bg-blue-600 text-white py-2 px-4">
              Join<span> <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="blue_trangle_text slide_up-trngl videoTraiganle videoTrangle-Desktop">
      <h4>
        Insightful.<br />
        Impactful.<br />
        Inspiring.
      </h4>
    </div>
    <div class="videoTrangle-mobile">
      <div class="awardSection">
        <h2>Awards</h2>
        <div class="awards-Text">
          <h4>
            Precision.<br />
            Resilience.<br />
            Visionary.
          </h4>
        </div>
        <img src="{{ asset('assets/frontend/images/newImages/conference-awardSectionMobile.png') }}" alt="" />
      </div>
    </div>
  </section>
  
  <!-- AWARD Block -->
  <section class="award_block awardSection">
    <div class="container mx-auto">
      <div class="row flex flex-wrap awards-content">
        <div class="w-full">
          <div class="block_header mb-4 hideOnMobile">
            <h2>Rewards and Benefits</h2>
          </div>
        </div>
        <div class="w-full lg:w-1/3">
          <div class="left_award">
            <h3>Individual Award Categories</h3>
            <p class="site-text">Recognizing and celebrating exceptional talent and achievement by honoring outstanding contributions and excellence.</p>
          </div>
        </div>
        <div class="w-full lg:w-1/3 lg:ml-auto">
          <div class="left_award">
            <h3>Organization Award Categories</h3>
            <p class="site-text">Honoring organizational excellence that drives impactful achievements through innovative programs and strategies.</p>
          </div>
        </div>
      </div>
      
      <div class="row flex flex-wrap mt-16">
        <div class="w-full">
          <h4>Rewards & Benefits</h4>
        </div>
        <div class="w-full">
          <div class="reward_box relative">
            <div class="flex flex-wrap justify-between">
              <div class="md:w-1/2 w-full for-mobile-width">
                <ul class="list-disc">
                  <li class="font-medium">Inspirational Leader of the Year</li>
                  <li class="font-medium">Business Partner of the Year</li>
                  <li class="font-medium">Rising Star of the Year</li>
                </ul>
              </div>
              <div class="md:w-1/4 md:ml-auto w-full for-mobile-width">
                <ul class="list-disc">
                  <li class="font-medium">Outstanding Talent Management Strategy</li>
                  <li class="font-medium">Best Women Development & Leadership Programme</li>
                  <li class="font-medium">Best Employee Support Strategy</li>
                </ul>
              </div>
            </div>
            
            <div class="award_image absolute ">
              <img src="{{ asset('assets/frontend/images/con-bowld-img/award_image.png') }}" alt="" class="img-fluid hideOnMobile" />
              <div class="hideOnMobile">
                <a href={{ route('conferences.awards') }} class="btn primary-btn bg-blue-600 text-white py-2 px-4 margin-bottom- mt-8 ">
                  Register Now
                  <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
                </a>
              </div>
            </div>
          </div>

          <div class="showOnMobile">
            <a href={{ route('conferences.awards') }} class="btn primary-btn bg-blue-600 text-white py-2 px-4 margin-bottom- mt-4 ">
              Register Now
              <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
            </a>
          </div>
        </div>
      </div>
      <div class="text-center w-full pt-7"></div>
    </div>
  </section>

  <section class="sponsor p-0 overflow-hidden sponser-padding home-sponser gobalFootPrintSection">
    <div class="container mx-auto">
      <div class="marquee-container">
        <div class="header_text py-5">
          <h2 class="ft-size-32">
            <span class="ft-size-32">Global Footprints Section-</span><br />
            Conferences thats make an Impact.
          </h2>
        </div>
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
        </div>
      </div>
    </div>
  </section>

  <section class="wrold-map world-map-custom">
    <div class="container mx-auto px-4">
      <div class="hideOnMobile">
        <ul
          class="flex flex-wrap -mb-px text-sm font-medium text-center"
          id="default-styled-tab"
          data-tabs-toggle="#default-styled-tab-content"
          data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
          data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
          role="tablist"
        >
          <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">IPSC</button>
          </li>
          <li class="me-2" role="presentation">
            <button
              class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
              id="dashboard-styled-tab"
              data-tabs-target="#styled-dashboard"
              type="button"
              role="tab"
              aria-controls="dashboard"
              aria-selected="false"
            >
              IHRC
            </button>
          </li>
          <li class="me-2" role="presentation">
            <button
              class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
              id="settings-styled-tab"
              data-tabs-target="#styled-settings"
              type="button"
              role="tab"
              aria-controls="settings"
              aria-selected="false"
            >
              BOWLD
            </button>
          </li>
          <li role="presentation">
            <button
              class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
              id="contacts-styled-tab"
              data-tabs-target="#styled-contacts"
              type="button"
              role="tab"
              aria-controls="contacts"
              aria-selected="false"
            >
              COX
            </button>
          </li>
        </ul>
      </div>

      @php
        $slider1 = [
          [ 'img' => 'ipsc-riyadh.png', 'alt' => 'Riyadh Map' ],
          [ 'img' => 'ipsc-abu-dhabi.png', 'alt' => 'Abu Dhabi Map' ],
          [ 'img' => 'ipsc-dubai.png', 'alt' => 'Dubai Map' ],
          [ 'img' => 'ipsc-london.png', 'alt' => 'London Map' ],
          [ 'img' => 'ipsc-mumbai.png', 'alt' => 'Mumbai Map' ],
          [ 'img' => 'ipsc-qatab-map.png', 'alt' => 'Qatab Map' ],
        ];
                
        $slider2 = [
          [ 'img' => 'ihrc-dubai.png', 'alt' => 'IHRC Dubai' ],
        ];

        $slider3 = [
          [ 'img' => 'bowld-dubai.png', 'alt' => 'BOWLD Dubai' ],
        ];

        $slider4 = [
          [ 'img' => 'cxo-dubai.png', 'alt' => 'CXO Dubai' ],
        ];
      @endphp

      {{---------------------------------- Start Map Slider Mobile ----------------------------------}}
      <div class="mapSlider-mobile mt-8 showOnMobile">
        <div class="">
          {{-- Tabs --}}
          <div class="differ-slide-custom showOnMobile">
            <ul class="flex text-sm font-medium text-center my-3" id="default-styled-tab" role="tablist">
              <li class="flex-1 border-r border-gray-300 last:border-none" role="presentation">
                <button class="w-full inline-block rounded-t-lg text-gray-700 active" id="tab-ipsc" data-tabs-target="#content-ipsc" type="button" role="tab" aria-controls="content-ipsc" aria-selected="true">IPSC</button>
              </li>
              <li class="flex-1 border-r border-gray-300 last:border-none" role="presentation">
                <button class="w-full inline-block rounded-t-lg text-gray-700" id="tab-ihrc" data-tabs-target="#content-ihrc" type="button" role="tab" aria-controls="content-ihrc" aria-selected="false">IHRC</button>
              </li>
              <li class="flex-1 border-r border-gray-300 last:border-none" role="presentation">
                <button class="w-full inline-block rounded-t-lg text-gray-700" id="tab-bowld" data-tabs-target="#content-bowld" type="button" role="tab" aria-controls="content-bowld" aria-selected="false">BOWLD</button>
              </li>
              <li class="flex-1" role="presentation">
                <button class="w-full inline-block rounded-t-lg text-gray-700" id="tab-cox" data-tabs-target="#content-cox" type="button" role="tab" aria-controls="content-cox" aria-selected="false">COX</button>
              </li>
            </ul>
          </div>

          {{-- Tab Content --}}
          <div id="default-styled-tab-content">
            {{-- Tab 1 --}}
            <div id="content-ipsc" role="tabpanel" aria-labelledby="tab-ipsc">
              <div class="slider-container mt-4">
                <div class="my-slider" id="slider1">
                  @foreach($slider1 as $item)
                  <div class="slide">
                    <img src="{{ asset('assets/frontend/images/newImages/maps/' . $item['img']) }}" alt="{{ $item['alt'] }}" class="w-full h-auto object-contain" />
                  </div>
                  @endforeach
                </div>
                <ul class="map-slider-controls controls flex mt-4 justify-center" id="custom-control-slider1">
                  <li class="prev mr-2" data-controls="prev">
                    <img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-left.svg" alt="Previous" />
                  </li>
                  <li class="next" data-controls="next">
                    <img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-right.svg" alt="Next" />
                  </li>
                </ul>
              </div>
            </div>

            {{-- Tab 2 --}}
            <div id="content-ihrc" class="hidden" role="tabpanel" aria-labelledby="tab-ihrc">
              <div class="slider-container mt-4">
                <div class="my-slider" id="slider2">
                  @foreach($slider2 as $item)
                  <div class="slide">
                    <img src="{{ asset('assets/frontend/images/newImages/maps/' . $item['img']) }}" alt="{{ $item['alt'] }}" class="w-full h-auto object-contain" />
                  </div>
                  @endforeach
                </div>
                <ul class="map-slider-controls controls flex mt-4 justify-center" id="custom-control-slider2">
                  <li class="prev mr-2" data-controls="prev">
                    <img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-left.svg" alt="Previous" />
                  </li>
                  <li class="next" data-controls="next">
                    <img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-right.svg" alt="Next" />
                  </li>
                </ul>
              </div>
            </div>

            {{-- Tab 3 --}}
            <div id="content-bowld" class="hidden" role="tabpanel" aria-labelledby="tab-bowld">
              <div class="slider-container mt-4">
                <div class="my-slider" id="slider3">
                  @foreach($slider3 as $item)
                  <div class="slide">
                    <img src="{{ asset('assets/frontend/images/newImages/maps/' . $item['img']) }}" alt="{{ $item['alt'] }}" class="w-full h-auto object-contain" />
                  </div>
                  @endforeach
                </div>
                <ul class="map-slider-controls controls flex mt-4 justify-center" id="custom-control-slider3">
                  <li class="prev mr-2" data-controls="prev">
                    <img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-left.svg" alt="Previous" />
                  </li>
                  <li class="next" data-controls="next">
                    <img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-right.svg" alt="Next" />
                  </li>
                </ul>
              </div>
            </div>

            {{-- Tab 4 --}}
            <div id="content-cox" class="hidden" role="tabpanel" aria-labelledby="tab-cox">
              <div class="slider-container mt-4">
                <div class="my-slider" id="slider4">
                  @foreach($slider4 as $item)
                  <div class="slide">
                    <img src="{{ asset('assets/frontend/images/newImages/maps/' . $item['img']) }}" alt="{{ $item['alt'] }}" class="w-full h-auto object-contain" />
                  </div>
                  @endforeach
                </div>
                <ul class="map-slider-controls controls flex mt-4 justify-center" id="custom-control-slider4">
                  <li class="prev mr-2" data-controls="prev">
                    <img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-left.svg" alt="Previous" />
                  </li>
                  <li class="next" data-controls="next">
                    <img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-right.svg" alt="Next" />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{---------------------------------- End Map Slider Mobile ----------------------------------}}

      <div id="default-styled-tab-content hideOnMobile ">
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="map_details relative hideOnMobile">
            <img src="{{ asset('assets/frontend/images/con-bowld-img/Map.png') }}" alt="" class="w-full h-auto" />
            <div class="dubai-pin-image">
              <div class="dubai-image">
                <img src="{{ asset('assets/frontend/images/con-bowld-img/map_marker.png') }}" alt="" />
              </div>
              <div class="map-location_view">
                <a href="{{ route('conferences.ipsc.dubai.2014') }}">
                  <img src="{{ asset('assets/frontend/images/ipsc-confrances/IPSC Dubai (3).png') }}" alt="" class="w-full h-auto" />
                </a>
              </div>
            </div>
            <div class="dubai-two-pin-image">
              <div class="dubai-image">
                <img src="{{ asset('assets/frontend/images/con-bowld-img/map_marker.png') }}" alt="" />
              </div>
              <div class="map-location_view">
                <a href="{{ route('conferences.ipsc.abudhabi.2016') }}"> <img src="{{ asset('assets/frontend/images/ipsc-confrances/IPSC Dubai (4).png') }}" alt="" class="w-full h-auto" /></a>
              </div>
            </div>
            <div class="landan-pin-image">
              <div class="dubai-image">
                <img src="{{ asset('assets/frontend/images/con-bowld-img/map_marker.png') }}" alt="" />
              </div>
              <div class="map-location_view">
                <a href="{{ route('conferences.ipsc.london.2024') }}"> <img src="{{ asset('assets/frontend/images/ipsc-confrances/IPSC London.png') }}" alt="" class="w-full h-auto" /></a>
              </div>
            </div>
            <div class="quter-pin-image">
              <div class="dubai-image">
                <img src="{{ asset('assets/frontend/images/con-bowld-img/map_marker.png') }}" alt="" />
              </div>
              <div class="map-location_view">
                <a href="{{ route('conferences.ipsc.qatar.2014') }}"> <img src="{{ asset('assets/frontend/images/ipsc-confrances/IPSC Qatar map.png') }}" alt="" class="w-full h-auto" /></a>
              </div>
            </div>
            <div class="reiyadh-pin-image">
              <div class="dubai-image">
                <img src="{{ asset('assets/frontend/images/con-bowld-img/map_marker.png') }}" alt="" />
              </div>
              <div class="map-location_view">
                <a href="{{ route('conferences.ipsc.riyadh.2016') }}"><img src="{{ asset('assets/frontend/images/ipsc-confrances/IPSC Riyadh.png') }}" alt="" class="w-full h-auto" /></a>
              </div>
            </div>
            <div class="abudhabi-pin-image">
              <div class="dubai-image">
                <img src="{{ asset('assets/frontend/images/con-bowld-img/map_marker.png') }}" alt="" />
              </div>
              <div class="map-location_view">
                <a href="{{ route('conferences.ipsc.abudhabi.2016') }}"> 
                  <img src="{{ asset('assets/frontend/images/ipsc-confrances/IPSC ABU DHABI.png') }}" alt="" class="w-full h-auto" />
                </a>
              </div>
            </div>
            <div class="mumbai-pin-image">
              <div class="dubai-image">
                <img src="{{ asset('assets/frontend/images/con-bowld-img/map_marker.png') }}" alt="" />
              </div>
              <div class="map-location_view">
                <a href="{{ route('conferences.ipsc.mumbai.2024') }}"> <img src="{{ asset('assets/frontend/images/ipsc-confrances/IPSC Mumbai.png') }}" alt="" class="w-full h-auto" /></a>
              </div>
            </div>
          </div>
        </div>
                
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
          <div class="map_details relative">
            <img src="{{ asset('assets/frontend/images/con-bowld-img/Map.png') }}" alt="" class="w-full h-auto" />
            <div class="dubai-pin-image">
              <div class="dubai-image">
                <img src="{{ asset('assets/frontend/images/IHRC.png') }}" alt="" />
              </div>
              <div class="map-location_view">
                <a href="ihrc-dubai-event-2022.html"> <img src="{{ asset('assets/frontend/images/ihrc-Dubai.png') }}" alt="" class="w-full h-auto" /></a>
              </div>
            </div>
          </div>
        </div>

        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-settings" role="tabpanel" aria-labelledby="settings-tab">
          <div class="map_details relative">
            <img src="{{ asset('assets/frontend/images/con-bowld-img/Map.png') }}" alt="" class="w-full h-auto" />
            <div class="dubai-pin-image">
              <div class="dubai-image">
                <img src="{{ asset('assets/frontend/images/BOWLD.png') }}" alt="" />
              </div>
              <div class="map-location_view">
                <a href="{{ route('conferences.bowld.event.2025') }}"> <img src="{{ asset('assets/frontend/images/bowld-location.png') }}" alt="" class="w-full h-auto" /></a>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-contacts" role="tabpanel" aria-labelledby="contacts-tab">
          <div class="map_details relative">
            <img src="{{ asset('assets/frontend/images/con-bowld-img/Map.png') }}" alt="" class="w-full h-auto" />
            <div class="dubai-pin-image">
              <div class="dubai-image">
                <img src="{{ asset('assets/frontend/images/CXO.png') }}" alt="" />
              </div>
              <div class="map-location_view">
                <a href="{{ route('conferences.cxo.dubai.2024') }}"> <img src="{{ asset('assets/frontend/images/cxo-location.png') }}" alt="" class="w-full h-auto" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="showOnMobile">
        <img src="{{ asset('assets/frontend/images/newImages/World Map.png') }}" alt="" />
      </div>

      <div class="map-header text-center mb-16 sectionTitleSize whereLeader">
        <div class="header_text text-center py-5">
          <h2>Where Leaders Meet. <span>Where Industries Evolve.</span></h2>
        </div>
        <div class="map-btn">
          <a href="https://blueoceancorporation.com/conferences/ipsc-2025" class="btn primary-btn bg-blue-600 text-white py-3 px-5 mt-3" contenteditable="false" style="cursor: pointer;">
            Be Part of the Revolution
            <span>
              <img src="https://blueoceancorporation.com/assets/frontend/images/icons/arrow-right.svg" alt="" />
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

  <script>
    tns({
      container: '.signatureevent-slider',
      loop: true,
      items: 1,
      slideBy: 'page',
      nav: false,
      autoplay: true,
      speed: 0,
      autoplayButtonOutput: false,
      mouseDrag: true,
      lazyload: true,
      mode: 'gallery',
      animateIn: 'tns-fadeIn',
      animateOut: 'tns-fadeOut',
      // mode: 'carousel',
      controlsContainer: "#custom-signatureEvent",
    });

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

    function toggleBenefit(benefitNumber) {
      // Hide all the benefit boxes first
      var allBenefits = document.querySelectorAll('.benefit-box');
      allBenefits.forEach(function(benefit) {
          benefit.style.display = 'none';
      });

      // Show the selected benefit
      var benefitBox = document.getElementById("benefit-" + benefitNumber);
      benefitBox.style.display = 'block';
    }
  
    document.addEventListener("DOMContentLoaded", function () {
      tns({
        container: '.sponsershipSlider',
        items: 1,
        slideBy: 1,
        speed: 400,
        loop: true,
        nav: true, // ✅ Dots enabled
        navPosition: 'bottom',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true, // ✅ Mouse drag
        touch: true,     // ✅ Touch drag on mobile
        gutter: 20,
        controls: true,
        controlsContainer: "#custom-control",
        mode: 'carousel',
        swipeAngle: false,
      });

      tns({
        container: '.signatureEventSlider',
        items: 1,
        slideBy: 1,
        speed: 500,
        loop: true,
        nav: true, // Show dots
        navPosition: 'bottom',
        controls: true,
        controlsContainer: "#custom-controlSignature",
        // autoplay: true,
        mouseDrag: true,
        touch: true,
        gutter: 10,
        swipeAngle: false,
      });
    
    tns({
      container: '#slider1',
      items: 1,
      slideBy: 1,
      speed: 400,
      loop: true,
      nav: true,
      navPosition: 'bottom',
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      touch: true,
      gutter: 20,
      controls: true,
      controlsContainer: "#custom-control-slider1",
      mode: 'carousel',
      swipeAngle: false,
    });

    tns({
      container: '#slider2',
      items: 1,
      slideBy: 1,
      speed: 400,
      loop: true,
      nav: true,
      navPosition: 'bottom',
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      touch: true,
      gutter: 20,
      controls: true,
      controlsContainer: "#custom-control-slider2",
      mode: 'carousel',
      swipeAngle: false,
    });

    tns({
      container: '#slider3',
      items: 1,
      slideBy: 1,
      speed: 400,
      loop: true,
      nav: true,
      navPosition: 'bottom',
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      touch: true,
      gutter: 20,
      controls: true,
      controlsContainer: "#custom-control-slider3",
      mode: 'carousel',
      swipeAngle: false,
  });

    tns({
      container: '#slider4',
      items: 1,
      slideBy: 1,
      speed: 400,
      loop: true,
      nav: true,
      navPosition: 'bottom',
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      touch: true,
      gutter: 20,
      controls: true,
      controlsContainer: "#custom-control-slider4",
      mode: 'carousel',
      swipeAngle: false,
    });

    // === TABS SWITCHING CODE ===
    const tabs = document.querySelectorAll('[id^="tab-"]');
    const tabContents = document.querySelectorAll('#default-styled-tab-content > div');

    tabs.forEach(tab => {
      tab.addEventListener('click', function () {
        // Deactivate all tabs
        tabs.forEach(t => t.classList.remove('active'));
        // Hide all tab contents
        tabContents.forEach(content => content.classList.add('hidden'));

        // Activate this tab
        this.classList.add('active');
        const target = this.getAttribute('data-tabs-target');
        const targetContent = document.querySelector(target);
        if (targetContent) {
          targetContent.classList.remove('hidden');
        }
      });
    });
  });
  </script>
@endpush