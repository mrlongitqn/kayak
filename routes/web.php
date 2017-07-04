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
    /*
    Route::get('category', 'CategoryController@index');
    Route::get('category/edit/{id}', 'CategoryController@edit');
    */
    Route::resource('category', 'CategoryController');
    Route::post('category/destroy', 'CategoryController@destroy');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
