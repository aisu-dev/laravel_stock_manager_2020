<?php

use Illuminate\Support\Facades\Route;

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
Route::get('product', 'ProductsController@index');

Route::get('product/create', 'ProductsController@createform');
Route::post('product/create', 'ProductsController@create');

Route::get('product/edit/{id}', 'ProductsController@show');
Route::post('product/edit{id}', 'ProductsController@update');



