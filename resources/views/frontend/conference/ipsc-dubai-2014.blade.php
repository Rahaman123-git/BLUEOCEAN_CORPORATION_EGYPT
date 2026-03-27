@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
  <style>
    p.left-tab-boxhder {
    font-size: 22px;
    color: #fff;
    border-top: 1px solid #fff;
    margin-top: 36px;
    padding-top: 36px;
    font-weight: 500;
    max-width: 265px;
    line-height: 1.3;
}
  </style>
@endpush

@section('content')
<!-- Section Starts Here -->
<section>
  <div class="w-full">
    <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls>
      <source src="{{ asset('assets/frontend/images/conference-video/IPSC-2nd InternationaI-Sep-20-Dubai.mp4') }}" type="video/mp4" />
      <source src="{{ asset('assets/frontend/images/conference-video/IPSC-2nd InternationaI-Sep-20-Dubai.ogv') }}" type="video/ogv" />
      Your browser does not support the video tag.
    </video>
  </div>
</section>
<!-- Section End Here -->
<!-- https://demom.sacloud.online/images/riyadh/banner-video.mp4 -->
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
          <img src="{{ asset('assets/frontend/images/palm-dubai-1.png') }}" alt="Kingdom Center Logo" class="w-50 ml-7 h-40 sm:h-auto" />
        </div>
       
      </div>
      <!-- Text Section -->
      <div class="col-span-2 lg:col-span-1 mt-8">
        <div class="ml-5 lg:mt-10">
          <!-- <img src="{{ asset('assets/frontend/images/riyadh/zoho-logo.png') }}" alt="" class="lg:m-0 m-auto mb-5"> -->
          <h1 class="text-2xl lg:text-4xl font-bold text-blue-text-hdr uppercase text-center lg:text-left">Staying Ahead with Procurement Trends for Expo 2020 <br></h1>

         
        </div>
      
      </div>
    </div>
    <!-- End -->
    <div class="stripe_bottom h-10 relative overflow-hidden img-clip-left ipsc-stripe"></div>
  </div>
 
        <div
    class="image-rightstripe lg:absolute imgclip-right">
    <img  src="{{ asset('assets/frontend/images/Atlantic-dubai-1.png') }}" alt="" class="w-auto max-w-full">
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
<section class="vission-future top-box-gap">
  <div class="container">
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="left-box py-9 px-5 bg-[#013F81] flex items-center">
        <p class="text-white text-2xl">
          <strong>The 2nd International Procurement and Supply Chain Conference was held in Dubai, UAE, on September 20, 2014. The event brought together senior procurement and supply chain professionals from over 400 companies across the Middle East, centered around the theme "Staying Ahead with Procurement Trends for Expo 2020.
</strong>
        </p>

        <p></p>
      </div>

      <div class="vission-right">
        <img src="{{ asset('assets/frontend/images/dubai-2014-ipsc.png') }}" alt="" class="w-full min-w-full" />
      </div>
    </div>
  </div>
</section>
<!-- Section End Here -->

