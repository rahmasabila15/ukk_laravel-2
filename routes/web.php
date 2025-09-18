<?php

use App\Http\Controllers\EskulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/profile', function () {
    return view('profil');
});

Route::get('/galery', function () {
    return view('galeri');
});

Route::get('/eskul', [EskulController::class, 'index']);
