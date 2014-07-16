<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//post ini di gunakan apabila ada tombol pada form yang berfungsi memproses data, dan me post ke tabel

Route::get('/','App\\Controllers\\BootstrapController@index');
//
//Route::get('/show','App\\Controllers\\BootstrapController@show');

$NS = 'App\\Controllers\\';

Route::get('/test',$NS.'TestController@view');
Route::get('/test/add',$NS.'TestController@add');
Route::post('/test/add/proses',$NS.'TestController@addProses');
Route::get('/test/edit/{id}',$NS.'TestController@edit');        //ada ID karna di method edit pada Testcontroller ada $id
Route::post('/test/edit/proses',$NS.'TestController@editProses');
Route::get('/test/delete/{id}',$NS.'TestController@delete');

//produk
Route::get('/produk',$NS.'ProdukController@view');
Route::get('/produk/add',$NS.'ProdukController@add');
Route::post('/produk/add/proses',$NS.'ProdukController@addProses');
Route::get('/produk/edit/{id}',$NS.'ProdukController@edit');        //ada ID karna di method edit pada Testcontroller ada $id
Route::post('/produk/edit/proses',$NS.'ProdukController@editProses');
Route::get('/produk/delete/{id}',$NS.'ProdukController@delete');

//kurir
Route::get('/kurir',$NS.'KurirController@view');
Route::get('/kurir/add',$NS.'KurirController@add');
Route::post('/kurir/add/proses',$NS.'KurirController@addProses');
Route::get('/kurir/edit/{id}',$NS.'KurirController@edit');        //ada ID karna di method edit pada Testcontroller ada $id
Route::post('/kurir/edit/proses',$NS.'KurirController@editProses');
Route::get('/kurir/delete/{id}',$NS.'KurirController@delete');

//user pembeli
Route::get('/userpem',$NS.'UserpemController@view');
Route::get('/userpem/add',$NS.'UserpemController@add');
Route::post('/userpem/add/proses',$NS.'UserpemController@addProses');
Route::get('/userpem/edit/{id}',$NS.'UserpemController@edit');        //ada ID karna di method edit pada Testcontroller ada $id
Route::post('/userpem/edit/proses',$NS.'UserpemController@editProses');
Route::get('/userpem/delete/{id}',$NS.'UserpemController@delete');


//Route::get('/login',$NS.'LoginController@index');
//
//Route::post('/login/proses',$NS.'LoginController@prosesLogin');
//
//Route::get('/home','App\\Controllers\\HomeController@index');



