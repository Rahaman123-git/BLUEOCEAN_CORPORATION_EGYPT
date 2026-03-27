<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News\NewsController;

Route::prefix('news')->name('news.')->middleware('auth')->group(function () {
    Route::get('/', [NewsController::class, 'index'])
        ->name('index');
    Route::post('/{newsCategory}', [NewsController::class, 'store'])
        ->name('store');
    Route::delete('/{id}', [NewsController::class, 'destroy'])
        ->name('destroy');
});
