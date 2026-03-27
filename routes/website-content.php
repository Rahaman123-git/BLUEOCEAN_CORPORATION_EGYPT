<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteContent\PageSettingsController;
use App\Http\Controllers\WebsiteContent\MarqueeController;
use App\Http\Controllers\WebsiteContent\LocationController;

Route::prefix('website-content')->name('website.content.')->middleware('auth')->group(function () {
	Route::get('page-settings', [PageSettingsController::class, 'index'])
        ->name('page.settings.index');
    Route::get('page-settings/create', [PageSettingsController::class, 'create'])
        ->name('page.settings.create');
    Route::post('page-settings', [PageSettingsController::class, 'store'])
        ->name('page.settings.store');
    Route::get('page-settings/{id}/edit', [PageSettingsController::class, 'edit'])
        ->name('page.settings.edit');
    Route::put('page-settings/{id}', [PageSettingsController::class, 'update'])
        ->name('page.settings.update');
    Route::delete('page-settings/{id}', [PageSettingsController::class, 'destroy'])
        ->name('page.settings.destroy');

	Route::get('marquees', [MarqueeController::class, 'index'])
        ->name('marquees.index');
    Route::get('marquees/create', [MarqueeController::class, 'create'])
        ->name('marquees.create');
    Route::post('marquees', [MarqueeController::class, 'store'])
        ->name('marquees.store');
    Route::get('marquees/{id}/edit', [MarqueeController::class, 'edit'])
        ->name('marquees.edit');
    Route::put('marquees/{id}', [MarqueeController::class, 'update'])
        ->name('marquees.update');
    Route::delete('marquees/{id}', [MarqueeController::class, 'destroy'])
        ->name('marquees.destroy');

    Route::get('locations', [LocationController::class, 'index'])
        ->name('locations.index');
    Route::get('locations/create', [LocationController::class, 'create'])
        ->name('locations.create');
    Route::post('locations', [LocationController::class, 'store'])
        ->name('locations.store');
    Route::get('locations/{id}/edit', [LocationController::class, 'edit'])
        ->name('locations.edit');
    Route::put('locations/{id}', [LocationController::class, 'update'])
        ->name('locations.update');
    Route::delete('locations/{id}', [LocationController::class, 'destroy'])
        ->name('locations.destroy');
});