@extends('layouts.frontend.app')
@section('title', ' Corporate Programs - Blue Ocean Academy')
@section('meta-description', 'Our corporate programs are designed to enhance employee skills, improve performance, and drive business growth. Partner with us to unlock your team\'s potential.')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/boc-corporate-home.css') }}">
@endpush

@section('content')
  <!-- Banner Section Starts Here -->
  <section class="hero-banner-section">
    <div class="hero-banner-wrap">
      <picture class="relative">
        <source media="(min-width:770px)" srcset="{{ asset('assets/frontend/images/boc-corporate-home/home4.png') }}" />
        <img src="{{ asset('assets/frontend/images/boc-corporate-home/home-mobile1.png') }}" alt="banner image" class="w-full banner-img" />
        <div class="absolute overlap-banner"></div>
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
          <div class="hero-banner-text hero-corporate">
            <h1 class="hero-banner-heading font-light">
              <span class="block">Elevate Potential</span>
              Transform Futures
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
    <div class="right-triangle boc-right-about hidden lg:block">
      <img src="{{ asset('assets/frontend/images/boc-corporate-home/about-backg.png') }}" class="about-bg" alt="triangle image" />
      
    </div>
    <div class="experience-band">
      <div class="container">
        <div class="experience-band-main">
          <div class="experience-band-text boc-corporate-text">
            <h2 class="experience-band-heading">
             Building Future Ready Teams
              <strong class="block">Through Strategic Training</strong>
            </h2>
          </div>
        </div>
      </div>
    </div>
    <div class="about-main">
      <div class="container">
        <div class="about-main-text">
          <div class="basis-1/2">
            <p class="body-text mb-8 2xl:mb-10">
              Our corporate training programs drive excellence through transformation. Designed to empower professionals, our training equips them with industry-relevant skills, knowledge, and mindset for success. We focus on real-world
              challenges, offering tailored solutions in areas like data analytics, leadership, and regulatory compliance.
            </p>
            <p class="body-text mb-4 2xl:mb-6">
              What sets us apart is our commitment to practical learning and measurable outcomes. By collaborating with industry experts, we ensure cutting-edge content that fosters continuous improvement and innovation.
            </p>
            <p class="body-text font-semibold">Our goal is to help organizations build high-performing teams ready to excel in today’s dynamic landscape.</p>
          </div>
          <div class="basis-1/2 hidden lg:block boc-corporate-floattext">
            <h4 class="float-text">
              Empowering
              <strong>Professionals</strong>
            </h4>
          </div>
        </div>
        <div class="offerings-wrap leader-text">
          <h3 class="sub-heading text-primary my-6 2xl:my-8 font-light" style="font-size:34px;">
           Transform Your Workforce
            <strong class="text-secondaryy block font-bold">  with Future-Ready Skills</strong>
          </h3>
          <ul class="skill-list">
            <li class="skill-list-box relative">
              <div class="text-white">
                <h6>In-House Training Courses</h6>
                <p>Customized programs crafted to meet specific organizational challenges and learning objectives. Delivered on-site or virtually to ensure maximum relevance and impact.</p>
              </div>
              
            </li>
            <li class="skill-list-box relative">
              <div class="text-white">
                <h6>Public Training Courses</h6>
                <p>Instructor-led sessions that combine practical knowledge, hands-on exercises, and peer interaction. Ideal for professionals aiming to enhance their skills and advance in their careers.</p>
              </div>
              
            </li>
            <li class="skill-list-box relative">
              <div class="text-white">
                <h6>Certified Training Courses</h6>
                <p>Industry-recognized programs that validate expertise, boost professional credibility, and support structured career progression.</p>
              </div>
              
            </li>
            <li class="skill-list-box relative">
              <div class="text-white">
                <h6>Online Training Courses</h6>
                <p>Interactive digital programs offering flexible, self-paced learning. Designed to bring world-class training to professionals with demanding schedules.</p>
              </div>
              
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- About Section Ends Here -->

  <!-- Propuler Section Start Here -->
  <section class="propule-block relative">
    <div class="right-angle-boc absolute">
      <img src="{{ asset('assets/frontend/images/boc-corporate-home/right-angle-boc.png') }}" class="w-full max-w-full" alt="" />
    </div>
    <div class="propuler-top relative">
      <picture class="relative">
        <source media="(min-width:992px)" srcset="{{ asset('assets/frontend/images/boc-corporate-home/Program.png') }}" class="w-full" />
        <img src="{{ asset('assets/frontend/images/boc-corporate-home/Program-mobile.png') }}" alt="banner image" class="w-full banner-img" />
        <div class="absolute overlap-banner"></div>
      </picture>

      <div class="absolute w-full h-full top-0">
        <div class="container h-full">
          <div class="propuler-right-over prfix text-white h-full">
            <h3 class="font-normal">In-Demand  Programs</h3>
            <p class="font-medium">Explore high-demand programs designed to meet changing industry needs and equip professionals to excel in a competitive environment.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="flex lg:items-start flex-col-reverse lg:flex-row mt-10">
        <div class="w-full lg:w-1/2">
          <div class="left-por-text">
            <img src="{{ asset('assets/frontend/images/boc-corporate-home/final-BOC-logo.png') }}" alt="" class="final-logo" />
            <img src="{{ asset('assets/frontend/images/boc-corporate-home/trabprotation-logo.png') }}" alt="" class="transforming-img" />
            <h3 class="font-bold">Globally Trusted, Locally Impactful.</h3>
          </div>
        </div>
        <div class="w-full lg:w-1/2">
          <div class="propuler-right text-white">
            <h3  class="pop-title">In-Demand  Programs</h3>
            <ul class="propuler-list">
              <li><a href="{{ route('training.corporate.program', ['category' => 'Sales and Marketing']) }}" class="active">Sales and Marketing</a></li>
              <li><a href="{{ route('training.corporate.program', ['category' => 'Supervisors and Managers']) }}">Supervisors and Managers</a></li>
              <li><a href="{{ route('training.corporate.program', ['category' => 'Train the Trainer']) }}">Train the Trainer</a></li>
              <li><a href="{{ route('training.corporate.program', ['category' => 'Quality and Productivity']) }}">Quality and Productivity</a></li>
              <li><a href="{{ route('training.corporate.program', ['category' => 'Accounting and Finance']) }}">Accounting and Finance</a></li>
              <li><a href="{{ route('training.corporate.program', ['category' => 'Administration and Secretarial']) }}">Administration and Secretarial</a></li>
              <li><a href="{{ route('training.corporate.program', ['category' => 'Human Resources']) }}">Human Resources</a></li>
              <li><a href="{{ route('training.corporate.program', ['category' => 'Procurement and Supply Chain Management']) }}">Procurement and Supply Chain Management</a></li>
              <li><a href="{{ route('training.corporate.program', ['category' => 'Leadership and Management']) }}">Leadership and Management</a></li>
              <li><a href="{{ route('training.corporate.program', ['category' => 'Customer Service']) }}">Customer Service</a></li>
            </ul>
            <div class="mt-6">
              <a href="{{ route('training.corporate.program') }}" class="btn primary-btn">
                View All Courses
                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="traning-score">
      <div class="flex w-full flex-wrap">
        <div class="w-full lg:w-1/2"></div>
        <div class="w-full lg:w-1/2 relative">
          <div class="scoring-box">
            <div class="counting">
              <div class="counting-texts text-white">
                <h2>50K+</h2>
                <h5>Professionals Trained</h5>
                <p>Scale of impact.</p>
              </div>
              <div class="counting-texts text-white">
                <h2>95%</h2>
                <h5>Satisfaction Rate</h5>
                <p>Proven success.</p>
              </div>
              <div class="counting-texts text-white">
                <h2>300+</h2>
                <h5>Industry Partnerships</h5>
                <p>Partnering with global leaders for cutting-edge corporate training.</p>
              </div>
            </div>
          </div>
          <div class="arrow-bottom-right"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Propuler Section END Here -->
  
  <!-- Voice Success Section Starts Here -->
  @include('frontend.training.include.voice-of-success')
  <!-- Voice Success Section Ends Here -->

  <!-- Gallery Start  -->
  <section class="gellery-block">
    <div class="container">
      <div class="flex items-center gap-2">
        <div class="subheader">
          <h5>Corporate Training Gallery</h5>
        </div>
        <div class="search-box">
          <form class="max-w-sm mx-auto">
            <select
              id="countries"
              class="bg-gray-50 border border-gray-600 text-gray-600 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
              <option>Latest 3 Months</option>
              <option>Latest 2 Months</option>
              <option>Latest Month</option>
            </select>
          </form>
        </div>
      </div>
      <div class="gallery-image">
        <ul class="grid grid-cols-1 mt-6 gap-9 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
          <li class="relative">
            <img src="{{ asset('assets/frontend/images/gallery/cor1.png') }}" alt="" class="w-full" />
            <div class="gallery-title">Feedback Skills </div>
          </li>
          <li class="relative">
            <img src="{{ asset('assets/frontend/images/gallery/cor2.png') }}" alt="" class="w-full" />
            <div class="gallery-title">Code of Ethics & Business Conduct </div>
          </li>
          <li class="relative">
            <img src="{{ asset('assets/frontend/images/gallery/cor3.jpg') }}" alt="" class="w-full" />
            <div class="gallery-title">MS Excel </div>
          </li>
          <li class="relative">
            <img src="{{ asset('assets/frontend/images/gallery/cor4.jpg') }}" alt="" class="w-full" />
            <div class="gallery-title">Stress Management</div>
          </li>
          <li class="relative">
            <img src="{{ asset('assets/frontend/images/gallery/cor5.jpg') }}" alt="" class="w-full" />
            <div class="gallery-title">Effective Sales & Exceptional Customer Care</div>
          </li>
          <li class="relative">
            <img src="{{ asset('assets/frontend/images/gallery/cor6.jpg') }}" alt="" class="w-full" />
            <div class="gallery-title">Train the Trainer </div>
          </li>
          <li class="relative">
            <img src="{{ asset('assets/frontend/images/gallery/cor7.jpg') }}" alt="" class="w-full" />
            <div class="gallery-title">Managing Fatigue</div>
          </li>
          <li class="relative">
            <img src="{{ asset('assets/frontend/images/gallery/cor8.jpg') }}" alt="" class="w-full" />
            <div class="gallery-title">Advanced Business Writing Skills</div>
          </li>
          <li class="relative">
            <img src="{{ asset('assets/frontend/images/gallery/cor9.jpg') }}" alt="" class="w-full" />
            <div class="gallery-title">Project Management Fundamentals</div>
          </li>
        </ul>
      </div>
      <div class="text-end">
        <a href="#" class="btn load-more">
          Load More <span><img src="{{ asset('assets/frontend/images/icons/arrow-right-outline.svg') }}" alt="" /></span>
        </a>
      </div>
      <div class="lightbox">
        <span class="close">&times;</span>
        <span class="prev">&#10094;</span>
        <img id="lightbox-img" src="" alt="" />
        <span class="next">&#10095;</span>
      </div>
    </div>
  </section>
  <!-- Gallery End -->
 

  <!--<section class="sponsor p-0 overflow-hidden sponser-padding home-sponser">
    <div class="marquee-container">
      <div class="marquee-content">
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/salam-adahar.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/b4u-logo.jpg') }}" alt="" /></span>
        <span class="marquee-item"> <img src="{{ asset('assets/frontend/images/platform-logo.jpg') }}" alt="" /></span>
      </div>
    </div>
  </section> -->
    <div class="cretificate_text">
        <div class="container">
			<h2 class="font-bold">
              <span class="block font-light" style="font-size: clamp(20px, 5vw, 34px); color:#0C1896"> Our Clientele
