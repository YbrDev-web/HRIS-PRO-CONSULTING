<?php

use Illuminate\http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hris_pro_consulting', function (Request $request) {
    return [
        "name"=> $request->input('name', 'john Doe'),
        "article" => "article 1"
    ];
});

