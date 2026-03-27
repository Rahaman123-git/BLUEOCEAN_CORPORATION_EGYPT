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
      <source src="https://bocdemosite.sacloud.online/assets/frontend/images/riyadh/banner-video.mp4" type="video/mp4">
      <source src="#" type="video/ogv">
      <source src="#" type="video/webm">
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
          <img src="{{ asset('assets/frontend/images/riyadh/al-faisaliah-tower.png') }}" alt="Kingdom Center Logo" class="w-30 ml-7 h-28 sm:h-auto" />
        </div>
       
      </div>
      <!-- Text Section -->
      <div class="col-span-2 lg:col-span-1 mt-8">
        <div class="ml-5">
          <img src="{{ asset('assets/frontend/images/zoho-logo.png') }}" alt="" class="" />
          <h1 class="text-2xl lg:text-4xl font-bold text-blue-text-hdr uppercase text-center lg:text-left">Aligning Procurement & Supply Chain with Business Delivery</h1>
          <p class="border-top-text uppercase">
            
          </p>
          <p class="inspried-text uppercase">
            <br />
            <span>         
              <br />
             
            </span>
          </p>
        </div>
       
      </div>
    </div>
    <!-- End -->
    <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left ipsc-stripe"></div>
  </div>
  <div
     class="image-rightstripe lg:absolute imgclip-right">
     <img src="{{ asset('assets/frontend/images/all-conference-new/Riyadh 2016 venue image.webp') }}" alt="London" class="w-auto max-w-full">
   </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<section class="vission-future top-box-gap">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="left-box py-9 px-5 bg-[#013F81] flex items-center">
        <p class="text-white text-2xl">
          <strong>IPSC Riyadh 2016 was held on 12th November 2016 at Al Faisaliah Hotel, Riyadh, Kingdom of Saudi Arabia,  a gathering of eminent logistics and supply chain thought leaders who thought globally and shared strategic insights.

        </p>
      </div>
      <div class="vission-right">
        <img src="{{ asset('assets/frontend/images/riyadh/riyad-2016-omag.png') }}" alt="" class="w-full min-w-full" />
      </div>
    </div>
  </div>
</section>
<!-- Section End Here -->
<!-- <section class="sponser-details-p mt-20gap">
  <div class="container">
    <h3 class=" text-4xl text-blue-text-hdr font-semibold mb-8">IPSC Conference Sponsors</h3>

    <div class="flex flex-col lg:flex-row gap-4 ">

      <div class="sponser-box w-1/4">
        <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39 (1).png') }}" alt="">
        <p>Gold Sponsor</p>
      </div>
      <div class="sponser-box w-1/4">
        <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39 (2).png') }}" alt="">
        <p>Silver Sponsor</p>
      </div>
      <div class="sponser-box w-1/4">
        <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39 (3).png') }}" alt="">
        <p>Silver Sponsor</p>
      </div>
      <div class="sponser-box w-1/4">
        <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39.png') }}" alt="">
        <p>GSupporting Sponsor</p>
      </div>


    </div>

  </div>
