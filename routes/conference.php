<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Conference\ConferenceCategoryController;
use App\Http\Controllers\Conference\ConferenceController;

Route::prefix('events')->name('conferences.')->middleware('auth')->group(function () {
    Route::get('/categories', [ConferenceCategoryController::class, 'index'])
        ->name('categories.index');
    Route::get('/categories/create', [ConferenceCategoryController::class, 'create'])
        ->name('categories.create');
    Route::post('/categories', [ConferenceCategoryController::class, 'store'])
        ->name('categories.store');
    Route::get('/categories/{id}/edit', [ConferenceCategoryController::class, 'edit'])
        ->name('categories.edit');
    Route::put('/categories/{id}', [ConferenceCategoryController::class, 'update'])
        ->name('categories.update');
    Route::delete('/categories/{id}', [ConferenceCategoryController::class, 'destroy'])
        ->name('categories.destroy');

    Route::get('/', [ConferenceController::class, 'index'])
        ->name('index');
    Route::get('/create', [ConferenceController::class, 'create'])
        ->name('create');
    Route::post('/', [ConferenceController::class, 'store'])
        ->name('store');
    Route::get('/{id}/edit', [ConferenceController::class, 'edit'])
        ->name('edit');
    Route::put('/{id}', [ConferenceController::class, 'update'])
        ->name('update');
    Route::get('/{id}/sponsors', [ConferenceController::class, 'sponsors'])
        ->name('sponsors');
    Route::put('/{id}/sponsors', [ConferenceController::class, 'updateSponsors'])
        ->name('update.sponsors');
    Route::get('/{id}/keynote-topics', [ConferenceController::class, 'keynoteTopics'])
        ->name('keynote.topics');
    Route::put('/{id}/keynote-topics', [ConferenceController::class, 'updateKeynoteTopics'])
        ->name('update.keynote.topics');
    Route::get('/{id}/speakers', [ConferenceController::class, 'speakers'])
        ->name('speakers');
    Route::put('/{id}/speakers', [ConferenceController::class, 'updateSpeakers'])
        ->name('update.speakers');
    Route::delete('/{id}', [ConferenceController::class, 'destroy'])
        ->name('destroy');
});