@extends('layouts.frontend.app') 

@push('styles')
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/consulting.css') }}" />
@endpush 

@section('content')
  <!-- Banner Section Starts Here -->
  <section class="hero-banner-section relative">
    <div class="hero-banner-wrap">
      <picture>
        <source media="(min-width:770px)" srcset="{{ asset('assets/frontend/images/consulting/strategic-impact.webp') }}" />
        <img src="{{ asset('assets/frontend/images/consulting/strategic-impact.webp') }}" alt="banner image" class="w-full banner-img" />
      </picture>
    </div>
    <div class="abs-banner-detail">
      <div class="container">
        <h1 class="posn-abv-bot">Strategic Solutions, Proven Results</h1>
      </div>
    </div>
    <div class="on-banner-impact">
      <img src="{{ asset('assets/frontend/images/consulting/poly-on-banner.webp') }}" alt="" />
    </div>
  </section>
  <!-- Banner Section Ends Here -->

  <!-- Top strip case study start here-->
  @if(isset($consultingCompanies) && !empty($consultingCompanies))
    <section class="top-study-change" style="background-image: url({{ asset('assets/frontend/images/consulting/bg-case-study.webp') }});">
      <div class="container">
        <div class="flex">
          <h2><small>Case Studies of</small> Transformative Change</h2>
          <ul class="comp-list">
            @foreach($consultingCompanies as $consultingCompany)
              <li><img src="{{ asset('storage/consulting/companies/'.$consultingCompany->image) }}" alt="" /></li>
            @endforeach
          </ul>
        </div>
      </div>
    </section>
  @endif
  <!-- Top strip case study ends here-->

  <!-- heading -->
  <div class="container">
    <h4 class="hdn-four-md">Delivering Precision, Excellence, and Measurable Results .</h4>
  </div>
  <!-- heading -->

  @if(isset($caseStudies) && !empty($caseStudies))
    @foreach($caseStudies as $caseStudy)
      <section>
        <div class="container">
          <div class="sec-impact">
            <a href="{{ route('consulting.case.studies', $caseStudy->slug) }}" class="btn-vert"><img src="{{ asset('assets/frontend/images/consulting/arrow-sm.webp') }}" alt="" />Case Study</a>
            <div class="sec-impact-inner">
              <figure>
                <img src="{{ asset('storage/consulting/case-studies/'.$caseStudy->case_study_image) }}" alt="case study" />
              </figure>
              <div class="sec-impact-abs">
                <div class="impact-abs-inner">
                  <div class="sec-first-impact">
                    <h4>
                      {!! breakByChars($caseStudy->consulting_title, 22) !!}
                    </h4>
                  </div>
                  <div class="sec-second-impact">
                    <h5>Challenge</h5>
                    <p>{{ $caseStudy->challenge }}</p>
                    <a href="javascript:void(0)" class="mt-3 dropdown-arrow"><img src="{{ asset('assets/frontend/images/dropdown-arrow.png') }}" alt="" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="under-sec-impact hide">
              <div class="text-strategic">
                @php 
                  $highlightedIssue = extractHtmlContent($caseStudy->highlighted_issue, 'pTableP');
                @endphp
                <ul>
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
                <p class="box-bg">{{ $caseStudy->highlighted_summary }}</p>
                <p>They engaged Blue Ocean to lead them out of this situation.</p>
                <a href="{{ route('consulting.case.studies', $caseStudy->slug) }}" class="btn primary-btn bg-blue-600 text-white py-2 px-4">
                  READ CASE STUDY<span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    @endforeach
  @endif
  
  @if(isset($otherCaseStudies) && count($otherCaseStudies))
    <section>
      <div class="container">
        <h4 class="hdn-two">Other Case studies</h4>
        <div class="case-study-area">
          @foreach($otherCaseStudies as $otherCaseStudy)
            <section>
              <figure>
                <img src="{{ asset('storage/consulting/case-studies/'.$otherCaseStudy->case_study_thumb_image) }}" class="w-full" alt="" />
              </figure>
              <a href="{{ route('consulting.case.studies', $otherCaseStudy->slug) }}" class="btn-vert"><img src="{{ asset('assets/frontend/images/consulting/arrow-sm.webp') }}" alt="" />Case Study</a>
              <strong>
                {!! breakByChars($otherCaseStudy->consulting_title, 22) !!}
              </strong>
              <a href="{{ route('consulting.case.studies', $otherCaseStudy->slug) }}"><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="link-arrow" /></a>
            </section>
          @endforeach
        </div>
      </div>
    </section>
  @endif

  <!-- testimonial section start here -->
  <section class="slider-testimonial">
    <div class="container">
      <div class="divider-line"></div>
      <h4 class="hdn-four-md">Where Strategy Meets Success Stories</h4>
      <div class="testimonial-slider">
        <div class="sec-success" style="background-image: url({{ asset('assets/frontend/images/consulting/slide-success.webp') }});">
          <div class="sec-success-inner">
            <div class="fig-sec">
              <figure>
                <img src="{{ asset('assets/frontend/images/consulting/neom.webp') }}" alt="neom" />
              </figure>
            </div>
            <section>
              <p>
                Working with ‘Blue Ocean Corporation’ was a game-changer for our organization. Their deep expertise and tailored approach helped us align with MBNQA principles, resulting in a 15% reduction in operational costs and a 20% drop
                in defect rates within the first year. Their team didn’t just deliver a solution—they became a true partner in our journey toward excellence. We couldn’t have achieved this level of success without their guidance and
                commitment.
              </p>
              <span class="desig"><strong>Jhon Deo,</strong> CEO, NEOM</span>
            </section>
          </div>
        </div>
        <div class="sec-success" style="background-image: url({{ asset('assets/frontend/images/consulting/slide-success.webp') }});">
          <div class="sec-success-inner">
            <div class="fig-sec">
              <figure>
                <img src="{{ asset('assets/frontend/images/consulting/comp-logo-one.webp') }}" alt="neom" />
              </figure>
            </div>
            <section>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, pariatur esse eius similique aperiam impedit sequi nisi rem beatae ipsum fugit. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis hic quae
                voluptatibus atque dolore laborum quasi ipsam animi quas eligendi recusandae reiciendis molestiae eum corrupti, natus obcaecati aliquam dolor sit.
              </p>
              <span class="desig"><strong>Jhon Deo,</strong> CEO, NEOM</span>
            </section>
          </div>
        </div>
        <div class="sec-success" style="background-image: url({{ asset('assets/frontend/images/consulting/slide-success.webp') }});">
          <div class="sec-success-inner">
            <div class="fig-sec">
              <figure>
                <img src="{{ asset('assets/frontend/images/consulting/comp-logo-two.webp') }}" alt="neom" />
              </figure>
            </div>
            <section>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates delectus aperiam ipsum reprehenderit, sequi suscipit esse obcaecati saepe ipsam, pariatur neque quis architecto, non nostrum molestiae illum quia? Blanditiis,
                sequi?
              </p>
              <span class="desig"><strong>Jhon Deo,</strong> CEO, NEOM</span>
            </section>
          </div>
        </div>
      </div>
      <div class="slider-nav" id="custom-controls-second">
        <button type="button" class="btn-control">
          <span class="sr-only">Previous</span>
          <img src="{{ asset('assets/frontend/images/consulting/arrow-prev.webp') }}" />
        </button>
        <button type="button" class="btn-control">
          <span class="sr-only">Next</span>
          <img src="{{ asset('assets/frontend/images/consulting/arrow-next.webp') }}" />
        </button>
      </div>
    </div>
  </section>
  <!-- testimonial section ends here -->
@endsection 

@push('scripts') 
  <script src="{{ asset('assets/frontend/js/consulting.js') }}"></script>
@endpush