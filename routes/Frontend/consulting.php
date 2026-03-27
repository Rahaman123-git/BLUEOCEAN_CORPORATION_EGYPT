<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Consulting\ConsultingController;

Route::prefix('consulting')->name('consulting.')->group(function () {
    Route::get('/', [ConsultingController::class, 'index'])->name('home');
    Route::get('/precision-strategy', [ConsultingController::class, 'precisionStrategy'])->name('precision.strategy');
    Route::get('/strategic-impact', [ConsultingController::class, 'strategicImpact'])->name('strategic.impact');
    Route::get('/case-studies/{slug}', [ConsultingController::class, 'caseStudies'])->name('case.studies');

    Route::get('/register', [ConsultingController::class, 'register'])->name('register');
});