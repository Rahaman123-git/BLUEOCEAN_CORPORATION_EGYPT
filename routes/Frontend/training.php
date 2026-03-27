<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Training\TrainingController;

Route::prefix('training')->name('training.')->group(function () {
    Route::get('/', [TrainingController::class, 'index'])->name('home');
    Route::get('/certification-programs', [TrainingController::class, 'certificationPrograms'])->name('certification.program');
    Route::get('/affliations', [TrainingController::class, 'affliations'])->name('affliations');
    Route::get('/affliations-expanded', [TrainingController::class, 'affliationsExpanded'])->name('affliations.expanded');
    Route::get('/corporate', [TrainingController::class, 'corporate'])->name('corporate');
    Route::get('/corporate-programs', [TrainingController::class, 'corporatePrograms'])->name('corporate.program');
    Route::get('/webinar-seminar', [TrainingController::class, 'webinarSeminar'])->name('webinar.seminar');
    Route::get('/webinar-seminar-register/{slug}', [TrainingController::class, 'webinarSeminarRegister'])->name('webinar.seminar.register');
    Route::get('/course/{slug}', [TrainingController::class, 'courseDetails'])->name('course.details');
	Route::get('/register', [TrainingController::class, 'register'])->name('register');
	Route::get('/scmf-register',[TrainingController::class, 'registerscmf'])->name('register.scmf');
	Route::get('/supply-chain-management-fundamentals', [TrainingController::class, 'supplychainmanagementfundamentalsg'])->name('supply.chain.management.fundamentals');
});
