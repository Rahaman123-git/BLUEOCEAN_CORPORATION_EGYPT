@extends('layouts.frontend.app')
@section('title', ' About Us - Blue Ocean Corporation')
@section('meta-description', 'Blue Ocean Corporation: Delivering innovative solutions with expertise & excellence. Learn about our story, mission & values.')
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/about-us.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
  <section class="topBanner">
   <div class="w-full">
 <video class="w-full shadow-lg" width="440px" loop="true" autoplay="true">
        <source src="{{ asset('assets/frontend/images/about-us/aboutBanner2.mp4') }}" type="video/mp4" />
        <source src="" type="video/ogv" />
        <source src="" type="video/webm" />
        Your browser does not support the video tag.
      </video>
    </div>
    <div class="bannerOverlay about-overlay">
      <div class="container">
        <h1><img src="{{ asset('assets/frontend/images/about-us/about-us-typo.svg') }}" alt="28 years global impact Your Transformation" /></h1>
      </div>
    </div>
  </section>

  <section class="meetImpacts relative">
    <div class="diveder-angle">
      <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="first-part">
      <div class="container-free">
        <div class="left-content">
          <h2>
            Where Innovation
            <strong>Meets Impact</strong>
          </h2>
          <p>
            Blue Ocean Corporation, founded in 1998 and headquartered in London, stands as a global conglomerate driving sustainable growth and transformation across diverse industries. With a strong presence in the Middle East, Africa, South Asia, and Europe, the organization leads in Business Transformation, Training, and Conferences delivering innovative, client-centric solutions that create measurable global impact.
          </p>
        </div>
        <div class="right-content video-about">
          <video class="w-full h-full" controls>
            <source src="{{ asset('assets/frontend/images/about-video.mp4') }}" type="video/mp4" />
            <source src="{{ asset('assets/frontend/images/about-video.ogg') }}" type="video/ogg" />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
    <div class="second-part">
      <div class="container">
        <div class="about-mobile-video">
          <video class="w-full h-full" controls >
            <source src="{{ asset('assets/frontend/images/about-video.mp4') }}" type="video/mp4" />
            <source src="{{ asset('assets/frontend/images/about-video.ogg') }}" type="video/ogg" />
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
      <div class="container">
        <h3>Our Expertise</h3>
        <div class="pillerList">
          <div class="listItem">
            <h4>Transforming <strong>Businesses</strong></h4>
            <div class="infoContent">
              <p class="">Driving operational excellence and business growth through expert guidance.</p>
            </div>
            <span class="moduleName">Consulting</span>
          </div>
          <div class="listItem">
            <h4>Empowering <strong>Professionals</strong></h4>
            <div class="infoContent">
              <p class="">Equipping professionals with globally recognized qualifications.</p>
            </div>
            <span class="moduleName">Training</span>
          </div>
          <div class="listItem">
            <h4>Connecting <strong>Visionaries</strong></h4>
            <div class="infoContent">
              <p class="">Bridging the gap between thought leaders and businesses to shape the future.</p>
            </div>
            <span class="moduleName">Conferences</span>
          </div>
        </div>
        <div class="bottom-para">
          <p>With a commitment to innovation, quality, and impact, we have transformed thousands of careers and businesses worldwide.
          <strong>At Blue Ocean Corporation, we don’t just create <br>opportunities - We shape futures.</strong></p>
          <a href="{{ route('general.home') }}" class="btn primary-btn">
            Experience Our Corporate Vision
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="ourVision">
    <div class="first-part">
      <div class="visionSlider">
        <div class="visionHeading-Wrapper">
          <div class="visionHeading">
            <div class="smallLogo">
              <img src="{{ asset('assets/frontend/images/about-us/blueOcean-logoWhite.png') }}" alt="" />
              <h2>Our Mission</h2>
              <h3 class="font-extralight">Our Vision</h3>
            </div>
          </div>
          <div>
            <img src="{{ asset('assets/frontend/images/about-us/ourVision-img2.png') }}" alt="" class="visionImg w-full max-w-full" />
          </div>
          <div class="about-slide-text">
            <ul class="list-disc">
              <li>Empowering organizations to overcome challenges and achieve lasting success through expert consulting solutions.</li>
              <li>Future-proofing professionals with industry knowledge needed to lead the world through impactful training.</li>
              <li>Providing opportunities for meaningful connections through our flagship events that shape a thriving future.</li>
            </ul>
          </div>
        </div>
        <div class="visionHeading-Wrapper">
          <div class="visionHeading">
            <div class="smallLogo">
              <img src="{{ asset('assets/frontend/images/about-us/blueOcean-logoWhite.png') }}" alt="" />
              <h2>Our Vision</h2>
              <h3 class="font-extralight">Our Mission</h3>
            </div>
          </div>
          <div>
            <img src="{{ asset('assets/frontend/images/about-us/ourVision-img1.jpg') }}" alt="" class="visionImg w-full max-w-full" />
          </div>
          <div class="about-slide-text">
            <p>To be the world's most trusted partner in professional growth and organizational transformation, delivering immersive learning experiences, cutting-edge consulting, and future-defining conferences. We envision a borderless ecosystem where technology powers personalized learning, data-driven insights fuel strategic excellence, and every interaction creates lasting value for our clients, learners, and communities. </p>
        
        
        <p style="margin-top:20px; Font-weight:700; font-size:24px; color:#00a0e3">At Blue Ocean, we will not just prepare you for the future, we will co-create it with you.<p>

         
         </div>
        </div>
      </div>
    </div>
  </section>

  <section class="coreValue mt-20 relative">
    <div class="corner-triangle"></div>
    <div class="container">
      <h2>Our Core Values</h2>
    </div>
    <div class="coreValue-container">
      <img src="{{ asset('assets/frontend/images/about-us/coreValueBG.png') }}" alt="" class="w-full max-w-full" />
      <div class="coreValueBG">
        <div class="container">
         
        </div>
      </div>
      <div class="bg-transparent-blue new-clip-corner">
        <div class="container">
          <div class="value-list w-full px-4 sm:px-6 md:px-8">
            <div class="listItem">
              <h2>Service</h2>
              <p>Ensuring customer happiness through excellence</p>
            </div>
            <div class="listItem">
              <h2>Passion</h2>
              <p>Inspiring growth with enthusiasm</p>
            </div>
            <div class="listItem">
              <h2>Integrity</h2>
              <p>Building trust with honesty</p>
            </div>
            <div class="listItem">
              <h2>Respect</h2>
              <p>Celebrating the true sense of equality</p>
            </div>
            <div class="listItem">
              <h2>Innovation</h2>
              <p>Creating future-oriented solutions</p>
            </div>
             <div class="listItem">
              <h2>Teamwork</h2>
              <p>Staying strong and united to embrace success</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ourJourney">
    <div class="container">
      <div class="logoicons"><img src="{{ asset('assets/frontend/images/about-us/ourJourney.png') }}" alt="" /></div>
      <h2>Waves of Our Journey, Year After Year</h2>
      <p>Charting our course through milestones, innovation and excellence</p>
    </div>
  </section>

  <section class="milesStones">
    <div class="container">
      <div class="tabs-content">
        <div class="tabsWrapper w-full">
          <div class="tabContent" id="year1998" role="tabpanel" aria-labelledby="year1998-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content width-forty">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                   1998
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>From humble beginnings to global recognition, Blue Ocean Corporation has continually evolved through innovation, excellence, and strategic vision. Our milestones reflect a legacy of growth, impactful partnerships, and industry leadership across borders.</p>
                </div>
              </div>
              <div class="right-content width-sixty">
                <div class="flex">
                  <ul>
                    <li>Foundation</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
         <!--
