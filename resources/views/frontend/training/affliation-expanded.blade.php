@extends('layouts.frontend.app')
@section('title', 'Blue Ocean Academy Affliations')
@section('meta-description', 'Blue Ocean Academy: Certified training partner with IPSCMI, CILT, CIPS, ASCM, APICS, PMI, IATA & ACI. Elevate your skills in logistics, project management, aviation & quality management.')
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}">
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
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Affiliations</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="page-heading-main">
    <div class="container">
      <h1 class="page-heading">Affiliations / Partnerships</h1>
    </div>
  </div>

  <section class="page-banner-section">
    <div class="page-banner bg-affil-blue">
      <div class="flex w-full flex-wrap">
        <div class="w-full lg:w-1/2">
          <div class="affliation-banner">
            <img src="{{ asset('assets/frontend/images/banner-img-affliliation.webp') }}" alt="Banner" />
          </div>
        </div>
        <div class="w-full lg:w-1/2 bg-current">
          <div class="affliation-text">
            We collaborate with leading industry bodies and global institutions to offer accredited certification programs that meet the highest standards. Our affiliations ensure credibility, career growth, and worldwide recognition for our
            learners. Gain an edge with certifications that matter.
          </div>
        </div>
      </div>
      <div class="image-half absolute">
        <div>
          <h2 class="text-white text-[40px]">
            Elevate Your
            <strong>Skills</strong>
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="aff-title">
    <div class="container">
      <div class="flex justify-between items-center aff-title-box">
        <div class="title-view">
          <h3>
            Empowering Excellence, <br />
            Globally Recognized
          </h3>
        </div>
        <div class="back-button">
          <a href="{{ route('training.home') }}" class="flex text-primary items-center"> <img src="{{ asset('assets/frontend/images/arrow-left-blue.svg') }}" />Back </a>
        </div>
      </div>
    </div>
  </section>

  <section class="partnerships-section">
    <div class="container">
      <!-- Start -->
      <div class="partner-listing">
        <ul>
          @if($affiliations)
            @foreach($affiliations as $affiliation)
              <li>
                <div class="partner-info">
                  <div class="partner-card">
                    <div class="partner-logo">
                      <img src="{{ asset('storage/courses/affiliations/'.$affiliation->image) }}" alt="" width="100" height="100" />
                    </div>
                    <div class="partner-full-info">
                      <h3 class="full-form-title">{{ $affiliation->name_en }}</h3>
                      <div class="disc-info">
                        <h3 class="short-form-title">{{ $affiliation->short_name_en }}</h3>
                        <p class="text-base">
                          {!! $affiliation->description_en !!}
                        </p>
                        @if($affiliation->courses->count())
                          <button data-collapse-target="collapse-{{ $affiliation->id }}" class="collapse-btn arrow-down" onclick="toggleCollapse({{ $affiliation->id }})">
                            <img src="{{ asset('assets/frontend/images/arrow-down.svg') }}" alt="arrow-down" class="transition-transform duration-300" width="30" height="30" />
                          </button>
                        @endif
                      </div>
                      @if($affiliation->courses->count())
                        <!-- Collapse Start -->
                        <div class="collapse-view">
                          <div id="collapse-{{ $affiliation->id }}" class="collapse-content hidden">
                            <div class="collapse-box">
                              <ul class="partner-checklisting">
                                @foreach($affiliation->courses as $course)
                                  <li class="affiliation-course"><a href="{{ route('training.course.details', $course->slug) }}"><span>{{ str_replace('-', ' - ', $course->course_short_title_en) }}</span></a></li>
                                @endforeach
                              </ul>
                              <div class="flex">
                                <a href="{{ route('training.certification.program', ['certification' => $affiliation->short_name_en]) }}" class="primary-outline">Explore {{ $affiliation->short_name_en }} Courses </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Collapse End -->
                      @endif
                    </div>
                  </div>
                </div>
              </li>
            @endforeach
          @endif
        </ul>
        <div class="flex justify-end mt-4 mb-4">
          <a href="{{ route('training.certification.program') }}" class="btn primary-btn text-base">
            Explore All Courses
            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
          </a>
        </div>
      </div>
      <!-- End -->
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/training.js') }}"></script>
@endpush