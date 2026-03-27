@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/new-event.css') }}">
  <style>
    span.text-deco {
    font-size: 20px !important;
    position: relative;
    top: 28px;
}
h2.ttext {
    font-size: 50px;
    font-weight: 300;
}
span.ttext2 {
    font-weight: 500;
    font-size: 45px;
}
span.date-venue sup {
    text-transform: none;
}
  </style>
@endpush

@section('content')
<!-- banner section start here -->
<section class="slider-banner">
  <div class="slider-inner relative">
    <figure>
      <video autoplay muted loop id="myVideo" width="100%">
        <source
          src="{{ asset('assets/frontend/images/conference-video/IPSC-delhi-2025.mp4') }}"type="video/mp4"
        />
      </video>
    </figure>
    <!-- <div class="slider-banner-abs">
      <div class="container">
        <ul class="banner-logo">
          <li><img src="{{ asset('assets/frontend/images/new-event/boc-logo.webp') }}" alt="BOC" /></li>
          <li><img src="{{ asset('assets/frontend/images/new-event/ihrc-logo.webp') }}" alt="IHRC" /></li>
        </ul>
        <h1 class="text-white">
          <small>Smart. Sustainable. Secure.</small>
          The Future of Supply Chains
        </h1>
      </div>
    </div> -->
  </div>
</section>
<!-- banner section ends here -->

<!-- ipsc Dubai section start -->
<div class="sec-event-first" style="background-image: url({{ asset('assets/frontend/images/consulting/devider-angle.webp') }});">
  <div class="container">
    <div class="inner-sec-ipsc">
      <figure class="basis-1/2">
        <img src="{{ asset('assets/frontend/images/new-event/ipsc-dubai.webp') }}" alt="" />
      </figure>
    <p class="basis-1/2"><strong>Rewiring Resilience: <br>Catalyzing India’s Supply Chain Revolution <br></strong>
            <span class="text-deco">India, a global economic powerhouse, is poised to redefine its supply chain landscape by embracing resilience, innovation and sustainability.</span></p>
    </div>
  </div>
</div>
<!-- ipsc Dubai section start End Here -->

<!--Global Supply Chain Section Starts Here-->
<section class="global-supply" style="background-image: url({{ asset('assets/frontend/images/new-event/building-glb.webp') }});">
  <div class="container">
    <div class="global-supply-inner">
      <div class="basis-1/2"></div>
      <div class="basis-1/5"></div>
    <div class="basis-1/2">
    <h2 class="ttext font-light">RESILIENT AND
<span class="ttext2 font-light">RELIABLE SUPPLY CHAIN</span></h2>
    <h2><strong>POWERING INDIA’S
GROWTH!</strong></h2>
        <div class="venue">
            <span class="date-venue"><strong>7<sup>th</sup></strong>August<br>
                2025</span>
                <div class="sec-right-global">
                    <h3>Le Méridien </h3>
                    <p>New Delhi</p>
                </div>
        </div>
</div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="sept-rect">
      <div class="basis-1/2"></div>
      <div class="basis-1/2">
        <img src="{{ asset('assets/frontend/images/new-event/rect-bot-global.webp') }}" alt="" class="w-full" />
      </div>
    </div>
  </div>
</section>
<!--Global Supply Chain Section End Here-->
<!--Title sponsors Section Starts Here -->
<div class="title-sponsors">
  <div class="container">
    <h3>Title Sponsors</h3>
    <ul class="list-title-spons">
      <li>
        <figure><img src="{{ asset('assets/frontend/images/new-event/ipsc-logo.webp') }}" alt="" class="w-full" /></figure>
      </li>
      <li>
        <figure><img src="{{ asset('assets/frontend/images/new-event/ipsc-logo.webp') }}" alt="" class="w-full" /></figure>
      </li>
      <li>
        <figure><img src="{{ asset('assets/frontend/images/new-event/ipsc-logo.webp') }}" alt="" class="w-full" /></figure>
      </li>
      <li>
        <figure><img src="{{ asset('assets/frontend/images/new-event/ipsc-logo.webp') }}" alt="" class="w-full" /></figure>
      </li>
    </ul>
  </div>
