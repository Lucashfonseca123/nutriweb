<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function iniciar(){

        return view('inicio');
    }
    public function cadastrar(){
        return view('paciente_cadastro') ;
    }

    public function consultar_relatorio(){
        return view ('relatorio');
    }

    public function reconsulta(){
        return view('paciente_reconsulta');
    }
    public function cardapio(){
        return view ('cardapio_cadastro');
    }
    public function grupos(){
        return view ('grupo_cadastro');
    }

}
