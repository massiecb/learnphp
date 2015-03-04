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

Route::get('/home', 'HomeController@index');
Route::get('/post', function(){
		    return "Posting page";
});
Route::get('/history', function(){
		    return "View History page";
});
Route::get('/user_create', function (){
			   return "User signup";
});
Route::get('/user_edit', function(){
			 return 'User edit';
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
