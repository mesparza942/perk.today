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

//Route::resource('user','UserController', ['only' => ['index', 'store', 'update', 'destroy', 'show']]);

Route::get('/','WebController@index');
Route::get('/reservation', 'WebController@reserva')
Route::get('/redirect', 'UserController@redirect');
Route::get('/callback', 'UserController@callback');

