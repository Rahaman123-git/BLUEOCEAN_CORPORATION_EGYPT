@extends('layouts.frontend.app')
@section('title', ' Supply Chain Management Fundamentals | Blue Ocean Consulting')
@section('meta-description', 'Blue Ocean Consulting: Expert guidance for business growth & innovation. Unlock your potential with tailored strategies & solutions.')

@push('styles')
  <link href="{{ asset('assets/frontend/css/css/master.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/css/css/fonts.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/frontend/css/css/animation.css') }}" rel="stylesheet">
 	<link href="{{ asset('assets/frontend/css/css/lecture.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/css/scmf-gen.css') }}" rel="stylesheet">
    <style>
  /* Course Outline arrows (only for .lecture-detail) */
  .lecture-detail .section-header {
    display: flex;            /* ensures the arrow sits at the far right */
    align-items: center;
    gap: 12px;
    cursor: pointer;
  }

  /* arrow on the right */
  .lecture-detail .section-header::after {
    content: '▼';
    margin-left: auto;
    display: inline-block;
    transition: transform 0.25s ease;
    font-size: 14px;
  }

  /* flip arrow when open (your JS already toggles aria-expanded) */
  .lecture-detail .section-header[aria-expanded="true"]::after {
    transform: rotate(180deg);
  }
  .lecture-detail .section-content ul {
  list-style: disc;               /* show bullets */
  list-style-position: outside;   /* standard outside bullets */
  margin: 0 0 0 1.25rem;          /* left indent */
  padding: 0;
  display: block;                 /* undo flex/grid if applied */
}

.lecture-detail .section-content ul li {
  display: list-item;             /* ensure markers render */
  list-style: inherit;            /* inherit 'disc' from UL */
  margin: 0.25rem 0;              /* spacing (optional) */
}
.lecture-detail .section-content ul ul {
  list-style: circle;             /* nested level style */
  margin-left: 1.25rem;
}
</style>
@endpush

@section('content')
@php
    use Illuminate\Support\Facades\Crypt;

    $courseId   = Crypt::encryptString('5834669000297835056'); // your real id
    $courseName = Crypt::encryptString('Supply Chain Management Fundamentals');
    $courseFee  = Crypt::encryptString('250');
  $s  =Crypt::encryptString('Website-Generic');
@endphp
  <div class="breadcrumb py-3">
    <div class="container">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse flex-wrap">
          <li class="inline-flex items-center">
            <a href="{{ route('training.home') }}" class="inline-flex items-center text-sm font-medium text-[#9A9A9A]">
              <img src="{{ asset('assets/frontend/images/icons/home.svg') }}" alt="home icon" class="w-5 h-5 mr-2" />
              Training
            </a>
          </li>
         
          <li aria-current="page">
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Supply Chain Management Fundamentals</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  

<!-- Slider Section -->
<section class="slider">
  <!--<div class="slider-content scmf-gen">
  <h1>World No.1 </h1>
    <p>Empowering you with<br> 
World-Class Education</p>
   
  </div>
  <img src="{{ asset('assets/frontend/css/images/scmf-gen/corporate-banner.webp') }}" alt="Slider">-->
   <div class="clear"></div>
   <div class="w-full">
    <video class="w-full shadow-lg" width="440px" loop autoplay controls autoplay muted>
      <source src="{{ asset('assets/frontend/images/Supply-Chain.mp4') }}" type="video/mp4" />
      <source src="" type="video/ogv" />
      <source src="" type="video/webm" />
      Your browser does not support the video tag.
    </video>
  </div>
   <div class="clear"></div>
</section>

<!-- Sticky Logo Section -->
<section class="" style="position:relative;">
<div class="slideend"></div>
  <div class="wraping">
<div class="wrap-inside">
    <div class="sticklogocontect">
   
      Supply Chain Management <br>
Fundamentals (SCMF)
    </div>
  
    

    <div class="clear"></div>
</div>
</div>
</section>

