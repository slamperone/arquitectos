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
    return view('inicio');
});


/*
Route::get('/home', 'HomeController@index')->name('ola');
Route::resource('venta','VentaController');
Route::resource('construidos','ConstruidosController');
Route::resource('arquitectonicos','ArquitectonicosController');
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});