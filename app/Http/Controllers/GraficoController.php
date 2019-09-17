<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultum;
use App\Models\Paciente;

class GraficoController extends Controller
{
    public function busca(Request $request){
        $var = $request->busca;
        $graficoPaciente = Consultum::join('Paciente','Consulta.Paciente_idPaciente','=','Paciente.idPaciente')->where('Paciente.idPaciente','like', "%".$var."%")->get();
        return response()->json($graficoPaciente);
    }
}
