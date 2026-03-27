@extends('layouts.frontend.app')
@section('title', ' Training - Blue Ocean Academy')
@section('meta-description', 'Blue Ocean Academy Training: Expert courses & workshops to elevate your skills.')
@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.min.css">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style-last.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/training-page.css') }}">
<link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
<style>

</style>
@endpush
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" /> -->

@section('content')

<!-- Banner Section Starts Here -->
<section class="hero-banner-section">
    <div class="hero-banner-wrap">
        <picture>
            <source media="(max-width:770px)" srcset="{{ asset('assets/frontend/images/Top-banner-image.png') }}" />
            <img src="{{ asset('assets/frontend/images/hero-banner.svg') }}" alt="banner image"
                class="w-full banner-img" />
        </picture>
<!-- Banner video Section Starts Here
       <div class="w-full">
            <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true" controls="">
              <source src="{{ asset('assets/frontend/images/ipsc-video/ipsc-delhi-promo.mp4') }}" type="video/mp4">
              <source src="" type="video/ogv">
              <source src="" type="video/webm">
              Your browser does not support the video tag.
            </video>
          </div> -->
        <div class="hero-banner-main">
            <div class="container h-full">
                <div class="hero-banner-text">
                    <h1 class="hero-banner-heading font-light">
                        <span class="block">Sharpen Your Skills,</span>
                        Shape the Future
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section Ends Here -->

<!-- About Section Starts Here -->
<section class="about-section relative">
    <div class="diveder-angle">
        <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="right-triangle hidden lg:block">
        <img src="{{ asset('assets/frontend/images/about-bg-traning.png') }}" class="about-bg traning-about"
            alt="triangle image" />
        <div class="flex items-start justify-between">
            <img src="{{ asset('assets/frontend/images/about-gray-triangle.png') }}" alt="triangle image" />
            <div class="flex flex-col items-start">
                <img src="{{ asset('assets/frontend/images/about-polygon-1.svg') }}" alt="triangle image" />
                <img class="self-end relative bottom-[90px]"
                    src="{{ asset('assets/frontend/images/about-polygon-2.svg') }}" alt="triangle image" />
            </div>
        </div>
    </div>
    <div class="experience-band pb-0">
        <div class="container">
            <div class="experience-band-main">
                <div class="experience-band-text">
                    <h2 class="experience-band-heading">
                        Empowering Professionals.
                        <strong class="block">Advancing Organizations.</strong>
                    </h2>
                </div>
                <div class="experience-band-img imgfx">
                    <img src="{{ asset('assets/frontend/images/experience-icon.svg') }}" class="w-full" />
                </div>
            </div>
        </div>
    </div>
    <div class="about-main">
        <div class="container">
            <div class="about-main-text">
                <div class="basis-1/2 padding-right-traning">
                    <p class="body-text mb-8 2xl:mb-10">
                       With over 28 years of excellence, we specialize in transforming professionals into impactful leaders.
                    </p>
                    <p class="body-text mb-4 2xl:mb-6">
                        At Blue Ocean Corporation, training is a catalyst for growth. Our programs are thoughtfully designed to sharpen strategic thinking, strengthen leadership acumen, and build technical expertise, equipping individuals to excel in today’s competitive and evolving landscape.
                    </p>
                    <p class="body-text font-semibold">Together, we unlock potential and transform skills into success.
                    </p>
                    <img src="{{ asset('assets/frontend/images/girl-professionals-image.png') }}"
                        class="mobile-girl-training" alt="">
                    <h3 class="sub-heading text-primary my-6 2xl:my-8">
                        Leadership-Ready. 
                      <strong class="text-secondary block inds-focus">Industry-Focused. Globally Certified.</strong>
                    </h3>
                    <p class="body-text max-w-[90%]">
                        Our training approach integrates international certifications, real-world expertise, and industry-specific insights to deliver practical, measurable outcomes. Led by global experts, each program is designed to elevate professional capability and build leadership that drives meaningful change.
                    </p>
                    <div class="btn-wrap mt-12">
                        <a href="{{ route('general.contact.us') }}" class="btn primary-btn">
                            Learn More
                            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                        </a>
                    </div>
                </div>
                <div class="basis-1/2 hidden lg:block">
                    <h4 class="float-text about-traning-text">
                        Empowering
                        <strong>Professionals</strong>
                    </h4>
                </div>
            </div>
            <div class="offerings-wrap">
                <h5 class="offerings-heading">Key Offerings</h5>


                <div class="offer-slider-wrp">
                    <div class="progress-slider">
                        <div class="offerings-list">
                            <div class="offerings-item">
                                <div>
                                    <h6>Customized Corporate Training</h6>
                                    <p>Tailored programs designed to align with your industry, strategy, and workforce needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="offerings-list">
                            <div class="offerings-item">
                                <div>
                                    <h6>Globally Recognized Certifications</h6>
                                    <p>Equip professionals with credentials that meet international standards.</p>
                                </div>
                            </div>
                        </div>
                        <div class="offerings-list">
                            <div class="offerings-item">
                                <div>
                                    <h6>Leadership Development</h6>
                                    <p>Specialized learning paths in supply chain, healthcare, sustainability, and more.</p>
                                </div>
                            </div>
                        </div>
                        <div class="offerings-list">
                            <div class="offerings-item">
                                <div>
                                    <h6>Industry-Specific Expertise</h6>
                                    <p>Courses designed for sectors like healthcare, supply chain, and sustainability.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <ul class="controls certificate-arrow flex" id="custom-control-new">
                        <li class="prev prev-p mr-2">
                            <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
                        </li>
                        <li class="next next-p">
                            <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"
                                    alt="" /></span>
                        </li>
                    </ul>


                </div>
            </div>
        </div>
</section>
<!-- About Section Ends Here -->

