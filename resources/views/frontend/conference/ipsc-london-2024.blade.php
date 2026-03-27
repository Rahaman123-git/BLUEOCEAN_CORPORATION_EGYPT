@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
  <section>
       <div class="w-full">
      <video class="w-full shadow-lg"  loop="true" autoplay="true" controls>
        <source src="{{ asset('assets/frontend/images/conference-video/IPSC-London-Highlights.mp4') }}" type="video/mp4" />
        <source src="{{ asset('assets/frontend/images/conference-video/IPSC-London-Highlights.ogv') }}" type="video/ogv" />
       
    </div>
  </section>

  <section class=" relative saudi_vission-block ">      
    <div class="container mx-auto relative">
      <!-- Top Section: Logos and Text -->
      <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 items-start">
        <!-- Logo Section -->
        <div class="flex items-center space-x-4 justify-center my-5">
          <div class="border-r border-gray-200 pr-10">
            <img src="{{ asset('assets/frontend/images/riyadh/IPSC2026.svg') }}" alt="IPSC Riyadh Logo" class="w-44">
          </div>
          <img src="{{ asset('assets/frontend/images/ipsc-home/field fisher 1.png') }}" alt="Kingdom Center Logo" class="w-30 ml-7 h-28 sm:h-auto">
        </div>

     

        <!-- Text Section -->
        <div class="col-span-2 lg:col-span-1">
          <div class="ml-5 lg:mt-10 landan-event-text">
            <!-- <img src="../images/riyadh/zoho-logo.png" alt="" class="lg:m-0 m-auto mb-5"> -->
            <h2 class="text-2xl lg:text-4xl font-bold ipsc-text uppercase text-center lg:text-left">Supply Chain Transformation using  SCOR Framework</h2>
            <p class="text-light-blue-color mt-5">
              <span class="text-2xl text-black">The International Procurement and Supply Chain Conference (IPSC) 2024 was held on April 30, 2024, in London, an insightful event dedicated to exploring the transformative power of the Supply Chain Operations Reference (SCOR) methodology.</span>
              
            </p>
          </div>
        

          </div>
        </div>

        <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left ipsc-stripe">
        <!-- Bottom Section: Image with Overlay -->

      </div>
     </div>
     <div
     class="image-rightstripe lg:absolute imgclip-right">
     <img src="{{ asset('assets/frontend/images/all-conference-new/London.webp') }}" alt="London" class="w-auto max-w-full">
   </div>

  </section>

  <section class="vission-future top-box-gap">
    <div class="container">
      <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="left-box py-9 px-5 bg-[#013F81] flex items-center">
          <p class="text-white text-2xl">
            <strong>The International Procurement and Supply Chain Conference (IPSC) 2024 is scheduled for April 30, 2024, in London</strong> This one-day event will be held at Fieldfisher - London Riverbank House, 2 Swan Lane, London EC4R
            3TT, England.
          </p>

          <p></p>
        </div>

        <div class="vission-right">
          <img src="{{ asset('assets/frontend/images/ipsc-home/londan-ipse.png') }}" alt="" class="w-full min-w-full" />
        </div>
      </div>
    </div>
  </section>

<!-- <section class="sponser-details-p mt-20gap">
  <div class="container">
    <h3 class=" text-4xl text-blue-text-hdr font-semibold mb-8">IPSC Sponsors</h3>
    
    <div class="">
      <div class="flex flex-wrap gap-2">
         
        <div class="sponser-box w-50">
         <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39 (1).png') }}" alt="">
         <p>Gold Sponsor</p>
        </div>
        <div class="sponser-box w-50">
         <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39 (2).png') }}" alt="">
         <p>Silver Sponsor</p>
        </div>
        <div class="sponser-box w-50">
         <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39 (3).png') }}" alt="">
         <p>Silver Sponsor</p>
        </div>
        <div class="sponser-box w-50">
         <img src="{{ asset('assets/frontend/images/IPSC-Dubai-2021/image 39.png') }}" alt="">
         <p>GSupporting Sponsor</p>
        </div>
     
     
     </div>
  </div>

</div>
</section> -->
 