<div class="tabContent" id="year1999" role="tabpanel" aria-labelledby="year1999-tab">
    <div class="flex w-full flex-wrap">
        <div class="left-content">
            <div class="milesStonesHeading">
                <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                </div>
                <h2 class="milesStones-date">
                    1999
                </h2>
            </div>
            <div class="milesStones-content">
                <h3>Facts and Milestones</h3>
                <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
            </div>
        </div>
        <div class="right-content">
            <ul>
                <li>Blue Ocean hosts the first ever IPSC (International Procurement and Supply Chain Conference) in Doha, Qatar’2014</li>
                <li>Blue Ocean hosts the 2nd edition of the IPSC in Dubai’s Atlantis The Palm</li>
            </ul>
        </div>
    </div>
</div>
-->

          <div class="tabContent" id="year2016" role="tabpanel" aria-labelledby="year2016-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                  2014
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content">
                <ul>
                  <li>Hosted the first International Procurement and Supply Chain Conference (IPSC) in Doha, Qatar.</li>
                  <li>Organized the second edition of the IPSC at Dubai's Atlantis The Palm.</li>
                  <li>Conducted a Spring Convocation Ceremony in March, where over 400 students received international certifications.</li>
                </ul>
               <a href="{{ route('conferences.ipsc.qatar.2014') }}" class="ab-con">Explore IPSC Qatar’ 2014 Conference <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"></a>
              </div>
            </div>
          </div>
          <div class="tabContent" id="year2016a" role="tabpanel" aria-labelledby="year2016a-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                    2016
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content">
                <ul>
                   <li>Hosted the third edition of the IPSC at Dubai's Atlantis The Palm.</li>
                  <li>Organized the fourth edition of the IPSC at Abu Dhabi's Emirates Palace Hotel.</li>
                  <li> Conducted the fifth edition of the IPSC at Al Faisaliah Hotel in Riyadh, KSA.</li>
                </ul>
                <a href="{{ route('conferences.ipsc.abudhabi.2016') }}" class="ab-con">Explore IPSC Abu Dhabi 2016 Conference <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"></a>
              </div>
            </div>
          </div>
          <div class="tabContent" id="year2017" role="tabpanel" aria-labelledby="year2017-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                    2017
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content small-text">
                <div class="flex flex-wrap lg:flex-nowrap">
                  <ul>
                    <li>Won the 'Best Training Initiative in Logistics and Supply Chain' award at the Golden Globe Tigers Awards in Malaysia.</li>
                    <li>Received the 'Training Provider of the Year' award at the Middle East Training & Development Leadership Awards.</li>
                    <li>Recognized for 'Outstanding Contribution to Global Learning' at the Middle East Training and Development Leadership Awards.</li>
                    <li> Acknowledged for 'Appreciation for Outstanding Training Services' by Al Rawabi.</li>
                  </ul>
                  <ul>
                    <li>Ranked among the '10 Best Six Sigma Training Institutes' by Higher Education Review.</li>
                    <li>Received a 'Special Award of Appreciation' from Thumbay Hospital – Healthcare – Education – Research.</li>
                    <li>Dr. Sathya Menon, Group CEO, was honored with the 'Global Training and Development Leadership Award' at the World HRD Congress.</li>
                    <li>Established strategic partnerships with the Chartered Institute of Procurement and Supply (CIPS), UK, and the Institute of Leadership Management (ILM), UK, to enhance training offerings.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tabContent" id="year2018" role="tabpanel" aria-labelledby="year2018-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                    2018
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content">
                <div class="flex">
                  <ul>
                    <li>Strengthened partnerships with CIPS and ILM to elevate the standards of procurement professionals and groom future industry leaders.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tabContent" id="year2019" role="tabpanel" aria-labelledby="year2019-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                    2019
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content">
                <div class="flex">
                  <ul>
                    <li>Won the 'Top 50 Organizations in Education' title by the Global Forum for Education and Learning.</li>
                    <li>Group CEO Dr. Sathya Menon received the 'Top 100 Leaders in Education' award from the Global Forum for Education and Learning</li>
                    <li>Awarded 'Excellence in Training and Development' by the Middle East Training and Development Leadership Award.</li>
                    <li>Dr. Sathya Menon was honored with the 'CEO of the Year Award' by the  Middle East Training and Development Leadership Award.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div> 
          <div class="tabContent" id="year2020" role="tabpanel" aria-labelledby="year2020-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                    2020
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content">
                <div class="flex">
                  <ul>
                    <li>Launched virtual learning solutions for all courses.</li>
                    <li>Opened a new branch in Abu Dhabi.</li>
                    <li>Recognized as Regional Top Performing Accredited Training Centre by IATA.</li>
                    <li>Became a finalist at the Gulf Customer Experience Awards.</li>
                    <li>Named a finalist for the Pride of Aviation Award at the Business Aviation Awards.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tabContent" id="year2021" role="tabpanel" aria-labelledby="year2021-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                    2021
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content small-text">
                <div class="flex flex-wrap lg:flex-nowrap">
                  <ul>  
                    <li>Became the UAE’s first training organization to win the Superbrands Award.</li>
                    <li> Certified as a Great Place to Work organization.</li>
                    <li>Ranked among the "Top Ten Best Places to Work in the Middle East" by Great Place To Work.</li>                  
                    <li>Introduced training programs in Arabic.</li>
                     <li>Launched the Arabic version of its website.</li>
                  </ul>
                  <ul> 
                    <li>Hosted the 6th International Procurement & Supply Chain Conference.</li>
                    <li>Won the "Most Trusted Corporate Training Consultancy" title by MEA Markets UAE  Business Awards.</li>
                    <li>Became a finalist at the Gulf Customer Experience Awards.</li>
                    <li>Became a finalist for "Corporate Social  Responsibility of the Year" at the Logistics Middle East Awards.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tabContent" id="year2022" role="tabpanel" aria-labelledby="year2022-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                    2022
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content">
                <div class="flex flex-wrap lg:flex-nowrap">
                  <ul>   
                    <li>Expanded with new branches in Riyadh, Pune, Delhi, and Kochi.</li>
                    <li>Hosted the International Human Resource Conference.</li>
                    <li>Ranked among the Top 3 Procurement, Logistics & SCM Training Providers globally.</li>                  
                    <li>Won the Superbrands UAE award for the second consecutive year.</li>
                  </ul>
                  <ul>
                    <li>Certified as one of the Best Workplaces in Asia by Great Place To Work.</li>
                    <li>Received the "Logistics Consulting of the Year – Highly Commended Status" by Logistics Middle East Awards.</li>
                    <li>Received the "Logistics Consulting of the Year – Highly Commended Status" by Logistics Middle East Awards.</li>
                    <li>Was the Runner-Up at the Customer Happiness Summit & Awards.</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="tabContent" id="year2023" role="tabpanel" aria-labelledby="year2023-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                    2023
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content">
                <div class="flex">
                  <ul>  
                    <li>Celebrated its 25th year of excellence.</li>
                    <li>Won the Dubai Quality Appreciation Award.</li>    
                    <li>Certified as one of the Best Workplaces in the Middle East by Great Place To Work.</li>   
                    <li>Received the Gold award at the Employee Happiness Summit and Awards.</li>           
                    <li>Opened a new branch in Dubai.</li>
                    <li>Hosted the 4th edition of BOWLD EmpowHer. </li>
                  </ul>
                </div>
                <a href="{{ route('conferences.bowld.event.2023') }}" class="ab-con">Explore BOWLD EmpowHer Virtual Conference <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"></a>
              </div>
            </div>
          </div>
          <div class="tabContent" id="year2024" role="tabpanel" aria-labelledby="year2024-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                    2024
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content">
                <div class="flex flex-wrap lg:flex-nowrap">
                  <ul>
                    <li>Aligned with Skill India Mission and HADAF</li>
                    <li>Opened new offices in Pune and Hyderabad</li>
                    <li>Won Best Workplace – UAE 2024 Award</li>
                    <li>Hosted the 5th edition of Blue Ocean Women’s Leadership Development (BOWLD)</li>
                    <li>Debuted the London edition of the International Procurement and Supply Chain Conference (IPSC) at Fieldfisher London</li>
                    <li>Hosted the first-ever CXO Roundtable featuring C-suite delegates</li>
                    <li>Debuted the India edition of IPSC at Mumbai, Taj Lands End</li>
                    <li>Sourav Ganguly joined Blue Ocean as a Board Member</li>
                  </ul>
                  <ul>
                    <li>Won the ASCM Awards of Excellence in Learning and Development category in Texas</li>
                    <li>Established an official partnership with the Ministry of Health, Kingdom of Saudi Arabia</li>
                    <li>Hosted IPSC Riyadh at Kingdom Tower, Riyadh</li>
                    <li>Launched the Emirati Management Development Program and the Logistics and Supply Chain Management Skill Development Program for university students</li>
                   
                  </ul>
                </div>
                <!-- <a href="{{ route('conferences.bowld.event.2023') }}" class="ab-con">Explore BOWLD EmpowHer Virtual Conference <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"></a> -->
              </div>
            </div>
          </div>
          <div class="tabContent" id="year2025" role="tabpanel" aria-labelledby="year2025-tab">
            <div class="flex w-full flex-wrap flex-wrap">
              <div class="left-content">
                <div class="milesStonesHeading">
                  <div class="logo-white">
                    <img src="{{ asset('assets/frontend/images/about-us/logo-white.png') }}" alt="" />
                  </div>
                  <h2 class="milesStones-date">
                    2025
                  </h2>
                </div>
                <div class="milesStones-content">
                  <h3>Facts and Milestones</h3>
                  <p>Blue Ocean Corporation, founded in 1998, has achieved significant milestones over the years. Here's a comprehensive timeline of our notable accomplishments:</p>
                </div>
              </div>
              <div class="right-content">
                <div class="flex">
                  <ul>
                    <li>Introduced Employee Family Reward Initiative</li>
                    <li>Won #2 Best Workplace in UAE </li>
                    <li>Won Excellence in Supply Chain Talent Development Award at CargoNXT 2025.</li>
                    <li>Opened New Office in UK</li>
                    <li>Hosted IPSC Dubai at W Hotel</li>
                    <li>Established an official collaboration with AICTE</li>
                  </ul>
                </div>
                <!-- <a href="{{ route('conferences.bowld.event.2023') }}" class="ab-con">Explore BOWLD EmpowHer Virtual Conference <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}"></a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tabsList tabs">
        <ul class="tab-links" id="default-styled-tab" data-tabs-toggle="#certificate-styled-tab-content" role="tablist">
          <li><button id="year1998-tab" data-tabs-target="#year1998" type="button" role="tab" aria-controls="year1998" aria-selected="true">1998</button></li>
         <!-- <li><button id="year1999-tab" data-tabs-target="#year1999" type="button" role="tab" aria-controls="year1999" aria-selected="false">1999</button></li> -->

          <li><button id="year2016-tab" data-tabs-target="#year2016" type="button" role="tab" aria-controls="year2016" aria-selected="false">2014</button></li>
          <li><button id="year2016a-tab" data-tabs-target="#year2016a" type="button" role="tab" aria-controls="year2016a" aria-selected="false">2016</button></li>
          <li><button id="year2017-tab" data-tabs-target="#year2017" type="button" role="tab" aria-controls="year2017" aria-selected="false">2017</button></li>
          <li><button id="year2018-tab" data-tabs-target="#year2018" type="button" role="tab" aria-controls="year2018" aria-selected="false">2018</button></li>
          <li><button id="year2019-tab" data-tabs-target="#year2019" type="button" role="tab" aria-controls="year2019" aria-selected="false">2019</button></li>
          <li><button id="year2020-tab" data-tabs-target="#year2020" type="button" role="tab" aria-controls="year2020" aria-selected="false">2020</button></li>
          <li><button id="year2021-tab" data-tabs-target="#year2021" type="button" role="tab" aria-controls="year2021" aria-selected="false">2021</button></li>
          <li><button id="year2022-tab" data-tabs-target="#year2022" type="button" role="tab" aria-controls="year2022" aria-selected="false">2022</button></li>
          <li><button id="year2023-tab" data-tabs-target="#year2023" type="button" role="tab" aria-controls="year2023" aria-selected="false">2023</button></li>
           <li><button id="year2024-tab" data-tabs-target="#year2024" type="button" role="tab" aria-controls="year2024" aria-selected="false">2024</button></li>
          <li><button id="year2025-tab" data-tabs-target="#year2025" type="button" role="tab" aria-controls="year2025" aria-selected="false">2025</button></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="ourObjectives">
    <div class="container">
      <h2>Our Objectives</h2>
      <div class="objectivesContent">
        <div class="objectiveIcon">
          <img src="{{ asset('assets/frontend/images/about-us/objectivesIcon.png') }}" alt="" />
        </div>
        <div class="objectivesList">
          <ul>
            <li>To provide best-in-class professional training tailored to industry needs.</li>
            <li>To bridge the skills gap and enhance workforce capabilities.</li>
            <li>To assist businesses in achieving strategic growth through expert consulting.</li>
            <li>To organize world-class conferences that drive meaningful industry conversations.</li>
            <li>To expand our global footprint while maintaining excellence in service delivery.</li>
          </ul>
        </div>
      </div>
      <div class="objectivesContent no-deco">
        <div class="objectiveIcon">
        </div>
        <div class="objectivesList" style="display: none;"> 
    <p>Join us in shaping the future of education and workforce excellence - 
    Explore our training programs, consulting services and global conferences today!</p>
