@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
          <div class="w-full">
            <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls="">
              <source src="{{ asset('assets/frontend/images/ipsc-video/ipsc-delhi-promo.mp4') }}" type="video/mp4">
              <source src="" type="video/ogv">
              <source src="" type="video/webm">
              Your browser does not support the video tag.
            </video>
          </div>
  
 <section class="about_block relative">
    <div class="diveder_angle kopillar_angle">
        <img src="{{ asset('assets/frontend/images/con-bowld-img/devider_angle.png') }}" alt="">
    </div>
     <a href="{{ route('conferences.ipsc.2025') }}" class="strip-link">
<div class="ipsc_stripe absolute banner-bottom-strip  ipsc-new-bg">
        
    
       <div class="flex ipsc-cont-strip">
        <div class="">
          <img src="{{ asset('assets/frontend/images/ipsc_hover.svg') }}" alt="" />
        </div>
        <div class="strip-text">IPSC <span>2025</span></div>
      </div>
    
    </div>
  </a>




    <div class="block_header py-4">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="width-forty  mt-8">
                    <div class="exprience_icon text-center">
                        <img src="{{ asset('assets/frontend/images/ipsc-home/ipsc-logo.svg') }}" alt="Exprience icon"
                            class="img-fluid m-auto">
                    </div>
                </div>
                <div class="width-sixty  mt-8">
                    <div class="header_text boc_top-header">
                        <h2>
                            <span> International Procurement and</span><br>
                           Supply Chain Conference
                        </h2>
                        <p class="lg:pr-10">IPSC is
                            a flagship event organized by Blue Ocean Corporation. It is a premier platform aimed
                            at fostering the development and expansion of the global supply chain community.</p>
                    </div>
                </div>


            </div>
        </div>
</section>

