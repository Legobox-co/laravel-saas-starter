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
	// Route::post('/login', 'LoginController@login')
	// Route::post('/logout', 'LoginController@logout')
	// Route::post('/refresh', )
	// Route::post('/me', )
	Auth::routes();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'projects/{project}'], function(){
	// POST api/projects/servers -- create
	// PUT/DELETE api/projects/servers{server} -- updates and destroy
	Route::resource('servers','ServerController');	
});
// POST api/projects/ -- create
// PUT/DELETE api/projects/{project} -- updates and destroy
Route::resource('projects', 'ProjectController');
