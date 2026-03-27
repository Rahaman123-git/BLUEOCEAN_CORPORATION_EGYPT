@extends('layouts.frontend.app')
@section('title', 'Blue Ocean Consulting')
@section('meta-description', 'Blue Ocean Consulting: Expert guidance for business growth & innovation. Unlock your potential with tailored strategies & solutions.')
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/consulting.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style-last.css') }}">
@endpush

@section('content')
  <!-- Banner Section Starts Here -->
  <!-- Banner Section Starts Here -->
 <section class="hero-banner-section">
    <div class="hero-banner-wrap">
      <picture>
        <source media="(max-width:770px)" srcset="{{ asset('assets/frontend/images/Top-banner-image.png') }}" />
        <img src="{{ asset('assets/frontend/images/hero-banner.svg') }}" alt="banner image" class="w-full banner-img" />
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
              <span class="block font-light">Turning Insights into </span>
            Impactful Change
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Empowering Section Starts Here -->
  <section class="empowering" style="background-image: url({{ asset('assets/frontend/images/latest-added/Counslting-triangle.png') }});">
    <div class="empowering-inner" style="background-image: url({{ asset('assets/frontend/images/consulting/devider-angle.webp') }});">
      <div class="container">
        <div class="empowering-text">
          <div class="basis-1/2">
            <h2 class="hdn-two"><small>Igniting Opportunities,</small> Driving Transformational Change</h2>
            <div class="experience-fig">
              <img src="{{ asset('assets/frontend/images/experience-icon.svg') }}" class="w-full" />
            </div>
            <p>
             Our consulting expertise combines innovation, strategy, and leadership to uncover hidden potential. We offer insightful perspectives that guide organizations toward sustainable growth and a dynamic, multifaceted future.
            </p>
            <ul class="list-perc-one">
              <li>
                <strong class="font-light">35%</strong>
                <span>
                  Faster<br />
                  Workflows
                </span>
                <small>
                  by reducing<br />
                  bottlenecks
                </small>
              </li>
              <li>
                <strong class="font-light">25%</strong>
                <span>
                  Higher resource<br />
                  utilization
                </span>
                <small>
                  Improving<br />
                  output
                </small>
              </li>
              <li>
                <strong class="font-light">30%</strong>
                <span>
                  Higher<br />
                  Turnaround
                </span>
                <small>
                  Faster Time to<br />
                  Market projects
                </small>
              </li>
            </ul>
            <h4>Trusted by 1000+ Clients, Backed by Global Expertise</h4>
            <p>
              With over 200 consultants worldwide and 300+ successful case studies, we bring deep industry knowledge and proven strategies to every engagement. Our client-first approach and global footprint ensure tailored solutions that deliver measurable impact across sectors.
            </p>
            <h6 class="unlock"><span</span>Drive smarter decisions, improve efficiency, and scale with confidence.</h6>
			
   <div class="fig-bot-transform">
  <figure class="hidden md:block">
    <img src="{{ asset('assets/frontend/images/latest-added/bg-bot-tranform.webp') }}" class="w-full" alt="" />
  </figure>
</div>
<div class="traingle-banner mt-5 md:mt-0 hide-on-desktop">
  <img src="{{ asset('assets/frontend/images/consulting/counculting-image.png') }}" alt="" class="w-full" />
</div>
            <div class="btn-wrap mt-12">
              <!-- <a href="javascript:void(0)" class="btn primary-btn"                   data-modal-target="default-modal"
                >Ready to boost your business<img
                  src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"
              /></a> -->
              <a href="{{ route('consulting.register') }}" class="btn primary-btn">Transform Your Business Today<img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /> </a>
            </div>
          </div>
          <div class="basis-13"></div>
          <!-- <div class="basis-35 text-on-bg font-bold">
            <span class="font-normal">Transforming</span> <small>Businesses</small>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <!-- Empowering Section ends Here -->

  <!-- Business consult Section Starts Here -->
  <section class="business-consult">
    <!-- <figure>
      <img src="{{ asset('assets/frontend/images/consulting/business.webp') }}" alt="business" />
    </figure> -->
       <picture class="w-100">
  <source srcset="{{ asset('assets/frontend/images/shaping-business-image.png') }}" media="(max-width: 640px)" />
    <img src="{{ asset('assets/frontend/images/consulting/business.webp') }}" alt="business" />
