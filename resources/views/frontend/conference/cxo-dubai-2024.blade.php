@extends('layouts.frontend.app')
<style>
  .gap-cxo{margin-bottom: 120px;}
  .mt-60gap{margin-top: 60px;}
</style>

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style-last.css') }}">
@endpush

@section('content')
  <section>
    <div class="w-full">
      <video class="w-full shadow-lg" loop="true" autoplay="true" controls>
        <source src="{{ asset('assets/frontend/images/conference-video/Cxo_Highlights_2024- 1.mp4') }}" type="video/mp4" />
        <source src="{{ asset('assets/frontend/images/conference-video/Cxo_Highlights_2024- 1.ogv') }}" type="video/ogv" />
        Your browser does not support the video tag.
      </video>
    </div>
  </section>

<section class="relative saudi-vission-block mb-10">
    <div class="container relative">
      <!-- Start -->
      <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start">
        <!-- Logo Section -->
        <div class="">
          <div class="flex items-baseline space-x-4 justify-center  mt-5">
            <div class="border-r border-gray-200 pr-10" style="padding-top: 50px;padding-bottom: 25px;">
              <img src="{{ asset('assets/frontend/images/CXO-round table.svg') }}" alt="IPSC Riyadh Logo" class="">
            </div>
        
          </div>
         
        </div>
        <!-- Text Section -->
         
        <div class="col-span-2 lg:col-span-1  mt-8">
          <div class="ml-5 lg:mt-10 gap-cxo">
            <img src="{{ asset('assets/frontend/images/riyadh/zoho-logo.png') }}" alt="" class="lg:m-0 m-auto mb-5">
            <h1 class="cxo-text-headline uppercase text-center lg:text-left">CXO Roundtable
              <br><span>Convergence of the C-Suites</span>
            </h1>

            <p class="cxo-text-subheadline">
              - Balancing Resilience and Sustainability in <br>Supply Chain Management
            </p>
          </div>
      
        </div>
      </div>
      <!-- End -->
      <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left ipsc-stripe"></div>
    </div>
    <div
    class="image-rightstripe lg:absolute imgclip-right">
    <img src="{{ asset('assets/frontend/images/cxo-details.png') }}" alt="" class="w-auto max-w-full">
  </div>
  </section>

  <section class="vission_future my-12">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 relative items-center">
        <img src="{{ asset('assets/frontend/images/cxo-image/cxo-banner.svg') }}" alt="" class="w-full min-w-full hidden lg:block" />
        <img src="{{ asset('assets/frontend/images/bowld-event/bowld-banner-mobile.png') }}" alt="" class="w-full min-w-full block lg:hidden" />
        <div class="absolute top-auto lg:top-1/4 lg:bottom-auto bottom-8 right-0 lg:right-7 w-full lg:w-2/3">
          <div class="xl:pl-32 xl:pr-9 text-center lg:text-left px-4 lg:px-0 shift-right">
            <p class="text-white text-2xl leading-6 lg:leading-normal font-medium">
              Our premier CXO Roundtable, held on May 28th, 2024, at Atlantis The Palm, brought together top executives and industry leaders for insightful discussions on key business challenges and opportunities.

            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="sponser-details-p mt-20gap">
    <div class="container">
      <h3 class=" text-4xl text-blue-text-hdr font-semibold mb-8">CXO Conference Sponsors</h3>
      
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

  </section> -->

 <section class="course-tab-section">
    <div class="container">
  <div id="select-wraper-tab">
            <select id="mobile-tabview" style="display: none;"></select>
        </div>
      <div class="border-b-2 border-secondary">
        <ul class="flex flex-wrap text-sm font-medium text-center gap-[2px] md:flex-nowrap tablist-links"
          id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
          data-tabs-active-classes="text-white bg-secondary" data-tabs-inactive-classes="text-gray bg-[#EBEBEB]"
          role="tablist">
          <li role="presentation" class="w-1/3 border-r-1  md:mb-0 bg-blue-500">
            <button class="inline-block text-white w-full p-3 lg:pr-4" id="courses-styled-tab"
              data-tabs-target="#keynote-topic" type="button" role="tab" aria-controls="Courses"
              aria-selected="false">Key Topics</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1  md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab"
              data-tabs-target="#conference-highlights" type="button" role="tab" aria-controls="training-calendar"
              aria-selected="false">Conference Highlights</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1  md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab"
              data-tabs-target="#speakers-highlights" type="button" role="tab" aria-controls="training-calendar"
              aria-selected="false">Speakers</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1  md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#sponsors-tab"
              type="button" role="tab" aria-controls="Courses" aria-selected="false">Sponsors</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1  md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab"
              data-tabs-target="#gallery-tab" type="button" role="tab" aria-controls="training-calendar"
              aria-selected="false">Gallery</button>
          </li>
<!-- 
          <li role="presentation" class="w-1/3 border-r-1  md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab"
              type="button" role="tab" aria-controls="Courses" aria-selected="false">CXO Awards 2022</button>
          </li> -->

          <li role="presentation" class="w-1/3 border-r-1  md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab"
              data-tabs-target="#testimonials-tab" type="button" role="tab" aria-controls="training-calendar"
              aria-selected="false">Testimonials</button>
          </li>

        </ul>
      </div>
      <div id="default-styled-tab-content cxo-tab-content">
        <div class="hidden" id="keynote-topic" role="tabpanel" aria-labelledby="courses-tab">
          <div class="bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content">
            <div class="flex flex-col lg:flex-row w-full">
              <div class="listing-section w-full">
                <!-- <p class="text-3xl font-bold mb-4 lg:mb-4"">Key Highlights:</p> -->

             

                <ul class=" flex flex-col gap-[30px]">
                  <!--  -->
                  <!--  -->
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row  items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/latest-added/Conferences-CXO/keynote-topics/dsr.png') }}" class="w-full h-full object-cover ">
                            <div class="image-content absolute">
                              <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-2xl">Defining Sustainability and Resilience</p>
                              </div>
                            </div>
                          </div>


                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Exploring their intersection within the supply chain context and their implications for businesses</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!--  -->
                  <!--  -->
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row  items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/latest-added/Conferences-CXO/keynote-topics/Identifying Key Risks and Challenges.png') }}" class="w-full h-full object-cover ">
                            <div class="image-content absolute">
                              <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-2xl">
                                  Identifying Key Risks and Challenges
                                </p>
                              </div>
                            </div>
                          </div>


                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Addressing major risks hindering sustainability and resilience goals in supply chains.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!--  -->
                  <!--  -->
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row  items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/latest-added/Conferences-CXO/keynote-topics/Technology and Innovation.png') }}" class="w-full h-full object-cover ">
                            <div class="image-content absolute">
                              <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-2xl">Technology and Innovation</p>
                              </div>
                            </div>
                          </div>


                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Leveraging advancements like digitalization, IoT, blockchain, and AI to enhance sustainability and resilience.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!--  -->
                  <!--  -->
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row  items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/latest-added/Conferences-CXO/keynote-topics/Collaboration and Partnerships.png') }}" class="w-full h-full object-cover ">
                            <div class="image-content absolute">
                              <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-2xl">Collaboration and Partnerships</p>
                              </div>
                            </div>
                          </div>


                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Discussing the importance of collaboration across the supply chain ecosystem to tackle challenges effectively.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          
          </div>
        </div>

        <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="conference-highlights" role="tabpanel"
          aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row w-full">
            <div class="listing-section w-full">
              <p class="text-3xl font-bold mb-4 lg:mb-9">Conference</p>
              <div class="flex flex-col lg:flex-row w-full mt-6">
                <div class="listing-section w-full">
                  <!-- <p class="text-3xl font-bold mb-4 lg:mb-4"">Agenda:</p> -->

                              <ul class=" flex flex-col gap-[30px]">
                    <!--  -->
                    <!--  -->
                    <li>
                      <div class="bg-white">
                        <div class="flex flex-col lg:flex-row  items-center">
                          <div class="w-full lg:basis-[40%]">
                            <div class="image-overlap relative imgclip-right">
                              <img src="{{ asset('assets/frontend/images/latest-added/Conferences-CXO/conference highlights/Event Focus.png') }}" class="w-full h-full object-cover ">
                              <div class="image-content absolute">
                                <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
                                  <p class="text-white font-bold text-xl xl:text-2xl">Event Focus</p>
                                </div>
                              </div>
                            </div>


                          </div>
                          <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                            <p class="mb-1 text-xl font-medium">Exploring innovation, strategy, and leadership to navigate the complexities of the modern business landscape</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!--  -->
                    <!--  -->
                    <li>
                      <div class="bg-white">
                        <div class="flex flex-col lg:flex-row  items-center">
                          <div class="w-full lg:basis-[40%]">
                            <div class="image-overlap relative imgclip-right">
                              <img src="{{ asset('assets/frontend/images/latest-added/Conferences-CXO/conference highlights/Balancing Resilience & Sustainability.png') }}" class="w-full h-full object-cover ">
                              <div class="image-content absolute">
                                <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
                                  <p class="text-white font-bold text-xl xl:text-2xl">Balancing Resilience & Sustainability</p>
                                </div>
                              </div>
                            </div>


                          </div>
                          <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                            <p class="mb-1 text-xl font-medium">The CXO Roundtable helps leaders navigate disruptions while ensuring long-term sustainability.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!--  -->
                    <!--  -->
                    <li>
                      <div class="bg-white">
                        <div class="flex flex-col lg:flex-row  items-center">
                          <div class="w-full lg:basis-[40%]">
                            <div class="image-overlap relative imgclip-right">
                              <img src="{{ asset('assets/frontend/images/latest-added/Conferences-CXO/conference highlights/Building Resilient Supply Chains.png') }}" class="w-full h-full object-cover ">
                              <div class="image-content absolute">
                                <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
                                  <p class="text-white font-bold text-xl xl:text-2xl">Building Resilient Supply Chains</p>
                                </div>
                              </div>
                            </div>


                          </div>
                          <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                            <p class="mb-1 text-xl font-medium">Focus on diversification, digitalization, agility, and collaboration to withstand disruptions.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!--  -->
                    <li>
                      <div class="bg-white">
                        <div class="flex flex-col lg:flex-row  items-center">
                          <div class="w-full lg:basis-[40%]">
                            <div class="image-overlap relative imgclip-right">
                              <img src="{{ asset('assets/frontend/images/latest-added/Conferences-CXO/conference highlights/Sustainability Integration.png') }}" class="w-full h-full object-cover ">
                              <div class="image-content absolute">
                                <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
                                  <p class="text-white font-bold text-xl xl:text-2xl">Sustainability Integration
                                  </p>
                                </div>
                              </div>
                            </div>


                          </div>
                          <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                            <p class="mb-1 text-xl font-medium">Linking business success with environmental responsibility for a future-ready supply chain.</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <!--  -->
                      <!--  -->
                      <li>
                        <div class="bg-white">
                          <div class="flex flex-col lg:flex-row  items-center">
                            <div class="w-full lg:basis-[40%]">
                              <div class="image-overlap relative imgclip-right">
                                <img src="{{ asset('assets/frontend/images/latest-added/Conferences-CXO/conference highlights/Industry Synergies.png') }}" class="w-full h-full object-cover ">
                                <div class="image-content absolute">
                                  <div class="pt-6 px-6  lg:pr-24 mb-8 pb-12">
                                    <p class="text-white font-bold text-xl xl:text-2xl">Industry Synergies
                                    </p>
                                  </div>
                                </div>
                              </div>
  
  
                            </div>
                            <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                              <p class="mb-1 text-xl font-medium">Leaders discuss how resilience and sustainability together can drive sustainable growth.</p>
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
        </div>

        <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="speakers-highlights" role="tabpanel"
          aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row w-full">
            <div class="listing-section w-full">
              <p class="text-3xl font-bold mb-4 lg:mb-9">Eminent Speakers: </p>
              <ul class="speaker-listing-view">
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row  items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/mahammad-ali-habib.png') }}" class="w-full h-full object-cover ">

                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Mohamed Habib</h3>
                          <p>Vice President – Supply Chain Management, Tabreed; Board Member, Tabreed Sustainable City
                            Limited.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row  items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/Waleed AlSaeedi.png') }}" class="w-full h-full object-cover ">

                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Waleed AlSaeedi</h3>
                          <p>Director of Procurement, Abu Dhabi Tourism and Cultural Authority; Former Chairman, CIPS
                            MENA Strategic Advisory Board.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row  items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/Fred-Van-Veldhoven.png') }}" class="w-full h-full object-cover ">

                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Fred Van Veldhoven</h3>
                          <p>CFO – Ports Cluster, AD Ports; Former Head of Controlling, Hilti Emirates.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row  items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/Sulaiman-Abdulla.png') }}" class="w-full h-full object-cover ">

                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Sulaiman Abdulla </h3>
                          <p>Director – Administrative Affairs, Federal Tax Authority; Former Manager – Procurement
                            and Contracts, Telecommunications and Digital Government Regulatory Authority.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->

                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row  items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/Andrea-Prazakova.png') }}" class="w-full h-full object-cover ">

                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Andrea Prazakova</h3>
                          <p>Senior Vice President - Innovation, ESG & Gaming, Mastercard EEMEA; Advisory Board
                            Member, The Surpluss.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row  items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/Asma-Al-Mulla.png') }}" class="w-full h-full object-cover ">

                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Asma Al-Mulla</h3>
                          <p>Director of Procurement, AW Rostamani Group; Former Associate Director - Procurement and
                            Inventory, Imdaad Group.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row  items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/Samer-Haddad.png') }}" class="w-full h-full object-cover ">

                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Samer Haddad</h3>
                          <p>MEA Procurement Director, Emerson Automation Solutions.</p>
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

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="sponsors-tab" role="tabpanel"
          aria-labelledby="training-calendar-tab">
         
          <div class="flex flex-col">
              <!--  -->
              <div class="main-sponsor">
                <ul class="flex items-center gap-3 mb-4">
                  <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/zoho-logo.png') }}" alt="" width="180"><p class="text-center mt-2 text-xl font-semibold">Gold Sponsor</p></li>
                  
                </ul>


              </div>
              <!--  -->
              <div class="mt-8">
                <!-- <h3 class="text-3xl font-medium">Knowledge Partners</h3> -->
                <div class="bg-white md:py-5 md:px-10 mt-6 py-4 px-4">

                  <img src="{{ asset('assets/frontend/images/latest-added/bowld-2021-sponser.png') }}" alt="">

                  <!-- <ul class="sponsor-list">
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
                  </ul> -->
                </div>
              </div>
              <!--  -->
        
            <!--  -->
          </div>
        </div>

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="gallery-tab" role="tabpanel"
          aria-labelledby="training-calendar-tab">
          <div class="flex flex-col gap-4">
            <div class="gallery-video">
              <h3 class="text-3xl font-medium">VIDEOS | CXO Event Details</h3>
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
            </div>
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">PHOTOS | CXO Event Details</h3>
              <ul>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/1.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/2.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/3.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/4.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/5.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/6.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/7.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/8.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/9.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/10.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/11.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/12.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/13.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/abzic-115.jpg') }}" alt="" class="w-full"></li>
                <li><img src="{{ asset('assets/frontend/images/cxo-dubai-2024/abzic-130.jpg') }}" alt="" class="w-full"></li>
              </ul>
            </div>
          </div>
        </div>
   <!-- 
        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel"
          aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row">
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">CXO Event AWARDS</h3>
           <ul>
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
              </ul> 
            </div>
          </div>
        </div>-->

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="testimonials-tab" role="tabpanel"
          aria-labelledby="training-calendar-tab">
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
@endsection
@push('scripts')
    <script src="{{ asset('assets/frontend/js/tab-select.js') }}"></script>
@endpush