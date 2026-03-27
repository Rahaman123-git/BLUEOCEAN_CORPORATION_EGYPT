<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Advisory\AdvisoryController;

Route::prefix('advisories')->name('advisories.')->middleware(['web','auth'])->group(function () {
    Route::get('/', [AdvisoryController::class, 'index'])
        ->name('index');
    Route::get('/create', [AdvisoryController::class, 'create'])
        ->name('create');
    Route::post('/', [AdvisoryController::class, 'store'])
        ->name('store');
    Route::get('/{id}/edit', [AdvisoryController::class, 'edit'])
        ->name('edit');
    Route::put('/{id}', [AdvisoryController::class, 'update'])
        ->name('update');
    Route::delete('/{id}', [AdvisoryController::class, 'destroy'])
        ->name('destroy');
});
