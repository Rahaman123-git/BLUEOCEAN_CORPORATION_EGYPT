<div class="w-full">
  <div class="course-table-wrap">
    @if(
      (isset($firstSixMonthsSchedules) && $firstSixMonthsSchedules->count()) ||
      isset($nextSixMonthsSchedules) && $nextSixMonthsSchedules->count()
    )
      @php
        $downloadFlag = 0;
      @endphp
      @if(isset($firstSixMonthsSchedules) && $firstSixMonthsSchedules->count())
        @foreach($firstSixMonthsSchedules as $fKey => $firstSixMonthsSchedule)
          <div class="relative overflow-x-auto mb-10 sixmonthblock">
            <div class="flex flex-col-reverse items-start gap-5 lg:flex-row lg:items-center lg:justify-between">
              <p class="table-date">{{ $fKey }}</p>
              @if(!$downloadFlag)
                @if(
                  ($courseType == 'CERTIFICATION_TRAINING') && 
                  (isset($courseCalendarFile['certificate']) && $courseCalendarFile['certificate'])
                )
                  <a href="javascript:void(0)" class="table-download" data-modal-target="registration-form-modal" data-modal-toggle="registration-form-modal" data-modal-title="Course Calendar Download" data-modal-type="courseCalendar" data-course-id="certificate" data-course-short-title="" data-course-title="">
                    Download Course Training Calendar
                    <img src="{{ asset('assets/frontend/images/icons/download-primary.svg') }}" class="w-6 h-6" />
                  </a>
                @elseif(
                  ($courseType == 'CORPORATE_TRAINING') &&
                  (isset($courseCalendarFile['corporate']) && $courseCalendarFile['corporate'])
                )
                  <a href="javascript:void(0)" class="table-download" data-modal-target="registration-form-modal" data-modal-toggle="registration-form-modal" data-modal-title="Course Calendar Download" data-modal-type="courseCalendar" data-course-id="corporate" data-course-short-title="" data-course-title="">
                    Download Course Training Calendar
                    <img src="{{ asset('assets/frontend/images/icons/download-primary.svg') }}" class="w-6 h-6" />
                  </a>
                @endif
                @php
                  $downloadFlag = 1;
                @endphp
              @endif
            </div>
            <table class="course-search-table course-details-table">
              <thead class="table-head">
                <tr>
                  <th scope="col" class="w-1/2">
                    Course Name
                  </th>
                  @if($courseType == 'CERTIFICATION_TRAINING')
                    <th scope="col" class="w-1/5">
                      Start Date
                    </th>
                    <th scope="col" class="w-1/5">
                      End Date
                    </th>
                    <th scope="col" class="w-1/5">
                      Time (Dubai)
                    </th>
                    <th scope="col" class="w-1/5">
                      Training Days
                    </th>
                    <th scope="col" class="w-1/5">
                      Course Fees
                    </th>
                    <th scope="col" class="w-1/5">
                      Mode of Delivery
                    </th>
                  @elseif($courseType == 'CORPORATE_TRAINING')
                    <th scope="col" class="w-1/5">
                      Start From
                    </th>
                    <th scope="col" class="w-1/5">
                      Venue
                    </th>
                    <th scope="col" class="w-1/5">
                      Duration
                    </th>
                    <th scope="col" class="w-1/5">
                      Course Fee
                    </th>
                    <th class="w-1/6"></th>
                  @endif
                </tr>
              </thead>
              <tbody class="table-body">
                @foreach($firstSixMonthsSchedule as $fSMonthsSchedule)
                  <tr onclick="window.location.href='{{ route('training.course.details', $fSMonthsSchedule->course->slug) }}'" class="cursor-pointer">
                    <td>
                      <dfn>Course Name</dfn>
                      <div><span class="table-flag" style="background-color: {{ $fSMonthsSchedule->course->affiliation->affiliation_text_bg_color_code ?? '' }};">
  {{ isset($fSMonthsSchedule->course->affiliation) ? $fSMonthsSchedule->course->affiliation->short_name_en : '' }}
