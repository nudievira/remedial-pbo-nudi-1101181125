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

Route::group(['middleware' => 'checksession'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/user', 'UserControler@index');
    Route::get('/list', 'UserControler@list');
    Route::get('/add', 'UserControler@tambah');
    route::get('/edit/{id}', 'UserControler@edit');

    Route::post('/simpan', 'UserControler@simpan');
        Route::post('/update/{id}', 'UserControler@update');
    });


Route::get('/login', 'HomeController@login');
Route::post('/masuk', 'HomeController@masuk');