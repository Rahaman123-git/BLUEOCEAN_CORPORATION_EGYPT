<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\EmployeeController;

Route::prefix('employees')->name('employees.')->middleware('auth')->group(function () {
    Route::get('/', [EmployeeController::class, 'index'])
        ->name('index');
    Route::get('/create', [EmployeeController::class, 'create'])
        ->name('create');
    Route::post('/', [EmployeeController::class, 'store'])
        ->name('store');
    Route::get('/{id}/edit', [EmployeeController::class, 'edit'])
        ->name('edit');
    Route::put('/{id}', [EmployeeController::class, 'update'])
        ->name('update');
    Route::delete('/{id}', [EmployeeController::class, 'destroy'])
        ->name('destroy');
});
