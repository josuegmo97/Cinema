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

Route::get('/', 'FrontController@index')->name('/');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');

Route::resource('usuario', 'UsuarioController');
/* Route::get('', 'UsuarioController@')->name('');
Route::get('', 'UsuarioController@')->name('');
Route::get('', 'UsuarioController@')->name('');
Route::get('', 'UsuarioController@')->name('');
Route::get('', 'UsuarioController@')->name('');  */

Route::resource('log', 'LogController');

Route::get('logout', 'LogController@logout')->name('logout');