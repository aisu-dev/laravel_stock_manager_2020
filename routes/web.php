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

Route::get('/', 'StocksController@index');

Route::get('/signin', 'EmployeesController@signin_page');
Route::get('/signup', 'EmployeesController@signup_page');
Route::post('/auth/signin', 'EmployeesController@signin');
Route::post('/auth/signup', 'EmployeesController@signup');
