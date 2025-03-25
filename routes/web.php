<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'home');
});
Route::get('/home', function () {
    return view(view: 'home');
});