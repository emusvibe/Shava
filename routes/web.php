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
Route::get('/quotes','QuotationsController@index');
Route::post('/quotes','QuotationsController@store');
Route::get('/contact','ContactUsController@index');
Route::post('/contact','ContactUsController@store');

