<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/cantact', function () {
    return view('pages.cantact');
});

