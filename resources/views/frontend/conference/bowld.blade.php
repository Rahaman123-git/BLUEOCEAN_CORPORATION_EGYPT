@extends('layouts.frontend.app')
@section('title', 'Blue Ocean BOWLD Conferences')
@section('meta-description', 'Empowering women leaders. Insights, networking, and innovation for a brighter future.')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/new-event.css') }}">
@endpush

@section('content')
  <div class="w-full">
    <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls="">
      <source src="{{ asset('assets/frontend/images/ipsc-video/Bowld-Promo-2025.mp4') }}" type="video/mp4" />
      <source src="" type="video/ogv" />
      <source src="" type="video/webm" />
      Your browser does not support the video tag.
    </video>
  </div>

  <section class="about_block relative">
    <div class="diveder_angle kopillar_angle">
      <img src="{{ asset('assets/frontend/images/latest-added/devider_angle-new.png') }}" alt="" />
    </div>

    <div class="block_header py-4">
      <div class="container mx-auto">
        <div class="flex flex-wrap">
          <div class="width-forty mt-8">
            <div class="exprience_icon text-center">
              <img src="{{ asset('assets/frontend/images/con-bowld-img/BOWLD-1.svg') }}" alt="Exprience icon" class="img-fluid m-auto" />
            </div>
          </div>
          <div class="width-sixty mt-8">
            <div class="header_text boc_top-header">
              <h2>
                <span> A Global Platform for </span>
                Women Empowerment
              </h2>
              <p class="lg:pr-10">
                <strong>Blue Ocean Women Leadership Development (BOWLD) – EmpowHer</strong> is a transformative global initiative dedicated to celebrating the achievements of women and fostering a culture of collaboration, inspiration, and
                mutual support. This powerful platform is designed to enable women to unlock their full potential and drive meaningful change in their organizations and communities.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="key-pillars block_header">
    <div class="container mx-auto relative">
      <div class="flex flex-wrap items-center">
        <div class="width-forty">
          <div class="header_text text-right xl:pr-8"></div>
        </div>
        <div class="exprience_icon width-sixty">
          <h2>Leadership. Innovation. Inclusion.</h2>
          <!-- <img src="{{ asset('assets/frontend/images/con-bowld-img/slider_one_logo.png') }}" alt="Exprience icon"
                      class="img-fluid exprience-icon">-->
        </div>
      </div>
      <div class="redblue-corner relative"></div>
      <div class="kopiller_data mt-3 red-gradent-box">
        <div class="flex flex-wrap">
          <div class="width-forty">
            <div class="pillor_left text-center">
              <img src="{{ asset('assets/frontend/images/con-bowld-img/BOWLD-white.png') }}" alt="Exprience icon" class="img-fluid" />
              <div class="text-center lg:text-right">
                <h2 class="text-white bowld-tagline">
                  <span>
                    Blue <br />
                    Ocean Women
                  </span>
                  Leadership Development
                </h2>
              </div>
            </div>
          </div>
          <div class="width-sixty">
            <div class="kopiller_right">
              <div class="mx-auto">
                <div class="flex flex-wrap">
                  <div class="w-full xl:w-1/2">
                    <div class="left_award xl:pr-8">
                      <h3 class="text-white">Recognizing Excellence</h3>
                      <p class="site-text text-white">
                        EmpowHer highlights the accomplishments of exceptional women leaders, offering them the recognition and visibility they rightfully deserve.
                      </p>
                    </div>
                  </div>

                  <div class="width-forty">
                    <div class="left_award">
                      <h3 class="text-white">Inspiring Leadership</h3>
                      <p class="site-text text-white">
                        By sharing powerful success stories, the platform encourages emerging women leaders to aspire higher, challenge limitations, and lead with confidence.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Supportive Block -->
  <section class="supportive bowld-backimage">
    <div class="support_top-angle">
      <img src="{{ asset('assets/frontend/images/con-bowld-img/support_top-angle.png') }}" alt="" class="img-fluid" />
    </div>
    <div class="container mx-auto">
      <div class="flex flex-wrap">
        <div class="w-full">
          <div class="support_hdr">
            <h2 class="theme-color">Fostering a Stronger Community of </br> Women Leaders</h2>
          </div>
        </div>
      </div>
    </div>

    <div class="blue-bg relative">
      <div class="clipped-border"></div>
      <div class="container">
        <div class="flex flex-wrap mt-4 networking-box">
          <div class="w-full lg:w-5/12 lg:w-1/2 relative">
            <div class="support_content ipse-page">
              <h2 class="text-white"><span>Global </span>Connections</h2>
              <p class="text-white"><strong>BOWLD brings together women from diverse industries and backgrounds, building a worldwide network grounded in support, collaboration, and shared success.</strong></p>
            </div>
          </div>
          <div class="w-full lg:w-1/2 lg:pl-6">
            <div class="support_content ipse-page">
              <h2 class="text-white"><span>Mentorship</span>& Guidance</h2>
              <p class="text-white">The platform creates meaningful mentorship opportunities, where experienced leaders nurture, advise, and empower emerging talent to thrive and lead with confidence.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="white_divider">
  <img src="../images/con-bowld-img/white-diveder.png" alt="">
  </div> -->
  </section>

  <section class="leadership_women relative bowld-leader">
    <div class="right_overangle top-bowld">
      <img src="{{ asset('assets/frontend/images/con-bowld-img/leader-ship-left-image.png') }}" alt="" class="img-fluid" />
    </div>
    <div class="container mx-auto">
      <div class="flex flex-wrap">
        <div class="w-full lg:w-2/3 ml-auto lg:pl-9">
          <div class="leadership_text">
            <h2 class="uppercase">
              Leadership <br />
              Development
            </h2>
          </div>
          <div class="flex flex-wrap">
            <div class="w-full sm:w-1/2">
              <div class="leadership_content">
                <h3 class="mb-3">Skill Enhancement</h3>
                <p><strong>EmpowHer</strong> offers tailored programs and workshops to help women develop critical leadership skills, from strategic thinking to effective communication.</p>
              </div>
            </div>
            <div class="w-full sm:w-1/2">
              <div class="leadership_content">
                <h3 class="mb-3">Confidence Building</h3>
                <p>The initiative focuses on empowering women to take on leadership roles with confidence and resilience.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="womenday_block mt-4 lg:mt-5">
        <div class="flex flex-wrap">
          <div class="w-full">
            <div class="spacial-day_text relative bowld-margin">
              <picture>
                <source media="(min-width:770px)" srcset="{{ asset('assets/frontend/images/con-bowld-img/spaecialday_img.png') }}" />
                <img src="{{ asset('/images/con-bowld-img/spaecialday_img-mobile.png') }}" alt="banner image" class="img-fluid d-block w-full" />
              </picture>

              <div class="women_special-text absolute bowld-women">
                <img src="{{ asset('assets/frontend/images/con-bowld-img/empowerher-white.png') }}" alt="" />
                <div class="content_women">
                  <h4 class="text-white">Igniting Strength, Inspiring Equality on</h4>
                  <h2 class="text-white">Women's Day and Beyond</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="why-bowld relative gap-bottom">
    <div class="hill-right">
      <img src="{{ asset('assets/frontend/images/con-bowld-img/hill.png') }}" alt="" class="img-fluid" />
    </div>
    <div class="hill-right hill-left">
      <img src="{{ asset('assets/frontend/images/con-bowld-img/hill-left.png') }}" alt="" class="img-fluid" />
    </div>
    <div class="container mx-auto">
      <div class="leadership_text gap-fourty">
        <h2>Rise. Shine. Lead.</h2>
      </div>
    </div>
    <div class="why_bowld-content">
      <div class="container mx-auto">
        <div class="flex flex-wrap">
          <div class="width-forty">
            <div class="why_bowld-img relative">
              <img src="{{ asset('assets/frontend/images/con-bowld-img/why_matter.png') }}" alt="" />
              <div class="why-bowl-text">
                <h3 class="uppercase">
                  <span class="block">Why</span>
                  BOWLD<br />
                  Matters
                </h3>
              </div>
            </div>
          </div>
          <div class="width-sixty">
            <div class="why-matter-content gap-text">
              <p><strong>Redefining Leadership:</strong> BOWLD is more than a platform, it's a global movement to reshape leadership through the advancement of women.</p>
              <p><strong> Bridging the Gender Gap: </strong>Offers tools, resources, and support to address ongoing challenges in gender equality.</p>
              <p><strong> Fostering Global Community:</strong> Connects women across borders to share experiences, support one another, and grow together.</p>
              <p><strong> Empowering with Purpose:</strong>Encourages women to lead with confidence, authenticity, and resilience.</p>
              <p><strong>Driving Change:</strong> Impacts individuals, organizations, and society through inclusive leadership development.</p>
              <p><strong>Championing Diversity: </strong> Promotes the urgent need for diverse perspectives in leadership roles worldwide.</p>
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
          <h3 class="text-4xl text-blue-text-hdr font-semibold mb-8">BOWLD Signature Past Events</h3>
          <div class="cxo-event relative mb-8">
            <div class="flex flex-col lg:flex-row bg-white text-black relative">
              <div class="basis-[40%]">
                <div class="flex justify-center items-center py-10">
                  <div class="ipscicon"><img src="{{ asset('assets/frontend/images/BOWLD-1.svg') }}" alt="" width="150" /></div>
                  <div><img src="{{ asset('assets/frontend/images/vertual-conference.png') }}" alt="" /></div>
                </div>
              </div>
              <div class="basis-[60%] relative">
                <div class="event-image relative imgclip-event">
                  <img src="{{ asset('assets/frontend/images/bowld-event/Bowld-event-1.jpg') }}" alt="" class="img-fluid w-full h-full" />
                  <h3 class="location-name absolute uppercase">
                    Dubai
                  </h3>
                </div>
              </div>
            </div>
            <div class="event-link">
              <a href="{{ route('conferences.bowld.event.2025') }}" class="btn btn_theme flex w-full">
                Discover BOWLD 2025 Conference<span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
          <div class="cxo-event relative mb-8">
            <div class="flex flex-col lg:flex-row bg-white text-black relative">
              <div class="basis-[40%]">
                <div class="flex justify-center items-center py-10">
                  <div class="ipscicon"><img src="{{ asset('assets/frontend/images/BOWLD-1.svg') }}" alt="" width="150" /></div>
                  <div><img src="{{ asset('assets/frontend/images/vertual-conference.png') }}" alt="" /></div>
                </div>
              </div>
              <div class="basis-[60%] relative">
                <div class="event-image relative imgclip-event">
                  <img src="{{ asset('assets/frontend/images/bowld-event/Bowld-event-2.jpg') }}" alt="" class="img-fluid w-full h-full" />
                  <h3 class="location-name absolute uppercase">
                    Dubai
                  </h3>
                </div>
              </div>
            </div>
            <div class="event-link">
              <a href="{{ route('conferences.bowld.event.2024') }}" class="btn btn_theme flex w-full">
                Discover BOWLD 2024 Conference <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
          <div class="cxo-event relative mb-8">
            <div class="flex flex-col lg:flex-row bg-white text-black relative">
              <div class="basis-[40%]">
                <div class="flex justify-center items-center py-10">
                  <div class="ipscicon"><img src="{{ asset('assets/frontend/images/BOWLD-1.svg') }}" alt="" width="150" /></div>
                  <div><img src="{{ asset('assets/frontend/images/vertual-conference.png') }}" alt="" /></div>
                </div>
              </div>
              <div class="basis-[60%] relative">
                <div class="event-image relative imgclip-event">
                  <img src="{{ asset('assets/frontend/images/bowld-event/Bowld-event-3.jpg') }}" alt="" class="img-fluid w-full h-full" />
                  <h3 class="location-name absolute uppercase">
                    Dubai
                  </h3>
                </div>
              </div>
            </div>
            <div class="event-link">
              <a href="{{ route('conferences.bowld.event.2023') }}" class="btn btn_theme flex w-full">
                Discover BOWLD 2023 Conference <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
          <div class="cxo-event relative mb-8">
            <div class="flex flex-col lg:flex-row bg-white text-black relative">
              <div class="basis-[40%]">
                <div class="flex justify-center items-center py-10">
                  <div class="ipscicon"><img src="{{ asset('assets/frontend/images/BOWLD-1.svg') }}" alt="" width="150" /></div>
                  <div><img src="{{ asset('assets/frontend/images/vertual-conference.png') }}" alt="" /></div>
                </div>
              </div>
              <div class="basis-[60%] relative">
                <div class="event-image relative imgclip-event">
                  <img src="{{ asset('assets/frontend/images/bowld-event/Bowld-event-4.jpg') }}" alt="" class="img-fluid w-full h-full" />
                  <h3 class="location-name absolute uppercase">
                    Dubai
                  </h3>
                </div>
              </div>
            </div>
            <div class="event-link">
              <a href="{{ route('conferences.bowld.event.2022') }}" class="btn btn_theme flex w-full">
                Discover BOWLD 2022 Conference <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
          <div class="cxo-event relative mb-8">
            <div class="flex flex-col lg:flex-row bg-white text-black relative">
              <div class="basis-[40%]">
                <div class="flex justify-center items-center py-10">
                  <div class="ipscicon"><img src="{{ asset('assets/frontend/images/BOWLD-1.svg') }}" alt="" width="150" /></div>
                  <!-- <div><img src="{{ asset('assets/frontend/images/vertual-conference.png') }}" alt=""></div> -->
                </div>
              </div>
              <div class="basis-[60%] relative">
                <div class="event-image relative imgclip-event">
                  <img src="{{ asset('assets/frontend/images/bowld-event/Bowld-event-5.jpg') }}" alt="" class="img-fluid w-full h-full" />
                  <h3 class="location-name absolute uppercase">
                    Dubai
                  </h3>
                </div>
              </div>
            </div>
            <div class="event-link">
              <a href="{{ route('conferences.bowld.event.2021') }}" class="btn btn_theme flex w-full">
                Discover BOWLD 2021 Conference <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script>
    let bowldhomeSlider = document.querySelector(".bowldhome");
    if (bowldhomeSlider) {
      tns({
        container: bowldhomeSlider,
        items: 1,
        slideBy: "page",
        autoplay: true,
        autoplayButtonOutput: false,
        nav: false,
        controls: false,
        speed: 2000,
        autoplayTimeout: 6000,
        mode: "carousel",
        speed: 0,
      });
    }
  </script>
@endpush