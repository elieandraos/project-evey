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

Route::group(['prefix' => 'api/v1'], function(){
	Route::resource('posts', 'Api\PostsController');	
	Route::get('categories', 'Api\CategoriesController@index');	
	Route::get('categories/{id}/posts', 'Api\CategoriesController@show');	
});

Route::get('/', function () {
    return view('welcome');
});
