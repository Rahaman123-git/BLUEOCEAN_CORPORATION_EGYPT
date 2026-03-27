<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Award\AwardCategoryController;
use App\Http\Controllers\Award\AwardController;

Route::prefix('awards')->name('awards.')->middleware('auth')->group(function () {
    Route::get('/categories', [AwardCategoryController::class, 'index'])
        ->name('categories.index');
    Route::post('/categories', [AwardCategoryController::class, 'store'])
        ->name('categories.store');
    Route::delete('/categories/{id}', [AwardCategoryController::class, 'destroy'])
        ->name('categories.destroy');

    Route::get('/', [AwardController::class, 'index'])
        ->name('index');
    Route::get('/create', [AwardController::class, 'create'])
        ->name('create');
    Route::post('/', [AwardController::class, 'store'])
        ->name('store');
    Route::get('/{id}/edit', [AwardController::class, 'edit'])
        ->name('edit');
    Route::put('/{id}', [AwardController::class, 'update'])
        ->name('update');
    Route::delete('/{id}', [AwardController::class, 'destroy'])
        ->name('destroy');
});
