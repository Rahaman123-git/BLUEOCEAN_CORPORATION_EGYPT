<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Conference\ConferenceController;

Route::prefix('conferences')->name('conferences.')->group(function () {
    Route::get('/', [ConferenceController::class, 'index'])->name('home');
   
    Route::get('/ipsc', [ConferenceController::class, 'ipsc'])->name('ipsc');
    Route::get('/ipsc-riyadh-2024', [ConferenceController::class, 'ipscRiyadh2024'])->name('ipsc.riyadh.2024');
    Route::get('/ipsc-london-2024', [ConferenceController::class, 'ipscLondon2024'])->name('ipsc.london.2024');
    Route::get('/ipsc-mumbai-2024', [ConferenceController::class, 'ipscMumbai2024'])->name('ipsc.mumbai.2024');
    Route::get('/ipsc-dubai-2021', [ConferenceController::class, 'ipscDubai2021'])->name('ipsc.dubai.2021');
    Route::get('/ipsc-riyadh-2016', [ConferenceController::class, 'ipscRiyadh2016'])->name('ipsc.riyadh.2016');
    Route::get('/ipsc-abudhabi-2016', [ConferenceController::class, 'ipscAbudhabi2016'])->name('ipsc.abudhabi.2016');
    Route::get('/ipsc-dubai-2016', [ConferenceController::class, 'ipscDubai2016'])->name('ipsc.dubai.2016');
    Route::get('/ipsc-dubai-2014', [ConferenceController::class, 'ipscDubai2014'])->name('ipsc.dubai.2014');
    Route::get('/ipsc-qatar-2014', [ConferenceController::class, 'ipscQatar2014'])->name('ipsc.qatar.2014');
    
    Route::get('/ihrc', [ConferenceController::class, 'ihrc'])->name('ihrc');
    Route::get('/ihrc-dubai-2022', [ConferenceController::class, 'ihrcDubai2022'])->name('ihrc.dubai.2022');

    Route::get('/cxo', [ConferenceController::class, 'cxo'])->name('cxo');
    Route::get('/cxo-dubai-2024', [ConferenceController::class, 'cxoDubai2024'])->name('cxo.dubai.2024');

    Route::get('/bowld', [ConferenceController::class, 'bowld'])->name('bowld');
    Route::get('/bowld-event-2025', [ConferenceController::class, 'bowldEvent2025'])->name('bowld.event.2025');
    Route::get('/bowld-event-2024', [ConferenceController::class, 'bowldEvent2024'])->name('bowld.event.2024');
    Route::get('/bowld-event-2023', [ConferenceController::class, 'bowldEvent2023'])->name('bowld.event.2023');
    Route::get('/bowld-event-2022', [ConferenceController::class, 'bowldEvent2022'])->name('bowld.event.2022');
    Route::get('/bowld-event-2021', [ConferenceController::class, 'bowldEvent2021'])->name('bowld.event.2021');

    Route::get('/{slug}', [ConferenceController::class, 'upcomingEvent'])->name('upcoming.event');

	Route::get('/ipsc-2025', [ConferenceController::class, 'upcomingEvent'])->name('ipsc.2025');
    
    Route::get('/awards', [ConferenceController::class, 'awards'])->name('awards');

    Route::get('/register', [ConferenceController::class, 'register'])->name('register');
});