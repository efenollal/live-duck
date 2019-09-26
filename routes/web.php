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

Route::get('/', 'DuckController@index');

Route::get('duck/feed/{id}', 'DuckController@feed');
Route::get('duck/play/{id}', 'DuckController@play');
Route::get('duck/clean/{id}', 'DuckController@clean');
Route::resource('duck', 'DuckController');
