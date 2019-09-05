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

Route::middleware(['auth'])->group(function () {

    Route::get('/inicio', 'Controller@iniciar');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/cadastro','Controller@cadastrar');

    Route::get('/relatorio', 'Controller@consultar_relatorio');

    Route::resource('/cadastrarpaciente', 'PacienteController')

    Route::get('/reconsulta', 'Controller@reconsulta');

    Route::get('/cardapio', 'Controller@cardapio');

    Route::get('/grupos','Controller@grupos');

    Route::get('/alimentos', 'Controller@buscar_alimentos');

    Route::get('/grupo_final', 'Controller@grupo_finalizar');

    Route::get('/editcardapio', 'Controller@edit_cardapio');

    Route::get('/addalimentos', 'Controller@add_alimentos');

    Route::get('/', 'Controller@info_paciente')->name('infopaciente');

    Route::get('/recuperar_senha', 'Controller@recuperar_senha');

    Route::get('/edit_paciente','Controller@edit_paciente');

    Route::get('/resumo_paciente', 'Controller@resumir_paciente');

    Route::post('/testerota', 'HomeController@store')->name('test');
});

Auth::routes();
