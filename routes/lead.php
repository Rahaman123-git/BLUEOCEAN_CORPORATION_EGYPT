<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lead\LeadController;

Route::prefix('leads')->name('leads.')->middleware('auth')->group(function () {
    Route::get('/', [LeadController::class, 'index'])
        ->name('index');
    Route::delete('/{id}', [LeadController::class, 'destroy'])
        ->name('destroy');
});