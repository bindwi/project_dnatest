<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'welcome');
});
Route::get('/home', function () {
    return view(view: 'home');
});