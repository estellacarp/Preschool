<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 		'HomeController@index');
Route::get('home', 		'HomeController@index');
Route::get('login', 	'AuthController@index');

Route::get('dashboard',	'DashboardController@index');
Route::get('dashboard/add', 'DashboardController@add');

Route::get('create', 	'DashboardController@create');
Route::get('editPage',	'DashboardController@editPage');
Route::get('editPage/{id}', 'DashboardController@editPageShow');
Route::post('update/{id}', 'DashboardController@update');
Route::post('update', array(''));

Route::post('save', 	'DashboardController@store');

Route::get('theme', 	'HomeController@theme');
Route::get('plans', 	'HomeController@plans');
Route::get('art', 		'HomeController@art');
Route::get('abcBook', 	'HomeController@abcBook');

Route::post('login',	'AuthController@auth');
Route::post('logout',	 'AuthController@logout');

Route::Resource('abc', 'DashboardController');
Route::bind('Repository\formInterface', 'Repository\formInput');

