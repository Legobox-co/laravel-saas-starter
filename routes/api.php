<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix'=>'auth'], function (){
	Auth::routes();
});

Route::middleware('auth:api')->get('/user', 'Auth\LoginController@getCurrentUser');

// POST api/projects/ -- create
// PUT/DELETE api/projects/{project} -- updates and destroy
Route::resource('projects', 'ProjectController');