</div>
<!--Title sponsors Section End Here -->
<!--Network Section heading start Here-->
<section class="sec-network" style="background-image: url({{ asset('assets/frontend/images/new-event/network-bg.webp') }});">
  <div class="network-hdn">
    <div class="network-hdn-inner"></div>
    <div class="network-hdn-abs h-100">
      <div class="container">
        <h3><small>NETWORK, LEARN & GROW</small> WITH INDUSTRY TITANS!</h3>
      </div>
    </div>
  </div>
</section>
<!--Network Section heading end Here-->

<!--Sector Section start Here-->
<section class="sectors-sec">
  <div class="container">
    <div class="sectors-inner">
      <ul class="list-sector">
        <li>Sector Name</li>
        <li>Sector Name</li>
        <li>Sector Name</li>
        <li>Sector Name</li>
        <li>Sector Name</li>
        <li>Sector Name</li>
        <li>Sector Name</li>
        <li>Sector Name</li>
      </ul>

      <ul class="list-network">
        <li>
          <h4>800+</h4>
          <dfn>Delegates</dfn>
        </li>
        <li>
          <h4>400+</h4>
          <dfn>Organizationals</dfn>
        </li>
        <li>
          <h4>40+</h4>
          <dfn>International Speakers & Thought leaders</dfn>
        </li>
      </ul>
    </div>
  </div>
</section>
<!--Sector Section end Here-->
<!--Why sponsor Section start Here-->
<section class="why-sponsor" style="background-image: url({{ asset('assets/frontend/images/consulting/devider-angle.webp') }});">
  <div class="container relative">
    <h3>
      <small>Why Sponsor IPSC? </small>
      Connect. Engage. Grow
    </h3>
    <h4>Sponsor Advantages</h4>
    <div class="logo-spons">
      <img src="{{ asset('assets/frontend/images/new-event/ipsc-logo.webp') }}" alt="" />
    </div>
    <ul class="list-sponsor" style="background-image: url({{ asset('assets/frontend/images/new-event/bg-canvas.webp') }});">
      <li>
        Connect with your next customer
      </li>
      <li>
        Maximize your brand visibility
      </li>
      <li>
        Direct interaction with 800+ Delegates
      </li>
      <li>
        Connect with CEOs, COOs, CIOs & Board Members of top-notch organizations
      </li>
      <li class="padd-top">
        Niche-category event
      </li>
      <li class="padd-top">
        40+ International speakers
      </li>
      <li class="padd-top">
        Buyers from the Middle East
      </li>
      <li class="padd-top">
        IPSC Awards 2026 Dubai
      </li>
      <li>
        Extensive Media coverage
      </li>
      <li>
        Elevate your brand, inspire innovation, and connect with the future - sponsor today
      </li>
    </ul>

    <div class="btn-wrap mt-3">
      <a href="#" class="btn primary-btn">Sponsorship Inquiry <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></a>
    </div>
  </div>
</section>
<!--Why sponsor Section end Here-->

<!-- Award section start here -->
<section class="award-sec" style="background-image: url({{ asset('assets/frontend/images/consulting/devider-angle.webp') }});">
  <div class="container">
    <h4>Awards</h4>
    <div class="sub-head-award">
      <span>Individual Award Categories</span>
      <span class="text-right">Organization Award Categories</span>
    </div>
    <h5>Rewards & Benefits</h5>
    <div class="award-winning">
      <ul>
        <li>Inspirational Leader of the Year</li>
        <li>Business Partner of the Year</li>
        <li>Rising Star of the Year</li>
      </ul>
      <ul></ul>
      <figure>
        <img src="{{ asset('assets/frontend/images/new-event/award.webp') }}" alt="" />
      </figure>
      <ul>
        <li>Outstanding Talent Management Strategy</li>
        <li>Best Women Development & Leadership Programme</li>
        <li>Best Employee Support Strategy</li>
      </ul>
    </div>
    <div class="btn-wrap mt-12 text-center">
      <a href="{{ route('conferences.awards') }}" class="btn primary-btn">Explore Award Categories <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></a>
    </div>
  </div>
