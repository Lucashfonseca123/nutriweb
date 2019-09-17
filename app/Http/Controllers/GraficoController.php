<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficoController extends Controller
{
    public function busca(Request $request){
        $var = $request->busca;
        $consultaPaciente = Consultum::join('Paciente','Consulta.Paciente_idPaciente','=','Paciente.idPaciente')->where('Paciente.idPaciente', "%".$var."%")->get();    
        return view('relatorio')->with('consultaPaciente', $consultaPaciente);
    }
}