<!-- Main Triangle Section -->
<section class="section-1">
	
	<div class="contain">
    <div class="scmf-mob">
    The world runs on supply chains, and understanding them is no longer optional. Whether you are a student, a professional, or a leader in any field, supply chain knowledge is a foundation that strengthens every career.<br><br>
        As part of our global initiative <b>Mission Supply Chain</b>, defined by the motto Supply Chain Education For All, Blue Ocean, being the <b>world No. 1 in Supply Chain Training and Consulting</b>, is proud to introduce the <b>Supply Chain Management Fundamentals (SCMF) Program</b>, offered on a <b>100% scholarship</b> to learners worldwide.
 <div class="clear"></div>
    
    </div>
    <div class="right-image-top"><img src="{{ asset('assets/frontend/css/images/scmf-gen/empower-mob.webp') }}" alt="Banner"></div>
    
     <div class="scmf-mob">
    
        <div class="clear"></div>
        <div class="certification-section">
    <div class="certification-text">
      As you complete the course, you’ll earn a globally recognized certification from <br>
      Blue Ocean Corporation, UK.
    </div>
    <div class="certification-logo">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/uk-logo.png') }}" alt="Blue Ocean Corporation UK Logo">
    </div>
  </div>
 <div class="clear"></div>

  <div class="heads">Learn from the World No. 1<br>
<span class="headblue"> and take your supply chain skills global!</span>
<div class="clear"></div>

<div class="clear"></div>
<a href="{{ route('training.register.scmf', [
        'course_id'   => $courseId,
        'course_name' => $courseName,
                'course_fee'  => $courseFee,
        'is_free'     => 1, 's' =>$s 
    ]) }}"
   class="register-button">
  Register Now <span class="arrow" >→</span>
</a>
<div class="clear"></div>
</div>
    
    </div>

	<div class="left-traingle scmf-desktop">
		<div class="top">The world runs on supply chains, and understanding them is no longer optional. Whether you are a student, a professional, or a leader in any field, supply chain knowledge is a foundation that strengthens every career.<br><br>
        As part of our global initiative <b>Mission Supply Chain</b>, defined by the motto Supply Chain Education For All, Blue Ocean, the <b>World No. 1 in Supply Chain Training and Consulting</b>, is proud to introduce the <b>Supply Chain Management Fundamentals (SCMF) Program,</b>  offered on a <b>100% Scholarship</b> to learners worldwide.
        <div class="clear"></div>
        
        <div class="clear"></div>
        <div class="certification-section">
    <div class="certification-text">
      As you complete the course, you’ll earn a globally recognized certification from <br>
      Blue Ocean Corporation, UK.
    </div>
    <div class="certification-logo">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/uk-logo.png') }}" alt="Blue Ocean Corporation UK Logo">
    </div>
  </div>
        </div>
        <div class="clear"></div>
        
        
        
        <div class="heads">Learn from the World No. 1<br>
<span class="headblue">and take your supply chain skills global!</span>
<div class="clear"></div>
<div class="clear"></div>
<a href="{{ route('training.register.scmf', [
        'course_id'   => $courseId,
        'course_name' => $courseName,
                'course_fee'  => $courseFee,
        'is_free'     => 1, 's' =>$s 
    ]) }}"
   class="register-button">
  Register Now <span class="arrow" >→</span>
</a>

</div>
		
	    
		
	</div>
	
	<div class="right-image-scmf" style="z-index:-1;"></div>
		
	<div class="clear"></div>
	</div>
	</section>
  	<div class="clear"></div>  
<section class="anywhere-sec">
 <div class="leftslid-sec">
  <div class="container">
  <h2>Anytime. Anywhere. Your Place.</h2>
  <p>This program is built to be simple, flexible, and learner friendly. It is delivered online through PRISM, our world-class Learning Management System, so you can study anytime, anywhere, at your own pace.</p>
    <p>Lessons are short, clear, and filled with real-world examples — no heavy theories, no complicated jargon. </p>
    <p>You’ll also get access to extra resources like webinars, whitepapers, and industry updates for a full year. At the end, a short assessment will test your understanding and help you earn your certificate</p>
    
    <div class="slider3">
    <img src="{{ asset('assets/frontend/css/images/scmf-gen/m-slide1.webp') }}" alt="Slide 1" class="active">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/m-slide2.webp') }}" alt="Slide 2">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/m-slide3.webp') }}" alt="Slide 3">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/m-slide4.webp') }}" alt="Slide 4">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/m-slide-5.webp') }}" alt="Slide 5">
 </div>   
    <div class="fillup">Fill out the form, and you are already <br>enrolled. No further procedures,<br> No Hassle!
    <div class="mob-logo"><img src="{{ asset('assets/frontend/css/images/scmf-gen/prism-logo.png') }}" alt=""></div>
    
    </div>
  </div>
  </div>
 
    <div class="slider2">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/slid01.png') }}" alt="Slide 1" class="active">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/slide02.png') }}" alt="Slide 2">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/slide03.png') }}" alt="Slide 3">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/slide04.png') }}" alt="Slide 3">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/slid05.png') }}" alt="Slide 3">
    </div>
  </section>
 <div class="clear"></div>

