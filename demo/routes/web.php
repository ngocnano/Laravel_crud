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

Route::get('/getAll', 'EmployeeController@getAll')->name('list');
Route::get('/add', 'EmployeeController@add')->name('add');
Route::get('/edit/{id}', 'EmployeeController@edit')->name('edit');
Route::post('/save', 'EmployeeController@save')->name('save');
Route::get('/delete/{id} ', 'EmployeeController@delete')->name('delete');
