<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as'=>'home','uses'=>'PostsController@latest']);


Route::resource('posts', 'PostsController');

Route::get('aboutnb', ['as'=>'about','uses'=>'PagesController@about']);
Route::get('contact', ['as'=>'contact', 'uses'=>'PagesController@contact']);

Route::get('/suz_log', ['as'=>'login', 'uses'=>'CustomAuthController@index']);
Route::post('/suz_log', ['as'=>'login', 'uses'=>'CustomAuthController@login']);

Route::get('/suz_reg', ['as'=>'register', 'uses'=>'CustomAuthController@getRegister']);
Route::post('/suz_reg', ['as'=>'register', 'uses'=>'CustomAuthController@postRegister']);
Auth::routes();

Route::get('/home', 'HomeController@index');
