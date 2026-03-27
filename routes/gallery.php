<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Gallery\GalleryController;

Route::prefix('galleries')->name('galleries.')->middleware('auth')->group(function () {
    Route::get('{media}/{tag}', [GalleryController::class, 'index'])
        ->where('media', 'photos|videos')
        ->name('index');
    Route::get('{media}/{tag}/create', [GalleryController::class, 'create'])
        ->where('media', 'photos|videos')
        ->name('create');
    Route::post('{media}/{tag}', [GalleryController::class, 'store'])
        ->where('media', 'photos|videos')
        ->name('store');
    Route::get('{media}/{tag}/{id}/edit', [GalleryController::class, 'edit'])
        ->where('media', 'photos|videos')
        ->name('edit');
    Route::put('{media}/{tag}/{id}', [GalleryController::class, 'update'])
        ->where('media', 'photos|videos')
        ->name('update');
    Route::delete('{media}/{tag}/{id}', [GalleryController::class, 'destroy'])
        ->where('media', 'photos|videos')
        ->name('destroy');
});
