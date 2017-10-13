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


Route::resource('project' , 'projectsController');
Route::get('customer/{id}/project/create', 'projectsController@create');
Route::get('customer/{id}/invoice/create', 'invoicesController@create');
Route::resource('offer' , 'offersController');
Route::resource('action' , 'actionsController');
Route::resource('home' , 'homesController');
Route::resource('customer' , 'customersController');
Route::resource('invoice' , 'invoicesController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
