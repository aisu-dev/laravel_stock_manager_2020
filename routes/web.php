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
// ! AUTH
Route::get('/signin', 'EmployeesController@signin_page');
Route::get('/signup', 'EmployeesController@signup_page');
Route::post('/auth/signin', 'EmployeesController@signin');
Route::post('/auth/signup', 'EmployeesController@signup');
Route::get('/signout', 'EmployeesController@signout');
// ! ADMIN
Route::get('/admin/manage_emp', 'EmployeesController@manage_emp_page');
Route::get('/admin/edit/{id}', 'EmployeesController@edit_by_admin_page');
Route::post('/admin/edit/store', 'EmployeesController@admin_store');
Route::get('/emp/edit/', 'EmployeesController@edit_by_emp_page');
Route::post('/emp/edit/store', 'EmployeesController@emp_store');
Route::get('/admin/delete/{id}', 'EmployeesController@admin_delete');


