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
    <meta property="og:site_name" content="Blue Ocean Corporation" />
    <meta property="og:url" content="@yield('og-url', url()->current())" />
    <meta property="og:title" content="@yield('og-title', trim($__env->yieldContent('title', 'Blue Ocean Corporation')))" />
    <meta property="og:description" content="@yield('og-description', trim($__env->yieldContent('meta-description', 'Blue Ocean Corporation')))" />
    <meta property="og:image" content="@yield('og-image', asset('assets/frontend/images/default-og.jpg'))" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    
    <!-- Twitter (use name=) -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="@yield('twitter-url', url()->current())" />
    <meta name="twitter:title" content="@yield('twitter-title', trim($__env->yieldContent('title', 'Blue Ocean Corporation')))" />
    <meta name="twitter:description" content="@yield('twitter-description', trim($__env->yieldContent('meta-description', 'Blue Ocean Corporation')))" />
    <meta name="twitter:image" content="@yield('twitter-image', asset('assets/frontend/images/default-og.jpg'))" />
<style>
/* =========================
   HEADER (sticky)
========================= */
.site-header{
  position: sticky;
  position: -webkit-sticky;
  top: 0;
  z-index: 1000;
  background: #fff;
  border-bottom: 1px solid #e8e8ef;
  will-change: transform, box-shadow, background;
  overflow: visible !important; /* prevent dropdown clipping */
}

/* Shadow when stuck */
.site-header.is-stuck{
  box-shadow: 0 8px 20px rgba(7,13,65,.08);
}

/* Optional hide on scroll (JS toggles) */
.site-header.is-hidden{
  transform: translateY(-100%);
  transition: transform .22s ease;
}

/* Header layout */
.header-bar{
  height: 88px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  overflow: visible !important;
}

/* Compact height on scroll */
.site-header.is-compact .header-bar{
  height: 70px;
  transition: height .18s ease;
}

/* Sticky fallback (if you toggle html.no-sticky via JS) */
html.no-sticky .site-header{
  position: fixed;
  top: 0; left: 0; right: 0;
}
.header-spacer{ display: none; }
html.no-sticky .header-spacer{
  display: block;
  height: var(--header-h, 88px);
}

/* Left cluster */
.left-group{
  display: flex;
  align-items: center;
  gap: 12px;
}

/* Logo */
.logo img,
.drawer-logo img{
  display: block;
  height: 40px;
}

/* Make ONLY the header container fluid/full-width */
.site-header .container.header-bar{
  max-width: none !important;
  width: 100% !important;
  padding-left: 24px;
  padding-right: 24px;
}
@media (min-width:1280px){
  .site-header .container.header-bar{
    padding-left: 32px;
    padding-right: 32px;
  }
}

/* Safety: avoid clipping while sticky */
.site-header, .header-bar, .container, .main-menu{
  overflow: visible !important;
}

/* =========================
   DESKTOP MAIN MENU + DROPDOWNS
========================= */
.main-menu{
  list-style: none;
  padding: 0;
  margin: 0;
  gap: 24px;
  align-items: center;
  display: none; /* mobile default */
}

.menu-item{ position: relative; }

.menu-item > a,
.menu-item > button{
  display: inline-flex;
  align-items: center;
  gap: 6px;
  padding: 8px 6px;
  color: #0b0b1a;
  text-decoration: none;
  border-radius: 6px;
}

.menu-item > a:hover,
.menu-item > button:hover{
  background: #f5f7ff;
}

/* Level-1 dropdown */
.menu-item.has-dropdown > .dropdown{
  position: absolute;
  top: 100%;
  left: 0;
  min-width: 260px;
  background: #0C1895;
  color: #fff;
  border-radius: 10px;
  box-shadow: 0 16px 32px rgba(7,13,65,.3);
  padding: 10px;
  display: none;
  z-index: 1000;
}

.menu-item.has-dropdown:hover > .dropdown,
.menu-item.has-dropdown:focus-within > .dropdown{
  display: block;
}

.dropdown-list{
  list-style: none;
  margin: 0;
  padding: 0;
}

.dropdown-list > li > a{
  display: block;
  padding: 10px 12px;
  color: #fff;
  text-decoration: none;
  border-radius: 8px;
}
.dropdown-list > li > a:hover{
  background: rgba(255,255,255,.12);
}

/* Level-2 flyout */
.dropdown-list > li.has-sub{
  position: relative;
  padding-right: 10px;
}
.dropdown-list > li.has-sub::after{
  content:"";
  position:absolute;
  top:-8px;
  bottom:-8px;
  left:100%;
  width:14px;
}

