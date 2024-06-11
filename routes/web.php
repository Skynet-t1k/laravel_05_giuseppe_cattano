<?php

use App\Http\Controllers\Chi_siamoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


// home page
Route::get('/', [PublicController::class, 'welcome'])->name('homepage');
// Servizi
Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');
//Chi Siamo
Route::get('/chi_siamo', [Chi_siamoController::class, 'chi_siamo'])->name('chi_siamo');
// Contattaci
Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');
Route::get('/contattaci/thankyou', [PublicController::class, 'thankyou'])->name('thankyou');
Route::post('/contattaci/invia', [PublicController::class, 'sendmail'])->name('sendmail');
