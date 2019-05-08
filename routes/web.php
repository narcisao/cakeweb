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
Route::post('/create/{{id}/edit', 'UsersController@edit');
Route::delete('/create/{{id}/delete', 'UsersController@destroy');