</section>
<!-- Award section ends here -->

<!--Claim ticket Section Starts Here -->
<section class="claim-ticket" style="background-image: url({{ asset('assets/frontend/images/new-event/claim-ticket.webp') }});">
  <div class="container relative">
    <h3><small>Exclusive Event – </small> Claim Your Ticket Now!</h3>

    <div class="btn-wrap mt-12">
      <a href="#" class="btn primary-btn">Register Now <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></a>
    </div>

    <div class="ticket-abs" style="background-image: url({{ asset('assets/frontend/images/new-event/bg-ticket.webp') }});">
      <div class="ticket-abs-left">
        <span>This is a Premier Category Paid Event</span>
        <figure>
          <img src="{{ asset('assets/frontend/images/new-event/ipsc-ticket.webp') }}" width="229" alt="" />
        </figure>
        <span>Registration fee:</span>
        <strong>USD 299/-</strong>
      </div>

      <div class="ticket-abs-right">
        <strong>
          EVENT<br />
          TICKET
        </strong>
      </div>
    </div>
  </div>
</section>
<!--Claim ticket Section Ends Here -->

<!-- Section Starts Here 8 -->
<section class="course-tab-section">
  <div class="container">
    <div class="border-b-2 border-secondary">
      <ul
        class="flex flex-wrap text-sm font-medium text-center gap-[2px] md:flex-nowrap tablist-links"
        id="default-styled-tab"
        data-tabs-toggle="#default-styled-tab-content"
        data-tabs-active-classes="text-white bg-secondary"
        data-tabs-inactive-classes="text-gray bg-[#EBEBEB]"
        role="tablist"
      >
        <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
          <button class="inline-block text-white w-full p-3 lg:pr-4" id="courses-styled-tab" data-tabs-target="#keynote-topic" type="button" role="tab" aria-controls="Courses" aria-selected="false">Keynote Topics</button>
        </li>

        <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
          <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab" data-tabs-target="#conference-highlights" type="button" role="tab" aria-controls="training-calendar" aria-selected="false">Conference</button>
        </li>

        <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
          <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab" data-tabs-target="#speakers-highlights" type="button" role="tab" aria-controls="training-calendar" aria-selected="false">Speakers</button>
        </li>

        <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
          <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#sponsors-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">Sponsors</button>
        </li>

        <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
          <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab" data-tabs-target="#gallery-tab" type="button" role="tab" aria-controls="training-calendar" aria-selected="false">Gallery</button>
        </li>

        <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
          <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">IPSC Awards 2022</button>
        </li>

        <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
          <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab" data-tabs-target="#testimonials-tab" type="button" role="tab" aria-controls="training-calendar" aria-selected="false">Testimonials</button>
        </li>
      </ul>
    </div>
    <div id="default-styled-tab-content">
      <div class="hidden" id="keynote-topic" role="tabpanel" aria-labelledby="courses-tab">
        <div class="bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content">
          <div class="flex flex-col lg:flex-row w-full">
            <div class="listing-section w-full">
              <p class="text-3xl font-bold mb-4 lg:mb-9">Keynote Topics</p>
              <ul class="flex flex-col gap-[30px]">
                <!--  -->

                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/course/course-list1.png') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute top-0">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                AI Transforming the Digital Landscape in Saudi Arabia
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Exploring AI's role in economic diversification.</li>
                          <li class="">Impact on autonomous vehicles, smart traffic management, and public transportation.</li>
                          <li class="">Enhancing supply chain efficiency and transparency through AI-driven solutions.</li>
                          <li class="">Addressing data protection, cybersecurity, and ethical considerations.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/course/course-list1.png') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute top-0">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Sustainable Procurement: <br />
                                <span class="font-semibold">Balancing Cost, Quality, and Responsibility</span>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Significance of sustainable procurement in modern business.</li>
                          <li class="">Long-term benefits, including risk mitigation and brand reputation.</li>
                          <li class="">Certifications and standards for sustainable products and suppliers.</li>
                          <li class="">Implementing waste reduction and recycling initiatives.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->

                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/course/course-list1.png') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute top-0">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Smart Warehousing Solutions: <br />
                                <span class="font-semibold">The Future of Inventory Management</span>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Differences between smart and traditional warehousing</li>
                          <li class="">Role of machine learning in inventory management and order processing.</li>
                          <li class="">Benefits of interconnected devices for seamless operations.</li>
                          <li class="">Adoption of green technologies for sustainable warehousing.</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="conference-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row w-full">
          <div class="listing-section w-full">
            <p class="text-3xl font-bold mb-4 lg:mb-9">Conference</p>
            <ul class="flex flex-col gap-[30px]">
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:w-full lg:basis-[40%]">
                      <div class="image-overlap relative imgclip-right">
                        <img src="{{ asset('assets/frontend/images/course/course-list1.png') }}" class="w-full h-full object-cover" />
                        <div class="image-content absolute top-0">
                          <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                            <p class="text-white font-bold text-xl xl:text-3xl">
                              Participants
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="confrrence-text">
                        <div class="xl:pr-20 pt-6 lg:pt-0 pb-5 lg:pb-0">
                          <div class="flex items-center justify-center lg:justify-start lg:items-start flex-col sm:flex-row">
                            <div class="lg:w-1/3 w-full sm:w-1/2 text-center lg:text-left">
                              <p class="text-black font-medium"><span>Over</span></p>
                              <h2 class="text-black text-6xl font-semibold">800</h2>
                              <p class="text-black">
                                Delegates<br />
                                from
                              </p>
                            </div>
                            <div class="xl:w-1/2 w-full sm:w-1/2 text-center lg:text-left pb-4">
                              <h2 class="text-black text-6xl font-semibold lg:mt-6 mt-0">400+</h2>
                              <p class="text-black lg:left-8">
                                Organizations <br />
                                including procurement <br />
                                and supply chain <br />
                                professionals.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%]">
                      <div class="image-overlap relative imgclip-right">
                        <img src="{{ asset('assets/frontend/images/course/course-list1.png') }}" class="w-full h-full object-cover" />
                        <div class="image-content absolute top-0">
                          <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                            <p class="text-white font-bold text-xl xl:text-3xl">
                              Speakers
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="confrrence-text">
                        <div class="lg:pr-20 pt-6 lg:pt-0 pb-5 lg:pb-0">
                          <div class="flex items-center justify-center lg:justify-start lg:items-start flex-col sm:flex-row">
                            <div class="lg:w-1/2 w-full sm:w-1/2 text-center lg:text-left">
                              <p class="text-black font-medium"><span>More than</span></p>
                              <h2 class="text-black text-6xl font-semibold">40+</h2>
                              <p class="text-black">international speakers and thought leaders.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%]">
                      <div class="image-overlap relative imgclip-right">
                        <img src="{{ asset('assets/frontend/images/course/course-list1.png') }}" class="w-full h-full object-cover" />
                        <div class="image-content absolute top-0">
                          <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                            <p class="text-white font-bold text-xl xl:text-3xl">
                              Opportunities
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                        <li class="">Building strategic alliances with industry leaders.</li>
                        <li class="">Gaining actionable insights to enhance supply chain operations.</li>
                        <li class="">Showcasing contributions to the advancement of supply chain and logistics practices.</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="speakers-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row w-full">
          <div class="listing-section w-full">
            <p class="text-3xl font-bold mb-4 lg:mb-9">Speakers</p>
            <ul class="speaker-listing-view">
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Meraae AL-Qahtani</h3>
                        <p>Deputy Minister for Supply Chain, Ministry of Health Saudi Arabia (Chief Advisor)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Abdulrahman AlMuaibid</h3>
                        <p>Head of Procurement & Contracts, Saudi Railway Company</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Muath Abdulkarim</h3>
                        <p>Director of Operations, Saudi Goody Products Marketing Co. Ltd</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Dr. Sathya Menon</h3>
                        <p>Group CEO, Blue Ocean Corporation</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Mohamed AlAli</h3>
                        <p>Group Vice Chairman, Blue Ocean Corporation</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Osama Humoud</h3>
                        <p>General Manager of Procurement Strategy, Mobily, KSA</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Dr. Mohammad ALHalwan</h3>
                        <p>Consultant, Transport & Logistics Services Development</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Abdul Azeez</h3>
                        <p>Group Chairman, Blue Ocean Corporation</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Sultan Amashah</h3>
                        <p>Legal Advisor - Cluster 2</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Bayan Rashed</h3>
                        <p>Senior Manager, Global Procurement - PepsiCo</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Mohammad Bamuqabel</h3>
                        <p>Corporate Strategic Supply Chain Director - Abunayyan Holding</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Maan Alothimeen</h3>
                        <p>General Manager, Supply Chain & Business Support - National Housing Company</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Ehab Bashaikh</h3>
                        <p>General Manager, Supply Chain JEDCO (Jeddah Airport Company)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Mozzamil Aissa</h3>
                        <p>Program Director - Blue Ocean Corporation</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Andrew Sanderson</h3>
                        <p>Partner at Fieldfisher, Co-Founder, Matrix Risk Solutions Limited</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Yaqub Al Humadi</h3>
                        <p>Supply Chain Director - Royal Commission Health Services, Jubail</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Saleh Althamer</h3>
                        <p>Procurement General Manager - Dammam Airport Company (DACO)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Majed Alfaraj</h3>
                        <p>Procurement and Contracts Director - Saudi Chemical Company Limited</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Ata Elyas</h3>
                        <p>Head of Procurement - Saudi Awwal Bank</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Yusuf AlHasan</h3>
                        <p>Head of Procurement - BNET - Bahrain Network</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Dr. Dalia Ahmed Gheit</h3>
                        <p>Reengineering, Supply Chain & Quality Expert KSA - USA</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Sulaiman Abdulla</h3>
                        <p>Director - Administrative Affairs, Federal Tax Authority</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Grant Swanepoel</h3>
                        <p>Regional Lead, Global Channels and Alliances Middle East & Africa - Association for Supply Chain Management (ASCM)</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Yasmin Adel Aboualy</h3>
                        <p>Head Of Supply Chain Management - Saudi Mechanical Industries Co</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Fadhilah Hassan</h3>
                        <p>Sourcing Specialist - Schlumberger</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Sam Achampong</h3>
                        <p>Regional Director: Asia, Australasia, Middle East and Africa (AMEA) - CIPS</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Rana Alleaboon</h3>
                        <p>Supply Chain Manager - Golf Saudi</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Vipin Vaidyanathan</h3>
                        <p>Senior Director and Head of Consulting - Blue Ocean Corporation</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Ali Mohammed Al Qahtani</h3>
                        <p>Fleet Outsourcing Manager, Supply Chain Expert - Almajdouie Logistics Company</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/riyadh/profile-image.svg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Dr. Bandar Altubaishe</h3>
                        <p>Vice Dean - College of Business Administration, UBT, Saudi Arabia</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="sponsors-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col">
          <!--  -->
          <div class="main-sponsor">
            <ul class="flex items-center gap-3 mb-4">
              <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/salam-aldar.webp') }}" alt="" width="180" /></li>
              <li><img src="{{ asset('assets/frontend/images/riyadh/1-platform-logo.webp') }}" alt="" width="180" /></li>
              <li><img src="{{ asset('assets/frontend/images/riyadh/b4u-logo.jpg') }}" alt="" width="180" /></li>
            </ul>
          </div>
          <!--  -->
          <div class="">
            <h3 class="text-3xl font-medium">Knowledge Partners</h3>
            <div class="bg-white md:py-5 md:px-10 mt-6 py-4 px-4">
              <ul class="sponsor-list">
                <li><img src="{{ asset('assets/frontend/images/partner-logo/ascm-logo.png') }}" alt="" /></li>
                <li><img src="{{ asset('assets/frontend/images/partner-logo/cips-logo.png') }}" alt="" /></li>
                <li><img src="{{ asset('assets/frontend/images/partner-logo/hedef.png') }}" alt="" /></li>
                <li><img src="{{ asset('assets/frontend/images/partner-logo/icsmeb.png') }}" alt="" /></li>
                <li><img src="{{ asset('assets/frontend/images/partner-logo/instutof-arb.png') }}" alt="" /></li>
                <li><img src="{{ asset('assets/frontend/images/partner-logo/sponser10.png') }}" alt="" /></li>
                <li><img src="{{ asset('assets/frontend/images/partner-logo/amarican_icon.png') }}" alt="" /></li>
                <li><img src="{{ asset('assets/frontend/images/partner-logo/cmi-logo.png') }}" alt="" /></li>
                <li><img src="{{ asset('assets/frontend/images/partner-logo/ipscmi.png') }}" alt="" /></li>
                <li><img src="{{ asset('assets/frontend/images/partner-logo/project-manag.png') }}" alt="" /></li>
              </ul>
            </div>
          </div>
          <!--  -->
          <!-- <div class="">
              <h3 class="text-3xl font-medium mt-8 mb-6">Previous Partners</h3>
              <img src="{{ asset('assets/frontend/images/partner-logo/partner_logo.svg') }}" alt="" class="w-full max-w-full">
            </div> -->
          <!--  -->
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="gallery-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col gap-4">
          <div class="gallery-video">
            <h3 class="text-3xl font-medium">VIDEOS | IPSC RIYADH 2024</h3>
            <div class="grid grid-cols-1 mt-6 gap-9 sm:grid-cols-2 md:grid-cols-2">
              <!-- <div>
                  <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/P0LT7P-eYEs"
                    title="IPSC Riyadh Highlight Video" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div> -->
              <!-- <div>
                  <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/YK7DQLvkZWY"
                    title="IPSC Riyadh Highlight Video" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div> -->
            </div>
          </div>
          <div class="gallery-image">
            <h3 class="text-3xl font-bold">PHOTOS | IPSC RIYADH 2024</h3>
            <!-- <ul>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
              </ul> -->
          </div>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row">
          <div class="gallery-image">
            <h3 class="text-3xl font-bold">IPSC RIYADH AWARDS 2024</h3>
            <!-- <ul>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/award/award1.svg') }}" alt="" class="w-full"></li>
              </ul> -->
          </div>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="testimonials-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col gap-4">
          <div class="gallery-image">
            <h3 class="text-3xl font-bold">Testimonials</h3>
            <!-- <ul>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/gallery/gallery1.svg') }}" alt="" class="w-full"></li>
              </ul> -->
          </div>
          <!--  -->
          <!-- <div class="gallery-video">
              <h3 class="text-3xl font-medium">Video Testimonials</h3>
              <div class="grid grid-cols-1 mt-6 gap-9 sm:grid-cols-2 md:grid-cols-2">
                <div>
                  <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/P0LT7P-eYEs"
                    title="IPSC Riyadh Highlight Video" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div>
                  <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/YK7DQLvkZWY"
                    title="IPSC Riyadh Highlight Video" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>
            </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End -->
<!-- Section End Here 8 -->

@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush