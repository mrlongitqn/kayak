<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/category','CategoryController@index');
Route::get('admin/category/edit/{id}','CategoryController@edit');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','TopController@index');


Route::get('/alltours/','TourController@index');

Route::get('/tour/{id}','TourController@get_list_by_category');


Route::get('/tour/detail/{id}','TourController@get_detail');


Route::get('/projects','ProjectController@get_list');