.dropdown-list > li.has-sub > .sub{
  position: absolute;
  top: -8px;
  left: calc(100% - 8px);
  min-width: 300px;
  background: #0C1895;
  color: #fff;
  border-radius: 10px;
  box-shadow: 0 16px 32px rgba(7,13,65,.3);
  padding: 8px 0;
  display: none;
  z-index: 1001;
}
.dropdown-list > li.has-sub:hover > .sub,
.dropdown-list > li.has-sub > .sub:hover{
  display: block;
}

.sub .sub-list{
  list-style: none;
  margin: 0;
  padding: 0;
}
.sub .sub-list > li > a{
  display: block;
  padding: 10px 14px;
  color: #fff;
  text-decoration: none;
  border-bottom: 1px solid rgba(255,255,255,.12);
}
.sub .sub-list > li:last-child > a{ border-bottom: 0; }
.sub .sub-list > li > a:hover{
  background: rgba(255,255,255,.12);
  border-radius: 6px;
}

.dropdown-list > li.has-sub > .sub-heading-link{
  position: relative;
  padding-right: 28px;
}
.dropdown-list > li.has-sub > .sub-heading-link::after{
  content:"›";
  position:absolute;
  right:12px;
  top:50%;
  transform: translateY(-50%);
  opacity:.8;
}

/* Down arrow for top-level dropdown parents (desktop) */
@media (min-width:1024px){
  .menu-item.has-dropdown > a{
    position: relative;
    padding-right: 16px;
  }
  .menu-item.has-dropdown > a::after{
    content:"";
    width:10px;
    height:10px;
    background: currentColor;
    -webkit-mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path d="M2 4l4 4 4-4" fill="none" stroke="%23000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>') center/contain no-repeat;
            mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path d="M2 4l4 4 4-4" fill="none" stroke="%23000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>') center/contain no-repeat;
    margin-left: 6px;
    opacity: .75;
    transition: transform .18s ease, opacity .18s ease;
  }
  .menu-item.has-dropdown:hover > a::after,
  .menu-item.has-dropdown:focus-within > a::after{
    transform: translateY(1px);
    opacity: 1;
  }
}

/* =========================
   BURGER
========================= */
.burger{
  width: 40px;
  height: 40px;
  display: inline-grid;
  place-content: center;
  gap: 4px;
  border: 1px solid #d8d8e8;
  background: #fff;
  border-radius: 8px;
  cursor: pointer;
}
.burger-line{
  width: 20px;
  height: 2px;
  background: #0b0b1a;
}

/* =========================
   SCRIM + DRAWER
========================= */
.scrim{
  position: fixed;
  inset: 0;
  background: rgba(2,9,84,.5);
  backdrop-filter: saturate(120%) blur(1px);
  z-index: 1100;
}
.scrim[hidden]{ display:none !important; }

.side-drawer{
  position: fixed;
  top: 0;
  left: 0;
  height: 100dvh;
  width: min(88vw, 360px);
  background: #020954;
  color: #fff;
  translate: -100% 0;
  transition: translate 240ms ease;
  z-index: 1200;
  display: flex;
  flex-direction: column;
}
.side-drawer.open{ translate: 0 0; }

/* Optional right drawer */
.side-drawer.drawer-right{ left:auto; right:0; translate: 100% 0; }
.side-drawer.drawer-right.open{ translate: 0 0; }

.drawer-header{
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 14px 16px;
  border-bottom: 1px solid rgba(255,255,255,.15);
}
.drawer-close{
  font-size: 28px;
  line-height: 1;
  background: transparent;
  border: 0;
  color: #fff;
  cursor: pointer;
}
.drawer-nav{
  overflow: auto;
  padding: 10px 8px 28px;
}
.drawer-list{
  list-style: none;
  margin: 0;
  padding: 0;
}
.drawer-item{
  border-bottom: 1px solid rgba(255,255,255,.08);
}

.drawer-link,
.drawer-button{
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 8px;
  padding: 14px 12px;
  color: #fff;
  text-decoration: none;
  font: 500 15px/1.2 system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;
  background: transparent;
  border: 0;
  width: 100%;
  text-align: left;
  cursor: pointer;
}

.chev{
  display: inline-block;
  transition: transform .2s ease;
}
.drawer-item.open .chev{ transform: rotate(90deg); }

/* Accordion (level 1) */
.drawer-submenu{
  display: grid;
  grid-template-rows: 0fr;
  transition: grid-template-rows .2s ease;
}
.drawer-item.open > .drawer-submenu{
  grid-template-rows: 1fr;
}
.drawer-submenu > div{ overflow: hidden; }

/* Nested accordion group (level 2) */
.drawer-subheading{
  width: 100%;
  background: transparent;
  border: 0;
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 12px 22px;
  text-align: left;
  cursor: pointer;
}
.drawer-submenu li.open > .drawer-subheading .chev{
  transform: rotate(90deg);
}

