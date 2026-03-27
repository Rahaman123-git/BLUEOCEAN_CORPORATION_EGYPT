<div class="basis-[35%] bg-[#F2F2F2] p-4 lg:p-7">
  <div>
    <p class="text-black text-lg font-medium">Life-changing certifications! Comprehensive courses, exceptional support. A must for career growth!</p>
    <div class="mt-10 lg:h-[1003px] lg:overflow-y-auto">
      <!-- Elfsight Google Reviews | Blue Ocean Corporation -->
      <script src="https://static.elfsight.com/platform/platform.js" async></script>
      <div class="elfsight-app-7e8efc9b-c0c3-4656-b6f2-53e07c2e53bc" data-elfsight-app-lazy></div>
    </div>
  </div>
</div>
<div class="basis-[65%]">
  <div>
    @if(isset($testimonials['TEXT_TESTIMONIAL']) && $testimonials['TEXT_TESTIMONIAL']->count())
      <ul class="grid grid-cols-1 lg:grid-cols-2 gap-5">
        @foreach($testimonials['TEXT_TESTIMONIAL'] as $testimonial)
          <li>
            <div class="bg-[#124F8E] p-10 text-white">
              {!! str_replace('<p>', '<p class="text-sm">', $testimonial->client_testimonial) !!}
              <div class="flex flex-row gap-5 items-center mt-4">
                <div class="profile-image">
                  <img src="{{ asset('storage/courses/testimonials/'.$testimonial->image) }}" alt="" class="shrink-0" />
                </div>
                <div>
                  <h4 class="text-xl font-medium">{{ $testimonial->client_name }}</h4>
                  <p class="text-base">{{ $testimonial->client_designation }}</p>
                </div>
              </div>
            </div>
          </li>
        @endforeach
      </ul>
    @endif
  </div>

  @if(isset($testimonials['VIDEO_TESTIMONIAL']) && $testimonials['VIDEO_TESTIMONIAL']->count())
    <div class="voice-success-media w-full">
      <div class="video-test-slider">
        @foreach($testimonials['VIDEO_TESTIMONIAL'] as $tKey => $testimonial)
          @if(!$tKey)
            <div class="video-item">
              <div class="aspect-ratio-16/9 h-full w-full rounded-lg">
                <iframe width="100%" height="370" src="{{ $testimonial->client_testimonial_video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              </div>
            </div>
          @else
            <div class="video-item">
              <iframe width="100%" height="370" src="{{ $testimonial->client_testimonial_video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          @endif
        @endforeach
      </div>
      <ul class="controls testimonial-arrow flex" id="custom-control">
        <li class="prev mr-2" data-controls="prev">
          <span><img src="{{ asset('assets/frontend/images/icons/arrow-left.svg') }}" alt="" /></span>
        </li>
        <li class="next" data-controls="next">
          <span><img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" alt="" /></span>
        </li>
      </ul>
      <div class="voice-success-media-wrap">
        <div class="voice-success-media-img"></div>
      </div>
    </div>
  @endif
</div>

