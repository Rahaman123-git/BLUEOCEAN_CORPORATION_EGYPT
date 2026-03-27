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
      <source src="{{ asset('assets/frontend/images/conference-video/IPSC2021_Highlights_New_Nov_28_Hd.mp4') }}" type="video/mp4">
      
      <source src="{{ asset('assets/frontend/images/conference-video/IPSC2021_Highlights_New_Nov_28_Hd.ogv') }}" type="video/ogv">
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
            <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/IPSC Dubai-logo-2021.png') }}"
              alt="IPSC Riyadh Logo" class="w-44" />
          </div>
          <img src="{{ asset('assets/frontend/images/palm-dubai-1.png') }}" alt="Kingdom Center Logo"
            class="w-30 ml-7 h-28 sm:h-auto" />
        </div>

      </div>
      <!-- Text Section -->
      <div class="col-span-2 lg:col-span-1 mt-8">
        <div class="ml-5 lg:mt-10 gap-cxo">
          
          <h1 class="text-2xl lg:text-4xl font-bold text-blue-text-hdr uppercase text-center lg:text-left">One World <br>One Supply Chain</h1>
          <p class="border-top-text uppercase">
            Inspired by Tradition
          </p>
          <p class="inspried-text uppercase">
            Supporting <br />
            <span>
              SAUDI VISION<br />
              2030
            </span>
          </p>
        </div>

      </div>
    </div>
    <!-- End -->
    <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left ipsc-stripe"></div>
  </div>
  <div class="image-rightstripe lg:absolute imgclip-right">
    <img src="{{ asset('assets/frontend/images/riyadh/riyadh-event-saudi_01.svg') }}" alt="" class="w-auto max-w-full">
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<section class="vission-future top-box-gap">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="left-box py-9 px-5 bg-[#013F81] flex items-center">
        <p class="text-white">
          <strong>The 6th International Procurement and Supply Chain Conference was held at Atlantis, The Palm, Dubai, on November 6, 2021 bringing together over 800 delegates from more than 500 organizations worldwide. 
</strong>
        </p>

        <p></p>
      </div>

      <div class="vission-right">
        <img src="{{ asset('assets/frontend/images/riyadh/ipsc-dubai-2021_image.png') }}" alt="" class="w-full min-w-full" />
      </div>
    </div>
  </div>
