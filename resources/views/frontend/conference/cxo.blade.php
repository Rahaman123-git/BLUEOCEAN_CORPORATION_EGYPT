@extends('layouts.frontend.app')
@section('title', 'Blue Ocean CXO Conferences')
@section('meta-description', 'Blue Ocean CXO Conference: C-Suite leaders unite. Insights, innovation, and networking for business transformation')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/new-event.css') }}">
@endpush

@section('content')
  <!-- Section Starts Here 1 -->
  <section>
    <div class="w-full">
      <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls>
        <source src="{{ asset('assets/frontend/images/ipsc-video/Cxo-Highlights-2024.mp4') }}" type="video/mp4" />
        <source src="" type="video/ogv" />
        <source src="" type="video/webm" />
        Your browser does not support the video tag.
      </video>
    </div>
  </section>
  <!-- Section End Here 1 -->

  <!-- cxo_home About -->
  <section class="cxo-about-lp relative">
    @if(isset($upcomingConference) && !empty($upcomingConference))
      <a href="{{ route('conferences.upcoming.event', $upcomingConference->slug) }}" class="strip-link">
        <div class="ipsc_stripe absolute banner-bottom-strip ipsc-new-bg">
          <!-- <img src="{{ asset('assets/frontend/images/ipsc-text-gradent.png') }}" alt="" class="w-full h-auto" /> -->
          <div class="flex ipsc-cont-strip">
            <div class="">
              <img src="{{ asset('assets/frontend/images/ipsc_hover.svg') }}" alt="" />
            </div>
            @php
              $conferenceYear = \Carbon\Carbon::createFromFormat('d.m.Y', $upcomingConference->event_date)->year;
            @endphp
            <div class="strip-text">{{ $upcomingConference->event_category }} <span>{{ $conferenceYear }}</span></div>
          </div>
        </div>
      </a>
    @endif

    <div class="container mx-auto">
      <div class="flex flex-col lg:flex-row bg-white text-black items-center">
        <div class="basis-[40%]">
          <div class="text-center">
            <img src="{{ asset('assets/frontend/images/cxo-image/CXO-round-table.svg') }}" alt="" class="mr-auto lg:ml-auto mb-5 lg:mb-0 lg:mr-0" />
          </div>
        </div>
        <div class="basis-[60%]">
          <div class="text-left lg:pl-10 lg:pr-4 px-5 lg:px-0">
            <h3 class="text-blue-text-hdr text-2xl sm:text-xl md:text-4xl font-bold mt-7">
              Voices of Strategic Leadership
              <br />
            </h3>
            <p class="text-xl mt-5 text-subheadline">
              The CXO Roundtable is an exclusive platform that brings together C-suite executives CEOs, CFOs, COOs, CHROs, and other senior leaders to exchange insights on innovation, strategy, and transformative leadership. This high-level
              forum fosters meaningful dialogue, peer-to-peer learning, and collaborative thinking to navigate challenges and shape future-ready organizations.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission Vission -->
  <section class="mission-vission cxo-misvis">
    <div class="container m-auto">
      <div class="grid grid-cols-1 lg:grid-cols-12 mt-8 space-x-5">
        <div class="col-span-5 flex justify-start"></div>
        <div class="col-span-7 flex lg:justify-start">
          <h2 class="text-blue-text-hdr text-3xl md:text-5xl font-bold text-left">Mission and Vision</h2>
        </div>
      </div>

      <div class="mv-content">
        <div class="grid grid-cols-1 lg:grid-cols-12 mt-4 space-x-5 py-4 items-end px-5">
          <div class="col-span-5 flex lg:justify-end align-bottom">
            <div class="content-right">
              <img src="{{ asset('assets/frontend/images/cxo-image/CXO-round-white.png') }}" alt="" class="ml-auto" />
              <div class="mt-16 text-left lg:text-right">
                <h2 class="text-white font-bold uppercase">
                  <span class="font-semibold">
                    Convergence of the
                  </span>
                  <br />
                  C-Suites
                </h2>
              </div>
            </div>
          </div>
          <div class="col-span-7 lg:pl-6 pl-0">
            <div class="mission-points flex flex-wrap">
              <div class="text-boxp text-white w-full md:w-1/2 p-0 lg:pr-8 my-5 md:mb-0 text-left md:text-left">
                <h3 class="text-x">Mission</h3>
                <p>To foster innovation and excellence in leadership by creating a collaborative environment for industry leaders to share knowledge and strategies</p>
              </div>
              <div class="text-boxp text-white w-full md:w-1/2 p-0 lg:pr-8 my-5 md:mb-0 text-left md:text-left">
                <h3>Vision</h3>
                <p>To be a beacon of enlightenment for executives, empowering them to navigate evolving market dynamics and achieve organizational success.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Focus Area -->
  <section class="focusd-area overflow-hidden">
    <div class="shape"></div>
    <div class="container m-auto">
      <div class="grid grid-cols-1">
        <div class="w-full lg:w-1/3 px-5 text-center lg:text-left">
          <div class="grid grid-cols-1">
            <h2 class="text-blue-text-hdr font-bold">
              Focus Areas
            </h2>
            <p class="text-black text-2xl font-semibold"></p>
          </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 mt-8 space-x-5">
          <div class="col-span-3 flex justify-start"></div>
          <div class="col-span-7 flex lg:justify-start justify-center margin-leftnone">
            <div class="focus-center relative z-10 text-center lg:text-right">
              <h4 class="text-white text-3xl lg:text-6xl font-semibold pr-one-seventy">Innovation</h4>
              <h3 class="text-white text-4xl lg:text-7xl font-bold pr-0 pr-one-thirty">Leadership</h3>
              <h4 class="text-white text-3xl lg:text-6xl font-extralight pr-nineteen">Strategy</h4>
              <h3 class="text-white text-2xl lg:text-5xl font-bold pr-0 lg:pr-14 shift-left">Digital</h3>
              <h2 class="text-white text-5xl lg:text-8xl font-extralight">Transformation</h2>
            </div>
          </div>
        </div>
        <!-- <div class="w-1/2 m-auto">
          
          </div> -->
      </div>
    </div>
  </section>

  <!-- Driving Strategy -->
  <section class="driving-dtrategy relative">
    <div class="strategy-righttrangle">
      <img src="{{ asset('assets/frontend/images/cxo-image/leftcenpayner.png') }}" alt="" class="w-full max-w-full" />
    </div>
    <div class="container m-auto">
      <div class="grid grid-cols-1 lg:grid-cols-12 mt-8 space-x-5">
        <div class="col-span-5 flex justify-start"></div>
        <div class="col-span-7">
          <h2 class="text-blue-text-hdr text-2xl md:text-4xl font-bold text-left lg:text-left">Driving Excellence Through Innovation and Strategy.</h2>
          <div class="flex mt-6 lg:mt-12 flex-wrap sm:flex-nowrap">
            <div class="driving-text pr-4 lg:pr-10 relative pt-8 mb-9 sm:mb-0">
              <div class="stragity-text mb-7">
                <h3 class="text-blue-text-hdr text-2xl lg:text-3xl mb-3 font-bold">Innovation</h3>
                <p class="text-stragity-text text-xl lg:text-2xl">Exploring cutting-edge ideas and technologies to drive business transformation</p>
              </div>
              <div class="stragity-text mb">
                <h3 class="text-blue-text-hdr text-2xl lg:text-3xl mb-3 font-bold">Strategy</h3>
                <p class="text-stragity-text text-xl lg:text-2xl">Developing actionable strategies to address challenges and seize opportunities in the global market.</p>
              </div>
            </div>
            <div class="driving-text pr-0 lg:pr-10 relative pt-8">
              <div class="stragity-text mb-7">
                <h3 class="text-blue-text-hdr text-2xl lg:text-3xl mb-3 font-bold">Leadership</h3>
                <p class="text-stragity-text text-xl lg:text-2xl">Cultivating leadership skills to inspire teams and drive organizational excellence.</p>
              </div>
              <div class="stragity-text">
                <h3 class="text-blue-text-hdr text-2xl lg:text-3xl mb-3 font-bold">Digital Transformation</h3>
                <p class="text-stragity-text text-xl lg:text-2xl">Leveraging digital technologies to enhance processes, improve customer experience, and foster agility.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Innovation -->
  <section class="chain-innovation mt-8 lg:mt-16">
    <div class="container m-auto">
      <div class="grid grid-cols-1 relative">
        <img src="{{ asset('assets/frontend/images/cxo-image/chain-innovation.png') }}" alt="" class="w-full min-w-full" />
        <div class="innovation-text absolute">
          <h3 class="font-semibold text-white">Leadership </br>conversations that spark meaningful change</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- Indistry-Network -->
  <section class="industry-netw">
    <div class="container lg:m-auto">
      <div class="grid grid-cols-1 lg:grid-cols-12 mt-8 space-x-5 items-center">
        <div class="col-span-5 flex justify-start">
          <div class="text-image"><span class="lg:pl-9 text-4xl lg:text-6xl block">WHY</span> <span class="font-extrabold text-4xl lg:text-9xl block">CXO </span> <span class="text-5xl lg:text-7xl font-bold">ROUNDTABLE?</span></div>
        </div>
        <div class="col-span-7 mb-16">
          <div class="flex mt-6 lg:mt-12 flex-wrap sm:flex-nowrap">
            <div class="driving-text pr-4 lg:pr-10 relative pt-8 mb-9 sm:mb-0">
              <div class="stragity-text mb-7">
                <h3 class="text-blue-text-hdr text-2xl lg:text-3xl mb-3 font-bold">Industry-Leading Insights</h3>
                <p class="text-stragity-text text-xl lg:text-2xl">Access thought leadership and best practices shared by top executives and industry experts.</p>
              </div>
              <div class="stragity-text mb">
                <h3 class="text-blue-text-hdr text-2xl lg:text-3xl mb-3 font-bold">Actionable Solutions</h3>
                <p class="text-stragity-text text-xl lg:text-2xl">Gain practical strategies that you can immediately apply to your organization.</p>
              </div>
            </div>
            <div class="driving-text pr-0 lg:pr-10 relative pt-8">
              <div class="stragity-text mb-7">
                <h3 class="text-blue-text-hdr text-2xl lg:text-3xl mb-3 font-bold">Networking Opportunities</h3>
                <p class="text-stragity-text text-xl lg:text-2xl">
                  Engage with like-minded leaders to build valuable professional relationships.
                </p>
              </div>
              <div class="stragity-text pb-5">
                <h3 class="text-blue-text-hdr text-2xl lg:text-3xl mb-3 font-bold">Driving Innovation and Growth</h3>
                <p class="text-stragity-text text-xl lg:text-2xl">Discover forward-thinking approaches to foster innovation and accelerate business growth.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Should Attend -->
  <section class="should-attend relative">
    <img src="{{ asset('assets/frontend/images/cxo-image/shuld-attend.svg') }}" alt="" />
    <div class="absolute w-full top-0 h-full">
      <div class="container m-auto h-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 space-x-5 items-center h-full">
          <div class="col-span-5 flex justify-start">
            <h2 class="why-text">
              Who Will Attend?
            </h2>
          </div>
          <div class="col-span-7 flex justify-end items-start">
            <div class="blue-box-content text-white">
              <h4>
                The CXO <br />
                Roundtable <br />
                is designed for:
              </h4>
              <h4 class="mt-8">C-suite executives <span>CEOs, CFOs, COOs, CIOs</span> etc. Senior leaders and decision-makers Industry experts and consultants</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @if(isset($upcomingConference) && !empty($upcomingConference))
    <section class="confrence-cxo">
      <div class="upcomming-confrence">
        <div class="container m-auto">
          <div class="grid grid-cols-1 lg:grid-cols-12 space-x-5 items-center pt-14">
            <div class="col-span-12">
              @php
                $conferenceYear = \Carbon\Carbon::createFromFormat('d.m.Y', $upcomingConference->event_date)->year;
              @endphp
              <h3 class="text-white text-4xl font-semibold mb-8">Upcoming {{ $upcomingConference->event_category }} {{ $conferenceYear }} Conference</h3>
              <div class="cxo-event relative">
                <div class="flex flex-col lg:flex-row bg-white text-black relative">
                  <div class="basis-[40%]">
                    <div class="flex justify-center items-center py-10">
                      <div class="ipscicon"><img src="{{ asset('assets/frontend/images/cxo-image/ipsc-delhi.svg') }}" alt="" width="150" /></div>
                      <!-- <div><img src="{{ asset('assets/frontend/images/cxo-image/date.svg') }}" alt="" /></div> -->
                      <div class="venue">
                        @php
                          $eventDate   = \Carbon\Carbon::createFromFormat('d.m.Y', $upcomingConference->event_date);
                          $eventDay    = $eventDate->format('j');
                          $eventSuffix = $eventDate->format('S');
                          $eventMonth  = $eventDate->format('F');
                          $eventYear   = $eventDate->format('Y');
                        @endphp
                        <span class="date-venue">
                          <strong>{{ $eventDay }}<sup>{{ $eventSuffix }}</sup></strong>{{ $eventMonth }}<br>{{ $eventYear }}
                        </span>
                        <div class="sec-right-global">
                          <h3>{{ $upcomingConference->event_hotel_name }}</h3>
                          <p>{{ $upcomingConference->event_location }}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="basis-[60%] relative">
                    <div class="event-image relative imgclip-event">
                      <img src="{{ asset('storage/conferences/event/'.$upcomingConference->event_category_page_banner_file) }}" alt="" class="img-fluid h-full" />
                    </div>
                    <img src="{{ asset('assets/frontend/images/cxo-image/ganguly.png') }}" alt="" class="leader-img" style="display: none;" />
                  </div>
                </div>
                <div class="event-link">
                  <a href="{{ route('conferences.upcoming.event', $upcomingConference->slug) }}" class="btn btn_theme flex w-full" target="_blank">
                    Discover More <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif

  <section class="confrence-cxo mb-12">
    <div class="container m-auto">
      <div class="grid grid-cols-1 lg:grid-cols-12 space-x-5 items-center pt-14">
        <div class="col-span-12">
          <h3 class="text-4xl text-blue-text-hdr font-semibold mb-8">CXO Signature Past Events</h3>
          <div class="cxo-event relative">
            <div class="flex flex-col lg:flex-row bg-white text-black relative">
              <div class="basis-[40%]">
                <div class="flex justify-center items-center py-10">
                  <div class="ipscicon"><img src="../images/cxo-image/CXO-round-table.svg" alt="" width="150" /></div>
                  <div><img src="{{ asset('assets/frontend/images/cxo-image/palm-dubai-1.png') }}" alt="" /></div>
                </div>
              </div>
              <div class="basis-[60%] relative">
                <div class="event-image relative imgclip-event">
                  <img src="{{ asset('assets/frontend/images/cxo-image/CXO-Roundtable-banner11-1 1.png') }}" alt="" class="img-fluid w-full" />
                </div>
              </div>
            </div>
            <div class="event-link">
              <a href="{{ route('conferences.cxo.dubai.2024') }}" class="btn btn_theme flex w-full">
                Discover More <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-12 mt-10">
        <h3 class="text-4xl text-blue-text-hdr font-semibold mb-8">Strategic Planning. Seamless Execution. World- Class Events.</h3>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush