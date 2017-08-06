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
Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth']), function () {
    //Admin category
    Route::resource('category', 'CategoryController');
    Route::post('category/destroy', 'CategoryController@destroy');
    Route::post('category/save/{id}', 'CategoryController@postSave');

    //Tours
    Route::resource('tour', 'TourController');
    Route::post('tour/save/{id}', 'TourController@save');
    Route::post('tour/delete', 'TourController@delete');

    //Booking
    Route::get('booking/', 'BookingController@index');
    Route::get('booking/detail/{id}', 'BookingController@detail');
    Route::post('booking/delete', 'BookingController@delete');
    Route::get('booking/resolved/{id}', 'BookingController@resolved');

    //Responnsible travel
    Route::get('responsible', 'ResponsibleController@index');
    Route::get('responsible/create', 'ResponsibleController@create');
    Route::get('responsible/edit/{id}', 'ResponsibleController@edit');
    Route::post('responsible/save/{id}', 'ResponsibleController@save');
    Route::post('responsible/delete', 'ResponsibleController@delete');
    //Slide
    Route::get('slide', 'SlideController@index');
    Route::get('slide/create', 'SlideController@create');
    Route::get('slide/edit/{id}', 'SlideController@edit');
    Route::post('slide/save/{id}', 'SlideController@save');
    Route::post('slide/delete', 'SlideController@delete');
    Route::get('/', [
        'as' => 'admin',
        'uses' => 'UsersController@getMemberList'
    ]);

    //User
    Route::get('user', 'UserController@index');
    Route::get('user/create', 'UserController@create');
    Route::get('user/edit/{id}', 'UserController@edit');
    Route::post('user/save/{id}', 'UserController@save');
    Route::post('user/delete', 'UserController@delete');

});
Route::get('auth/logout', 'Auth\LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'TopController@index');


Route::get('/alltours/', 'TourController@index');

Route::get('/tour/{id}', 'TourController@get_list_by_category');


Route::get('/tour/detail/{id}', 'TourController@get_detail');

Route::get('/projects', 'ProjectController@get_list');
Route::get('/contact', 'ContactController@index');
Route::get('/booktour/{id}', 'BooktourController@getIndex');
Route::post('/booktour/{id}', 'BooktourController@index');
Route::get('/bookservice', 'ServiceController@bookservice');
Route::post('bookservice', 'ServiceController@bookservice');
Route::get('/services', 'ServiceController@index');

Route::get('/manage', function(){
    return redirect('admin/booking');
});