@extends('layouts.frontend.app')
@section('title', ' John Ellis Advisory Board Member - Blue Ocean Corporation')
@section('meta-description', 'John Ellis Blue Ocean Corporation Advisory Board Member: Expert guidance from distinguished leaders driving innovation & growth.')
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
              <a href="{{ route('general.advisory.board') }}" class="ms-1 text-sm font-medium text-[#1E1E1E]">Advisory Board</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">John Ellis</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="advisory-board-section pt-32 lg:pt-10 pb-10 pt-4 pb-2 relative">
    <div class="diveder-angle top-10 2xl:top-0">
<div class="relative adv-mobile relative">
            <img src="{{ asset('assets/frontend/images/advisory/john-ellis.png') }}" class="absolute bottom-0 w-[70%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>
      <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="container">
      <div class="max-w-[1075px] lg:pb-10">
        <h2 class="text-xl lg:text-4xl text-primary font-semibold">
          John Ellis
        </h2>
        <p class="text-lg lg:text-[22px] text-[#454545] font-medium">
          Chief Operating Officer <br />
          Blue Ocean Corporation 
          <br />
         
        </p>
      </div>
      <div class="flex flex-col lg:flex-row gap-5 lg:gap-10 py-3 lg:py-5 new-clip-advisor bd-member-details">
        <div class="basis-1/2 flex flex-col gap-2 pl-7 pt-7 lg:gap-5 lg:pl-14 lg:pt-28">
          <div class="mb-12">
            <p class="text-lg lg:text-[22px] text-black font-medium">
              John Ellis is a senior leader in aviation, possessing specialized knowledge in investment for the development of the airline, aerospace, and hospitality sectors. As the Chief Operating Officer at Blue Ocean Corporation, he
              brings a wealth of expertise in investment, operational excellence, and strategic growth, positioning the organization at the forefront of global business solutions.
            </p>
          </div>
        </div>
        <div class="basis-1/2 flex flex-col justify-between gap-10">
          <div class="relative desk-img">
            <img src="{{ asset('assets/frontend/images/advisory/john-ellis.png') }}" class="absolute bottom-0 w-[70%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>
        </div>
      </div>
      <div class="lg:pb-10">
        <div class="mb-4 lg:mb-12">
          <p class="text-lg lg:text-[22px] text-black font-medium">
            With a career dedicated to empowering professionals and businesses, John has delivered motivational talks, seminars, and training programs to over <strong>40,000 individuals worldwide</strong>. His extensive list of engagements
            includes prestigious organizations such as
            <strong>Abu Dhabi Travel Agents Association, Aramco Saudi Arabia, British Airways, Disney, Emirates Airlines, Farnborough Aerospace, Cleveland Clinic, Housing.com-India, Honda, Kia Motors, Mercedes, and Qatar Airways</strong>.
          </p>
        </div>
        <div class="mb-4 lg:mb-12">
          <p class="text-lg lg:text-[22px] text-black font-medium">
            A qualified business coach and executive mentor, he has successfully guided numerous organizations and individuals to achieve sustainable growth and excellence in the business world. His strategic insights and leadership expertise have earned him Board Advisor roles at several prominent companies, including ARC AeroSystems, Aviation Jobsearch, Blue Ocean Corporation (UAE), FlyBig (India), Small World Airlines, Supreme Jets, UK Capital Investments, UK Aerospace Investments, UK Energy Investments, and UK Health and Leisure Investments.

            </strong>
          </p>
        </div>
        <div class="mb-4 lg:mb-12">
          
        </div>
        <div class="mb-4 lg:mb-12">
          <p class="text-lg lg:text-[22px] text-black font-medium">
           In addition to his advisory roles, he is a published author of several books that explore key aspects of business and leadership. He has also been a featured guest on major television networks such as BBC and Sky TV, where he has shared expert commentary on a wide range of business and economic issues.

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
                  <li><strong class="">Chief Operating Officer</strong> Blue Ocean Corporation</li>
                  <li><strong class="">Chief Operating Officer</strong> Small World Airlines</li>
                  <li><strong class="">Chief Executive Officer</strong> Ellis Capital Partners</li>
                  <li><strong class="">Chief Operating Officer</strong> ARC AeroSystems</li>
                  <li><strong class="">Founder </strong> UK Aerospace Investments</li>
                  <li><strong class="">Chief Executive Officer</strong> Middle East Aerospace</li>
                  <li><strong class="">Commercial Director</strong> Fujairah International Airport</li>
                  <li><strong class="">Business Development Director</strong> Farnborough Aerospace Consortium</li>
                </ul>
              </div>
              <div class="bg-[#F9F9F9] py-8 pl-14 pr-5">
                <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-6 leading-[normal]">
                  Certifications:
                </h3>
                <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
                  <li><strong class="">Airline In-Flight Firefighting Instructor</strong> UK Civil Aviation Authority</li>
                  <li><strong class="">NLP Life and Business Coach</strong> Bournemouth University Training</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="basis-[43%]">
            <div class="bg-white flex flex-col gap-5 pb-5">
              <div class="bg-[#F9F9F9] py-8 pl-14 pr-5">
                <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-6 leading-[normal]">
                  Qualifications:
                </h3>
                <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
                  <li><strong class="">Aviation Economics and Finance </strong> London School of Economics and Finance</li>
                  <li><strong class="">HR Management</strong> American Certification Institute</li>
                </ul>
              </div>

              <div class="bg-[#F9F9F9] py-8 pl-14 pr-5">
                <h3 class="text-xl lg:text-[28px] text-[var(--color-dark-bg-blue)] font-medium mb-6 leading-[normal]">
                  Published Works:
                </h3>
                <ul class="text-lg lg:text-[22px] text-black list-disc pl-5">
                  <li>The 28 Golden Rules of Personal and Business Success</li>
                  <li>NLP Techniques for Incredible Success</li>
                  <li>Understanding UK Export Finance</li>
                  <li>Problem Solving with GROW Techniques</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-4 mb-4 lg:mt-8 lg:mb-8">
        <p class="text-lg lg:text-[22px] text-black">
With his extensive expertise, visionary leadership, and commitment to excellence, John Ellis, as COO of Blue Ocean Corporation, continues to drive transformative growth and innovation in the professional training and consulting sector.
        </p>
      </div>
    </div>
  </section>
@endsection