</span></div>
                      {{ $fSMonthsSchedule->course->course_title_en }} | <strong>{{ $fSMonthsSchedule->course->course_short_title_en }}</strong>
                    </td>
                    @if($courseType == 'CERTIFICATION_TRAINING')
                      <td class="left-table-cld">
                        <em>Start Date</em>
                        <strong>{{ Carbon\Carbon::parse($fSMonthsSchedule->course_start_date)->format("d MʼY") }}</strong>
                      </td>
                      <td class="right-table-cld">
                        <em>End Date</em>
                        <strong>{{ Carbon\Carbon::parse($fSMonthsSchedule->course_end_date)->format("d MʼY") }}</strong>
                      </td>
                      <td class="left-table-cld">
                        <em>Start and end time</em>
                        <strong>{{ $fSMonthsSchedule->start_time }} - {{ $fSMonthsSchedule->end_time }}</strong>
                      </td>
                      <td class="right-table-cld">
                      <em>Training Days</em>
                        @php
                          $trainingDays = '';
                          if($fSMonthsSchedule->sunday){
                            $trainingDays .= 'Sun, ';
                          }
                          if($fSMonthsSchedule->monday){
                            $trainingDays .= 'Mon, ';
                          }
                          if($fSMonthsSchedule->tuesday){
                            $trainingDays .= 'Tue, ';
                          }
                          if($fSMonthsSchedule->wednesday){
                            $trainingDays .= 'Wed, ';
                          }
                          if($fSMonthsSchedule->thursday){
                            $trainingDays .= 'Thu, ';
                          }
                          if($fSMonthsSchedule->friday){
                            $trainingDays .= 'Fri, ';
                          }
                          if($fSMonthsSchedule->saturday){
                            $trainingDays .= 'Sat';
                          }
                        @endphp
                           
                        <strong>{{ rtrim($trainingDays, ', ') ?? 'N/A' }}</strong>
                      </td>
                      <td class="left-table-cld">
                        <em>Course Fee</em>
                        <strong>{{ $fSMonthsSchedule->course_currency }} {{ number_format($fSMonthsSchedule->course_amount) }}</strong>
                      </td>
                      <td class="right-table-cld">
                        <em>Mode of delivery</em>
                        <div class="flex">
                          @if($fSMonthsSchedule->course_learning_mode == 'Online')
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
                         
                        </div>
                      </td>
                      <td class="table-details">
                         <a href="{{ route('training.course.details', $fSMonthsSchedule->course->slug) }}" class="inline-block btn bg-primary p-1 hover:bg-secondary w-8 h-8">
                            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="w-full">
                          </a>
                      </td>
                    @elseif($courseType == 'CORPORATE_TRAINING')
                      <td>
                        <em>Mode of delivery</em>
                        <strong>{{ Carbon\Carbon::parse($fSMonthsSchedule->course->course_start_date)->format("d MʼY") }}</strong>
                      </td>
                      <td>
                        <strong>{{ $fSMonthsSchedule->course_venue }}</strong>
                      </td>
                      <td>
                        <strong>{{ $fSMonthsSchedule->course_duration }} sessions</strong>
                      </td>
                      <td>
                        <strong>TBD{{-- $fSMonthsSchedule->course_amount }}{{ $fSMonthsSchedule->course_currency --}}</strong>
                      </td>
                      <td>
                        <a href="{{ route('training.course.details', $fSMonthsSchedule->course->slug) }}" class="inline-block btn bg-primary p-1 hover:bg-secondary w-8 h-8 details-arrow">
                          <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="w-full" />
                        </a>
                      </td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endforeach
      @endif
      @if(isset($nextSixMonthsSchedules) && $nextSixMonthsSchedules->count())
        @foreach($nextSixMonthsSchedules as $fKey => $nextSixMonthsSchedule)
          <div class="relative overflow-x-auto mb-10 twelvemonthblock hidden">
            <div class="flex flex-col-reverse items-start gap-5 lg:flex-row lg:items-center lg:justify-between">
              <p class="table-date">{{ $fKey }}</p>
              @if(!$downloadFlag)
                @if(
                  ($courseType == 'CERTIFICATION_TRAINING') && 
                  (isset($courseCalendarFiles['certificate']) && $courseCalendarFiles['certificate'])
                )
                  <a href="javascript:void(0)" class="table-download" data-modal-target="registration-form-modal" data-modal-toggle="registration-form-modal" data-modal-title="Course Calendar Download" data-modal-type="courseCalendar" data-course-id="certificate" data-course-short-title="" data-course-title="">
                    Download Course Training Calendar
                    <img src="{{ asset('assets/frontend/images/icons/download-primary.svg') }}" class="w-6 h-6" />
                  </a>
                @elseif(
                  ($courseType == 'CORPORATE_TRAINING') &&
                  (isset($courseCalendarFiles['corporate']) && $courseCalendarFiles['corporate'])
                )
                  <a href="javascript:void(0)" class="table-download" data-modal-target="registration-form-modal" data-modal-toggle="registration-form-modal" data-modal-title="Course Calendar Download" data-modal-type="courseCalendar" data-course-id="corporate" data-course-short-title="" data-course-title="">
                    Download Course Training Calendar
                    <img src="{{ asset('assets/frontend/images/icons/download-primary.svg') }}" class="w-6 h-6" />
                  </a>
                @endif
                @php
                  $downloadFlag = 1;
                @endphp
              @endif
            </div>
            <table class="course-search-table course-details-table">
              <thead class="table-head">
                <tr>
                  <th scope="col" class="w-1/2">
                    Course Name
                  </th>
                  @if($courseType == 'CERTIFICATION_TRAINING')
                    <th scope="col" class="w-1/5">
                      Start Date
                    </th>
                    <th scope="col" class="w-1/5">
                      End Date
                    </th>
                    <th scope="col" class="w-1/5">
                      Time (Dubai)
                    </th>
                    <th scope="col" class="w-1/5">
                      Training Days
                    </th>
                    <th scope="col" class="w-1/5">
                      Course Fees
                    </th>
                    <th scope="col" class="w-1/5">
                      Mode of Delivery
                    </th>
                  @elseif($courseType == 'CORPORATE_TRAINING')
                    <th scope="col" class="w-1/5">
                      Start From
                    </th>
                    <th scope="col" class="w-1/5">
                      Venue
                    </th>
                    <th scope="col" class="w-1/5">
                      Duration
                    </th>
                    <th scope="col" class="w-1/5">
                      Course Fee
                    </th>
                    <th class="w-1/6"></th>
                  @endif
                </tr>
              </thead>
              <tbody class="table-body">
                @foreach($nextSixMonthsSchedule as $nSMonthsSchedule)
                  <tr onclick="window.location.href='{{ route('training.course.details', $nSMonthsSchedule->course->slug) }}'" class="cursor-pointer">
                    <td>
                      <div><span class="table-flag bg-[{{ $nSMonthsSchedule->course->affiliation->affiliation_text_bg_color_code ?? '' }}]">{{ isset($nSMonthsSchedule->course->affiliation) ? $nSMonthsSchedule->course->affiliation->short_name_en : '' }}</span></div>
                      {{ $nSMonthsSchedule->course->course_title_en }} | <strong>{{ $nSMonthsSchedule->course->course_short_title_en }}</strong>
                    </td>
                    @if($courseType == 'CERTIFICATION_TRAINING')
                      <td  class="left-table-cld">
                        <strong>{{ Carbon\Carbon::parse($nSMonthsSchedule->course_start_date)->format("d MʼY") }}</strong>
                      </td>
                      <td  class="right-table-cld">
                        <strong>{{ Carbon\Carbon::parse($nSMonthsSchedule->course_end_date)->format("d MʼY") }}</strong>
                      </td>
                      <td  class="left-table-cld">
                        <strong>{{ $nSMonthsSchedule->start_time }} - {{ $nSMonthsSchedule->end_time }}</strong>
                      </td>
                      <td class="right-table-cld">
                        @php
                          $trainingDays = '';
                          if($nSMonthsSchedule->sunday){
                            $trainingDays .= 'Sun, ';
                          }
                          if($nSMonthsSchedule->monday){
                            $trainingDays .= 'Mon, ';
                          }
                          if($nSMonthsSchedule->tuesday){
                            $trainingDays .= 'Tue, ';
                          }
                          if($nSMonthsSchedule->wednesday){
                            $trainingDays .= 'Wed, ';
                          }
                          if($nSMonthsSchedule->thursday){
                            $trainingDays .= 'Thu, ';
                          }
                          if($nSMonthsSchedule->friday){
                            $trainingDays .= 'Fri, ';
                          }
                          if($nSMonthsSchedule->saturday){
                            $trainingDays .= 'Sat';
                          }
                        @endphp
                        <strong>{{ rtrim($trainingDays, ', ') ?? 'N/A' }}</strong>
                      </td>
                      <td class="left-table-cld">
                        <strong>{{ $nSMonthsSchedule->course_currency }} {{ number_format($nSMonthsSchedule->course_amount) }}</strong>
                      </td>
                      <td class="right-table-cld">
                        <div class="flex">
                          @if($nSMonthsSchedule->course_learning_mode == 'Online')
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
                          <a href="{{ route('training.course.details', $nSMonthsSchedule->course->slug) }}" class="inline-block btn bg-primary p-1 hover:bg-secondary w-8 h-8">
                            <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="w-full">
                          </a>
                        </div>
                      </td>
                    @elseif($courseType == 'CORPORATE_TRAINING')
                      <td class="left-table-cld">
                        <strong>{{ Carbon\Carbon::parse($nSMonthsSchedule->course->course_start_date)->format("d MʼY") }}</strong>
                      </td>
                      <td class="right-table-cld">
                        <strong>{{ $nSMonthsSchedule->course_venue }}</strong>
                      </td>
                      <td>
                        <strong>{{ $nSMonthsSchedule->course_duration }} sessions</strong>
                      </td>
                      <td>
                        <strong>TBD{{-- $nSMonthsSchedule->course_amount }}{{ $nSMonthsSchedule->course_currency --}}</strong>
                      </td>
                      <td>
                        <a href="{{ route('training.course.details', $nSMonthsSchedule->course->slug) }}" class="inline-block btn bg-primary p-1 hover:bg-secondary w-8 h-8 details-arrow">
                          <img src="{{ asset('assets/frontend/images/icons/arrow-right.svg') }}" class="w-full" />
                        </a>
                      </td>
                    @endif
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        @endforeach
      @endif
    @else
      <div class="">
        <div class="nocourse">
          <h2 class="notfound-text flex">
            <img src="{{ asset('assets/frontend/images/not-found.png') }}" alt="">No Course Schedule Found
          </h2>
        </div>
      </div>
    @endif
  </div>
</div>