<div class="office-sec">
<div class="office-bg">
<div class="office-bg-image">
<img class="special-one" src="{{ asset('assets/frontend/css/images/scmf-gen/blue-ocean-logo.png') }}" alt="Slider">
</div>
</div>

<div class="logo-28">
  <img class="special-two" src="{{ asset('assets/frontend/css/images/scmf-gen/28-yrs.png') }}" alt="Slider">
</div>
<div class="prism-sec">
<div class="prism-container">
    <!-- Left Section -->
    <div class="prism-logo">
      <img src="{{ asset('assets/frontend/css/images/scmf-gen/Prism-lms.svg') }}" alt="PRISM LMS" height="60">
     
    </div>

    <!-- Right Section -->
    <div class="ro-right">
      <div class="app-download">App Download Available On</div>
      <div class="store-buttons">
        <a href="#">
          <img src="{{ asset('assets/frontend/css/images/scmf-gen/app-store-ios.png') }}" alt="Download on the App Store">
        </a>
        <a href="#">
          <img src="{{ asset('assets/frontend/css/images/scmf-gen/google-play.png') }}" alt="Get it on Google Play">
        </a>
      </div>
    </div>
  </div>
 <div class="clear"></div>
<div class="short-text">
    PRISM is a state-of-the-art Learning Management System designed to enhance your learning experience. It offers flexibility, interactivity, and convenience, making it your personal learning hub.
    </div>
</div>


</div>

 <div class="clear"></div>
<div class="join-section">
<div class="join-section-icon">
 <img src="{{ asset('assets/frontend/css/images/scmf-gen/icon-left.png') }}" alt="Slider">
</div>

<div class="container">
<div class="join-head">Who Should Join?</div>

<div class="join">
  <div class="join-content">
    <div class="join-text">
      <p>This Supply Chain Certification course<br>
      is for everyone who wants to<br>
      understand the backbone of<br>
      business and trade.</p>
    </div>
  </div>
  <div class="join-bottom">
    <p>No prior knowledge. No experience needed. Just curiosity and the drive to learn.</p>
  </div>
</div>

 <div class="clear"></div>
 <br>
 <a href="{{ route('training.register.scmf', [
        'course_id'   => $courseId,
        'course_name' => $courseName,
                'course_fee'  => $courseFee,
        'is_free'     => 1, 's' =>$s 
    ]) }}"
   class="register-button">
  Register Now <span class="arrow" >→</span>
</a>
</div>

 <div class="clear"></div>
</div>


<div class="clear"></div>

<div class="sc-grid-sec">
<div class="container">
<div class="join-head">Your Supply Chain Power Skills</div>

<section class="sc-topics">
  <h2 class="visually-hidden">Supply Chain Topics</h2>

  <div class="sc-grid">
    <article class="sc-card">
      <img class="sc-icon" src="{{ asset('assets/frontend/css/images/scmf-gen/foundation.png') }}" alt="">
      <h3>Foundational<br>Supply Chain<br>Knowledge</h3>
    </article>

    <article class="sc-card">
      <img class="sc-icon" src="{{ asset('assets/frontend/css/images/scmf-gen/source.png') }}" alt="">
      <h3>Procurement &amp;<br>Sourcing<br>Basics</h3>
    </article>

    <article class="sc-card">
      <img class="sc-icon" src="{{ asset('assets/frontend/css/images/scmf-gen/operation.png') }}" alt="">
      <h3>Operations &amp;<br>Inventory<br>Management</h3>
    </article>

    <article class="sc-card">
      <img class="sc-icon" src="{{ asset('assets/frontend/css/images/scmf-gen/career.png') }}" alt="">
      <h3>Career<br>Readiness in<br>Supply Chain</h3>
    </article>

    <article class="sc-card">
      <img class="sc-icon" src="{{ asset('assets/frontend/css/images/scmf-gen/global.png') }}" alt="">
      <h3>Global<br>Supply Chain<br>Awareness</h3>
    </article>
  </div>
</section>


<div class="powerskill-det">When you learn the supply chain, you learn the language of the global economy.</div>

<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
    
<div class="clear"></div>

<section class="network-sec2">
 <div class="network-design"><img  src="{{ asset('assets/frontend/css/images/landing/blue-icon.webp')}}" alt=""></div>
 <div class="network-head2">Course Outline</div>
 <div class="wraping">
 <div class="blank-3"></div>
<!-- <div class="course-section">
 <div>
This is a <span>6-hour, self-paced program</span> designed to give you a comprehensive introduction to supply chain management. The course is divided into <span>9 easy-to-follow modules</span>, <br>allowing you to learn at your own pace and convenience.</div>
</div>-->
<div class="clear"></div>
<div class="lecture-detail">


  <!-- Section 01 -->
  <div class="lecture-section">
    <div class="section-header">
      <div class="section-number">01</div>
      <div class="section-title">The Supply Chain World</div>
      <div class="section-time">
        
        <span class="time-text"></span>
      </div>
    </div>
    <div class="section-content">
      <ul>
        <li>Importance & References <span class="item-time"></span></li>
        <li>SC Ecosystem - Trade References <span class="item-time"></span></li>
        <li>SC Background & Definition <span class="item-time"></span></li>
      </ul>
    </div>
  </div>
  <!-- Section 02 -->
  <div class="lecture-section">
    <div class="section-header">
      <div class="section-number">02</div>
      <div class="section-title">Supply Chain & You</div>
      <div class="section-time">
        
        <span class="time-text"></span>
      </div>
    </div>
    <div class="section-content">
      <ul>
        <li>SC in Your surrounding- Fashion to Mobile Phone <span class="item-time"></span></li>
        <li>The Story behind the Products- Farm to Fashion <span class="item-time"></span></li>
        <li>The Journey behind the Products- I-Phone <span class="item-time"></span></li>
        <li>Professions <span class="item-time"></span></li>
      </ul>
    </div>
  </div>
  <!-- Section 03 -->
<div class="lecture-section">
  <div class="section-header">
    <div class="section-number">03</div>
    <div class="section-title">Logistics & Distribution</div>
    <div class="section-time">
      
      <span class="time-text"></span>
    </div>
  </div>
  <div class="section-content">
    <ul>
      <li>Logistics Network <span class="item-time"></span></li>
      <li>Transportation Management <span class="item-time"></span></li>
      <li>Warehousing and Distribution <span class="item-time"></span></li>
      <li>Inventory Management <span class="item-time"></span></li>
      <li>Supply Chain Operations <span class="item-time"></span></li>
    </ul>
  </div>
</div>

<!-- Section 04 -->
<div class="lecture-section">
  <div class="section-header">
    <div class="section-number">04</div>
    <div class="section-title">Supply Chain & Business</div>
    <div class="section-time">
      
      <span class="time-text"></span>
    </div>
  </div>
  <div class="section-content">
    <ul>
      <li>Supply Chain in Retail <span class="item-time"></span></li>
      <li>Supply Chain in Manufacturing <span class="item-time"></span></li>
      <li>Supply Chain in Projects <span class="item-time"></span></li>
      <li>SC in other sectors <span class="item-time"></span></li>
    </ul>
  </div>
</div>

<!-- Section 05 -->
<div class="lecture-section">
  <div class="section-header">
    <div class="section-number">05</div>
    <div class="section-title">Supply Chain Planning</div>
    <div class="section-time">
      
      <span class="time-text"></span>
    </div>
  </div>
  <div class="section-content">
    <ul>
      <li>Demand Planning and Forecasting <span class="item-time"></span></li>
      <li>Procurement and Sourcing <span class="item-time"></span></li>
      <li>Order Management & Customer Service <span class="item-time"></span></li>
      <li>Shipping & Transport Planning <span class="item-time"></span></li>
      <li>Identifying and Assessing Supply Chain Risks <span class="item-time"></span></li>
    </ul>
  </div>
</div>


<!-- Section 06 -->
<div class="lecture-section">
  <div class="section-header">
    <div class="section-number">06</div>
    <div class="section-title">Technology in Supply Chain</div>
    <div class="section-time">
      
      <span class="time-text"></span>
    </div>
  </div>
  <div class="section-content">
    <ul>
      <li>ERP + WMS + SCM(DP&F) Systems <span class="item-time"></span></li>
      <li>AR-VR in Supply Chain <span class="item-time"></span></li>
      <li>Supply Chain Analytics and Business Intelligence (BI) <span class="item-time"></span></li>
      <li>Internet of Things in Supply Chain <span class="item-time"></span></li>
      <li>Robotics & AI in Supply Chain <span class="item-time"></span></li>
    </ul>
  </div>
</div>

<!-- Section 07 -->
<div class="lecture-section">
  <div class="section-header">
    <div class="section-number">07</div>
    <div class="section-title">Global Supply Chain & Trade</div>
    <div class="section-time">
      
      <span class="time-text"></span>
    </div>
  </div>
  <div class="section-content">
    <ul>
      <li>International Trade <span class="item-time"></span></li>
      <li>Import & Exports <span class="item-time"></span></li>
      <li>Terms & Documents <span class="item-time"></span></li>
      <li>Payments <span class="item-time"></span></li>
      <li>Sustainable Supply Chain <span class="item-time"></span></li>
    </ul>
  </div>
</div>

<!-- Section 08 -->
<div class="lecture-section">
  <div class="section-header">
    <div class="section-number">08</div>
    <div class="section-title">Supply Chain & Entrepreneurship</div>
    <div class="section-time">
      
      <span class="time-text"></span>
    </div>
  </div>
  <div class="section-content">
    <ul>
      <li>B2B Supply Chain Models <span class="item-time"></span></li>
      <li>B2C Supply Chain Models <span class="item-time"></span></li>
      <li>Supply Chain Fintech Models <span class="item-time"></span></li>
      <li>Supply Chain Franchisee – Courier, Last Mile, Aggregators <span class="item-time"></span></li>
      <li>Unicorns & Successful StartUps in India <span class="item-time"></span></li>
    </ul>
  </div>
</div>

<!-- Section 09 -->
<div class="lecture-section">
  <div class="section-header">
    <div class="section-number">09</div>
    <div class="section-title">Supply Chain & Skill Development</div>
    <div class="section-time">
      
      <span class="time-text"></span>
    </div>
  </div>
  <div class="section-content">
    <ul>
      <li>Professions 5 <span class="item-time"></span></li>
      <li>Materials 5 <span class="item-time"></span></li>
      <li>Buyer 5 <span class="item-time"></span></li>
      <li>Quality 5 <span class="item-time"></span></li>
      <li>Packaging 5 <span class="item-time"></span></li>
      <li>Logistics Operations 5 <span class="item-time"></span></li>
      <li>Finance & Audit 5 <span class="item-time"></span></li>
      <li>IT & Computer Science <span class="item-time"></span></li>
    </ul>
  </div>
</div>

 <div class="course-summary">
  <div class="summary-left">
   
       
  </div>
  <div class="summary-right">
    <span class="duration-bold"></span>
    <span class="duration-muted"></span>
  </div>
</div>
 
  






</div>
<div class="clear"></div>

<div class="clear"></div>
</div>
 </section>
 
 <div class="clear"></div>
 <section class="association">
 
 <div class="wraping">	
 
 <!--<div class="association-head">This certification is issued by
 <span>International Certification from Blue Ocean Corporation, UK</span>
 </div>-->
 
 <div class="affiliation-box">
  <div class="affiliation-logo">
    <img src="{{ asset('assets/frontend/css/images/scmf-gen/uk-logo.png')}}" alt="Blue Ocean Corporation Logo" style="width:225px !important;">
  </div>
  <div class="affiliation-text" >
    <p >
      International Certification from <b>Blue Ocean Corporation UK</b>, empowers professionals with globally recognized qualifications, enhancing career growth and industry credibility.
    </p>
  </div>
  
  <div class="clear"></div>
</div>

 
 <div class="clear"></div>
 </div>
 
 </section>
 
 
 
 
 
<div class="clear"></div>

<div class="vot-sec" style="display:block;">
		<div class="vot-sec-head">
			
		<div class="wraping">	
		<h2>Voices of Trust</h2>
        
   <div class="slide-div-main">
   
  
    
<div class="text-slide-sec">
<div class="slide-div">
  <div class="slide-content">
    A truly enriching experience! I successfully completed the CIPP CIPM certification from Blue Ocean Academy certified from IPSCMI-USA A truly enriching experience! I successfully completed. whose presence was particularly motivating A truly enriching experience! I successfully completed the CIPP CIPM certification from Blue Ocean Academy certified from IPSCMI-USA..
  </div>
  <div class="slide-footer">
    <b>Rajesh Kumar</b><br><span>Supply Chain Manager, Global Logistics Inc.</span>
  </div>
</div>
  <div class="slide-div-b-color slide-div">
  <div class="slide-content">   
    The ASCM certification program was a game-changer... Sourav Ganguly, whose presence was particularly motivating A truly enriching experience! I successfully completed the CIPP CIPM certification from Blue Ocean Academy certified from IPSCMI-USA whose presence was particularly motivating A truly enriching experience! I successfully completed the CIPP CIPM certification from Blue Ocean Academy certified from IPSCMI-USA...</div>
    <div class="slide-footer">
    <b>Sarah Thompson</b><br><span>Operations Director, TechSolutions Ltd.</span></div>
  </div>
  <div class="slide-div">
   <div class="slide-content">
    Slide 3 content here A truly enriching experience! I successfully completed the CIPP CIPM certification from Blue Ocean Academy certified from IPSCMI-USA. Supply Chain Manage, Company.Tech Ltd. whose presence was particularly motivating A truly enriching experience! I successfully completed the CIPP CIPM certification from Blue Ocean Academy certified from IPSCMI-USA..</div>
   <div class="slide-footer"><b>Pranab das</b><br><span>Lexus Director, Neulo Ltd.</span> </div>
  </div>
  <div class="slide-div-b-color slide-div">
   <div class="slide-content">
    Slide 4 content here A truly enriching experience! I successfully completed the CIPP CIPM certification from Blue Ocean Academy certified from IPSCMI-USA. whose presence was particularly motivating A truly enriching experience! I successfully completed the CIPP CIPM certification from Blue Ocean Academy certified from IPSCMI-USA..</div>
    <div class="slide-footer"><b>Edward Robin</b><br><span>Operations Director, TechSolutions Ltd.</span></div>
  </div>

  </div>
  <div class="slide-div-btn-sec">
    <button id="prevBtn" class="arrow-btn blue-btn">→</button>
    <button id="nextBtn" class="arrow-btn blue-btn">←</button>
    
  </div>
</div>


<div class="video-slide-sec">
  <div class="video-slide-sec-vid" id="videoContainer">
    <div class="slide-wrapper"></div>
  </div>
  <div class="slide-div-btn-sec">
    <button class="arrow-btn blue-btn" id="prevBtn2">→</button>
    <button class="arrow-btn blue-btn" id="nextBtn2">←</button>
  </div>
</div>

	
		<div class="clear"></div>	
		</div>	
		</div>
		<div class="clear"></div>
		
		</div>
    






 
 
 
 
 
