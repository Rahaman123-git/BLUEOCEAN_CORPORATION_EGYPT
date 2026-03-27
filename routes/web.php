<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Course\CourseScheduleController;
use App\Http\Controllers\Frontend\Training\TrainingController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/Frontend/general.php';
require __DIR__.'/Frontend/consulting.php';
require __DIR__.'/Frontend/training.php';
require __DIR__.'/Frontend/conferences.php';
require __DIR__.'/Frontend/blog.php';
require __DIR__.'/Frontend/lead.php';
require __DIR__.'/auth.php';
require __DIR__.'/employee.php';
require __DIR__.'/course.php';
require __DIR__.'/consulting.php';
require __DIR__.'/conference.php';
require __DIR__.'/news.php';
require __DIR__.'/blog.php';
require __DIR__.'/advisory.php';
require __DIR__.'/award.php';
require __DIR__.'/gallery.php';
require __DIR__.'/lead.php';
require __DIR__.'/website-content.php';

// Use ONLY ONE fallback in web.php
//Route::fallback(function () {
//    return redirect('/'); // send user back home
//});
Route::get('/courses/sync/report', [CourseScheduleController::class, 'syncReport'])
    ->name('courses.sync.report');

// Optional: POST endpoint to actually write to DB from the report page
Route::post('/courses/sync/commit', [CourseScheduleController::class, 'syncReportCommit'])
    ->name('courses.sync.commit');


Route::get('/test-mail', function () {
    Mail::raw('This is a test email from Laravel-Egypt', function ($message) {
        $message->to('suresh@blueoceancorporation.com')
                ->subject('Test Mail from Laravel');
    });

    return 'Mail sent (if config is correct).';
});



Route::get('/training/export/programs.csv', [TrainingController::class, 'exportAllProgramsCsv'])
    ->name('training.export.programs.csv');