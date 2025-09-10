<?php

use Illuminate\Support\Facades\Route;

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'zh'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('switchLang');


Route::get('/', function () {
    return view('content');
});

Route::get('/terms', function () {
    return view('contents.terms');
});

Route::get('/policy', function(){
    return view('contents.policy');
});