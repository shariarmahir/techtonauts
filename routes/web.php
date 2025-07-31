<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');



Route::get('/services/web', function () {
    return view('services.web');
});


Route::get('/services/soft', function () {
    return view('services.soft');
});


Route::get('/services/ai', function () {
    return view('services.ai');
});
