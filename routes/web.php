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

Route::get('/', 'MessageController@index')->name('home');
Route::get('/create', 'MessageController@create')->name('create');
Route::post('/store', 'MessageController@store')->name('store');
Route::get('/view/{id}', 'MessageController@view')->name('view');