.drawer-inner-group{
  display: none;
  background: rgba(255,255,255,.05);
}
.drawer-submenu li.open > .drawer-inner-group{ display: block; }

.drawer-inner-group ul{
  list-style: none;
  margin: 0;
  padding: 0;
}
.drawer-inner-group li > a{
  display: block;
  padding: 10px 28px 10px 32px;
  color: #e6ebff;
  text-decoration: none;
  border-bottom: 1px solid rgba(255,255,255,.12);
}
.drawer-inner-group li:last-child > a{ border-bottom: 0; }
.drawer-inner-group li > a:hover{
  color: #fff;
  background: rgba(255,255,255,.08);
  border-radius: 6px;
}

/* Lock body when drawer open (toggle this class on body) */
.body-lock{ overflow: hidden; }

/* =========================
   RESPONSIVE RULES
========================= */

/* Default: desktop baseline (if you want classic behavior, uncomment these)
@media (min-width:1024px){
  .burger{ display:none; }
  .main-menu{ display:flex; }
  .side-drawer, .scrim{ display:none; }
}
*/

/* YOUR CURRENT REQUIREMENT:
   On desktop, burger + main menu visible, drawer not hidden, scrim only hidden via [hidden]
*/
@media (min-width:1024px){
  .burger{ display:inline-grid !important; }
  .main-menu{ display:flex !important; }
  .side-drawer{ display:flex !important; }
  .scrim{ display:block !important; }
}

/* =========================
   PAGE SPACING
========================= */
main#main{
  padding-top: 0px !important;
}
.drawer-submenu a {
    display: block;
    padding: 10px 16px 10px 22px;
    color: #e6ebff;
    text-decoration: none;
}
.drawer-submenu a:hover,.drawer-subheading:hover {
  color: #fff;
  background: rgba(255,255,255,0.06);
  border-radius: 6px;
}
/* =========================
   SUBSCROLL (Training flyout)
========================= */
.subscroll{
  min-height: 700px;
  max-height: 700px;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;

  background: #fff;
  box-shadow: 0 6px 18px rgba(0,0,0,0.08);
  z-index: 50;
}

.subscroll > .sub-list,
.subscroll .new{
  margin: 0;
  padding: .5rem 0;
  list-style: none;
}

.subscroll::-webkit-scrollbar{ width: 10px; }
.subscroll::-webkit-scrollbar-thumb{
  border-radius: 8px;
  background: rgba(0,0,0,0.15);
}

@media (max-width: 767.98px){
  .subscroll{
    max-height: none;
    min-height: 0;
    overflow: visible;
    box-shadow: none;
  }
}

</style>
    <!-- Page Style -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/sidebar-menu.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/footer.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
<link rel="stylesheet" href="{{ asset('assets/frontend/css/style-javinGlobal.css') }}" />
    <script>window.$zoho=window.$zoho || {};$zoho.salesiq=$zoho.salesiq||{ready:function(){}}</script><script id="zsiqscript" src="https://salesiq.zohopublic.com/widget?wc=siq6368e5b6e5959b4bb9613f5c60ace65ddaa85df3bea9e50e319debdd801c42f4fa468dd3173f4e0eff1a327168b0ef861800a10efc4696b70e796db19b0ca222" defer></script>
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
<style>
 

  </style>
  <body>
    <header id="site-header" class="site-header">
  <nav class="container header-bar" aria-label="Main">
    <!-- Left: Burger + Logo -->
    <div class="left-group">
      <button class="burger" id="burger" aria-label="Open menu" aria-controls="side-drawer" aria-expanded="false">
        <span class="burger-line"></span>
        <span class="burger-line"></span>
        <span class="burger-line"></span>
      </button>
      <a href="{{ route('general.home') }}" class="logo" aria-label="Blue Ocean">
        <img src="{{ asset('assets/frontend/images/boc-logo-final.svg') }}" alt="Blue Ocean Corporation" />
      </a>
    </div>

    <!-- Right: Main menu -->
    <ul class="main-menu" id="main-menu">
      <li class="menu-item">
        <a href="{{ route('general.home') }}">Home</a>
      </li>

      <li class="menu-item has-dropdown">
        <!-- Parent has href initially (JS will convert to a button and move this href into submenu as “Home”) -->
        <a href="{{ route('consulting.home') }}">Consulting</a>
        <div class="dropdown">
          <ul class="dropdown-list">
            <!-- “Home” for Consulting will be auto-prepended here by JS -->
            <li><a href="{{ route('consulting.precision.strategy') }}">Precision Strategy</a></li>
            <li><a href="{{ route('consulting.strategic.impact') }}">Strategic Impact</a></li>
           
          </ul>
        </div>
      </li>

     

     <li class="menu-item has-dropdown">
          {{-- Keep href; menu JS converts parent to button and injects "Home" --}}
          <a href="{{ route('training.home') }}">Training</a>
        
          <div class="dropdown">
            <ul class="dropdown-list">
        
              {{-- Group: Corporate Training --}}
              <li class="has-sub">
                <a href="{{ route('training.corporate') }}" class="sub-heading-link">Corporate Training</a>
                <div class="sub subscroll">
                  <ul class="sub-list">
                    @if(isset($corporateCategories) && count($corporateCategories))
                      @foreach($corporateCategories as $corporateCategory)
                        <li>
                          <a href="{{ route('training.corporate.program', ['category' => $corporateCategory->name_en]) }}">
                            {{ $corporateCategory->name_en }}
                          </a>
                        </li>
                      @endforeach
                    @endif
                  </ul>
                </div>
              </li>
        
              {{-- Group: Certification Programs --}}
              <li class="has-sub">
                <a href="{{ route('training.certification.program') }}" class="sub-heading-link">Certification Programs</a>
                <div class="sub">
                  <ul class="sub-list">
                    @if(isset($certificationCategories) && count($certificationCategories))
                      @foreach($certificationCategories as $certificationCategory)
                        <li>
                          <a href="{{ route('training.certification.program', ['category' => $certificationCategory->name_en]) }}">
                            {{ $certificationCategory->name_en }}
                          </a>
                        </li>
                      @endforeach
                    @endif
                  </ul>
                </div>
              </li>
        
              {{-- Group: Webinar / Seminar --}}
              <li 
                @if(isset($seminars) && count($seminars))
              class="has-sub"
                @endif
              >
                <a href="{{ route('training.webinar.seminar') }}" class="sub-heading-link">Webinar / Seminar</a>
                 @if(isset($seminars) && count($seminars))
                <div class="sub">
                  <ul class="sub-list">
                   
                      @foreach($seminars as $seminar)
                        <li>
                          <a href="{{ route('training.webinar.seminar.register', ['slug' => $seminar->slug]) }}">
                            {{ $seminar->seminar_title_initial ? $seminar->seminar_title_initial.' ' : '' }}{{ $seminar->seminar_title }}
                          </a>
                        </li>
                      @endforeach
                    
                  </ul>
                  
                </div>
                 @endif
              </li>
        
              {{-- Group: Affiliations --}}
              <li class="has-sub">
                <a href="{{ route('training.affliations.expanded') }}" class="sub-heading-link">Affiliations</a>
                <div class="sub">
                  <ul class="sub-list">
                    @if(isset($affiliations) && count($affiliations))
                      @foreach($affiliations as $aff)
                        <li>
                          {{-- if you navigate by certification slug instead, adjust here --}}
                          <a href="{{ route('training.certification.program', ['certification' => $aff->short_name_en ?? $aff->name_en]) }}">
                            {{ $aff->short_name_en ?? $aff->name_en }}
                          </a>
                        </li>
                      @endforeach
                    @else
                      <li><a href="{{ route('training.affliations') }}">All Affiliations</a></li>
                    @endif
                  </ul>
                </div>
              </li>
        
              {{-- Optional future group:
              <li class="has-sub">
                <a href="{{ route('training.home') }}#styled-scholarship" class="sub-heading-link">Scholarship Program</a>
                <div class="sub">
                  <ul class="sub-list">
                    <li><a href="{{ route('training.home') }}#styled-scholarship">Overview</a></li>
                  </ul>
                </div>
              </li>
              --}}
        
            </ul>
          </div>
        </li>

      <li class="menu-item has-dropdown">
        <a href="{{ route('conferences.home') }}">Conferences</a>
        <div class="dropdown">
          <ul class="dropdown-list">
            <li><a href="{{ route('conferences.ipsc') }}">IPSC</a></li>
            <li><a href="{{ route('conferences.ihrc') }}">IHRC</a></li>
            <li><a href="{{ route('conferences.cxo') }}">CXO</a></li>
            <li><a href="{{ route('conferences.bowld') }}">BOWLD</a></li>
          </ul>
        </div>
      </li>

      <li class="menu-item has-dropdown">
        <a href="{{ route('general.about.us') }}">About Us</a>
        <div class="dropdown">
          <ul class="dropdown-list">
            <li><a href="{{ route('general.about.us') }}">Our Company</a></li>
            <li><a href="{{ route('general.advisory.board') }}">Advisory Board</a></li>
            <li><a href="{{ route('general.careers') }}" >Making Waves</a></li>
            <li><a href="{{ route('general.news.insight') }}">News</a></li>
            <li><a href="{{ route('blog.home') }}">Blogs</a></li>
            <li><a href="{{ route('general.awards') }}">Awards</a></li>
            <li><a href="{{ route('general.boc.life') }}">Life @ Blue Ocean</a></li>
          </ul>
        </div>
      </li>

      <li class="menu-item">
        <a href="https://careers.blueoceancorporation.com/jobs/Careers" target="_blank" rel="noopener">Careers</a>
      </li>
    </ul>
    
  </nav>

  <!-- Off-canvas overlay -->
  <div class="scrim" id="scrim" hidden></div>

  <!-- Off-canvas drawer (hamburger menu) -->
  <aside class="side-drawer" id="side-drawer" aria-hidden="true">
    <div class="drawer-header">
      <button class="drawer-close" id="drawer-close" aria-label="Close menu">&times;</button>
      <a href="{{ route('general.home') }}" class="drawer-logo" aria-label="Blue Ocean">
        <img src="{{ asset('assets/frontend/images/brand-logo-white.svg') }}" alt="Blue Ocean" />
      </a>
    </div>
    <nav class="drawer-nav" aria-label="Mobile">
      <ul class="drawer-list" id="drawer-list"><!-- JS will clone main-menu into here --></ul>
    </nav>
  </aside>
  <a href="https://blueoceancorporation.in/boc-life" class="life-at-blue absolute">
          Life @ Blue Ocean
        </a>
      @if(isset($headerEvents) && $headerEvents->count())
<section class="events-section">
  <div class="events-wrap">
    <div class="events-ticker" aria-label="Latest events ticker">
      <div class="events-track">

        {{-- Row 1 --}}
        <div class="events-row">
          @foreach($headerEvents as $e)
            <a class="tick" href="{{ $e['url'] }}">
              <span class="tick-date">{{ $e['date']->format('d M Y') }}</span>
              <span class="tick-name">{{ $e['type'] }} : {{ $e['title'] }}</span>
              @if(!empty($e['location']))
                <span class="tick-pill">{{ $e['location'] }}</span>
              @endif
              <span class="h-cta">Register</span>
            </a>
          @endforeach
        </div>

        {{-- Row 2 (duplicate for seamless loop) --}}
        <div class="events-row" aria-hidden="true">
          @foreach($headerEvents as $e)
            <a class="tick" href="{{ $e['url'] }}" tabindex="-1">
              <span class="tick-date">{{ $e['date']->format('d M Y') }}</span>
              <span class="tick-name">{{ $e['type'] }} : {{ $e['title'] }}</span>
              @if(!empty($e['location']))
                <span class="tick-pill">{{ $e['location'] }}</span>
              @endif
              <span class="h-cta">Register</span>
            </a>
          @endforeach
        </div>

      </div>
    </div>
  </div>
</section>
@endif





  
     
<style>
  .events-section{
    /*padding: 28px 0;
    background: #f6f7fb;*/
  }
  .events-wrap{
    width: 100%;
    margin: 0 auto;
    padding: 0 16px;
  }
  .events-head{
    display:flex;
    align-items: baseline;
    justify-content: space-between;
    gap: 12px;
    margin-bottom: 14px;
  }
  .events-title{
    margin: 0;
    font-size: 26px;
    font-weight: 700;
    color: #0b0b1a;
  }
  .events-all{
    font-size: 14px;
    text-decoration: none;
    color: #0c1895;
    font-weight: 600;
  }

  /* Ticker */
  .events-ticker{
    position: relative;
    overflow: hidden;
    border-radius: 14px;
    background: #ffffff;
    border: 1px solid #e9eaf2;
   /* padding: 10px 0;
    margin-bottom: 18px;*/
  }
  .events-track{
  display:flex;
  width: max-content;
  will-change: transform;
  transform: translate3d(0,0,0);
  animation: scroll 22s linear infinite;
}



  .events-row{
    display:flex;
    gap: 10px;
    padding: 0 10px;
  }
  .tick{
    display:flex;
    align-items:center;
    gap: 10px;
    padding: 10px 12px;
    border-radius: 12px;
    text-decoration:none;
    color: #0b0b1a;
    border: 1px solid #f0f1f6;
    background: #fbfbfe;
    white-space: nowrap;
  }
  .tick:hover{ border-color:#dfe2f4; background:#f7f8ff; }
  .tick-date{
    font-size: 12px;
    font-weight: 700;
    color:#0c1895;
  }
  .tick-name{
    font-size: 14px;
    font-weight: 600;
  }
  .tick-pill{
    font-size: 12px;
    font-weight: 700;
    padding: 4px 8px;
    border-radius: 999px;
    background:#eef1ff;
    color:#0c1895;
  }
.h-cta{
  font-size:12px;
  font-weight:800;
  padding:6px 10px;
  border-radius:999px;
  background:#fff;
  color:#020954;
}
  /* Pause animation on hover */
  .events-ticker:hover .events-track{
    animation-play-state: paused;
  }

 @keyframes scroll{
  from { transform: translate3d(0,0,0); }
  to   { transform: translate3d(-50%,0,0); }
}

 
  /* Responsive */
  @media (max-width: 900px){
    .event-card{ grid-column: span 12; }
  }
	/* ================================
   FOOTER FLEX SECTION
================================ */

.footer-flex {
  max-width: 1440px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 60px;
}

/* Each block */
.footer-flex .footer-listing {
  display: flex;
  flex-direction: column;
}

/* Heading */
.footer-flex .footer-heading {
  font-size: 22px;
  font-weight: 600;
  color: #ffffff;
  margin-bottom: 25px;
}

/* Menu list */
.footer-flex .footer-menu-list {
  list-style: none;
  padding: 0;
  margin: 0;
	font-weight: normal;
}

/* Menu items */
.footer-flex .footer-menu-list li {
  margin-bottom: 2px;
}

/* Links */
.footer-flex .footer-menu-list li a {
  color: #fff;
  font-size: 16px;
  text-decoration: none;
  transition: 0.3s ease;
  line-height: 1.6;
  display: inline-block;
}

.footer-flex .footer-menu-list li a:hover {
  color: rgb(255 255 255/var(--tw-text-opacity));
  transform: translateX(4px);
}

/* ================================
   RESPONSIVE
================================ */

@media (max-width: 1200px) {
  .footer-flex {
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
  }
}

@media (max-width: 768px) {


  .footer-flex .footer-heading {
    font-size: 18px;
  }

  .footer-flex .footer-menu-list li a {
    font-size: 15px;
  }
}
/* =========================
   MOBILE ACCORDION
========================= */

@media (max-width: 768px) {

  .footer-flex {
    grid-template-columns: 1fr;
    gap: 0;
  }

  .footer-flex .footer-listing {
    border-bottom: 1px solid rgba(255,255,255,0.2);
    padding: 14px 0;
  }

  .footer-flex .footer-heading {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 18px;
    margin-bottom: 0;
    cursor: pointer;
  }

  .footer-flex .footer-menu-list {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.4s ease;
  }

  .footer-flex .footer-listing.active .footer-menu-list {
    max-height: 500px; /* enough height */
    margin-top: 15px;
  }

  /* Arrow rotate */
  .footer-flex .arrow {
    transition: transform 0.3s ease;
  }

  .footer-flex .footer-listing.active .arrow {
    transform: rotate(0deg);
  }
} 
</style>  
</header>
    <main id="main">
      @yield('content')
    </main>

    <!-- FOOTER SECTION STARTS HERE -->
    <footer id="footer">
      <div class="bg-[#020954] text-white pt-14 mobile relative">
        <div class="footer-leftangle">
          <img src="{{ asset('assets/frontend/images/footer-left-angle.png') }}" class="absolute left-0 top-1/2 -translate-y-1/2" />
        </div>
        <div class="container">
			
			
		<div class="footer-flex">
            <div class="footer-listing">
              <h2 class="footer-heading font-medium  mmb flex justify-between items-center cursor-pointer">
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
			  
            <div class="footer-listing">
              <h2 class="footer-heading font-medium  flex justify-between items-center cursor-pointer">
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
			  
            <div class="footer-listing">
              <h2 class="footer-heading font-medium  flex justify-between items-center cursor-pointer">
                Blue Ocean Corporation
                <span class="arrow transition-transform duration-300 rotate-[-90deg] block lg:hidden">&#9662;</span>
              </h2>
              <ul class="footer-menu-list transition-all duration-300 overflow-hidden max-h-0 lg:max-h-[999px]">
                <li><a href="https://careers.blueoceancorporation.in/jobs/Careers" class="text-base block pb-4 lg:pb-4">Careers</a></li>
                <li><a href="{{ route('general.news.insight') }}" class="text-base block pb-4 lg:pb-4">News</a></li>
                <li><a href="{{ route('general.boc.life') }}" class="text-base block pb-4 lg:pb-4">Life @ Blue Ocean</a></li>
                <li><a href="#" class="text-base block pb-4 lg:pb-4">Site Map</a></li>
              </ul>
            </div>
			  
            @if($recentblogs)
              <div class="footer-listing">
                <h2 class="footer-heading font-medium  flex justify-between items-center cursor-pointer">Recent Post <span class="arrow transition-transform duration-300 rotate-[-90deg] block lg:hidden">&#9662;</span></h2>
                <ul class="footer-menu-list transition-all duration-300 overflow-hidden max-h-0 lg:max-h-[999px]">
                  @foreach($recentblogs as $blog)
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
              <a class="text-base 2xl:text-xl font-medium" href="mailto:info@blueoceanacademyegypt.com">info@blueoceanacademyegypt.com</a>
            </div>
            <div class="lg:ml-auto">
              <p class="text-xl 2xl:text-2xl text-secondary pb-5">Stay Connected</p>
              <ul class="flex flex-row gap-1 lg:gap-2 flex-wrap">
                <li>
                  <a href="https://facebook.com/blueoceancorporationegypt" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1"><img src="{{ asset('assets/frontend/images/social-icons/facebook.svg') }}" class="w-full" /></a>
                </li>
                <li>
                  <a href="https://x.com/bocorporationeg" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1"><img src="{{ asset('assets/frontend/images/social-icons/twitter.svg') }}" class="w-full" /></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/c/BlueOceanAcademy-corporate-training/featured" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1">
                    <img src="{{ asset('assets/frontend/images/social-icons/youtube.svg') }}" class="w-full" />
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/company/blueoceancorporationegypt" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1">
                    <img src="{{ asset('assets/frontend/images/social-icons/linkedin.svg') }}" class="w-full" />
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/blueoceancorporationegypt" class="w-8 h-8 flex items-center justify-center bg-white rounded-md p-1"><img src="{{ asset('assets/frontend/images/social-icons/instagram.svg') }}" class="w-full" /></a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <!-- Additional Scripts pushed from specific views -->
    @stack('scripts')
    <script src="{{ asset('assets/frontend/js/global-custom.js') }}"></script>

    <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
   
<script>
document.addEventListener('DOMContentLoaded', () => {
  const burger     = document.getElementById('burger');
  const scrim      = document.getElementById('scrim');
  const drawer     = document.getElementById('side-drawer');
  const closeBtn   = document.getElementById('drawer-close');
  const drawerList = document.getElementById('drawer-list');
  const mainMenu   = document.getElementById('main-menu');
  const header     = document.getElementById('site-header');

  /* ---------- Sticky / compact ---------- */
  const SCROLL_COMPACT = 64;
  const onScroll = () => {
    const y = window.scrollY || document.documentElement.scrollTop;
    header.classList.toggle('is-stuck', y > 0);
    header.classList.toggle('is-compact', y > SCROLL_COMPACT);
  };
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });

  /* ---------- Drawer open/close ---------- */
  function openDrawer(){
    if (!drawer) return;
    drawer.classList.add('open');
    drawer.setAttribute('aria-hidden', 'false');
    burger && burger.setAttribute('aria-expanded', 'true');
    if (scrim) scrim.hidden = false;
    document.body.classList.add('body-lock');
  }
  function closeDrawer(){
    if (!drawer) return;
    drawer.classList.remove('open');
    drawer.setAttribute('aria-hidden', 'true');
    burger && burger.setAttribute('aria-expanded', 'false');
    if (scrim) scrim.hidden = true;
    document.body.classList.remove('body-lock');
  }

  burger   && burger.addEventListener('click', openDrawer);
  closeBtn && closeBtn.addEventListener('click', closeDrawer);
  scrim    && scrim.addEventListener('click', closeDrawer);
  document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeDrawer(); });

  // Close on any link click inside the drawer
  drawer && drawer.addEventListener('click', (e) => {
    const link = e.target.closest('a[href]');
    if (link) closeDrawer();
  });

  /* ---------- Clone desktop menu into drawer, add "Overview" where useful ---------- */
  const sameHref = (a, b) => {
    if (!a || !b) return false;
    return String(a).replace(/\/+$/, '') === String(b).replace(/\/+$/, '');
  };

  if (mainMenu && drawerList){
    drawerList.innerHTML = '';

    mainMenu.querySelectorAll(':scope > li').forEach((srcLi) => {
      const li = document.createElement('li');
      li.className = 'drawer-item';

      const hasDropdown = !!srcLi.querySelector(':scope > .dropdown');
      const topA        = srcLi.querySelector(':scope > a[href]');
      const topHref     = topA?.getAttribute('href') || null;
      const topText     = (topA?.textContent || srcLi.textContent || 'Menu').trim();

      if (hasDropdown){
        // Top heading button
        const btn = document.createElement('button');
        btn.className = 'drawer-button';
        btn.type = 'button';
        btn.setAttribute('aria-expanded', 'false');
        btn.innerHTML = `<span>${topText}</span><span class="chev">›</span>`;
        li.appendChild(btn);

        // Collapsible container
        const wrap  = document.createElement('div');
        wrap.className = 'drawer-submenu';
        const inner = document.createElement('div');
        const ul    = document.createElement('ul');

        // Section "Overview" linking to parent
        if (topHref){
          const ovLi = document.createElement('li');
          const ovA  = document.createElement('a');
          ovA.href = topHref;
          ovA.textContent = 'Overview';
          ovLi.appendChild(ovA);
          ul.appendChild(ovLi);
        }

        // Copy first-level items from desktop dropdown
        const srcList = srcLi.querySelector(':scope > .dropdown .dropdown-list');
        if (srcList){
          srcList.querySelectorAll(':scope > li').forEach((level1) => {
            if (level1.classList.contains('has-sub')){
              // Group with nested list
              const groupLi = document.createElement('li');

              const headingLink = level1.querySelector(':scope > a.sub-heading-link');
              const headingText = headingLink ? headingLink.textContent.trim() : 'Section';
              const headingHref = headingLink ? headingLink.getAttribute('href') : null;

              const subBtn = document.createElement('button');
              subBtn.className = 'drawer-subheading';
              subBtn.type = 'button';
              subBtn.setAttribute('aria-expanded', 'false');
              subBtn.innerHTML = `<span>${headingText}</span><span class="chev">›</span>`;

              const innerGroup = document.createElement('div');
              innerGroup.className = 'drawer-inner-group';
              const innerUl = document.createElement('ul');

              if (headingHref){
                const gOv = document.createElement('li');
                const gOvA = document.createElement('a');
                gOvA.href = headingHref;
                gOvA.textContent = 'Overview';
                gOv.appendChild(gOvA);
                innerUl.appendChild(gOv);
              }

              const subList = level1.querySelector(':scope > .sub .sub-list');
              if (subList){
                subList.querySelectorAll(':scope > li > a[href]').forEach((a, idx) => {
                  const href = a.getAttribute('href');
                  const text = a.textContent.trim();
                  if (idx === 0 && headingHref && sameHref(href, headingHref)) return; // avoid dup with Overview
                  const liSub = document.createElement('li');
                  const clone = document.createElement('a');
                  clone.href = href;
                  clone.textContent = text;
                  liSub.appendChild(clone);
                  innerUl.appendChild(liSub);
                });
              }

              groupLi.appendChild(subBtn);
              groupLi.appendChild(innerGroup);
              innerGroup.appendChild(innerUl);
              ul.appendChild(groupLi);

            } else {
              // Simple first-level link
              const a = level1.querySelector(':scope > a[href]');
              if (!a) return;
              const href = a.getAttribute('href');
              const text = a.textContent.trim();

              const firstHref = ul.firstElementChild?.querySelector('a')?.getAttribute('href');
              if (firstHref && sameHref(href, firstHref)) return; // avoid dup with Overview

              const liL1 = document.createElement('li');
              const link = document.createElement('a');
              link.href = href;
              link.textContent = text;
              liL1.appendChild(link);
              ul.appendChild(liL1);
            }
          });
        }

        inner.appendChild(ul);
        wrap.appendChild(inner);
        li.appendChild(wrap);

      } else {
        // Plain top-level link
        const a = document.createElement('a');
        a.className = 'drawer-link';
        a.href = topHref || '#';
        a.textContent = topText || 'Link';
        li.appendChild(a);
      }

      drawerList.appendChild(li);
    });
  }

  /* ---------- Accordion behavior via delegation ---------- */
  const closeTopLevelSiblings = (currentLi) => {
    if (!currentLi?.parentElement) return;
    [...currentLi.parentElement.children].forEach(sib => {
      if (sib !== currentLi) {
        sib.classList.remove('open');
        const btn = sib.querySelector(':scope > .drawer-button');
        if (btn) btn.setAttribute('aria-expanded', 'false');
        sib.querySelectorAll('.drawer-subheading[aria-expanded="true"]').forEach(s => s.setAttribute('aria-expanded','false'));
        sib.querySelectorAll('li.open').forEach(li => li.classList.remove('open'));
      }
    });
  };

  const closeNestedSiblings = (parentLi) => {
    const ul = parentLi?.parentElement;
    if (!ul) return;
    [...ul.children].forEach(sib => {
      if (sib !== parentLi) {
        sib.classList.remove('open');
        const subBtn = sib.querySelector(':scope > .drawer-subheading');
        if (subBtn) subBtn.setAttribute('aria-expanded','false');
      }
    });
  };

  if (drawerList){
    drawerList.addEventListener('click', (e) => {
      // Top-level toggle
      const topBtn = e.target.closest('.drawer-button');
      if (topBtn && drawerList.contains(topBtn)) {
        const li = topBtn.closest('.drawer-item');
        const willOpen = !li.classList.contains('open');
        li.classList.toggle('open', willOpen);
        topBtn.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
        if (willOpen) closeTopLevelSiblings(li);
        return;
      }

      // Nested toggle
      const subBtn = e.target.closest('.drawer-subheading');
      if (subBtn && drawerList.contains(subBtn)) {
        const groupLi = subBtn.closest('li');
        const willOpen = !groupLi.classList.contains('open');
        groupLi.classList.toggle('open', willOpen);
        subBtn.setAttribute('aria-expanded', willOpen ? 'true' : 'false');
        if (willOpen) closeNestedSiblings(groupLi);
        return;
      }
    });
  }
});
</script>
  </body>
</html>