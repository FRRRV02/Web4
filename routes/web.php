<?php
use Illuminate\Support\Facades\Route;

// Home
Route::view('/', 'home');

// About
Route::view('/about', 'about');

// Route::get('/pmb', function () {
//     return view('pmb');
// });

// Contact
Route::view('/contact', 'contact');

// Facilities
Route::view('/facilities', 'facilities');

// News
Route::view('/news', 'news');

// Programs
Route::view('/programs', 'programs');

// Privacy Policy
Route::view('/privacy-policy', 'privacy-policy');

// Terms of Service
Route::view('/terms-of-service', 'terms-of-service');