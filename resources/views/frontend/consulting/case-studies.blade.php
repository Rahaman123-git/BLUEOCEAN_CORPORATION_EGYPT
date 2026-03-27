@extends('layouts.frontend.app')

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/consulting.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style-last.css') }}">
@endpush

@section('content')
  <!-- Banner Section Starts Here -->
  <section class="hero-banner-section relative">
    <div class="hero-banner-wrap">
      <picture>
        <source media="(min-width:770px)" srcset="{{ asset('assets/frontend/images/latest-added/banner-cons-dtl.webp') }}" />
        <img src="{{ asset('storage/consulting/case-studies/'.$caseStudy->case_study_banner_image) }}" alt="banner image" class="w-full banner-img" />
      </picture>
    </div>
    <div class="on-banner-trg">
      <img src="{{ asset('assets/frontend/images/consulting/on-banner-trg.webp') }}" alt="ff" />
    </div>
    <div class="abs-banner-detail">
      <div class="container">
        <h1>
          {!! breakByChars($caseStudy->consulting_title, 14) !!}
        </h1>
        <section>
          <span class="align-self-end"> <img src="{{ asset('assets/frontend/images/consulting/arrow down-right.webp') }}" width="48" /></span>
          <div>
            <span>Precision Quality, Proven Results.</span>
            <strong>Case Studies</strong>
          </div>
        </section>
      </div>
    </div>
  </section>
  <!-- Banner Section Ends Here -->

  <!-- Heading strip start here-->
  <section class="strip-top">
    <div class="strip-right">
      <div class="container">
        <div class="strip-right-inner">
          <span>{{ $caseStudy->consulting_title }}</span>
          @if($caseStudy->case_study_file)
            <a href="{{ asset('storage/consulting/case-studies/'.$caseStudy->case_study_file) }}" target="_blank">Downlaod Case Study <img src="{{ asset('assets/frontend/images/latest-added/dnld-icn.webp') }}" alt="" /></a>
          @endif
        </div>
      </div>
    </div>
  </section>
  <!-- Heading strip ends here-->

  <!-- Consulting detail main section start here -->
  <section>
    <div class="container">
      <div class="detail-cont">
        <div class="aside-right">
          <p>
            {{ $caseStudy->challenge }}<br />
            @php 
              $highlightedIssue = extractHtmlContent($caseStudy->highlighted_issue, 'pTableP');
            @endphp
            @if($highlightedIssue['uppertext'])
              <strong>{{ $highlightedIssue['uppertext'] }}</strong>
            @endif
          </p>
          <ul class="list-disc-new">
            @if($highlightedIssue['bulletpoints'])
              @foreach($highlightedIssue['bulletpoints'] as $bKey => $bulletPoint)
                <li>{{ $bKey }}</li>
                @if(count($bulletPoint))
                  <ul>
                    @foreach($bulletPoint as $bPKey => $bPoint)
                      <li>{{ $bPKey }}</li>
                    @endforeach
                  </ul>
                @endif
              @endforeach
            @endif
          </ul>
          <div class="note-in-blue">
            <p>{{ $caseStudy->highlighted_summary }}</p>
          </div>
          <h6 class="hdn-sixth">They engaged Blue Ocean to lead them out of this situation.</h6>
          <div id="accordion-open" data-accordion="open">
            <h2 id="accordion-open-heading-1" class="heading-accord">
              <button type="button" class="flex items-center justify-between w-full p-3" data-accordion-target="#accordion-open-body-1" aria-expanded="true" aria-controls="accordion-open-body-1">
                <span class="flex items-center">
                  Blue Ocean's Engagement Approach
                </span>
                @php 
                  $bocEngagementApproach = extractHtmlContent($caseStudy->boc_engagement_approach, 'pTableP');
                @endphp
                <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
              </button>
            </h2>
            <div>
              <div class="accord-body">
                <p>{{ $bocEngagementApproach['uppertext'] }}</p>
              </div>
            </div>
          </div>
          <ul id="accordion-open-body-1" class="list-challenge hidden" aria-labelledby="accordion-open-heading-1">
            @if(isset($bocEngagementApproach['bulletpoints']) && !empty($bocEngagementApproach['bulletpoints']))
              @foreach($bocEngagementApproach['bulletpoints'] as $bKey => $bulletpoint)
                <li class="space-32">
                  <h6 class="dark">{{ $bKey }}</h6>
                  @foreach($bulletpoint as $bPKey => $bPDetail)
                    @if(is_array($bPDetail) && !empty($bPDetail))
                      <p class="{{ !$loop->first ? 'pt-3' : '' }}"><strong>{{ $bPKey }}</strong></p>
                      <ol>
                        @foreach($bPDetail as $bDetail)
                          <li>{{ $bDetail }}</li>
                        @endforeach
                      </ol>
                    @else
                      @if($loop->first)
                        <ol>
                      @endif
                      <li>{{ $bPKey }}</li>
                      @if($loop->last)
                        </ol>
                      @endif
                    @endif
                  @endforeach
                </li>
              @endforeach
            @endif
          </ul>
          <div id="accordion-open2" data-accordion="open">
            <h2 id="accordion-open-heading-1" class="heading-accord">
              <button type="button" class="flex items-center justify-between w-full p-3" data-accordion-target="#accordion-open-body-2" aria-expanded="true" aria-controls="accordion-open-body-2">
                <span class="flex items-center">
                  Solutions Designed and Delivered
                </span>
                @php 
                  $solutionsDesignedDelivered = extractHtmlContent($caseStudy->solutions_designed_delivered, 'pTableP');
                @endphp
                <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
              </button>
            </h2>
            <div>
              <div class="accord-body">
                <p>{{ $solutionsDesignedDelivered['uppertext'] }}</p>
              </div>
            </div>
          </div>
          <ul id="accordion-open-body-2" class="list-challenge hidden" aria-labelledby="accordion-open-heading-2">
            @if(isset($solutionsDesignedDelivered['bulletpoints']) && !empty($solutionsDesignedDelivered['bulletpoints']))
              @foreach($solutionsDesignedDelivered['bulletpoints'] as $bKey => $bulletpoint)
                <li class="space-32">
                  <h6 class="dark">{{ $bKey }}</h6>
                  @foreach($bulletpoint as $bPKey => $bPDetail)
                    @if(is_array($bPDetail) && !empty($bPDetail))
                      <p class="{{ !$loop->first ? 'pt-3' : '' }}"><strong>{{ $bPKey }}</strong></p>
                      <ol>
                        @foreach($bPDetail as $bDetail)
                          <li>{{ $bDetail }}</li>
                        @endforeach
                      </ol>
                    @else
                      @if($loop->first)
                        <ol>
                      @endif
                      <li>{{ $bPKey }}</li>
                      @if($loop->last)
                        </ol>
                      @endif
                    @endif
                  @endforeach
                </li>
              @endforeach
            @endif
          </ul>
          <div id="accordion-open3" data-accordion="open">
            <h2 id="accordion-open-heading-1" class="heading-accord">
              <button type="button" class="flex items-center justify-between w-full p-3" data-accordion-target="#accordion-open-body-3" aria-expanded="true" aria-controls="accordion-open-body-3">
                <span class="flex items-center">
                  Business Impact Delivered
                </span>
                @php 
                  $businessImpactDelivered = extractHtmlContent($caseStudy->business_impact_delivered, 'pTableP');
                @endphp
                <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5" />
                </svg>
              </button>
            </h2>
            <div>
              <div class="accord-body">
                <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $businessImpactDelivered['uppertext'] }}</p>
              </div>
            </div>
          </div>
          <ul id="accordion-open-body-3" class="list-challenge hidden" aria-labelledby="accordion-open-heading-3">
            @if(isset($businessImpactDelivered['bulletpoints']) && !empty($businessImpactDelivered['bulletpoints']))
              @foreach($businessImpactDelivered['bulletpoints'] as $bKey => $bulletpoint)
                <li class="space-32">
                  <h6 class="dark">{{ $bKey }}</h6>
                  @foreach($bulletpoint as $bPKey => $bPDetail)
                    @if(is_array($bPDetail) && !empty($bPDetail))
                      <p class="{{ !$loop->first ? 'pt-3' : '' }}"><strong>{{ $bPKey }}</strong></p>
                      <ol>
                        @foreach($bPDetail as $bDetail)
                          <li>{{ $bDetail }}</li>
                        @endforeach
                      </ol>
                    @else
                      @if($loop->first)
                        <ol>
                      @endif
                      <li>{{ $bPKey }}</li>
                      @if($loop->last)
                        </ol>
                      @endif
                    @endif
                  @endforeach
                </li>
              @endforeach
            @endif
          </ul>
        </div>
        <aside>
          <div class="aside-inner" style="background-image: url({{ asset('assets/frontend/images/latest-added/first-opc-bg.webp') }});">
            <img src="{{ asset('assets/frontend/images/consulting/top-aside.webp') }}" class="top-aside" />
            <h3>Key Learnings & Recommendations</h3>
            @php 
              $keyLearningsRecommendations = extractHtmlContent($caseStudy->key_learnings_recommendations, 'pUlLiPR');
            @endphp
            @if(isset($keyLearningsRecommendations['bulletpoints']) && !empty($keyLearningsRecommendations['bulletpoints']))
              @foreach($keyLearningsRecommendations['bulletpoints'] as $bKey => $bulletpoint)
                <p class="spacer"><strong>{{ $bKey }}</strong></p>
                <ul>
                  @foreach($bulletpoint as $bPoint)
                    <li><p>{{ $bPoint }}</p></li>
                  @endforeach
                </ul>
              @endforeach
            @endif
          </div>
          <div class="aside-inner" style="background-image: url({{ asset('assets/frontend/images/latest-added/boc-opc.webp') }});">
            <img src="{{ asset('assets/frontend/images/latest-added/poly-eighty-sm.webp') }}" class="top-aside" />
            <h3>Why the client chose Blue Ocean Consulting</h3>
            @php 
              $whyBOC = extractHtmlContent($caseStudy->why_boc, 'pUlLiPR');
            @endphp
            @if(isset($whyBOC['bulletpoints']) && !empty($whyBOC['bulletpoints']))
              @foreach($whyBOC['bulletpoints'] as $bKey => $bulletpoint)
                @if($loop->last)
                  <p><strong>{{ $bKey }}</strong></p>
                @else
                  <p class="{{ !$loop->index ? 'font-semibold' : 'spacer' }}">{{ $bKey }}</p>
                @endif
                <ul>
                  @foreach($bulletpoint as $bPoint)
                    <li><p>{{ $bPoint }}</p></li>
                  @endforeach
                </ul>
              @endforeach
            @endif
          </div>
        </aside>
      </div>
    </div>
  </section>
  <!-- Consulting detail main section ends here -->

  <!-- <section>
    <div class="container">
      <div class="discuss" style="background-image: url({{ asset('assets/frontend/images/consulting/discuss.webp') }});">
        <img src="{{ asset('assets/frontend/images/consulting/trg-brown.webp') }}" class="discuss-trg">
        <p>This case study demonstrates how a strategic, MBNQA-aligned approach can revolutionize semiconductor manufacturing. By focusing on process optimization, predictive analytics, and employee engagement, the organization achieved significant cost
            savings, improved quality, and established a culture of operational excellence.</p>
      </div>
    </div>
  </section> -->

  <!-- Architect Section Start Here -->
  <section>
    <!-- <div class="container">
      <h4 class="hdn-two">Meet the Architect of Success</h4>
      <div class="meet-architect">
          <div class="basis-1/3">
              <figure><img src="{{ asset('assets/frontend/images/consulting/trg-gray.webp') }}"></figure>
              <dfn>Rajesh Kumar</dfn>
              <p>Director of Supply Chain Solutions Blue Ocean Corporation Expertise:?
                  <a href="mailto:e:rajesh.kumar@blueoceancorporation.com">e:rajesh.kumar@blueoceancorporation.com</a></p>
          </div>
          <div class="basis-1/3">
              <figure><img src="{{ asset('assets/frontend/images/consulting/trg-gray.webp') }}"></figure>
              <dfn>Sarah Thompson</dfn>
              <p>Sustainability & ESG Consulting Blue Ocean Corporation
                  <a href="mailto:e:rajesh.kumar@blueoceancorporation.com">e:rajesh.kumar@blueoceancorporation.com</a></p>
          </div>
          <div class="basis-1/3">
              <figure><img src="{{ asset('assets/frontend/images/consulting/trg-gray.webp') }}"></figure>
              <dfn>Michael O’Connor</dfn>
              <p>Blue Ocean Corporation Expertise:?
                  <a href="mailto:e:rajesh.kumar@blueoceancorporation.com">e:rajesh.kumar@blueoceancorporation.com</a></p>
          </div>
      </div>
      <div class="divider-line"></div>
    </div> -->
    <!-- Architect Section Ends Here -->
  
    <!-- Other Case study section start here -->
    @if(isset($relatedCaseStudies) && count($relatedCaseStudies))
      <section>
        <div class="container">
          <h4 class="hdn-two">Other Case studies</h4>
          <div class="case-study-area">
            @foreach($relatedCaseStudies as $relatedCaseStudy)
              <section>
                <figure>
                  <img src="{{ asset('storage/consulting/case-studies/'.$relatedCaseStudy->case_study_thumb_image) }}" class="w-full" alt="" />
                </figure>
                <a href="{{ route('consulting.case.studies', $relatedCaseStudy->slug) }}" class="btn-vert"><img src="{{ asset('assets/frontend/images/consulting/arrow-sm.webp') }}" alt="" />Case Study</a>
                <strong>
                  {!! breakByChars($relatedCaseStudy->consulting_title, 22) !!}
                </strong>
                <a href="{{ route('consulting.case.studies', $relatedCaseStudy->slug) }}"><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="link-arrow" /></a>
              </section>
            @endforeach
          </div>
        </div>
      </section>
    @endif
    <!-- Other Case study section ends here -->

    <div class="above-footer">
      <div class="container">
        <div class="above-footer-inner">
          <img src="{{ asset('assets/frontend/images/latest-added/poly-abv-ftr.webp') }}" class="abs-trg" alt="traingle" />
          <h3>Strategies That Work. Results That Transform</h3>
          <div class="btn-wrap">
            <a href="{{ route('consulting.register') }}" class="btn primary-btn">
              Accelerate Your Success
              <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection