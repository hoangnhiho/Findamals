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

//=== Static Routes ===//
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('demo', 'HomeController@demo');

//=== Private Development Routes ===//
Route::get('leila', 'HomeController@leila');
Route::get('helen', 'HomeController@helen'); 
Route::get('paul', 'HomeController@paul');
Route::get('admin', 'HomeController@admin');

//=== Experience Routes ===//
Route::post('expSave', 'ExpController@expSave');
Route::any('addExp/{animal}/{value}', 'ExpController@addExp');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
