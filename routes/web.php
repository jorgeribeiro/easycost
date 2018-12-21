<?php

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

Route::get('/easycost', function () {
    return view('easycost');
});

Route::get('/orcamentos', function () {
    return view('orcamentos');
});

Route::get('/composicoes', function () {
    return view('composicoes');
});

Route::get('/insumos', function () {
    return view('insumos');
});

Route::get('/relatorios', function () {
    return view('relatorios');
});

Route::get('/novo_orcamento', function () {
    return view('novo_orcamento');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
