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

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::get('demo', 'HomeController@demo');

Route::get('leila', 'HomeController@leila');
Route::get('helen', 'HomeController@helen'); 
Route::get('paul', 'HomeController@paul');
Route::get('admin', 'HomeController@admin');

Route::post('expSave', 'HomeController@expSave');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
