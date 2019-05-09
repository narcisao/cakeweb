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

Route::get('/', 'UsersController@index');

Route::get('/create', 'UsersController@create');
Route::post('/create', 'UsersController@store');

Route::get('/edit/{id}', 'UsersController@edit');
Route::patch('/edit/{id}', 'UsersController@update');

Route::get('/remove/{id}', 'UsersController@delete');
Route::delete('/remove/{id}', 'UsersController@destroy');