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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::post('authenticate', 'AuthenticateController@authenticate');

// Route::group(['prefix' => 'api'], function(){
// 	// Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
// 	Route::get('authenticate', 'AuthenticateController@authenticate');
// });

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);