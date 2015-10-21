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

Route::get('/', ['as' => 'homepage', 'uses' => 'SchoolController@home']);
Route::get('school', [
    'as' => 'school', 'uses' => 'SchoolController@index'
]);

Route::get('about', [
    'as' => 'about', 'uses' => 'SchoolController@about'
]);

Route::get('meta', [
    'as' => 'meta', 'uses' => 'SchoolController@meta'
]);

Route::get('page', [
    'as' => 'page', 'uses' => 'SchoolController@page'
]);

Route::get('home', [
    'as' => 'homepage', 'uses' => 'SchoolController@home'
]);

Route::get('post/{id}', [
    'as' => 'post.id', 'uses' => 'PostController@show'
]);