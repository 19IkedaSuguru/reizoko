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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('food/save', 'FoodController@add');
    Route::post('food/save', 'FoodController@create');
    Route::get('food/exist', 'FoodController@exist');
    Route::get('food/edit', 'FoodController@edit');
    Route::post('food/edit', 'FoodController@update');
    Route::get('food/delete', 'FoodController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
