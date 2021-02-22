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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/datakas', 'HomeController@data')->name('data');
Route::post('/tambahdata/proses', 'HomeController@tambahdata')->name('tambahdata');
Route::get('/tambahdata', 'HomeController@formdata')->name('form');
Route::get('/datakeluar', 'HomeController@datakeluar')->name('datakeluar');
Route::post('/datakeluar/proses', 'HomeController@prosesdata')->name('prosesdata');

Route::get('/multi', 'HomeController@multimedia')->name('multi');
Route::get('/multitambah', 'HomeController@multitambah')->name('multitambah');
Route::post('/multiproses', 'HomeController@multiproses')->name('multiproses');
Route::get('/multiupdate/{id}', 'HomeController@multiupdate')->name('multiupdate');
Route::put('/multiprosesupdate/{id}', 'HomeController@prosesupdate')->name('prosesupdate');
Route::get('/multihapus/{id}', 'HomeController@multihapus')->name('multihapus');