</picture>
    <div class="business-consult-abs">
      <div class="container">
        <div class="consult-abs">
          <div class="basis-1/2">
            <h2 class="hdn-two"><small>Shaping Businesses</small>Through Strategic Evolution</h2>
            <h4>We enable organizations to align their strategic goals with</h4>
<ul class="emerging"> 
<li>Emerging opportunities</li>
<li>Fostering sustainable</li>
<li>Long-term growth and transformation</li>
</ul>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Business consult Section ends Here -->

  <!-- Approach Section Starts Here -->
  <section class="approach">
  
          <picture class="w-100">
  <source srcset="{{ asset('assets/frontend/images/A-Holistic-Approach.png') }}" media="(max-width: 640px)" />
    <img src="{{ asset('assets/frontend/images/consulting/Holistic-Approach.png') }}" alt="approach" class="approch-clip" />
</picture>
    <div class="business-consult-abs">
      <div class="container">
        <div class="flex">
          <div class="basis-1/2"></div>
          <div class="basis-1/2">
            <h4>A Holistic Approach to Organizational Transformation</h4>
            <p>
              We take a holistic approach, ensuring every aspect of your organization transforms in harmony for lasting success.
            </p>
          </div>
        </div>
        <div class="flex">
          <div class="basis-35"></div>
          <div class="basis-65 hide-approch">
            <ul class="list-perc" style="background-image: url({{ asset('assets/frontend/images/consulting/rect-blue-appr.webp') }});">
              <li>
                <strong>25%</strong>
                <span>Increase in revenue for a regional telecom services provider.</span>
              </li>
              <li>
                <strong>15%</strong>
                <span>Reduction in operating cost for a Leading Aviation Services Provider.</span>
              </li>
              <li>
                <strong>40%</strong>
                <span>increase in efficiency through Digital Transformation for a services leader.</span>

              </li>
              <li>
                <strong>30%</strong>
                <span>Higher Customer Retention for a Government Administration Entity.</span>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>
  <div class="container">
            <div class="for-mobile-approch">
            <div class="basis-65">
            <ul class="list-perc" style="background-image: url({{ asset('assets/frontend/images/consulting/rect-blue-appr.webp') }});">
              <li>
                <strong>25%</strong>
                <span>Increase in revenue for a regional telecom services provider.</span>
              </li>
              <li>
                <strong>15%</strong>
                <span>Reduction in operating cost for a Leading Aviation Services Provider.</span>
              </li>
              <li>
                <strong>40%</strong>
                <span>increase in efficiency through Digital Transformation for a services leader.</span>
              </li>
              <li>
                <strong>30%</strong>
                <span>Higher Customer Retention for a Government Administration Entity.</span>
              </li>
            </ul>
          </div>
        </div>
  </div>
  <!-- Approach Section Ends Here -->

  <!-- Meeting Section Starts Here -->
  <section class="meeting" style="background-image: url({{ asset('assets/frontend//images/consulting/meeting-background.png') }});">
    <div class="container">
      <div class="flex">
        <div class="basis-1/2 w-full lg:w-1/2">
        <div class="list-meeting">
            <ul class="list-success-rate">
            <li>
              <small>50+</small>
              <span>
                Professional<br />
                Certifications
              </span>
            </li>
            <li>
              <small>95%</small>
              <span>
                Client<br />
                Success Rate
              </span>
            </li>
            <li>
              <small>1000+</small>
              <span>
                Successful<br />
                Engagements
              </span>
            </li>
          </ul>
        </div>
          <strong class="challenges"> <small>Tranforming</small> Challenges <small>into</small> Opportunities </strong>
        </div>
        <div class="w-full lg:w-1/2">
          <div class="meeting-right height-none">
            <h2 class="hdn-two">
              <small>The Power of </small>
              Experience and Insight
            </h2>
                  <img src="{{ asset('assets/frontend/images/consulting/counsulting-power image.png') }}" alt="" width="100%" class="power-image-mobile"/>

                    <div class="list-meeting power-image-mobile">
            <ul class="list-success-rate">
            <li>
              <small>50+</small>
              <span>
                Professional<br />
                Certifications
              </span>
            </li>
            <li>
              <small>95%</small>
              <span>
                Client<br />
                Success Rate
              </span>
            </li>
            <li>
              <small>1000+</small>
              <span>
                Successful<br />
                Engagements
              </span>
            </li>
          </ul>
        </div> 
            <h4 class="hdn-four">
              Decades of Expertise in Global Business Transformation
            </h4>
            <p>
              With extensive experience across industries and regions, we bring unmatched expertise to every project, tackling unique challenges with transformative solutions.
            </p>
            <h4 class="hdn-four">Insights that Guide Every Decision</h4>
            <p>
              We blend data-driven analysis with qualitative insights, empowering your business with actionable, future-focused strategies grounded in market trends and organizational behaviour.
            </p>
            <div class="btn-wrap">
              <a href="{{ route('consulting.register') }}" class="btn primary-btn">Transform Your Business Today<img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /> </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="trust-sec relative">
    <div class="meeting-bg">
      <img src="{{ asset('assets/frontend/images/consulting/consulting-meeting.png') }}" alt="" width="100%" />
    </div>
    <div class="container h-full">
      <div class="trust-sec-inner">
        <div class="width-sixty">
          <h2 class="hdn-two">
            <small>Empowering Organisations Through:</small>
            The Power of Excellence
          </h2>

           <img src="{{ asset('assets/frontend/images/counsulting-Drive-Trust.png') }}" alt="" width="100%" class="enpowering-image" />
          <p class="fw-500">
            We help you leverage the value of certifications and global standards to deliver transformative impact for your business.
          </p>
          <span class="how-we">Here’s how we can help:</span>
          <ul class="list-flag">
            <li>
              <h3 class="fw-500">Enhance Credibility and Trust</h3>
              <p>
                We guide organizations in achieving globally recognized certifications to build trust with stakeholders and customers.
              </p>
            </li>
            <li>
              <h3 class="fw-500">Boost Market Competitiveness</h3>
              <p>
                Attract more clients, partners, and investors by showcasing your commitment to excellence.
              </p>
            </li>
          </ul>
        </div>
        <div class="bg-subs-top ml-4">
          <ul class="list-perc-third">
            <li>
              <strong>100%</strong>
              <p>Regulatory Alignment of targeted standards</p>
            </li>
            <li>
              <strong>25%</strong>
              <p>Operational improvement through standardized procedures</p>
            </li>
            <li class="no-brdr">
              <strong>90%</strong>
              <p>
                Improved client retention through improved security standards
              </p>
            </li>
          </ul>
        </div>
        <div class="hdn-drive">
          <h2>
            Drive <strong>Trust </strong><br />
            and <strong>Efficiency</strong> <br />
            with <strong>Proven</strong><br />
            <strong>Standards</strong>
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="trust-sec-second relative">
    <div class="left-man-image">
       <picture>
  <source srcset="{{ asset('assets/frontend/images/consulting/trust-sec-two-mobile.png') }}" media="(max-width: 640px)" />
  <img src="{{ asset('assets/frontend/images/consulting/trust-sec-two.webp') }}" alt="" class="w-full" />
