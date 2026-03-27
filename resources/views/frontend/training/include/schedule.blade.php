@if(
  (isset($firstSixMonthsSchedules) && $firstSixMonthsSchedules->count()) ||
  (isset($nextSixMonthsSchedules) && $nextSixMonthsSchedules->count())
)
  <section class="course-schedule-section relative py-10 bg-[#F2F2F2]">
    <div class="container">
      <div class="flex gap-5 flex-col-reverse lg:flex-row justify-between border-b border-primary">
        <h2 class="course-detail-heading">Online/Offline Program</h2>
        <div class="course-filter-radio-wrap">
         
         
        </div>
      </div>
      <div class="bg-white p-5 lg:px-10">
        <ul class="grid grid-cols-1 lg:grid-cols-2 gap-5">
          @foreach($firstSixMonthsSchedules as $firstSixMonthsSchedule)
            @foreach($firstSixMonthsSchedule as $fSMonthsSchedule)
              <li class="sixmonthblock">
                <div class="p-2 border border-[#939393] flex justify-between items-center hover:border-secondary">
                  <p class="text-black font-medium pl-4">{{ Carbon\Carbon::parse($fSMonthsSchedule->course_start_date)->format('d F Y') }}</p>
                  @if($fSMonthsSchedule->course_learning_mode == 'Online')
                    <span class="gap-1 bg-[#ECFDF3] border border-[#ABEFC6] text-[#067647] py-1 px-6 font-medium flex items-center">
                      <img src="{{ asset('assets/frontend/images/icons/dot.svg') }}" />
                      Online
                    </span>
                  @else
                    <span class="gap-1 bg-[#ECFDF3] border border-[#ABEFC6] text-[#067647] py-1 px-6 font-medium flex items-center">
                      <img src="{{ asset('assets/frontend/images/icons/offline.svg') }}" />
                      Offline
                    </span>
                  @endif
                </div>
              </li>
            @endforeach
          @endforeach
          @foreach($nextSixMonthsSchedules as $nextSixMonthsSchedule)
            @foreach($nextSixMonthsSchedule as $nSMonthsSchedule)
              <li class="twelvemonthblock hidden">
                <div class="p-2 border border-[#939393] flex justify-between items-center hover:border-secondary">
                  <p class="text-black font-medium pl-4">{{ Carbon\Carbon::parse($nSMonthsSchedule->course_start_date)->format('d F Y') }}</p>
                  @if($nSMonthsSchedule->course_learning_mode == 'Online')
                    <span class="gap-1 bg-[#ECFDF3] border border-[#ABEFC6] text-[#067647] py-1 px-6 font-medium flex items-center">
                      <img src="{{ asset('assets/frontend/images/icons/dot.svg') }}" />
                      Online
                    </span>
                  @else
                    <span class="gap-1 bg-[#ECFDF3] border border-[#ABEFC6] text-[#067647] py-1 px-6 font-medium flex items-center">
                      <img src="{{ asset('assets/frontend/images/icons/offline.svg') }}" />
                      Offline
                    </span>
                  @endif
                </div>
              </li>
            @endforeach
          @endforeach
        </ul>
      </div>
    </div>
  </section>
@endif