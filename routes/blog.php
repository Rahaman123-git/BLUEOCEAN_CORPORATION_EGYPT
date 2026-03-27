<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\BlogEventController;
use App\Http\Controllers\Blog\NewslettrSubscriptionController;

Route::prefix('blog-events')->name('blog.events.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])
        ->name('index');
    Route::get('/create', [BlogController::class, 'create'])
        ->name('create');
    Route::post('/', [BlogController::class, 'store'])
        ->name('store');
    Route::get('/{id}/edit', [BlogController::class, 'edit'])
        ->name('edit');
    Route::put('/{id}', [BlogController::class, 'update'])
        ->name('update');
    Route::delete('/{id}', [BlogController::class, 'destroy'])
        ->name('destroy');

    Route::get('/{id}/events', [BlogEventController::class, 'index'])
        ->name('events.index');
    Route::get('/{id}/create', [BlogEventController::class, 'create'])
        ->name('events.create');
    Route::post('/{id}', [BlogEventController::class, 'store'])
        ->name('events.store');
    Route::get('/{id}/{eventId}/edit', [BlogEventController::class, 'edit'])
        ->name('events.edit');
    Route::put('/{id}/{eventId}', [BlogEventController::class, 'update'])
        ->name('events.update');
    Route::delete('/{id}/{eventId}', [BlogEventController::class, 'destroy'])
        ->name('destroy');

	Route::get('/newsletter-subscriptions', [NewslettrSubscriptionController::class, 'index'])
        ->name('newsletter.subscriptions.index');
});