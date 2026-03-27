@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
<section>
    <div class="w-full">
      <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true">
        <source src="{{ asset('assets/frontend/images/ipsc-video/Bowld-Promo-2025.mp4') }}" type="video/mp4" />
        <source src="" type="video/ogv" />
        <source src="" type="video/webm" />
        Your browser does not support the video tag.
      </video>
    </div>

  </section>

  <section class="relative saudi_vission-block">
    <div class="container mx-auto">
      <!-- Top Section: Logos and Text -->
      <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start">
        <!-- Logo Section -->
        <div class="flex items-baseline space-x-4 justify-center pt-6">
          <div class="pr-10">
            <img src="{{ asset('assets/frontend/images/bowld-event/IPSC-dubai.svg') }}" alt="IPSC Riyadh Logo" class="w-auto" />
          </div>
        </div>

        <!-- Text Section -->
        <div class="col-span-2 lg:col-span-1 mt-8">
          <div class="pr-0 lg:pl-5 text-center lg:text-left bowld_block">
            <h2 class="uppercase text-bowld-blue-color font-bold">Women in Leadership</h2>
            <h3 class="uppercase text-2xl lg:text-2xl xl:text-5xl text-blue-text-para font-semibold mt-3">
              Rising to the <br />
              <span class="font-extrabold text-5xl lg:text-8xl"> Challenge</span>
            </h3>
            <h3 class="uppercase text-2xl lg:text-2xl xl:text-5xl text-bowld-pink-color font-semibold">
              Rising to<br />
              <span class="font-extrabold">the Challenge</span>
            </h3>
            <p class="text-dark-para text-xl lg:text-2xl xl:text-2xl mt-6 font-medium pr-0 md:pr-30 mb-6 md:mb-16">
              The Blue Ocean Women Leadership Development (BOWLD) Summit 2021 was a significant event, dedicated to empowering women leaders across diverse industries.
            </p>
          </div>
          <div class="stripe_bottom h-10 w-full relative overflow-hidden img-clip-left"></div>
        </div>

        <!-- Bottom Section: Image with Overlay -->
      </div>
      <div class="wonem_strip_bowld lg:absolute imgclip-right bottom-0 left-0 px-5 md:px-0 lg:pl-16 py-6 w-full lg:w-1/2 md:relative sm:relative md:w-full sm:w-full xl:bottom-9 lg:bottom-6 left-top-triangle overflow-hidden">
        <img src="{{ asset('assets/frontend/images/bowld-event/women_event.svg') }}" alt="" class="lg:w-48 m-auto xl:w-auto lg:max-w-full" />
      </div>
    </div>
  </section>

  <section class="vission_future my-12">
    <div class="container mx-auto">
      <div class="grid grid-cols-1 relative">
        <img src="{{ asset('assets/frontend/images/bowld-2024/wonem-bottom-banner.svg') }}" alt="" class="w-full min-w-full hidden lg:block" />
        <img src="{{ asset('assets/frontend/images/bowld-2024/bowld-banner-mobile.png') }}" alt="" class="w-full min-w-full block lg:hidden" />
        <div class="absolute top-auto lg:top-1/3 lg:bottom-auto bottom-8 right-0 lg:right-7 w-full lg:w-1/2">
          <div class="xl:pl-32 xl:pr-9 text-center lg:text-left px-4 lg:px-0">
            <h2 class="text-white font-bold text-2xl lg:text-4xl"></h2>
            <p class="text-white text-2xl leading-6 lg:leading-normal">Celebrating Strength, Cultivating Leadership – Together We Rise.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

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
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#sponsors-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">Offer &Sponsors</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab" data-tabs-target="#gallery-tab" type="button" role="tab" aria-controls="training-calendar" aria-selected="false">Gallery</button>
          </li>
