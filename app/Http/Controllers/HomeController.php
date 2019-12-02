<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teste2;
use App\Models\Consultum;
use App\Models\Paciente;
use App\Models\Cardapio;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $consultaPaciente = Consultum::join('Paciente','Consulta.Paciente_idPaciente','=','Paciente.idPaciente')->where('Cardapio_idCardapio', "=", NULL)->where('AlteracaoConsulta', '=', 0)->where('Paciente.ExcluidoPaciente','<>','1')->get();
        return view('paciente_info')->with('consultaPaciente', $consultaPaciente);
    }

}
