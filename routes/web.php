<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/checkout','App\Http\Controllers\CasherController@checkout')->name('checkout');
Route::post('/session','App\Http\Controllers\CasherController@session')->name('session');
