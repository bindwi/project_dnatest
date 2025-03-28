<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'home');
});

Route::get('/shop', function () {
    return view(view: 'shop');
});

Route::get('/report', function () {
    return view(view: 'report');
});

Route::get('/life', function () {
    return view(view: 'life');
});