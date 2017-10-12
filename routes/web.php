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
    return view('index');
});
Route::put('offer/{id}/status', 'offersController@status');
Route::resource('project' , 'projectsController');
Route::resource('home' , 'homesController');
Route::resource('customer' , 'customersController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
