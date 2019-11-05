<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultum;
use App\Models\Paciente;

class GraficoController extends Controller
{
    public function busca(Request $request){
        $var = $request->all();
        $var = json_encode($var, true);
        $var = json_decode($var, true);
        $var = $var['id'];
        $graficoPaciente = Consultum::where('Paciente_idPaciente','=', $var )->where('AlteracaoConsulta','=','0')->get();
        return response()->json($graficoPaciente);
    }
}
