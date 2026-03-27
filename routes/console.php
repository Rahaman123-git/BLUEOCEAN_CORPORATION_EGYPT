<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();



//////////// Course Schedule Update from CRM ////////////////////////////////
Schedule::command('courses:sync-schedule')
   ->twiceMonthly(1, 15)      // 👉 1st & 15th of every month
    ->at('01:00')              // 👉 at 01:00 server time (UTC in your case)
   // ->everyTenMinutes()
	->description('Course Schedule Sync Output - Production - blueoceanacademyegypt.com')
    ->withoutOverlapping()
    ->emailOutputTo('Suresh@blueOceancorporation.com')
    ->emailOutputOnFailure('Suresh@blueOceancorporation.com');

//////////// End Course Schedule Update from CRM ////////////////////////////////