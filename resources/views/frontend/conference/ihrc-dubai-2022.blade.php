@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style-last.css') }}">
@endpush

@section('content')
  <section>
    <div class="w-full">
      <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls>
        <source src="{{ asset('assets/frontend/images/conference-video/IHRC_2022_Armani_Hotel Dubai_Highlights.mp4') }}" type="video/mp4" />
        <source src="{{ asset('assets/frontend/images/conference-video/IHRC_2022_Armani_Hotel Dubai_Highlights.ogv') }}" type="video/ogv" />
        <source src="" type="video/webm" />
        Your browser does not support the video tag.
      </video>
    </div>
  </section>

  <section class="relative saudi_vission-block ihrc-details-text">
    <div class="container relative">
      <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-center relative">
        <!-- Logo Section -->
        <div class="margin-btmgap">
          <div class="flex items-baseline space-x-4 justify-center my-5">
            <div class="border-r border-gray-200 pr-10">
              <img src="{{ asset('assets/frontend/images/ihrc/IPSC-dubai.svg') }}" alt="IPSC Riyadh Logo" class="w-44" />
            </div>
            <img src="{{ asset('assets/frontend/images/cxo-image/palm-dubai-1.png') }}" alt="Kingdom Center Logo" class="w-30 ml-7 h-28 sm:h-auto" />
          </div>
        </div>
        <div class="col-span-2 lg:col-span-1 mt-8 hirsc-righty">
          <div class="ml-5 ihrc-details-text">
            <h2 class="text-black uppercase">HR Metaverse –</h2>
            <h3 class="uppercase">
              Transforming Human Capital <br />
              <span>Digitally</span>
            </h3>
            <p>Under the esteemed patronage of His Excellency Sheikh Nahayan bin Mubarak Al Nahayan, IHRC 2022 led the way in redefining HR for the digital age.</p>
          </div>
        </div>
      </div>
      <div class="bottom-stripe ihrc-strip"></div>
    </div>
    <div class="location-overlap absolute bottom-0 left-0">
      <img src="{{ asset('assets/frontend/images/ihrc/ihrc-banner-bottom.png') }}" alt="" class="w-full img-clip" />
    </div>
  </section>

  <section class="vission_future my-12">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 relative">
        <img src="{{ asset('assets/frontend/images/ihrc/ihrc_banner.svg') }}" alt="" class="w-full min-w-full hidden lg:block" />
        <img src="{{ asset('assets/frontend/images/ihrc/ihrc_banner-mobile.png') }}" alt="" class="w-full min-w-full block lg:hidden" />
        <div class="absolute top-auto lg:top-10 lg:bottom-auto bottom-8 right-0 lg:right-7 w-full lg:w-1/2">
          
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="sponser-details-p">
    <div class="container">
      <h3 class="text-4xl text-blue-text-hdr font-semibold mb-8">IHRC Conference Sponsors</h3>
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
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">IHRC Awards 2022</button>
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
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/ihrc/keynote.png') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Key Topics</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Reimagining Future of Work Through Metaverse</li>
                            <li class="">Augmenting Employee Experience to the Next Level Through Metaverse</li>
                            <li class="">Artificial Intelligence Disrupting Global Learning and Intelligence</li>
                            <li class="">Driving Organizational Change in the Digital Era</li>
                            <li class="">HR Innovation Through Employee Engagement</li>
                            <li class="">Role of Diversity, Inclusion, and Equity in HR Strategy</li>
                            <li class="">BIOHACKING for Peak Performance</li>
                            <li class="">AI Before AI</li>
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

        <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="conference-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row w-full">
            <div class="listing-section w-full">
              <p class="text-3xl font-bold mb-4 lg:mb-9">Conference Highlights</p>
              <ul class="flex flex-col gap-[30px]">
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/ihrc/Immersive Experiences.png') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Immersive Experiences
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-none lg:mr-12 pl-10 tab-listright">
                          <li class="">Explored how technology and innovation harnessed human potential, driving greater efficiency and advancement.</li>
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
                          <img src="{{ asset('assets/frontend/images/ihrc/network_option.svg') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Networking Opportunities
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-none lg:mr-12 pl-10 tab-listright">
                          <li class="">Facilitated connections among a global community of influential leaders across industries, fostering powerful networks.</li>
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
                          <img src="{{ asset('assets/frontend/images/ihrc/Future-Ready Strategies.png') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Embracing Innovation
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-none lg:mr-12 pl-10 tab-listright">
                          <li class=""> Highlighted emerging ideas and practices shaping the workforce and the broader business environment.</li>
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
                          <img src="{{ asset('assets/frontend/images/ihrc/Future-Ready Strategies.png') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Future-Ready Strategies
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-none lg:mr-12 pl-10 tab-listright">
                          <li class="">Presented advanced approaches to employee experience design, maximizing workforce potential for sustained productivity and competitiveness.
</li>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/dr-sathya-menon.webp') }}" class="w-full h-full object-cover" />
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
                          <h3>Dr. Jasim Al Ali</h3>
                          <p>Chief Advisor, IHRC 2022, Deputy CEO of Corporate Sector & CEO of Happiness & Well-being at Dubai Media Incorporated</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/abdul-azeez.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Mr. Abdul Azeez</h3>
                          <p>Group Chairman, Blue Ocean Corporation</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/mohammed-al-ali.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Mohammed Al Ali</h3>
                          <p>Group Vice Chairman, Blue Ocean Corporation</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/dougles-kent.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Douglas Kent</h3>
                          <p>Executive Vice President - Strategy and Alliances at Association for Supply Chain Management (ASCM)</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/james-mathew.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>James Mathew</h3>
                          <p>CEO & Managing Partner, UHY James</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/Dr.sunil.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. Sunil Manjarekar</h3>
                          <p>Chief Executive Officer, Sanbook Consultant</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
              </ul>
            </div>
          </div>
          <div class="flex flex-col lg:flex-row w-full mt-6 lg:mt-12">
            <div class="listing-section w-full">
              <p class="text-3xl font-bold mb-4 lg:mb-9">IHRC 2022 Visionary Speakers:</p>
              <ul class="speaker-listing-view">
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/speaker-images/sajeev-nair.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. Sajeev Nair</h3>
                          <p>Founder of Limoverse</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/ausra.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Aušra Antanavičienė</h3>
                          <p>Vice President – HR at Palikko Group Corporation</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/nirmal.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Nirmal Raj Nair</h3>
                          <p>Associate Director - HR & Soft Skills, Blue Ocean Training & Consultancy</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/sangeeth.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. Sangeeth Ibrahim</h3>
                          <p>Vice President – Head of Learning and Development at First Abu Dhabi Bank</p>
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
                          <h3>Emma Davies</h3>
                          <p>Chief Culture and People Excellence Officer (CHRO) | HR Director at Masafi</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/al-hijan.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Mohammed Al Hijan</h3>
                          <p>Chief Human Resources Officer at King Saud University Medical City, Saudi Arabia</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/marie-louise.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Marie – Louise Ek</h3>
                          <p>Senior Director HR Africa, Middle East, South Asia at PepsiCo</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/manish.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Manish Mohan Misra</h3>
                          <p>Group Head, HR Transformation & Special Projects at Emirates National Oil Company (ENOC)</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/aysha.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Aysha Sulaiman</h3>
                          <p>Group Director of Human Resources Development at Ras Al Khaimah Economic Zone (RAKEZ)</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/monica.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Monica Hernandez Alarcon</h3>
                          <p>HR Director at General Motors - Egypt and Middle East</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/hayfa.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Hayfa Abuzabibah</h3>
                          <p>Chief Human Capital Officer at Al-Dabbagh Group</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/vs-ramchandran.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>VS Ramachandran</h3>
                          <p>CFO, Blue Ocean Corporation FCA, CIA, CISA, ACMA, CFE</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/percy.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Percy J Engineer</h3>
                          <p>Senior Director, Academics Blue Ocean Corporation</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/rajesh-bhandari.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. Rajesh Bhandari</h3>
                          <p>Senior Director – Academics at Blue Ocean Academy</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/lama.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Lama Atoui</h3>
                          <p>Faculty - HR and Soft Skills at Blue Ocean Academy</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/natalja.png') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Natalja Kissina</h3>
                          <p>HR VP & Sustainability Leader Gulf Countries at Schneider Electric</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/haithamsamman.png') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Haitham Samman</h3>
                          <p>Global Digital HR Transformation & Learning Leader at IBM</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/kunal.png') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Kunal Wadhwani</h3>
                          <p>CHRO - Choithrams</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/sergio-snyder.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Sergio Snyder</h3>
                          <p>Area HR Director UKI at Marriott International</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/mona-al-hebsi.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Mona AlHebsi</h3>
                          <p>FCPID, CPCD, ACC, PMP, MBA - Success Coach, HR Expert, Speaker, and Author</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/khalid-al-junaibi.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Khalid AL Junabi</h3>
                          <p>Future Accelerator Thought Leader</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/sanjeev-pradhan-roy.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Sanjeev Pradhan Roy</h3>
                          <p>Head-Talent Acquisition at Galadari Group, Dubai & Host of "In Conversation with Roy" Podcast</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/vignesh-menon.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Vignesh Menon</h3>
                          <p>Managing Director at Wealth-i Corporate Service Provider</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/george-jayesh.jpg') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>George Jayesh</h3>
                          <p>Founder and CTO of Metasportech</p>
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
          </div>
        </div>
        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="gallery-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col gap-4">
            <div class="gallery-video">
              <h3 class="text-3xl font-medium">VIDEOS | IHRC Dubai 2022</h3>
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
              <h3 class="text-3xl font-bold">PHOTOS | IHRC Dubai 2022</h3>
              <ul>
                <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/1.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/2.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/3-Marie-Louise-Ek.JPG') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I0113.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I0231.jpg') }}" alt="" class="w-full" /></li>
                 <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I0373.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I0533.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I0649.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I0707.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I1024.jpg') }}" alt="" class="w-full" /></li>
                 <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I1111.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I1135.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I1203.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I1230.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I1302.jpg') }}" alt="" class="w-full" /></li>
                 <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I1350.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I9350.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I9557.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I9589-1.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I9672.jpg') }}" alt="" class="w-full" /></li>
                 <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I9833.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/A22I9873.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM08062.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM08386.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM08460.jpg') }}" alt="" class="w-full" /></li>               
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM08614.jpg') }}" alt="" class="w-full" /></li>
                 <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM08752.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM08892.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM08905.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM08925.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM08957.jpg') }}" alt="" class="w-full" /></li>
                 <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM08975.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM09281.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/BAM09698.jpg') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/ihrc-dubai-2022/Sheikh-Nahayan-Bin-Mubarak-Dr-Sathya-Menon.jpg') }}" alt="" class="w-full" /></li>
              </ul>
            </div>

            <div class="gallery-image">
              <h3 class="text-3xl font-bold">IHRC Awards 2022</h3>
              <ul>
                <li><img src="{{ asset('assets/frontend/images/latest-added/hirc-img/gallery/A22I1302 1.png') }}" alt="" class="w-full" /></li>
                <li><img src="{{ asset('assets/frontend/images/latest-added/hirc-img/gallery/A22I1302 1.png') }}" alt="" class="w-full" /></li>
                <li><img src="{{ asset('assets/frontend/images/latest-added/hirc-img/gallery/A22I1350 1.png') }}" alt="" class="w-full" /></li>
              </ul>
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
@endsection
@push('scripts')
    <script src="{{ asset('assets/frontend/js/tab-select.js') }}"></script>
@endpush