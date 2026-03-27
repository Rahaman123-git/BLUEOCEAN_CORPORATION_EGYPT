@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
<!-- Section Starts Here -->
  <section>
    <div class="w-full">
      <video class="w-full shadow-lg"  loop="true" autoplay="true" controls>
        <source src="{{ asset('assets/frontend/images/conference-video/IPSC_2024_Mumbai_Highlights.mp4') }}" type="video/mp4" />
        <source src="{{ asset('assets/frontend/images/conference-video/IPSC_2024_Mumbai_Highlights.ogv') }}" type="video/ogv" />
        <source src="" type="video/webm" />
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
        <div class="">
          <div class="flex items-center space-x-4 justify-center my-5">
            <div class="border-r border-gray-200 pr-10">
              <img src="{{ asset('assets/frontend/images/all-conference-new/IPSC-mumbai.png') }}" alt="IPSC Riyadh Logo" class="w-44">
            </div>
            <img src="{{ asset('assets/frontend/images/all-conference-new/taj-logo.png') }}" alt="Kingdom Center Logo" class="w-30 ml-7 h-28 sm:h-auto">
          </div>
         
        </div>
        <!-- Text Section -->
        <div class="col-span-2 lg:col-span-1  mt-8">
          <div class="ml-5 lg:mt-10 landan-event-text">
            <!-- <img alt="" src="../images/riyadh/zoho-logo.png" alt="" class="lg:m-0 m-auto mb-5"> -->

            <h2 class="text-2xl lg:text-4xl font-bold ipsc-text uppercase text-center lg:text-left">India Tomorrow:<span>Economic Supremacy through Supply Chain Transformation

              <p class="text-light-blue-color uppercase text-5xl font-bold ">
               <div class="flex flex-wrap">
                <img src="{{ asset('assets/frontend/images/all-conference-new/skill-india.png') }}" alt="">
                <img src="{{ asset('assets/frontend/images/all-conference-new/pmkvy-logo.png') }}" alt="">
               </div>
                
              </p>
          </div>
        </div>
      </div>
      <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left ipsc-stripe"></div>
      <!-- End -->
    </div>
  
  <div
  class="image-rightstripe lg:absolute imgclip-right">
  <img src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-Taj-land-ends.webp') }}" alt="" class="w-auto max-w-full">