<section class="key-pillars block_header">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="width-forty"></div>
            <div class="w-full width-sixty">
                <div class="header_text">
                    <h2>Mission and Purpose</h2>
                </div>
            </div>

        </div>
        <div class="orange-corner relative"></div>
        <div class="kopiller_data mt-3 orange-bg">
          
            <div class="flex flex-wrap">
                <div class="width-forty">
                  
                    <div class="pillor_left text-center ipsc-logo-right">
                        <img src= "{{ asset('assets/frontend/images/ipsc-home/ipsc-logo-white.svg') }}" alt="Exprience icon"
                            class="img-fluid ">
                        <div class="text-center lg:text-right">
                            <h2 class="text-white uppercase">
                                <span class="block">The</span> <span class="int-t block">International</span>
                                <span class="proc block"> Procurement &</span>
                                <span class="supl-t block">Supply Chain</span> Conference
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="width-sixty">
                    <div class="kopiller_right">
                        <div class="mx-auto">

                            <div class="flex flex-wrap mt-10 lg:mt-16">
                                <div class="w-full xl:w-1/2">
                                    <div class="left_award xl:pr-8 ">
                                        <h3 class="text-white">Non-Profit Initiative</h3>
                                        <p class="site-text text-white">
                                            IPSC is a non-profit initiative designed to drive transformative
                                            change across the supply chain and procurement sectors.
                                        </p>
                                    </div>
                                </div>

                                <div class="width-forty">
                                    <div class="left_award">
                                        <h3 class="text-white">Strategic Impact</h3>
                                        <p class="site-text text-white">
                                            The conference addresses critical industry challenges and drives transformation by delivering global insights, fostering collaboration, and offering practical solutions for sustainable growth.

                                        </p>
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

  <!-- Section End Here 2 -->
  <section class="supportive ipsc-backimage">
    <div class="support_top-angle">
        <img src="{{ asset('assets/frontend/images/angle-ihrc.png') }}" alt="" class="img-fluid">
    </div>
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full">
                <div class="support_ihdr">
                    <h2 class="text-white">Key Features</h2>
                </div>
            </div>
        </div>              
     
    </div>
    <div class="bg-transparent-blue relative">
        <div class="clipped-border"></div>
        <div class="container m-auto">
            <div class="flex flex-wrap mt-4 networking-box">
                <div class="md:w-auto relative">
                    <div class="support_content support_contentt  ipse-page">
                        <h2 class="text-white"><span>Global </span><br> Gathering</h2>
                        <p class="text-white"><strong>IPSC</strong> brings together thought leaders, industry
                            experts, and emerging talents from around the world.</p>
                    </div>
                </div>
                <div class="w-full  lg:w-1/2  lg:pl-6">
                    <div class="support_content  support_contentt ipse-page">
                        <h2 class="text-white"><span>Collaborative </span>Platform</h2>
                        <p class="text-white">It serves as a collaborative platform to overcome challenges and
                            enable every segment of the supply chain industry to thrive.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="leadership_women relative pb-none">
    <div class="right_overangle">
        <img src="{{ asset('assets/frontend/images/ipsc-home/ipsc-ganguly.png') }}" alt="" class="img-fluid">
    </div>
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="width-forty"></div>
            <div class="width-sixty">
                <div class="flex flex-wrap items-center">
                    <div class="width-forty">
                        <div class="leadership_text">
                            <h2 class="uppercase text-9xl font-bold">
                                <span class="font-light">Why</span><br>
                                IPSC<br>
                                Matters
                            </h2>
                        </div>
                    </div>
                    <div class="width-sixty">
                        <div class="driving-text ipsc-arrow pr-0 lg:pr-10  relative pt-8">
                            <div class="stragity-text mb-7">
                                <h3 class="text-blue-text-hdr text-2xl lg:text-3xl mb-3 font-bold">Thought
                                    Leadership</h3>
                                <p class="text-stragity-text  text-xl lg:text-2xl">
                                    The conference provides a platform for sharing innovative ideas and best
                                    practices.
                                </p>
                            </div>
                            <div class="stragity-text">
                                <h3 class="text-blue-text-hdr  text-2xl lg:text-3xl mb-3 font-bold">Industry
                                    Transformation</h3>
                                <p class="text-stragity-text text-xl lg:text-2xl">
                                    <strong>IPSC</strong> plays a pivotal role in shaping the future of the
                                    global supply chain community by addressing key challenges and fostering
                                    collaboration.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="womenday_block mt-4 lg:mt-5">
            <div class="flex flex-wrap">
                <div class="w-full">
                    <div class="spacial-day_text relative overflow-hidden">
                        <picture>
                            <source media="(min-width:992px)" srcset="{{ asset('assets/frontend/images/ipsc-home/ipcs-btm-banner.svg') }}">
                            <img src="{{ asset('assets/frontend/images/ipsc-home/mobile-banner-bottom.png') }}" alt="banner image"
                                class="img-fluid d-block w-full">
                        </picture>

                        <div class="women_special-text absolute ipsc-bule-bg">
                            <div class="content_women ipsc-page">
                                <h4 class="text-white">IPSC</h4>
                                <h2 class="text-white">is more than just a conference; it is a movement dedicated to empowering the
                                    supply chain and procurement industries to achieve sustainable growth and
                                    excellence.</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <section class="inspection relative">
    <img src="{{ asset('assets/frontend/images/ipsc-home/ipsc-polly.png') }}" class="inspection-trangle" alt="">
   <div class="gray-block">
    <div class="container">
        <div class="flex">
            <div class="basis-1/3 ">
                <div class="inspritaion-box relative">
                    <h2>Inception</h2>
                    <h3>
                        <strong>IPSC<br>launched in <br>
                            2014 in Doha, Qatar.</strong>
                    </h3>
                        <img src="{{ asset('assets/frontend/images/ipsc-home/ipsc-logo-white.svg') }}" alt="Exprience icon" class="img-fluid pt-4 pb-6" width="106">
                        <div class="right-arrow-link" style="Display:none">
                           <a href="#"> <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt=""></a> 
                        </div>
                </div>
            </div>
            <div class="basis-1/3">
                <div class="inspritaion-box mx-4 relative">
                    <h2>Expansion</h2>
                    <h3>
                        IPSC  has expanded to key cities like Mumbai, Dubai, Abu Dhabi, and Riyadh, broadening its regional impact.
                    </h3>
                     
                </div>
              
            </div>
            <div class="basis-1/3">
                <div class="inspritaion-box relative">
                    <h2>Recognition</h2>
                    <h3>
                        IPSC is widely recognized for driving innovation and excellence in supply chain and procurement industries.

                    </h3>
                     
                </div>
             
            </div>
        </div>
    </div>
    <div class="quter-image">
        <img src="{{ asset('assets/frontend/images/ipsc-home/gray-quter.png') }}" alt="" class="w-full gray-quter">
        <img src="{{ asset('assets/frontend/images/ipsc-home/colorful-quter.png') }}" alt="" class="w-full colorful-quter">
    </div>
   </div>
