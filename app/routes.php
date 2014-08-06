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

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('login', 'AuthController@index');

Route::get('dashboard','DashboardController@index');
Route::get('dashboard/add', 'DashboardController@add');

Route::get('create', 'DashboardController@create');

Route::post('save', 'DashboardController@store');


Route::post('login','AuthController@auth');
Route::post('logout', 'AuthController@logout');

Route::Resource('abc', 'DashboardController');
Route::bind('Repository\formInterface', 'Repository\formInput');