<!--  -->
<section class="course-tab-section">
    <div class="container">
      <div class="border-b-2 border-secondary">
         <div id="select-wraper-tab">
            <select id="mobile-tabview" style="display: none;"></select>
        </div>
        <ul
          class="flex flex-wrap text-sm font-medium text-center gap-[2px] md:flex-nowrap tablist-links"
          id="default-styled-tab"
          data-tabs-toggle="#default-styled-tab-content"
          data-tabs-active-classes="text-white bg-secondary"
          data-tabs-inactive-classes="text-gray bg-[#EBEBEB]"
          role="tablist"
        >
          <li role="presentation" class="w-1/3 border-r-1 md:mb-0 bg-blue-500">
            <button class="inline-block text-white w-full p-3 lg:pr-4" id="courses-styled-tab" data-tabs-target="#keynote-topic" type="button" role="tab" aria-controls="Courses" aria-selected="false">Key Topic</button>
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
                <p class="text-3xl font-bold mb-4 lg:mb-9">Key Topic:</p>
                <ul class="flex flex-col gap-[30px]">
                  <!--  -->
                  <!--  -->

                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative">
                            <img src="{{ asset('assets/frontend/images/all-conference-new/londanMask group.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <!-- <p class="text-white font-bold text-xl xl:text-3xl">
                                      Keynote Topics:
                                    </p> -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">The Transformative Power of the SCOR Methodology</li>
                            <li class="">Leveraging SCOR for Maximum Efficiency and Resilience</li>
                            <li class="">Innovations in Supply Chain Management</li>
                            <li class="">Strategic Procurement in the Modern Era</li>
                            <li class="">Sustainable and Ethical Sourcing Practices</li>
                            <li class="">Risk Management in Global Supply Chains</li>
                            <li class="">The Role of Technology in Modern Procurement</li>
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
              <!-- <p class="text-3xl font-bold mb-4 lg:mb-9">Conference Highlights</p> -->
              <ul class="flex flex-col gap-[30px]">
                <!--  -->

                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/londan-Participent.webp') }}" class="w-full h-full object-cover" />
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
                                <h2 class="text-black text-6xl font-semibold">200</h2>
                                <p class="text-black">Delegates from</p>
                              </div>
                              <div class="xl:w-1/2 w-full sm:w-1/2 text-center lg:text-left pb-4 pl-2">
                                <p class="text-black font-medium"><span> </span></p>
                                <h2 class="text-black text-6xl font-semibold lg:mt-6 mt-0">100</h2>
                                <p class="text-black lg:left-8">Organizations including procurement and supply chain professionals.</p>
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
                  
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/londan-Opportunities.webp') }}" class="w-full h-full object-cover" />
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
                        <div class="confrrence-text">
                          <div class="xl:pr-0 pt-6 lg:pt-0 pb-5 lg:pb-0">
                            <ul class="list-none lg:mr-12 pl-10 tab-listright">
                              <li class="">
                                Renowned experts from ASCM and thought leaders in procurement and supply chain management shared their experiences, success stories, and practical insights on leveraging the SCOR methodology for maximum efficiency and resilience.
                              </li>
                            </ul>
                          </div>
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
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/londan-Speackers.webp') }}" class="w-full h-full object-cover" />
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
                          <li class="">
                            The conference provided ample opportunities to connect with industry leaders, potential partners, and procurement and supply chain experts, facilitating idea exchange and fostering collaboration.

                          </li>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/londan-Participent.webp') }}" class="w-full h-full object-cover" />
                          <div class="image-content absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Diverse Industry Participation
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-none lg:mr-12 pl-10 tab-listright">
                          <li class="">
                            Participants from a wide range of sectors including manufacturing, technology, textiles, agriculture, pharmaceuticals, and energy came together to offer a comprehensive perspective on supply chain challenges and solutions.


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
              <div class="mb-10 lg:mb-16">
                <p class="text-3xl font-bold mb-4 lg:mb-5">Eminent Speakers:</p>
                <ul class="speaker-listing-view">
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                          <div class="speaker-box">
                            <img src="{{ asset('assets/frontend/images/speaker-images/micheal-proffitt.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Michael Proffitt</h3>
                            <p>Former CEO - Dubai Logistics City; Management Board Member of Dubai World Central</p>
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
                            <p>Group CEO, Blue Ocean Corporation; FCIPS, FCLIT, FCMI, CPM, CICCM, CISCM, Certified SAP Consultant - SCM</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/dougles-kent.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Douglas Kent</h3>
                            <p>Executive Vice President, Corporate and Strategic Alliances at ASCM; Former Managing Director – Advisory, PwC</p>
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
                  <!--  -->
                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                          <div class="speaker-box">
                            <img src="{{ asset('assets/frontend/images/speaker-images/Gina-Panayiotou.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Gina Panayiotou</h3>
                            <p>Chair, World ESG Forum; CEO, Oceans Arena</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/john-ellis.webp') }}" class="w-full h-full object-cover" />
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/vipin-vaidyanatha.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Vipin Vaidyanathan</h3>
                            <p>Senior Director and Head of Consulting, Blue Ocean Corporation; Former Head of Business Excellence – DMCC; Former Assistant VP, Process Consulting - HSBC ME</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/GURPREET-SINGH-GILL.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Gurpreet Singh Gill</h3>
                            <p>Assistant Vice President – Manufacturing, Travel Transport Logistics and Hospitality, Tech Mahindra; Former General Manager - Sales, Process Innovation & SCM Consulting, Samsung SDS</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/Jonathan-Wharfe.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Jonathan Wharfe</h3>
                            <p>Supply Chain Director – Operations, Transport</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/AN-Profile-TO.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Andrew Neilson</h3>
                            <p>FCIPS FCILT, FSCM FIOL FITOL, Founder, Twisted Orange, Former Strategic Procurement Advisor, DeepStream Technologies</p>
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
                            <img src="{{ asset('assets/frontend/images/speaker-images/andrew.webp') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <div class="speaker-details">
                            <h3>Andrew Sanderson</h3>
                            <p>FCILT, Partner at Fieldfisher, Co-Founder, Matrix Risk Solutions Limited</p>
                          </div>
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

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="sponsors-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col">
            <!--  -->
            <div class="main-sponsor">
              <div class="flex flex-wrap">
                <div class="bg-white p-3 mb-4 mr-4">
                  <!-- <h3 class="mb-2 lg:mb-6 font-bold">Platinum Sponsor</h3> -->
                  <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                    <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/ipsc-home/ipsc-londan-partner.png') }}" alt="" width="" /></li>
                  </ul>
                </div>
              </div>
              <!--  -->
              <div class="mt-8">
                <h3 class="text-3xl font-medium">Knowledge Partners</h3>
                <div class="bg-white md:py-5 md:px-10 mt-6 py-4 px-4">
                  <img src="{{ asset('assets/frontend/images/ipsc-home/knowledge-partners.png') }}" alt="" class="w-full" />
                </div>
              </div>
              <!--  -->
              <div class="mt-8">
                <h3 class="text-3xl font-medium">Previous Partners</h3>
                <div class="bg-white md:py-5 md:px-10 mt-6 py-4 px-4">
                  <img src="{{ asset('assets/frontend/images/ipsc-home/previous-partner.png') }}" alt="" />
                </div>
              </div>
              <!--  -->
            </div>
          </div>
        </div>
        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="gallery-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col gap-4">
            <div class="gallery-video">
              <h3 class="text-3xl font-bold mb-4">VIDEOS | IPSC LONDON 2024</h3>
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
              </div>
            </div>
          </div>
          <div class="gallery-image mt-5">
            <h3 class="text-3xl font-bold mb-4">PHOTOS | IPSC LONDON 2024</h3>
            <ul>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/00DSC02337.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/00DSC02393.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/00DSC02408.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/00DSC02436.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/00DSC02453.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/00DSC02490.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/00DSC02523.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/00DSC02536.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/1.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/2.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/3.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/4.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/5.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/6.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/25.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/BT206109.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/BT206126.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/BT206137.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/BT206147.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02524.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02538.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02546.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02558.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02580.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02653.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02683.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02709.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02726.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02731.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02756.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02763.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02819.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02868.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02920.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC02971.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03006.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03037.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03047.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03057.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03064.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03080.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03083.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03101.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03115.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03122.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03144.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03152.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03165.JPG') }}" alt="" class="w-full" /></li>

              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03172.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03173.JPG') }}" alt="" class="w-full" /></li>
              <li><img src="{{ asset('assets/frontend/images/ipsc-london-2024/DSC03203.JPG') }}" alt="" class="w-full" /></li>

            </ul>
          </div>
        </div>

        <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
          <div class="flex flex-col lg:flex-row">
            <div class="gallery-image">
              <h3 class="text-3xl font-bold">IPSC LONDON AWARDS 2024</h3>
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
@endsection

@push('scripts')
 <script src="{{ asset('assets/frontend/js/tab-select.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush