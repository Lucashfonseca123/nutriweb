<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Consultum;
use App\Models\Paciente;
use App\Alimentos_taco;
use App\Models\Grupo;
use App\Models\Cmvcoltaco3;


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
        $var = Grupo::all();
        return view ('cardapio_cadastro')->with('group', $var);
    }

    public function grupos(){
        $var = Cmvcoltaco3::all();
        return view('grupo_cadastro')->with('busca_alimentos', $var);
    }

    public function buscar_alimentos(){
            $var = Cmvcoltaco3::all();
            return view('alimentos_busca')->with('teste', $var);
    }

    public function grupo_finalizar(){
        return view('grupo_finalizado');
    }

    public function edit_cardapio(){
        return view ('edit_cardapio');
    }

    public function add_alimentos(){
        return view ('add_alimentos');
    }

    public function info_paciente(){
        $var  = " ";
        $consultaPaciente = Consultum::join('Paciente','Consulta.Paciente_idPaciente','=','Paciente.idPaciente')->where('Cardapio_idCardapio', "=", NULL)->where('AlteracaoConsulta', '=', 0)->where('Paciente.ExcluidoPaciente','<>','1')->get();   
        return view('paciente_info')->with('consultaPaciente', $consultaPaciente);
    }

    public function recuperar_senha(){
        return view ('recuperar_senha');
    }

    public function editarInfo(){
         return view('editar_info');
    } 

    public function hist_consultas(){
        return view('historico_consultas');
    }

    public function help(){
        return view ("help");
    }
}
