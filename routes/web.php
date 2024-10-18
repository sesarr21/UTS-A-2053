<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home.app');
});

Route::get('/contact', function () {
    return view('contact');
});
