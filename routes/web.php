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

Route::get('/', 'HomeController@index');
Route::get('/facilities/{facility}', 'FacilityController@show')->name('show_facility');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/get_facilities', 'HomeController@facilities')->name('get_facilities');
