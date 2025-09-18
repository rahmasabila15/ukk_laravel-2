<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profil');
});

Route::get('/eskul', function () {
    return view('ekstrakurikuler');
});

Route::get('/galery', function () {
    return view('galeri');
});