<!-- Section Starts Here -->
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
  
            <li role="presentation" class="w-1/3 border-r-1  md:mb-0 bg-blue-500">
              <button class="inline-block p-3 lg:pr-4 w-full" id="training-calendar-styled-tab"
                data-tabs-target="#conference-highlights" type="button" role="tab" aria-controls="training-calendar"
                aria-selected="false">Conference Highlights</button>
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
          <button class="inline-block p-3 lg:pr-4 w-full" id="courses-styled-tab" data-tabs-target="#ipsc-tab" type="button" role="tab" aria-controls="Courses" aria-selected="false">Dubai Awards 2014</button>
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
              <p class="text-3xl font-bold mb-4 lg:mb-9">Key Highlights</p>
              <ul class="flex flex-col gap-[30px]">
                <!--  -->

                <!--  -->
                <!--  -->
                <li>
                  <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/dubai-14-keynote.webp') }}" class="w-full h-full object-cover" />
                          <div class="absolute top-0">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">
                                Key Topics:
                              </p>
                              <p class="left-tab-boxhder">Strategic Procurement for Mega Events</p>
                               <p class="left-tab-boxhder">Procurement Risk Management</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <ul class="list-disc lg:mr-12 pl-10 tab-listright">
                          <li class="">Strategic Procurement for Mega Events: Lessons from Global Projects</li>
                          <li class="">The Rise of Technology in Procurement: From E-Procurement to Big Data</li>
                          <li class="">Sustainable Procurement Practices for the Future</li>
                          <li class="">Procurement Risk Management: Lessons from Global Market Fluctuations</li>
                          <li class="">The Role of Procurement in Business Continuity and Crisis Management</li>
                          <li class="">Developing a High-Performance Procurement Team</li>
                          <li class="">Expo 2020: Opportunities and Challenges for Regional Procurement Leaders</li>
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
                          <img src="{{ asset('assets/frontend/images/all-conference-new/expert-insights.png') }}" class="w-full h-full object-cover" />
                          <div class="absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">Conference Highlights</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                            <h3>Expert Insights</h3>
                        <p>Renowned experts and thought leaders in procurement and supply chain management shared their experiences, success stories, and practical insights.</p>
                      </div>
                    </div>
                  </div>
                </li>
                          
                 <li>
                 <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/networking-opportunities.png') }}" class="w-full h-full object-cover" />
                          <div class="absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">Conference Highlights</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                          <h3>Networking Opportunities</h3>
                        <p>The conference provided ample opportunities to connect with industry leaders, potential partners, and procurement and supply chain experts, facilitating idea exchange and fostering collaboration.</p>
                      </div>
                    </div>
                  </div>
                </li>
                          
                   <li>
                 <div class="bg-white">
                    <div class="flex flex-col lg:flex-row items-center">
                      <div class="w-full lg:basis-[40%]">
                        <div class="image-overlap relative imgclip-right">
                          <img src="{{ asset('assets/frontend/images/all-conference-new/diverse-industry-participation.png') }}" class="w-full h-full object-cover" />
                          <div class="absolute">
                            <div class="pt-6 px-6 lg:pr-24 mb-8 pb-12">
                              <p class="text-white font-bold text-xl xl:text-3xl">Conference Highlights</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                            <h3>Diverse Industry Participation</h3>
                        <p>Participants from a wide range of sectors including manufacturing, technology, textiles, agriculture, pharmaceuticals, and energy came together to offer a comprehensive perspective on supply chain challenges and solutions.</p>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
                <p class="font-semibold">This conference laid a strong foundation for future innovations in procurement and supply chain management, aligning with the upcoming Expo 2020.</p>
             
              </ul>
            </div>
          </div>
        </div>
      <div class="hidden bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="speakers-highlights" role="tabpanel" aria-labelledby="training-calendar-tab">
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/LeRoy-h-grow.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. LeRoy H. Graw</h3>
                          <p>President, International Purchasing and Supply Chain Management Institute (IPSCMI), USA</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/micheal-proffitt.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Michael Proffitt</h3>
                          <p>Ex-CEO, Dubai Logistics City</p>
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
                          <p>Executive Director - Academics, Blue Ocean Academy</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/shasi-shakhar.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Shashi Shekhar</h3>
                          <p>Founder and Chairman, SCLG</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/naved-khan.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Navaid Khan</h3>
                          <p>Section Head - Contracts, Saudi Chevron Phillips</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <!--  -->
              </ul>
            </div>
            <div class="mt-4 lg:mt-9">
              <p class="text-3xl font-bold mb-4 lg:mb-5">IPSC 2014 Keynote Speakers</p>
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
                          <p>Chief Operating Officer, Blue Ocean Academy (Special Session and Welcome)</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/LeRoy-h-grow.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Dr. LeRoy H. Graw</h3>
                          <p>President, IPSCMI, USA</p>
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
                          <h3>Dr. Farrukh Kidwai</h3>
                          <p>Chief Executive, Operational Excellence, FZE, UAE (Supply Chain Management OR Value Stream Management)</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/shasi-shakhar.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Shashi Shekhar</h3>
                          <p>Founder and Chairman, SCLG (Latest Global Trends of Procurement)</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/tariq-AL-shaik.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Tariq Alshaikh</h3>
                          <p>Head of MHL, Engineer’s Office (Technology and Supply Chain)</p>
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
                          <img src="{{ asset('assets/frontend/images/speaker-images/rajesh-m-bhandari.webp') }}" class="w-full h-full object-cover" />
                        </div>
                      </div>
                      <div class="basis-[60%] pl-5 lg:pl-10 py-5 pr-5 flex flex-col justify-between">
                        <div class="speaker-details">
                          <h3>Rajesh M. Bhandari</h3>
                          <p>Director, Arihant Education Foundation</p>
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

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="sponsors-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col">
          <!--  -->
          <div class="main-sponsor">
            <!-- <div class="flex flex-wrap">
                  <div class="bg-white p-3 mb-4 mr-4">
                    <h3 class="mb-2 lg:mb-6 font-bold">Platinum Sponsor</h3>
                    <ul class="flex items-center gap-3 lg:mb-8 mb-5">
                      <li class="mr-8 border-r pr-8"><img src="{{ asset('assets/frontend/images/riyadh/nicto-icon.png') }}" alt="" width="180">
                      </li>
                    </ul>
                  </div>                 
                </div> -->
            <!--  -->
            <!-- <div class="mt-8">
                <h3 class="text-3xl font-medium">Knowledge Partners</h3>
                <div class="bg-white md:py-5 md:px-10 mt-6 py-4 px-4">

                  <ul class="sponsor-list">
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
                  </ul>
                </div>
              </div> -->
            <!--  -->
            <!-- <div class="">
                <h3 class="text-3xl font-medium mt-8 mb-6">Previous Partners</h3>
                <img src="{{ asset('assets/frontend/images/partner-logo/partner_logo.svg') }}" alt="" class="w-full max-w-full">
              </div> -->
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
            <li><img src="{{ asset('assets/frontend/images/riyadh/gallery1.webp') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/riyadh/gallery2.webp') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/riyadh/gallery3.webp') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/riyadh/gallery4.webp') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/riyadh/gallery5.webp') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/riyadh/gallery6.webp') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/riyadh/gallery7.webp') }}" alt="" class="w-full" /></li>
            <li><img src="{{ asset('assets/frontend/images/riyadh/gallery8.webp') }}" alt="" class="w-full" /></li>
          </ul>
        </div>
      </div>

      <div class="hidden bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10" id="ipsc-tab" role="tabpanel" aria-labelledby="training-calendar-tab">
        <div class="flex flex-col lg:flex-row">
          <div class="gallery-image">
            <h3 class="text-3xl font-bold">DUBAI AWARDS 2014</h3>
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
<!-- End -->
@endsection

@push('scripts')
   <script src="{{ asset('assets/frontend/js/tab-select.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush