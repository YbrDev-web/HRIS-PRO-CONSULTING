<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hris_pro_consulting', function () {
    return 'bonjour';
});

