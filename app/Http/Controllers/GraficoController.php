<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultum;
use App\Models\Paciente;

class GraficoController extends Controller
{
    public function busca(Request $request){
        $var = $request->all();
        dd($var);
        $graficoPaciente = Consultum::where('Paciente_idPaciente','=', $var)->get();
        return response()->json($graficoPaciente);
    }
}
