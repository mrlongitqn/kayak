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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});
Route::group(array('prefix' => '/admin', 'namespace' => 'Admin', 'middleware' => ['auth']), function () {
//Admin category
    /*
    Route::get('category', 'CategoryController@index');
    Route::get('category/edit/{id}', 'CategoryController@edit');
    */
    Route::resource('category', 'CategoryController');
    Route::post('category/destroy', 'CategoryController@destroy');
});
=======
Route::get('admin/category','CategoryController@index');
Route::get('admin/category/edit/{id}','CategoryController@edit');
>>>>>>> d503dff2c32d6652cb487c9a29a98b8f4088abcb
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','TopController@index');


Route::get('/alltours/','TourController@index');

Route::get('/tour/{id}','TourController@get_list_by_category');


Route::get('/tour/detail/{id}','TourController@get_detail');


Route::get('/projects','ProjectController@get_list');