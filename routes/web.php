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


Auth::routes();
// Frontend
Route::get('/', 'MainController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/products', 'ProductsController@index');
Route::get('/services', 'ServicesController@index');
Route::post('/contact', 'PostController@index');
Route::get('lang/{name}', 'LangController@lang');


