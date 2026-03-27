@if(
  isset($testimonials['TEXT_TESTIMONIAL']) && $testimonials['TEXT_TESTIMONIAL']->count() ||
  isset($testimonials['VIDEO_TESTIMONIAL']) && $testimonials['VIDEO_TESTIMONIAL']->count()
)
  <section class="voice-success-section new-corner-gray">
    <div class="container">
      <div class="voice-success-head voic-succ flex flex-wrap lg:flex-row">
        <div class=" w-full">
          <h2 class="sub-heading text-primary">Voices of <strong>Success</strong></h2>
        </div>
        <div class=" w-full">
          <p class="body-text">We believe the true measure of our impact lies in the stories of our clients, students, and partners. Explore their testimonials to see how our innovative strategies have fostered growth, inspired learning, and driven success.</p>
        </div>
      </div>
      <div class="voice-success-main">
        @if(isset($testimonials['TEXT_TESTIMONIAL']) && $testimonials['TEXT_TESTIMONIAL']->count())
          <div class="voice-success-testi w-full lg:w-1/2 relative">
            <div class="slider-group">
              @if(isset($testimonials['TEXT_TESTIMONIAL']) && $testimonials['TEXT_TESTIMONIAL']->count() > 1)
                <div class="voice-controler">
                  <button id="prev-voice" data-slider="voice-slider"> <img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" class="" /></button>
                  <button id="next-voice" data-slider="voice-slider"> <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="" /></button>
                </div>
              @endif
              <div class="voic-sucess-slider" data-slider="voice-slider">
                @foreach($testimonials['TEXT_TESTIMONIAL'] as $testimonial)
                  <div class="item">
                    <div class="testimonial-list boc-testimonial">
                      <div class="testimonial-item bg-[#4BA1BE]">
                        <div class="testimonial-wrap">
                          <img src="{{ asset('assets/frontend/images/testimonial-flag.png') }}" class="testimonial-img" />
                          <div class="testimonial-text">
                            {!! str_replace('<p>', '<p class="text-sm">', $testimonial->client_testimonial) !!}
                          </div>
                          <div class="testimonial-info">
                            <h3 class="testimonial-name">{{ $testimonial->client_name }}</h3>
                            <p class="testimonial-designation">{{ $testimonial->client_designation }}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        @endif
        @if(isset($testimonials['VIDEO_TESTIMONIAL']) && $testimonials['VIDEO_TESTIMONIAL']->count())
          <div class="voice-success-media margin-video-box w-full lg:w-1/2 relative">
            <div class="slider-group">
              @if(isset($testimonials['TEXT_TESTIMONIAL']) && $testimonials['TEXT_TESTIMONIAL']->count() > 1)
                <div class="voice-controler">
                  <button id="prev-video" data-slider="video-slider"><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" class="" /></button>
                  <button id="next-video" data-slider="video-slider"><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="" /></button>
                </div>
              @endif
              <div class="video-sucess-slider" data-slider="video-slider">
                @foreach($testimonials['VIDEO_TESTIMONIAL'] as $tKey => $testimonial)
                  <div class="item">
                    <div class="voice-success-media-wrap">
                      <div class="voice-success-media-img">
                        <iframe width="100%" height="500" src="{{ $testimonial->client_testimonial_video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        @endif
      </div>
    </div>
  </section>
@endif