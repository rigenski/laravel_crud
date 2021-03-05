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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'StudentsController@index');
Route::get('siswa', 'StudentsController@show');
Route::get('siswa/create', 'StudentsController@create');
Route::post('siswa/store', 'StudentsController@store');
Route::get('siswa/{id}', 'StudentsController@edit');
Route::post('siswa/{id}/update', 'StudentsController@update');
Route::get('siswa/{id}/delete', 'StudentsController@delete');
