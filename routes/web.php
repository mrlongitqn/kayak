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


Route::get('/', function () {
    return view('welcome');
});
Route::group(array('prefix' => '/admin', 'namespace' => 'Admin', 'middleware' => ['auth']), function () {
    //Admin category
    Route::resource('category', 'CategoryController');
    Route::post('category/destroy', 'CategoryController@destroy');
    Route::post('category/save/{id}', 'CategoryController@postSave');

    //Tours
    Route::resource('tour', 'TourController');
    Route::post('tour/save/{id}', 'TourController@save');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','TopController@index');


Route::get('/alltours/','TourController@index');

Route::get('/tour/{id}','TourController@get_list_by_category');


Route::get('/tour/detail/{id}','TourController@get_detail');


Route::get('/projects','ProjectController@get_list');