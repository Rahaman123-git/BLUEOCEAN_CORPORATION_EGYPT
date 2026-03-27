@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css"/>
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/seminar.css') }}">
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
              <a href="javascript:void(0)" class="ms-1 text-sm font-medium text-[#1E1E1E]">Webinar</a>
            </div>
          </li>
          <li aria-current="page">
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Seminar</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>

  <div class="page-heading-main">
    <div class="container">
      <h1 class="page-heading">Webinar Program</h1>
    </div>
  </div>

  <!-- Seminar banner section start here 
  <section class="seminar-top">
    <figure>
      <img src="{{ asset('assets/frontend/images/webinar/webinar-pic.webp') }}" alt="" class="w-full" />
    </figure>
    <div class="seminar-top-abs">
      <div class="container">
        <div class="seminar-top-abs-inner">
          <div class="inner-top-left">
            <h2 class="align-bottom"><small>Elevate Expertise, </small> Ignite Innovation</h2>
          </div>
          <p>
            Our webinars drive excellence through impactful engagement. Designed for industry-specific challenges, they deliver relevant insights and actionable strategies. By uniting thought leaders and experts, we create a platform for
            knowledge exchange—empowering professionals to stay ahead, adapt, and excel
          </p>
        </div>
      </div>
    </div>
  </section>-->
  <!-- Seminar banner section ends here -->

  <section class="enabling-enhancement">
    <div class="container">
      <h3>
        {{ $seminar->seminar_title }}
      </h3>
      <div class="fig-enhance">
        <figure>
          <img src="{{ asset('storage/courses/seminars/'.$seminar->seminar_registration_page_banner_image) }}" class="w-full" alt="" />
        </figure>
        <!--<span class="free-training">Techonology Training is FREE</span>-->
      </div>
    </div>
    <div class="enhance-trg posn-two">
      <figure>
        <img src="{{ asset('assets/frontend/images/webinar/bg-trg-lft.webp') }}" alt="" />
      </figure>
      <figcaption>
        <small>Date</small>
        <span> {{ $seminar->formattedDate('seminar_date') }}</span><br />
       <!-- <br />

        <small>Location</small>
        <span> {{ $seminar->seminar_location }}</span>-->
      </figcaption>
    </div>
  </section>
  <section>
    <container>
      <div class="seminar_dec">
       {!! $seminar->seminar_description !!}
       </div>
    </container>
  </section>

  <!-- Register form section start here -->
  <!--<section class="register-form">
    <div class="container">
      <div class="register-form-inner">
        <div class="register-form-left">
          <figure>
            <img src="{{ asset('assets/frontend/images/webinar/final-boc-logo-form.webp') }}" alt="" />
          </figure>
        </div>
        <div class="register-form-right">
          <div class="form-area">
           

            <iframe aria-label='Seminar Registration' frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.com/blueoceanmanagementtrainingc10/form/SeminarRegistration/formperma/cZqnknN6GUGZhRCB3LKmRvf6WfGJ7VSjVKwrC_UiI6c'></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>-->
  <!-- Register form section end here -->
@endsection