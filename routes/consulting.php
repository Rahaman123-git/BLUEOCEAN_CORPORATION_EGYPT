<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Consulting\ConsultingCompanyController;
use App\Http\Controllers\Consulting\ConsultingController;
use App\Http\Controllers\Consulting\TestimonialController;

Route::prefix('case-studies')->name('consulting.')->middleware('auth')->group(function () {
    Route::get('companies', [ConsultingCompanyController::class, 'index'])
        ->name('companies.index');
    Route::get('companies/create', [ConsultingCompanyController::class, 'create'])
        ->name('companies.create');
    Route::post('companies', [ConsultingCompanyController::class, 'store'])
        ->name('companies.store');
    Route::get('companies/{id}/edit', [ConsultingCompanyController::class, 'edit'])
        ->name('companies.edit');
    Route::put('companies/{id}', [ConsultingCompanyController::class, 'update'])
        ->name('companies.update');
    Route::delete('companies/{id}', [ConsultingCompanyController::class, 'destroy'])
        ->name('companies.destroy');

    Route::get('/', [ConsultingController::class, 'index'])
        ->name('index');
    Route::get('/create', [ConsultingController::class, 'create'])
        ->name('create');
    Route::post('/', [ConsultingController::class, 'store'])
        ->name('store');
    Route::get('/{id}/edit', [ConsultingController::class, 'edit'])
        ->name('edit');
    Route::put('/{id}', [ConsultingController::class, 'update'])
        ->name('update');
    Route::delete('/{id}', [ConsultingController::class, 'destroy'])
        ->name('destroy');

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