</section> -->
<!-- Start -->
<section class="course-tab-section">
  <div class="container">
  <div id="select-wraper-tab">
            <select id="mobile-tabview" style="display: none;"></select>
        </div>
    <div class="border-b-2 border-secondary">
      <ul
        class="flex flex-wrap text-sm font-medium justify-around text-center gap-[2px] md:flex-nowrap tablist-links"
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
          <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab" data-tabs-target="#conference-highlights" type="button" role="tab" aria-controls="training-calendar" aria-selected="false">
            Conference Highlights
          </button>
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
          <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">IPSC Riyadh Awards 2016</button>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-2016-Technology & Innovation.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Technology & Innovation
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Disruptive technologies shaping procurement and supply chains</li>
                          <li class="">Cybersecurity in procurement processes</li>
                          <li class="">Big data analytics for business insights</li>
                          <li class="">Supplier Enabled Innovation</li>
                          <li class="">Internet of Things (IoT) in procurement</li>
                          <li class="">e-Invoicing and Procure-to-Pay systems</li>
                          <li class="">Mobile-enabled procurement solutions</li>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-2016-Strategy & Supply Chain Excellence.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">Strategy & Supply Chain Excellence:</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Contract management best practices</li>
                          <li class="">Procurement as a strategic function</li>
                          <li class="">Strategic sourcing and performance optimization</li>
                          <li class="">Category strategy development</li>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-2016-Leadership.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">Leadership:</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Competency building for competitive advantage</li>
                          <li class="">Talent management and leadership development</li>
                          <li class="">Culture of continuous improvement</li>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-2016-Sustainable Supply Chain.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">Sustainable Supply Chain:</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Sustainability in procurement and supply chain</li>
                          <li class="">Green procurement initiatives</li>
                          <li class="">Sustainability performance measurement and reporting</li>
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
            <p class="text-3xl font-bold mb-4 lg:mb-9">Conference Highlights</p>
            <ul class="flex flex-col gap-[30px]">
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:w-full lg:basis-[40%]">
                      <div class="image-overlap relative imgclip-right">
                        <img src="{{ asset('assets/frontend/images/all-conference-new/ritadh-2016-participent.webp') }}" class="w-full h-full object-cover" />
                        <div class="image-content absolute">
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
                              <h2 class="text-black text-6xl font-semibold lg:mt-6 mt-0">500</h2>
                              <p class="text-black lg:left-8">
                                Organisations across <br />
                                the Middle East, <br />
                                particularly from KSA
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
                        <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-2016-focus-area.webp') }}" class="w-full h-full object-cover" />
                        <div class="image-content absolute">
                          <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                            <p class="text-white font-bold text-xl xl:text-3xl">
                              Expert Insights
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                     <p> Renowned experts and thought leaders in procurement and supply chain management shared their experiences, success stories, and practical insights.</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="speakers-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row w-full pb-9">
          <div class="listing-section w-full">
            <p class="text-3xl font-bold mb-4 lg:mb-9">Speakers</p>
            <ul class="speaker-listing-view">
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/speaker-images/Meraee-AL-Qahtani-1.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Abdulrahman-AlMuaibid.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Muath-Abdulkarim.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/sattya-mennon.png') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/mohammed-al-ali.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Osama-Humoud-1.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Dr-mohammed.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/abdul-azeez.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/sultan.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/bayan.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/bamuqabil.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/maan.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Ehab.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Mozzamil Aissa.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/andrew-sanderson.png') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Yaqub.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Saleh-Althamer.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Majed-Alfaraj.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Ata-Elyas.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Yusuf-AlHasan.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Dr.-Dalia-Ahmed-Gheit.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/sultan.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/grant-swapnil.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Yasmin-Adel-Aboualy.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Fadhilah-Hassan.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/sam.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/rana1.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/vipin-vaidyanatha.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Ali-Mohammed-Al-Qahtani.webp') }}" class="w-full h-full object-cover" />
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/dr-bandar.webp') }}" class="w-full h-full object-cover" />
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
        <div class="flex flex-col lg:flex-row w-full margin-top50 mt-8">
          <div class="listing-section w-full">
            <p class="text-3xl font-bold mb-4 lg:mb-9">IPSC Riyadh 2016 KeyNote Speakers</p>
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
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/speaker-images/don-border.jpg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Don Barber</h3>
                        <p>Regional Supply Chain Manager, The Kanoo Group</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/micheal-stocdale.webp') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Michael Stockdale</h3>
                        <p>General Manager - Supply Chain, Al Fasiliyah Group</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/mohammed-al-ali.webp') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Mohamed Al Ali</h3>
                        <p>Senior Vice President, Head of Global Transaction Services, First Gulf Bank</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/sam.webp') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Sam Achampong</h3>
                        <p>Regional Director, CIPS (MENA)</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/khalid-khalifa.png') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Khalid Khalifa</h3>
                        <p>Vice President Procurement, Fertil</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Maher-Amin.jpg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Maher Amin Alotaibi</h3>
                        <p>Director Logistics & Supply Chain, Mejdaf Trading Group</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/t-bala.png') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Dr. T. Bala</h3>
                        <p>Commercial Head, O&G Engineering WLL, Kuwait</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/Hadi-Abdel-Rahim.jpg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Hadi Abdel Rahim</h3>
                        <p>Operations Manager, Nokia Al Saudia</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/koya.jpg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Koya Anachirayil</h3>
                        <p>Vice President Materials, Binzagr Factory for Insulation Materials</p>
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
                        <img src="{{ asset('assets/frontend/images/speaker-images/sattya-mennon.png') }}" class="w-full h-full object-cover" />
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
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/speaker-images/Abdullah-Alanazi.jpg') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Abdullah Alanazi</h3>
                        <p>Logistics Manager, Amiantit</p>
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
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                      <div class="speaker-box">
                        <img src="{{ asset('assets/frontend/images/speaker-images/rajesh-m-bhandari.png') }}" class="w-full h-full object-cover" />
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <div class="speaker-details">
                        <h3>Rajesh M. Bhandari,</h3>
                        <p>Director, Arihant Education Foundation</p>
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
              <li class="mr-8 border-r pr-8">
                <img src="{{ asset('assets/frontend/images/riyadh/salam-aldar.webp') }}" alt="" width="180" />
                <p class="text-center mt-2 text-xl font-semibold">Gold Sponsor</p>
              </li>
              <li>
                <img src="{{ asset('assets/frontend/images/riyadh/1-platform-logo.webp') }}" alt="" width="180" />
                <p class="text-center mt-2 text-xl font-semibold">Technology Partner</p>
              </li>
              <li>
                <img src="{{ asset('assets/frontend/images/riyadh/b4u-logo.jpg') }}" alt="" width="180" />
                <p class="text-center mt-2 text-xl font-semibold">Media Partner</p>
              </li>
            </ul>
          </div>
          <!--  -->
          <div class="mt-8">
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
            <h3 class="text-3xl font-medium">Conference Videos | IPSC RIYADH 2016</h3>
            <div class="grid grid-cols-1 mt-6 gap-9 sm:grid-cols-2 md:grid-cols-2">
              <div>
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
              <div>
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
              <div>
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
              <div>
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
          <div class="gallery-image margin-top50">
            <h3 class="text-3xl font-bold">PHOTOS | IPSC RIYADH 2016</h3>
            <ul>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6408.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6425.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6430.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6485.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6503.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6512.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6537.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6585.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6593.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6631.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6645.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6696.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6740.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6821.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6834.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6839.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6879.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6915.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6923.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6972.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2016/DSC_6997.JPG') }}" alt="" class="w-full" /></li>
              
            </ul>
          </div>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row">
          <div class="gallery-image">
            <h3 class="text-3xl font-bold">IPSC RIYADH AWARDS 2016</h3>
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