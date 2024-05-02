<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('locations', function () {
    return view('locations');
});

Route::get('calendar', function () {
    return view('calendar');
});

Route::get('about', function () {
    return view('about');
});

Route::get('about', function () {
    return view('about');
});
