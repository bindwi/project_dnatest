<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/shop/healthy', function () {
    return view('healthy');
});

Route::get('/shop/cancer', function () {
    return view('cancer');
});

Route::get('/shop/skin', function () {
    return view('skin');
});

Route::get('/shop/success', function () {
    return view('success');
});

Route::get('/shop/family', function () {
    return view('family');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/life', function () {
    return view('life');
});

Route::get('/dashboard', [ReportController::class, 'index']);
