<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\General\GeneralController;
use App\Http\Controllers\Frontend\Training\TrainingController;

Route::name('general.')->group(function () {
    Route::get('/', [TrainingController::class, 'index'])->name('home');
    Route::get('/about-us', [GeneralController::class, 'aboutUs'])->name('about.us');
    Route::get('/news-insight', [GeneralController::class, 'newsInsight'])->name('news.insight');
   
    Route::get('/advisory-board', [GeneralController::class, 'advisoryBoard'])->name('advisory.board');
    Route::get('/advisory-board/{slug}', [GeneralController::class, 'advisoryMemberDetails'])->name('advisory.member.details');
   
    Route::get('/awards-recognition', [GeneralController::class, 'awards'])->name('awards');
    Route::get('/gallery/{category?}', [GeneralController::class, 'gallery'])->name('gallery');
    Route::get('/boc-life', [GeneralController::class, 'bocLife'])->name('boc.life');
    Route::get('/making-waves', [GeneralController::class, 'careers'])->name('careers');
    Route::get('/faq', [GeneralController::class, 'faq'])->name('faq');
    Route::get('/privacy-policy', [GeneralController::class, 'privacyPolicy'])->name('privacy.policy');
    Route::get('/terms-conditions', [GeneralController::class, 'termsConditions'])->name('terms.conditions');
    Route::get('/contact-us', [GeneralController::class, 'contactUs'])->name('contact.us');
});