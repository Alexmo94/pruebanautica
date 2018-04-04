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
    return view('welcome');
});

Route::resource('/movies', "movieController");

Route::get('/search', "movieController@search");

Route::get('/movies/details', "movieController@show");

Route::get('/movies/votar', "movieController@store");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
