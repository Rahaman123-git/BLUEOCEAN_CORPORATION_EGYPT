@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
  <style>
        .blue-small-text{
      font-size: 20px !important;
    color: #00A0E3 !important;
    font-weight: 400 !important;
    line-height:1.5 !important;
    margin-top:4vw !important;
    }
  </style>
@endpush

@section('content')
<!-- Section Starts Here -->
<section>
  <div class="w-full">
    <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls>
      <source src="{{ asset('assets/frontend/images/conference-video/IPSC 2016_3rd International April 16 Dubai.mp4') }}" type="video/mp4" />
      <source src="{{ asset('assets/frontend/images/conference-video/IPSC 2016_3rd International April 16 Dubai.ogv') }}" type="video/ogv" />
      Your browser does not support the video tag.
    </video>
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<section class="relative saudi-vission-block mb-10">
  <div class="container relative">
    <!-- Start -->
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start">
      <!-- Logo Section -->
      <div class="event-details-gap">
        <div class="flex items-baseline space-x-4 justify-center my-5">
          <div class="border-r border-gray-200 pr-10">
            <img src="{{ asset('assets/frontend/images/riyadh/IPSC2026.svg') }}" alt="IPSC Riyadh Logo" class="w-44" />
          </div>
          <img src="{{ asset('assets/frontend/images/palm-dubai-1.png') }}" alt="Kingdom Center Logo" class="w-50 ml-7 h-40 sm:h-auto" />
        </div>
       
      </div>
      <!-- Text Section -->
      <div class="col-span-2 lg:col-span-1 mt-8">
        <div class="ml-5 lg:mt-10">
          <!-- <img src="{{ asset('assets/frontend/images/riyadh/zoho-logo.png') }}" alt="" class="lg:m-0 m-auto mb-5"> -->
          <h1 class="text-2xl lg:text-4xl font-bold text-blue-text-hdr uppercase text-center lg:text-left"><span class="font-bold">Strategic Buying and </br> Beyond in an International Marketplace</h1>
          </p>
        </div>
      </div>
    </div>
    <!-- End -->
    <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left ipsc-stripe"></div>
  </div>
 
        <div
    class="image-rightstripe lg:absolute imgclip-right">
    <img src="{{ asset('assets/frontend/images/all-conference-new/Atalntis-the-plam.webp') }}" alt="" class="w-auto max-w-full">
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<section class="vission-future top-box-gap">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="left-box py-9 px-5 bg-[#013F81] flex items-center">
        <p class="text-white">
          <strong>The 3rd International Procurement & Supply Chain Conference took place in Dubai on April 16, 2016. The event brought together a new generation of dynamic, skilled, innovative, and tech-savvy logistics leaders, successfully bridging the gap between knowledge and infrastructure in the region.

        </p>

        <p></p>
      </div>

      <div class="vission-right">
        <img src="{{ asset('assets/frontend/images/all-conference-new/dubai-2016_grp pic.webp') }}" alt="" class="w-full min-w-full" />
      </div>
    </div>
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<!-- <section class="sponser-details-p mt-20gap">
    <div class="container">
      <h3 class=" text-4xl text-blue-text-hdr font-semibold mb-8">IPSC Conference Sponsors</h3>
     
        <div class="flex flex-col lg:flex-row gap-4 ">
         
       <div class="sponser-box w-1/4">
        <img src="{{ asset('assets/frontend/images/riyadh/nicto-icon.png') }}" alt="">
        <p>Gold Sponsor</p>
       </div>
       <div class="sponser-box w-1/4">
        <img src="{{ asset('assets/frontend/images/riyadh/logiclt-icon.png') }}" alt="">
        <p>Silver Sponsor</p>
       </div>
       <div class="sponser-box w-1/4">
        <img src="{{ asset('assets/frontend/images/riyadh/hair-icon.png') }}" alt="">
        <p>Silver Sponsor</p>
       </div>
       <div class="sponser-box w-1/4">
        <img src="{{ asset('assets/frontend/images/riyadh/sap-icon.png') }}" alt="">
        <p>GSupporting Sponsor</p>
       </div>
      
       
    
    </div>
  
  </div>
  </section> -->
<!-- Section End Here -->

