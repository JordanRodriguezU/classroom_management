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
//when user forget the password
Route::post('forgetemail', [

	'as' => 'forgetemail', 'uses' => 'UserController@forgetemail'
	]);
//load the screen of the admin
Route::post('admin', [

	'as' => 'admin', 'uses' => 'UserController@login'
	]);

Route::get('patito', function () {
	return view('admin');
});

//when the admin get into to user
Route::get('users', [ 
	'as' => 'users', 'uses' => 'UserController@loadUser'
	]);
//when create a user

Route::get('moreuser', [
	'as' => 'moreuser', 'uses' => 'UserController@loadCareerProfileTypeUser'
	
	]);
//route of create user
Route::post('create', [

	'as' => 'create', 'uses' => 'UserController@create'
	]);


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