<!-- Certification Section Starts Here -->
<section class="certification-section relative">
    <div class="diveder-angle -top-[50px] lg:top-8 2xl:top-4">
        <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="logo-banner">
        <div class="container">
            <div class="flex lg:items-center flex-col lg:flex-row">
                <div class="imgalign">
                    <img src="{{ asset('assets/frontend/images/brand-logo.svg') }}" />
                </div>
                <div class="lg:pl-24">
                    <div class="course-highlight">
                        <div id="styled-certificate-text" class="hidden">
                            <h2 class="sub-heading text-primary my-6 2xl:my-8">
                                Customized Training That Aligns Talent
                                <strong class="text-tab-sec block">with Organizational Goals.</strong>
                            </h2>
                        </div>
                        <div id="styled-affiliate-text" class="hidden">
                            <h2 class="sub-heading text-primary my-6 2xl:my-8">
                                Build Your Future with Industry-Recognized Certifications 
                                <strong class="text-tab-sec block"> Designed for Career Growth.</strong>
                            </h2>
                        </div>
                        <div id="styled-training-text" class="hidden">
                            <h2 class="sub-heading text-primary my-6 2xl:my-8">
                                Enhance Your Expertise Through
                                <strong class="text-tab-sec block">Expert-Led Webinars and Seminars</strong>
                            </h2>
                        </div>
                        <div id="styled-seminar-text" class="hidden">
                            <h2 class="sub-heading text-primary my-6 2xl:my-8">
                                Shaping industry-ready professionals for
                                <strong class="text-tab-sec block">success in the global marketplace.</strong>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs-wrap" id="tabs">
        <div id="select-wraper-tab">
            <h2 class="course-title-mobile">Course Category</h2>
            <select id="mobile-tabview" style="display: none;"></select>
        </div>
        <!-- Tabs Navigation -->
        <div class="border-b border-primary">
            <div class="certification-tabs container">

                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                    data-tabs-toggle="#certificate-styled-tab-content" role="tablist">

                    <li class="me-2" role="presentation">
                        <button id="settings-styled-tab" data-tabs-target="#styled-training" type="button" role="tab"
                            aria-controls="styled-training" aria-selected="true">
                            Corporate Training
                        </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button id="certificate-styled-tab" data-tabs-target="#styled-certificate" type="button"
                            role="tab" aria-controls="styled-certificate" aria-selected="false">
                            Certification Programs
                        </button>
                    </li>
                    <li class="me-2" role="presentation">
                        <button id="seminar-styled-tab" data-tabs-target="#styled-seminar" type="button" role="tab"
                            aria-controls="styled-seminar" aria-selected="false">
                            Webinar / Seminar
                        </button>
                    </li>
                    <li role="presentation">
                        <button id="affiliate-styled-tab" data-tabs-target="#styled-affiliate" type="button" role="tab"
                            aria-controls="styled-affiliate" aria-selected="false">
                            Affiliations
                        </button>
                    </li>
                </ul>

                <h3 class="text-primary only-mobiletab">
                    <strong class="block" id="option-value">Corporate Training</strong>
                </h3>
                <form class="py-5 lg:py-0">
                    <label for="course-search" class="sr-only">Search</label>
                    <div class="relative">
                        <button type="button" class="absolute end-0 inset-y-0 flex items-center traning-search">
                            <img src="{{ asset('assets/frontend/images/search-icon.svg') }}" width="18px"
                                height="18px" />
                        </button>
                        <input type="search" id="traning-search"
                            class="block w-full p-3 pe-10 text-sm text-gray-900 border border-[#B2B2B2] rounded-md focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Search Course" />
                    </div>
                </form>
            </div>
        </div>

        <!-- Tabs Content -->
        <div class="py-16 lg:pb-44 bg-[#F9F9F9]" id="certificate-styled-tab-content">
            <div class="container">

                <!-- Corporate Training -->
               <div id="styled-training" role="tabpanel" aria-labelledby="settings-styled-tab">
  <div class="tab-data-wrap">
    <div class="basis-2/5">
      <div class="relative h-auto">
        <img src="{{ asset('assets/frontend/images/certification/training-tab-hero.png') }}"
        class="tab-data-img" style="with:80% !important;" />
        <div class="tab-data-arrow">
          <img src="{{ asset('assets/frontend/images/certification/training-tab-arrow.png') }}"
          alt="">
        </div>
      </div>
    </div>
    <div class="basis-1/2">
      {{--
      <h3 class="sub-heading text-primary">
        Equip your team with
        <strong class="block">
          world-class expertise
        </strong>
      </h3>
      --}}
      <p class="body-text">
        Our corporate training solutions are purpose-built to meet the evolving
        demands of global businesses. Each program is delivered by industry experts
        and aligned with international best practices ensuring your team is prepared,
        agile, and future-ready.
      </p>
      <h2 class="incontent-head">
        Why Choose Our Corporate Training
      </h2>
      {{--
      <p class="body-text">
        From leadership development to specialized technical expertise, our programs
        are tailored to drive performance, enhance productivity, and foster innovation
        across your organization. Invest in your teams future and set the foundation
        for sustained global success.
      </p>
      --}}
      <div class="list-main">
        <ul class="list-disc pl-4">
          <li class="body-text ] pb-0">
            Customized modules aligned with your business objectives goals.
          </li>
          <li class="body-text pb-0">
            Delivered by globally experienced trainers
          </li>
          <li class="body-text  pb-0">
            Based on proven success frameworks and case studies
          </li>
        </ul>
      </div>
      <p class="text-secondary text-2xl 2xl:text-3xl font-medium">
        Empower your team to exceed performance benchmarks and lead with confidence.
      </p>
      <div class="btn-wrap mt-12">
        <a href="{{ route('training.corporate') }}" class="btn primary-btn">
         Learn More
          <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"
          />
        </a>
      </div>
    </div>
  </div>
