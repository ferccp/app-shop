<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|ruta tipo get ejecutar una funcion para redirecciponarnos en weulcom
*/

Route::get('/','TestController@Welcome');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
