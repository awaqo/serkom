<?php

use App\Http\Controllers\BeasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(BeasiswaController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/daftar', 'create')->name('daftar-beasiswa');
    Route::post('/daftar', 'store')->name('submit.daftar-beasiswa');
    Route::get('/hasil', 'show')->name('hasil-daftar');
});
