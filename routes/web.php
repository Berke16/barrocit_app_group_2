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
    return view('login');
});

Route::get('/sales', function () {
    return view('sales');
});

Route::get('/development', function () {
    return view('development');
});

Route::get('/finance', function () {
    return view('finance');
});

Route::get('/costumers', function () {
    return view('costumers');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/addcostumer', function () {
    return view('addcostumer');
});

Route::get('/addproject', function () {
    return view('addproject');
});