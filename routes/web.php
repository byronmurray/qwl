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

// uncomment this when you go live
Route::get('/', function () {
    return view('home');
});




Auth::routes();

//Route::get('/', 'HomeController@index')->name('home');