</div>
                <!-- Certification Programs -->
                <div class="hidden" id="styled-certificate" role="tabpanel" aria-labelledby="certificate-styled-tab">
                    <div class="tab-data-wrap">
                        <div class="basis-2/5">
                            <div class="relative h-auto">
                                <h3 class="sub-heading text-primary hide-display-mobile">
                                    Certify Your Skills,
                                    <strong class="block">Elevate Your Future.</strong>
                                </h3>
                                <img src="{{ asset('assets/frontend/images/certification/certification-tab-hero.png') }}"
                                    class="tab-data-img" style="with:80% !important;" />
                                <div class="tab-data-arrow">
                                    <img src="{{ asset('assets/frontend/images/certification/certification-tab-arrow-full.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="basis-1/2">
                                     {{--  hidden - for content change
                            <h3 class="sub-heading text-primary sho-hide-mobile">
                                Certify Your Skills,
                                <strong class="block">Elevate Your Future.</strong>
                            </h3> --}}
                            <p class="para-text">
                                We deliver globally recognized certification programs designed to enhance your team’s skills and drive organizational success. Our courses combine comprehensive knowledge, hands-on training, and accredited credentials across key domains such as Logistics & Supply Chain, Procurement, HR, Quality Management, Project Management, Aviation, and IT. By aligning training with industry standards and practical application, we help your organization build a skilled, agile workforce ready to meet today’s challenges and lead tomorrow’s growth.
                            </p>
                            <h2 class="incontent-head">Why Choose Our Certification Program?</h2>
                             {{-- hidden - for content change
                            <p class="para-text">
                                Whether in Logistics & Supply Chain, Procurement & Purchasing, HR, Quality Management,
                                Project
                                Management, Aviation, or IT, we offer solutions that empower individuals and
                                organizations to achieve
                                operational excellence.
                            </p> --}}

							<div class="list-main">
							<ul class="list-disc pl-4">
							<li class="body-text  pb-0">Globally accredited certification programs trusted by industry leaders</li>
							<li class="body-text pb-0">Expert-led training tailored to your organization’s needs</li>
							<li class="body-text  pb-0">Practical, results-driven learning with real-world case studies
																																		</li>
								<li class="body-text  pb-0">Customized solutions to boost productivity and operational excellence
																																				</li>
											<li class="body-text pb-0">Proven track record of empowering professionals and organizations worldwide</li>
											</ul></div>
                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Start your certification journey
                                today and
                                lead with confidence in tomorrow’s market.</p>
                            <div class="btn-wrap mt-12">
                                <a href="{{ route('training.certification.program') }}" class="btn primary-btn">
                                    Learn More
                                    <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Webinar / Seminar -->
                <div class="hidden" id="styled-seminar" role="tabpanel" aria-labelledby="seminar-styled-tab">
                    <div class="tab-data-wrap">
                        <div class="basis-2/5">
                            <div class="relative h-auto">
                                <img src="{{ asset('assets/frontend/images/certification/seminar-tab-hero.png') }}"
                                    class="tab-data-img" style="with:80% !important;" />
                                <div class="tab-data-arrow">
                                    <img src="{{ asset('assets/frontend/images/certification/seminar-tab-arrow.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="basis-1/2">
                            <h3 class="sub-heading text-primary">
                                Stay Ahead with 
                                <strong class="block">Expert-Led Webinars & Seminars</strong>
                            </h3>
                            <p class="body-text">
                                Our webinars and seminars deliver focused knowledge and practical insights tailored to global standards of excellence. Led by industry leaders and subject matter experts, these sessions highlight the latest trends, best practices, and innovative strategies to help you and your team achieve superior performance.<br />
                                Whether you want to upskill your workforce, broaden your expertise, or stay current with market shifts, join us to gain valuable insights that empower your path to success.

                            </p>
                            
                            <h2  class="incontent-head">How Our Webinars Benefit Participants</h2>
                            {{-- hidden - for content change
                            
                            <p class="body-text">Whether you’re looking to upskill your team, expand your expertise,
                                join us to stay
                                at the forefront of your industry and empower your path to global success.</p>
                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium pb-6">Learn. Connect. Lead.</p>
                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Unlock Global Insights and
                                Achieve Excellence
                                Through Cutting-Edge Learning</p>  --}}

							<div class="list-main">
							<ul class="list-disc pl-4">
							<li class="body-text  pb-0">Industry Experts: Learn from top professionals and thought leaders.</li>
							<li class="body-text  pb-0">Current Trends: Access to up-to-date insights and innovative strategies.</li>
							<li class="body-text  pb-0">Interactive Sessions: Engaging formats with Q&A and live discussions.</li>
							<li class="body-text  pb-0">Flexible Access: Participate from anywhere with virtual options.</li>
							<li class="body-text  pb-0">Practical Application: Focus on real-world relevance and actionable takeaways.</li>
											</ul></div>

                            <div class="btn-wrap mt-12">
                                <a href="{{ route('training.webinar.seminar') }}" class="btn primary-btn">
                                    Learn More
                                    <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Affiliations -->
                <div class="hidden" id="styled-affiliate" role="tabpanel" aria-labelledby="affiliate-styled-tab">
                    <div class="tab-data-wrap">
                        <div class="basis-2/5">
                            <div class="relative h-auto">
                                <img src="{{ asset('assets/frontend/images/certification/affiliate-tab-hero.png') }}"
                                    class="tab-data-img" style="with:80% !important;" />
                                <div class="tab-data-arrow">
                                    <img src="{{ asset('assets/frontend/images/certification/affiliate-tab-arrow.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="basis-1/2">
                             {{-- hidden - for content change
                            <h3 class="sub-heading text-primary">
                                Affiliated for Excellence,
                                <strong class="block">Empowering Success.</strong>
                            </h3> --}}
                            <p class="body-text">Our international affiliations and certification programs are designed to elevate your professional capabilities and align your skills with global standards of excellence.</p>
                            <p class="body-text">
                                Through partnerships with world-renowned institutions and certification bodies, we provide exclusive access to internationally recognized training, certifications, and a network of global experts. This empowers you to enhance your expertise, stand out as a leader, and consistently meet the highest performance standards.
                            </p>
                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Join us to take the next step toward achieving global excellence.</p>
                            <div class="btn-wrap mt-12">
                                <a href="{{ route('training.affliations') }}" class="btn primary-btn">
                                    Learn More
                                    <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
   
</section>
<!-- Certification Section Ends Here -->

<!-- Certification Section Ends Here -->

<!-- Training and Course Section Starts Here -->
<div style="clear: both;"></div>
<section class="training-course-section">
    <div class="container">
        <div class="counter-head">
            <h2 class="sub-heading text-primary">
               World Leader in Training and Certification
                            {{-- 
                <strong class="block">
                    <span class="text-gold">
                        28 Years of Excellence
                        <img src="{{ asset('assets/frontend/images/gold-wave.svg') }}" />
                    </span>
                    in Training and Certification.
                </strong>--}}
            </h2>
        </div>
        <div class="counter-div">
            <div class="counter-wrap">
                <ul>
                    <li>
                        <h3>500,000+</h3>
                        <p>
                            A community of alumni <br />
                            worldwide
                        </p>
                    </li>
                    <li>
                        <h3>2,500+</h3>
                        <p>
                            Corporate <br />
                            Clients
                        </p>
                    </li>
                    <li>
                        <h3>800+</h3>
                        <p>
                            Training <br />
                            Programs
                        </p>
                    </li>
                    
                    <li>
                        <h3>30+</h3>
                        <p>
                            Prestigious<br />
                            Awards
                        </p>
                    </li>
                </ul>
            </div>
            <div class="counter-text">
                <p>Blue Ocean Corporation sets the benchmark for professional development on a global scale</p>
            </div>
        </div>
    </div>
    <div class="course-slider">
        <div class="course-slider-js">
             <div class="h-full px-4">
                <div class="course-slider-main">
                    <div class="course-slider-wrap">
                        <div class="course-main traning-home-text">
                            <div class="flex flex-col gap-5 image-course-block">
                                <picture>
                                    <source media="(max-width:770px)"
                                        srcset="{{ asset('assets/frontend/images/IPSC-triangle01.png') }}" />
                                    <img src="{{ asset('assets/frontend/images/IPSCMI-logo.png') }}" alt="company logo"
                                        class="" />
                                </picture>

                            </div>
                            <div class="traning-slider-mob">
                                <p class="course-text"> Stand Out with Industry-Recognized Certification</p>
                                <div class="course-name-wrap">
                                    <h3 class="course-name">CISCP</h3>
                                    <p class="course-sub-name">Certified International Supply Chain Professional</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="course-detail">
                {{-- 
                        <h4 class="sub-heading text-primary font-medium mb-5">Our Featured Training Courses</h4>--}}
                        <p class="body-text mb-5">
                            Master the core components of global supply chain management with the Certified International Supply Chain Professional (CISCP) program and gain the confidence to lead operational improvements.
                        </p>
                        <p class="body-text mb-5"> CISCP offers practical tools and strategic insights to help you make an impact.</p>
                        
                        <p class="text-primary text-2xl 2xl:text-3xl font-medium">Take Your Expertise to the Next Level!</p>
                        <div class="btn-wrap mt-2 md:mt-4">
                            <a href="{{ route('training.register') }}" class="btn primary-btn"
                                >
                                Register Now
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                            </a>
                        </div>
                    </div>
                </div>

            </div> 

            <div class="h-full px-4">
                <div class="course-slider-main">
                    <div class="course-slider-wrap">
                        <div class="course-main traning-home-text">
                            <div class="flex flex-col gap-5  image-course-block">
                                <picture>
                                    <source media="(max-width:770px)"
                                        srcset="{{ asset('assets/frontend/images/ASCM-triangle.png') }}" />                                      
                                <img src="{{ asset('assets/frontend/images/certification/ascm-logo.png') }}" />
                                </picture>
                            </div>
                            <div class="traning-slider-mob">
                                <p class="course-text"> Stand Out with Industry-Recognized Certification</p>
                                <p class="text-black text-4xl 2xl:text-5xl font-bold">APICS</p>
                                <div class="course-name-wrap">
                                    <h3 class="course-name">CLTD</h3>
                                    <p class="course-sub-name">Certified in Logistics, Transportation and Distribution
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-detail">
                        <p class="body-text mb-5">
                            Advance your expertise with the CLTD – Certified in Logistics, Transportation, and Distribution program.
                        </p>
                        <p class="body-text mb-5">
                        Acquire comprehensive knowledge of logistics, transportation, and distribution strategies to enhance operational efficiency and drive business success.
						</p>
                        <p class="text-primary text-2xl 2xl:text-3xl font-medium">Take Your Expertise to the Next Level!</p>
                        <div class="btn-wrap mt-2 md:mt-4">
                           <a href="{{ route('training.register') }}" class="btn primary-btn"
                                >
                                Register Now
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-full px-4">
                <div class="course-slider-main">
                    <div class="course-slider-wrap">
                        <div class="course-main traning-home-text">
                            <div class="flex flex-col gap-5  image-course-block">

                                <picture>
                                    <source media="(max-width:770px)"
                                        srcset="{{ asset('assets/frontend/images/IPSC-triangle01.png') }}" />
                                    <img src="{{ asset('assets/frontend/images/IPSCMI-logo.png') }}" />
                                </picture>

                            </div>
                            <div class="traning-slider-mob">
                                <p class="course-text"> Stand Out with Industry-Recognized Certification</p>
                                <div class="course-name-wrap">
                                    <h3 class="course-name">CICCM</h3>
                                    <p class="course-sub-name">Certified International Commercial Contracts Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-detail">
                        <p class="body-text mb-5">
                            Build your skills with the <strong>CICCM </strong>– Certified International Commercial Contracts Manager certification.

                        </p>
                         <p class="body-text mb-5">
                          Learn essential concepts in commercial contracts and supply chain management to drive operational excellence.
                        </p>
                        <p class="text-primary text-2xl 2xl:text-3xl font-medium">Take Your Expertise to the Next Level!</p>
                        <div class="btn-wrap mt-2 md:mt-4">
                            <a href="{{ route('training.register') }}" class="btn primary-btn"
                                >
                                Register Now
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-full px-4">
                <div class="course-slider-main">
                    <div class="course-slider-wrap">
                        <div class="course-main traning-home-text">
                            <div class="flex flex-col gap-5  image-course-block">
                              
                                        <picture>
                                    <source media="(max-width:770px)"
                                        srcset="{{ asset('assets/frontend/images/ACI-logo-triangle.png') }}" />
                                     <img src="{{ asset('assets/frontend/images/affliations/Amireican-ceetification-inst.svg') }}" />
                                </picture>
                            </div>
                            <div class="traning-slider-mob">
                                <p class="course-text"> Stand Out with Industry-Recognized Certification</p>
                                <p class="text-black text-4xl 2xl:text-5xl font-bold">CHRP</p>
                                <div class="course-name-wrap">
                                    <h3 class="course-name">CHRM</h3>
                                    <p class="course-sub-name">Certified Human Resources Professional / Management</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-detail">
                        <p class="body-text mb-5">
                           Strengthen your expertise in HR with the CHRP-CHRM Certified Human Resources Professional / Manager program.
Gain comprehensive knowledge of HR strategies, operations, and leadership to drive organizational success.


                        </p>
                        <p class="text-primary text-2xl 2xl:text-3xl font-medium">Take your expertise to the next level!</p>
                        <div class="btn-wrap mt-2 md:mt-4">
                            <a href="{{ route('training.register') }}" class="btn primary-btn"
                                >
                                Register Now
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h-full px-4">
                <div class="course-slider-main">
                    <div class="course-slider-wrap">
                        <div class="course-main traning-home-text">
                            <div class="flex flex-col gap-5  image-course-block">
                               
                                  <picture>
                                    <source media="(max-width:770px)"
                                        srcset="{{ asset('assets/frontend/images/IPSC-triangle01.png') }}" />
                                     <img src="{{ asset('assets/frontend/images/IPSCMI-logo.png') }}" />
                                </picture>
                            </div>
                            <div class="traning-slider-mob">
                                <p class="course-text"> Stand Out with Industry-Recognized Certification</p>
                                <div class="course-name-wrap">
                                    <h3 class="course-name">CIPM</h3>
                                    <p class="course-sub-name">Certified International Procurement Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="course-detail">
                        <p class="body-text mb-5">
                            Advance your procurement expertise with the <strong>CIPM </strong> (Certified International Procurement Manager) program.
                        </p>
                          <p class="body-text mb-5">
                           Gain comprehensive knowledge of procurement strategies, supply chain operations, and management to improve efficiency and drive business success.
                        </p>
                        <p class="text-primary text-2xl 2xl:text-3xl font-medium">Take your expertise to the next level!</p>
                        <div class="btn-wrap mt-2 md:mt-4">
                            <a href="{{ route('training.register') }}" class="btn primary-btn"
                                >
                                Register Now
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
     <!-- 
<ul class="controls certificate-arrow flex" id="custom-control-course">
    <li class="prev prev-course mr-2">
        <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
    </li>
    <li class="next next-course">
        <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
    </li>
</ul>
-->
        <div class="traning-home-angle mob-dv-hide">
            <img src="{{ asset('assets/frontend/images/traning-left-angle.png') }}" style="width: 95% !important;" />
        </div>
    </div>
</section>
<!-- Training and Course Section Ends Here -->

<!-- Trusted Section Starts Here -->
<section class="trusted-section">
    <div class="container">
        <div class="trusted-head">
            <h2 class="sub-heading text-primary pb-6">World-Class Training for Career Excellence</h2>
            <p class="body-text">
                Recognized worldwide for excellence in professional development, Blue Ocean Corporation empowers individuals and organizations to thrive in competitive markets. Our internationally accredited training programs are built on industry needs, led by expert faculty, and trusted by leading companies across sectors.
<br>
                <strong>With a focus on practical outcomes and strategic growth, we help professionals upskill with confidence and organizations build future-ready talent.</strong>
            </p>
        </div>
        {{-- <div class="trusted-image-wrap mt-10">
            <div class="cta-section-image-rows-wrapper">
                <!-- Row 1 -->
                <div class="cta-section-image-row-container row-1">
                    <div class="wrapper-slider slider-1">
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-1.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-2.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-3.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-4.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-5.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-6.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-7.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-8.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-1.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-2.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-3.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-4.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-5.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-6.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-7.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-8.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-1.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-2.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-3.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-4.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-5.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-6.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-7.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-8.jpg') }}" />
                        <!-- Add more -->
                    </div>
                </div>
                <div class="news-center-box">
                   Empowering Professionals to Lead and Succeed
                </div>
                <!-- Row 2 -->
                <div class="cta-section-image-row-container row-2">
                    <div class="wrapper-slider slider-2">
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-1.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-2.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-3.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-4.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-5.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-6.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-7.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-8.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-1.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-2.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-3.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-4.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-5.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-6.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-7.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-8.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-1.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-2.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-3.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-4.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-5.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-6.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-7.jpg') }}" />
                        <img src="{{ asset('assets/frontend/images/slider-two/slide-8.jpg') }}" />
                        <!-- Add more -->
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="trusted-image-wrap">
            <img src="{{ asset('assets/frontend/images/trusted-img.png') }}" class="trusted-image">
            <img src="{{ asset('assets/frontend/images/endorsed-Worldwide..png') }}" class="trusted-image-mobile">

            <div class="news-divider">
                <div class="divider-line divider-one"></div>
                <div class="divider-line divider-two"></div>
                <div class="divider-line divider-three"></div>
                <div class="divider-line divider-four"></div>
            </div>
            <div class="news-center-box">
               Empowering Professionals to Lead and Succeed

            </div>
        </div>
    </div>
    </div>
    <div class="decorative-triangles">
        <img src="{{ asset('assets/frontend/images/trusted-polygon-2.png') }}" class="-mb-[43px]" />
        <img src="{{ asset('assets/frontend/images/trusted-polygon-1.png') }}" />
    </div>
</section>
<!-- Trusted Section Ends Here -->

<!-- Supply Chain Section Starts Here -->

<section class="supply-chain-section">
    <div class="diveder-angle -top-4 lg:top-8 2xl:top-4 relative-mobile">
        <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" class="sup-chain-desk" />
        <img src="{{ asset('assets/frontend/images/supply-chain-angle.png') }}" alt="" class="sup-chain-mob" />
    </div>
    <div class="container">
        <h2 class="sub-heading text-primary mb-20"><strong class="">International Accreditations
        <div class="">

            <div class="w-full">
                <div class="slider-container relative">
                    <div class="traning-slider">
                        <div class="slider-item">
                            <div class="container">
                                <div class="flex for-mobile-traning">
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="supply-chain-text ">
                                            <h3 class="course-name mb-5">IATA</h3>
                                            <p class="cert-body-text text-2xl mb-5">
                                                The International Air Transport Association offers globally
                                                recognized certifications and
                                                training programs designed to enhance skills in aviation operations,
                                                safety, and management.
                                                With a
                                                mission to lead and serve the airline industry, IATA equips
                                                professionals with the expertise to
                                                streamline procedures, maximize efficiency, and drive cost-effective
                                                solutions in the dynamic
                                                aviation
                                                sector.
                                            </p>
                                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Refining Skills
                                                Like Light Through a
                                                Prism,
                                                <strong>Creating Leaders in Supply Chain Management.</strong>
                                            </p>
                                            <div class="btn-wrap mt-5">
                                                <a href="{{ route('training.affliations') }}" class="btn primary-btn">
                                                    Know More
                                                    <img
                                                        src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="panic-slider train-slide"><img
                                                src="{{ asset('assets/frontend/images/affliations/IATA.svg') }}"
                                                alt="" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                         <div class="slider-item">
                            <div class="container">
                                <div class="flex for-mobile-traning">
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="supply-chain-text ">
                                            <h3 class="course-name mb-5">IPSCMI</h3>
                                            <p class="cert-body-text text-2xl mb-5">
                                                The International Purchasing and Supply Chain Management Institute
                                               offers globally
                                                recognized
                                                certifications that set the golden standard in the purchasing and supply
                                                chain industry. With
                                                over
                                                20,000 firms preferring IPSCMI-certified professionals, these programs
                                                provide the expertise and
                                                credibility needed to excel in procurement and supply chain roles
                                                worldwide.
                                            </p>
                                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Refining Skills
                                                Like Light Through a
                                                Prism,
                                                <strong>Creating Leaders in Supply Chain Management.</strong>
                                            </p>
                                            <div class="btn-wrap mt-5">
                                                <a href="{{ route('training.affliations') }}" class="btn primary-btn">
                                                    Know More
                                                    <img
                                                        src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="panic-slider train-slide"><img
                                                src="{{ asset('assets/frontend/images/affliations/IPSCMI.svg') }}"
                                                alt="" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="slider-item">
                            <div class="container">
                                <div class="flex for-mobile-traning">
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="supply-chain-text ">
                                            <h3 class="course-name mb-5">CIPS</h3>
                                            <p class="cert-body-text text-2xl mb-5">
                                                The Chartered Institute of Procurement and Supply offers globally
                                                recognized
                                                certifications
                                                that set the standard for excellence in procurement and supply chain
                                                management. With a presence
                                                in
                                                over 150 countries and a network of 60,000 professionals, CIPS equips
                                                individuals with the
                                                skills and
                                                best practices to drive positive change and excel in the industry.
                                            </p>
                                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Refining Skills
                                                Like Light Through a
                                                Prism,
                                                <strong>Creating Leaders in Supply Chain Management.</strong>
                                            </p>
                                            <div class="btn-wrap mt-5">
                                                <a href="{{ route('training.affliations') }}" class="btn primary-btn">
                                                    Know More
                                                    <img
                                                        src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="panic-slider train-slide"><img
                                                src="{{ asset('assets/frontend/images/affliations/CIPS.svg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="slider-item">
                            <div class="container">
                                <div class="flex for-mobile-traning">
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="supply-chain-text ">
                                            <h3 class="course-name mb-5">CMI</h3>
                                            <p class="cert-body-text text-2xl mb-5">
                                                The Chartered Management Institute offers globally recognized
                                                certifications designed to
                                                develop
                                                leadership and management skills, empowering professionals to drive
                                                organizational success. With
                                                a
                                                focus on practical, real-world applications, CMI programs equip
                                                individuals with the tools to
                                                excel in
                                                management roles and lead high-performing teams.
                                            </p>
                                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Refining Skills
                                                Like Light Through a
                                                Prism,
                                                <strong>Creating Leaders in Supply Chain Management.</strong>
                                            </p>
                                            <div class="btn-wrap mt-5">
                                                <a href="{{ route('training.affliations') }}" class="btn primary-btn">
                                                    Know More
                                                    <img
                                                        src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="panic-slider train-slide"><img
                                                src="{{ asset('assets/frontend/images/affliations/CMI.svg') }}"
                                                alt="" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="slider-item">
                            <div class="container">
                                <div class="flex for-mobile-traning">
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="supply-chain-text ">
                                            <h3 class="course-name mb-5">CILT</h3>
                                            <p class="cert-body-text text-2xl mb-5">
                                                The Chartered Institute for Logistics and Transport offers
                                                globally recognized
                                                certifications
                                                and memberships that provide in-depth knowledge and expertise in
                                                logistics, transport, and
                                                supply
                                                chain management. With over 30,000 members across 30+ countries, CILT
                                                equips professionals with
                                                the
                                                skills to build rewarding, internationally recognized careers in these
                                                dynamic industries.
                                            </p>
                                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Refining Skills
                                                Like Light Through a
                                                Prism,
                                                <strong>Creating Leaders in Supply Chain Management.</strong>
                                            </p>
                                            <div class="btn-wrap mt-5">
                                                <a href="{{ route('training.affliations') }}" class="btn primary-btn">
                                                    Know More
                                                    <img
                                                        src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="panic-slider train-slide"><img
                                                src="{{ asset('assets/frontend/images/affliations/The-charted-inst_of-logistices -trasnport.svg') }}"
                                                alt="" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="slider-item">
                            <div class="container">
                                <div class="flex for-mobile-traning">
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="supply-chain-text ">
                                            <h3 class="course-name mb-5">APS</h3>
                                            <p class="cert-body-text text-2xl mb-5">
                                                The American Purchasing Society offers pioneering certification
                                                programs designed to
                                                enhance
                                                procurement skills and boost business purchasing efficiency. As the
                                                first organization to create
                                                certifications for buyers and purchasing managers, APS empowers
                                                professionals to excel in their
                                                careers and drive organizational success through expert training and
                                                education.
                                            </p>
                                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Refining Skills
                                                Like Light Through a
                                                Prism,
                                                <strong>Creating Leaders in Supply Chain Management.</strong>
                                            </p>
                                            <div class="btn-wrap mt-5">
                                                <a href="{{ route('training.affliations') }}" class="btn primary-btn">
                                                    Know More
                                                    <img
                                                        src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="panic-slider train-slide"><img
                                                src="{{ asset('assets/frontend/images/affliations/American-porcahse.svg') }}"
                                                alt="" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="slider-item">
                            <div class="container">
                                <div class="flex for-mobile-traning">
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="supply-chain-text ">
                                            <h3 class="course-name mb-5">ACI</h3>
                                            <p class="cert-body-text text-2xl mb-5">
                                                The American Certification Institute  offers globally recognized
                                                certifications across a
                                                wide
                                                range of business-related courses, providing professionals with the
                                                skills and credentials to
                                                excel in
                                                their fields. With alliance partners worldwide and affiliations like
                                                IPSCMI, ACI delivers
                                                premium
                                                training, testing, and certification programs designed to enhance career
                                                prospects and industry
                                                expertise.
                                            </p>
                                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Refining Skills
                                                Like Light Through a
                                                Prism,
                                                <strong>Creating Leaders in Supply Chain Management.</strong>
                                            </p>
                                            <div class="btn-wrap mt-5">
                                                <a href="{{ route('training.affliations') }}" class="btn primary-btn">
                                                    Know More
                                                    <img
                                                        src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="panic-slider train-slide"><img
                                                src="{{ asset('assets/frontend/images/affliations/PMI.svg') }}"
                                                alt="" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="slider-item">
                            <div class="container">
                                <div class="flex for-mobile-traning">
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="supply-chain-text ">
                                            <h3 class="course-name mb-5">ACI</h3>
                                            <p class="cert-body-text text-2xl mb-5">
                                                The American Certification Institute offers globally recognized
                                                certifications across a
                                                wide
                                                range of business-related courses, providing professionals with the
                                                skills and credentials to
                                                excel in
                                                their fields. With alliance partners worldwide and affiliations like
                                                IPSCMI, ACI delivers
                                                premium
                                                training, testing, and certification programs designed to enhance career
                                                prospects and industry
                                                expertise.
                                            </p>
                                            <p class="text-secondary text-2xl 2xl:text-3xl font-medium">Refining Skills
                                                Like Light Through a
                                                Prism,
                                                <strong>Creating Leaders in Supply Chain Management.</strong>
                                            </p>
                                            <div class="btn-wrap mt-5">
                                                <a href="{{ route('training.affliations') }}" class="btn primary-btn">
                                                    Know More
                                                    <img
                                                        src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full  w-full lg:w-1/2">
                                        <div class="panic-slider train-slide"><img
                                                src="{{ asset('assets/frontend/images/affliations/PMI.svg') }}"
                                                alt="" />

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> 


                    </div>
                    <div class="slide-bg-traingle">
                        <img src=" {{ asset('assets/frontend/images/traning-single.png') }}" alt="" class="h-auto" />
                    </div>
                    <ul class="controls certificate-arrow flex traning-slider-control" id="custom-control">
                        <li class="prev mr-2" data-controls="prev">
                            <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
                        </li>
                        <li class="next" data-controls="next">
                            <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"
                                    alt="" /></span>
                        </li>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- Supply Chain Section Ends Here -->

<!-- Voice Success Section Starts Here -->
@include('frontend.training.include.voice-of-success')
<!-- Voice Success Section Ends Here -->

<!-- Seminar Section Starts Here -->
<section class="seminar-section">

    @if(isset($highlightedSeminar) && $highlightedSeminar)
    <div class="container">
        <div class="seminar-head">
            <h2 class="seminar-heading">Upcoming Training Seminar / Webinar</h2>
        </div>
    </div>
    <div class="container">
        <div class="seminar-rectangle-wrap">
            <div class="seminar-rectangle">
                <p class="rectangle-text">{{ $highlightedSeminar->seminar_title_initial ?? ''}} {{
                    $highlightedSeminar->seminar_title }}</p>
            </div>
        </div>
    </div>
    @endif
    <div class="relative">
        <div class="container">
            @if(isset($highlightedSeminar) && $highlightedSeminar)
            <div class="seminar-main-wrap">
                <div class="flex flex-row gap-2">
                    <div class="seminar-bg-wrap">
                        <img src="{{ asset('assets/frontend/images/seminar-bg-2.png') }}" />
                    </div>
                    <div class="seminar-text-main">
                        <img src="{{ asset('assets/frontend/images/seminar-logo.png') }}" class="seminar-logo-mob" />
                        <h2 class="text-2xl 2xl:text-[32px] font-bold text-[#B50000] pt-4">{{
                            ($highlightedSeminar->seminar_type == 'FREE_SEMINAR') ? 'Free Webinar' : 'Paid Webinar' }}
                        </h2>
                        @if(isset($highlightedSeminar->seminar_title_initial))
                        <p class="text-[#020102] text-xl 2xl:text-2xl">{{ $highlightedSeminar->seminar_title_initial }}
                        </p>
                        @endif
                        <h3 class="text-2xl 2xl:text-[32px] text-primary font-bold lg:max-w-[200px] leading-[normal]">
                            {!! breakBy13Chars($highlightedSeminar->seminar_title) !!}</h3>
                        <p class="text-base 2xl:text-lg text-[#480001] font-bold">on {{
                            $highlightedSeminar->formattedDate('seminar_date') }}</p>
                        <div class="btn-wrap mt-5 mobile-register">
                            <a href="{{ route('training.webinar.seminar.register', $highlightedSeminar->slug) }}"
                                class="btn primary-btn">
                                Register Now
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(isset($upcomingSeminars) && $upcomingSeminars)
            <div class="seminar-all-list-wrap">


                <div class="seminorpage-slider-training">
                    @foreach($upcomingSeminars as $seminar)
                    <a href="{{ route('training.webinar.seminar.register', $seminar->slug) }}">
                        <div class="seminar-sld-sec">
                            <!-- <img src="{{ asset('assets/frontend/images/webinar/slide-bg.webp') }}" alt="" /> -->
                            <div class="seminar-sld-abs">
                                <h5><small>{{ ($seminar->seminar_type == 'FREE_SEMINAR') ? 'Free Seminar' : 'Paid
                                        Seminar' }}</small> {{ strtoupper($seminar->seminar_location) }}</h5>
                                <h6>
                                    @if(isset($seminar->seminar_title_initial))
                                    <strong>{{ $seminar->seminar_title_initial }}</strong>
                                    @endif
                                    <small>{{ $seminar->seminar_title }}</small>
                                </h6>
                                <span class="date-semi">{{ $seminar->formattedDate('seminar_date') }}</span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>

                @if($upcomingSeminars->count() > 2)
                <ul class="controls certificate-arrow flex event-control" id="customize-controls">
                    <li class="prev prev-p mr-2">
                        <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
                    </li>
                    <li class="next next-p">
                        <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
                    </li>
                </ul>

                <!-- <div class="controls certificate-arrow home-certificate-slide flex" id="">
                    <button type="button" class="btn-control prev" data-controls="prev">
                            <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
                    </button>
                    <button type="button" class="btn-control next" data-controls="next">
                                                  <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
                    </button>
                </div> -->
                @endif
            </div>
            @endif
        </div>
    </div>
</section>
<!-- Seminar Section Ends Here -->

<!-- Sponsor Section Starts Here -->
@if(isset($marquees) && !empty($marquees))
  <section class="sponsor overflow-hidden marquee-slide">
   <div class="container">
    <div class="marquee-container">
      <div class="marquee-content pstn-spon-logo">
        @foreach($marquees as $marquee)
          <span class="marquee-item"> <img src="{{ asset('storage/website-content/marquees/'.$marquee->image) }}" alt="" /></span>
        @endforeach
      </div>
    </div>
   </div>
  </section>
@endif
<!-- Sponsor Section Ends Here -->

@include('frontend.training.include.registration')
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
 <!-- <script src="{{ asset('assets/frontend/js/home.js') }}"></script> -->
<script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
<script src="{{ asset('assets/frontend/js/training.js') }}"></script>
<script>


    document.addEventListener('DOMContentLoaded', () => {
        const slider = tns({
            container: '.progress-slider',
            items: 1,
            slideBy: 1,
            items: 1,
            slideBy: 1,
            loop: false,
            rewind: true,
            controlsContainer: "#custom-control-new",
            controls: true,
            nav: true,
            responsive: {
                640: {
                    items: 2
                },
                1200: {
                    items: 4
                }
            },
        });
    });
</script>
<script>
    let testimonialSlider = document.querySelector(".testimonials-slider");
    if (testimonialSlider) {
        tns({
            container: '.testimonials-slider',
            items: 1,         // Fade mode
            autoplay: true,
            autoplayTimeout: 3000,
            speed: 1000,
            controls: false,
            nav: false,
            autoplayButtonOutput: false,
            slideBy: 1,
            responsive: {
                640: {
                    items: 1
                },


                1400: {
                    items: 2
                }
            }
        });
    }
</script>

<script>
    const sliderTraing = tns({
        container: '.traning-slider',
        slideBy: "page",
        swipeAngle: false,
        speed: 400,
        loop: true,
        items: 1,
        slideBy: '1',
        nav: false,
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        lazyload: true,
        controlsContainer: "#custom-control",
        controls: true,
        mode: 'gallery',
        // controlsContainer: "#custom-control",

    });
</script>
<script>
    const sliderTrainText = tns({
        container: '.traning-left-slider',
        loop: true,
        items: 1,
        slideBy: 'page',
        nav: false,
        autoplay: true,
        speed: 400,
        autoplayButtonOutput: false,
        mouseDrag: true,
        lazyload: true,
        mode: 'carousel',
        controls: false,
        responsive: {
            640: {
                items: 1
            },


            768: {
                items: 1
            }
        }
    });
</script>


<!-- Vanilla JS -->
<script>
    let courseSlider = document.querySelector(".course-slider-js");
    if (courseSlider) {
        var slider = tns({
            container: courseSlider,
            items: 1,
            slideBy: "page",
            autoplay: true,
            autoplayButtonOutput: false,
            nav: false,
            controls: false,
            speed: 2000, // this is overwritten below
            autoplayTimeout: 6000,
            mode: 'gallery',
            responsive: {
                640: {
                    items: 1,
                    nav: true,
                    controlsContainer: "#custom-control-course",
                    controls: false,
                    slideBy: "1",
                    mode: "carousel",
                },
                768: {
                    items: 1
                }
            }
        });
    }
</script>

<script>
    // On page load, show the first .course-highlight > div element by adding the 'view_data' class
    window.addEventListener('DOMContentLoaded', (event) => {
        const contents = document.querySelectorAll(".course-highlight > div");
        // Show the first content element only
        if (contents.length > 0) {
            contents[0].classList.add('view_data');
        }
    });

    const arrowdropdowns = document.querySelectorAll(".certification-tabs li button");

    // Loop through each element with the "certification-tabs" class
    arrowdropdowns.forEach(function (arrowdropdown, index) {
        // Toggle the visibility of corresponding content on click
        arrowdropdown.addEventListener('click', function () {
            const contents = document.querySelectorAll(".course-highlight > div");

            // Remove the 'view_data' class from all content elements
            contents.forEach(function (content) {
                content.classList.remove('view_data');
            });

            // Add the 'view_data' class to the clicked content element
            const content = contents[index];
            content.classList.add('view_data');
        });
    });
</script>
<script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/module_cta-section-animated.min.js') }}"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/gsap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.2/dist/ScrollTrigger.min.js"></script>
 -->
<script>
    gsap.registerPlugin(ScrollTrigger);

    // First slider (left to right)
    gsap.from(".slider-1", {
        x: () => -(document.querySelector(".slider-1").scrollWidth - window.innerWidth),
        ease: "none",
        scrollTrigger: {
            trigger: ".row-1",
            start: "top bottom",
            end: "bottom top",
            scrub: true,
        }
    });

    // Second slider (right to left)
    gsap.to(".slider-2", {
        x: () => -(document.querySelector(".slider-2").scrollWidth - window.innerWidth),
        ease: "none",
        scrollTrigger: {
            trigger: ".row-2",
            start: "top bottom",
            end: "bottom top",
            scrub: true,
        }
    });

    /*$(document).ready(function () {
      $('#default-styled-tab button').on('click', function () {
        // Remove 'active' class from all buttons
        $('#default-styled-tab button').removeClass('active');
  
        // Add 'active' class to the clicked button
        $(this).addClass('active');
      });
    });*/
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

<script>
    tns({
        container: '.left-slider',
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        speed: 1000,
        controls: true,
        controlsContainer: "#custom-control2",
        nav: false,
        autoplayButtonOutput: false,
        slideBy: 'page'
    });

    // Right slider
    tns({
        container: '.right-slider',
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        speed: 1000,
        controls: true,
        controlsContainer: "#custom-control3",
        nav: false,
        autoplayButtonOutput: false,
        slideBy: 'page'
    });
</script>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        // Handle submenu toggle (arrow icon)
        const toggles = document.querySelectorAll(".submenu-toggle");

        toggles.forEach(toggle => {
            toggle.addEventListener("click", function (e) {
                e.preventDefault();

                const dropdownId = this.getAttribute("data-dropdown-toggle");
                const currentDropdown = document.getElementById(dropdownId);

                const isVisible = currentDropdown && !currentDropdown.classList.contains("hidden");

                // Close all submenus
                document.querySelectorAll(".right-overly-box").forEach(dropdown => {
                    dropdown.classList.add("hidden");
                });

                // Show current submenu only if it was hidden
                if (!isVisible) {
                    currentDropdown.classList.remove("hidden");
                }
            });
        });

        // Handle tab trigger (main menu text)
        const triggers = document.querySelectorAll(".tab-trigger");

        triggers.forEach(trigger => {
            trigger.addEventListener("click", function (e) {
                // Avoid triggering on arrow clicks
                if (e.target.closest(".submenu-toggle")) return;

                e.preventDefault();

                const tabId = this.dataset.tabTarget;
                const tabButton = document.querySelector(`[data-tabs-target="#${tabId}"]`);

                if (tabButton) {
                    tabButton.click();

                    const tabWrap = document.querySelector("#tabs");
                    if (tabWrap) {
                        tabWrap.scrollIntoView({ behavior: "smooth", block: "start" });
                    }
                }

                // Close all submenus when switching tabs
                document.querySelectorAll(".right-overly-box").forEach(dropdown => {
                    dropdown.classList.add("hidden");
                });
            });
        });
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabList = document.getElementById('default-styled-tab');
        const tabButtons = tabList.querySelectorAll('button[data-tabs-target]');
        const dropdown = document.getElementById('mobile-tabview');
        const tabPanels = document.querySelectorAll('[role="tabpanel"]');

        function initTabs() {
            // Clear existing options to avoid duplicates
            dropdown.innerHTML = '';

            const isMobile = window.innerWidth <= 768;
            dropdown.style.display = isMobile ? 'block' : 'none';
            tabList.style.display = isMobile ? 'none' : 'flex';

            if (isMobile) {
                tabButtons.forEach((btn, index) => {
                    const label = btn.textContent.trim();
                    const target = btn.getAttribute('data-tabs-target');

                    if (label && target) {
                        const option = document.createElement('option');
                        option.textContent = label;
                        option.value = target;
                        if (btn.getAttribute('aria-selected') === 'true') {
                            option.selected = true;
                        }
                        dropdown.appendChild(option);
                    }
                });
            }
        }

        // Handle dropdown change on mobile
        dropdown.addEventListener('change', function () {
            const selected = this.value;

            // Update panels
            tabPanels.forEach(panel => {
                panel.classList.add('hidden');
            });
            const showPanel = document.querySelector(selected);
            if (showPanel) showPanel.classList.remove('hidden');

            // Update button active state (optional for sync)
            tabButtons.forEach(btn => {
                const isMatch = btn.getAttribute('data-tabs-target') === selected;
                btn.setAttribute('aria-selected', isMatch);
            });
        });

        // Desktop tab button click
        tabButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const target = btn.getAttribute('data-tabs-target');

                tabButtons.forEach(b => b.setAttribute('aria-selected', 'false'));
                this.setAttribute('aria-selected', 'true');

                tabPanels.forEach(panel => panel.classList.add('hidden'));
                document.querySelector(target).classList.remove('hidden');

                // Sync dropdown (if visible)
                if (window.innerWidth <= 768) {
                    dropdown.value = target;
                }
            });
        });

        // Initial run
        initTabs();

        // Optional: re-check on resize
        window.addEventListener('resize', () => {
            initTabs();
        });
    });
</script>

<script>
    const selectElement = document.getElementById("mobile-tabview");
    const outputDiv = document.getElementById("option-value");

    selectElement.addEventListener("change", () => {
        const selectedText = selectElement.options[selectElement.selectedIndex].text;
        outputDiv.textContent = `${selectedText}`;
    });
</script>
@endpush