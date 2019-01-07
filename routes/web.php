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

//Route Client
Route::get('Trang-Chu','Controller@index');
Route::get('Trang-Chu','ProductController@Typeproduct');
Route::get('List','Controller@Lisproduct');


//Route Backend


Route::get('Dasaboard','Controller@Quantri');