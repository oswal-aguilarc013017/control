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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/', 'HomeController@datos');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/equipoCrear', 'EquipoController@create')->name('equipocreate');
Route::get('/equipo', 'EquipoController@index')->name('equipo');
Route::get('/equipoelimi/{id}', 'EquipoController@destroy');
Route::put('/updatequipo/{id}', 'EquipoController@update');
Route::post('/equipomodifi', 'EquipoController@edit');
Route::get('/empresa', 'EmpresaController@index')->name('empresa');
Route::post('/empresaCrear', 'EmpresaController@create')->name('empresacreate');
Route::get('/empresaelimi/{id}', 'EmpresaController@destroy');
Route::put('/updatempresa/{id}', 'EmpresaController@update');
Route::post('/empresamodifi', 'EmpresaController@edit');
Route::put('/updatemant/{id}', 'MantenimientoController@update');
Route::get('/mantmodifi/{id}', 'MantenimientoController@edit');
Route::get('/mantelimi/{id}', 'MantenimientoController@destroy');
Route::post('/mantenimiento', 'MantenimientoController@create')->name('mantenimiento');
Route::get('/mantenimientocreate2', 'MantenimientoController@index')->name('mantenimiento2');
