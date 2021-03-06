<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'FrontController@index')->name('home');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/contact', 'FrontController@contact')->name('contact');