</div>
  </section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<section class="vission-future top-box-gap">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="left-box py-9 px-5 bg-[#013F81] flex items-center">
        <p class="text-white text-2xl">
          <strong>The International Procurement and Supply Chain Conference (IPSC) 2024 was held on June 1, 2024, at Taj Lands End in Mumbai. The event brought together global leaders from logistics, procurement, and supply chain sectors to foster innovation and advance progress across various industries.

        </p>

        <p></p>
      </div>

      <div class="vission-right">
        <img alt="" src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC_7505-1.png') }}" alt="" class="w-full min-w-full" />
      </div>
    </div>
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
 <!-- Section Starts Here -->
 <!-- <section class="sponser-details-p mt-20gap">
  <div class="container">
    <h3 class=" text-4xl text-blue-text-hdr font-semibold mb-8">IPSC Mumbai Sponsors</h3>
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
         

          <div class="mt-12">
            <div class="flex flex-col lg:flex-row w-full">
              <div class="listing-section w-full">
                <p class="text-3xl font-bold mb-4 lg:mb-9">Key Topics:</p>
                <ul class="flex flex-col gap-[30px]">
                  <!--  -->
                  <!--  -->
                  <!--  -->

                  <li>
                    <div class="bg-white">
                      <div class="flex flex-col lg:flex-row items-center">
                        <div class="w-full lg:basis-[40%]">
                          <div class="image-overlap relative imgclip-right">
                            <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-Empowering-SMEs-through-Supply-Chain-Integration.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">
                                  Empowering SMEs through Supply Chain Integration in India
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Benefits and models of integration for SMEs</li>
                            <li class="">Affordable and accessible technology solutions</li>
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
                            <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mastering the Art of Project Management in Supply Chain.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">
                                  Mastering the Art of Project Management in Supply Chain
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Core skills for ensuring efficiency and competitiveness</li>
                            <li class="">Best practices in project management</li>
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
                            <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-balancing-Environmental-Sustainability-.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">
                                  Balancing Environmental Sustainability & Supply Chain Resilience
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Strategies to build resilient and sustainable supply chains</li>
                            <li class="">Role of a trained and skilled workforce</li>
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
                            <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-Global-Manufacturing-Epicenter-Evaluating-the-Shift-from-China-to-India.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">
                                  Global Manufacturing Epicenter: Evaluating the Shift from China to India
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Factors driving this shift</li>
                            <li class="">India’s strengths and future trends</li>
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
                            <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-A- for-Supply-Chain-transparency.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">
                                  AI for Supply Chain Transparency and Traceability
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Applications of AI in supply chain management</li>
                            <li class="">Recommendations for AI adoption: Success stories</li>
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
                            <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-controlling-the-Semiconductor.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">
                                  Controlling the Semiconductor Availability Risk in Auto Industry
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Root causes of shortages and impact on the auto industry</li>
                            <li class="">Strategies for diversifying semiconductor supplies</li>
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
                            <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-India’s-Role-in-Reshaping-Global-Supply Chains.webp') }}" class="w-full h-full object-cover" />
                            <div class="image-content absolute">
                              <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                                <p class="text-white font-bold text-xl xl:text-3xl">
                                  India’s Role in Reshaping Global Supply Chains
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                            <li class="">Global factors driving the reshaping</li>
                            <li class="">Strategic partnerships and the need for a trained workforce</li>
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
                          <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-particepents.webp') }}" class="w-full h-full object-cover" />
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
                                <p class="text-black">Organizations</p>
                              </div>
                              <div class="xl:w-1/2 w-full sm:w-1/2 text-center lg:text-left pb-4">
                                <p class="text-black font-medium"><span>More than </span></p>
                                <h2 class="text-black text-6xl font-semibold mt-0">400</h2>
                                <p class="text-black lg:left-8">
                                  Delegates, <br />
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
                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-Speackers.webp') }}" class="w-full h-full object-cover" />
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
                <!--  -->
                <!--  -->
              <li>
                <div class="bg-white">
                  <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:w-full lg:basis-[40%]">
                      <div class="image-overlap relative imgclip-right">
                        <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-Expert-Insights.webp') }}" class="w-full h-full object-cover" />
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
                            <li class="">Expert Insights
 Renowned experts and thought leaders in procurement and supply chain management shared their experiences, success stories, and practical insights.
Networking Opportunities
 The conference provided ample opportunities to connect with industry leaders, potential partners, and procurement and supply chain experts, facilitating idea exchange and fostering collaboration.
