@extends('layouts.frontend.app')
@section('title', ' VS Ramachandran Advisory Board - Blue Ocean Corporation')
@section('meta-description', 'VS Ramachandran Blue Ocean Corporation Advisory Board Member: Expert guidance from distinguished leaders driving innovation & growth.')
@section('content')
  <div class="breadcrumb py-3">
    <div class="container">
      <nav class="flex" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse flex-wrap">
          <li class="inline-flex items-center">
            <a href="{{ route('general.about.us') }}" class="inline-flex items-center text-sm font-medium text-[#9A9A9A]">
              <img src="{{ asset('assets/frontend/images/icons/home.svg') }}" alt="home icon" class="w-5 h-5 mr-2" />
              About Us
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <a href="{{ route('general.advisiry.board') }}" class="ms-1 text-sm font-medium text-[#1E1E1E]">Advisory Board</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">VS Ramachandran</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="advisory-board-section pt-32 lg:pt-10 pb-10 pt-4 pb-2 relative">
    <div class="diveder-angle top-10 2xl:top-0">
      <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="container">
      <div class="max-w-[1075px] lg:pb-10">
<div class="adv-mobile relative">
            <img src="{{ asset('assets/frontend/images/advisory/ramachandran.png') }}" class="absolute bottom-0 w-[70%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>
        <h2 class="text-xl lg:text-4xl text-primary font-semibold">
          VS Ramachandran
        </h2>
        <p class="text-lg lg:text-[22px] text-[#454545] font-medium">
          Chief Financial Officer <br />
          Blue Ocean Corporation
          <br />
        </p>
      </div>
      <div class="flex flex-col lg:flex-row gap-5 lg:gap-10 py-3 lg:py-5 new-clip-advisor bd-member-details">
        <div class="basis-1/2 flex flex-col gap-5 pl-0 lg:pl-14 lg:pt-28">
          <div class="mb-4 lg:mb-12">
            <p class="text-lg lg:text-[22px] text-black font-medium">
              VS Ramachandran is an accomplished <strong>Chartered Accountant</strong> with over <strong>32 years of extensive experience</strong> in <strong>finance, auditing, corporate planning, and quality management</strong> across
              diverse industries, including <strong>Oil & Gas, Aviation, Ferro Alloys, Education, and Public Accounting</strong>. His expertise extends to
              <strong>internal audits, computer audits, fraud examination, and cost management</strong>, making him a versatile leader in financial strategy and governance.
            </p>
          </div>
        </div>
        <div class="basis-1/2 flex flex-col justify-between gap-10">
          <div class="relative desk-img">
            <img src="{{ asset('assets/frontend/images/advisory/ramachandran.png') }}" class="absolute bottom-0 w-[70%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>
        </div>
      </div>
      <div class="lg:pb-10">
        <div class="mb-12">
          <p class="text-lg lg:text-[22px] text-black font-medium">
            A key advocate for organizational excellence, Ramachandran has played a
            <strong>
              pivotal role as a Team Leader for the prestigious Dubai Quality Award Program
            </strong>
            for over <strong>12 years</strong>. His contributions have significantly enhanced process improvements and helped multiple organizations achieve <strong>ISO certifications</strong> and operational excellence.
          </p>
        </div>
        <div class="mb-4 lg:mb-12">
          <p class="text-lg lg:text-[22px] text-black font-medium">
            As a <strong>seasoned public speaker</strong>, he has delivered over <strong>1,000 hours of training </strong>and addressed prestigious conferences and seminars in
            <strong>Barcelona, Singapore, Kuala Lumpur, Bangkok, Bengaluru, and Dubai</strong>. His ability to merge financial acumen with quality management principles has made him a sought-after expert in his field.
          </p>
        </div>
      </div>
      <div class="py-4">
        <div class="flex flex-col lg:flex-row gap-5">
          <div class="basis-[57%]">
            <div class="bg-white flex flex-col gap-5 pb-5">
              <div class="bg-[#F9F9F9] py-8 pl-14 pr-5">
                <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-6 leading-[normal]">
                  Professional Experience:
                </h3>
                <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
                  <li><strong class="">Chief Financial Officer </strong> Blue Ocean Corporation</li>
                  <li><strong class="">Executive Director</strong>TUF Commodities DMCC</li>
                  <li><strong class="">Head of Corporate Planning & Quality</strong> Emarat</li>
                  <li><strong class="">Senior Internal Auditor</strong> Bahrain Petroleum Company</li>
                </ul>
              </div>
              <div class="bg-[#F9F9F9] py-8 pl-14 pr-5">
                <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-6 leading-[normal]">Academic Qualifications:</h3>
                <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
                  <li><strong class="">ACA, Audit and Accounts</strong> Institute of Chartered Accountants of India</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="basis-[43%]">
            <div class="bg-white flex flex-col gap-5 pb-5">
              <div class="bg-[#F9F9F9] py-8 pl-14 pr-5">
                <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-6 leading-[normal]">Professional Certifications</h3>
                <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
                  <li><strong class="">Certified Fraud Examiner (CFE)</strong> Association of Certified Fraud Examiners, USA</li>
                  <li><strong class="">Certified Information Systems Auditor (CISA)</strong> ISACA, Illinois, USA</li>
                  <li><strong class="">Certified Internal Auditor (CIA)</strong> Institute of Internal Auditors, USA</li>
                  <li><strong class="">Management Accountant (CMA) </strong> (Institute of Cost Accountants of India)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4 mb-4 lg:mt-8 lg:mb-8">
        <p class="text-lg lg:text-[22px] text-black">
          With his deep expertise in financial strategy, risk assessment, and quality assurance, VS Ramachandran continues to drive excellence and innovation in financial management, ensuring sustainable growth and governance at Blue Ocean
          Corporation.
        </p>
      </div>
    </div>
  </section>
@endsection