</span>
  				<span class="block" style="font-size: clamp(20px, 5vw, 34px); font-weight:700; color:#0C1896">Transforming Businesses, Together</span>
				</h2>
              <p class="mt-4">
We take pride in partnering with visionary businesses that dare to dream big. From startups to industry giants, our collaborations have driven transformative success, turning challenges into opportunities and goals into achievements. Together, we’re shaping the future of business.
              </p>
                    </div>
            </div>
<section class="sponser-details-p mt-20gap">
  <div class="container">
    <h3 class=" text-4xl text-blue-text-hdr font-semibold mb-8"></h3>

        <div class="flex flex-wrap gap-2 lg:flex-row">
         
       <div class="sponser-box w-50 lg:w-1/4">
        <img src="{{ asset('assets/frontend/images/boc-corporate-home/1.png') }}" alt="">
        <p></p>
       </div>
       <div class="sponser-box w-50 lg:w-1/4">
        <img src="{{ asset('assets/frontend/images/boc-corporate-home/2.png') }}" alt="">
       
       </div>
       <div class="sponser-box w-50 lg:w-1/4">
        <img src="{{ asset('assets/frontend/images/boc-corporate-home/3.png') }}" alt="">
       
       </div>
       <div class="sponser-box w-50 lg:w-1/4">
        <img src="{{ asset('assets/frontend/images/boc-corporate-home/4.png') }}" alt="">
        
       </div>
    
    
    </div>

  </div>
</section>
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>

@endpush