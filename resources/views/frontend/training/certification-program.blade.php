@extends('layouts.frontend.app')
@section('title', ' Certification Programs - Blue Ocean Academy')
@section('meta-description', 'Expert-led courses in logistics, project management, aviation, and quality management. Get certified and boost your career with IPSCMI, CILT, CIPS, PMI, IATA, and ACI.')
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
          <li aria-current="page">
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <a href="javascript:void(0)" class="ms-1 text-sm font-medium text-[#1E1E1E]">Certification Programs</a>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="page-heading-main">
    <div class="container">
      <h1 class="page-heading">Certification Programs</h1>
    </div>
  </div>

  <section class="page-banner-section">
    <div class="page-banner bg-light-blue">
      <div class="image-half">
        <img src="{{ asset('assets/frontend/images/course/course-traning.png') }}" alt="Banner" />
      </div>
      <div class="page-banner-text program-bnr-text">
        <div class="container">
          <div class="page-banner-wrap">
            <div class="basis-[60%] pr-[10%] hdr-course">
              <h1 class="page-banner-heading">
                <strong class="block">
                  Advance Your Career with </br>Globally Recognized Certifications

                </strong>
              </h1>
            </div>
            <div class="basis-[40%] progrram-bnr-text">
              <p class="text-white text-base lg:text-lg mb-4">
                Our certification programs are designed to equip professionals with practical skills, strategic insights, and international credentials. Whether in supply chain, HR, leadership, or quality management, each course is aligned with industry demands to help you stay relevant, competitive, and future-ready. 

              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="course-tab-section">
    <div class="container">
      <div class="diveder-angle hidden lg:block">
        <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
      </div>
      <div class="border-b-2 border-secondary">
        <ul class="flex flex-wrap text-sm font-medium text-center gap-[2px] ml-5 lg:ml-5 2xl:ml-10"
          id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content"
          data-tabs-active-classes="text-white bg-secondary"
          data-tabs-inactive-classes="text-gray bg-[#EBEBEB]" role="tablist">
          <li role="presentation">
            <button class="inline-block p-4 font-medium" id="Courses-styled-tab"
              data-tabs-target="#styled-Courses" type="button" role="tab" aria-controls="Courses"
              aria-selected="false">Certification Programs</button>
          </li>
          <li role="presentation">
            <button class="inline-block p-4 font-medium" id="training-calendar-styled-tab"
              data-tabs-target="#styled-training-calendar" type="button" role="tab"
              aria-controls="training-calendar" aria-selected="false">Course Training
              Calendar</button>
          </li>
        </ul>
      </div>
      <div class="container">
        <div id="filter-tags" class="flex flex-wrap gap-4 pl-4 lg:pl-5 2xl:pl-10 py-6">
          @if(isset($filterQueries) && !empty($filterQueries))
            @foreach($filterQueries as $filterQuery)
              @php
                $filterKeywords = explode(',', $filterQuery);
              @endphp
              @foreach($filterKeywords as $filterKeyword)
                <button type="button" class="bg-[#2C2C2C] p-2 rounded-md text-white flex items-center gap-1 tool-tips">
                  {{ $filterKeyword }}
                  <img src="{{ asset('assets/frontend/images/icons/close-white.svg') }}" width="16px" height="16px" />
                </button>
              @endforeach
            @endforeach
          @endif
        </div>
        <div class="flex flex-col lg:flex-row bg-[#F2F2F2] p-4 lg:p-5 2xl:p-10">
          @include('frontend.training.include.filter')
          <div class="basis-[80%]">
            <p class="text-lg 2xl:text-[26px] pb-8">"Learn today, lead tomorrow - the journey starts here."</p>
             <div class="course-overflow-box">
            <div id="default-styled-tab-content">
              <div class="hidden" id="styled-Courses" role="tabpanel" aria-labelledby="Courses-tab">
                <div class="bg-[#F2F2F2] courses course-overflow">
                  @include('frontend.training.include.courses')
                </div>
                <div class="pagination py-5">
                  @include('frontend.training.include.pagination')
                </div>
              </div>
              <div class="hidden relative" id="styled-training-calendar" role="tabpanel" aria-labelledby="training-calendar-tab">
                @if(
                  (isset($firstSixMonthsSchedules) && $firstSixMonthsSchedules->count()) ||
                  isset($nextSixMonthsSchedules) && $nextSixMonthsSchedules->count()
                )
                  <div class="corporate-filter-radio-wrap">
                    <div class="flex items-center">
                      <input type="radio" name="corporate-filter-radio" id="six-month-radio" class="radio-input calendarswitch" value="sixmonth" checked/>
                      <label for="six-month-radio" class="radio-label">6 Month</label>
                    </div>
                    <div class="flex items-center">
                      <input id="twelve-month-radio" type="radio" value="twelvemonth" name="corporate-filter-radio" class="radio-input calendarswitch" />
                      <label for="twelve-month-radio" class="radio-label">12 Month</label>
                    </div>
                  </div>
                @endif
                <div class="flex flex-col lg:flex-row bg-[#F2F2F2] calendar">
                  @include('frontend.training.include.calendar')
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <input type="hidden" name="courseshorttitle" id="courseshorttitle" value="{{ json_encode($courseShortTitles) }}">
  <input type="hidden" name="coursetitle" id="coursetitle" value="{{ json_encode($courseTitles) }}">

  @include('frontend.training.include.registration')
@endsection

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
  <script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.1.1/build/js/intlTelInput.min.js"></script>
  <!-- <script src="{{ asset('assets/frontend/js/home.js') }}"></script> -->
  <script src="{{ asset('assets/frontend/js/training.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/latest-tiny.js') }}"></script>
         
                      
   <script>                      
  document.addEventListener('DOMContentLoaded', function () {
  const filterClick = document.querySelector('.filter-click');
  const mobileForm = document.querySelector('.hide-search-mob');
  const closeFilter = document.querySelector('.filter-hide'); // X button

  if (filterClick && mobileForm) {
    filterClick.addEventListener('click', function () {
      mobileForm.classList.toggle('active');
    });
  }

  if (closeFilter && mobileForm) {
    closeFilter.addEventListener('click', function () {
      mobileForm.classList.remove('active'); // Only hide
    });
  }
});
</script>
@endpush