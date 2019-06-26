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

Route::get('/compras','ComprasController@index')->name('compras');
Route::post('/compras','ComprasController@store')->name('compras.store');

Route::get('/validacion','ValidacionController@index')->name('validacion');
Route::get('/validacion/cancelar/{id}/{cantidad}','ValidacionController@edit')->name('valudacion.edit');
Route::post('/validacion','ValidacionController@store')->name('validacion.store');

Route::post('/factura','FacturaController@store')->name('factura.store');

Route::get('/productos','ProductosController@index')->name('productos.index');
Route::post('/productos','ProductosController@store')->name('productos.store');

Route::get('/inventario','InventarioController@index')->name('inventario.index');