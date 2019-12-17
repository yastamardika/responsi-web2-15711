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
Route::group(['middleware' => ['auth']], function () {
    Route::get('/info', function () {
        return view('info');
    });
    Route::get('/jobs', 'JobsController@index');
    Route::get('/jobs/tambah', 'JobsController@create')->name('tambah_jobs');
    Route::post('/jobs/tambah/store', 'JobsController@store')->name('storejobs');
    Route::get('/jobs/tambah/edit/{id}', 'JobsController@edit')->name('editjobs');
    Route::get('/jobs/tambah/delete/{id}', 'JobsController@destroy')->name('deletejobs');
    Route::get('/employees', 'EmployeesController@index');
    Route::get('/employees/tambah', 'EmployeesController@create')->name('tambahemployees');
    Route::post('/employees/tambah/store', 'EmployeesController@store')->name('storeemployees');
    Route::get('/employees/tambah/edit/{id}', 'EmployeesController@edit')->name('editemployees');
    Route::get('/employees/tambah/delete', 'EmployeesController@destroy')->name('deleteemployees');
    Route::get('/home', 'HomeController@index')->name('home');
});
