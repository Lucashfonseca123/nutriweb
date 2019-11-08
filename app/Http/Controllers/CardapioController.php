<?php

namespace App\Http\Controllers;

use App\Models\GrupoHasAlimento;
use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Consultum;
use App\Models\Grupo;
use App\Models\Cardapio;
use App\Models\Itemcardapio;
use App\Models\Refeicao;
use App\Models\Cmvcoltaco3;
use Illuminate\Support\Facades\Redirect;

class CardapioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'To aqui';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
//        dd(collect($request));
=======

        $varConsulta = Consultum::find($request->idconsulta);
>>>>>>> Bueno
        $varCardapio = new Cardapio();

//        $idcardapio = Cardapio::orderBy('idCardapio', 'desc')->first();

        $varCardapio->Paciente_idPaciente  = $request->idpaciente;
        $varCardapio->save();

        $varIdGrupo = $request->grupo;

        $varIdGrupo2 = $request->grupo2;
        $varHorario = $request->time;
//        dd($varIdGrupo2);

//        foreach($varIdGrupo as $key => $alimentogrupo) {
//            Refeicao::create([
//                'DescricaoRefeicao' => $varIdGrupo[$key+1],
//                'DescricaoRefeicao2' => $varIdGrupo2[$key+1],
//                'HorarioRefeicao' => $varHorario[$key+1]
//            ]);
//        }
//        dd();

      foreach ($varIdGrupo as $key => $value){
            Itemcardapio::create([
                'Grupo_idGrupo' => $varIdGrupo[$key],
                'Grupo_idGrupo2' => $varIdGrupo2[$key],
                'HorarioItemCardapio' => $varHorario[$key],
                'Cardapio_idCardapio' => $varCardapio->idCardapio
            ]);
        }
<<<<<<< HEAD
=======
        $varConsulta->cardapio()->associate($varCardapio);
        $varConsulta->update();
        return redirect()->back();

//        $varItemCardapio->HorarioItemCardapio = $request->time[1];
//        $varItemCardapio->OpcoesItemCardapio = 1;
//        $varIdGrupo = $request->grupo[1];
//        $varIdGrupo = $request->grupo[2];
//
//        $varItemCardapio->HorarioItemCardapio = $request->time[2];
//        $varItemCardapio->OpcoesItemCardapio = 2;
//        $varIdGrupo = $request->grupo[3];
//        $varIdGrupo = $request->grupo[4];
//
//        $varItemCardapio->HorarioItemCardapio = $request->time[3];
//        $varItemCardapio->OpcoesItemCardapio = 1;
//        $varIdGrupo = $request->grupo[5];
//        $varIdGrupo = $request->grupo[6];
//
//        $varItemCardapio->HorarioItemCardapio = $request->time[4];
//        $varItemCardapio->OpcoesItemCardapio = 2;
//        $varIdGrupo = $request->grupo[7];
//        $varIdGrupo = $request->grupo[8];
//
//        $varItemCardapio->HorarioItemCardapio = $request->time[5];
//        $varItemCardapio->OpcoesItemCardapio = 1;
//        $varIdGrupo = $request->grupo[9];
//        $varIdGrupo = $request->grupo[10];
//
//        $varItemCardapio->HorarioItemCardapio = $request->time[6];
//        $varItemCardapio->OpcoesItemCardapio = 2;
//        $varIdGrupo = $request->grupo[11];
//        $varIdGrupo = $request->grupo[12];
>>>>>>> Bueno

        return view('cardapio_cadastro')->with('message', 'Reconsulta cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo "To no store";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function busca(Request $request){
        $var = $request->busca;
<<<<<<< HEAD
        $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->where('Paciente.ExcluidoPaciente','<>','1')->get();
=======
        $varId = $request->buscaId;

        if ($varId == 0) {
            $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->with(['consulta' => function($query) {
            $query->where('AlteracaoConsulta', 0);
        }])->get();
        }
        else{
            $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->with(['consulta' => function($query) use($varId){
            $query->where('idConsulta', $varId);
        }])->get();
>>>>>>> Bueno

        }
        $var2 = Grupo::all();
        return view('cardapio_cadastro')->with('lista_nome', $lista_nome)->with('group', $var2);
        }
    

    public function busca2(Request $request){
        $var = $request->busca;
        $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->where('Paciente.ExcluidoPaciente','<>','1')->get();

        $var2 = Grupo::all();
        return view('edit_cardapio')->with('lista_nome', $lista_nome)->with('group', $var2);
    }

    public function resumo($id){
//        $lista_nome = Paciente::where('idPaciente', $id)->where('Paciente.ExcluidoPaciente','<>','1')->get();
////            dd($lista_nome);
//        $consulta = Consultum::where('Paciente_idPaciente', $id)->where('Paciente.ExcluidoPaciente','<>','1');

        $consultaPaciente = Paciente::where('idPaciente', $id)->where('ExcluidoPaciente','0')->with(['consulta' => function($query) {
            $query->where('PrimeiraConsulta', 1)->orWhere('AlteracaoConsulta', 1)->with(['altClinica', 'altgastrointestinai', 'antfamiliare', 'atividade_fisica','diagnostico','objetivo']);
        }])
            ->get();
        return view('resumo_paciente')->with('consultaPaciente', $consultaPaciente);
    }
}
