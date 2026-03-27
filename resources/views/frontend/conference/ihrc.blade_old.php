@extends('layouts.frontend.app')
@section('title', 'Blue Ocean IHRC Conferences')
@section('meta-description', 'Blue Ocean IHRC Conferences: Where hospitality meets innovation. Insights, trends, and networking for industry leaders.')
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
  <!-- Section Starts Here 1 -->

        <div class="w-full">
            <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls="" autoplay muted>
              <source src="{{ asset('assets/frontend/images/ipsc-video/IHRC-2022-armani -hotel-dubai.mp4') }}" type="video/mp4">
              <source src="" type="video/ogv">
              <source src="" type="video/webm">
              Your browser does not support the video tag.
            </video>
          </div>
  <!-- Section End Here 1 -->
  <section class="about_block relative">
    <div class="diveder_angle kopillar_angle">
        <img src="{{ asset('assets/frontend/images/con-bowld-img/devider_angle.png') }}" alt="">
    </div>
      <a href="{{ route('conferences.ipsc.2025') }}" class="strip-link">
            <div class="ipsc_stripe absolute banner-bottom-strip ipsc-new-bg">
                <!-- <img src="{{ asset('assets/frontend/images/ipsc-text-gradent.png') }}" alt="" class="w-full h-auto" /> -->
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
                        <img src="{{ asset('assets/frontend/images/ihrc-img/ihrc.webp') }}" alt="Exprience icon" class="img-fluid m-auto">
                    </div>
                </div>
                <div class="width-sixty  mt-8">
                    <div class="header_text boc_top-header">
                        <h2>
                            <span>Embracing </span>
                            The Future of Work
                        </h2>
                        <p class="lg:pr-10">The International Human Resources Conference (IHRC) is a future-focused platform designed to equip HR leaders and teams with the knowledge, tools, and strategies to navigate the evolving world of work.
</p>
                    </div>
                </div>


            </div>
        </div>
</section>

  <!-- Section Starts Here 2 -->
 <section class="key-pillars block_header ihrc-key-area">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="width-forty"></div>
            <div class="w-full width-sixty">
                <div class="header_text">
                    <h2>Key Focus Areas</h2>
                </div>
            </div>
          

        </div>
        <div class="orange-corner relative"></div>
        <div class="kopiller_data mt-3 orange-bg green-gradent">
            <div class="flex flex-wrap">
                <div class="width-forty">
                    <div class="pillor_left text-center ipsc-logo-right">
                        <img src="{{ asset('assets/frontend/images/IHRC-hover.svg') }}" alt="Exprience icon" class="img-fluid ">
                        <div class="text-center lg:text-right">
                            <h2 class="text-white uppercase">
                                <span class="focus-areas-a">The </span>
                                <span class="focus-areas-b">International</span>
                                <span class="focus-areas-c">Human Resources</span>Conference

                                
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="width-sixty">
                    <div class="kopiller_right key-feature-ihrc">
                        <div class="mx-auto">
                            <h2 class="key-header pb-2">Technology and Agility</h2>
                            <div class="flex flex-wrap w-full">
                                <div class="w-full xl:w-1/2">
                                    <div class="left_award xl:pr-8 ">
                                        <h3 class="text-white">Tech-Savvy Leadership</h3>
                                        <p class="site-text text-white">
                                            Empowering HR leaders to leverage technology for innovation and operational efficiency. Focus areas include AI, data analytics, and automation as integral tools in modern HR practices.

                                        </p>
                                    </div>
                                </div>

                                <div class="w-full lg:w-1/2">
                                    <div class="left_award pr-2">
                                        <h3 class="text-white">Agility in Decision-Making</h3>
                                        <p class="site-text text-white">
                                            Emphasizing the need for responsive and adaptable HR frameworks. IHRC explores strategies for building agility to stay ahead of emerging trends and disruptions.


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
  <!-- Supportive Block -->
  <section class="supportive ihrc-backimage">
    <div class="support_top-angle">
        <img src="{{ asset('assets/frontend/images/angle-ihrc.png') }}" alt="" class="img-fluid">
    </div>
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full">
                <div class="support_ihdr">
                    <h2 class="text-white">Strategic Workforce Transformation</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="black-bg relative">
        <div class="clipped-border"></div>
        <div class="container mx-auto">

            <div class="flex flex-wrap mt-4 networking-box ihrc-network">
                <div class="w-full lg:w-5/12">
                    <div class="support_content ipse-page">
                        <h2 class="text-white"><span>Future - </span><br>Ready Skills</h2>
                        <p class="text-white">IHRC highlights the need for upskilling and reskilling the
                            workforce
                            to meet the demands of tomorrow’s job market. It explores strategies for fostering a
                            culture of continuous learning and development.</p>
                    </div>
                </div>
                <div class="w-full  lg:w-1/2 lg:pl-6">
                    <div class="support_content ipse-page">
                        <h2 class="text-white"><span>Employee</span><br> Experience</h2>
                        <p class="text-white">The conference delves into creating a seamless and engaging
                            employee
                            experience, ensuring organizations can attract, retain, and nurture top talent in a
                            competitive environment.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

  <!-- Section Starts Here 3 -->
