<?php

// use App\Http\Controllers\AboutControler;
// use App\Http\Controllers\HomeControler;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\programController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\fasilitasController;



Route::resource(name: '/home',  controller: homeController::class);
Route::resource(name: '/news',  controller: newsController::class);
Route::resource(name: '/kontak',  controller: kontakController::class);
Route::resource(name: '/program',  controller: programController::class);
Route::resource(name: '/about',  controller: aboutController::class);
Route::resource(name: '/fasilitas',  controller: fasilitasController::class);
// Route::resource('/home', HomeController::class);
// Route::resource('/news', HomeController::class);
// Route::resource('/kontak', HomeController::class);
// Route::resource('/about', AboutController::class);
// Route::resource('/fasilitas', FasilitasController::class);
// Route::resource('/News', NewsController::class);
// Route::resource('/kontak', KontakController::class);
// Route::resource('/program', ProgramController::class);
