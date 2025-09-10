<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('content');
});

Route::get('/terms', function () {
    return view('contents.terms');
});

Route::get('/policy', function(){
    return view('contents.policy');
});