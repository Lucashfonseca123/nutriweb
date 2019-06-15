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

    public function buscar_alimentos(){
        return view ('alimentos_busca');
    }

    public function grupo_finalizar(){
        return view('grupo_finalizado');
    }

    public function edit_cardapio(){
        return view ('edit_cardapio');
    }

    public function edit_grupos(){
        return view ('edit_grupos');
    }

    public function add_alimentos(){
        return view ('add_alimentos');
    }

    public function edit_paciente(){
        return view ('paciente_editar');
    }

    public function info_paciente(){
        return view('paciente_info');
    }

}
