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
Route::get('/datautama2010', 'DataUtama2010Controller@index');
Route::get('/addutama2010', 'DataUtama2010Controller@add');
Route::post('/datautama2010/create', 'DataUtama2010Controller@create');
Route::post('/datautama2010/update/{id}', 'DataUtama2010Controller@update');
Route::get('/editutama2010/{id}', 'DataUtama2010Controller@edit');

//data tahun 2018
Route::get('/datautama2011', 'DataUtama2011Controller@index');
Route::get('/addutama2011', 'DataUtama2011Controller@add');
Route::post('/datautama2011/create', 'DataUtama2011Controller@create');
Route::post('/datautama2011/update/{id}', 'DataUtama2011Controller@update');
Route::get('/editutama2011/{id}', 'DataUtama2011Controller@edit');

//data tahun 2018
Route::get('/datautama2012', 'DataUtama2012Controller@index');
Route::get('/addutama2012', 'DataUtama2012Controller@add');
Route::post('/datautama2012/create', 'DataUtama2012Controller@create');
Route::post('/datautama2012/update/{id}', 'DataUtama2012Controller@update');
Route::get('/editutama2012/{id}', 'DataUtama2012Controller@edit');

//data tahun 2018
Route::get('/datautama2013', 'DataUtama2013Controller@index');
Route::get('/addutama2013', 'DataUtama2013Controller@add');
Route::post('/datautama2013/create', 'DataUtama2013Controller@create');
Route::post('/datautama2013/update/{id}', 'DataUtama2013Controller@update');
Route::get('/editutama2013/{id}', 'DataUtama2013Controller@edit');

//data tahun 2018
Route::get('/datautama2014', 'DataUtama2014Controller@index');
Route::get('/addutama2014', 'DataUtama2014Controller@add');
Route::post('/datautama2014/create', 'DataUtama2014Controller@create');
Route::post('/datautama2014/update/{id}', 'DataUtama2014Controller@update');
Route::get('/editutama2014/{id}', 'DataUtama2014Controller@edit');

//data tahun 2018
Route::get('/datautama2015', 'DataUtama2015Controller@index');
Route::get('/addutama2015', 'DataUtama2015Controller@add');
Route::post('/datautama2015/create', 'DataUtama2015Controller@create');
Route::post('/datautama2015/update/{id}', 'DataUtama2015Controller@update');
Route::get('/editutama2015/{id}', 'DataUtama2015Controller@edit');

//data tahun 2018
Route::get('/datautama2016', 'DataUtama2016Controller@index');
Route::get('/addutama2016', 'DataUtama2016Controller@add');
Route::post('/datautama2016/create', 'DataUtama2016Controller@create');
Route::post('/datautama2016/update/{id}', 'DataUtama2016Controller@update');
Route::get('/editutama2016/{id}', 'DataUtama2016Controller@edit');

//data tahun 2018
Route::get('/datautama2017', 'DataUtama2017Controller@index');
Route::get('/addutama2017', 'DataUtama2017Controller@add');
Route::post('/datautama2017/create', 'DataUtama2017Controller@create');
Route::post('/datautama2017/update/{id}', 'DataUtama2017Controller@update');
Route::get('/editutama2017/{id}', 'DataUtama2017Controller@edit');

//data tahun 2018
Route::get('/datautama2018', 'DataUtama2018Controller@index');
Route::get('/addutama2018', 'DataUtama2018Controller@add');
Route::post('/datautama2018/create', 'DataUtama2018Controller@create');
Route::post('/datautama2018/update/{id}', 'DataUtama2018Controller@update');
Route::get('/editutama2018/{id}', 'DataUtama2018Controller@edit');

//data tahun 2019
Route::get('/datautama2019', 'DataUtama2019Controller@index');
Route::get('/addutama2019', 'DataUtama2019Controller@add');
Route::post('/datautama2019/create', 'DataUtama2019Controller@create');
Route::post('/datautama2019/update/{id}', 'DataUtama2019Controller@update');
Route::get('/editutama2019/{id}', 'DataUtama2019Controller@edit');

//data tahun 2020
Route::get('/datautama2020', 'DataUtama2020Controller@index');
Route::get('/addutama2020', 'DataUtama2020Controller@add');
Route::post('/datautama2020/create', 'DataUtama2020Controller@create');
Route::get('/datautama2020/delete/{id}', 'DataUtama2020Controller@delete');
Route::post('/datautama2020/update/{id}', 'DataUtama2020Controller@update');
Route::get('/editutama2020/{id}', 'DataUtama2020Controller@edit');
//data tahun 2021
Route::get('/datautama', 'DataUtamaController@index');
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