</div>
      </div>
    </div>
  </section>

  <section class="awardsRecognition">
    <div class="container">
      <div class="heading-text">
        <h2>Awards & Recognition</h2>
        <p>
          Blue Ocean Corporation has earned numerous prestigious awards, reflecting a strong legacy of excellence, innovation, and leadership across diverse industries. Our dedication to quality and transformative solutions continues to set industry standards and inspire progress worldwide.

        </p>
      </div>
      <div class="awardsSlider-warapper aboutpage-slider-cert">
        <div class="slider-container cert-slide-content about-page-slider">
          <div class="awardsSlider">
            @if(isset($awards) && !empty($awards))
              @foreach($awards as $award)
                @php 
                  $awardImages = json_decode($award->image, true);
                @endphp
                @foreach($awardImages as $awardImage)
                  <div class="slider-item" data-caption="{{ $award->title }}">
                    <div class="panic-slider"><img src="{{ asset('storage/awards/'.$awardImage) }}" alt="" /></div>
                  </div>
                @endforeach
              @endforeach
            @endif
          </div> 
          <ul class="controls certificate-arrow home-certificate-slide flex" id="custom-control" aria-label="Carousel Navigation" tabindex="0">
            <li class="prev mr-2" data-controls="prev" aria-controls="tns2" tabindex="-1">
              <span><img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-left.svg" alt=""></span>
            </li>
            <li class="next" data-controls="next" aria-controls="tns2" tabindex="-1">
              <span><img src="https://bocdemosite.salite.site/assets/frontend/images/icons/arrow-right.svg" alt=""></span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="content-bottom">
      <div class="logoWrapper">
        <img src="{{ asset('assets/frontend/images/about-us/logo-small.png') }}" alt="" />
      </div>
      <div class="blue-strip">
        <p id="award-caption"></p>
      </div>
    </div>
  </section>

  <section class="successJourney">
    <div class="contact_bottom py-6">
      <div class="container max-w-7xl mx-auto px-4">
        <div class="row flex flex-col md:flex-row items-center justify-between">
          <div class="email_ftr flex flex-col md:flex-row items-center gap-4 h-full">
            <div class=".header_text">
              <h2 class="ft-top-hdr">
                <span class="block">Connect with us today and </span>           
                Explore solutions tailored to enhance your business  
              </h2>       
            </div>
            <div class="mail_add">
              <a href="{{ route('general.contact.us') }}"
                class="flex items-center bg-blue-600 text-white px-4 py-2 hover:bg-blue-700 transition">
                <span class="mr-3"><i class="fa-solid fa-envelope"></i></span> Let’s Connect
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/aboutus.js') }}"></script>
@endpush