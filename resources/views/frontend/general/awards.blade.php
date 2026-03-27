@extends('layouts.frontend.app')
@section('title', ' Awards - Blue Ocean Corporation')
@section('meta-description', 'Blue Ocean Corporation Awards: 30+ awards for innovation & excellence. Recognising our teams dedication & expertise.')
@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/awards.css') }}">
@endpush

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
          <li aria-current="page">
            <div class="flex items-center">
              <span class="px-1 text-[#1E1E1E]">/</span>
              <span class="ms-1 text-sm font-medium text-[#1E1E1E]">Awards</span>
            </div>
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <div class="container">
    <div class="pageInfo">
      <h1 class="pageTitle">Awards & <strong>Recognition</strong></h1>
      <p>
        Over the years, our pursuit of innovation and impact has been recognized through 30+ prestigious awards. These accolades serve as a testament to our dedication in professional training, consulting, and conferences across industries
        worldwide.
      </p>
      <h2 class="companySlogan">
        
        <strong>it’s a commitment.</strong>
      </h2>
    </div>

    <div class="CategoryList">
      @if(isset($awardCategorywise) && !empty($awardCategorywise))
        @foreach($awardCategorywise as $aKey => $aCategorywise)
          @foreach($aCategorywise as $aDetail)
            <div class="catItem-wrapper">
              <h2 class="cat-title">
                <small>Category</small>
                {{ $aKey }}
              </h2>
              <div class="catItem">
                <div class="itemImage-wrapper">
                  @php 
                    $awardImages = json_decode($aDetail->image, true);
                  @endphp
                  @if(count($awardImages) > 1)
                    <div class="awardsSlider">
                      @foreach($awardImages as $awardImage)
                        <div>
                          <img src="{{ asset('storage/awards/'.$awardImage) }}" alt="" class="awards" />
                        </div>
                      @endforeach
                    </div>
                  @else
                  	{{--<img src="{{ asset('storage/awards/'.$awardImages[0]) }}" alt="" />--}}
                    <div class="img-container" onclick="openPopup(this)">
                      <img src="{{ asset('storage/awards/'.$awardImages[0]) }}" alt="" />
                      <span class="zoom-icon"></span>
                    </div>
                  @endif
                </div>
                <div class="itemDetails">
                  <h3 class="itemTitle">{{ $aDetail->title }}</h3>
                  <div class="itemContent">
                    <div class="itemList">
                      <h4 class="listTitle">
                        <span><span>Awarding Body</span></span>
                      </h4>
                      <p>{{ $aDetail->awarding_body }}</p>
                    </div>
                    @if($aDetail->significance)
                      <div class="itemList">
                        <h4 class="listTitle">
                          <span><span>Significance</span></span>
                        </h4>
                        {!! $aDetail->significance !!}
                      </div>
                    @endif
                    @if($aDetail->impact)
                      <div class="itemList">
                        <h4 class="listTitle">
                          <span><span>Impact</span></span>
                        </h4>
                        {!! $aDetail->impact !!}
                      </div>
                    @endif
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @endforeach
      @endif
    </div>

    <div class="catBot-text">
      <div class="seeMore-text">
        <strong>Discover our Latest award - Winning training programs! </strong>
      </div>
      <a href="{{ route('training.home') }}" class="btn primary-btn">
        Explore Courses
      </a>
    </div>
  </div>

  <div class="popup" id="popup">
    <span class="close-btn" onclick="closePopup()">×</span>
    <img id="popup-img" src="" alt="Popup Image" />
  </div>
@endsection

@push('scripts')
  <script src="{{ asset('assets/frontend/js/awards.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/home.js') }}"></script>
@endpush