<div class="clear"></div>
<section class="faq-sec">
 <div class="wraping">
 
 <div class="faq-sec-head">
 FAQ
 </div>
 <div class="faq-accordion">
 
  <div class="accordion">
  <div class="accordion-item">
    <button class="accordion-header">Who can enroll in the SCMF Program? </button>
    <div class="accordion-content">
      <p>Students, working professionals, or someone looking to explore or switch to a career in supply chains. No prior knowledge or experience is required.</p>
    </div>
  </div>
  <div class="accordion-item" >
    <button class="accordion-header">Is the SCMF Program really free?</button>
    <div class="accordion-content">
      <p>Yes, the program is completely free under Blue Ocean’s global initiative Mission Supply Chain: Supply Chain Education For All. There are no hidden charges.</p>
    </div>
  </div>
  <div class="accordion-item">
    <button class="accordion-header">How is the course delivered?</button>
    <div class="accordion-content">
      <p>The course is delivered online through PRISM, Blue Ocean’s world-class Learning Management System. You can learn anytime, anywhere, at your own pace.</p>
    </div>
  </div>
   <div class="accordion-item" >
    <button class="accordion-header">Will I receive a certificate after completing the program?</button>
    <div class="accordion-content">
      <p>Yes. Upon successfully completing the course and final assessment, you will receive a globally recognized certificate from Blue Ocean Corporation, UK.</p>
    </div>
  </div>
    <div class="accordion-item" >
    <button class="accordion-header">How long does it take to finish the program?</button>
    <div class="accordion-content">
      <p>The program is self-paced. Most learners complete it within a few weeks, but you are free to progress faster or slower depending on your schedule.</p>
    </div>
  </div>
   <div class="accordion-item">
    <button class="accordion-header">What makes this course different from others?</button>
    <div class="accordion-content">
      <p>This program is simple, practical, and engaging. You’ll also gain access to additional resources, including webinars, whitepapers, and industry updates, for a full year via our LMS.</p>
    </div>
  </div>
  
   
  
  
</div>

  <!-- Add other FAQ items here -->
</div>



 
 <div class="clear"></div>
 </div>
 </section>
<div class="clear"></div>
@endsection

@push('scripts')

<!---------------------------Faq JS---------------------------->
<script>
const headers = document.querySelectorAll('.accordion-header');
headers.forEach(header => {
  header.addEventListener('click', function() {
    const item = this.parentElement;
    // Close others if needed
    document.querySelectorAll('.accordion-item').forEach(i => {
      if(i !== item) i.classList.remove('active');
    });
    item.classList.toggle('active');
  });
});

</script>

  
  
  
  <!--------------two text slide-------------------->
<script>
  const slides = document.querySelectorAll('.slide-div');
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  let currentIndex = 0;

  function getSlidesToShow() {
    return window.innerWidth <= 767 ? 1 : 2;
  }

  function showSlides(index) {
    const slidesToShow = getSlidesToShow();
    slides.forEach(slide => slide.style.display = 'none');

    for (let i = 0; i < slidesToShow; i++) {
      let slideIndex = (index + i) % slides.length;
      slides[slideIndex].style.display = 'block';
    }
  }

  nextBtn.addEventListener('click', () => {
    const slidesToShow = getSlidesToShow();
    currentIndex = (currentIndex + slidesToShow) % slides.length;
    showSlides(currentIndex);
  });

  prevBtn.addEventListener('click', () => {
    const slidesToShow = getSlidesToShow();
    currentIndex = (currentIndex - slidesToShow + slides.length) % slides.length;
    showSlides(currentIndex);
  });

  window.addEventListener('resize', () => {
    showSlides(currentIndex);
  });

  // Initial
  showSlides(currentIndex);
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const videoContainer = document.querySelector('#videoContainer .slide-wrapper');
  const prevBtn = document.getElementById('prevBtn2');
  const nextBtn = document.getElementById('nextBtn2');

  const videos = [
    'https://www.youtube.com/embed/WtEP7Cxwfpc?autoplay=0',
	'https://www.youtube.com/embed/sxBIgeVfiKM?si=4lSeCgXNSzSLc1DD&autoplay=0',
    'https://www.youtube.com/embed/U-TKsWGUiMM?autoplay=0',
    'https://www.youtube.com/embed/H_QbTMSqE_8?si=6yPpF_uoeNDYsIwW?autoplay=0'
  ];

  let currentIndex = 0;

  // Initial load
  function createIframe(src, className = '') {
    const iframe = document.createElement('iframe');
    iframe.src = src;
    iframe.width = '100%';
    iframe.height = '400';
    iframe.className = `slide-iframe ${className}`;
    iframe.setAttribute('allow', 'autoplay; encrypted-media');
    iframe.setAttribute('allowfullscreen', '');
    return iframe;
  }

  function loadVideo(index) {
    videoContainer.innerHTML = '';
    videoContainer.appendChild(createIframe(videos[index]));
  }

  loadVideo(currentIndex);

  function slideTo(newIndex, direction) {
    if (newIndex === currentIndex) return;

    const oldIframe = videoContainer.querySelector('.slide-iframe');
    const newIframe = createIframe(videos[newIndex], 'next');

    // Set initial position for new iframe
    newIframe.style.transform = `translateX(${direction === 'left' ? '100%' : '-100%'})`;
    videoContainer.appendChild(newIframe);

    // Force reflow to apply initial transform
    void newIframe.offsetWidth;

    // Animate both iframes
    oldIframe.style.transform = `translateX(${direction === 'left' ? '-100%' : '100%'})`;
    newIframe.style.transform = 'translateX(0)';

    // After animation, remove old iframe
    setTimeout(() => {
      if (oldIframe && oldIframe.parentNode) {
        oldIframe.parentNode.removeChild(oldIframe);
      }
      newIframe.classList.remove('next');
    }, 500);

    currentIndex = newIndex;
  }

  prevBtn.addEventListener('click', function () {
    const newIndex = (currentIndex - 1 + videos.length) % videos.length;
    slideTo(newIndex, 'right');
  });

  nextBtn.addEventListener('click', function () {
    const newIndex = (currentIndex + 1) % videos.length;
    slideTo(newIndex, 'left');
  });
});
</script>
  <script>
  const slides = document.querySelectorAll('.slider2 img');
  let current = 0;
  const slideInterval = 2000; // 2s

  function showNextSlide() {
    const next = (current + 1) % slides.length;
    slides[current].classList.remove('active');
    slides[next].classList.add('active');
    current = next;
  }

  setInterval(showNextSlide, slideInterval);
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  // If you ever want multiple accordions on the page, this supports it
  const accordions = document.querySelectorAll('.lecture-detail');
  if (!accordions.length) return;

  const EXCLUSIVE_OPEN = true; // set to false to allow multiple sections open

  accordions.forEach((container, accIdx) => {
    const sections = container.querySelectorAll('.lecture-section');

    sections.forEach((sec, i) => {
      const header = sec.querySelector('.section-header');
      const panel  = sec.querySelector('.section-content');
      if (!header || !panel) return;

      // ensure a unique id for aria-controls
      if (!panel.id) panel.id = `lecture-panel-${accIdx + 1}-${i + 1}`;

      // a11y wiring on header only (no CSS needed)
      header.setAttribute('role', 'button');
      header.setAttribute('tabindex', '0');
      header.setAttribute('aria-controls', panel.id);

      // collapse all except the first
      const expanded = (i === 0);
      header.setAttribute('aria-expanded', expanded ? 'true' : 'false');
      if (!expanded) panel.setAttribute('hidden', '');
      else panel.removeAttribute('hidden');
    });

    function openExclusive(targetSec) {
      const secs = container.querySelectorAll('.lecture-section');
      secs.forEach(sec => {
        const header = sec.querySelector('.section-header');
        const panel  = sec.querySelector('.section-content');
        if (!header || !panel) return;

        const isTarget = (sec === targetSec);
        header.setAttribute('aria-expanded', isTarget ? 'true' : 'false');
        if (isTarget) panel.removeAttribute('hidden');
        else panel.setAttribute('hidden', '');
      });
    }

    function toggle(sec) {
      const header = sec.querySelector('.section-header');
      const panel  = sec.querySelector('.section-content');
      if (!header || !panel) return;

      const isOpen = header.getAttribute('aria-expanded') === 'true';

      if (EXCLUSIVE_OPEN) {
        if (isOpen) {
          header.setAttribute('aria-expanded', 'false');
          panel.setAttribute('hidden', '');
        } else {
          openExclusive(sec);
        }
      } else {
        header.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
        if (isOpen) panel.setAttribute('hidden', '');
        else panel.removeAttribute('hidden');
      }
    }

    // Click + keyboard handlers
    container.addEventListener('click', (e) => {
      const header = e.target.closest('.section-header');
      if (!header || !container.contains(header)) return;
      toggle(header.closest('.lecture-section'));
    });

    container.addEventListener('keydown', (e) => {
      const header = e.target.closest('.section-header');
      if (!header || !container.contains(header)) return;
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        toggle(header.closest('.lecture-section'));
      }
    });
  });
});
</script>
 <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/tenyslider-script.js') }}"></script>
@endpush