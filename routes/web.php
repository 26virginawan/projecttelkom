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

Route::get('/register', 'RegisterController@register')->name('register');

Route::get('/dataangsur', 'DataAngsurController@index');
Route::get('/cariangsur', 'DataAngsurController@cariData');
Route::get('/addangsur', 'DataAngsurController@add');
Route::post('/angsur/create', 'DataAngsurController@create');
Route::get('/angsur/delete/{id}', 'DataAngsurController@delete');
Route::post('/angsur/update/{id}', 'DataAngsurController@update');
Route::get('/edit/{id}', 'DataAngsurController@edit');
Route::get('angsur/export_excel', 'DataAngsurController@export_excel');
Route::post('/import_excel', 'DataAngsurController@import_excel');

Route::get('/datasalur', 'DataSalurController@index');
Route::get('/datasalur/carisalur', 'DataSalurController@cariData');
Route::get('/carisalur', 'DataSalurController@cariData');
Route::get('/addsalur', 'DataSalurController@add');
Route::post('/salur/create', 'DataSalurController@create');
Route::get('/salur/delete/{id}', 'DataSalurController@delete');
Route::post('/salur/update/{id}', 'DataSalurController@update');
Route::get('/edit/{id}', 'DataSalurController@edit');
Route::get('salur/export_excel', 'DataSalurController@export_excel');

Route::get('report', 'DataAngsurController@report')->name('report');
Route::post('report', 'DataAngsurController@search')->name('search');
Auth::routes();

Route::get('/home', 'HomeController@index');

//data tahun 2018
Route::get('/datautama2018', 'DataUtama2018Controller@index');
Route::get('/addutama2018', 'DataUtama2018Controller@add');
Route::post('/datautama2018/create', 'DataUtama2018Controller@create');

//data tahun 2019
Route::get('/datautama2019', 'DataUtama2019Controller@index');
Route::get('/addutama2019', 'DataUtama2019Controller@add');
Route::post('/datautama2019/create', 'DataUtama2019Controller@create');

//data tahun 2020
Route::get('/datautama2020', 'DataUtama2020Controller@index');
Route::get('/addutama2020', 'DataUtama2020Controller@add');
Route::post('/datautama2020/create', 'DataUtama2020Controller@create');
//data tahun 2021
Route::get('/datautama', 'HomeController@index');
Route::get('/addutama2021', 'DataUtama2021Controller@add');
Route::post('/datautama2021/create', 'DataUtama2021Controller@create');

//Data resume
Route::get('/dataresume', 'DataResumeController@index');
Route::get('/addresume', 'DataResumeController@add');
Route::post('/dataresume/create', 'DataResumeController@create');
Route::get('/dataresume/delete/{id}', 'DataResumeController@delete');
Route::post('/dataresume/update/{id}', 'DataResumeController@update');
Route::get('/editresume/{id}', 'DataResumeController@edit');
Route::get('dataresume/export_excel', 'DataResumeController@export_excel');

Route::get('/datanunggak', 'HomeController@datanunggak');

Route::get('/datanunggak2010', 'DataNunggak2010Controller@index');
Route::get('/addnunggak2010', 'DataNunggak2010Controller@add');
Route::post('/datanunggak2010/create', 'DataNunggak2010Controller@create');
Route::get('/datanunggak2010/delete/{id}', 'DataNunggak2010Controller@delete');
Route::post('/datanunggak2010/update/{id}', 'DataNunggak2010Controller@update');
Route::get('/editnunggak2010/{id}', 'DataNunggak2010Controller@edit');
Route::get(
    'datanunggak2010/export_excel',
    'DataNunggak2010Controller@export_excel'
);

Route::get('/datanunggak2011', 'DataNunggak2011Controller@index');
Route::get('/addnunggak2011', 'DataNunggak2011Controller@add');
Route::post('/datanunggak2011/create', 'DataNunggak2011Controller@create');
Route::get('/datanunggak2011/delete/{id}', 'DataNunggak2011Controller@delete');
Route::post('/datanunggak2011/update/{id}', 'DataNunggak2011Controller@update');
Route::get('/editnunggak2011/{id}', 'DataNunggak2011Controller@edit');
Route::get(
    'datanunggak2011/export_excel',
    'DataNunggak2011Controller@export_excel'
);

Route::get('/datanunggak2012', 'DataNunggak2012Controller@index');
Route::get('/addnunggak2012', 'DataNunggak2012Controller@add');
Route::post('/datanunggak2012/create', 'DataNunggak2012Controller@create');
Route::get('/datanunggak2012/delete/{id}', 'DataNunggak2012Controller@delete');
Route::post('/datanunggak2012/update/{id}', 'DataNunggak2012Controller@update');
Route::get('/editnunggak2012/{id}', 'DataNunggak2012Controller@edit');
Route::get(
    'datanunggak2012/export_excel',
    'DataNunggak2012Controller@export_excel'
);

Route::get('/datanunggak2013', 'DataNunggak2013Controller@index');
Route::get('/addnunggak2013', 'DataNunggak2013Controller@add');
Route::post('/datanunggak2013/create', 'DataNunggak2013Controller@create');
Route::get('/datanunggak2013/delete/{id}', 'DataNunggak2013Controller@delete');
Route::post('/datanunggak2013/update/{id}', 'DataNunggak2013Controller@update');
Route::get('/editnunggak2013/{id}', 'DataNunggak2013Controller@edit');
Route::get(
    'datanunggak2013/export_excel',
    'DataNunggak2013Controller@export_excel'
);