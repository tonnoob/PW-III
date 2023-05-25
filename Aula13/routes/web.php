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
    return view('principal');
});

Route::get('/quemsomos', function () {
    return view('quem-somos');
});

Route::get('/laboratorio','LaboratorioController@index');
Route::post('/laboratorio','LaboratorioController@store');
Route::get('/laboratorio/excluir/{idLab}','LaboratorioController@destroy');

Route::get('/contato','ContatoController@index');
Route::post('/contato','ContatoController@store');
Route::get('/contato/excluir/{idContato}','ContatoController@destroy');

Route::get('/reclamacao','ReclamacaoController@index');
Route::post('/reclamacao','ReclamacaoController@store');
Route::get('/reclamacao/excluir/{idRec}','ReclamacaoController@destroy');

Route::get('/pc','PcController@index');
Route::post('/pc','PcController@store');
Route::get('/pc/excluir/{idPc}','PcController@destroy');

Route::get('/viacep', function () {
    return view('viacep');
});

