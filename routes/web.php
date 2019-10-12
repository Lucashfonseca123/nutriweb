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

    Route::get('/buscarPaciente', 'EditarInfoController@busca');

    Route::get('/cardapiosPendentes','TelaInicialController@busca');

    Route::get('/grafico', 'GraficoController@busca');

    Route::get('/relatorio', 'Controller@consultar_relatorio');

    Route::get('/buscarRelatorio', 'RelatorioController@busca');

    Route::resource('/cadastrarpaciente', 'PacienteController');

    Route::resource('/reconsultarpaciente', 'ReconsultaController');

    Route::post('/buscarreconsulta', 'ReconsultaController@busca');

    Route::get('/reconsulta', 'Controller@reconsulta');

    Route::get('/cardapio', 'Controller@cardapio');

    Route::get('/grupos','Controller@grupos');

    Route::resource('/grupoCadastro', 'GrupoController');

    Route::get('/alimentos', 'Controller@buscar_alimentos');

    Route::get('/grupo_final', 'Controller@grupo_finalizar');

    Route::get('/editcardapio', 'Controller@edit_cardapio');

    Route::get('/addalimentos', 'Controller@add_alimentos');

    Route::get('/', 'Controller@info_paciente')->name('infopaciente');

    Route::get('/recuperar_senha', 'Controller@recuperar_senha');

    Route::get('/resumo_paciente', 'Controller@resumir_paciente');

    Route::post('/testerota', 'HomeController@store')->name('test');

    Route::get('/testar_consulta', 'ReconsultaController@busca');

    Route::get('/retorne', 'ReconsultaController@retorne');

    Route::post('/reconsultarstore', 'ReconsultaController@store');

    Route::get('buscar_id_reconsulta', 'ReconsultaController@buscaId');

    Route::post('/buscarPessoa', 'CardapioController@busca');

    Route::resource('/salvarAlimentos', 'AlimentoController');

    Route::get('selecionar_paciente', 'PacienteController@busca');

    Route::get('/editarInfo', 'PacienteController@editarInfo');

    Route::post('/edit_paciente', 'EditarInfoController@update');

    Route::get('/hist_consultas' , 'Controller@hist_consultas');

    Route::get('/buscar_consultas', 'HistoricoController@busca');
});

Auth::routes();
