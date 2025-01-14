<?php

use App\Http\Controllers\AboutControler;
use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Route;

// Home
// Route::view('/', 'home');

Route::resource('/home', HomeController::class);
Route::resource('/about', AboutController::class);
Route::resource('/fasilitas', FasilitasController::class);
Route::resource('/news', NewsController::class);
Route::resource('/kontak', KontakController::class);
Route::resource('/program', ProgramController::class);