<section class="leadership_women relative pb-none">
    <div class="right_overangle">
        <img src="{{ asset('assets/frontend/images/ihrc-img/ihrc-right-images.png') }}" alt="" class="img-fluid">
    </div>
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="width-forty"></div>
            <div class="width-sixty">

                <div class="flex flex-wrap items-center">

                    <div class="w-full">

                        <div class="leadership_text">
                            <h2 class="uppercase text-9xl font-bold mar-bot-ihrc">Leadership
                                <span class="font-light text-2xl lg:text-5xl">and</span><br>
                                Collaboration
                            </h2>
                        </div>

                        <div class="driving-text pr-0 relative pt-8 flex flex-wrap nofalg-icon">
                            <div class="stragity-text mb-7 w-full lg:w-1/2 pr-6">
                                <h3 class="text-blue-text-hdr text-2xl lg:text-3xl mb-3 font-bold">Visionary
                                    Leadership </h3>
                                <p class="text-stragity-text  text-xl lg:text-2xl">IHRC underscores the
                                    importance of visionary leadership in driving organizational success. It
                                    brings together global HR thought leaders to share best practices and
                                    innovative approaches.</p>
                            </div>
                            <div class="stragity-text w-full lg:w-1/2">
                                <h3 class="text-blue-text-hdr  text-2xl lg:text-3xl mb-3 font-bold">
                                    Cross-Functional Collaboration</h3>
                                <p class="text-stragity-text text-xl lg:text-2xl">The conference encourages
                                    collaboration across departments, breaking down silos to create a cohesive
                                    and aligned workforce.
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
                            <source media="(min-width:992px)" srcset="{{ asset('assets/frontend/images/ihrc-img/ihrc-overlay.png') }}"
                      >
                            <img src="{{ asset('assets/frontend/images/ihrc-img/mobile-banner-bottom.png') }}" alt="banner image"
                                class="img-fluid d-block w-full">
                        </picture>

                        <div class="women_special-text absolute">
                            <div class="content_women">
                                <h3 class="text-white text-4xl text-end pt-14"><span class="font-light">Where
                                        Vision Meets Action</span><br>
                                    Redefining Work for<br>
                                    a Global Future.</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- Section End Here 3 -->
 <section class="matters-block">
    <div class="container">
        <div class="leadership_text">
            <h2 class="uppercase text-9xl font-bold mar-bot-ihrc">Aspire. Empower. Ignite. </h2>
        </div>
    </div>
    <div class="matters-gray relative">
        <div class="container">
            <div class="flex w-full flex-wrap">
                <div class="width-forty">
                    <div class="matter-img relative pr-8">
                        <img src="{{ asset('assets/frontend/images/leader-why.png') }}" class="w-full" alt="">
                        <div class="absolute bottom-6 pl-12">
                            <div class="leadership_text">
                                <h2 class="uppercase text-9xl font-bold text-white">
                                    <span class="font-light text-4xl">Why</span><br>
                                    IHRC<br>
                                    Matters
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="width-sixty">
                    <div class="matter-text">
                                    {{--
                        <p class="text-2xl leading-9 mb-8">IHRC is more than just a conference; it is a movement
                            to redefine the role of HR in
                            shaping the future of work. By addressing the challenges and opportunities presented
                            by technological advancements, shifting workforce dynamics, and evolving business
                            models, IHRC empowers HR professionals to lead with confidence and foresight.</p>
                        <p class="text-2xl">In a world where the only constant is change, IHRC stands as a
                            beacon for HR teams
                            striving to stay ahead of the curve. It provides a unique opportunity to connect
                            with industry experts, gain actionable insights, and build a roadmap for sustainable
                            success in the ever-changing world of work.</p> --}}

                     <ul class="why-ihrc">
                     <li class="why-matters">Bridges strategy, people, and performance</li>
                     <li class="why-matters">Explores future-focused trends in work and workforce</li>
                     <li class="why-matters">Provides access to global HR thought leaders</li>
                     <li class="why-matters">Focuses on technology, agility, and innovation in HR</li>
                     <li class="why-matters">Highlights sustainable and inclusive HR practices</li>
                     <li class="why-matters">Offers actionable insights for real-world application</li>
                     <li class="why-matters">Builds capabilities for future-ready HR leadership
