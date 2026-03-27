<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Course\CategoryController;
use App\Http\Controllers\Course\AffiliationController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Course\CourseScheduleController;
use App\Http\Controllers\Course\SeminarController;
use App\Http\Controllers\Course\TrainerController;
use App\Http\Controllers\Course\TestimonialController;

Route::prefix('courses')->name('courses.')->middleware('auth')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])
        ->name('categories.index');
    Route::get('categories/create', [CategoryController::class, 'create'])
        ->name('categories.create');
    Route::post('categories', [CategoryController::class, 'store'])
        ->name('categories.store');
    Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])
        ->name('categories.edit');
    Route::put('categories/{id}', [CategoryController::class, 'update'])
        ->name('categories.update');
    Route::delete('categories/{id}', [CategoryController::class, 'destroy'])
        ->name('categories.destroy');

    Route::get('affiliations', [AffiliationController::class, 'index'])
        ->name('affiliations.index');
    Route::get('affiliations/create', [AffiliationController::class, 'create'])
        ->name('affiliations.create');
    Route::post('affiliations', [AffiliationController::class, 'store'])
        ->name('affiliations.store');
    Route::get('affiliations/{id}/edit', [AffiliationController::class, 'edit'])
        ->name('affiliations.edit');
    Route::put('sub.affiliations/{id}', [AffiliationController::class, 'update'])
        ->name('affiliations.update');
    Route::delete('affiliations/{id}', [AffiliationController::class, 'destroy'])
        ->name('affiliations.destroy');

    Route::get('/', [CourseController::class, 'index'])
        ->name('index');
    Route::get('/create', [CourseController::class, 'create'])
        ->name('create');
    Route::post('/', [CourseController::class, 'store'])
        ->name('store');
    Route::get('/{id}/edit', [CourseController::class, 'edit'])
        ->name('edit');
    Route::put('/{id}', [CourseController::class, 'update'])
        ->name('update');
    Route::get('/{id}/module', [CourseController::class, 'module'])
        ->name('module');
    Route::put('/{id}/module', [CourseController::class, 'updateModule'])
        ->name('update.module');
    Route::delete('/{id}', [CourseController::class, 'destroy'])
        ->name('destroy');

    Route::get('/sync-schedule', [CourseScheduleController::class, 'syncSchedule'])
        ->name('sync.schedule'); 
    Route::post('/store-calendar-file', [CourseScheduleController::class, 'storeCalendarFile'])
        ->name('full.year.calendar.store'); 

    Route::get('seminars', [SeminarController::class, 'index'])
        ->name('seminars.index');
    Route::get('seminars/create', [SeminarController::class, 'create'])
        ->name('seminars.create');
    Route::post('seminars', [SeminarController::class, 'store'])
        ->name('seminars.store');
    Route::get('seminars/{id}/edit', [SeminarController::class, 'edit'])
        ->name('seminars.edit');
    Route::put('seminars/{id}', [SeminarController::class, 'update'])
        ->name('seminars.update');
    Route::delete('seminars/{id}', [SeminarController::class, 'destroy'])
        ->name('seminars.destroy');

	Route::get('trainers', [TrainerController::class, 'index'])
        ->name('trainers.index');
    Route::post('trainers', [TrainerController::class, 'store'])
        ->name('trainers.store');
    Route::delete('trainers/{id}', [TrainerController::class, 'destroy'])
        ->name('trainers.destroy');

    Route::get('testimonials', [TestimonialController::class, 'index'])
        ->name('testimonials.index');
    Route::get('testimonials/create', [TestimonialController::class, 'create'])
        ->name('testimonials.create');
    Route::post('testimonials', [TestimonialController::class, 'store'])
        ->name('testimonials.store');
    Route::get('testimonials/{id}/edit', [TestimonialController::class, 'edit'])
        ->name('testimonials.edit');
    Route::put('testimonials/{id}', [TestimonialController::class, 'update'])
        ->name('testimonials.update');
    Route::delete('testimonials/{id}', [TestimonialController::class, 'destroy'])
        ->name('testimonials.destroy');
});
