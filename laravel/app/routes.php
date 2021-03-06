<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('users', 'UsersController');

Route::resource('sessions', 'SessionsController');

Route::get('login', 'SessionsController@create');

Route::get('logout', 'SessionsController@destroy');



Route::get('admin', function()
{
	return 'Admin page';

})->before('auth');

Route::get('tasks/search','TasksController@search');
Route::resource('tasks','TasksController');