</picture>


    </div>
    <div class="trust-sec-triangle">
      <div class="container">
        <div class="trust-inner-second">
          <div class="first-sec-trust"></div>
          <div class="bottom-grad-text">
            <div class="bg-subs-bot">
              <ul class="list-perc-third">
                <li>
                  <strong>30%</strong>
                  <p>Increase in new markets by fulfilling regulations</p>
                </li>

                <li>
                  <strong>80%</strong>
                  <p>Improvement in delivery timelines</p>
                </li>
              </ul>
            </div>
          </div>
          <div class="last-sec-trust">
            <ul class="list-flag">
              <li>
                <h3 class="fw-500">
                  Ensure Compliance and Risk Management
                </h3>
                <p>
                  Build a resilient organization prepared for future challenges.
                </p>
              </li>
              <li>
                <h3 class="fw-500">Foster Continuous Improvement</h3>
                <p>
                  We help embed a culture of continuous improvement by aligning your processes with global standards.
                </p>
              </li>
            </ul>
            <div class="btn-wrap mt-12">
              <a href="{{ route('consulting.register') }}" class="btn primary-btn">Transform your Business Today <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="driving-excellence">
    <div class="container">
      <h2 class="hdn-two"><small class="inl">Driving Excellence</small> in Strategy, Execution and Impact</h2>
    </div>
    <div class="driving-exc-top">
      <div class="driving-top-first" style="background-image: url({{ asset('assets/frontend/images/consulting/exc-one.webp') }});"></div>
      <div class="driving-top-second" style="background-image: url({{ asset('assets/frontend/images/consulting/exc-two.webp') }});"></div>
      <div class="driving-exc-abs">
        <div class="container">
          <div class="exc-abs-inner">
            <div class="exc-abs-first">
              <h4>Operationalising your Strategic Vision and Mission -</h4>
              <p>
                We work with you to translate your strategic vision and mission into pragmatic and measurable operation plans.
              </p>
            </div>
            <div class="exc-abs-second" style="background-image: url({{ asset('assets/frontend/images/consulting/middle-triangle.png') }});">
              <strong>60%</strong>
              <small>
                Reduction in<br />
                Lead Times
              </small>
              <img src="{{ asset('assets/frontend/images/consulting/arrow-down-wgt.webp') }}" />
            </div>
            <div class="exc-abs-third">
              <h4>Organizational Transformation</h4>
              <p>
                We work with your leadership and operations teams, to redesign your operations across the people, process, technology dimensions ensuring alignment with your strategy, culture, and objectives.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="driving-exc-bot">
      <div class="driving-bot-first" style="background-image: url({{ asset('assets/frontend/images/consulting/exc-three.webp') }});"></div>
      <div class="driving-bot-second" style="background-image: url({{ asset('assets/frontend/images/consulting/exc-four.webp') }});"></div>
      <div class="driving-exc-abs">
        <div class="container">
          <div class="exc-abs-inner">
            <div class="exc-abs-first">
              <h4>Innovative Technology Integration</h4>
              <p>
                We identify, implement, and optimize cutting-edge technologies to drive operational efficiency, productivity, and innovation across your business
              </p>
            </div>
            <div class="exc-abs-second bot-trg" style="background-image: url({{ asset('assets/frontend/images/consulting/middle-triangle-bot.png') }});">
              <img src="{{ asset('assets/frontend/images/consulting/arrow-up-wgt.webp') }}" />
              <strong>25%</strong>
              <small>
                Improved <br />
                Inventory turnover
              </small>
            </div>
            <div class="exc-abs-third">
              <h4>Cultural Alignment and Leadership Development</h4>
              <p>
                We build leadership capacity and foster a culture that embraces change, ensuring sustainable success as your transformation unfolds
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="transformation-journey">
    <figure>
      <img src="{{ asset('assets/frontend/images/consulting/banner-star.jpg') }}" class="w-full" />
    </figure>
    <div class="abs-trg blue-conslt">
      <img src="{{ asset('assets/frontend/images/consulting/traingle-innovation.webp') }}" alt="banner" class="w-full" />
    </div>
  </section>

  <section class="abs-on-star">
    <div class="container">
      <div class="flex">
        <div class="basis-35">
          <strong class="strategy">
            Strategy.<br />
            Innovation.<br />
            Sustainability.
          </strong>
        </div>
                  
        <div class="basis-65 mfix">
                  
          <h4>The Transformation Journey</h4>
          <h5>Navigating Complexity with Confidence</h5>
          <p>
            We know transformation can be daunting. With us as your partner,<br />
            you’ll gain the confidence to navigate challenges and evolve<br />
            into an agile, future-ready organization.
          </p>
          <h4>Core Drivers of Our Approach...</h4>

          <ul class="list-approach">
            <li>Precision Strategy</li>
            <li>Innovation at the Core</li>
            <li>Sustainable Change</li>
            <li>Leadership for the Future</li>
          </ul>
          <ul class="list-perc-four">
            <li>
              <strong>40%</strong>
              <span>
                Faster implementation<br />
                of new initiatives
              </span>
            </li>
            <li>
              <strong>50%</strong>
              <span>
                Faster implementation<br />
                of sustainability measures
              </span>
            </li>
            <li>
              <strong>500+</strong>
              <span>
                Global leaders<br />
                trained
              </span>
            </li>
          </ul>
          <p class="dark-clr">
            Empower your business with strategy, innovation and execution
            <span>Let’s transform together!</span>
          </p>
          <div class="btn-wrap">
            <a href="{{ route('consulting.register') }}" class="btn primary-btn">
             Transform Your Business Today
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="unlock-sec" style="background-image: url({{ asset('assets/frontend/images/consulting/business-news.webp') }});">
    <div class="container">
      <div class="flex">
        <h4 class="hdn-two">From Insight to Impact</h4>
      </div>

      <div class="flex">
        <div class="basis-35">
          <p>
            We guide organizations in uncovering hidden strengths and converting them into strategic advantages. Our approach accelerates growth, builds capabilities, and drives meaningful, lasting change.

          </p>
              <img src="{{ asset('assets/frontend/images/consulting/counsulting-newspaper.png') }}" class="w-100 news-lady" />
          <p class="dark-clr">
            
            <span>Insights from our impactful partnerships.</span>
          </p>
         
          <div class="btn-wrap">
            <a href="{{ route('consulting.strategic.impact') }}" class="btn primary-btn">
             Explore Our Case Studies
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div>
        </div>
      </div>
    
      <div class="flex relative">
        <div class="w-full">
          <img src="{{ asset('assets/frontend/images/consulting/polygon-brown.webp') }}" class="abs-poly" />
          <div class="price-list">
            <ul class="list-perc-five">
              <li>
                <strong>15%</strong>
                <span>Increase in operating income</span>
              </li>
              <!-- <li>
                <strong>10K+</strong>
                <span>Professionals empowered with global certifications</span>
              </li> -->
              <li>
                <strong>500+</strong>
                <span>Organizations improved efficiency levels</span>
              </li>
              <li>
                <strong>3X</strong>
                <span>Times increase of ROI with improved compliances</span>
              </li>
              <li>
                <strong>80%</strong>
                <span>Reduction in errors</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-clientele" style="background-image: url({{ asset('assets/frontend/images/consulting/clentele.png') }});">
    <div class="container">
      <div class="collaboration">
      <h4 class="hdn-two"><small> Driving Change</small> Through Strategic Collaboration</h4>
         <img src="{{ asset('assets/frontend/images/consulting/counsulting-footer-image.png') }}" class="consulting-footer-image" />
      <div class="flex ">
        <div class="w-full">
          <p>
            We collaborate with forward-thinking organizations startups, enterprises, and government entities to deliver measurable transformation. Together, we navigate challenges, unlock potential, and drive strategic outcomes that reshape industries.
          </p>
          <h4 class="footer-subhder">
           <span>Insightful Strategies.</span> Tangible Results
          </h4>
          <div class="btn-wrap mt-4">
            <a href="#" class="btn primary-btn" bis_skin_checked="1">
             Transform Your Business
 
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}">
            </a>
          </div>
        </div>
      </div>
      </div>
    </div>
  </section>

  <!-- Modal toggle -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)]">
    <div class="relative w-full max-w-5xl">
      <div class="relative bg-white rounded-none shadow-lg dark:bg-gray-700">
        <div class="form-sec-modal">
          
          <aside style="background-image: url({{ asset('assets/frontend/images/consulting/form-bg.webp') }});">
            <div class="form-over">
              <a href="#"><img src="{{ asset('assets/frontend/images/consulting/boc-logo.webp') }}" alt="" /></a>
            </div>
            <a href="https://blueoceancorporation.com/" class="form-over-bot text-white hover:text-blue">
              www.blueoceancorporation.com
            </a>
          </aside>

          <div class="form-area">
           
           <div class="form-area">
       <iframe aria-label='Consulting' frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.com/blueoceanmanagementtrainingc10/form/Consulting/formperma/jIwxRTb2pXd1Ee3AkkMvHa0gifhAFo82tEPrHN9Ns-s'></iframe>
          </div>
          </div>
          <div class="flex items-start justify-between p-4">
           <button type="button" class="text-gray-600 bg-transparent hover:bg-gray-600 hover:text-gray-900 rounded-lg text-sm w-10 h-10 ml-auto p-2 inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"></path>
  </svg>
  <span class="sr-only">Close modal</span>
</button>
        </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
@endpush