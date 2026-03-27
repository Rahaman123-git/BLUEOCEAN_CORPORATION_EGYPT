@extends('layouts.frontend.app') 
@section('title')
    {{ $advisoryMember->advisor_name }} Advisory Board Member - Blue Ocean Corporation
@endsection
@section('meta-description')
    {{ $advisoryMember->advisor_name }} Blue Ocean Corporation Advisory Board Member: Expert guidance from distinguished
    leaders driving innovation & growth.
@endsection

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
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">{{ $advisoryMember->advisor_name }}</span>
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
          <img src="{{ asset('storage/advisories/'.$advisoryMember->image) }}" class="absolute bottom-0 w-[70%] left-4" />
          <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
        </div>
        <h2 class="text-xl lg:text-4xl text-primary font-semibold">
          {{ $advisoryMember->advisor_name }}
        </h2>
        <p class="text-lg lg:text-[22px] text-[#454545] font-medium">
          {{ $advisoryMember->designation }} <br />
          {{ $advisoryMember->organisation }}
        </p>
      </div>

      <div class="flex flex-col lg:flex-row gap-5 lg:gap-10 py-3 lg:py-5 new-clip-advisor bd-member-details">
        <div class="basis-1/2 flex flex-col gap-5 pl-0 lg:pl-14 lg:pt-28">{!! $advisoryMember->details_bio !!}</div>
        <div class="basis-1/2 flex flex-col justify-between gap-10">
          <div class="relative desk-img">
            <img src="{{ asset('storage/advisories/'.$advisoryMember->image) }}" class="absolute bottom-0 w-[70%] left-4" />
            <img src="{{ asset('assets/frontend/images/advisory/advisory-bg-triangle-right.png') }}" class="w-full" />
          </div>
        </div>
      </div>

      @php
        $tabularIndex = 1;
        $tabularBioDetails = extractHtmlContent($advisoryMember->details_bio_table, 'pTableColumnsWithHeaders');
      @endphp

      @if(is_array($tabularBioDetails) && !empty($tabularBioDetails))
        <div class="flex flex-col lg:flex-row gap-5 lg:gap-10 py-3 lg:py-5 new-clip-advisor bd-member-details">
          @foreach($tabularBioDetails as $tKey => $tabularBioDetail)
            <div class="basis-1/2 flex flex-col gap-5 pl-0 lg:pl-14 lg:pt-28 justify-between {{ ($tabularIndex % 2 == 0) ? 'gap-10' : '' }}">
              <div class="mb-4 lg:mb-12 {{ ($tabularIndex % 2 == 0) ? 'ml-5 lg:ml-12' : '' }}">
                <h3 class="text-xl lg:text-[28px] text-[#013F81] font-medium mb-5 leading-[normal]">{!! $tKey !!}</h3>

                <ul class="text-lg lg:text-[22px] text-black font-medium list-disc pl-5">
                  @foreach($tabularBioDetail as $tDKey => $tBioDetails)
                    @if(is_array($tBioDetails))
                      @foreach($tBioDetails as $tBDetails)
                        @if(is_string($tBDetails) && trim($tBDetails) !== '')
                          <li>{!! $tBDetails !!}</li>
                        @endif
                      @endforeach
                    @elseif(is_string($tBioDetails) && trim($tBioDetails) !== '')
                      <li>{!! $tBioDetails !!}</li>
                    @endif
                  @endforeach
                </ul>
              </div>
            </div>
            @php $tabularIndex++; @endphp
          @endforeach
        </div>
      @endif

      
    </div>
  </section>
@endsection
