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

Route::get('/', 'UserController@index')->name('index');
Route::get('/input-data', 'UserController@create')->name('create');
Route::post('/input-data', 'UserController@createdStore')->name('create.store');
Route::get('/show-data', 'UserController@showData')->name('show.data');
Route::get('/delete-data/{nis}', 'UserController@delete')->name('delete.data');
