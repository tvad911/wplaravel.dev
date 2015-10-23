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

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@index']);
Route::get('post/{id}', ['as' => 'post.id', 'uses' => 'PostController@show'])->where('id', '[0-9]+');
Route::get('post/{slug}', ['as' => 'post.slug', 'uses' => 'PostController@slug'])->where('slug', '[A-Za-z_0-9_-]+');
Route::get('blog', ['as' => 'post.blog', 'uses' => 'PostController@blog']);