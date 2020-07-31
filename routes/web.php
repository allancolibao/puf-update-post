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

Route::get('/', 'PostController@index')->name('get.index');
Route::get('/edit/{id}', 'PostController@edit')->name('get.edit');
Route::patch('/update/{id}', 'PostController@update')->name('post.update');
Route::get('/create', 'PostController@create')->name('get.create');
Route::post('insert', 'PostController@store')->name('get.store');