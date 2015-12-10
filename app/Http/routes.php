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

Route::get('/', 'User\UserController@index');
Route::get('/home', function() {
    return view('main');
});

// news routes
Route::get('/news/{id}', 'User\UserController@detail_news')->name('news/detail');



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('admin', 'Admin\AdminController@index');
Route::get('admin/news', 'Admin\AdminController@news');
Route::post('admin/news', 'Admin\AdminController@news');

/*admin routes*/


Route::get('admin/businesses', function(){
    return view('admin/businesses');
});

Route::controllers([
    'password' => 'Auth\PasswordController',
]);
