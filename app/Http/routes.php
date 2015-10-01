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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', 'PostsController@index');

Route::get('/posts/edit/{id}', 'PostsController@edit');

Route::get('/posts/destroy/{id}', 'PostsController@destroy');

Route::get('/posts/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');