</section>

  <section class="confrence-cxo">
    <div class="upcomming-confrence">
      <div class="container m-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 space-x-5 items-center pt-14">
          <div class="col-span-12">
            <h3 class="text-white text-4xl font-semibold mb-8">Upcoming IPSC 2025 Conference</h3>
            <div class="cxo-event relative">
              <div class="flex flex-col lg:flex-row bg-white text-black relative">
                <div class="basis-[40%]">
                  <div class="flex justify-center items-center py-10">
                    <div class="ipscicon"><img src="{{ asset('assets/frontend/images/cxo-image/ipsc-delhi.svg') }}" alt="" width="150" /></div>
                    <div><img src="{{ asset('assets/frontend/images/cxo-image/date.svg') }}" alt="" /></div>
                  </div>
                </div>
                <div class="basis-[60%] relative">
                  <div class="event-image relative imgclip-event">
                    <img src="{{ asset('assets/frontend/images/cxo-image/ipsc-delhi-back.svg') }}" alt="" class="img-fluid h-full" />
                  </div>
                  <img src="{{ asset('assets/frontend/images/cxo-image/ganguly.png') }}" alt="" class="leader-img" style="display:none" />
                </div>
              </div>
              <div class="event-link">
               <a href="https://ipscevents.com/" class="btn btn_theme flex w-full" target="_blank">
                  Discover More <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="confrence-cxo mb-12">
    <div class="container m-auto">
      <div class="grid grid-cols-1 lg:grid-cols-12 space-x-5 items-center pt-14">
        <div class="col-span-12">
          <h3 class="text-4xl text-blue-text-hdr font-semibold mb-8">IPSC Signature Past Events</h3>

          <!--  -->
          <div class="cxo-event relative mb-8">
                <div class="flex flex-col lg:flex-row bg-white text-black relative">
                    <div class="basis-[30%]">
                       <div class="flex justify-evenly items-center py-10">
                       
                            <div class="ipscicon"><img src="{{ asset('assets/frontend/images/ipsc-home/IPSC Dubai.svg') }}" alt="" width="150"></div>
                            <div><img src="{{ asset('assets/frontend/images/ipsc-home/field fisher 1.png') }}" alt=""></div>
                        
                       </div>
                    </div>
                    <div class="basis-[70%] relative">
                        <div class="event-image relative imgclip-event">
                            <img src="{{ asset('assets/frontend/images/ipsc-home/london 001 1.png') }}" alt="" class="img-fluid h-full">
                            <h3 class="location-name absolute">
                                LONDON
                            </h3>
                          </div>
                       
                    </div>
                </div>
                <div class="event-link ">
                    <a href="{{ route('conferences.ipsc.london.2024') }}" class="btn btn_theme flex w-full">Discover IPSC LONDON 2024 Conference <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt=""></span></a>
                  </div>
            </div>
          <!--  -->

          <!--  -->
         <div class="cxo-event relative mb-8">
                <div class="flex flex-col lg:flex-row bg-white text-black relative">
                    <div class="basis-[30%]">
                       <div class="flex justify-evenly items-center py-10">
                       
                            <div class="ipscicon"><img src="{{ asset('assets/frontend/images/ipsc-home/IPSC riyadh.svg') }}" alt="" width="150"></div>
                            <div><img src="{{ asset('assets/frontend/images/ipsc-home/kingdom-logo 1.png') }}" alt=""></div>
                        
                       </div>
                    </div>
                    <div class="basis-[70%] relative">
                        <div class="event-image relative imgclip-event">
                            <img src="{{ asset('assets/frontend/images/ipsc-home/riyadh-2016.png') }}" alt="" class="img-fluid h-full">
                            <h3 class="location-name absolute">
                                RIYADH
                            </h3>
                          </div>
                       
                    </div>
                </div>
                <div class="event-link ">
                    <a href="{{ route('conferences.ipsc.riyadh.2024') }}" class="btn btn_theme flex w-full">Discover IPSC RIYADH 2024 Conference<span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt=""></span></a>
                  </div>
            </div>
          <!--  -->
         <div class="cxo-event relative mb-8">
                <div class="flex flex-col lg:flex-row bg-white text-black relative">
                    <div class="basis-[30%]">
                       <div class="flex justify-evenly items-center py-10">
                       
                            <div class="ipscicon"><img src="{{ asset('assets/frontend/images/ipsc-home/IPSC mumbai.svg') }}" alt="" width="150"></div>
                            <div><img src="{{ asset('assets/frontend/images/ipsc-home/01-03.svg') }}" alt=""></div>
                        
                       </div>
                    </div>
                    <div class="basis-[70%] relative">
                        <div class="event-image relative imgclip-event">
                            <img src="{{ asset('assets/frontend/images/ipsc-home/TAj Mumbai 1.png') }}" alt="" class="img-fluid h-full">
                            <h3 class="location-name absolute">
                                MUMBAI
                            </h3>
                          </div>
                       
                    </div>
                </div>
                <div class="event-link ">
                    <a href="{{ route('conferences.ipsc.mumbai.2024') }}" class="btn btn_theme flex w-full">Discover IPSC MUMBAI 2024 Conferences <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt=""></span></a>
                  </div>
            </div>
          <!--  -->
         <div class="cxo-event relative mb-8">
                <div class="flex flex-col lg:flex-row bg-white text-black relative">
                    <div class="basis-[30%]">
                       <div class="flex justify-evenly items-center py-10">
                       
                            <div class="ipscicon"><img src="{{ asset('assets/frontend/images/ipsc-home/IPSC riyadh.svg') }}" alt="" width="150"></div>
                            <div><img src="{{ asset('assets/frontend/images/riyadh/al-faisaliah-tower.png') }}" alt=""></div>
                        
                       </div>
                    </div>
                    <div class="basis-[70%] relative">
                        <div class="event-image relative imgclip-event">
                            <img src="{{ asset('assets/frontend/images/ipsc-home/riyadh-2016.png') }}" alt="" class="img-fluid h-full">
                            <h3 class="location-name absolute">
                                RIYADH
                            </h3>
                          </div>
                       
                    </div>
                </div>
                <div class="event-link ">
                    <a href="{{ route('conferences.ipsc.riyadh.2016') }}" class="btn btn_theme flex w-full">Discover IPSC RIYADH 2016 Conference<span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt=""></span></a>
                  </div>
            </div>

         <div class="cxo-event relative mb-8">
                <div class="flex flex-col lg:flex-row bg-white text-black relative">
                    <div class="basis-[30%]">
                       <div class="flex justify-evenly items-center py-10">
                       
                            <div class="ipscicon"><img src="{{ asset('assets/frontend/images/ipsc-home/IPSC-Dubai.png') }}" alt="" width="150"></div>
                            <div><img src="{{ asset('assets/frontend/images/ipsc-home/palm-dubai-1.png') }}" alt=""></div>
                        
                       </div>
                    </div>
                    <div class="basis-[70%] relative">
                        <div class="event-image relative imgclip-event">
                            <img src="{{ asset('assets/frontend/images/ipsc-home/atalntic the plam 1.png') }}" alt="" class="img-fluid h-full">
                            <h3 class="location-name absolute uppercase">
                                Dubai
                            </h3>
                          </div>
                       
                    </div>
                </div>
                <div class="event-link ">
                    <a href= "{{ route('conferences.ipsc.dubai.2021') }}" class="btn btn_theme flex w-full">Discover IPSC DUBAI 2021 Conference<span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt=""></span></a>
                  </div>
            </div>
             <div class="cxo-event relative mb-8">
                <div class="flex flex-col lg:flex-row bg-white text-black relative">
                    <div class="basis-[30%]">
                       <div class="flex justify-evenly items-center py-10">
                       
                            <div class="ipscicon"><img src="{{ asset('assets/frontend/images/ipsc-home/abudhabi.png') }}" alt="" width="150"></div>
                            <div><img src="{{ asset('assets/frontend/images/ipsc-home/emirates.png') }}" alt=""></div>
                        
                       </div>
                    </div>
                    <div class="basis-[70%] relative">
                        <div class="event-image relative imgclip-event">
                            <img src="{{ asset('assets/frontend/images/ipsc-home/Abu dhabi 1.png') }}" alt="" class="img-fluid h-full">
                            <h3 class="location-name absolute uppercase">
                                Abu dhabi
                            </h3>
                          </div>
                       
                    </div>
                </div>
                <div class="event-link ">
                    <a href="{{ route('conferences.ipsc.abudhabi.2016') }}" class="btn btn_theme flex w-full">Discover IPSC ABU DHABI 2016 Conferences <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt=""></span></a>
                  </div>
            </div>
          <!--  -->
          <div class="cxo-event relative mb-8">
            <div class="flex flex-col lg:flex-row bg-white text-black relative">
              <div class="basis-[40%]">
                <div class="flex justify-center items-center py-10">
                  <div class="ipscicon"><img src="{{ asset('assets/frontend/images/ipsc-home/IPSC-Dubai.png') }}" alt="" width="150" /></div>
                  <div><img src="{{ asset('assets/frontend/images/ipsc-home/palm-dubai-1.png') }}" alt="" /></div>
                </div>
              </div>
              <div class="basis-[60%] relative">
                <div class="event-image relative imgclip-event">
                  <img src="{{ asset('assets/frontend/images/ipsc-home/Dubai 01 1.png') }}" alt="" class="img-fluid h-full" />
                  <h3 class="location-name absolute uppercase">
                    Dubai
                  </h3>
                </div>
              </div>
            </div>
            <div class="event-link">
              <a href="{{ route('conferences.ipsc.dubai.2016') }}" class="btn btn_theme flex w-full">
                Discover IPSC DUBAI 2016 Conferences <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
          <!--  -->
          <div class="cxo-event relative mb-8">
            <div class="flex flex-col lg:flex-row bg-white text-black relative">
              <div class="basis-[40%]">
                <div class="flex justify-center items-center py-10">
                  <div class="ipscicon"><img src="{{ asset('assets/frontend/images/ipsc-home/IPSC-Dubai.png') }}" alt="" width="150" /></div>
                  <div><img src="{{ asset('assets/frontend/images/ipsc-home/palm-dubai-1.png') }}" alt="" /></div>
                </div>
              </div>
              <div class="basis-[60%] relative">
                <div class="event-image relative imgclip-event">
                  <img src="{{ asset('assets/frontend/images/ipsc-home/Dubai 2.png') }}" alt="" class="img-fluid h-full" />
                  <h3 class="location-name absolute uppercase">
                    Dubai
                  </h3>
                </div>
              </div>
            </div>
            <div class="event-link">
              <a href="{{ route('conferences.ipsc.dubai.2014') }}" class="btn btn_theme flex w-full">
                Discover IPSC DUBAI 2014 Conference<span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
          <!--  -->
          <div class="cxo-event relative mb-8">
            <div class="flex flex-col lg:flex-row bg-white text-black relative">
              <div class="basis-[40%]">
                <div class="flex justify-center items-center py-10">
                  <div class="ipscicon"><img src="{{ asset('assets/frontend/images/ipsc-home/IPSC-qatar.png') }}" alt="" width="150" /></div>
                  <div><img src="{{ asset('assets/frontend/images/ipsc-home/sheraton.png') }}" alt="" /></div>
                </div>
              </div>
              <div class="basis-[60%] relative">
                <div class="event-image relative imgclip-event">
                  <img src="{{ asset('assets/frontend/images/ipsc-home/qatar 1.png') }}" alt="" class="img-fluid h-full" />
                  <h3 class="location-name absolute uppercase">
                    qatar
                  </h3>
                </div>
              </div>
            </div>
            <div class="event-link">
              <a href="{{ route('conferences.ipsc.qatar.2014') }}" class="btn btn_theme flex w-full">
                Discover IPSC QATAR 2014 Conference <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

      <div class="container mt-10">
            <div class="sponsor p-0 overflow-hidden sponser-padding home-sponser">

                <div class="marquee-container">
                    <div class="marquee-content">
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}"alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}"alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}"alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}"alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}"alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt=""></span>
    <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt=""></span>
</div>
                </div>
            </div>
        </div>
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush