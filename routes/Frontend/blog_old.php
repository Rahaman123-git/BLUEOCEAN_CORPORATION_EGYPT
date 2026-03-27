<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Blog\BlogController;

Route::prefix('blogs')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('home');
    Route::get('/details', [BlogController::class, 'blogDetails'])->name('details');
    Route::get('/event-details', [BlogController::class, 'eventDetails'])->name('event.details');
});