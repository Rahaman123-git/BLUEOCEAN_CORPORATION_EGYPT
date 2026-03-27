@extends('layouts.frontend.app')
@section('title', ' Making Waves - Blue Ocean Corporation')
@section('meta-description', 'Blue Ocean Corporation Making Waves: Expert guidance from distinguished leaders driving innovation & growth.')

@section('canonical', url()->current())

@section('og-url', url()->current())
@section('og-title', 'Making Waves - Blue Ocean Corporation')
@section('og-description','Blue Ocean Corporation Making Waves: Expert guidance from distinguished leaders driving innovation & growth.')
@section('og-image','https://cdnc.heyzine.com/files/uploaded/5d09495e7ffa4c8bacd542f2061ed7ed152075e4.pdf-thumb.jpg')

@section('twitter-url', url()->current())
@section('twitter-title', 'Making Waves - Blue Ocean Corporation')
@section('twitter-description','Blue Ocean Corporation Making Waves: Expert guidance from distinguished leaders driving innovation & growth.')
@section('twitter-image','https://cdnc.heyzine.com/files/uploaded/5d09495e7ffa4c8bacd542f2061ed7ed152075e4.pdf-thumb.jpg')


@section('content')

<section class="hero-banner-section">
    <div class="hero-banner-wrap" style="background-color: #000;">
      <picture>
        <source media="(min-width:770px)" srcset="{{ asset('assets/frontend/images/making-wave.png') }}" />
        <img src="{{ asset('assets/frontend/images/making-wave.png') }}" alt="banner image" class="w-full banner-img" />
      </picture>
      <div class="hero-banner-main">
        <div class="container h-full">
          <div class="hero-banner-text hero-banner-left">
            <h1 class="hero-banner-heading font-bold">
              <span class="block font-light">Welcome To </span>
             Making Waves
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  
    <section class="news-insight-text relative">
    <div class="diveder-angle hidden lg:block top-[20%]">
      <img src="{{ asset('assets/frontend/images/devider-angle.png') }}" alt="" />
    </div>
    <div class="container">
      <div class="flex flex-col lg:flex-row gap-5 lg:items-center py-14">
        <div class="basis-1/2">
          <h2 class="text-primary text-3xl lg:text-[42px] lg:leading-[normal] font-light">
           Discover the Waves

            <span class="font-medium block"> That Shaped Our Year</span>
          </h2>
        </div>
        <div class="basis-1/2">
          <p class="text-lg lg:text-[22px]">
           From milestones to moments of joy, Making Waves celebrates bold ideas, achievements, and the people who made them possible.
          </p>
        </div>
      </div>
  
    </div>
  </section>
 <div class="container">
   <h2 class="text-primary text-3xl lg:text-[34px] lg:leading-[normal] font-light">Making Waves 2025 – <span class="font-bold"> Blue Ocean Year Book 2025</span></h2>
   <iframe allowfullscreen="allowfullscreen" scrolling="no" class="fp-iframe" src="https://heyzine.com/flip-book/5d09495e7f.html" style="border: 1px solid lightgray; width: 100%; height: 100vh;padding-top:30px"></iframe>
 </div>
 <section class="newsletter-section pt-4 pb-10 relative">
    <div class="diveder-angle hidden lg:block top-0 -mt-9">
      <img src="{{ asset('assets/frontend/images/element.png') }}" alt="" />
    </div>
    <div class="container">
      <div class="flex flex-col lg:flex-row lg:items-center gap-5 py-4 lg:py-8 px-4 lg:px-[60px] border border-black">
        <div class="basis-1/2">
          <h2 class="text-2xl lg:text-[34px] text-primary" style="font-weight:700"><span class="font-light block"></span> Stay Connected to Blue Ocean News.</h2>
        </div>
        <div class="basis-1/2">
          <form class="flex items-center gap-5 max-w-sm mx-auto">
            <label for="simple-search" class="sr-only">Email Address</label>
            <div class="relative w-full">
              <input type="text" id="simple-search" class="border border-[#999999] block w-full py-3 px-5" placeholder="Email address" required />
            </div>
            <button type="submit" class="btn primary-btn">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection