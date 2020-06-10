<?php

use GuzzleHttp\Middleware;
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






Route::get('/', 'EmployeeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/add/company', 'CompanyController@create')->name('company.create');
    Route::post('/company', 'CompanyController@store')->name('company.store');
    Route::get('/add/employee', 'EmployeeController@create')->name('employee.create');
    Route::post('/employee','EmployeeController@store')->name('employee.store');
    Route::delete('/employee/{id}', 'EmployeeController@delete')->name('employee.delete');
    Route::get('/employee/{id}' , 'EmployeeController@edit')->name('employee.edit');
    Route::patch('/employee/{id}', 'EmployeeController@update')->name('employee.update');
});