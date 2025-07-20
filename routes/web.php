<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/feed', function() {
    return view('feed');
});

Route::get('/profile', function() {
    return view('profile');
});