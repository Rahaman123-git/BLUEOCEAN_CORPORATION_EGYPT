@extends('layouts.frontend.app')
@section('title', ' Webinar / Seminar')
@section('meta-description', 'Free Seminars in Dubai, Abu Dhabi for HR, Logistics, Supply Chain, Purchasing, Contracts Management, Six Sigma, Project Management & Aviation professionals')
@push('styles')
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css"/>
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/seminar.css') }}">
@endpush

@section('content')
  <div class="breadcrumb py-3">
    <div class="container">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse flex-wrap">
          <li class="inline-flex items-center">
            <a href="{{ route('training.home') }}" class="inline-flex items-center text-sm font-medium text-[#9A9A9A]">
              <img src="{{ asset('assets/frontend/images/icons/home.svg') }}" alt="home icon" class="w-5 h-5 mr-2" />
              Training
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <a href="javascript:void(0)" class="ms-1 text-sm font-medium text-[#1E1E1E]">Webinar</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Seminar</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="page-heading-main">
    <div class="container">
      <h1 class="page-heading">Webinar - Seminar Program</h1>
    </div>
  </div>
<section class="page-banner-section">
    <div class="page-banner bg-web">
      <div class="image-half">
        <img src="{{ asset('assets/frontend/images/webinar/webinar-pic.png') }}" alt="Banner" />
      </div>
      <div class="page-banner-text">
        <div class="container">
          <div class="page-banner-wrap">
            <div class="basis-[60%] pr-[10%] hdr-course">
              <h1 class="page-banner-heading">
                Elevate Expertise,
                <strong class="block">Ignite Innovation</strong>
              </h1>
            </div>
            <div class="basis-[40%]">
              <p class="text-white text-base lg:text-lg mb-4">
               Our webinars and seminars are designed to inspire excellence through meaningful engagement. Focused on industry-specific challenges, they offer relevant insights and actionable strategies. By bringing together thought leaders and domain experts, we provide a dynamic platform for knowledge exchange, enabling professionals to stay ahead, adapt to change and excel in their fields.
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

 

  <section class="enabling-enhancement">
    <div class="container">
      <h3>
        <small>Insightful Dialogues,</small>
       Tangible Outcomes
      </h3>
      <div class="fig-enhance">
        <figure>
          <img src="{{ asset('assets/frontend/images/webinar/webinar-home.png') }}" class="w-full" alt="" />
        </figure>
        <div class="fig-enhance-abs">
          <figcaption>
            Industry-Focused Seminars & Webinars for Real-World Impact
          </figcaption>
        </div>
      </div>

      <div class="what-distinguishes">
        <h4>What distinguishes our webinars and seminars</h4>
        <ul class="list-focus-on">
          <li>Focus on real-world applicability and measurable outcomes</li>
          <li>
            Designed to bridge the gap between theory and practice
          </li>
          <li>
           Equip participants with practical tools for immediate use
          </li>
          <li>Connect you to a global network and industry insights</li>
        </ul>
        <p class="bluish">
          Blue Ocean Webinars help you to connect with a global network of professionals, gain industry-specific insights, and unlock the potential to transform your organization and career.
        </p>
      </div>
    </div>
    <div class="enhance-trg">
      <figure>
        <img src="{{ asset('assets/frontend/images/webinar/bg-trg-lft.webp') }}" alt="" />
        <figcaption>
          Learn.<br />
          Connect.<br />
          Lead.
        </figcaption>
      </figure>
    </div>
  </section>

  
  @if(isset($highlightedSeminar) && $highlightedSeminar)
    <div class="upcoming-seminar">
      <div class="container">
        <div class="upcoming-inner-top">
          <h3>Upcoming Seminar / Webinar</h3>
          <h4>{{ $highlightedSeminar->seminar_title_initial ?? ''}} {{ $highlightedSeminar->seminar_title }}</h4>
        </div>
      </div>

      <div class="container">
        <div class="upcoming-inner">
          <div class="upcoming-inner-sec">
            <p>
              <strong>Cost Efficiency</strong><br />
              Strategies to cut costs without sacrificing quality.
            </p>
            <p>
              <strong>Compliance & Risk</strong><br />
              Navigate regulations and mitigate risks effectively.
            </p>
            <p>
              <strong>Tech-Driven Solutions</strong><br />
              Use digital tools and analytics for smarter procurement.
            </p>
            <div class="flex justify-end" style="padding-right: 6vw;">
              <a href="{{ route('training.webinar.seminar.register', $highlightedSeminar->slug) }}" class="btn primary-btn text-base">
                Register Now
                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="free-webi">
        <figure>
          <img src="{{ asset('assets/frontend/images/seminar-subtract.png') }}" class="w-full" alt="" />
        </figure>
        <div class="overlap-webner">
          <div class="flex w-full">
          <div class="webener-left">
        <div class="left-shudle-image">
        <img src="{{ asset('assets/frontend/images/webinar/webinar-datebg.png') }}" alt="">
        </div>    
        </div>
          <div class="webener-right">
            <div class="top-webner">
              <img src="{{ asset('assets/frontend/images/webinar/webner-logo-top.png') }}" alt="">
            </div>
            <div class="webener-text">
              <h2>{{ ($highlightedSeminar->seminar_type == 'FREE_SEMINAR') ? 'Free Webinar' : 'Paid Webinar' }}</h2>
              @if(isset($highlightedSeminar->seminar_title_initial))
                <h4>{{ $highlightedSeminar->seminar_title_initial }}</h4>
              @endif
              <h3>{!! breakBy13Chars($highlightedSeminar->seminar_title) !!}</h3>
              <h5 class="date">on {{ $highlightedSeminar->formattedDate('seminar_date') }}</h5>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  @endif

  @if(isset($upcomingSeminars) && $upcomingSeminars)
    <section class="seminar-slide-out">
      <div class="container">
        <div class="relative">
        <div class="grid grid-cols-1 px-5">
          <div class="seminorpage-slider">
            @foreach($upcomingSeminars as $seminar)
              <a href="{{ route('training.webinar.seminar.register', $seminar->slug) }}">
                <div class="seminar-sld-sec">
                  <!-- <img src="{{ asset('assets/frontend/images/webinar/slide-bg.webp') }}" alt="" /> -->
                  <div class="seminar-sld-abs">
                    <h5><small>{{ ($seminar->seminar_type == 'FREE_SEMINAR') ? 'Free Webinar' : 'Paid Webinar' }}</small> {{ strtoupper($seminar->seminar_location) }}</h5>
                    <h6>
                      @if(isset($seminar->seminar_title_initial))
                        <strong>{{ $seminar->seminar_title_initial }}</strong>
                      @endif
                      <small>{{ $seminar->seminar_title }}</small>
                    </h6>
                    <span class="date-semi">{{ $seminar->formattedDate('seminar_date') }}</span>
                  </div>
                </div>
              </a>
            @endforeach
          </div>

           @if($upcomingSeminars->count() > 2)
         
                                <ul class="controls certificate-arrow flex semin-slide-control" id="custom-controlnew">
                        <li class="prev prev-p mr-2">
                            <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
                        </li>
                        <li class="next next-p">
                            <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"
                                    alt="" /></span>
                        </li>
                    </ul>
           @endif
           </div>
        </div>
      </div>
    </section>
  @endif

  @if(isset($pastSeminars) && $pastSeminars)
    <section class="webinar-events">
      <div class="container">
        <h3>Webinar - Seminar Past Events</h3>

        @foreach($pastSeminars as $seminar)
          <div class="sec-past-event">
            <div class="abs-past-event">
              <h5>{!! breakBy13Chars($seminar->seminar_title) !!}</h5>
              <span class="link-sec-blue">
                <a href="javascript:void(0)" class="btn primary-btn">
                  Discover Webinar
                  <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                </a>
              </span>
            </div>
            <figure>
              <img src="{{ asset('storage/courses/seminars/'.$seminar->seminar_banner_image) }}" class="w-full" alt="" />
            </figure>
            <span class="cityname">{{ strtoupper($seminar->seminar_location) }}</span>
          </div>
        @endforeach
      </div>
    </section>
  @endif
@endsection
@push('scripts')
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush