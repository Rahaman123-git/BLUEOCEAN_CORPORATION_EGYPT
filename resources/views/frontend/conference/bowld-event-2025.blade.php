@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
  <section>
    <div class="w-full">
      <video class="w-full shadow-lg"  loop="true" autoplay="true" controls>
        <source src="{{ asset('assets/frontend/images/conference-video/Bowld_Promo_2025.mp4') }}" type="video/mp4" />
        <source src="{{ asset('assets/frontend/images/conference-video/Bowld_Promo_2025.ogv') }}.ogv" type="video/ogv" />
        
        Your browser does not support the video tag.
      </video>
    </div>
  </section>

  <section class=" relative saudi_vission-block ">      
    <div class="container mx-auto relative">
      <!-- Top Section: Logos and Text -->
      <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start">
        <!-- Logo Section -->
        <div class="flex items-baseline space-x-4 justify-center pt-6">
          <div class=" pr-10">
            <img src="{{ asset('assets/frontend/images/bowld-event/IPSC-dubai.svg') }}" alt="IPSC Riyadh Logo" class="w-auto">
          </div>
        </div>

        <!-- Text Section -->
        <div class="col-span-2 lg:col-span-1  mt-24">
          <div class="pr-0 lg:pl-5 text-center lg:text-left bowld_block  bowld-details-box">
            <h2 class="uppercase  text-bowld-blue-color font-bold">Beyond the Horizon</h2>
            <h3 class="uppercase text-2xl  lg:text-2xl xl:text-5xl text-bowld-pink-color font-semibold">A Bold New Vision for<br> <span
                class="font-extrabold">Every Woman and Girl</span></h3>
            <p class="text-dark-para text-xl lg:text-2xl  xl:text-2xl mt-6 font-medium pr-0 md:pr-30 mb-6 md:mb-16">The Blue Ocean Women Leadership Development (BOWLD) Summit 2025 was a virtual conference themed "Beyond the Horizon: A Bold New Vision for Every Woman and Girl." It aimed to celebrate and empower women by exploring new possibilities and visions for their future.</p>
          </div>
        

          </div>
        </div>

        <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left btm-adjust">
        <!-- Bottom Section: Image with Overlay -->

      </div>
     </div>
     <div
     class="wonem_strip_bowld lg:absolute imgclip-right bottom-0 left-0 px-5 md:px-0 lg:pl-16 py-6 w-full lg:w-1/2 md:relative sm:relative md:w-full sm:w-full xl:bottom-9 lg:bottom-6 left-top-triangle overflow-hidden">
     <img src="{{ asset('assets/frontend/images/bowld-event/women_event.svg') }}" alt="" class="lg:w-48 m-auto xl:w-auto lg:max-w-full">
   </div>
  </section>

  <section class="vission_future my-12">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 relative">
        <img src="{{ asset('assets/frontend/images/bowld-event/center-banner.png') }}" alt="" class="w-full min-w-full hidden lg:block">
        <img src="{{ asset('assets/frontend/images/bowld-event/bowld-banner-mobile.png') }}" alt="" class="w-full min-w-full block lg:hidden">
        <div class="absolute top-auto lg:top-1/3 lg:bottom-auto bottom-8 right-0 lg:right-7 w-full lg:w-1/2">
          <div class=" vission-para px-4 lg:px-0">
            <h2 class="text-white font-bold  text-2xl lg:text-4xl"></h2>
            <p class="text-white text-2xl leading-6 lg:leading-normal">
              Building a World Where Every Woman Feels Valued and Empowered

            </p>
          </div>
     
        </div>
      </div>

    </div>
  </section>

  <!-- Section Starts Here -->
  <!-- <section class="sponser-details-p">
    <div class="container">
      <h3 class="text-4xl text-blue-text-hdr font-semibold mb-8">BOWLD Conference Sponsors</h3>

      <div class="">
        <div class="flex flex-col md:flex-row gap-4 ">
         
          <div class="sponser-box w-1/4">
           <img src="https://bocdemosite.sacloud.online/assets/frontend/images/IPSC-Dubai-2021/image 39 (1).png" alt="">
           <p>Gold Sponsor</p>
          </div>
          <div class="sponser-box w-1/4">
           <img src="https://bocdemosite.sacloud.online/assets/frontend/images/IPSC-Dubai-2021/image 39 (2).png" alt="">
           <p>Silver Sponsor</p>
          </div>
          <div class="sponser-box w-1/4">
           <img src="https://bocdemosite.sacloud.online/assets/frontend/images/IPSC-Dubai-2021/image 39 (3).png" alt="">
           <p>Silver Sponsor</p>
          </div>
          <div class="sponser-box w-1/4">
           <img src="https://bocdemosite.sacloud.online/assets/frontend/images/IPSC-Dubai-2021/image 39.png" alt="">
           <p>GSupporting Sponsor</p>
          </div>
         
       
       
       </div>
      </div>
    </div>
  </section> -->
  <!-- Section End Here -->

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
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">IPSC Awards 2025</button>
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
                <p class="text-3xl font-bold mb-4 lg:mb-4">Key Topics </p>

                <ul class="flex flex-col gap-[30px]">
                  <!--  -->
                  <!--  -->
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/2025-The Power of Representation.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">
                                  The Power of <br />
                                  Representation
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Why Every Girl Needs to See Women in Leadership.</p>
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
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/2025-Financial Freedom for Life.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-3xl">
                                  Financial Freedom <br />
                                  for Life
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Teaching Girls and Women to Build Wealth and Independence.</p>
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
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/2025-Unpaid to Unstoppable.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Unpaid to Unstoppable</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Recognizing and Redistributing Women’s Invisible Labor.</p>
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
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/2025-Breaking the Cycle.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Breaking the Cycle</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Educating Girls, Empowering Women, Transforming Generations.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="flex flex-col lg:flex-row w-full mt-6">
              <div class="listing-section w-full">
                <p class="text-3xl font-bold mb-4 lg:mb-4">Panel Discussions:</p>

                <ul class="flex flex-col gap-[30px]">
                  <!--  -->
                  <!--  -->
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/2025-Challenging the Beauty Standard.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Challenging the Beauty Standard</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">How Media Shapes Women’s and Girls’ Self-Worth</p>
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Unpacking the role of advertising, film, and social media in shaping body image, confidence, and aspirations.</li>
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
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/2025-The Allyship Imperative.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">The Allyship Imperative</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Engaging Men and Boys in the Fight for Gender Equality</p>
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Exploring strategies to involve men and boys as allies in promoting gender equality and dismantling patriarchal norms.</li>
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
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/2025-Workshop.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Workshop</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Expert-led session with a Certificate of Attendance.</p>
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
              <p class="text-3xl font-bold mb-4 lg:mb-9">Conference Highlights </p>
              <ul class="flex flex-col gap-[30px]">
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/netwoking 2025.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute top-0">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Networking
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-none lg:mr-12 pl-10 tab-listright">
                          <li class="">Participants had the opportunity to connect with like-minded women from around the world, building meaningful professional relationships.</li>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/2025-Knowledge Sharing.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute top-0">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Knowledge Sharing
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-none lg:mr-12 pl-10 tab-listright">
                          <li class="">The event featured engaging discussions where attendees exchanged insights, ideas, tools, and practical solutions.</li>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/2025-Empowerment Celebration.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute top-0">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Empowerment Celebration:
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-none lg:mr-12 pl-10 tab-listright">
                          <li class="">This global gathering celebrated Women’s Day through a unique blend of learning and entertainment, honoring women's achievements.</li>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/2025-Certification.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute top-0">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Certification:
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-none lg:mr-12 pl-10 tab-listright">
                          <li class="">All participants received certificates upon attending the workshop.
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
              <p class="text-3xl font-bold mb-4 lg:mb-9">Eminent Speakers:</p>
              <ul class="speaker-listing-view">
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Bahar Selman.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Bahar Selman</h3>
                          <p>Founding Partner & Executive Coach, Uphuman Corporate Trainer & Team Coach</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Nada-El-Gazzar.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Nada El Gazzar</h3>
                          <p>CEO & Founder, UpskillX Advisory & Coaching, UAE, Excellence Advisor & NLP Trainer</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/subhaRakesh.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Subha Rakesh</h3>
                          <p>Fide Arbiter, Toastmaster & Director Cognizance Academy for Chess & Vedic Math, Kerala, India</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Sonia-Hadi-Al-Marzooqi.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Sonia Hadi Al Marzooqi</h3>
                          <p>Founding Board Member Subway, UAE, 51 Emirati Women Achiever</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Lama-Atoui.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Lama Atoui</h3>
                          <p>Assistant Program Director - HR & Soft Skills, Blue Ocean Corporation</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/niam-briody.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Niamh Briody Jordan</h3>
                          <p>CEO & Founder, The Briody Jordan Group</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/dr-dalia.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. Dalia Gheit</h3>
                          <p>GM of SIVA consultation, Re-engineering, Supply Chain, and Quality Expert, KSA - USA</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/tala-al-ansari.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Tala Al Ansari</h3>
                          <p>Executive Advisor ATÖLYE, UAE, Certified Innovation Trainer & Workshop Facilitator</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/umarrah-shafiq.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Umarray Shafiq</h3>
                          <p>Chartered Financial Planner, Skybound Wealth Management</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Dagmar-Turkova.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dagmar Turkova</h3>
                          <p>Vice President MEBAS - Middle East Business Association for Sustainability, Co-Founder & COO iNova Global Solutions, UAE</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Annabel-Harper.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Annabel Harper</h3>
                          <p>Director Change Connection, Executive Leadership Coach</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Salma Kanaan.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Salma Kanaan</h3>
                          <p>Senior Faculty, Blue Ocean Corporation</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/katleen-penel.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Katleen Penel</h3>
                          <p>Founder, The Glory of Excellence, Amsterdam; Co-Founder HR Devils, Belgium</p>
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

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="sponsors-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col"></div>
        </div>
        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="gallery-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col gap-4">
            <div class="gallery-video">
              <h3 class="text-3xl font-medium">VIDEOS | IPSC 2025</h3>
              <div class="grid grid-cols-1 mt-6 gap-9 sm:grid-cols-2 md:grid-cols-2">
              </div>
            </div>
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">PHOTOS | BOWLD 2024</h3>
              <ul>
                <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery1.webp') }}" alt="" class="w-full" /></li>
                <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery2.webp') }}" alt="" class="w-full" /></li>
                <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery3.webp') }}" alt="" class="w-full" /></li>
                <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery4.webp') }}" alt="" class="w-full" /></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row">
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">IPSC BOWLD AWARDS 2025</h3>
            </div>
          </div>
        </div>

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="testimonials-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="gallery-image">
            <h3 class="text-3xl font-bold">Testimonials</h3>
            <div class="flex flex-col gap-4">
              <div class="gallery-video">
                <div class="grid grid-cols-1 mt-6 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
                  <div class="pb-5">
                    <iframe
                      class="w-full aspect-video ..."
                      src="https://www.youtube.com/embed/XaztM0fFtpI"
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
          <div class="lightbox">
        <span class="close">&times;</span>
        <span class="prev">&#10094;</span>
        <img id="lightbox-img" src="" alt="" />
        <span class="next">&#10095;</span>
      </div>
      </div>
    </div>
  </section>
@endsection
 
@push('scripts')
    <script src="{{ asset('assets/frontend/js/tab-select.js') }}"></script>
@endpush