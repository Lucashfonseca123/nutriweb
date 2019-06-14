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

Route::get('/inicio', 'Controller@iniciar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cadastro','Controller@cadastrar');

Route::get('/relatorio', 'Controller@consultar_relatorio');

Route::get('/reconsulta', 'Controller@reconsulta');

Route::get('/cardapio', 'Controller@cardapio');

Route::get('/grupos','Controller@grupos');

Route::get('/alimentos', 'Controller@buscar_alimentos');

Route::get('/grupo_final', 'Controller@grupo_finalizar');