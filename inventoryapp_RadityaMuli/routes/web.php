<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;

Route::get('/', [DashboardController::class, 'utama']);
Route::get('/daftar', [RegisterController::class, 'daftar']);
Route::post('/kirim', [RegisterController::class, 'submit']);

//testing
Route::get('/master', function () {
    return view('layouts.master');
});