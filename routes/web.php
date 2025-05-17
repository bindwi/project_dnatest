<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'home');
});

Route::get('/shop', function () {
    return view(view: 'shop');
});

Route::get('/shop/healthy', function () {
    return view(view: 'healthy');
});

Route::get('/shop/cancer', function () {
    return view(view: 'cancer');
});

Route::get('/shop/skin', function () {
    return view(view: 'skin');
});

Route::get('/shop/success', function () {
    return view(view: 'success');
});

Route::get('/shop/family', function () {
    return view(view: 'family');
});

Route::get('/report', function () {
    return view(view: 'report');
});

Route::get('/life', function () {
    return view(view: 'life');
});