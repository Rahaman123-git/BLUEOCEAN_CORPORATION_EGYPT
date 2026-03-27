@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
<!-- Section Starts Here -->
<section>
  <div class="w-full">
    <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" control>
      <source src="{{ asset('assets/frontend/images/conference-video/IPSC_4th_International_April 16_ ABU_DHABI.mp4') }}" type="video/mp4" />
      <source src="{{ asset('assets/frontend/images/conference-video/IPSC_4th_International_April 16_ ABU_DHABI.ogv') }}" type="video/ogv" />
      <source src="http://www.example.com/CorporateVideo.webm" type="video/webm" />
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
          <img src="{{ asset('assets/frontend/images/riyadh/emirates-logo.png') }}" alt="emirates Logo" class="w-50 ml-7 h-40 sm:h-auto" />
        </div>
        
      </div>
      <!-- Text Section -->
      <div class="col-span-2 lg:col-span-1 mt-8">
        <div class="ml-5 lg:mt-10">
          <!-- <img src="{{ asset('assets/frontend/images/riyadh/zoho-logo.png') }}" alt="" class="lg:m-0 m-auto mb-5"> -->
          <h1 class="text-2xl lg:text-4xl font-bold text-headline uppercase text-center lg:text-left">
            SUSTAINABLE PROCUREMENT & <br />
            SUPPLY CHAIN, MANAGING RISK AND POWERING INNOVATION
          </h1>

          <p class="text-light-blue-color uppercase text-5xl font-bold text-center lg:text-left">
            <span class="text-2xl text-black font-medium">Supporting</span>
            <br />
            IPSC Abu Dhabi <br />
            2016
          </p>
        </div>
      
      </div>
    </div>
    <!-- End -->
    <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left ipsc-stripe"></div>
  </div>
  <div class="image-rightstripe lg:absolute imgclip-right">
    <img src="{{ asset('assets/frontend/images/all-conference-new/Abubhai venue pic.webp') }}" alt="" class="w-auto max-w-full">
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<section class="vission-future top-box-gap">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="left-box py-9 px-5 bg-[#013F81] flex items-center">
        <p class="text-white text-2xl">
          <strong>The International Procurement and Supply Chain Conference (IPSC) 2016 in Abu Dhabi was a significant event that brought together professionals and experts in the procurement and supply chain sectors.
        </p>
      </div>
      <div class="vission-right">
        <img src="{{ asset('assets/frontend/images/all-conference-new/abu dhabi_2016DSC_7377 _grp pic1.webp') }}" alt="" class="w-full min-w-full" />
      </div>
    </div>
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<!-- <section class="sponser-details-p mt-20gap">
  <div class="container">
    <h3 class=" text-4xl text-blue-text-hdr font-semibold mb-8">IPSC Conference Sponsors</h3>

    <div class="flex flex-wrap gap-2 lg:flex-row">
         
       <div class="sponser-box w-50 lg:w-1/4">
        <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39 (1).png') }}" alt="">
        <p>Gold Sponsor</p>
       </div>
       <div class="sponser-box w-50 lg:w-1/4">
        <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39 (2).png') }}" alt="">
        <p>Silver Sponsor</p>
       </div>
       <div class="sponser-box w-50 lg:w-1/4">
        <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39 (3).png') }}" alt="">
        <p>Silver Sponsor</p>
       </div>
       <div class="sponser-box w-50 lg:w-1/4">
        <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39.png') }}" alt="">
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
          <button class="inline-block text-white w-full p-3 lg:pr-4" id="courses-styled-tab" data-tabs-target="#keynote-topic" type="button" role="tab" aria-controls="Courses" aria-selected="false">Key Topics</button>
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
          <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">IPSC Awards 2016</button>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/Key Highlights.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
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
                          <li class="">Strategic Procurement and Its Impact on Organizational Success</li>
                          <li class="">Innovations in Supply Chain Management</li>
                          <li class="">Risk Management in Global Supply Chains</li>
                          <li class="">Sustainable Procurement Practices</li>
                          <li class="">The Role of Technology in Modern Procurement</li>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/Conference Highlights.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">Conference Highlights:</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Engaging panel discussions on current trends and challenges in procurement and supply chain management</li>
                          <li class="">Networking opportunities with industry leaders and professionals.</li>
                          <li class="">Workshops focusing on skill development and best practices.</li>
                          <li class="">Exhibitions showcasing the latest tools and technologies in the industry.</li>
                        </ul>
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

      <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="conference-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row w-full">
          <div class="listing-section w-full">
            <p class="text-3xl font-bold mb-4 lg:mb-9">Conference</p>
            <ul class="flex flex-col gap-[30px]">
              <!-- <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row  items-center">
                        <div class="w-full lg:w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/course/course-list1.png') }}" class="w-full h-full object-cover ">
                            <div class="image-content absolute">
                              <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
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
                              <div
                                class="flex items-center justify-center lg:justify-start lg:items-start flex-col sm:flex-row">
                                <div class="lg:w-1/3 w-full sm:w-1/2 text-center lg:text-left">
                                  <p class="text-black font-medium"><span>Over</span></p>
                                  <h2 class="text-black text-6xl font-semibold">800</h2>
                                  <p class=" text-black ">Delegates<br> from </p>
                                </div>
                                <div class="xl:w-1/2 w-full sm:w-1/2 text-center lg:text-left pb-4">
                                  <h2 class="text-black text-6xl font-semibold lg:mt-6 mt-0">400+</h2>
                                  <p class="text-black lg:left-8">Organizations <br>including procurement <br>and supply
                                    chain <br>professionals.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li> -->
              <!--  -->
              <!-- <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row  items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/course/course-list1.png') }}" class="w-full h-full object-cover ">
                            <div class="image-content absolute">
                              <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
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
                            <li class="">Gaining actionable insights to enhance supply chain operations.
                            </li>
                            <li class="">Showcasing contributions to the advancement of supply chain and logistics
                              practices.
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li> -->
              <!--  -->
            </ul>
          </div>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="speakers-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row w-full">
          <div class="listing-section w-full">
            <div class="mb-10 lg:mb-16">
              <p class="text-3xl font-bold mb-4 lg:mb-5">IPSC Abu Dhabi 2016 Advisory Board</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/sattya-mennon.webp') }}" class="w-full h-full object-cover" />
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
                          <p>Category Management Head, Industrial Services - Procurement & Logistics, Emirates Steel</p>
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
              </ul>
            </div>
            <div class="mt-4 lg:mt-9">
              <p class="text-3xl font-bold mb-4 lg:mb-5">Keynote Speakers</p>
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
                          <p>Chief Operating Officer, Blue Ocean Academy</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/ali-alkatari.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Ali Alkahtiri</h3>
                          <p>Director, SC Process Excellence, SABIC</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/mahammad-ali-habib.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Mohamed Ali Habib</h3>
                          <p>Category Management Head, Emirates Steel</p>
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
                          <h3>Samer Abdulraheem</h3>
                          <p>Head of Procurement & Logistics, Saudi Gulf Airlines</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/David-McNamara.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>David McNamara</h3>
                          <p>Director of Logistics, Cleveland Clinic, Abu Dhabi</p>
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
                          <p>Associate Operations Director, Supply & Logistics Department, New York University Abu Dhabi</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/micheal-stocdale.webp') }}" class="w-full h-full object-cover" />
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/brian-barriskill.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Brian Barriskill</h3>
                          <p>Planning & Customer Services Director, Al Dahra Agriculture</p>
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
                          <h3>Tariq Alshaikh</h3>
                          <p>Head of MHL, Engineer’s Office</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/leena-pawani.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Leena Parwani</h3>
                          <p>Founder & CEO, iCareinsure</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/shailan-shukla.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Shailen Shukla</h3>
                          <p>Head, Logistics Division, Jumbo Electronics</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/srinibas-roy.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Srinivas Rao</h3>
                          <p>Procurement Manager, Qatar Airways</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/abhijet-dabdhar.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Abhijit Devdhar</h3>
                          <p>Head of Procurement, Centrum General Trading</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/lotfi-nashat.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Lotfy Nashaat Yasin</h3>
                          <p>Supply Chain Executive Manager, Alfanar</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/rajesh-bhandari.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Rajesh M. Bhandari</h3>
                          <p>Director, Arihant Education Foundation</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/najmul-hassan.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Najmul Hussain</h3>
                          <p>Projects Director, Dubai South (Formerly Dubai World Central)</p>
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
          <!--  -->
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
          <!--  -->
          <!-- <div class="mt-8">
                <h3 class="text-3xl font-medium">Knowledge Partners</h3>
                <div class="bg-white md:py-5 md:px-10 mt-6 py-4 px-4">

                  <ul class="sponsor-list">
                    <li><img src="{{ asset('assets/frontend/images/partner-logo/ascm-logo.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/frontend/images/partner-logo/cips-logo.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/frontend/images/partner-logo/hedef.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/frontend/images/partner-logo/icsmeb.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/frontend/images/partner-logo/instutof-arb.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/frontend/images/partner-logo/sponser10.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/frontend/images/partner-logo/amarican_icon.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/frontend/images/partner-logo/cmi-logo.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/frontend/images/partner-logo/ipscmi.png') }}" alt=""></li>
                    <li><img src="{{ asset('assets/frontend/images/partner-logo/project-manag.png') }}" alt=""></li>
                  </ul>
                </div>
              </div> -->
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
            <li><img src="{{ asset('assets/frontend/images/ipsc-abu-dhabi-2016/DSC_7456.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-abu-dhabi-2016/DSC_7352.JPG') }}" alt="" class="w-full" /></li>
             <li><img src="{{ asset('assets/frontend/images/ipsc-abu-dhabi-2016/DSC_6791.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-abu-dhabi-2016/DSC_6857.JPG') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ipsc-abu-dhabi-2016/DSC_7049.JPG') }}" alt="" class="w-full" /></li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-abu-dhabi-2016/DSC_7301.JPG') }}" alt="" class="w-full" /></li>
                 <li><img src="{{ asset('assets/frontend/images/ipsc-abu-dhabi-2016/DSC_7377.JPG') }}" alt="" class="w-full" /></li>
          </ul>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row">
          <div class="gallery-image">
            <h3 class="text-3xl font-bold">IPSC RIYADH AWARDS 2024</h3>
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
        <div class="lightbox">
        <span class="close">&times;</span>
        <span class="prev">&#10094;</span>
        <img id="lightbox-img" src="" alt="" />
        <span class="next">&#10095;</span>
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