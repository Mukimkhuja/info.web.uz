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

Route::post('/enter/submit', 'EnterController@submit')->name('enter-form');
Route::get('/show/all', 'EnterController@allData')->name('show-data');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
