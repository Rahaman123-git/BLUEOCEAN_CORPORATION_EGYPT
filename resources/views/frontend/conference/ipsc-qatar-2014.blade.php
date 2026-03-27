@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
<!-- Section Starts Here -->
<section>
  <div class="w-full">
    <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls>
      <source src="{{ asset('assets/frontend/images/conference-video/IPSC_International Conference_Feb 8_Doha-Qatar.mp4') }}" type="video/mp4" />
      <source src="{{ asset('assets/frontend/images/conference-video/IPSC_International Conference_Feb 8_Doha, Qatar.ogv') }}" type="video/ogv" />
     
      Your browser does not support the video tag.
    </video>
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<section class="relative saudi-vission-block mb-10">
  <div class="container  relative">
    <!-- Start -->
    <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start">
      <!-- Logo Section -->
      <div class="event-details-gap">
        <div class="flex items-baseline space-x-4 justify-center my-5">
          <div class="border-r border-gray-200 pr-10">
            <img src="{{ asset('assets/frontend/images/riyadh/IPSC2026.svg') }}" alt="IPSC Riyadh Logo" class="w-44" />
          </div>
          <img src="{{ asset('assets/frontend/images/ipsc-home/sheraton.png') }}" alt="Kingdom Center Logo" class="w-30 ml-7 h-28 sm:h-auto" />
        </div>
      
      </div>
      <!-- Text Section -->
      <div class="col-span-2 lg:col-span-1 mt-8">
        <div class="ml-5 lg:mt-10">
          <!-- <img src="{{ asset('assets/frontend/images/riyadh/zoho-logo.png') }}" alt="" class="lg:m-0 m-auto mb-5"> -->
          <h1 class="text-2xl lg:text-4xl font-bold text-headline uppercase text-center lg:text-left">Evolution in Procurement:</h1>

          <p class="text-light-blue-color uppercase text-5xl font-bold text-center lg:text-left">
            <span class="text-2xl text-black font-medium">Challenges Ahead</span>
            <br />
            IPSC Qatar <br />
            2014
          </p>
        </div>
     
      </div>
    </div>
    <!-- End -->
    <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left ipsc-stripe"></div>
  </div>
  <div class="image-rightstripe lg:absolute imgclip-right">
    <img src="{{ asset('assets/frontend/images/all-conference-new/quter-Venue-pic.webp') }}" alt="" class="w-auto max-w-full">
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<section class="vission-future top-box-gap">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="left-box py-9 px-5 bg-[#013F81] flex items-center">
        <p class="text-white text-2xl">
          <strong>The first International Procurement and Supply Chain Conference (IPSC) was held on February 8, 2014, in Doha, Qatar. This landmark event brought together procurement and supply chain professionals from over 200 companies across the Middle East, particularly Qatar to explore evolving procurement competencies.

        </p>

        <p></p>
      </div>

      <div class="vission-right">
        <img src="{{ asset('assets/frontend/images/speaker-images/qatar.png') }}" alt="" class="w-full min-w-full" />
      </div>
    </div>
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->

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
          <button class="inline-block text-white w-full p-3 lg:pr-4" id="courses-styled-tab" data-tabs-target="#keynote-topic" type="button" role="tab" aria-controls="Courses" aria-selected="false">Key Highlights:</button>
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
          <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">IPSC Awards 2014</button>
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
              <p class="text-3xl font-bold mb-4 lg:mb-9">Key Highlights:</p>
              <ul class="flex flex-col gap-[30px]">
                <!--  -->

                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/Keynote-Topics.webp') }}" class="w-full h-full object-cover" />
                          <div class="absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Keynote Topics:
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Trends and Innovations in Supply Chain Management</li>
                          <li class="">Strategic Procurement: The Next Frontier</li>
                          <li class="">Risk Management in Global Supply Chains</li>
                          <li class="">The Role of Technology in Modern Procurement</li>
                          <li class="">Sustainable and Ethical Sourcing Practices</li>
                          <li class="">Logistics and Transportation Challenges in the Middle East</li>
                          <li class="">Developing Procurement Leaders for the Future</li>
                          <li class="">Cost Optimization Strategies in Supply Chain Operations</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <!--  -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="conference-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
      <div class="flex flex-col lg:flex-row w-full">
        <div class="listing-section w-full">
          <p class="text-3xl font-bold mb-4 lg:mb-9">Conference Highlights:</p>
          <ul class="flex flex-col gap-[30px]">
            <li>
              <div class="bg-white">
                <div class="flex flex-col lg:flex-row items-center">
                  <div class="w-full lg:basis-[40%]">
                    <div class="image-overlap relative imgclip-right">
                      <img src="{{ asset('assets/frontend/images/all-conference-new/keynote-speaker.webp') }}" class="w-full h-full object-cover" />
                      <div class="image-content absolute">
                        <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                          <!-- <p class="text-white font-bold text-xl xl:text-3xl">
                                KEYNOTE SPEAKERS
                              </p> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                    <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                      <li class="">Industry experts from the Middle East, USA, and Europe shared their insights and experiences at the conference.</li>
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
                      <img src="{{ asset('assets/frontend/images/all-conference-new/take-home-a-world of knowledge.webp') }}" class="w-full h-full object-cover" />
                      <div class="image-content absolute">
                        <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                          <!-- <p class="text-white font-bold text-xl xl:text-3xl">
                                TAKE HOME A ‘WORLD OF KNOWLEDGE’ </p> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                    <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                      <li class="">From inspiring keynote sessions to engaging closing panel discussions, the conference offered continuous opportunities to learn and grow.</li>
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
                      <img src="{{ asset('assets/frontend/images/all-conference-new/network.webp') }}" class="w-full h-full object-cover" />
                      <div class="image-content absolute">
                        <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                          <!-- <p class="text-white font-bold text-xl xl:text-3xl">
                                NETWORK
                              </p> -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                    <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                      <li class="">Attendees took full advantage of both formal and informal moments to connect with colleagues and peers, exchange ideas, and explore new opportunities.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <!--  -->
            <!--  -->
            
            <!--  -->
            <!--  -->
          </ul>
        </div>
      </div>
    </div>
    <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="speakers-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
      <div class="flex flex-col lg:flex-row w-full">
        <div class="listing-section w-full">
          <div class="mb-10 lg:mb-16">
            <p class="text-3xl font-bold mb-4 lg:mb-5">Speakers</p>
            <ul class="speaker-listing-view mb-10">
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
                        <p>President, International Purchasing and Supply Chain Management Institute, USA</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/sattya-mennon.png') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Dr. Sathya Menon</h3>
                        <p>Executive Director Academics, Blue Ocean Academy</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/naved-khan.webp') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Mr. Navaid Khan</h3>
                        <p>Section Head – Contracts, Saudi Chevron Phillips</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <!--  -->
            </ul>

            <p class="text-3xl font-bold mb-4 lg:mb-8">Keynote Speakers:</p>
            <ul class="speaker-listing-view">
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/speaker-images/sp-2014-1.webp') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>John Ellis</h3>
                        <p>Chief Operating Officer, Blue Ocean Corporation; Former CEO of Middle East Aerospace; Former Commercial Director – Fujairah International Airport</p>
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
                        <p>New York University, Abu Dhabi – Spoke on "Establishing a Research Supply Chain."</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/sp-2014-3.webp') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Dr. Farrukh Kidwai</h3>
                        <p>Chief Executive, Operational Excellence, FZE, UAE – Presented on "Achieving Excellence in your Value Stream."</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/sameer.webp') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Sameer Abdulraheem</h3>
                        <p>Vice President Procurement, Qatar Airways Group – Discussed "Procurement Transformation between Success & Challenges."</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/benu.webp') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Benu Chatterjee</h3>
                        <p>General Manager - Purchase (International Operations), Sterling & Wilson – Covered "Procurement Evolution: Purchasing, Strategic Sourcing & Supply Relationship Management (SRM)."</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/amr.webp') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Amr Tawfik</h3>
                        <p>Region Logistics Manager, Weatherford Oil Tools ME – Addressed "Innovation Driven Procurement Vision Challenges."</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/sp-2014-6.webp') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Rajesh M. Bhandari</h3>
                        <p>Director, Arihant Education Foundation.</p>
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
      <div class="flex flex-col lg:flex-row w-full">
        <div class="listing-section w-full">
          <p class="text-3xl font-bold mb-4 lg:mb-9">Panel Discussions:</p>
          <ul class="flex flex-col gap-[30px]">
            <li>
              <div class="bg-white">
                <div class="flex flex-col lg:flex-row items-center">
                  <div class="w-full lg:basis-[40%]">
                    <div class="image-overlap relative imgclip-right">
                      <img src="{{ asset('assets/frontend/images/course/course-list1.png') }}" class="w-full h-full object-cover" />
                      <div class="image-content absolute">
                        <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                          <p class="text-white font-bold text-xl xl:text-3xl">Panel Discussion 1</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                    <ul class="list-none lg:mr-12 pl-10 tab-listright">
                      <li class="">"Why Benchmarking is Important to Supply Chain?" – Highlighted the adoption of new best practices to improve supply chain performance.</li>
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
                      <div class="image-content absolute">
                        <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                          <p class="text-white font-bold text-xl xl:text-3xl">
                            Panel Discussion 2
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                    <ul class="lg:mr-12 pl-10 tab-listright list-none">
                      <li class="">"Showcasing International Best Practices in Supply Chain" – Explored the comprehensive role of the supply chain in business practices, encompassing all "Buy-Make-Move-Sell-Stock" processes.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <!--  -->
            <!--  -->
          </ul>
        </div>
      </div>
    </div>

    <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="sponsors-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
      <div class="flex flex-col">
        <div class="main-sponsor">
          <div class="flex flex-wrap">
            <div class="bg-white p-3 mb-4 mr-4">
              <h3 class="mb-2 lg:mb-6 font-bold">Under the Honourable Patronage of:</h3>
              <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/dubai/Sheikh-Hamdan-bin-Mohamed-bin-Ahmed-Al-Maktoum.webp') }}" alt="" class="w-full max-w-max" /></li>
              </ul>
            </div>

            <div class="bg-white p-3 mb-4 mr-4">
              <h3 class="mb-2 lg:mb-6 font-bold">Title Sponsor:</h3>
              <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/dubai/titel-sponser.webp') }}" alt="" width="180" /></li>
              </ul>
            </div>
            <div class="bg-white p-3 mb-4 mr-4">
              <h3 class="mb-2 lg:mb-6 font-bold">Powered By:</h3>
              <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/dubai/gls-logo.webp') }}" alt="" width="180" /></li>
              </ul>
            </div>
            <div class="bg-white p-3 mb-4 mr-4">
              <h3 class="mb-2 lg:mb-6 font-bold">Gold Sponsors</h3>
              <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/dubai/byjus-logo.webp') }}" alt="" width="180" /></li>
                <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/dubai/hypermedia-logo.webp') }}" alt="" width="180" /></li>
              </ul>
            </div>
            <!-- <div class="bg-white p-3  mb-4 mr-4">
                    <h3 class="mb-2 lg:mb-6 font-bold">Silver Sponsors</h3>
                    <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                      <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/zebra-icon.png') }}" alt="" width="180"></li>
                      <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/kenoo-icon.png') }}" alt="" width="180"></li>
                      <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/sms-icon.png') }}" alt="" width="180"></li>
                      <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/intertec.png') }}" alt="" width="180"></li>
                      <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/gold-frinch.png') }}" alt="" width="180">
                      </li>
                      <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/cricket-sports.png') }}" alt="" width="180">
                      </li>
                      <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/hafet-icon.png') }}" alt="" width="180"></li>
                    </ul>
                  </div> -->
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
          <li><img src="{{ asset('assets/frontend/images/riyadh/gallery1.webp') }}" alt="" class="w-full" /></li>
          <li><img src="{{ asset('assets/frontend/images/riyadh/gallery2.webp') }}" alt="" class="w-full" /></li>
          <li><img src="{{ asset('assets/frontend/images/riyadh/gallery3.webp') }}" alt="" class="w-full" /></li>
          <li><img src="{{ asset('assets/frontend/images/riyadh/gallery4.webp') }}" alt="" class="w-full" /></li>
          <li><img src="{{ asset('assets/frontend/images/riyadh/gallery5.webp') }}" alt="" class="w-full" /></li>
          <li><img src="{{ asset('assets/frontend/images/riyadh/gallery6.webp') }}" alt="" class="w-full" /></li>
          <li><img src="{{ asset('assets/frontend/images/riyadh/gallery7.webp') }}" alt="" class="w-full" /></li>
          <li><img src="{{ asset('assets/frontend/images/riyadh/gallery8.webp') }}" alt="" class="w-full" /></li>
        </ul>
      </div>
    </div>

    <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
      <div class="flex flex-col lg:flex-row">
        <div class="gallery-image">
          <h3 class="text-3xl font-bold">IPSC QATAR AWARDS</h3>
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
</section>
<!-- End -->
@endsection

@push('scripts')
<script src="{{ asset('assets/frontend/js/tab-select.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush