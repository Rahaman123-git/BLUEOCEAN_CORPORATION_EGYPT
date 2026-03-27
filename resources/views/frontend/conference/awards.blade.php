@extends('layouts.frontend.app')
@section('title', 'Blue Ocean Conferences')
@section('meta-description', 'Blue Ocean hosts premier conferences: IPSC, IHRC, CXO, BOWLD. Thought leadership meets innovation.')
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-and-bowld-home.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/conference-bowld-responsive.css') }}">
@endpush

@section('content')
  <section class="hero-banner-section">
    <div class="hero-banner-wrap">
      <picture>
        <source media="(min-width:770px)" srcset="{{ asset('assets/frontend/images/latest-added/conf-award.png') }}" />
        <img src="{{ asset('assets/frontend/images/latest-added/conf-award.png') }}" alt="banner image" class="w-full banner-img" />
      </picture>
      <div class="abs-award-banner">
        <div class="container">
          <h1><small>Gain Visibility,</small> Build Connections</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="awarding" style="background-image: url({{ asset('assets/frontend/images/latest-added/award-trg.png') }});">
    <div class="awarding-inner" style="background-image: url({{ asset('assets/frontend/images/consulting/devider-angle.webp') }});">
      <div class="container">
        <div class="empowering-text">
          <div class="">
            <h2 class="hdn-two">
              <small>Honoring Excellence, Inspiring Innovation</small>
              Shine on the Global Stage!
            </h2>
            <h6>Celebrate excellence in procurement and supply chain!</h6>
            <p>Our awards honor outstanding individuals and corporations driving innovation and leadership in the industry.</p>
            <p class="pt-6"><strong>Register now to showcase your achievements at the International Procurement and Supply Chain Conference and be recognized on a global stage!</strong></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div>
    <div class="tab-sec-award sm-space">
      <div class="container">
        <div>
          <ul
            class="flex flex-wrap text-sm font-medium text-center gap-[2px] md:flex-nowrap tablist-links wht"
            id="default-styled-tab"
            data-tabs-toggle="#default-styled-tab-content"
            data-tabs-active-classes="actv-tab"
            data-tabs-inactive-classes=""
            role="tablist"
          >
            <li role="presentation" class="w-1/3">
              <button class="inline-block w-full p-3" id="courses-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Individual Award Categories</button>
            </li>

            <li class="me-2" role="presentation">
              <button class="inline-block p-3" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Corporate Award Categories</button>
            </li>
          </ul>
        </div>
        <div id="default-styled-tab-content">
          <div class="bg-[#F2F2F2] p-8 bg-gray-100 tab-inner-content" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
            <div id="accordion-collapse" data-accordion="collapse">
              <h2 id="accordion-collapse-heading-1">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-1"
                  aria-expanded="true"
                  aria-controls="accordion-collapse-body-1"
                >
                  <span>Excellence in Sustainable Manufacturing</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-1" class="bg-accord" aria-labelledby="accordion-collapse-heading-1">
                <div class="p-5 border-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>
              <h2 id="accordion-collapse-heading-2">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-2"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-2"
                >
                  <span>Supply Chain Resilience in Crisis Management</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-2" class="bg-accord" aria-labelledby="accordion-collapse-heading-2">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>
              <h2 id="accordion-collapse-heading-3">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-3"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-3"
                >
                  <span>Sustainable Supply Chain of the Year</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-3" class="bg-accord" aria-labelledby="accordion-collapse-heading-3">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-4">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-4"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-4"
                >
                  <span>Supply Chain Innovator</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-4" class="bg-accord" aria-labelledby="accordion-collapse-heading-4">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-5">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-5"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-5"
                >
                  <span>Supply Chain Resilience Champion</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-5" class="bg-accord" aria-labelledby="accordion-collapse-heading-5">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-6">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-6"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-6"
                >
                  <span>Green Supply Chain Advocate</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-6" class="bg-accord" aria-labelledby="accordion-collapse-heading-6">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-7">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-7"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-7"
                >
                  <span>Emerging Leader in Procurement</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-7" class="bg-accord" aria-labelledby="accordion-collapse-heading-7">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-8">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-8"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-8"
                >
                  <span>Procurement Transformation Leader</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-8" class="bg-accord" aria-labelledby="accordion-collapse-heading-8">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-9">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-9"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-9"
                >
                  <span>Woman Leader in Logistics</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-9" class="bg-accord" aria-labelledby="accordion-collapse-heading-9">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div id="accordion-collapse2" data-accordion="collapse2">
              <h2 id="accordion-collapse-heading-10">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 rounded-t-xl focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-10"
                  aria-expanded="true"
                  aria-controls="accordion-collapse-body-10"
                >
                  <span>Excellence in Sustainable Manufacturing</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-10" class="bg-accord" aria-labelledby="accordion-collapse-heading-10">
                <div class="p-5 border-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>
              <h2 id="accordion-collapse-heading-11">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-11"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-11"
                >
                  <span>Supply Chain Resilience in Crisis Management</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-11" class="bg-accord" aria-labelledby="accordion-collapse-heading-11">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>
              <h2 id="accordion-collapse-heading-12">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-12"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-12"
                >
                  <span>Sustainable Supply Chain of the Year</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-12" class="bg-accord" aria-labelledby="accordion-collapse-heading-12">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-13">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-13"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-13"
                >
                  <span>Supply Chain Innovator</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-13" class="bg-accord" aria-labelledby="accordion-collapse-heading-13">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-14">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-14"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-14"
                >
                  <span>Supply Chain Resilience Champion</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-14" class="bg-accord" aria-labelledby="accordion-collapse-heading-14">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-15">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-15"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-15"
                >
                  <span>Green Supply Chain Advocate</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-15" class="bg-accord" aria-labelledby="accordion-collapse-heading-15">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-16">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-16"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-16"
                >
                  <span>Emerging Leader in Procurement</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-16" class="bg-accord" aria-labelledby="accordion-collapse-heading-16">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-17">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-17"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-17"
                >
                  <span>Procurement Transformation Leader</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-17" class="bg-accord" aria-labelledby="accordion-collapse-heading-17">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>

              <h2 id="accordion-collapse-heading-18">
                <button
                  type="button"
                  class="flex items-center justify-between w-full p-5 font-medium rtl:text-right text-gray-500 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 dark:border-gray-700 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3"
                  data-accordion-target="#accordion-collapse-body-18"
                  aria-expanded="false"
                  aria-controls="accordion-collapse-body-18"
                >
                  <span>Woman Leader in Logistics</span>
                  <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                  </svg>
                </button>
              </h2>
              <div id="accordion-collapse-body-18" class="bg-accord" aria-labelledby="accordion-collapse-heading-18">
                <div class="p-5">
                  <p class="mb-2 text-gray-500 dark:text-gray-400">
                    This award honours an organization that has excelled in implementing sustainable manufacturing practices within its supply chain. Nominees must showcase their achievements in reducing environmental impact, improving
                    resource efficiency, and promoting sustainability throughout the manufacturing process, setting new standards of excellence in sustainable manufacturing.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="btn-wrap mt-12">
          <a href="javascript:void(0)" data-modal-target="default-modal" data-modal-toggle="default-modal" class="btn primary-btn">Apply Now <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" /></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="register-form">
      <h3 class="heading-third">Registration Form</h3>
      <div class="register-form-inner">
        <aside style="background-image: url('{{ asset('assets/frontend/images/latest-added/form-sec-bg.png') }});">
          <img src="{{ asset('assets/frontend/images/latest-added/form-sec-bg.png') }}" class="w-full" alt="" />
        </aside>

        <div class="form-sec">
          <form class="">
            <h4 class="pb-2 font-bold text-gray-700">Registration form</h4>
            <div class="flex gap-5">
              <div class="basis-1/2">
                <div class="mb-3">
                  <label for="firstname" class="block mb-2 text-sm font-medium dark:text-white">First Name*</label>
                  <input
                    type="text"
                    id="firstname"
                    class="bg-gray-50 border border-gray-300 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="First Name*"
                    required
                  />
                </div>
              </div>
              <div class="basis-1/2">
                <div class="mb-3">
                  <label for="lastname" class="block mb-2 text-sm font-medium dark:text-white">Last Name*</label>
                  <input
                    type="text"
                    id="lastname"
                    class="bg-gray-50 border border-gray-300 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Last Name*"
                    required
                  />
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email" class="block mb-2 text-sm font-medium dark:text-white">Email*</label>
              <input
                type="email"
                id="email"
                class="bg-gray-50 border border-gray-300 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="example@mail.com"
                required
              />
            </div>

            <div class="flex">
              <div class="w-full">
                <label for="phone" class="block mb-2 text-sm font-medium dark:text-white">Phone No</label>
              </div>
            </div>
            <div class="flex gap-5">
              <div class="basis-1/2">
                <div class="mb-3">
                  <input
                    type="text"
                    id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="United Aeab Emirates"
                    required
                  />
                </div>
              </div>
              <div class="basis-1/2">
                <div class="mb-3">
                  <input
                    type="text"
                    id="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="+971  12 345 6789"
                    required
                  />
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="comp-name" class="block mb-2 text-sm font-medium dark:text-white">Company Name*</label>
              <input
                type="text"
                id="comp-name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Company Name*"
                required
              />
            </div>

            <div>
              <label for="comp-name" class="block mb-2 text-sm font-medium dark:text-white">Award Type*</label>
              <fieldset>
                <div class="flex gap-5">
                  <div class="basis-1/3">
                    <div class="flex items-center mb-3">
                      <input
                        id="country-option-1"
                        type="radio"
                        name="countries"
                        value="Individual Categories"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                        checked
                      />
                      <label for="country-option-1" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Individual Categories
                      </label>
                    </div>
                  </div>
                  <div class="basis-1/3">
                    <div class="flex items-center mb-3">
                      <input
                        id="country-option-2"
                        type="radio"
                        name="countries"
                        value="Corporate Categories"
                        class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600"
                      />
                      <label for="country-option-2" class="block ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                        Corporate Categories
                      </label>
                    </div>
                  </div>
                </div>
              </fieldset>
            </div>

            <div class="mb-3">
              <label for="comp-name" class="block mb-2 text-sm font-medium dark:text-white">Individual Categories*</label>
              <input
                type="text"
                id="comp-name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-none focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Company Name*"
                required
              />
            </div>

            <div class="mb-3">
              <label for="comp-name" class="block mb-2 text-sm font-medium text-gray-900">Awards - Self Appraisal Report * </label>
              <textarea
                id="message"
                rows="4"
                class="block p-1.5 w-full text-sm text-gray-900 bg-gray-50 rounded-none border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Description"
              ></textarea>
            </div>

            <div class="flex items-start mb-10">
              <div class="flex items-center h-5">
                <input
                  id="terms"
                  type="checkbox"
                  value=""
                  class="w-4 ms-2 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800"
                  required=""
                />
              </div>
              <label for="terms" class="ml-4 text-sm font-medium text-gray-900 dark:text-gray-100">
                I agree to receive other information from Blue Ocean Corporation
              </label>
            </div>
            <button
              type="submit"
              class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-none text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Section award Starts Here 2 -->
  <section class="past-award">
    <div class="container">
      <h3>Past Award Recipients</h3>
      <ul class="list-award">
        <li><img src="{{ asset('assets/frontend/images/latest-added/past-award-one.png') }}" class="w-full" alt="" /></li>
        <li><img src="{{ asset('assets/frontend/images/latest-added/past-award-two.png') }}" class="w-full" alt="" /></li>
        <li><img src="{{ asset('assets/frontend/images/latest-added/past-award-three.png') }}" class="w-full" alt="" /></li>
        <li><img src="{{ asset('assets/frontend/images/latest-added/past-award-four.png') }}" class="w-full" alt="" /></li>
        <li><img src="{{ asset('assets/frontend/images/latest-added/past-award-five.png') }}" class="w-full" alt="" /></li>
        <li><img src="{{ asset('assets/frontend/images/latest-added/past-award-six.png') }}" class="w-full" alt="" /></li>
      </ul>
      <a href="#" class="award-link">IPSC - Mumbai 2024 View More <img src="{{ asset('assets/frontend/images/consulting/arrow-right-blue.webp') }}" alt="" /></a>
      <ul class="list-award">
        <li><img src="{{ asset('assets/frontend/images/latest-added/ipsc-award-one.png') }}" class="w-full" alt="" /></li>
        <li><img src="{{ asset('assets/frontend/images/latest-added/ipsc-award-two.png') }}" class="w-full" alt="" /></li>
        <li><img src="{{ asset('assets/frontend/images/latest-added/ipsc-award-three.png') }}" class="w-full" alt="" /></li>
        <li><img src="{{ asset('assets/frontend/images/latest-added/ipsc-award-four.png') }}" class="w-full" alt="" /></li>
        <li><img src="{{ asset('assets/frontend/images/latest-added/ipsc-award-five.png') }}" class="w-full" alt="" /></li>
        <li><img src="{{ asset('assets/frontend/images/latest-added/ipsc-award-six.png') }}" class="w-full" alt="" /></li>
      </ul>
      <a href="#" class="award-link">IPSC - Mumbai 2024 View More <img src="{{ asset('assets/frontend/images/consulting/arrow-right-blue.webp') }}" alt="" /></a>
    </div>
  </section>
@endsection