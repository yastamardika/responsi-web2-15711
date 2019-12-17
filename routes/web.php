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
    return view('base');
});
Auth::routes();
Route::get('/jobs', 'JobsController@index');
Route::get('/jobs/tambah', 'JobsController@create')->name('tambah_jobs');
Route::get('/jobs/tambah/store', 'JobsController@store')->name('storejobs');
Route::get('/jobs/tambah/edit', 'JobsController@update')->name('editjobs');
Route::get('/jobs/tambah/delete', 'JobsController@destroy')->name('deletejobs');
Route::get('/employees', 'EmployeesController@index');
Route::get('/employees/tambah', 'EmployeesController@create')->name('tambahemployees');
Route::get('/employees/tambah/store', 'EmployeesController@store')->name('storeemployees');
Route::get('/employees/tambah/edit', 'EmployeesController@update')->name('editemployees');
Route::get('/employees/tambah/delete', 'EmployeesController@destroy')->name('deleteemployees');
Route::get('/home', 'HomeController@index')->name('home');
