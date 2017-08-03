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

Auth::routes();

Route::get('/', 'WebController@index');
Route::get('/contacto', 'WebController@contacto');
Route::get('/contacto/gracias', 'WebController@gracias');

Route::get('/auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('/auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
