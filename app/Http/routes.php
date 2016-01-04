<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
// 	return view('welcome');
// })->middleware('guest');

Route::get('/', 'TaskController@home');

// Task Routes
Route::get('/admin', 'TaskController@index');
Route::get('/admin/add', 'TaskController@add');
Route::post('/admin/add', 'TaskController@store');
Route::delete('/admin/delete/{task}', 'TaskController@destroy');
Route::get('/admin/edit/{id}', 'TaskController@edit');
Route::post('/admin/edit/{id}', 'TaskController@update');
Route::get('/a/{id}', 'TaskController@view');


// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
