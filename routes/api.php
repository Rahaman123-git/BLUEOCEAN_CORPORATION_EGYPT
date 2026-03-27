<?php
use App\Http\Controllers\Api\ApiprogramListController;
use Illuminate\Support\Facades\Route;


Route::get('/_ping', fn() => ['ok' => true, 'ts' => now()->toDateTimeString()]);

//Route::get('/apiprogram-list', [ApiprogramListController::class, 'index']);
Route::middleware('cert_api_token')
    ->get('/apiprogram-list', [ApiprogramListController::class, 'index']);
