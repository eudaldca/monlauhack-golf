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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', '\App\Http\Controllers\StudentController@index')->name('students.index');
Route::get('/students/view/{id}', '\App\Http\Controllers\StudentController@view')->name('students.view');
Route::get('/students/edit/{id}', '\App\Http\Controllers\StudentController@edit')->name('students.edit');
Route::get('/students/create', '\App\Http\Controllers\StudentController@create')->name('students.create');