</section>
<!-- Section End Here -->
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
  <!-- Section Starts Here -->

  <!-- Section End Here -->

  <!-- Start -->
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
          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block text-white w-full p-3 lg:pr-4" id="courses-styled-tab"
              data-tabs-target="#keynote-topic" type="button" role="tab" aria-controls="Courses"
              aria-selected="false">Key Topics</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1  md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab"
              data-tabs-target="#conference-highlights" type="button" role="tab" aria-controls="training-calendar"
              aria-selected="false">Conference Highlights</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab"
              data-tabs-target="#speakers-highlights" type="button" role="tab" aria-controls="training-calendar"
              aria-selected="false">Speakers</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#sponsors-tab"
              type="button" role="tab" aria-controls="Courses" aria-selected="false">Sponsors</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab"
              data-tabs-target="#gallery-tab" type="button" role="tab" aria-controls="training-calendar"
              aria-selected="false">Gallery</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab"
              type="button" role="tab" aria-controls="Courses" aria-selected="false">Dubai Awards 2021</button>
          </li>

          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab"
              data-tabs-target="#testimonials-tab" type="button" role="tab" aria-controls="training-calendar"
              aria-selected="false">Testimonials</button>
          </li>
        </ul>
      </div>
      <div id="default-styled-tab-content">
        <div class="hidden" id="keynote-topic" role="tabpanel" aria-labelledby="courses-tab">
          <div class="bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content">
            <div class="flex flex-col lg:flex-row w-full">
              <div class="listing-section w-full">
                <p class="text-3xl font-bold mb-4 lg:mb-9">Key Topics :</p>
                <ul class="flex flex-col gap-[30px]">
                  <!--  -->

                  <!--  -->
                  <!--  -->
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/all-conference-new/Agenda.webp') }}"
                              class="w-full h-full object-cover" />
                            <div class="absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">
                                  Importance of Free Zones in a Connected Global Supply Chain
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Evolution of Free Zones: A Brief History</li>
                            <li class="">The Rise in Popularity of Free Zones: Case Studies and Key Drivers</li>
                            <li class="">How Free Zones Influence and Control the Global Supply Chain</li>
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
                            <img src="{{ asset('assets/frontend/images/all-conference-new/Notable Attendees.webp') }}"
                              class="w-full h-full object-cover" />
                            <div class="absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Moving Towards a Responsible and Sustainable Global Supply Chain</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Connection between supply chain growth & sustainable development</li>
                            <li class="">Approaches towards a sustainable supply chain - Direct, Indirect, Collaborative & Global.</li>
                            <li class="">Integration of sustainability initiatives with business operations.</li>
                           
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
                            <img src="{{ asset('assets/frontend/images/all-conference-new//world-logistics-passport.png') }}"
                              class="w-full h-full object-cover" />
                            <div class="absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">World Logistics Passport’ The Key for Seamless Operations of Supply Chains Across the World</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">‘World Logistics Passport’- World’s first global freight loyal scheme</li>
                            <li class="">Vision meets Reality – Enhanced trade flow for the world to flourish smoothly</li>
                            <li class="">Why join the World Logistics Passport network – Key Benefits</li>
                           
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                            
                             <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/all-conference-new/warehouse-management.png') }}"
                              class="w-full h-full object-cover" />
                            <div class="absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">The Strategic Role of Warehouse Management in the Supply Chain</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Constant need for improving warehousing operations.</li>
                            <li class="">Building customer-centric & value-centric warehousing strategies.</li>
                            <li class="">Forces driving an agile and flexible warehouse design.</li>
                           <li class="">Redefining warehouse operations with Warehouse Management System<li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                            
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img src="{{ asset('assets/frontend/images/all-conference-new/transforming-procurement.png') }}"
                              class="w-full h-full object-cover" />
                            <div class="absolute top-0">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">Transforming Procurement and SCM - A Technology First Approach</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">How has Technology driven Procurement & Supply Chain Transparency?</li>
                            <li class="">Digitalizing your Procurement and Supply Chain Transformation – Current & Future Trends.</li>
                            
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
        <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="conference-highlights" role="tabpanel"
          aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row w-full">
            <div class="listing-section w-full">
              <!-- <p class="text-3xl font-bold mb-4 lg:mb-9">Conference Highlights</p> -->
              <ul class="flex flex-col gap-[30px]">
                <!--  -->

                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/londan-Participent.webp') }}"
                            class="w-full h-full object-cover" />
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
                            <div
                              class="flex items-center justify-center lg:justify-start lg:items-start flex-col sm:flex-row">
                              <div class="lg:w-1/3 w-full sm:w-1/2 text-center lg:text-left">
                                <p class="text-black font-medium"><span>Over</span></p>
                                <h2 class="text-black text-6xl font-semibold">800</h2>
                                <p class="text-black">Delegates from</p>
                              </div>
                              <div class="xl:w-1/2 w-full sm:w-1/2 text-center lg:text-left pb-4 pl-2">
                                <p class="text-black font-medium"><span> </span></p>
                                <h2 class="text-black text-6xl font-semibold lg:mt-6 mt-0">400</h2>
                                <p class="text-black lg:left-8">Organizations including procurement and supply chain
                                  professionals</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->

                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/londan-Participent.webp') }}"
                            class="w-full h-full object-cover" />
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
                          <div class="xl:pr-20 pt-6 lg:pt-0 pb-5 lg:pb-0">
                            <div
                              class="flex items-center justify-center lg:justify-start lg:items-start flex-col sm:flex-row">
                              <div class="lg:w-1/3 w-full sm:w-1/2 text-center lg:text-left">

                                <h2 class="text-black text-6xl font-semibold">40</h2>
                                <p class="text-black">international speakers and thought leaders</p>
                              </div>

                            </div>
                          </div>
                        </div>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/londan-Opportunities.webp') }}"
                            class="w-full h-full object-cover" />
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
                        <p>Renowned experts and thought leaders in procurement and supply chain management shared their experiences, success stories, and practical insights.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center justify-center">
                      <div class="text-center">
                        <h1 class="text-2xl lg:text-4xl font-bold text-blue-text-hdr uppercase text-center mt-5 mb-5">Chief Guest</h1>
                        <img src="{{ asset('assets/frontend/images/chif-guest.png') }}" alt="" class="m-auto">
                        <div class="chif-guest">
                          His excellency Sheikh Nahayan Mabarak Al Nahayan
                        </div>
                        <p class="text-center chif-g-text px-5">The 6th IPSC Conference was honored by the presence of His Excellency Sheikh Nahayan Bin Mubarak Al Nahayan as the Chief Guest of Honour
