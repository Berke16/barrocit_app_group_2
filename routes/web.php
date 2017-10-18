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


Route::get('/', 'pagesController@index');


Route::resource('project' , 'projectsController');
Route::get('customer/{id}/project', 'projectsController@create');
Route::get('customer/{id}/invoice', 'invoicesController@create');


Route::put('offer/{id}', 'offersController@statusChange');
Route::resource('offer' , 'offersController');
Route::resource('action' , 'actionsController');
Route::resource('home' , 'homesController');
Route::resource('customer' , 'customersController');
Route::resource('invoice' , 'invoicesController');




/*
 * Routes for //Auth::routes();
 */

Route::get('login', 'pagesController@index');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

