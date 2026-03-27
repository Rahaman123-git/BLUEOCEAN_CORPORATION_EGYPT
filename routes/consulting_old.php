<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Consulting\ConsultingCompanyController;
use App\Http\Controllers\Consulting\ConsultingController;

Route::prefix('case-studies')->name('consulting.')->middleware('auth')->group(function () {
    Route::get('companies', [ConsultingCompanyController::class, 'index'])
        ->name('companies.index');
    Route::get('companies/create', [ConsultingCompanyController::class, 'create'])
        ->name('companies.create');
    Route::post('companies', [ConsultingCompanyController::class, 'store'])
        ->name('companies.store');
    Route::get('companies/{id}/edit', [ConsultingCompanyController::class, 'edit'])
        ->name('companies.edit');
    Route::put('companies/{id}', [ConsultingCompanyController::class, 'update'])
        ->name('companies.update');
    Route::delete('companies/{id}', [ConsultingCompanyController::class, 'destroy'])
        ->name('companies.destroy');

    Route::get('/', [ConsultingController::class, 'index'])
        ->name('index');
    Route::get('/create', [ConsultingController::class, 'create'])
        ->name('create');
    Route::post('/', [ConsultingController::class, 'store'])
        ->name('store');
    Route::get('/{id}/edit', [ConsultingController::class, 'edit'])
        ->name('edit');
    Route::put('/{id}', [ConsultingController::class, 'update'])
        ->name('update');
    Route::delete('/{id}', [ConsultingController::class, 'destroy'])
        ->name('destroy');
});