Diverse Industry Participation
 Participants from a wide range of sectors including manufacturing, technology, textiles, agriculture, pharmaceuticals, and energy came together to offer a comprehensive perspective on supply chain challenges and solutions.

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
                        <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/mumbai-Networking Opportunities.webp') }}" class="w-full h-full object-cover" />
                        <div class="image-content absolute">
                          <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                            <p class="text-white font-bold text-xl xl:text-3xl">
                              Networking Opportunities:
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                      <ul class="list-none lg:mr-12 pl-10 tab-listright">
                        <li class="">Attendees can interact with industry leaders, potential partners, and experts in procurement and supply chain management, facilitating the exchange of ideas and fostering collaborations.</li>
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
                        <img alt="" src="{{ asset('assets/frontend/images/all-conference-new/Mumbai-Diverse-Industry.webp') }}" class="w-full h-full object-cover" />
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
                          Businesses across various sectors, including manufacturing, technology, textiles, agriculture, pharmaceuticals, and energy, will actively participate, providing a holistic view of supply chain challenges and
                          solutions.
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/micheal-proffitt.webp') }}" class="w-full h-full object-cover" />
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
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/saurav-ganguly.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Sourav Ganguly</h3>
                          <p>Former President of the Board of Control for Cricket in India (BCCI); Former Captain, India Cricket Team</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/sattya-mennon.webp') }}" class="w-full h-full object-cover" />
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/dougles-kent.webp') }}" class="w-full h-full object-cover" />
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
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/Ajay-sing.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Ajay Singh</h3>
                          <p>VP – Supply Chain Management, Hindustan Platinum; Board Member of Studies and Former HOD (SCM), Universal Business School; Former GM – Materials Management & PPC, Ericsson India</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/Ramit-Mahajan.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Ramit Mahajan</h3>
                          <p>Head - Customer Experience Supply Chain IMEA, Henkel; Former Head of Supply Chain, SABIC; Former SCM Manager, GE</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/jhon-eiills.webp') }}" class="w-full h-full object-cover" />
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/Rachit-Rungta.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Rachit Rungta</h3>
                          <p>
                            Head – Central Supply Chain (Consumer Products) & Head – Network Planning, Reliance Retail; Former Assistant Executive Director, Dalmia Cement (Bharat); Former Sr. General Manager – Supply Chain, Havells India
                          </p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/abdul-azeez.webp') }}" class="w-full h-full object-cover" />
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/manok-1.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Manoj Yermalkar</h3>
                          <p>Head of SCM – ACG Engineering Limited, Pune, India; Former General Manager, SCM, Praj Industries Limited, Pune, India</p>
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
                         <img alt="" src="{{ asset('assets/frontend/images/speaker-images/AN-Profile-TO.webp') }}" class="w-full h-full object-cover" />
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/andrew.webp') }}" class="w-full h-full object-cover" />
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
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/Nikunj-Desai.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Nikunj Desai</h3>
                          <p>Head - Global Supply Chain, ACG Worldwide; Former Head Engineering Sourcing & Stores, CEAT Tyres</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/percy.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Percy Jal Engineer</h3>
                          <p>Senior Director – Academics at Blue Ocean Corporation; Former Country Manager - Sharaf DG</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/grant-swapnil.webp') }}" class="w-full h-full object-cover" />
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
                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%] bg-dark-blue imgclip-right">
                        <div class="speaker-box">
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/mohammed-al-ali.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Mohammed Al Ali,</h3>
                          <p>Managing Director & Head of GTB Sales, Global Transaction Banking- Dubai</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/srinavas-roa.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Srinivas Rao V</h3>
                          <p>Co-founder & CEO, Auklet; Former Country Head India & SAF, Logitech Electronics</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/sudipta-chartjee.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Sudipta Chatterjee</h3>
                          <p>Program Director - Procurement and SCM at Blue Ocean Corporation; Former General Manager – India Carbon Limited; Former Head of Zonal Service Operations – Bharti Airtel</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/k-rajan.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>K. Rajan</h3>
                          <p>Executive Vice President, ITD Cementation India Limited</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/rajesh-bhandari.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. Rajesh Bhandari</h3>
                          <p>Senior Director – Academics at Blue Ocean Corporation; Former Sr. GM - Kuwait Auto Parts Imports Company; Former Purchasing and Supply Chain Manager - Mercedes Benz India</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/Venkataramana-Murthy-Gadepally.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Venkataramana Murthy Gadepally</h3>
                          <p>Head - Logistics & Warehousing, Liebherr India; Former VP – Supply Chain, Nandan Petrochem; Former Deputy GM – Logistics & Planning, Bosch India</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/saju.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Saju Augustine</h3>
                          <p>Director Of Operations – Blue Ocean Academy, Kochi, India; Former Head of SCM - Adidas Emerging Markets, MENA; Former Regional Lead (Demand Planning) – Kodak NE</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/vs-ramchandran.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>V S Ramachandran</h3>
                          <p>CFO – Blue Ocean Corporation; Former Head of Corporate Planning & Quality – Emarat; Former Executive Director - TUF Commodities DMCC</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/Saurabh-Srivastava-1.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Saurabh Srivastava</h3>
                          <p>Head of Supply & Growth Planning Apparel – Flipkart; Former Supply Chain Strategy Consultant – EY</p>
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
                          <img alt="" src="{{ asset('assets/frontend/images/speaker-images/John-Gattorna.png') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. John Gattorna</h3>
                          <p>Author, Thought Leader, and Supply Chain Strategist</p>
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
                         <img alt="" src="{{ asset('assets/frontend/images/speaker-images/John-Gattorna.png') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Jeremy Johnson</h3>
                          <p>Global Head of Supply Chain, Fieldfisher</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Anita Rajan</h3>
                          <p>CEO, Tata STRIVE; Vice President, Tata Community Initiatives Trust</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Pawan Kumar</h3>
                          <p>Chief Procurement Officer, Tata Motors</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Ravi Prakash Mathurr</h3>
                          <p>Vice President Supply Chain, Sun Pharma</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Shalini Nataraj</h3>
                          <p>Director - Supply Chain, IBM India</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Vivek Sahay</h3>
                          <p>Head of Supply Chain, Marico Limited</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Manoj K Pandey</h3>
                          <p>Senior Vice President - Supply Chain, Lupin Limited</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Anil Sharma</h3>
                          <p>Chief Operating Officer, GAIL Gas Limited</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Sandeep Chatterjee</h3>
                          <p>Head of Procurement, Larsen & Toubro</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Rajesh Pednekar</h3>
                          <p>Vice President - Supply Chain, Asian Paints</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Meeta Hoon</h3>
                          <p>Director - Procurement, Mondelez India</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Pramod Sant</h3>
                          <p>Vice President - Head of Import Export and Customs, Siemens</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Rakesh Singh</h3>
                          <p>Chairman, Institute of Supply Chain & Management</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Vijay Shetty</h3>
                          <p>Head of Logistics, Mahindra & Mahindra</p>
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
                          <img alt="" src=".#" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Nidhi Dubey</h3>
                          <p>Director - Supply Chain, Philips India</p>
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
            <!-- <div class="flex flex-wrap">
                  <div class="bg-white p-3 mb-4 mr-4">
                    <h3 class="mb-2 lg:mb-6 font-bold">Platinum Sponsor</h3>
                    <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                      <li class="mr-8 border-r pr-8"><img alt="" src="{{ asset('assets/frontend/images/riyadh/nicto-icon.png') }}" alt="" width="180">
                      </li>
                    </ul>
                  </div>                 
                </div> -->
            <!--  -->
            <div class="mt-8">
              <h3 class="text-3xl font-medium">Knowledge Partners</h3>
              <div class="bg-white md:py-5 md:px-10 mt-6 py-4 px-4">
                <ul class="sponsor-list">
                  <li><img alt="" src="{{ asset('assets/frontend/images/london/skill-india-big-logo.svg') }}" alt="" /></li>
                  <li><img alt="" src="{{ asset('assets/frontend/images/london/kishan-india.png') }}" alt="" /></li>
                  <li><img alt="" src="{{ asset('assets/frontend/images/london/cilt-logo.png') }}" alt="" /></li>
                  <li><img alt="" src="{{ asset('assets/frontend/images/partner-logo/ipscmi.png') }}" alt="" /></li>
                  <li><img alt="" src="{{ asset('assets/frontend/images/partner-logo/ascm-logo.png') }}" alt="" /></li>
                  <li><img alt="" src="{{ asset('assets/frontend/images/partner-logo/project-manag.png') }}" alt="" /></li>
                  <li><img alt="" src="{{ asset('assets/frontend/images/partner-logo/amarican_icon.png') }}" alt="" /></li>
                </ul>
              </div>
            </div>
            <!--  -->

            <!--  -->
          </div>
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
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/37A9555.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/37A9529.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/37A9307.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/37A9294.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/37A9273.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/37A9163.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/37A9095.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/37A8993.JPG') }}" alt="" class="w-full" /></li>
            
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC_7277.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/2K1A9343.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/2K1A9682.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/2K1A9744.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/2K1A9795.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC_7165.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC_7185.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01007.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01025.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01040.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01042.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01064.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01069.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01077.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01089.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01094.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01105.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01106.JPG') }}" alt="" class="w-full" /></li>
          </ul>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row">
          <div class="gallery-image">
            <h3 class="text-3xl font-bold">IPSC AWARDS 2024</h3>
            <ul>
                 <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01025.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01040.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01042.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01064.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01069.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01077.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01089.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01094.JPG') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/ipsc-mumbai-2024/DSC01105.JPG') }}" alt="" class="w-full" /></li>
                
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
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/tab-select.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush