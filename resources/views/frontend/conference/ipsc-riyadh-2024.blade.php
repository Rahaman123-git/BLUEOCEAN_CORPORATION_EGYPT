@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
  <!-- Section Starts Here -->
  <section>
    <div class="w-full">
      <video class="w-full shadow-lg" loop="true" autoplay controls>
        <source src="{{ asset('assets/frontend/images/conference-video/Ipsc_Riyadh_Highlight_Video.mp4') }}" type="video/mp4" />
        <source src="{{ asset('assets/frontend/images/conference-video/Ipsc_Riyadh_Highlight_Video.ogv') }}" type="video/ogv" />
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
            <img src="{{ asset('assets/frontend/images/riyadh/kingdom-logo.png') }}" alt="Kingdom Center Logo" class="w-30 ml-7 h-28 sm:h-auto" />
          </div>
        
        </div>
        <!-- Text Section -->
        <div class="col-span-2 lg:col-span-1 mt-8">
          <div class="ml-5">
            <img src="{{ asset('assets/frontend/images/riyadh/zoho-logo.png') }}" alt="" class="lg:m-0 m-auto mb-5" />
            <h1 class="text-2xl lg:text-4xl font-bold text-blue-text-hdr uppercase text-center lg:text-left">
              Shaping KSA's Supply <br />
              Chain Excellence
            </h1>
            <p class="text-subheadline text-2xl uppercase border-b border-gray-500 mt-2 pb-2 lg:w-2/3 overflow-hidden text-center lg:text-left">
              Inspired by Tradition
            </p>
            <p class="inspried-text uppercase">
              Supporting
              <br />
              <span class="">  Saudi Vision <br />
              2030</span>
            </p>
          </div>
     
        </div>
      </div>
      <!-- End -->
      <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left ipsc-stripe"></div>
    </div>
    <div
    class="image-rightstripe lg:absolute imgclip-right">
    <img src="{{ asset('assets/frontend/images/riyadh/riyadh-event-saudi_01.svg') }}" alt="" class="w-auto max-w-full">
  </div>
  </section>
  <!-- Section End Here -->

  <!-- Section Starts Here -->
  <section class="vission-future top-box-gap">
    <div class="container">
      <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="left-box py-9 px-5 bg-[#013F81]">
          <p class="text-white text-2xl">
            <strong>The International Procurement and Supply Chain Conference (IPSC) Riyadh 2024 was a pivotal event held on November 2, 2024, aligning with Saudi Arabia’s Vision 2030 to transform and strengthen its supply chain industry.
.
          </p>
        </div>
        <div class="vission-right">
          <img src="{{ asset('assets/frontend/images/riyadh/vission_image.png') }}" alt="" class="w-full min-w-full" />
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
            <button class="inline-block text-white w-full p-3 lg:pr-4" id="courses-styled-tab" data-tabs-target="#keynote-topic" type="button" role="tab" aria-controls="Courses" aria-selected="false">Keynote Topics</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab" data-tabs-target="#conference-highlights" type="button" role="tab" aria-controls="training-calendar" aria-selected="false">Conference Highlights</button>
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
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">IPSC Awards 2024</button>
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
                            <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-AI-Transforming-the Digital-Landscape.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
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
                            <li class="">AI role in economic diversification</li>
                            <li class="">Impact on autonomous vehicles, smart traffic management, public transportation</li>
                            <li class="">Supply chain efficiency and transparency through AI-driven solutions</li>
                            <li class="">Data protection, cybersecurity, ethical considerations</li>
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
                            <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-Sustainable-Procurement-Balancing-Cost-Quality-and-Responsibility.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
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
                            <li class="">Importance of sustainable procurement in today’s business environment</li>
                            <li class="">Long-term advantages such as risk mitigation and enhancing brand reputation</li>
                            <li class="">Certifications and standards for sustainable products and suppliers</li>
                            <li class="">Strategies for waste reduction and recycling initiatives</li>
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
                            <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-Smart-Warehousing -olutions-The-Future-of-Inventory-Management.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
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
              <p class="text-3xl font-bold mb-4 lg:mb-9">Conference Highlights</p>
              <ul class="flex flex-col gap-[30px]">
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-participants.webp') }}" class="w-full h-full object-cover" />
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
                                <h2 class="text-black text-6xl font-semibold lg:mt-6 mt-0">400+</h2>
                                <p class="text-black lg:left-8">
                                  Organizations <br />
                                  including procurement <br />
                                  and supply chain <br />
                                  professionals
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-speakers.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
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
                                <p class="text-black">international speakers and thought leaders</p>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/riyadh-Expert-insight.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Opportunities
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <h3 class="disverse">Networking Opportunities</h3>
                        <p class="confrrence-text">The conference provided ample opportunities to connect with industry leaders, potential partners, and procurement and supply chain experts, facilitating idea exchange and fostering collaboration.</p>
                      <h3 class="disverse">Diverse Industry Participation</h3>
                      <p  class="confrrence-text">Participants from a wide range of sectors including manufacturing, technology, textiles, agriculture, pharmaceuticals, and energy came together to offer a comprehensive perspective on supply chain challenges and solutions.</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/andrew.webp') }}" class="w-full h-full object-cover" />
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
          <div class="mt-5 gallery-image">
            <h3 class="text-3xl font-bold mb-4">Gallery</h3>
            <ul class=" mt-5">
              <li class="relative"><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_2412.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_2822.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_2843.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_2853.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_2869.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_2979.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_3143.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_3302.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_3485.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_3515.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_3572.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_3847.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_3851.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC_3971.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC04322.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC04420.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC04422.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC04431.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC04467.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC04716.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05285.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05359.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05363.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05365.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05486.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05488.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05496.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05511.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05518.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05530.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05531.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/DSC05753.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL3500.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL3605.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL3695.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4083.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4092.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4094.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4106.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4108.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4112.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4116.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4118.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4128.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4183.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4193.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4208.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4228.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4237.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4241.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4253.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4259.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4267.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4274.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4277.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4283.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4288.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4304.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4307.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4310.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4316.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4319.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4326.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4328.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4330.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4337.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4339.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4343.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4346.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4350.jpg') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024/IMGL4360.jpg') }}" alt="" class="w-full" /></li>
            
            </ul>
          </div>
          
        </div>

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row">
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">IPSC RIYADH AWARDS 2024</h3>
              <ul>
                <li class="relative"><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC_5554.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05301.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05312.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05324.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05340-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05353-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05363-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05373-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05386-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05394-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05404-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05415-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05425-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05433.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05441.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05453.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05460-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05466.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05476.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05503-1.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05511.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/DSC05519.png') }}" alt="" class="w-full" />
                </li>
                <li><img src="{{ asset('assets/frontend/images/ipsc-riyadh-2024-awards/IMGL4475.png') }}" alt="" class="w-full" />
                </li>
              </ul>
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