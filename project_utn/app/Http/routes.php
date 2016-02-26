<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('profile/delete', 'UserController@getProfile');


Route::get('profile', [
	'as' => 'profile', 'uses' => 'UserController@showProfile'
	]);



Route::get('/', function () {
	return view('main');
});
Route::get('email', [
	'as' => 'email', 'uses' => 'UserController@sendEmail'
	]);

Route::get('cursos', function () {
    return view('cursos/new_curso');
});

Route::get('periodos', function () {
    return view('periodos/new_periodo');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
