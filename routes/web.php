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


Route::resource('project' , 'ProjectsController');
Route::get('customer/{id}/project', 'ProjectsController@create');


Route::get('project/{id}/invoice', 'InvoicesController@create');
Route::put('offer/{id}', 'OffersController@statusChange');
Route::resource('offer' , 'OffersController');
Route::resource('action' , 'ActionsController');
Route::resource('home' , 'HomesController');


Route::resource('customer' , 'CustomersController');


Route::put('customer/{id}/updateAsAdmin','CustomersController@updateAsAdmin');
Route::put('customer/{id}/updateAsSales','CustomersController@updateAsSales');
Route::put('customer/{id}/updateAsFinance','CustomersController@updateAsFinance');
Route::put('customer/{id}/updateAsDevelopment','CustomersController@updateAsDevelopment');


Route::put('invoice/{invoice}/payed' , 'invoicesController@payed');
Route::resource('invoice' , 'InvoicesController');


Route::get('trash', 'TrashController@index');
Route::post('trash/customer/{id}/restore', 'TrashController@restoreCustomer');
Route::post('trash/project/{id}/restore', 'TrashController@restoreProject');
Route::post('trash/invoice/{id}/restore', 'TrashController@restoreInvoice');
Route::post('trash/offer/{id}/restore', 'TrashController@restoreOffer');
Route::post('trash/user/{id}/restore', 'TrashController@restoreUser');


Route::get('login', 'PagesController@index');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::put('user', 'UsersController@store');
Route::delete('user/{id}', 'UsersController@destroy');
Route::get('users' , 'UsersController@index');
Route::get('users/{user}/edit' , 'UsersController@edit');
Route::put('users/{user}/update' , 'UsersController@update');

