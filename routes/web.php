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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/barang', 'BarangController@index');
Route::get('/caribarang', 'BarangController@cari');

Route::get('/add', 'BarangController@add');
Route::post('/barang/create', 'BarangController@create');
Route::get('/barang/delete/{id}', 'BarangController@delete');
Route::post('/barang/update/{id}', 'BarangController@update');
Route::get('/edit/{id}', 'BarangController@edit');