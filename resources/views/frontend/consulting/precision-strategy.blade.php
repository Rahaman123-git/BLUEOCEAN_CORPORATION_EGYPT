@extends('layouts.frontend.app')
@section('title', 'Precision Strategy Blue Ocean Corporation')
@section('meta-description', 'Precision Strategy Blue Ocean Consulting: Expert guidance for business growth & innovation. Unlock your potential with tailored strategies & solutions.')
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/consulting.css') }}">
@endpush

@section('content')
  <!-- Banner Section Starts Here -->
  <section class="hero-banner-section banner-rltv">
    <div class="hero-banner-wrap">
      <picture>
        <source media="(min-width:770px)" srcset="{{ asset('assets/frontend/images/consulting/banner-strategy.webp') }}" />
        <img src="{{ asset('assets/frontend/images/consulting/banner-strategy.webp') }}" alt="banner image" class="w-full banner-img" />
      </picture>
    </div>
    <div class="banner-left-strategy">
      <h1 class="font-light">...Shaping the path of progress.</h1>
    </div>
    <div class="banner-strat-bot">
      <h1><small>Precision</small> Strategy</h1>
      <section>
        <p>Every successful transformation begins with a clear, actionable strategy. We provide bespoke strategies tailored to your unique business needs.</p>
      </section>
    </div>
    <div class="on-banner-strat">
      <img src="{{ asset('assets/frontend/images/consulting/on-banner-strategy.webp') }}" alt="" />
    </div>
  </section>
  <!-- Banner Section Ends Here -->

  <!-- Innovative strip start here  -->
  <section class="innovate-strip">
    <div class="container">
      <h2>Innovate. Strategize. <mark class="elevate-text">Elevate.</mark></h2>
    </div>
  </section>
  <!-- Innovative strip ends here  -->

  <!-- Innovate banner section start here  -->
  <section class="innovate-sec">
    <figure>
      <img src="{{ asset('assets/frontend/images/consulting/innovate-banner.webp') }}" class="w-full" />
    </figure>
    <div class="bg-gray-trg">
      <img src="{{ asset('assets/frontend/images/consulting/bg-gray-trg.webp') }}" alt="trg" />
    </div>
    <div class="innovate-sec-abs" style="background-image: url({{ asset('assets/frontend/images/consulting/on-innovate.webp') }});"></div>
    <div class="innovate-top">
      <div class="container">
        <div class="flex">
          <section class="inno-top-left">
            <p>We integrate innovative practices that are impactful and sustainable to drive your business forward.</p>
          </section>
          <section class="basis-15"></section>
          <section class="basis-40">
            <strong> <small>Innovation</small> at the Core </strong>
          </section>
        </div>

        <div class="innovate-mid">
          <strong>Innovate. Integrate. Accelerate.</strong>
        </div>
      </div>
    </div>
  </section>
  <!-- Innovate banner section ends here  -->

  <!-- Sustainable change section start here  -->
  <section class="sustainable-sec">
    <figure>
      <img src="{{ asset('assets/frontend/images/consulting/sustainable.png') }}" alt="Sustainable Change" />
    </figure>
    <div class="sustainable-abs">
      <div class="container">
        <div class="sustain-abs-inner">
          <div class="sustain-abs-first"></div>
          <div class="sustain-abs-second">
            <h3><small>Sustainable</small> Change</h3>
          </div>
          <div class="sustain-abs-third">
            <p>Transformation is a journey, not a one-time event. We ensure that the changes we implement are designed for long-term success and continuous improvement.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <figcaption class="fw-200">Evolve. Sustain. Thrive.</figcaption>
    </div>
  </section>
  <!-- Sustainable change section ends here  -->

  <!-- Leadership section start here  -->
  <section class="leadership">
    <figure>
      <img src="{{ asset('assets/frontend/images/consulting/grow.png') }}" alt="grow" class="w-full" />
    </figure>
    <div class="leadership-abs">
      <div class="container">
        <div class="leadership-inner">
          <h3><small>Leadership for</small> the Future</h3>
          <p>Empowering your leadership team to steer the organization through transformative periods with clarity, resilience, and purpose.</p>
        </div>
      </div>
    </div>
    <div class="empower-trg">
      
    </div>
  </section>
  <!-- Leadership section ends here  -->

  <!-- Empower section start here  -->
  <section class="empower-navigate">
    <div class="container">
      <div class="empower-inner">
        <div class="empower-first"></div>
        <div class="empower-second">
          <h3 class="fw-200">Empower. Navigate. Inspire.</h3>
          <h4><small>Empower your vision, innovate with precision</small> <small>and sustain transformative success</small>Let's build a future that thrives together.</h4>
          <div class="btn-wrap">
            <a href="#" class="btn primary-btn">
              Initiate the Impact
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Empower section ends here  -->
@endsection