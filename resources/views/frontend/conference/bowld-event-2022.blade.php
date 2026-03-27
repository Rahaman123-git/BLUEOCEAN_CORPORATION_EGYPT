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
            <h2 class="uppercase text-bowld-blue-color font-bold">Women and Entrepreneurship</h2>
            <h3 class="uppercase text-2xl lg:text-2xl xl:text-5xl text-bowld-pink-color font-semibold">
              Fostering <br />
              <span class="font-extrabold">Equality and Growth</span>
            </h3>
            <p class="text-dark-para text-xl lg:text-2xl xl:text-2xl mt-6 font-medium pr-0 md:pr-30 mb-6 md:mb-16">
             The Blue Ocean Women Leadership Development (BOWLD) Summit 2022 was a virtual conference held on March 8, 2022, centered on "Women and Entrepreneurship: Fostering Equality and Growth.
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
        <img src="{{ asset('assets/frontend/images/bowld-2024/bowld-2022.png') }}" alt="" class="w-full min-w-full hidden lg:block" />
        <img src="{{ asset('assets/frontend/images/bowld-2024/bowld-2022.png') }}" alt="" class="w-full min-w-full block lg:hidden" />
        <div class="absolute top-auto lg:top-1/3 lg:bottom-auto bottom-8 right-0 lg:right-7 w-full lg:w-1/2">
          <div class="xl:pl-32 xl:pr-9 text-center lg:text-left px-4 lg:px-0">
            <!--<h2 class="text-white font-bold text-2xl lg:text-4xl">Over 250 delegates,</h2> -->
            <p class="text-white text-2xl leading-6 lg:leading-normal"> Inspiring a Generation of Confident, Resilient, and Visionary Women.</p>
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
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#sponsors-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">Sponsors</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab" data-tabs-target="#gallery-tab" type="button" role="tab" aria-controls="training-calendar" aria-selected="false">Gallery</button>
          </li>
<!--
          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">IPSC Awards 2022</button>
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
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/2022-Keynote Sessions.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Keynote Sessions:</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Evolution of Women Influencers as the New Generation Role Models.</li>
                            <li class="">Mompreneurs – The New Age Business Leaders.</li>
                            <li class="">Entrepreneurship from Home – An Alternate Universe for Women.</li>
                            <li class="">Female Mentorship at Work – An Exceptional Investment.</li>
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
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/2022-Panel Discussions.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Panel Discussions:</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">The 3 Es – Women Entrepreneurship Fostering Employment & Economy.</li>
                            <li class="">Traditional or Non-Traditional Businesses for Women – How to Decide?</li>
                          </ul>
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
                            <img src="{{ asset('assets/frontend/images/all-bowld-images/2022-Workshop.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
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
              <p class="text-3xl font-bold mb-4 lg:mb-9"> Conference Highlights</p>
              <ul class="flex flex-col gap-[30px]">
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/2022-Networking.webp') }}" class="w-full h-full object-cover" />
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/2022-Knowledge Sharing.webp') }}" class="w-full h-full object-cover" />
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/2022-Empowerment Celebration.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
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
                          <li class="">This global gathering celebrated Women’s Day through a unique blend of learning and entertainment, honoring women's achievements.
</li>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/2022-certification.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
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
                          <li class="">All participants received certificates upon attending the workshop.</li>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Sandy Donnelly.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Sandy Donnelly</h3>
                          <p>CEO of The Golf Palace Corporate Wellbeing, KSA; Founder of Women Warriors Network; Health & Wellbeing Expert.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Mahi Amin.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Mahi Amin</h3>
                          <p>Transformation Coach & Author.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Bahar Selman.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Bahar Selman</h3>
                          <p>Career Coach, Global Marketing Consultant & Writer.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Subha Rakesh.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Subha Rakesh</h3>
                          <p>Fide Arbiter, Toastmaster &amp; Director Cognizance Academy for Chess &amp; Vedic Math, Kerala, India</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Yusra Abdul Ghaffar Baqi.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Yusra Abdul Ghaffar Baqi</h3>
                          <p>Senior Vice President, Marketing & Chief Happiness Officer at aafaq Islamic Finance.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Hoda ElSobky.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Hoda ElSobky</h3>
                          <p>Corporate Trainer, Happiness Mentor, & Writer.</p>
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
                          <p>Assistant Program Director - HR & Soft Skills, Blue Ocean Corporation; Former Communication Arts Lecturer, Lebanese International University.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Katleen Penel.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Katleen Penel</h3>
                          <p>Founder of The Glory of Excellence, HR Specialist & Author.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Geetha Nayak.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Geetha Nayak</h3>
                          <p>Managing Partner at Design Infinity LLC.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Monica Hernandez Alarcon.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Monica Hernandez Alarcon</h3>
                          <p>HR Director for Egypt and Middle East at General Motors.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Trisha Chapman.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Trisha Chapman</h3>
                          <p>Career Coach, Professional Mentor.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Georgina-Kelly.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Georgina Kelly</h3>
                          <p>Business Mentor, Sales and Customer Service Trainer & Founding Partner of RAK Business Group Network.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Jasmine-Navarro.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Jasmine Navarro</h3>
                          <p>Family & Youth Coach, Teacher, and Author.</p>
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
                          <img src="{{ asset('assets/frontend/images/all-bowld-images/speaker/Dr-Navana-Kundu.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. Navana Kundu</h3>
                          <p>MSc.D, #1 Best Selling & Award-Winning Author, Speaker, Coach - Emotional Mastery; Entrepreneur; Helping Leaders to Unleash Rapid Emotional Mastery.</p>
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
            <div class="gallery-video"></div>
            <div class="gallery-image">
              <div class="gallery-image">
                <h3 class="text-3xl font-bold">PHOTOS | BOWLD 2022</h3>
                <ul>
                  <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery1.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery2.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery3.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/all-bowld-images/gallery4.webp') }}" alt="" class="w-full" /></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
<!--
        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row">
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">BOWLD 2022 AWARDS</h3>
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