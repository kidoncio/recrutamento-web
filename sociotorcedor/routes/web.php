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

Route::group(['prefix' => 'socio'], function () {
    Route::get('/', 'SocioController@index');
    Route::post('/', 'SocioController@store');
    Route::delete('/', 'SocioController@destroy');
    Route::get('/create', 'SocioController@create');
});

Route::group(['prefix' => 'clube'], function () {
    Route::get('/', 'ClubeController@index');
    Route::post('/', 'ClubeController@store');
    Route::delete('/', 'ClubeController@destroy');
    Route::get('/create', 'ClubeController@create');
});