<!--
          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">IPSC Awards 2021</button>
          </li> -->

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
                <p class="text-3xl font-bold mb-4 lg:mb-4">Key Topics</p>

                

                <ul class="flex flex-col gap-[30px]">
                  <!--  -->
                  <!--  -->
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/bowld-21-Keynote Sessions.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Keynote Sessions:</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Insights from prominent female leaders on navigating the corporate landscape.</p>
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
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/bowld-21-panel discussion.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Panel Discussions:</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Insights from prominent female leaders on navigating the corporate landscape.</p>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!--  -->
                  <!--  -->
                  <!--  -->
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/bowld-21-Networking Opportunities.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Networking Opportunities:</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <p class="mb-1 text-xl font-medium">Facilitating connections among women professionals to foster collaboration and mentorship.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/bowld-21-Empowerment Workshops.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Networking
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <p class="mb-1 text-xl font-medium">Participants had the opportunity to connect with like-minded women from around the world, building meaningful professional relationships.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/bowld-21-Inspirational Stories.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Knowledge Sharing
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <p class="mb-1 text-xl font-medium">The event featured engaging discussions where attendees exchanged insights, ideas, tools, and practical solutions.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/bowld-21-Recognition of Achievements.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Empowerment Celebration
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <p class="mb-1 text-xl font-medium">This global gathering celebrated Women’s Day through a unique blend of learning and entertainment, honoring women's achievements.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/2022-certification.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Certification
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <p class="mb-1 text-xl font-medium">All participants received certificates upon attending the workshop.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
              </ul>
            </div>
          </div>
        </div>

        <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="speakers-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row w-full">
            <div class="listing-section w-full">
              <p class="text-3xl font-bold mb-4 lg:mb-9">Offerings:</p>
              <ul class="flex flex-col gap-[30px]">
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/bowld-21-Offering.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Offerings:
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-none lg:mr-12 pl-10 tab-listright">
                          <li class="">Exclusive learning opportunity from Blue Ocean</li>
                          <li class="">The comfort of attending from home</li>
                          <li class="">Inspiring speeches by eminent women</li>
                          <li class="">A certification of attendance</li>
                          <li class="">Exciting prizes through competitions</li>
                          <li class="">Free bilingual workshops by renowned trainers</li>
                          <li class="">Meeting top women professionals across the globe</li>
                          <li class="">Celebrating women’s day with entertaining sessions</li>
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

          <div class="flex flex-col lg:flex-row w-full">
            <div class="listing-section w-full">
              <p class="text-3xl font-bold mb-4 lg:mb-9">Eminent Speakers:</p>
              <ul class="speaker-listing-view">
                <li>
                  <!-- Modal -->

                  <a href="#">
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                          <div class="speaker-box">
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/noha.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Noha Hefny</h3>
                            <p>Founder and CEO of People of Impact.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <button class="btn open-modal">
                    Open modal
                  </button>
                  <div class="modal__overlay hidden"></div>
                  <div role="dialog" aria-labelledby="dialog header" aria-modal="true" class="modal__wrapper hidden">
                    <div class="modal__header">
                      <h2>
                        Header of Modal
                      </h2>
                      <button aria-label="Close modal" class="modal__close">
                        <p>&times;</p>
                      </button>
                    </div>
                    <p>Content of the JS modal. You can close it by clicking on the <strong>&times;</strong> button, <strong>ESC</strong> key or clicling outside it.</p>
                  </div>
                </li>
                <!--  -->
                <!--  -->
                <li>
                  <a href="">
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                          <div class="speaker-box">
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/thoraiya.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Dr. Thoraiya Kanafani</h3>
                            <p>Co-Owner and Clinical Psychologist at Human Relations Institute and Clinics, Dubai.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <!--  -->
                <li>
                  <a href="">
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                          <div class="speaker-box">
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Julie-Lewis.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Julie Lewis</h3>
                            <p>Resilience Consultant and Author.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
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
                          <p>Leadership Executive Coach and Author.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Alice-Nicole Chempf.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Alice-Nicole Chempf</h3>
                          <p>Regional Project Manager of the Womenpreneur Initiative.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/kelly.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Kelly Lundberg</h3>
                          <p>Personal Brand & Style Expert.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/seetha.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Seetha Sagaran</h3>
                          <p>Personal Development Trainer and Lifestyle Consultant.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/bandana.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Bandana Jain</h3>
                          <p>Journalist and Blogger.</p>
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
          <div class="flex flex-col"></div>
        </div>

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="gallery-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col gap-4">
            <div class="gallery-video"></div>
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">PHOTOS | BOWLD 2021</h3>
              <ul>
                <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery1.webp') }}" alt="" class="w-full" /></li>
                <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery2.webp') }}" alt="" class="w-full" /></li>
                <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery3.webp') }}" alt="" class="w-full" /></li>
                <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery4.webp') }}" alt="" class="w-full" /></li>
              </ul>
            </div>
          </div>
        </div>
<!--
        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row">
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">BOWLD AWARDS 2021</h3>
            </div>
          </div>
        </div> -->

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
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/tab-select.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
@endpush