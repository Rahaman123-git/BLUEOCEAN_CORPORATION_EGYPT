@extends('layouts.frontend.app')

@php
    use Illuminate\Support\Str;

    // Convenience vars
    $name = $advisoryMember->advisor_name ?? 'Advisory Board Member';

    // SEO: prefer DB fields if present; otherwise build sensible defaults
    $pageTitle = $advisoryMember->meta_title
        ?? "{$name} - Advisory Board Member - Blue Ocean Corporation";

    $rawDescription = $advisoryMember->meta_description
        ?? ($advisoryMember->brief_bio ?: $advisoryMember->details_bio);

    // Strip HTML from bios and limit to ~155 chars for SEO
    $pageDescription = Str::limit(trim(strip_tags($rawDescription ?? '')), 155);

    // Headshot: use uploaded image from storage with a fallback placeholder
    $advisoryImg = $advisoryMember->image
        ? asset('storage/advisories/' . $advisoryMember->image)
        : asset('assets/frontend/images/advisory/default.png'); // put a default image at this path
@endphp

@section('title', $pageTitle)
@section('meta-description', $pageDescription)

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
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">{{ $name }}</span>
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
          <!-- Mobile image: dynamic from backend -->
          <img src="{{ $advisoryImg }}" class="absolute bottom-0 w-[70%] left-4" alt="{{ $name }} photo" />
          <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" alt="" />
        </div>
        <h2 class="text-xl lg:text-4xl text-primary font-semibold">
          {{ $name }}
        </h2>
        <p class="text-lg lg:text-[22px] text-[#454545] font-medium">
          {{ $advisoryMember->designation }} <br />
          {{ $advisoryMember->organisation }}
        </p>
      </div>

      <div class="flex flex-col lg:flex-row gap-5 lg:gap-10 py-3 lg:py-5 new-clip-advisor bd-member-details">
        <div class="basis-1/2 flex flex-col gap-5 pl-0 lg:pl-14 lg:pt-28">
          <div class="mb-4 lg:mb-12">
            <p class="text-lg lg:text-[22px] text-black font-medium">
              {!! $advisoryMember->details_bio !!}
            </p>
          </div>
        </div>

        <div class="basis-1/2 flex flex-col justify-between gap-10">
          <div class="relative desk-img">
            <!-- Desktop image: also dynamic from backend (replaces hard-coded image) -->
            <img src="{{ $advisoryImg }}" class="absolute bottom-0 w-[70%] left-4" alt="{{ $name }} photo" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" alt="" />
          </div>
        </div>
      </div>

     
    </div>
  </section>
@endsection
