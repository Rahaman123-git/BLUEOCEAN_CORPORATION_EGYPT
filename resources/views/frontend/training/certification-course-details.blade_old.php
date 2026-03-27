@extends('layouts.frontend.app')
@section('title', $course->course_title_en)
@section('meta-description', $course->course_meta_details)

@push('styles')
  <!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/css/intlTelInput.min.css">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style-last.css') }}">
@endpush

@section('content')
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
          <li>
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <a href="{{ route('training.certification.program') }}" class="ms-1 text-sm font-medium text-[#9A9A9A]">Certification Training</a>
            </div>
          </li>
          <li>
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <a href="javascript:void(0)" class="ms-1 text-sm font-medium text-[#1E1E1E]">{{ $course->course_title_en }}</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <!-- <span class="px-1 text-[#1E1E1E]">/</span> -->
              <span class="text-sm font-medium text-[#1E1E1E]">| {{ $course->course_short_title_en }}</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="page-heading-main overflow-hidden">
    <div class="container">
      <div class="flex relative">
        <div class="w-full for-mob-fifty">
          <h1 class="page-heading">Certification Programs</h1>
        </div>
        <div class="w-full for-mob-fifty">
          <div class="top-right-text absolute top-0"></div>
        </div>
      </div>
    </div>
  </div>

  <section class="page-banner-section">
    <div class="page-banner">
      <div class="image-half">
        <img src="{{ asset('assets/frontend/images/course/traning-course-banner.png') }}" alt="Banner" />
      </div>
      <div class="page-banner-text">
        <div class="container">
          <div class="page-banner-wrap mobile-gap">
            <div class="w-1/2"></div>
            <div class="w-1/2 course-name-tranning">
              <div class="flex lg:flex-nowrap course-top-box items-start">
                @if($course->affiliation)
                  <div class="mr-3 details-logo">
                    {{--<img src="{{ asset('assets/frontend/images/course/affiliate-icon.png') }}" alt="" width="" />--}}
                    <img src="{{ asset('storage/courses/affiliations/'.$course->affiliation->image) }}" alt="" width="" />
                  </div>
                @endif
                <div class="course-subtext">
                  @if($course->affiliation)
                    <h4>{{ $course->affiliation->name_en }}</h4>
                  @endif
                  <h2 class="text-primary mt-4 font-bold leading-[normal]">
                    {{ $course->course_short_title_en }}
                    <span class="block font-semibold">{{ $course->course_title_en }}</span>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="course-tab-section">
    <div class="container">
      <div class="border-b-2 border-secondary">
        <h2 class="course-title-mobile">Course Details</h2>
          <div id="select-wraper-tab">


        <select id="mobile-tabview" style="display: none;"></select>
      </div>
        <ul
          class="flex flex-wrap text-sm font-medium text-center gap-[2px] ml-5 lg:ml-5 2xl:ml-10"
          id="course-detail-styled-tab"
          data-tabs-toggle="#course-detail-styled-tab-content"
          data-tabs-active-classes="text-white bg-secondary"
          data-tabs-inactive-classes="text-gray bg-[#EBEBEB]"
          role="tablist"
        >
          <li role="presentation">
            <button class="inline-block p-4 font-medium" id="Courses-styled-tab-1" data-tabs-target="#styled-Courses-1" type="button" role="tab" aria-controls="Courses-1" aria-selected="false">Course Overview</button>
          </li>
          <li role="presentation">
            <button class="inline-block p-4 font-medium" id="Courses-styled-tab-2" data-tabs-target="#styled-Courses-2" type="button" role="tab" aria-controls="Courses-2" aria-selected="false">Course Outline</button>
          </li>
          <li role="presentation">
            <button class="inline-block p-4 font-medium" id="Courses-styled-tab-3" data-tabs-target="#styled-Courses-3" type="button" role="tab" aria-controls="Courses-3" aria-selected="false">Course Schedule</button>
          </li>
          @if($course->affiliation)
            <li role="presentation">
              <button class="inline-block p-4 font-medium" id="Courses-styled-tab-4" data-tabs-target="#styled-Courses-4" type="button" role="tab" aria-controls="Courses-4" aria-selected="false">Association / Affiliation</button>
            </li>
          @endif
          <li role="presentation">
            <button class="inline-block p-4 font-medium" id="Courses-styled-tab-5" data-tabs-target="#styled-Courses-5" type="button" role="tab" aria-controls="Courses-5" aria-selected="false">Testimonials</button>
          </li>
          <li role="presentation">
            <button class="inline-block p-4 font-medium" id="Courses-styled-tab-6" data-tabs-target="#styled-Courses-6" type="button" role="tab" aria-controls="Courses-6" aria-selected="false">FAQ</button>
          </li>
        </ul>
      </div>
      <div id="course-detail-styled-tab-content">
        <div class="hidden" id="styled-Courses-1" role="tabpanel" aria-labelledby="Courses-tab-1">
          <div class="relative">
            <img src="{{ asset('assets/frontend/images/concept-element.png') }}" class="absolute -left-[16px] top-[calc(38%-20px)] hidden lg:block w-[80px]" />
            <div class="bg-[#F6F6F6] p-5 lg:p-5 2xl:p-10">
              <div>
                <div class="flex items-center pt-4">
                  <div class="bg-[#013F81] text-white pr-10 py-4 pl-4 basis-full lg:basis-[60%]" style="clip-path: polygon(0 0, 95% 0, 100% 100%, 0 100%);">
                    <h2 class="font-medium text-base lg:text-xl">{{ $course->course_short_title_en }}</h2>
                    <p class="text-base lg:text-xl">{{ $course->course_title_en }}</p>
                  </div>
                  <div class="flex items-center gap-2 p-0 lg:p-4 w-0 lg:basis-[40%] -mt-[10px]"></div>
                </div>
                <div class="flex flex-col lg:flex-row bg-white">
                  <div class="basis-[60%] pr-5 lg:pr-10 py-5 pl-5 lg:pl-10 flex flex-col">
                    <h3 class="text-lg lg:text-2xl font-bold text-primary mb-4">Course Methodology</h3>
                    <p class="text-base lg:text-lg font-medium text-primary">
                      {{ $course->course_methodology_en }}
                    </p>
                  </div>
                  <div class="basis-[40%]" style="clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 25% 100%, 0 0);">
                    <img src="{{ asset('storage/courses/courses/'.$course->course_image) }}" class="w-full h-full object-cover" />
                  </div>
                </div>
              </div>
              @if($course->course_objectives_en)
                @php
                  $courseObjectives = extractHtmlContent($course->course_objectives_en);
                @endphp
                <div class="pl-5 lg:pl-10 my-10">
                  <h4 class="text-lg lg:text-2xl font-bold text-primary">Course Objectives</h4>
                  @if(isset($courseObjectives['uppertext']) && $courseObjectives['uppertext'])
                    <p class="text-black text-base lg:text-xl font-medium">{{$courseObjectives['uppertext']}}</p>
                  @endif
                  @if(isset($courseObjectives['bulletpoints']) && $courseObjectives['bulletpoints'])
                    <ul class="text-black text-base lg:text-xl list-disc pl-5 mt-5">
                      @foreach($courseObjectives['bulletpoints'] as $cObjectives)
                        <li>{!! $cObjectives !!}</li>
                      @endforeach
                    </ul>
                  @endif
                </div>
              @endif
              <div class="lg:pl-10 my-10">
                <div class="flex flex-col lg:flex-row">
                  <div class="bg-[#006AB5] text-white py-4 pl-5 pr-10 basis-[40%]">
                    <h5 class="text-lg lg:text-2xl font-medium mb-5">Target Audience</h5>
                    <p class="text-lg lg:text-2xl">
                      @php
                        if(str_contains($course->course_target_audience_en, $course->course_short_title_en)){
                          $courseTargetAudience = str_replace($course->course_short_title_en, '<strong>'.str_replace('-', ' - ', $course->course_short_title_en).'</strong>', $course->course_target_audience_en);
                        }else{
                          $spacedShortTitle = str_replace('-', ' - ', $course->course_short_title_en);
                          if(str_contains($course->course_target_audience_en, $spacedShortTitle)){
                            $courseTargetAudience = str_replace($spacedShortTitle, '<strong>'.$spacedShortTitle.'</strong>', $course->course_target_audience_en);
                          }else{
                            $courseTargetAudience = $course->course_target_audience_en;
                          }
                        }
                      @endphp
                      {!! $courseTargetAudience !!}
                    </p>
                  </div>
                  @if($course->course_target_competencies_en)
                    <div class="text-black bg-white py-4 pl-5 pr-10 basis-[60%]">
                      <h5 class="text-lg lg:text-2xl font-medium mb-5">Target Competencies</h5>
                      <ul class="lg:columns-2 list-disc pl-5 text-sec">
                        @php
                          $courseTargetCompetencies = extractHtmlContent($course->course_target_competencies_en);
                        @endphp
                        @if(isset($courseTargetCompetencies['bulletpoints']) && $courseTargetCompetencies['bulletpoints'])
                          @foreach($courseTargetCompetencies['bulletpoints'] as $cTargetCompetencies)
                            <li><p class="text-black">{!! $cTargetCompetencies !!}</p></li>
                          @endforeach
                        @endif
                      </ul>
                    </div>
                  @endif
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden relative" id="styled-Courses-2" role="tabpanel" aria-labelledby="Courses-tab-2">
          <div class="mb-4 shadow-lg lg:pl-5 pt-5">
            @if($course->course_short_title_en)
              @php 
                $courseModules = explode('-', $course->course_short_title_en);
              @endphp
              <ul
                class="flex flex-wrap gap-5 font-medium text-center"
                id="course-styled-tab"
                data-tabs-toggle="#course-styled-tab-content"
                data-tabs-active-classes="text-primary border-primary"
                data-tabs-inactive-classes="text-[#5B5B5B] border-transparent"
                role="tablist"
              >
                @if($courseModules)
                  @foreach($courseModules as $courseModule)
                    <li class="me-2" role="presentation">
                      <button class="inline-block p-[10px] text-base lg:text-xl border-b-4" id="{{ $courseModule }}-styled-tab" data-tabs-target="#styled-{{ $courseModule }}" type="button" role="tab" aria-controls="{{ $courseModule }}" aria-selected="false">{{ $courseModule }}</button>
                    </li>
                  @endforeach
                @endif
              </ul>
            @endif
          </div>
          <div id="course-styled-tab-content">
            @if($courseModules)
              @php 
                $courseModulesTitles = extractModuleFullName($course->course_title_en);
              @endphp
              @foreach($courseModules as $cKey => $courseModule)
                <div id="styled-{{ $courseModule }}">
                  <div class="relative">
                    <img src="{{ asset('assets/frontend/images/concept-element.png') }}" class="absolute -left-[16px] top-[300px] hidden lg:block w-[80px]" />
                    <div class="bg-[#F6F6F6] p-5 lg:p-5 2xl:p-10">
                      <div>
                        <div class="flex items-center pt-4">
                          <div class="bg-[#013F81] text-white pr-10 py-4 pl-4 basis-full lg:basis-[60%]" style="clip-path: polygon(0 0, 95% 0, 100% 100%, 0 100%);">
                            <h2 class="font-medium text-base lg:text-xl">{{ $courseModule }}</h2>
                            <p class="text-base lg:text-xl">{{ $courseModulesTitles[$cKey] ?? ''}}</p>
                          </div>
                          <div class="flex items-center gap-2 w-0 p-4 lg:basis-[40%] -mt-[10px]"></div>
                        </div>
                        <div class="flex flex-col lg:flex-row bg-white">
                          <div class="basis-[60%] pr-5 lg:pr-10 py-5 pl-5 lg:pl-10 flex flex-col justify-between">
                            <h3 class="text-lg lg:text-2xl font-bold text-primary">Introduction</h3>
                            <p class="text-base lg:text-lg font-medium text-primary">
                              {{ $course->module->course_module_introduction_en[$courseModule] ?? '' }}
                            </p>
                          </div>
                          <div class="basis-[40%]" style="clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 25% 100%, 0 0);">
                            <img src="{{ asset('assets/frontend/images/course/course-detail-tabs-img1.png') }}" class="w-full h-full object-cover" />
                          </div>
                        </div>
                      </div>
                      <div class="grid grid-cols-1 lg:grid-cols-2 gap-5 lg:pl-10 py-10">
                        @if(isset($course->module->course_module_details_en[$courseModule]))
                          @foreach($course->module->course_module_details_en[$courseModule] as $mKey => $moduleDetails)
                            @php
                              $moduleBreakup = extractHtmlContent($moduleDetails);
                            @endphp
                            <div class="bg-white">
                              <div class="bg-[#F6F6F6] pb-4">
                                <p class="text-[#4F4F4F] text-base lg:text-lg leading-[normal]">Module {{ ($mKey + 1) }}</p>
                                <h3 class="text-black text-lg lg:text-2xl font-medium text-primary leading-[normal]">{!! $moduleBreakup['uppertext'] ?? '' !!}</h3>
                              </div>
                              @if(isset($moduleBreakup['bulletpoints']))
                                <ul class="pl-10 pr-5 py-4 bg-white text-black list-disc">
                                  @foreach($moduleBreakup['bulletpoints'] as $bulletPoint)
                                    <li>{!! $bulletPoint !!}</li>
                                  @endforeach
                                </ul>
                              @endif
                            </div>
                          @endforeach
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            @endif
          </div>
        </div>
        <div class="hidden relative" id="styled-Courses-3" role="tabpanel" aria-labelledby="Courses-tab-3">
          @include('frontend.training.include.schedule')
        </div>
        @if($course->affiliation)
          <div class="hidden relative" id="styled-Courses-4" role="tabpanel" aria-labelledby="Courses-tab-4">
            <div class="bg-[#F6F6F6] p-5 lg:pl-[100px] lg:p-10 lg:py-16 relative">
              <img src="{{ asset('assets/frontend/images/concept-element.png') }}" class="absolute -left-[16px] top-[calc(50%-20px)] hidden lg:block w-[80px]" />
              <h2 class="text-2xl lg:text-[32px] leading-[normal] font-medium text-primary mb-10">Association / Affiliation</h2>
              <div class="flex flex-col lg:flex-row gap-10 lg:gap-5 lg:items-center">
                <div class="basis-[20%]">
                  <img src="{{ asset('storage/courses/affiliations/'.$course->affiliation->image) }}" alt="" class="w-full" />
                </div>
                <div class="basis-[80%]">
                  <h3 class="text-2xl lg:text-[32px] leading-[normal] font-medium text-[#1E4784] mb-4 lg:pl-[13%]">{{ $course->affiliation->name_en }}</h3>
                  <div class="affiliate-course-tab-clip">
                    <h4 class="text-2xl lg:text-[32px] leading-[normal] font-medium mb-2">{{ $course->affiliation->name_en }}</h4>
                    @php 
                      $affiliationCourseDescription = explode('</p>', $course->affiliation->course_description_en);
                    @endphp
                    @if(isset($affiliationCourseDescription[0]))
                      {!! str_replace('<p>', '<p class="text-base lg:text-[22px] leading-[32px]">', ($affiliationCourseDescription[0].'</p>')) !!}
                    @endif
                    @if(isset($affiliationCourseDescription[0]) && isset($affiliationCourseDescription[1]))
                      <br>
                    @endif
                    @if(isset($affiliationCourseDescription[1]))
                      {!! str_replace('<p>', '<p class="text-base lg:text-[22px] leading-[32px]">', ($affiliationCourseDescription[1].'</p>')) !!}
                    @endif
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
        <div class="hidden relative" id="styled-Courses-5" role="tabpanel" aria-labelledby="Courses-tab-5">
          <div class="px-4 py-10 bg-[#F6F6F6]">
            <h2 class="text-primary text-xl lg:text-[32px] leading-[normal]">Empowering Careers, Validating Skills <span class="font-medium block">Your Success, Our Certification.</span></h2>
            <div class="flex flex-col lg:flex-row gap-5 mt-14">
              @include('frontend.training.include.testimonials')
            </div>
          </div>
        </div>
        <div class="hidden relative" id="styled-Courses-6" role="tabpanel" aria-labelledby="Courses-tab-6">
          @include('frontend.training.include.faq')
        </div>
      </div>
    
      <h3 class="text-primary only-mobiletab">
        <strong class="block" id="option-value">Course Overview</strong>
      </h3>
      <div class="flex flex-row lg:flex-row gap-1 justify-between lg:items-center mt-5">
        <div class="btn-wrap">
          @if($course->course_brochure)
            <a href="{{ route('training.register') }}" class="btn primary-btn"
                                >
                                Register Now
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                            </a>
          @endif
        </div>
        <div class="btn-wrap flex gap-2">
          <!-- <a href="{{ route('general.contact.us') }}" class="btn primary-btn-outline text-sm 2xl:text-xl">
             Call me Back
           <img src="{{ asset('assets/frontend/images/icons/phone-call-primary.svg') }}" />
          </a> -->
          <a href="{{ route('training.register') }}" class="btn primary-btn"
                                >
                                Register Now
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                            </a>
        </div>
      </div>
    </div>
  </section>

  @include('frontend.training.include.registration')
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
  <script src="{{ asset('assets/frontend/js/training.js') }}"></script>
                    
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const tabList = document.getElementById('course-detail-styled-tab');
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

    window.addEventListener('scroll', function () {
      const element = document.getElementById('select-wraper-tab');

      if (window.scrollY > 650) {
        element.classList.add('fix-tabview');
      } else {
        element.classList.remove('fix-tabview');
      }
    });
  
    const selectElement = document.getElementById("mobile-tabview");
    const outputDiv = document.getElementById("option-value");

    selectElement.addEventListener("change", () => {
      const selectedText = selectElement.options[selectElement.selectedIndex].text;
      outputDiv.textContent = `${selectedText}`;
    });
  </script>
@endpush