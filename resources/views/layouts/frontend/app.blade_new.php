<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, minimum-scale=1, initial-scale=1.0, maximum-scale=1.0" />

    <!--  -->

    <!-- Primary Meta Tags -->
    <title>@yield('title', 'Blue Ocean Corporation')</title>
    <meta name="title" content="Blue Ocean " />
    <meta name="description" content="@yield('meta-description', 'Blue Ocean Corporation')" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <!--Neighborly Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/frontend/images/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/frontend/images/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/frontend/images/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('assets/frontend/images/favicon/site.webmanifest') }}" />
    <link rel="canonical" href="{{ url()->full() }}" />
    <meta name="msapplication-TileColor" content="#0C1895" />
    <meta name="theme-color" content="#0C1895" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="#" />
    <meta property="og:title" content="Blue Ocean" />
    <meta property="og:description" content="Blue Ocean" />
    <meta property="og:image" content="#" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="#" />
    <meta property="twitter:title" content="Blue Ocean" />
    <meta property="twitter:description" content="Blue Ocean" />
    <meta property="twitter:image" content="#" />

    <!-- Page Style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/sidebar-menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/footer.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style-javinGlobal.css') }}" />

    <!-- Additional Styles pushed from specific views -->
    @stack('styles')
  </head>
  
  <style>
    .text-purple-600 {
      color: #00a0e3 !important;
    }

    .hidden.not-munu.block {
      display: none !important;
    }

    .block.not-munu {
      display: none;
    }

    .z-10.not-munu.view.block {
      display: block !important;
    }

    span.float-left {
      float: right;
      padding-left: 10px;
      padding-top: 7px;
    }
    .resultBox {
      background-color: #ffffff99;
    }
    .video-banner-wrapper {
      width: 100%;
      height: 720px;
      object-fit: cover;
    }
    .resultBox li {
      list-style: none;
      padding: 15px;
    }
    .resultBox li a {
      text-decoration: none;
    }
  </style>

  <body>
    <!-- HEADER SECTION STARTS HERE -->
    <header class="fixed w-full" id="header-top">
      <!-- <a class="skip-main" href="#main">Skip to Main Content</a>
      <a class="skip-main" href="#footer">Skip to Footer Content</a> -->
      <nav class="header-main">
        <div class="flex flex-wrap justify-between items-center relative">
          <div class="flex flex-row gap-4">
            <div class="icon_box me-4">
              <div class="hamburger" id="hamburger-1">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </div>
            </div>
            <a href="{{ route('general.home') }}" class="flex items-center">
              <img src="{{ asset('assets/frontend/images/boc-logo-final.svg') }}" alt="Blue Ocean Corporation logo" class="h-8 sm:h-12 main-hdr-logo" />
            </a>
          </div>

          <div class="right_hdr justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-search">
            <ul class="flex flex-col lg:flex-row gap-5 py-5 lg:py-0" id="homemenu">
              <li>
                <a href="{{ route('general.home') }}" class="menu-item {{ in_array(Route::currentRouteName(), ['general.home']) ? 'active' : '' }}" aria-current="page">Home</a>
              </li>
              <li>
                <a
                  href="{{ route('consulting.home') }}"
                  class="menu-item {{ in_array(Route::currentRouteName(), [
                  'consulting.home', 'consulting.precision.strategy', 'consulting.strategic.impact', 'consulting.case.studies'
                ]) ? 'active' : '' }}"
                >
                  Consulting
                </a>
              </li>
              <li>
                <a
                  data-dropdown-toggle="dropdownNavbar"
                  href="{{ route('training.home') }}"
                  class="menu-item {{ in_array(Route::currentRouteName(), [
                  'training.home', 'training.certification.program', 'training.affliations', 'training.corporate', 
                  'training.corporate.program', 'training.webinar.seminar', 'training.webinar.seminar.register', 'training.course.details'
                ]) ? 'active' : '' }}"
                >
                  Training
                  <span class="float-left">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="13px" viewBox="0 0 512 512" xml:space="preserve">
                      <path
                        d="M505.183,123.179c-9.087-9.087-23.824-9.089-32.912,0.002l-216.266,216.27L39.729,123.179
    c-9.087-9.087-23.824-9.089-32.912,0.002c-9.089,9.089-9.089,23.824,0,32.912L239.55,388.82c4.364,4.364,10.283,6.816,16.455,6.816
    c6.172,0,12.092-2.453,16.455-6.817l232.721-232.727C514.272,147.004,514.272,132.268,505.183,123.179z"
                      />
                    </svg>
                  </span>
                </a>
                <!-- Dropdown menu -->
                <div class="z-10 hidden not-munu" id="dropdownNavbar">
                  <ul class="sub-menu-box" aria-labelledby="dropdownLargeButton">
                    <!-- Certification Programs -->
                    <li class="relative" aria-labelledby="dropdownNavbarLink">
                      <a href="#tabs" class="sub-menu-item tab-trigger" data-tab-target="styled-certificate">
                        Certification Programs
                        <span class="submenu-toggle" data-dropdown-toggle="doubleDropdown">
                          <img src="{{ asset('assets/frontend/images/Chevron-right.png') }}" alt="" />
                        </span>
                      </a>
                      <div id="doubleDropdown" class="z-10 hidden right-overly-box">
                        @if(isset($certificationCategories) && !empty($certificationCategories))
                        <ul class="list-box-submenu" aria-labelledby="doubleDropdownButton">
                          @foreach($certificationCategories as $certificationCategory)
                          <li>
                            <a href="{{ route('training.certification.program', ['category' => $certificationCategory->name_en]) }}" class="sub-sub-menu">
                              {{ $certificationCategory->name_en }}
                            </a>
                          </li>
                          @endforeach
                        </ul>
                        @endif
                      </div>
                    </li>
                    <!-- Affiliations -->
                    <li class="relative" aria-labelledby="dropdownNavbarLink">
                      <a href="#tabs" class="sub-menu-item tab-trigger" data-tab-target="styled-affiliate">
                        Affiliations
                        <span class="submenu-toggle">
                          <img src="{{ asset('assets/frontend/images/Chevron-right.png') }}" alt="" />
                        </span>
                      </a>
                    </li>
                    <!-- Corporate Training -->
                    <li class="relative" aria-labelledby="dropdownNavbarLink">
                      <a href="#tabs" class="sub-menu-item tab-trigger" data-tab-target="styled-training">
                        Corporate Training
                        <span class="submenu-toggle" data-dropdown-toggle="doubleDropdown-four">
                          <img src="{{ asset('assets/frontend/images/Chevron-right.png') }}" alt="" />
                        </span>
                      </a>
                      <div id="doubleDropdown-four" class="z-10 hidden right-overly-box">
                        @if(isset($corporateCategories) && !empty($corporateCategories))
                        <ul class="list-box-submenu" aria-labelledby="doubleDropdownButton">
                          @foreach($corporateCategories as $corporateCategory)
                          <li>
                            <a href="{{ route('training.corporate.program', ['category' => $corporateCategory->name_en]) }}" class="sub-sub-menu">
                              {{ $corporateCategory->name_en }}
                            </a>
                          </li>
                          @endforeach
                        </ul>
                        @endif
                      </div>
                    </li>
                    <!-- Webinar / Seminar -->
                    <li class="relative" aria-labelledby="dropdownNavbarLink">
                      <a href="#tabs" class="sub-menu-item tab-trigger" data-tab-target="styled-seminar">
                        Webinar / Seminar
                        <span class="submenu-toggle">
                          <img src="{{ asset('assets/frontend/images/Chevron-right.png') }}" alt="" />
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a
                  data-dropdown-toggle="dropdownNavbar2"
                  href="{{ route('conferences.home') }}"
                  class="menu-item {{ in_array(Route::currentRouteName(), [
                  'conferences.home', 'conferences.ipsc', 'conferences.ipsc.riyadh.2024', 'conferences.ipsc.london.2024',
                  'conferences.ipsc.mumbai.2024', 'conferences.ipsc.dubai.2021', 'conferences.ipsc.riyadh.2016', 
                  'conferences.ipsc.abudhabi.2016', 'conferences.ipsc.dubai.2016', 'conferences.ipsc.dubai.2014', 
                  'conferences.ipsc.qatar.2014', 'conferences.ihrc', 'conferences.cxo', 'conferences.cxo.dubai.2024', 
                  'conferences.bowld', 'conferences.bowld.event.2025', 'conferences.bowld.event.2024', 
                  'conferences.bowld.event.2023', 'conferences.bowld.event.2022', 'conferences.bowld.event.2021'
                ]) ? 'active' : '' }}"
                >
                  Conferences
                  <span class="float-left">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="13px" viewBox="0 0 512 512" xml:space="preserve">
                      <path
                        d="M505.183,123.179c-9.087-9.087-23.824-9.089-32.912,0.002l-216.266,216.27L39.729,123.179
    c-9.087-9.087-23.824-9.089-32.912,0.002c-9.089,9.089-9.089,23.824,0,32.912L239.55,388.82c4.364,4.364,10.283,6.816,16.455,6.816
    c6.172,0,12.092-2.453,16.455-6.817l232.721-232.727C514.272,147.004,514.272,132.268,505.183,123.179z"
                      />
                    </svg>
                  </span>
                </a>
                <!-- Dropdown menu -->
                <div class="z-10 hidden not-munu" id="dropdownNavbar2">
                  <ul class="sub-menu-box" aria-labelledby="dropdownLargeButton">
                    <!-- Certification Programs -->
                    <li class="relative" aria-labelledby="dropdownNavbarLink2">
                      <a href="{{ route('conferences.ipsc') }}" class="sub-menu-item tab-trigger" data-tab-target="styled-certificate">
                        IPSC
                      </a>
                    </li>

                    <!-- Affiliations -->
                    <li class="relative" aria-labelledby="dropdownNavbarLink2">
                      <a href="{{ route('conferences.ihrc') }}" class="sub-menu-item tab-trigger" data-tab-target="styled-affiliate">
                        IHRC
                      </a>
                    </li>

                    <!-- Corporate Training -->
                    <li class="relative" aria-labelledby="dropdownNavbarLink2">
                      <a href="{{ route('conferences.cxo') }}" class="sub-menu-item tab-trigger" data-tab-target="styled-training">
                        CXO
                      </a>
                    </li>

                    <!-- Webinar / Seminar -->
                    <li class="relative" aria-labelledby="dropdownNavbarLink2">
                      <a href="{{ route('conferences.bowld') }}" class="sub-menu-item tab-trigger" data-tab-target="styled-seminar">
                        BOWLD
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a data-dropdown-toggle="dropdownNavbar3" href="{{ route('general.about.us') }}" class="menu-item {{ in_array(Route::currentRouteName(), ['general.about.us']) ? 'active' : '' }}">
                  About Us
                  <span class="float-left">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="13px" height="13px" viewBox="0 0 512 512" xml:space="preserve">
                      <path
                        d="M505.183,123.179c-9.087-9.087-23.824-9.089-32.912,0.002l-216.266,216.27L39.729,123.179
    c-9.087-9.087-23.824-9.089-32.912,0.002c-9.089,9.089-9.089,23.824,0,32.912L239.55,388.82c4.364,4.364,10.283,6.816,16.455,6.816
    c6.172,0,12.092-2.453,16.455-6.817l232.721-232.727C514.272,147.004,514.272,132.268,505.183,123.179z"
                      />
                    </svg>
                  </span>
                </a>
                <!-- Dropdown menu -->
                <div class="z-10 hidden not-munu" id="dropdownNavbar3">
                  <ul class="sub-menu-box" aria-labelledby="dropdownLargeButton">
                    <!-- Certification Programs -->
                    <li class="relative">
                      <a href="{{ route('general.about.us') }}" class="sub-menu-item tab-trigger" data-tab-target="styled-certificate">
                        Our Company
                      </a>
                    </li>

                    <!-- Affiliations -->
                    <li class="relative">
                      <a href="{{ route('general.advisory.board') }}" class="sub-menu-item tab-trigger" data-tab-target="styled-affiliate">
                        Advisory Board
                      </a>
                    </li>

                    <!-- Corporate Training -->
                    <li class="relative">
                      <a href="{{ route('general.news.insight') }}" class="sub-menu-item tab-trigger" data-tab-target="styled-training">
                        News
                      </a>
                    </li>

                    <!-- Webinar / Seminar -->
                    <li class="relative">
                      <a href="{{ route('general.awards') }}" class="sub-menu-item tab-trigger" data-tab-target="styled-seminar">
                        Awards
                      </a>
                    </li>

                    <li class="relative">
                      <a href="{{ route('general.gallery') }}" class="sub-menu-item tab-trigger" data-tab-target="styled-training">
                        Gallery
                      </a>
                    </li>
                    <li class="relative">
                      <a href="{{ route('general.careers') }}" class="sub-menu-item tab-trigger" data-tab-target="styled-training">
                        Making Waves
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <a href="https://careers.blueoceancorporation.com/jobs/Careers" target="_blank" class="menu-item {{ in_array(Route::currentRouteName(), ['general.careers']) ? 'active' : '' }}">Careers</a>
              </li>
            </ul>
            <div class="search px-1 mx-1 px-xl-3">
              <div class="search_icon relative">
                <img src="{{ asset('assets/frontend/images/search-icon.svg') }}" alt="search" id="search-icon" />
                <div class="search_box">
                  <form action="">
                    <div class="searchInput">
                      <div class="srch_bx">
                        <input type="text" class="form-control" placeholder="Search Here" />
                        <button class="btn" type="submit"><img src="{{ asset('assets/frontend/images/search-icon.svg') }}" alt="search" /></button>
                      </div>
                      <div class="resultBox">
                        <!-- here list are inserted from javascript -->
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="flex items-center">
              <div class="lang">
                <button type="button" data-dropdown-toggle="language-dropdown" class="inline-flex items-center text-[#010101] text-sm">
                  <img src="{{ asset('assets/frontend/images/lang-globe.svg') }}" alt="language globe icon" class="pr-4 pl-5" />
                  <div class="flex">
                    EN
                    <svg class="ml-1 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </div>
                </button>
                <!-- Dropdown -->
                <div class="hidden language-drop border-gray-500 shadow-lg" id="language-dropdown">
                  <ul class="py-1" role="none">
                    <li class="border-b">
                      <a class="dropdown-item" href="?lang=en" role="menuitem"><sup>EN</sup> English</a>
                    </li>
                    <li class="border-b">
                      <a class="dropdown-item" href="?lang=es" role="menuitem"><sup>ES</sup> Spanish</a>
                    </li>
                    <li class="border-b">
                      <a class="dropdown-item" href="?lang=fr" role="menuitem"><sup>FR</sup> French</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="?lang=de" role="menuitem"><sup>DE</sup> German</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="{{ route('general.boc.life') }}" class="life-at-blue absolute">
          Life @ Blue Ocean
        </a>
      </nav>
    </header>
    <div class="search_box for-mobile-view">
      <form action="">
        <div class="searchInput">
          <div class="srch_bx">
            <input type="text" class="form-control" placeholder="Search Here" />
            <button class="btn" type="submit"><img src="{{ asset('assets/frontend/images/search-icon.svg') }}" alt="search" /></button>
          </div>
          <div class="resultBox">
            <!-- here list are inserted from javascript -->
          </div>
        </div>
      </form>
    </div>
    <!-- HEADER SECTION ENDS HERE -->

    <!-- SIDEBAR SECTION STARTS HERE -->
    <div class="left_side_menu fixed top-0 z-50">
      <img src="{{ asset('assets/frontend/images/boc-white-logo.png') }}" alt="" class="mobile-logo hidden" />
      <ul class="sidemenu-home">
        <li class="main-list">
          <a href="{{ route('general.home') }}">
            Home <span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
          <!-- <div class="flex submenu-box active">
            <div class="w-full">
              <h2>Home</h2>
              <ul class="submenu-list">
                <li><a href="#">Business Transformation</a></li>
                <li><a href="#">Certification for Organizational Excellence</a></li>
              </ul>
            </div>
          </div> -->
        </li>
        <li class="main-list">
          <a href="{{ route('consulting.home') }}">
            Consulting <span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
          <div class="flex submenu-box">
            <div class="w-full">
              <h2>Consulting</h2>
              <ul class="submenu-list">
                <li><a href="#">Business Transformation</a></li>
                <li><a href="#">Certification for Organizational Excellence</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li class="main-list">
          <a href="{{ route('training.home') }}">
            Training<span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
          <div class="flex submenu-box">
            <div class="w-full">
              <h2 class="font-bold">Training</h2>
              <div class="uni-menu-container">
                <ul class="uni-main-menu">
                  <li class="uni-has-submenu uni-active">
                    Certification Program
                    <span>
                      <svg width="24px" height="24px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 16a.999.999 0 01-.707-1.707L11.586 10 7.293 5.707a.999.999 0 111.414-1.414l5 5a.999.999 0 010 1.414l-5 5A.997.997 0 018 16z" />
                      </svg>
                    </span>
                    <div class="uni-submenu">
                      <ul class="uni-submenu-list">
                        <li class="uni-submenu-section">
                          <ul>
                            <li><a href="{{ route('training.certification.program', ['category' => 'Logistics & Supply Chain Management']) }}">Logistics and Supply Chain Management</a></li>
                            <li><a href="{{ route('training.certification.program', ['category' => 'Procurement & Purchasing']) }}">Procurement & Purchasing</a></li>
                            <li><a href="{{ route('training.certification.program', ['category' => 'Human Resource Management']) }}">Human Resource Management</a></li>
                            <li><a href="{{ route('training.certification.program', ['category' => 'Quality Management']) }}">Quality Management</a></li>
                            <li><a href="{{ route('training.certification.program', ['category' => 'Administration']) }}">Administration</a></li>
                            <li><a href="{{ route('training.certification.program', ['category' => 'Project Management']) }}">Project Management</a></li>
                            <li><a href="{{ route('training.certification.program', ['category' => 'IATA Aviation']) }}">IATA Aviation</a></li>
                            <li><a href="{{ route('training.certification.program', ['category' => 'Accounting & Finance']) }}">Accounting & Finance</a></li>
                            <li><a href="{{ route('training.certification.program', ['category' => 'Corporate Training']) }}">Corporate Training</a></li>
                            <li><a href="{{ route('training.certification.program', ['category' => 'Information Technology']) }}">Information Technology</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="uni-has-submenu">
                    Affiliations
                    <span>
                      <svg width="24px" height="24px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 16a.999.999 0 01-.707-1.707L11.586 10 7.293 5.707a.999.999 0 111.414-1.414l5 5a.999.999 0 010 1.414l-5 5A.997.997 0 018 16z" />
                      </svg>
                    </span>
                    <div class="uni-submenu">
                      <ul class="uni-submenu-list">
                        <li class="uni-submenu-section">
                          <ul>
                            <li><a href="{{ route('training.certification.program', ['certification' => 'IPSCMI']) }}">IPSCMI</a></li>
                            <li><a href="{{ route('training.certification.program', ['certification' => 'CIPS']) }}">CIPS</a></li>
                            <li><a href="{{ route('training.certification.program', ['certification' => 'CMI']) }}">CMI</a></li>
                            <li><a href="{{ route('training.certification.program', ['certification' => 'CILT']) }}">CILT</a></li>
                            <li><a href="{{ route('training.certification.program', ['certification' => 'ASCM']) }}">ASCM</a></li>
                            <li><a href="{{ route('training.certification.program', ['certification' => 'APS']) }}">APS</a></li>
                            <li><a href="{{ route('training.certification.program', ['certification' => 'ACI']) }}">ACI</a></li>
                            <li><a href="{{ route('training.certification.program', ['certification' => 'PMI']) }}">PMI</a></li>
                            <li><a href="{{ route('training.certification.program', ['certification' => 'IATA']) }}">IATA</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="uni-has-submenu">
                    Corporate Training
                    <span>
                      <svg width="24px" height="24px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 16a.999.999 0 01-.707-1.707L11.586 10 7.293 5.707a.999.999 0 111.414-1.414l5 5a.999.999 0 010 1.414l-5 5A.997.997 0 018 16z" />
                      </svg>
                    </span>
                    <div class="uni-submenu">
                      <ul class="uni-submenu-list">
                        <li class="uni-submenu-section">
                          <ul>
                            <li><a href="{{ route('training.corporate.program', ['category' => 'Sales and Marketing']) }}">Sales and Marketing</a></li>
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
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="uni-has-submenu">
                    Webinar / Seminar
                    <span>
                      <svg width="24px" height="24px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 16a.999.999 0 01-.707-1.707L11.586 10 7.293 5.707a.999.999 0 111.414-1.414l5 5a.999.999 0 010 1.414l-5 5A.997.997 0 018 16z" />
                      </svg>
                    </span>
                    <div class="uni-submenu">
                      <ul class="uni-submenu-list">
                        <li class="uni-submenu-section">
                          <ul>
                            @if(isset($seminars) && !empty($seminars)) @foreach($seminars as $seminar)
                            <li><a href="{{ route('training.webinar.seminar.register', ['slug' => $seminar->slug]) }}">{{ $seminar->seminar_title_initial ? $seminar->seminar_title_initial.' ' : '' }} {{ $seminar->seminar_title }}</a></li>
                            @endforeach @endif
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="main-list">
          <a href="{{ route('conferences.home') }}">
            Conferences<span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
          <div class="flex submenu-box">
            <div class="w-full">
              <h2 class="font-bold">Events & Conferences</h2>
              <ul class="submenu-list">
                <li><a href="{{ route('conferences.ipsc') }}">IPSC</a></li>
                <li><a href="{{ route('conferences.ihrc') }}">IHRC</a></li>
                <li><a href="{{ route('conferences.bowld') }}">BOWLD</a></li>
                <li><a href="{{ route('conferences.cxo') }}">CXO</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li class="main-list">
          <a href="{{ route('general.advisory.board') }}">
            Advisory Board<span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
          <div class="flex submenu-box">
            <div class="w-full">
              <h2 class="font-bold">Advisory Board</h2>
              <ul class="submenu-list">
                <li><a href="{{ route('general.advisory.member.details', 'sourav-ganguly') }}">Sourav Ganguly</a></li>
                <li><a href="{{ route('general.advisory.member.details', 'michael-proffitt') }}">Michael Proffitt</a></li>
                <li><a href="{{ route('general.advisory.member.details', 'dr-sathya-menon') }}">Dr. Sathya Menon</a></li>
                <li><a href="{{ route('general.advisory.member.details', 'abdul-azeez') }}">Abdul Azeez</a></li>
                <li><a href="{{ route('general.advisory.member.details', 'john-ellis') }}">John Ellis</a></li>
                <li><a href="{{ route('general.advisory.member.details', 'vs-ramachandran') }}">V.S. Ramachandran</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li class="main-list">
          <a href="{{ route('general.awards') }}">
            Awards <span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
        </li>
        <li class="main-list">
          <a href="{{ route('general.news.insight') }}">
            News<span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
          <div class="flex submenu-box">
            <div class="w-full">
              <h2 class="font-bold">News</h2>
              <ul class="submenu-list">
                <li><a href="#">News 1</a></li>
              </ul>
            </div>
          </div>
        </li>
        <li class="main-list">
          <a href="{{ route('blog.home') }}">
            Blogs<span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
          <div class="flex submenu-box">
            <div class="w-full">
              <h2 class="font-bold">Articles & Blogs</h2>
              <div class="flex submenu-section">
                <div class="w-1/2">
                  <div class="block-menu mb-4">
                    <p class="font-bold">Pearls of Wisdom</p>
                    <ul class="submenu-list">
                      <li><a href="#">AI in Project Management</a></li>
                      <li><a href="#">Strengthening Global Supply Chain Knowledge Gratitude to Blue Ocean Corporation</a></li>
                      <li><a href="#">From Accidental Manager to Purposeful Leader: Navigating the Challenges</a></li>
                      <li><a href="#">Procurement Might Just Produce The Best Leaders</a></li>
                    </ul>
                  </div>
                  <div class="block-menu mb-4">
                    <p class="font-bold">Articles & Blogs</p>
                    <ul class="submenu-list">
                      <li><a href="#">Navigating the Supply Chain Certification Maze: Choosing the Right Certifying Body</a></li>
                      <li><a href="#">Grooming for a Quantum Jump</a></li>
                    </ul>
                  </div>
                </div>
                <div class="w-1/2">
                  <div class="block-menu mb-4">
                    <ul class="submenu-list">
                      <p class="font-bold">From the Expert’s Diary</p>
                      <li><a href="#">The Omnichannel Supply Chain Strategy</a></li>
                      <li><a href="#">Inspiring Minds-Fostering Talent</a></li>
                      <li><a href="#">Advantages of Green Hydrogen fuel usage in Logistics, Shipping & Supply Chain</a></li>
                      <li><a href="#">How Companies Can Position Themselves as an Employer of Choice</a></li>
                      <li><a href="#" class="more">more...</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="main-list">
          <a href="https://careers.blueoceancorporation.com/jobs/Careers" target="_blank">
            Careers<span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
        </li>
        <li class="main-list">
          <a href="{{ route('general.about.us') }}">
            About Us <span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
        </li>
        <li class="main-list">
          <a href="{{ route('general.contact.us') }}">
            Contact Us<span><img src="{{ asset('assets/frontend/images/arrow-right-white.png') }}" alt="" /></span>
          </a>
        </li>
      </ul>
    </div>
    <!-- SIDEBAR SECTION ENDS HERE -->

    <main id="main">
      @yield('content')
    </main>
	<input type="hidden" name="searchkeyWords" value='{{ json_encode($searchKeyWords) }}'>
    <!-- FOOTER SECTION STARTS HERE -->
    <footer id="footer">
      <div class="bg-[#020954] text-white pt-14 mobile relative">
        <div class="footer-leftangle">
          <img src="{{ asset('assets/frontend/images/footer-left-angle.png') }}" class="absolute left-0 top-1/2 -translate-y-1/2" />
        </div>
        <div class="container">
          <div class="flex flex-col lg:flex-row justify-between gap-4">
            <div class="footer-list-item">
              <h2 class="footer-heading font-medium pb-6 mmb flex justify-between items-center cursor-pointer">
                About Us
                <span class="arrow transition-transform duration-300 rotate-[-90deg] block lg:hidden">&#9662;</span>
              </h2>
              <ul class="footer-menu-list transition-all duration-300 overflow-hidden max-h-0 lg:max-h-[999px]">
                <li><a href="{{ route('general.about.us') }}" class="text-base block pb-4 lg:pb-4">Our Company</a></li>
                <li><a href="{{ route('general.advisory.board') }}" class="text-base block pb-4 lg:pb-4">Board of Directors</a></li>
                <li><a href="{{ route('general.awards') }}" class="text-base block pb-4 lg:pb-4">Awards</a></li>
                <li><a href="{{ route('general.awards') }}" class="text-base block pb-4 lg:pb-4">Success Stories</a></li>
                <li><a href="{{ route('general.careers') }}" class="text-base block pb-4 lg:pb-4">Making Waves</a></li>
              </ul>
            </div>
            <div class="footer-list-item">
              <h2 class="footer-heading font-medium pb-6 flex justify-between items-center cursor-pointer">
                Explore
                <span class="arrow transition-transform duration-300 rotate-[-90deg] block lg:hidden">&#9662;</span>
              </h2>
              <ul class="footer-menu-list transition-all duration-300 overflow-hidden max-h-0 lg:max-h-[999px]">
                <li><a href="{{ route('training.certification.program') }}" class="text-base block pb-4 lg:pb-4">Certification Courses</a></li>
                <li><a href="{{ route('training.corporate') }}" class="text-base block pb-4 lg:pb-4">Corporate Training</a></li>
                <li><a href="{{ route('consulting.home') }}" class="text-base block pb-4 lg:pb-4">Consulting</a></li>
                <li><a href="{{ route('conferences.home') }}" class="text-base block pb-4 lg:pb-4">Events & Conferences</a></li>
                <li><a href="{{ route('training.webinar.seminar') }}" class="text-base block pb-4 lg:pb-4">Webinar / Seminar</a></li>
              </ul>
            </div>
            <div class="footer-list-item">
              <h2 class="footer-heading font-medium pb-6 flex justify-between items-center cursor-pointer">
                Blue Ocean Corporation
                <span class="arrow transition-transform duration-300 rotate-[-90deg] block lg:hidden">&#9662;</span>
              </h2>
              <ul class="footer-menu-list transition-all duration-300 overflow-hidden max-h-0 lg:max-h-[999px]">
                <li><a href="https://careers.blueoceancorporation.com/jobs/Careers" class="text-base block pb-4 lg:pb-4">Careers</a></li>
                <li><a href="{{ route('general.news.insight') }}" class="text-base block pb-4 lg:pb-4">News</a></li>
                <li><a href="{{ route('general.boc.life') }}" class="text-base block pb-4 lg:pb-4">Life @ Blue Ocean</a></li>
                <li><a href="#" class="text-base block pb-4 lg:pb-4">Site Map</a></li>
              </ul>
            </div>
            @if($blogs)
              <div class="footer-list-item">
                <h2 class="footer-heading font-medium pb-6 flex justify-between items-center cursor-pointer">Recent Post <span class="arrow transition-transform duration-300 rotate-[-90deg] block lg:hidden">&#9662;</span></h2>
                <ul class="footer-menu-list transition-all duration-300 overflow-hidden max-h-0 lg:max-h-[999px]">
                  @foreach($blogs as $blog)
                    <li><a href="{{ route('blog.details', $blog->slug) }}" class="text-base block pb-4 lg:pb-4">{{ $blog->blog_title }}</a></li>
                  @endforeach
                </ul>
              </div>
            @endif
          </div>
          <div class="flex flex-col lg:flex-row gap-5 border-y border-[#41467A] py-6 2xl:py-1 items-center text-center lg:text-left">
            <div>
              <img src="{{ asset('assets/frontend/images/brand-logo-white.svg') }}" alt="Blue Ocean brand logo" />
            </div>
            <div class="pl-0 lg:pl-10 2xl:pl-16">
              <p class="text-xl 2xl:text-2xl font-medium pb-3 lg:pb-5">Enquire</p>
              <a class="text-base 2xl:text-xl font-medium" href="mailto:info@blueoceancorporation.com">info@blueoceancorporation.com</a>
            </div>
            <div class="lg:ml-auto">
              <p class="text-xl 2xl:text-2xl text-secondary pb-5">Stay Connected</p>
              <ul class="flex flex-row gap-1 lg:gap-2 flex-wrap">
                <li>
                  <a href="https://www.facebook.com/BlueOceanAcademy/" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1"><img src="{{ asset('assets/frontend/images/social-icons/facebook.svg') }}" class="w-full" /></a>
                </li>
                <li>
                  <a href="https://twitter.com/blueoceantrg?lang=en" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1"><img src="{{ asset('assets/frontend/images/social-icons/twitter.svg') }}" class="w-full" /></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/c/BlueOceanAcademy-corporate-training/featured" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1">
                    <img src="{{ asset('assets/frontend/images/social-icons/youtube.svg') }}" class="w-full" />
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/school/blue-ocean-management-training/mycompany/?viewAsMember=true" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1">
                    <img src="{{ asset('assets/frontend/images/social-icons/linkedin.svg') }}" class="w-full" />
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/blueoceandubai/" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1"><img src="{{ asset('assets/frontend/images/social-icons/instagram.svg') }}" class="w-full" /></a>
                </li>
                <li>
                  <a href="https://api.whatsapp.com/send/?phone=971521769265&text&type=phone_number&app_absent=0" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1">
                    <img src="{{ asset('assets/frontend/images/social-icons/whatsapp.svg') }}" class="w-full" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div>
            <h3 class="text-xl 2xl:text-2xl font-medium py-6">Contact Us</h3>
            <div>
              <!-- Tabs Navigation -->
              <div class="">
                <div class="location-tabs">
                  <ul
                    class="flex flex-wrap -mb-px text-sm font-medium text-center gap-5 pb-4"
                    data-tabs-toggle="#default-styled-tab-content"
                    data-tabs-active-classes="text-purple-600 hover:text-purple-600 dark:text-purple-500 dark:hover:text-purple-500 border-purple-600 dark:border-purple-500"
                    data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300"
                    id="locations-styled-tab1" data-tabs-toggle="#location-tab" role="tablist"
                  >
                    @if(isset($locations) && !empty($locations))
                      @foreach($locations as $location)
                        <li class="me-2" role="presentation">
                          <button id="{{ str_replace(' ', '-', $location->location_name) }}-styled-tab" data-tabs-target="#styled-{{ str_replace(' ', '-', $location->location_name) }}" type="button" role="tab"
                            aria-controls="styled-{{ str_replace(' ', '-', $location->location_name) }}" aria-selected="{{ !$loop->index ? 'true' : 'false' }}">
                            {{ $location->location_name }}
                          </button>
                        </li>
                      @endforeach
                    @endif
                  </ul>
                </div>
              </div>
              <!-- Tabs Content -->
              <div id="location-tab1">
                @if(isset($locations) && !empty($locations))
                  @foreach($locations as $location)
                    <div id="styled-{{ str_replace(' ', '-', $location->location_name) }}" class="{{ $loop->index ? 'hidden' : '' }}" role="tabpanel" aria-labelledby="{{ str_replace(' ', '-', $location->location_name) }}-styled-tab">
                      <div class="flex flex-col lg:flex-row bg-white text-black flex-wrap">
                        <div class="basis-[55%] locationtab-top">
                          <div class="flex flex-col lg:flex-row gap-4 py-4 pl-8 pr-0 h-full">
                            <div class="min-w-[150px]">
                              <h4 class="text-xl 2xl:text-4xl font-bold">{{ $location->location_name }}</h4>
                            </div>
                            <div>
                              <address class="text-sm 2xl:text-base not-italic">
                                <strong class="block">{{ $location->location_address }}</strong>{{ $location->location_landmark }}
                              </address>
                              @if($location->phone_no)
                                <strong class="text-sm 2xl:text-base">Ph: {{ $location->phone_no }}</strong>
                              @endif
                            </div>
                            <div class="min-w-[180px] mt-auto">
                              <a href="{{ route('general.contact.us') }}" class="btn primary-btn-outline text-sm 2xl:text-xl">
                                Location Map
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right-outline.svg') }}" />
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="basis-[45%] relative locationtab-bottom">
                          <img src="{{ asset('storage/locations/'.$location->image) }}" class="w-full object-fill" />
                        </div>
                      </div>
                    </div>
                  @endforeach
                @endif
              </div>
            </div>
          </div>
          <div class="flex flex-col lg:flex-row gap-5 justify-between py-6 2xl:py-8 text-center lg:text-left">
            <ul class="flex flex-row flex-wrap justify-center lg:justify-start">
              <li><a href="#" class="block pr-5 border-r">Site Map</a></li>
              <li><a href="{{ route('general.faq') }}" class="block pr-5 pl-5 border-r">FAQ</a></li>
              <li><a href="{{ route('general.terms.conditions') }}" class="block pr-5 pl-5 border-r">Terms & Conditions</a></li>
              <li><a href="{{ route('general.privacy.policy') }}" class="block pl-5">Privacy policy</a></li>
            </ul>
            <p>Blue Ocean Corporation © All Rights Reserved</p>
          </div>
        </div>
      </div>
      <div class="py-3 footer-bottom" id="fixed-footer">
        <div class="container">
          <ul class="flex flex-row text-black gap-4 lg:gap-4 xl:gap-8 2xl:gap-12 flex-wrap justify-center lg:justify-start">
            <li><a href="{{ route('general.about.us') }}">About Us</a></li>
            <li><a href="{{ route('general.home') }}">Explore</a></li>
            <li><a href="{{ route('general.about.us') }}">Blue Ocean Corporation</a></li>
            <li><a href="{{ route('blog.home') }}">News / Blogs</a></li>
            <li><a href="#">Recent Post</a></li>
            <li><a href="{{ route('general.careers') }}">Careers</a></li>
            <li><a href="{{ route('general.contact.us') }}">Contact</a></li>
          </ul>
        </div>
      </div>
    </footer>
    <!-- FOOTER SECTION ENDS HERE -->
    <style></style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <!-- Additional Scripts pushed from specific views -->
    @stack('scripts')
    <script src="{{ asset('assets/frontend/js/global-custom.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/auto-searchbar.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/nav.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
    <script>
      document.querySelectorAll(".main-list").forEach((listItem) => {
        const arrow = listItem.querySelector("span"); // the arrow span
        const submenu = listItem.querySelector(".submenu-box");

        if (arrow && submenu) {
          arrow.addEventListener("click", (e) => {
            e.preventDefault(); // prevent navigating if the arrow is inside <a>
            e.stopPropagation(); // stop it from triggering parent <a>

            // Toggle submenu visibility
            if (submenu.classList.contains("active")) {
              submenu.classList.remove("active");
            } else {
              document.querySelectorAll(".submenu-box").forEach((sub) => {
                sub.classList.remove("active");
              });
              submenu.classList.add("active");
            }
          });
        }
      });
      
      document.addEventListener("DOMContentLoaded", function () {
        const currentPath = window.location.pathname;

        if (currentPath === "/training") {
          // alert(currentPath);
          // Find the menu link with text "Training" and href "/training"
          const links = document.querySelectorAll('a[href="https://blueoceancorporation.com/training"]');

          links.forEach((link) => {
            if (link.textContent.trim().toLowerCase() === "training") {
              link.removeAttribute("href");
              link.setAttribute("id", "dropdownNavbarLink");
              const dropdown = document.getElementById("dropdownNavbar");
              if (dropdown) {
                dropdown.classList.add("hidden", "view");
              }
            }
          });
        }

        if (currentPath === "/conferences") {
          // Find the menu link with text "conferences" and href "/conferences"
          const links = document.querySelectorAll('a[href="https://blueoceancorporation.com/conferences"]');

          links.forEach((link) => {
            if (link.textContent.trim().toLowerCase() === "conferences") {
              link.removeAttribute("href");
              link.setAttribute("id", "dropdownNavbarLink2");
              const dropdown = document.getElementById("dropdownNavbar2");
              if (dropdown) {
                dropdown.classList.add("hidden", "view");
              }
            }
          });
        }
        if (currentPath === "/about-us") {
          // Find the menu link with text "about-us" and href "/about-us"
          const links = document.querySelectorAll('a[href="https://blueoceancorporation.com/about-us"]');
          links.forEach((link) => {
            // alert(link.textContent.trim().toLowerCase());
            if (link.textContent.trim().toLowerCase() === "about us") {
              link.removeAttribute("href");
              const dropdown = document.getElementById("dropdownNavbar3");
              if (dropdown) {
                dropdown.classList.add("hidden", "view");
              }
            }
          });
        }
      });
      
      // document.getElementById("london-hedqtr").addEventListener("click", function () {
      //     this.classList.toggle("is-active");
      //     document.getElementById("london-mapview").classList.toggle("show-map");
      // });
      // document.getElementById("dubai-hdqutr").addEventListener("click", function () {
      //     this.classList.toggle("is-active");
      //     document.getElementById("dubai-mapview").classList.toggle("show-map");
      // });

      document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".map-toggle-btn");

        buttons.forEach(function (btn) {
          btn.addEventListener("click", function () {
            const targetId = this.getAttribute("data-target");
            const map = document.getElementById(targetId);

            if (map) {
              this.classList.toggle("is-active");
              map.classList.toggle("hidden");

              // Update button text
              this.textContent = map.classList.contains("hidden") ? "View Map" : "Hide Map";
            }
          });
        });
      });
    
      window.addEventListener("scroll", function () {
        const header = document.getElementById("header-top");

        if (window.scrollY > 100) {
          header.classList.add("scrolled");
        } else {
          header.classList.remove("scrolled");
        }
      });
    
      const menuItems = document.querySelectorAll(".uni-has-submenu");

      // Open the first menu item by default
      if (menuItems.length > 0) {
        menuItems[0].classList.add("uni-active");
      }

      menuItems.forEach((item) => {
        item.addEventListener("click", function (e) {
          e.stopPropagation();

          // Remove 'uni-active' from all menu items
          menuItems.forEach((i) => i.classList.remove("uni-active"));

          // Add 'uni-active' only to the clicked one
          item.classList.add("uni-active");
        });
      });
    
      const footerbottom = document.querySelector(".footer-bottom");
      const awardsRecognition = document.querySelector(".ourObjectives");

      function handleScroll() {
        const scrollY = window.scrollY;
        const windowHeight = window.innerHeight;
        const documentHeight = document.documentElement.scrollHeight;

        const scrolledToBottom = scrollY + windowHeight >= documentHeight;

        // Add class "x" if scrolled 150px or more
        if (scrollY >= 300) {
          footerbottom.classList.add("view-bottom-footer");
        }

        // Remove class "x" if at bottom and successJourney exists
        if (scrolledToBottom && awardsRecognition) {
          footerbottom.classList.remove("view-bottom-footer");
        }
      }

      window.addEventListener("scroll", handleScroll);
   
      const gallery = document.querySelectorAll(".gallery-image img");
      const lightbox = document.querySelector(".lightbox");
      const lightboxImg = document.getElementById("lightbox-img");
      const close = document.querySelector(".close");
      const prev = document.querySelector(".prev");
      const next = document.querySelector(".next");

      let currentIndex = 0;

	  if(gallery && lightbox && lightboxImg){
      	function showImage(index) {
       	 lightboxImg.src = gallery[index].src;
        	currentIndex = index;
        	lightbox.style.display = "flex";
      	}

      	gallery.forEach((img, index) => {
        	img.addEventListener("click", () => showImage(index));
      	});

      	close.addEventListener("click", () => {
        	lightbox.style.display = "none";
      	});

      	prev.addEventListener("click", () => {
        	currentIndex = (currentIndex - 1 + gallery.length) % gallery.length;
        	showImage(currentIndex);
      	});

      next.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % gallery.length;
        showImage(currentIndex);
      });

      lightbox.addEventListener("click", (e) => {
        if (e.target === lightbox) lightbox.style.display = "none";
      });

      	document.addEventListener("keydown", (e) => {
        	if (e.key === "Escape") lightbox.style.display = "none";
        	if (e.key === "ArrowLeft") prev.click();
        	if (e.key === "ArrowRight") next.click();
      	});
      }
    </script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var grid = document.querySelector(".grider");

        var msnry = new Masonry(grid, {
          itemSelector: ".grid-item",
          columnWidth: ".grid-sizer",
          percentPosition: true,
        });

        imagesLoaded(grid).on("progress", function () {
          msnry.layout();
        });
      });
    
      document.addEventListener("DOMContentLoaded", () => {
        const items = document.querySelectorAll(".footer-list-item");

        items.forEach((item) => {
          const heading = item.querySelector(".footer-heading");
          const arrow = item.querySelector(".arrow");
          const menu = item.querySelector(".footer-menu-list");

          heading.addEventListener("click", () => {
            // Skip toggle on large screens
            if (window.innerWidth >= 1024) return;

            const isOpen = menu.style.maxHeight && menu.style.maxHeight !== "0px";

            if (isOpen) {
              menu.style.maxHeight = "0";
              arrow.style.transform = "rotate(-90deg)";
            } else {
              menu.style.maxHeight = menu.scrollHeight + "px";
              arrow.style.transform = "rotate(0deg)";
            }
          });
        });
      });
    
      document.addEventListener("DOMContentLoaded", function () {
        const searchIcon = document.getElementById("search-icon");
        const searchBox = document.querySelector(".search_box");

        if (searchIcon && searchBox) {
          searchIcon.addEventListener("click", function () {
            searchBox.classList.toggle("view_search");
          });
        }
      });
    </script>
  </body>
</html>