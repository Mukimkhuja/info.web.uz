<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('main-page');

Route::get('/show', function () {
    return view('show');
})->name('show-page');

Route::get('/enter', function () {
    return view('enter');
})->name('enter-page');

Route::post('/enter/submit', function () {
    return Request::all();
})->name('enter-form');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