</li>
                     </ul>
                </div>
            </div>
        </div>
    </div>
</section>
  <!--  -->
 <section class="conference-ihrc relative">
    <div class="confern-angle">
        <img src="{{ asset('assets/frontend/images/hr-hr-metaverse.png') }}" class="w-full" alt="">
    </div>
    <div class="container">
        <div class="flex w-full flex-wrap">
            <div class="w-full md:w-1/2">
                <div class="confr-text">
                    <img src="{{ asset('assets/frontend/images/ihrc/IHRC-sticky-menu-logo-1.svg') }}" alt="">
                   <div class="w-modify">
                    <p class="red-text">A unique platform to learn, network, and advance your HR career and organization.
</p>
                    <p class="mt-4">IHRC brings together decision-makers, thought leaders, and HR professionals to explore the latest trends, innovations, and best practices shaping the HR landscape.</p>
                        <p class="mt-4">Join industry experts and peers to gain insights, share knowledge, and drive impactful change in your organization.
 </p>
                     <div class="btn-wrap mt-10 mb-10">
                            <a href="{{ route('conferences.ihrc.dubai.2022') }}" class="btn primary-btn">Know More<img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"></a>
                          </div>
                   </div>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="matter-right">
                    <img src="{{ asset('assets/frontend/images/ihrc/ihrc-home.png') }}" alt="">
                   
                </div>
            </div>
        </div>
    </div>

</section>
  <!-- Section Starts Here 4 -->
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
                  IPSC Delhi 2025 <span class="ml-2"><img src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt="" /></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section End Here 5 -->
 <section class="confrence-cxo mb-12">

    <div class="container m-auto">
        <div class="grid grid-cols-1 lg:grid-cols-12 space-x-5 items-center pt-14">
            <div class="col-span-12">
                <h3 class=" text-4xl text-blue-text-hdr font-semibold mb-8">IHRC Signature Past Events</h3>
                <div class="cxo-event relative">
                    <div class="flex flex-col lg:flex-row bg-white text-black relative">
                        <div class="basis-[40%]">
                            <div class="flex justify-around items-center py-10">

                                <div class="ipscicon"><img src="{{ asset('assets/frontend/images/ihrc-img/ihrc.webp') }}" alt=""
                                        width="150"></div>
                                <div><img src="{{ asset('assets/frontend/images/ihrc/armani-hotel.png') }}" alt=""></div>

                            </div>
                        </div>
                        <div class="basis-[60%] relative">
                            <div class="event-image relative imgclip-event">
                                <img src="{{ asset('assets/frontend/images/ihrc/ihrc-dubai-img.png') }}" alt="" class="img-fluid">
                            </div>

                        </div>
                    </div>
                    <div class="event-link ">
                        <a href="{{ route('conferences.ihrc.dubai.2022') }}" class="btn btn_theme flex w-full">Discover IHRC DUBAI 2022 Conference<span class="ml-2"><img
                                    src="{{ asset('assets/frontend/images/cxo-image/right-arrow.svg') }}" alt=""></span></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="col-span-12 mt-10 text-center">
            <h3 class=" text-4xl text-blue-text-hdr font-semibold mb-8">Where Leaders Meet. Where Industries Evolve.</h3>
            <a href="#" class="btn primary-btn m-auto"> Be Part of the Revolution<img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"></a>
         </div>
    </div>

</section>
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush