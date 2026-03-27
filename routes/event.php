<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Event\EventController;

Route::prefix('events')->name('events.')->middleware('auth')->group(function () {
    Route::get('/', [EventController::class, 'index'])
        ->name('index');
    Route::get('/create', [EventController::class, 'create'])
        ->name('create');
    Route::post('/', [EventController::class, 'store'])
        ->name('store');
    Route::get('/{id}/edit', [EventController::class, 'edit'])
        ->name('edit');
    Route::put('/{id}', [EventController::class, 'update'])
        ->name('update');
    Route::delete('/{id}', [EventController::class, 'destroy'])
        ->name('destroy');
});