</p>
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
        <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="speakers-highlights" role="tabpanel"
          aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row w-full">
            <div class="listing-section w-full">
              <div class="mb-10 lg:mb-16">
                <p class="text-3xl font-bold mb-4 lg:mb-5">Speakers</p>
                <ul class="speaker-listing-view">
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                          <div class="speaker-box">
                            <img src="{{ asset('assets/frontend/images/speaker-images/Nina-Stephanie-Falk.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Nina Stephanie Falk</h3>
                            <p>Senior E-Commerce Manager, Alshaya Group</p>
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
                            <img
                              src="{{ asset('assets/frontend/images/speaker-images/Eisa-Ahmed-Binhayi-Al-Shamsi.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Eisa Ahmed Al Shamsi</h3>
                            <p>Director of Procurement, University of Sharjah</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/Rana-Sengupta.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Rana Sengupta</h3>
                            <p>CEO, Unilever Dubai, UAE</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/Dr-Amr-El-Fawa.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Dr. Amr El Fawal</h3>
                            <p>Operations Director, Region Head (MEA-Turkiye), Henkel, Dubai, UAE</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/vs-ramchandran.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>VS Ramachandran</h3>
                            <p>CFO, Blue Ocean Academy</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/Rahul-Bharti.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Rahul Bharti</h3>
                            <p>Vice President, Human Resources, ZEE</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/Juan-S.-Garza.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Juan S. Garza</h3>
                            <p>Business Partner, RouteMagic Logistics</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/percy.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Percy J Engineer</h3>
                            <p>Senior Director, Academics, Blue Ocean Academy</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/Dr-Benjamin-Bvepfepfe.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Dr. Benjamin Bvepfepfe</h3>
                            <p>Academic Program Chair, Higher Colleges of Technology</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/rajesh-bhandari.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Rajesh Bhandari</h3>
                            <p>Senior Director, Academics, Blue Ocean Academy</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/Mozzamil-Aissa.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Mozzamil Aissa</h3>
                            <p>Supply Chain Manager, Al Rawabi Dairy</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/David-McNamara.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>David McNamara</h3>
                            <p>Vice President, Supply Chain, NMC Healthcare</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/sudipta.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Sudipta Chatterjee</h3>
                            <p>Program Director, Procurement & SCM, Blue Ocean Academy</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/wence.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Wence Morris Joseph</h3>
                            <p>Senior Faculty, Blue Ocean Academy</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/yogenshah.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Yogen Shah</h3>
                            <p>Supply Chain Director, Petrofac</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/phil-showering.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Phil Showering</h3>
                            <p>Chief Operating Officer (COO), Mohebi Logistics</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/anna-konoplianikova.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Anna Konopliannikova</h3>
                            <p>Head of Procurement, Chalhoub Group</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/jon-harris.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Jon Harris</h3>
                            <p>International Education Strategy and Business Development Lead, CILT</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/stacie-tackett.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Stacie Tackett</h3>
                            <p>Senior Director, Supply Chain Lead - Africa/Middle East, Pfizer</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/nawaf-al-awadhi.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Nawaf Al Awadhi</h3>
                            <p>Director of Commercial Sourcing, du</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/bilal-hasan.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Bilal Hasan</h3>
                            <p>Supply Chain Director, Solutions by stc</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/piyush-malviya.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Piyush Malviya</h3>
                            <p>Senior Director & Head, EMEA, Business Moglix</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/puneet-khurana.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Puneet Khurana</h3>
                            <p>CEO, Fujairah Gold FZC & Dy. CEO, Sterlite Copper Silvasa (Vedanta Ltd Group)</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/cobus-barnard.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Cobus Barnard</h3>
                            <p>Group Chief Executive Officer, LiebenGroup</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/gavin-keen.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Gavin Keen</h3>
                            <p>Strategy, Market & Product Development, GLS International</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/hamid-al-ali.webp') }}"
                              class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Hamid Al Ali</h3>
                            <p>Innovation Engineer, Dubai Electricity & Water Authority (DEWA)</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/Fadhilah-Hassan.webp') }}"
                              class="w-full h-full object-cover" />
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
                  <!--  -->
                     <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                          <div class="speaker-box">
                            <img src="{{ asset('assets/frontend/images/speaker-images/sam.webp') }}"
                              class="w-full h-full object-cover" />
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
                  <!--  -->
                     <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                          <div class="speaker-box">
                            <img src="{{ asset('assets/frontend/images/speaker-images/rana1.webp') }}"
                              class="w-full h-full object-cover" />
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
                  <!--  -->
                   <!--  -->
                    
                  <!--  -->
                       <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                          <div class="speaker-box">
                            <img src="{{ asset('assets/frontend/images/speaker-images/vipin-vaidyanatha.webp') }}"
                              class="w-full h-full object-cover" />
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
                  <!--  -->
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="sponsors-tab" role="tabpanel"
          aria-labelledby="training-calendar-tab">
          <div class="flex flex-col">
            <div class="main-sponsor">
               <h3 class="mb-2 lg:mb-6 font-bold">Our Supporters</h3>
              <div class="flex flex-wrap">
                <div class="bg-white p-3 mb-4 mr-4">
                  <h3 class="mb-2 lg:mb-6 font-bold">Official Travel Partners</h3>
                  <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                    <li class="mr-8 border-r pr-8"><img
                        src="{{ asset('assets/frontend/images/dubai/official-travel.jpg') }}"
                        alt="" class="w-full max-w-max" /></li>
                  </ul>
                </div>

                <div class="bg-white p-3 mb-4 mr-4">
                  <h3 class="mb-2 lg:mb-6 font-bold">Technology Partners:</h3>
                  <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                    <li class="mr-8 border-r pr-8"><img
                        src="{{ asset('assets/frontend/images/dubai/technology-partners.jpg') }}" alt="" width="180" /></li>
                  </ul>
                </div>
                <div class="bg-white p-3 mb-4 mr-4">
                  <h3 class="mb-2 lg:mb-6 font-bold">Print Media Partner:</h3>
                  <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                    <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/dubai/print-media-partner.jpg') }}"
                        alt="" width="180" /></li>
                  </ul>
                </div>
                <div class="bg-white p-3 mb-4 mr-4">
                  <h3 class="mb-2 lg:mb-6 font-bold">Channel Partners</h3>
                  <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                    <li class="mr-8 border-r pr-8"><img
                        src="{{ asset('assets/frontend/images/dubai/channel-partners.jpg') }}" alt="" width="180" /></li>                   
                  </ul>
                </div>
                 <div class="bg-white p-3 mb-4 mr-4">
                  <h3 class="mb-2 lg:mb-6 font-bold">Events Partners</h3>
                  <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                    <li class="mr-8 border-r pr-8"><img
                        src="{{ asset('assets/frontend/images/dubai/events-under.jpg') }}" alt="" width="180" /></li>                   
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
        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="gallery-tab" role="tabpanel"
          aria-labelledby="training-calendar-tab">
          <div class="flex flex-col gap-4">
            <div class="gallery-video">
              <h3 class="text-3xl font-bold mb-4">VIDEOS</h3>
              <div class="grid grid-cols-1 mt-6 gap-4 sm:grid-cols-2 md:grid-cols-2">
                <div class="pb-5">
                  <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/-0h92GFSZ0w"
                    title="IPSC Riyadh Highlight Video" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="pb-5">
                  <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/lBuNRU6qesc"
                    title="IPSC Riyadh Highlight Video" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="pb-5">
                  <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/RTmZ9v47z_U"
                    title="IPSC Riyadh Highlight Video" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="pb-5">
                  <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/5wVarxovZTQ"
                    title="IPSC Riyadh Highlight Video" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="gallery-image mt-5">
            <h3 class="text-3xl font-bold mb-4">Gallery</h3>
            <ul>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/1.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/111.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A22I1469.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A22I1812.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A22I1858.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A22I2019.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A22I3055.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A22I3499.JPG') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A22I3739.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A22I3754.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A22I3887.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8174.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8200.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8286.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8310.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8419.JPG') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8450.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8459.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8494.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8576.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8608.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8691.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8771.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8783.JPG') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8806.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8813.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8954.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I8965.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I9012.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I9031.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I9049.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I9070.JPG') }}" alt="" class="w-full" /></li>
               <li><img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/A43I9113.JPG') }}" alt="" class="w-full" /></li>
            </ul>
          </div>
        </div>

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel"
          aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row">
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">IPSC Awards 2021</h3>
              <div class="gallery-image mt-5">
                <ul>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-1.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-10.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-11.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-9.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-8.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-7.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-6.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-5.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-4.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-3.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-2.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-12.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-13.webp') }}" alt="" class="w-full" /></li>
                  <li><img src="{{ asset('assets/frontend/images/gallery/con-4.webp') }}" alt="" class="w-full" /></li>
                  <li><img
                      src="{{ asset('assets/frontend/images/gallery/Dr.-Sunil-Manjarekar-CEO-Sanbook-Quality-Consultancy-980x653.webp') }}"
                      alt="" class="w-full" /></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="testimonials-tab" role="tabpanel"
          aria-labelledby="training-calendar-tab">
          <div class="flex flex-col gap-4">
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">Testimonials</h3>

              <div class="flex flex-col gap-4">
                <div class="gallery-video">
                  <div class="grid grid-cols-1 mt-6 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
                    <div class="pb-5">
                      <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/SeYYbXXSocQ"
                        title="IPSC Riyadh Highlight Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="pb-5">
                      <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/vDdS6OkCV04"
                        title="IPSC Riyadh Highlight Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="pb-5">
                      <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/CUtup40UbiY"
                        title="IPSC Riyadh Highlight Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="pb-5">
                      <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/O4rVISphR7c"
                        title="IPSC Riyadh Highlight Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="pb-5">
                      <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/-Kp8n2Q5_5U"
                        title="IPSC Riyadh Highlight Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <div class="pb-5">
                      <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/xjADGSCMKIw"
                        title="IPSC Riyadh Highlight Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <div class="pb-5">
                      <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/a-gP4qJyF_U"
                        title="IPSC Riyadh Highlight Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="pb-5">
                      <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/qnyvfuuNvzI"
                        title="IPSC Riyadh Highlight Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                    <div class="pb-5">
                      <iframe class="w-full aspect-video ..." src="https://www.youtube.com/embed/jgMaKCJpoCM"
                        title="IPSC Riyadh Highlight Video" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
  @endsection

  @push('scripts')
<script src="{{ asset('assets/frontend/js/tab-select.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
  @endpush