<!-- Start -->
<section class="course-tab-section">
  <div class="container">
  <div id="select-wraper-tab">
            <select id="mobile-tabview" style="display: none;"></select>
        </div>
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
          <button class="inline-block text-white w-full p-3 lg:pr-4" id="courses-styled-tab" data-tabs-target="#keynote-topic" type="button" role="tab" aria-controls="Courses" aria-selected="false">Key Topic</button>
        </li>
        <!-- 
            <li role="presentation" class="w-1/3 border-r-1  md:mb-0 bg-blue-500">
              <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab"
                data-tabs-target="#conference-highlights" type="button" role="tab" aria-controls="training-calendar"
                aria-selected="false">Conference</button>
            </li> -->

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
          <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">Dubai Awards 2016</button>
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
              <p class="text-3xl font-bold mb-4 lg:mb-9">Key Topics</p>
              <ul class="flex flex-col gap-[30px]">
                <!--  -->

                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/dubai-2016-keynote-topics.webp') }}" class="w-full h-full object-cover" />
                          <div class="absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Key Topics:
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Achieving Excellence in Procurement and Supply Management</li>
                          <li class="">Reputational Risk: Gone in 60 Seconds</li>
                          <li class="">Supply Chain Improvement with Data Analysis</li>
                          <li class="">Understanding "Procurement in Projects"</li>
                          <li class="">Connecting Business to Create a Sustainable Future</li>
                          <li class="">Procuring for Business Sustainability</li>
                          <li class="">Complexity in the Supply Chain and Opportunities for Competitive End-to-End Pricing</li>
                          <li>Latest Global Trends in Procurement</li>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/dubai-2016-panel-discussions.webp') }}" class="w-full h-full object-cover" />
                          <div class="absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">Panel Discussions:</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">The Importance of Benchmarking in Supply Chain</li>
                          <li class="">Showcasing International Best Practices in Supply Chain</li>
                          <li class="">Leading Technology Adoption in Business</li>
                          <li class="">Disruption in Procurement: The Shift from Savings-Driven to Value-Driven</li>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/dubai-2016-conference-highlights.webp') }}" class="w-full h-full object-cover" />
                          <div class="absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">Conference Highlights:</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Presentations by internationally reputed speakers from the Middle East, USA, and Europe</li>
                          <li class="">Opportunities to update knowledge, share best practices, and showcase achievements</li>
                          <li class="">Networking sessions with industry leaders</li>
                          <li class="">"Power Lunch" networking opportunity</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
              <p class="font-semibold">This conference emphasized an integrated strategy to procurement and supply chain, positioning UAE as a leading logistics hub.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="speakers-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row w-full">
          <div class="listing-section w-full">
            <div class="mb-10 lg:mb-16">
              <p class="text-3xl font-bold mb-4 lg:mb-5">IPSC Dubai 2016 Advisory Board</p>
              <ul class="speaker-listing-view">
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/LeRoy-h-grow.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. LeRoy H. Graw</h3>
                          <p>President, International Purchasing and Supply Chain Management Institute (IPSCMI), USA</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/new-dr-menon.png') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. Sathya Menon</h3>
                          <p>Executive Director - Academics, Blue Ocean Academy</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/naved-khan.png') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Navaid Khan</h3>
                          <p>Section Head - Contracts, Saudi Chevron Phillips</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/micheal-proffitt.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Michael Proffitt</h3>
                          <p>Ex-CEO, Dubai Logistics City</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/jasim-ali.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. Jasim Al-Ali</h3>
                          <p>Deputy CEO, Dubai Media, Dubai</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/k-rajan.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>K. Rajan</h3>
                          <p>Executive Vice President & Chief Commercial Officer, ITD Cementation India Limited</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/mahammad-ali-habib.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Mohamed Ali Habib</h3>
                          <p>Category Management Head, Industrial Services, Procurement & Logistics, Emirates Steel</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/khalid-khalifa.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Khalid Khalifa</h3>
                          <p>Vice President - Procurement, Fertil</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
              </ul>
            </div>
            <div class="mt-4 lg:mt-9">
              <p class="text-3xl font-bold mb-4 lg:mb-5">IPSC 2016 Keynote Speakers</p>
              <ul class="speaker-listing-view">
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/jhon-eiills.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>John Ellis</h3>
                          <p>Chief Operating Officer, Blue Ocean Academy (Special Session and Welcome)</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/micheal-proffitt.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Michael Proffitt</h3>
                          <p>Ex-CEO, Dubai Logistics City</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/youseef-badwon.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Youssef Beydoun</h3>
                          <p>Head of Group Planning & Compliance, Dubai Airports - Cargo & Logistics</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/tariq-AL-shaik.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Tariq Al Shaikh</h3>
                          <p>Head of MHL, Engineering & Logistics, Engineer’s Office</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/brian-barriskill.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Brian Barriskill</h3>
                          <p>Planning & Customer Services Director, Al Dahra Agriculture - Abu Dhabi</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/akin-birsan.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Akin Birsen</h3>
                          <p>International Director, Ind & Tr. Inc., Turkey</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/samir-abdul-rahaman.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Samer Abdul raheem</h3>
                          <p>Head of Procurement &amp; Logistics, Saudi Gulf Airlines</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/mommad-ali-all.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Mohamed Al Ali</h3>
                          <p>Head of Procurement Transaction Services, First Gulf Bank</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/kurt-warren.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Kurt Warren</h3>
                          <p>Associate Operations Director, Supply &amp; Logistics Department, New York University Abu Dhabi</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
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
                          <h3>Kurt Warren</h3>
                          <p>Associate Operations Director, Supply &amp; Logistics Department, New York University Abu Dhabi</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/sattya-mennon.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. Sathya Menon</h3>
                          <p>Executive Director, Academics, Blue Ocean Academy</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/juwad-almari.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Jawad Alomari</h3>
                          <p>Vice President - Procurement, Selechem Group</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/ramesh-chdambi.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Ramesh Cidambi</h3>
                          <p>Senior Vice President - Retail Services, Dubai Duty Free</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/khalid-khalifa.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Khalid Khalifa</h3>
                          <p>Vice President - Procurement, Fertil</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
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
                          <h3>Michael Stockdale</h3>
                          <p>General Manager, Supply Chain, Al Fasiliyah Group</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/bhabu-pratap.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Bhanu Pratap Singh</h3>
                          <p>Director, Purchase & Logistics, Atlantis The Palm</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/rv-sinibas.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>R. V. Srinivas Rao</h3>
                          <p>Manager Procurement & Logistics, Nuclear Fuel Complex</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/t-bala.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. T. Bala</h3>
                          <p>Managing Director, Acumen Accounting WLL</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/lawrance.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Lawrence Koh</h3>
                          <p>Director - Reverse Supply Chain Operations, Cleveland Clinic Abu Dhabi</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="sponsors-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col">
          <div class="main-sponsor">
            <div class="flex flex-wrap">
              <div class="bg-white p-3 mb-4 mr-4">
                <h3 class="mb-2 lg:mb-6 font-bold">Platinum Sponsor</h3>
                <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/nicto-icon.png') }}" alt="" width="180" /></li>
                </ul>
              </div>
              <div class="bg-white p-3 mb-4 mr-4">
                <h3 class="mb-2 lg:mb-6 font-bold">Technology Partner</h3>
                <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/sap-icon.png') }}" alt="" width="180" /></li>
                </ul>
              </div>
              <div class="bg-white p-3 mb-4 mr-4">
                <h3 class="mb-2 lg:mb-6 font-bold">Gold Sponsors</h3>
                <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/logiclt-icon.png') }}" alt="" width="180" /></li>
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/snbo-icon.png') }}" alt="" width="180" /></li>
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/hair-icon.png') }}" alt="" width="180" /></li>
                </ul>
              </div>
              <div class="bg-white p-3 mb-4 mr-4">
                <h3 class="mb-2 lg:mb-6 font-bold">Silver Sponsors</h3>
                <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/zebra-icon.png') }}" alt="" width="180" /></li>
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/kenoo-icon.png') }}" alt="" width="180" /></li>
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/sms-icon.png') }}" alt="" width="180" /></li>
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/intertec.png') }}" alt="" width="180" /></li>
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/gold-frinch.png') }}" alt="" width="180" /></li>
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/cricket-sports.png') }}" alt="" width="180" /></li>
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/hafet-icon.png') }}" alt="" width="180" /></li>
                </ul>
              </div>
              <div class="bg-white p-3 mb-4 mr-4">
                <h3 class="mb-2 lg:mb-6 font-bold">Strategic Partners</h3>
                <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/ipscmi-icon.png') }}" alt="" width="180" /></li>
                  <li class="mr-8 border-r pr-8">Need Logo from Client</li>
                </ul>
              </div>
              <div class="bg-white p-3 mb-4 mr-4">
                <h3 class="mb-2 lg:mb-6 font-bold">Media Partner</h3>
                <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/procarement.png') }}" alt="" width="180" /></li>
                </ul>
              </div>
              <div class="bg-white p-3 mb-4 mr-4">
                <h3 class="mb-2 lg:mb-6 font-bold">Lanyard Partner</h3>
                <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/jenae-icon.png') }}" alt="" width="180" /></li>
                </ul>
              </div>
              <div class="bg-white p-3 mb-4 mr-4">
                <h3 class="mb-2 lg:mb-6 font-bold">Social Media Partner</h3>
                <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/wow-icon.png') }}" alt="" width="180" /></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="gallery-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col gap-4">
          <div class="gallery-video">
            <h3 class="text-3xl font-bold mb-4">VIDEOS</h3>
            <div class="grid grid-cols-1 mt-6 gap-4 sm:grid-cols-2 md:grid-cols-2">
              <div class="pb-5">
                <iframe
                  class="w-full aspect-video ..."
                  src="https://www.youtube.com/embed/-0h92GFSZ0w"
                  title="IPSC Riyadh Highlight Video"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="pb-5">
                <iframe
                  class="w-full aspect-video ..."
                  src="https://www.youtube.com/embed/lBuNRU6qesc"
                  title="IPSC Riyadh Highlight Video"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="pb-5">
                <iframe
                  class="w-full aspect-video ..."
                  src="https://www.youtube.com/embed/RTmZ9v47z_U"
                  title="IPSC Riyadh Highlight Video"
                  frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen
                ></iframe>
              </div>
              <div class="pb-5">
                <iframe
                  class="w-full aspect-video ..."
                  src="https://www.youtube.com/embed/5wVarxovZTQ"
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
        <div class="gallery-image mt-5">
          <h3 class="text-3xl font-bold mb-4">Gallery</h3>
          <ul>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0650.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0624.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0644.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0615.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0611.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0584.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0580.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0492.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0559.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0555.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0479.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0428.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0446.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0441.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0434.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/991A3113.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/991A3086.JPG') }}" alt="" class="w-full" /></li>
          
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/991A3048.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/991A2998.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/991A2882.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/991A2795.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A1087.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A1084.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0930.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0912.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0876.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0853.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0827.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0790.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0710.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0669.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0665.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-2016-dubai/967A0662.JPG') }}" alt="" class="w-full" /></li>
          </ul>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row">
          <div class="gallery-image">
            <h3 class="text-3xl font-bold">Dubai AWARDS 2016</h3>
            <!-- <ul>
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

            <div class="flex flex-col gap-4">
              <div class="gallery-video">
                <div class="grid grid-cols-1 mt-6 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
                  <div class="pb-5">
                    <iframe
                      class="w-full aspect-video ..."
                      src="https://www.youtube.com/embed/SeYYbXXSocQ"
                      title="IPSC Riyadh Highlight Video"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="pb-5">
                    <iframe
                      class="w-full aspect-video ..."
                      src="https://www.youtube.com/embed/vDdS6OkCV04"
                      title="IPSC Riyadh Highlight Video"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="pb-5">
                    <iframe
                      class="w-full aspect-video ..."
                      src="https://www.youtube.com/embed/CUtup40UbiY"
                      title="IPSC Riyadh Highlight Video"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="pb-5">
                    <iframe
                      class="w-full aspect-video ..."
                      src="https://www.youtube.com/embed/O4rVISphR7c"
                      title="IPSC Riyadh Highlight Video"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="pb-5">
                    <iframe
                      class="w-full aspect-video ..."
                      src="https://www.youtube.com/embed/-Kp8n2Q5_5U"
                      title="IPSC Riyadh Highlight Video"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>

                  <div class="pb-5">
                    <iframe
                      class="w-full aspect-video ..."
                      src="https://www.youtube.com/embed/xjADGSCMKIw"
                      title="IPSC Riyadh Highlight Video"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>

                  <div class="pb-5">
                    <iframe
                      class="w-full aspect-video ..."
                      src="https://www.youtube.com/embed/a-gP4qJyF_U"
                      title="IPSC Riyadh Highlight Video"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="pb-5">
                    <iframe
                      class="w-full aspect-video ..."
                      src="https://www.youtube.com/embed/qnyvfuuNvzI"
                      title="IPSC Riyadh Highlight Video"
                      frameborder="0"
                      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen
                    ></iframe>
                  </div>
                  <div class="pb-5">
                    <iframe
                      class="w-full aspect-video ..."
                      src="https://www.youtube.com/embed/jgMaKCJpoCM"
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
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

@push('scripts')
 <script src="{{ asset('assets/frontend/js/tab-select.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush