<div class="flex flex-col lg:flex-row">
  <div class="w-full">
    <ul class="flex flex-col gap-[30px]">
      @if(isset($courses) && $courses->count())
        @foreach($courses as $course)
          @if($course->course_type == 'CERTIFICATION_TRAINING')
            <li class="course-details-box">
              <div class="border-primary bg-white">
                <div class="flex items-center pt-5 flex-wrap">
                  <div class="flex items-center gap-2 p-4 w-full md:basis-[60%] lg:basis-[40%] -mt-[10px]">
                    @php
                      if(isset($course->nearestSchedule)){
                        $start = \Carbon\Carbon::parse($course->nearestSchedule->course_start_date);
                        $end = \Carbon\Carbon::parse($course->nearestSchedule->course_end_date);
                      }else{
                        $start = '';
                        $end = '';
                      }
                    @endphp
                    @if($start && $end)
                      <img src="{{ asset('assets/frontend/images/icons/calendar-event.svg') }}" />
                      <p class="text-[#585858CC] font-medium text-sm lg:text-base">Starts From <span class="inline-block text-black">{{ $start->format('M d') }} - {{ $end->format('M d') }}{{ $start->year === $end->year ? "’ " . $end->year : " " . $end->format("’ y") }}</span></p>
                    @endif
                  </div>
                  <div class="bg-[#013F81] pl-10 py-4 pr-4 w-full md:basis-[40%] lg:basis-[60%]" style="clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%, 30px 0%);">
                    <h2 class="text-[#DFE7EF] font-medium text-sm lg:text-base txt-aln">
                      {{ $course->category->name_en }}
                    </h2>
                  </div>
                </div>
                <div class="flex flex-col lg:flex-row mobile-course relative">
                  <div class="basis-[40%] width-course-m" style="clip-path: polygon(0 0, 100% 0, 80% 100%, 0 100%, 0 0);">
                    <img src="{{ asset('storage/courses/courses/'.$course->course_image) }}" alt="" class="w-full h-full object-cover" />
                  </div>
                  <div class="basis-[60%] xl:pl-5 xxl:pl-10 py-5 lg:pr-2 xxl:pr-5 flex flex-col justify-between couser-data">
                    <div class="flex items-center">
                      <div class="course-logo">
                        <img src="{{ asset('storage/courses/affiliations/'.$course->affiliation->image) }}" alt="" />
                      </div>
                      <h3 class="text-[#4F4F4F] text-lg text-[20px] font-bold pr-4 pl-4 lg:pl-0"><span class="text-black"> {{ $course->course_short_title_en }} </span> | {{ $course->course_title_en }}</h3>
                      @if($course->nearestSchedule)
                        @if($course->nearestSchedule->course_learning_mode == 'Online')
                          <span class="gap-1 bg-[#ECFDF3] border border-[#ABEFC6] text-[#067647] user-online flex items-center">
                            <img src="{{ asset('assets/frontend/images/icons/dot.svg') }}" />
                            Online
                          </span>
                        @else
                          <span class="gap-1 bg-[#ECFDF3] border border-[#ABEFC6] text-[#067647] user-online flex items-center">
                            <img src="{{ asset('assets/frontend/images/icons/offline.svg') }}" />
                            Offline
                          </span>
                        @endif
                      @endif
                    </div>
                    <div class="flex items-center justify-end flex-col xxl:flex-row gap-2 lg:flex-row">
                      <div class="flex lg:gap-2 gap-2 xxl:gap-5 flex-row w-full justify-end px-2 mt-3">
                        <a href="{{ route('training.course.details', $course->slug) }}" class="btn primary-btn-outline text-base course-button">
                          View Course Details
                        </a>
                        <a href="{{ route('training.register') }}" class="btn primary-btn course-button"
                                >
                                Register Now
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                            </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          @elseif($course->course_type == 'CORPORATE_TRAINING')
            <li class="course-details-box">
              <div class=" border-primary bg-white">
                <div class="flex items-center pt-5 flex-wrap">
                  <div class="flex items-center gap-2 p-4 w-full md:basis-[60%] lg:basis-[40%] -mt-[10px]">
                    @php
                      if(isset($course->nearestSchedule)){
                        $start = \Carbon\Carbon::parse($course->nearestSchedule->course_start_date);
                        $end = \Carbon\Carbon::parse($course->nearestSchedule->course_end_date);
                      }else{
                        $start = '';
                        $end = '';
                      }
                    @endphp
                    @if($start && $end)
                      <img src="{{ asset('assets/frontend/images/icons/calendar-event.svg') }}" />
                      <p class="text-[#585858CC] font-medium text-sm lg:text-base">Starts From <span class="inline-block text-black">{{ $start->format('M d') }} - {{ $end->format('M d') }}{{ $start->year === $end->year ? "’ " . $end->year : " " . $end->format("’ y") }}</span></p>
                    @endif
                  </div>
                  <div class="bg-[#013F81] pl-10 py-4 pr-4 w-full md:basis-[40%] lg:basis-[60%]" style="clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%, 30px 0%);">
                    <h2 class="text-[#DFE7EF] font-medium text-sm lg:text-base">
                      {{ $course->category->name_en }}
                    </h2>
                  </div>
                </div>
                <div class="flex flex-col lg:flex-row mobile-course relative">
                  <div class="basis-[40%] width-course-m img-full-m" style="clip-path: polygon(0 0, 100% 0, 80% 100%, 0 100%, 0 0);">
                    <img src="{{ asset('storage/courses/courses/'.$course->course_image) }}" alt="" class="w-full h-full object-cover" />
                  </div>
                  <div class="basis-[60%] xl:pl-5 xxl:pl-10 py-5 lg:pr-2 xxl:pr-5 flex flex-col justify-between couser-data low-gap-coursr">
                    <h3 class="text-[#4F4F4F] text-lg text-[20px] font-medium pb-8 pr-4 pl-4 lg:pl-0 nomargin-hdr">
                      {{ $course->course_title_en }}
                    </h3>
                    <div class="flex items-center justify-between flex-col xxl:flex-row gap-2 lg:flex-row">
                      <div class="text-black flex items-center gap-2 flex-wrap course-duration">
                        @if($course->nearestSchedule && $course->nearestSchedule->course_duration)
                          <p class="flex items-center gap-2">
                            <img src="{{ asset('assets/frontend/images/icons/clock.svg') }}" />
                            <span class="inline-block text-[13px] font-medium">{{ $course->nearestSchedule->course_duration }} Days</span>
                          </p>
                        @endif
                        @if($course->nearestSchedule && $course->nearestSchedule->course_venue)
                          <p class="flex items-center gap-2">
                            <img src="{{ asset('assets/frontend/images/icons/map-pin.svg') }}" />
                            <span class="inline-block text-[13px] font-medium">{{ $course->nearestSchedule->course_venue }}</span>
                          </p>
                        @endif
                      </div>
                      <div class="flex lg:gap-2 gap-2 xxl:gap-5 flex-row w-full justify-end px-2 mt-3 mb-3">
                        <a href="{{ route('training.course.details', $course->slug) }}" class="btn primary-btn-outline text-base course-button">
                          View Course Details
                        </a>
                       <a href="{{ route('training.register') }}" class="btn primary-btn course-button"
                                >
                                Register Now
                                <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" />
                            </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          @endif
          <!--  -->
        @endforeach
      @else
        <li class="course-details-box">
          <div class="">
            <div class="nocourse">
              <h2 class="notfound-text flex">
                <img src="{{ asset('assets/frontend/images/not-found.png') }}" alt="">Course Not Found
              </h2>
            </div>
          </div>
        </li>
      @endif
    </ul>
  </div>
</div>