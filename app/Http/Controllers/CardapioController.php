<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Paciente;
use App\Models\Consultum;
use App\Models\Grupo;
use App\Models\Cardapio;
use App\Models\Itemcardapio;

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

        $varCardapio = new Cardapio();


        $varCardapio->Paciente_idPaciente  = $request->idpaciente;
        $varCardapio->save();

        $varIdGrupo = $request->grupo;
        $varHorario = $request->time;
        $varIdRefeicao = $request->idrefeicao;
        $varOpcaoCardapio = $request->opcaocardapio;

        foreach($varIdRefeicao as $key => $cardapio){
            Itemcardapio::create([
//                 for ($i=0; $i<2; $i++){
                     'OpcoesItemCardapio' => $varOpcaoCardapio[$key],
                     'Grupo_IdGrupo' => $varIdGrupo[$key],
//                 }

                'HorarioItemCardapio' => $varHorario[$key],
                'Refeicao_idRefeicao ' => $varIdRefeicao[key]
            ])->itemcardapios()->associate($varCardapio);
        }
//
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
        $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->get();

        $var2 = Grupo::all();
        return view('cardapio_cadastro')->with('lista_nome', $lista_nome)->with('group', $var2);
    }

    public function busca2(Request $request){
        $var = $request->busca;
        $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->get();

        $var2 = Grupo::all();
        return view('edit_cardapio')->with('lista_nome', $lista_nome)->with('group', $var2);
    }

}
