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

use App\Models\Cardapio;
use App\Models\Itemcardapio;
use App\Models\Paciente;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

    Route::get('/inicio', 'Controller@iniciar');
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/cadastro','Controller@cadastrar');

    Route::get('/buscarPaciente', 'EditarInfoController@edit');

    Route::get('/cardapiosPendentes','TelaInicialController@busca');

    Route::get('/grafico', 'GraficoController@busca');

    Route::get('/relatorio', 'Controller@consultar_relatorio');

    Route::get('/buscarRelatorio', 'RelatorioController@busca');

    Route::resource('/cadastrarpaciente', 'PacienteController');

    Route::resource('/reconsultarpaciente', 'ReconsultaController');

    Route::resource('/cardapioCadastro', 'CardapioController');

    Route::post('/cardapioCadastro2', 'CardapioController@update');

    Route::get('/cardapioFinal/{id}', 'CardapioController@final');

    Route::post('/buscarreconsulta', 'ReconsultaController@busca');

    Route::get('/reconsulta', 'Controller@reconsulta');

    Route::get('/cardapio', 'Controller@cardapio');

    Route::get('/grupos','Controller@grupos');

    Route::resource('/grupoCadastro', 'GrupoController');

//    Route::post('/grupoCadastro/{id}', 'GrupoController@update');

    Route::post('/grupoCadastro2/{id}', 'GrupoController@update');

    Route::get('/grupoCadastro3/', 'GrupoController@destroy');

    Route::resource('/grupoEditar', 'GrupoController');

    Route::get('/alimentos', 'Controller@buscar_alimentos');

    Route::get('/grupo_final', 'Controller@grupo_finalizar');

    Route::get('/editcardapio', 'Controller@edit_cardapio');

    Route::get('/addalimentos', 'Controller@add_alimentos');

    Route::get('/', 'Controller@info_paciente')->name('infopaciente');

    Route::get('/recuperar_senha', 'Controller@recuperar_senha');

    Route::get('/resumo_paciente/{id}', 'CardapioController@resumo');

    Route::post('/testerota', 'HomeController@store')->name('test');

    Route::get('/testar_consulta', 'ReconsultaController@busca');

    Route::get('/testar_grupo', 'GrupoController@busca');

    Route::get('/retorne', 'ReconsultaController@retorne');

    Route::post('/reconsultarstore', 'ReconsultaController@store');

    Route::get('buscar_id_reconsulta', 'ReconsultaController@buscaId');

    Route::post('/buscarPessoa', 'CardapioController@busca');

    Route::post('/buscarPessoas', 'CardapioController@busca23');

    Route::post('/buscarEditPessoa', 'CardapioController@busca2');

    Route::resource('/salvarAlimentos', 'AlimentoController');

    Route::get('selecionar_paciente', 'PacienteController@busca');

    Route::get('/editarInfo', 'PacienteController@editarInfo');

    Route::post('/edit_paciente', 'EditarInfoController@update');

    Route::get('/hist_consultas' , 'Controller@hist_consultas');

    Route::get('/buscar_consultas', 'HistoricoController@busca');

    Route::get('/buscar_consultas_id', 'HistoricoController@buscaId');

    Route::get('/buscar_info', 'EditarInfoController@buscarInfo');

    Route::post('/excluirPaciente', 'EditarInfoController@destroy');

    Route::get('/help/', 'Controller@help');

    Route::get('/busca_cardapio/{paciente_id}', 'CardapioController@buscaCardapio');

    Route::get('reativa_paciente', 'PacienteController@reativar');

    Route::post('ativarPaciente', 'PacienteController@ativar');

    Route::get('teste/{id}', function($id){
        $varId = (int) $id;

        $var = Cardapio::where('Paciente_idPaciente', $varId)->orderBy('updated_at', 'DESC')->first();

        dd($var->idCardapio);
        $varRefeicao = Itemcardapio::where('Cardapio_idCardapio', $var->idCardapio)
            ->with(['grupo.grupo_has_alimentos.cmvcoltaco3', 'grupo2.grupo_has_alimentos.cmvcoltaco3'])
            ->get();

        $varPaciente = Paciente::find($id);
    });
});

Auth::routes();
