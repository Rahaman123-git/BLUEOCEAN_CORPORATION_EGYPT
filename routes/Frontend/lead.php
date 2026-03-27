<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Lead\LeadController;

Route::prefix('leads')->name('leads.')->group(function () {
    Route::post('/register', [LeadController::class, 'store'])
        ->name('store');
    Route::get('/register-success/{token}', [LeadController::class, 'registerSuccess'])
        ->name('register.success');
});