<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});
Route::get('prodi', function () {
    return view('prodi.index');
});