Route::get('/datanunggak2014', 'DataNunggak2014Controller@index');
Route::get('/addnunggak2014', 'DataNunggak2014Controller@add');
Route::post('/datanunggak2014/create', 'DataNunggak2014Controller@create');
Route::get('/datanunggak2014/delete/{id}', 'DataNunggak2014Controller@delete');
Route::post('/datanunggak2014/update/{id}', 'DataNunggak2014Controller@update');
Route::get('/editnunggak2014/{id}', 'DataNunggak2014Controller@edit');
Route::get(
    'datanunggak2014/export_excel',
    'DataNunggak2014Controller@export_excel'
);

Route::get('/datanunggak2015', 'DataNunggak2015Controller@index');
Route::get('/addnunggak2015', 'DataNunggak2015Controller@add');
Route::post('/datanunggak2015/create', 'DataNunggak2015Controller@create');
Route::get('/datanunggak2015/delete/{id}', 'DataNunggak2015Controller@delete');
Route::post('/datanunggak2015/update/{id}', 'DataNunggak2015Controller@update');
Route::get('/editnunggak2015/{id}', 'DataNunggak2015Controller@edit');
Route::get(
    'datanunggak2015/export_excel',
    'DataNunggak2015Controller@export_excel'
);

Route::get('/datanunggak2016', 'DataNunggak2016Controller@index');
Route::get('/addnunggak2016', 'DataNunggak2016Controller@add');
Route::post('/datanunggak2016/create', 'DataNunggak2016Controller@create');
Route::get('/datanunggak2016/delete/{id}', 'DataNunggak2016Controller@delete');
Route::post('/datanunggak2016/update/{id}', 'DataNunggak2016Controller@update');
Route::get('/editnunggak2016/{id}', 'DataNunggak2016Controller@edit');
Route::get(
    'datanunggak2016/export_excel',
    'DataNunggak2016Controller@export_excel'
);
Route::get(
    '/datanunggak/carinunggak2016',
    'DataNunggak2016Controller@cariData'
);
Route::get('/carinunggak2016', 'DataNunggak2016Controller@cariData');

Route::get('/datanunggak2017', 'DataNunggak2017Controller@index');
Route::get('/addnunggak2017', 'DataNunggak2017Controller@add');
Route::post('/datanunggak2017/create', 'DataNunggak2017Controller@create');
Route::get('/datanunggak2017/delete/{id}', 'DataNunggak2017Controller@delete');
Route::post('/datanunggak2017/update/{id}', 'DataNunggak2017Controller@update');
Route::get('/editnunggak2017/{id}', 'DataNunggak2017Controller@edit');
Route::get(
    'datanunggak2017/export_excel',
    'DataNunggak2017Controller@export_excel'
);

Route::get('/datanunggak2018', 'DataNunggak2018Controller@index');
Route::get('/addnunggak2018', 'DataNunggak2018Controller@add');
Route::post('/datanunggak2018/create', 'DataNunggak2018Controller@create');
Route::get('/datanunggak2018/delete/{id}', 'DataNunggak2018Controller@delete');
Route::post('/datanunggak2018/update/{id}', 'DataNunggak2018Controller@update');
Route::get('/editnunggak2018/{id}', 'DataNunggak2018Controller@edit');
Route::get(
    'datanunggak2018/export_excel',
    'DataNunggak2018Controller@export_excel'
);

Route::get('/datanunggak2019', 'DataNunggak2019Controller@index');
Route::get('/addnunggak2019', 'DataNunggak2019Controller@add');
Route::post('/datanunggak2019/create', 'DataNunggak2019Controller@create');
Route::get('/datanunggak2019/delete/{id}', 'DataNunggak2019Controller@delete');
Route::post('/datanunggak2019/update/{id}', 'DataNunggak2019Controller@update');
Route::get('/editnunggak2019/{id}', 'DataNunggak2019Controller@edit');
Route::get(
    'datanunggak2019/export_excel',
    'DataNunggak2019Controller@export_excel'
);

Route::get('/datanunggak2020', 'DataNunggak2020Controller@index');
Route::get('/addnunggak2020', 'DataNunggak2020Controller@add');
Route::post('/datanunggak2020/create', 'DataNunggak2020Controller@create');
Route::get('/datanunggak2020/delete/{id}', 'DataNunggak2020Controller@delete');
Route::post('/datanunggak2020/update/{id}', 'DataNunggak2020Controller@update');
Route::get('/editnunggak2020/{id}', 'DataNunggak2020Controller@edit');
Route::get(
    'datanunggak2020/export_excel',
    'DataNunggak2020Controller@export_excel'
);

Route::get('/datanunggak2021', 'DataNunggak2021Controller@index');
Route::get('/addnunggak2021', 'DataNunggak2021Controller@add');
Route::post('/datanunggak2021/create', 'DataNunggak2021Controller@create');
Route::get('/datanunggak2021/delete/{id}', 'DataNunggak2021Controller@delete');
Route::post('/datanunggak2021/update/{id}', 'DataNunggak2021Controller@update');
Route::get('/editnunggak2021/{id}', 'DataNunggak2021Controller@edit');
Route::get(
    'datanunggak2021/export_excel',
    'DataNunggak2021Controller@export_excel'
);