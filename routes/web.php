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
    return view('index');
});
Route::get('/agregardoctores', 'DoctoresController@agregardoc')->name('agregardoctores');
Route::get('/inicio', 'DoctoresController@index')->name('inicio');
Route::get('/listadodoctores', 'DoctoresController@listasdoc')->name('listadodoctores');
Route::post('/store', 'DoctoresController@store')->name('store');
Route::get('/agregarpacientes', 'PacientesController@agregarpac')->name('agregarpacientes');
Route::get('/listadopacientes', 'PacientesController@listaspac')->name('listadopacientes');
Route::post('/store2', 'PacientesController@store')->name('store2');
Route::get('/agregarmedicamentos', 'MedicamentosController@agregarmedic')->name('agregarmedicamentos');
Route::get('/listadomedicamentos', 'MedicamentosController@listasmedic')->name('listadomedicamentos');
Route::post('/store3', 'MedicamentosController@store')->name('store3');
Route::get('/pacientesdpf', 'PDFController@PDFPacientes')->name('descargarpacientesPDF');
Route::get('/doctorespdf', 'PDFController@PDFDoctores')->name('descargardoctoresPDF');
Route::get('/medicamentospdf', 'PDFController@PDFMedicamentos')->name('descargarmedicamentosPDF');
