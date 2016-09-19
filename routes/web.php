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

Route::get('about', ['as'=>'about','uses'=>'PagesController@about']);
Route::get('contact', ['as'=>'contact', 'uses'=>'PagesController@contact']);