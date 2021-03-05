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

Route::get('/', 'App\Http\Controllers\Admin\LoginController@login')->name('login');


Route::middleware('auth')->get('/admin', 'App\Http\Controllers\Admin\DashboardController@index')->name('admin-dashboard');

Route::middleware('auth')->get('/admin/employee', 'App\Http\Controllers\Admin\EmployeeController@index')->name('admin-employee');

Route::middleware('auth')->get('/admin/employee/create', 'App\Http\Controllers\Admin\EmployeeController@create')->name('create-admin-employee');

Route::get('/admin/jobtype', 'App\Http\Controllers\Admin\JobTypeController@index')->name('admin-job-type');
Route::get('/admin/officetype', 'App\Http\Controllers\Admin\OfficeTypeController@index')->name('admin-office-type');

Route::get('/admin/services', 'App\Http\Controllers\Admin\ServiceController@index')->name('admin-service');

Route::middleware('auth')->get('/logout', 'App\Http\Controllers\Admin\DashboardController@logout')->name('logout');
