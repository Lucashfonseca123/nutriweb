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
         $varHorario = ($request->time);
        $varHorario2[1]=  strtotime($varHorario[1]);
        $varHorario2[2]=  strtotime($varHorario[2]);
        $varHorario2[3]=  strtotime($varHorario[3]);
        $varHorario2[4]=  strtotime($varHorario[4]);
        $varHorario2[5]=  strtotime($varHorario[5]);
        $varHorario2[6]=  strtotime($varHorario[6]);
        for ($i=2; $i <7 ; $i++) { 
           if ($varHorario2[$i - 1]>=$varHorario2[$i]) {
             echo "ERRO";
              //return view('cardapio_cadastro')->with('message2', 'Erro! Os horários das refeições devem estar em ordem crescente'); 
           }
           
        }
        dd($varHorario2);
        $varCardapio = new Cardapio();

        $varCardapio->Paciente_idPaciente  = $request->idpaciente;
        $varCardapio->save();

        $varCon = Consultum::find($request->idconsulta);
        $varIdGrupo = $request->grupo;
        
        $varIdGrupo2 = $request->grupo2;
       
      foreach ($varIdGrupo as $key => $value){
            Itemcardapio::create([
                'Grupo_idGrupo' => $varIdGrupo[$key],
                'Grupo_idGrupo2' => $varIdGrupo2[$key],
                'HorarioItemCardapio' => $varHorario[$key],
                'Cardapio_idCardapio' => $varCardapio->idCardapio
            ]);
        }

        $varCon->cardapio()->associate($varCardapio);
        $varCon->update();
//        return $this->final($request->idPaciente);
        return view('cardapio_cadastro')->with('message', 'Cardapio cadastrado com sucesso!');
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
    public function update(Request $request)
    {
        $idp = (int)($request->idCardapio);
        $varIdCardapio = Cardapio::find($idp);
        $varIdCardapio->update();

        $idCardapioItemCardapio = Itemcardapio::where('Cardapio_idCardapio', $idp)->get();
//        dd(collect($idCardapioItemCardapio));
        foreach($idCardapioItemCardapio as $itemCardapio){
            $itemCardapio->delete();
        }

        $varIdGrupo = $request->grupo;

        $varIdGrupo2 = $request->grupo2;
        $varHorario = $request->time;
//        dd($varIdGrupo2);

        foreach ($varIdGrupo as $key => $value){
            Itemcardapio::create([
                'Grupo_idGrupo' => $varIdGrupo[$key],
                'Grupo_idGrupo2' => $varIdGrupo2[$key],
                'HorarioItemCardapio' => $varHorario[$key],
                'Cardapio_idCardapio' => $varIdCardapio->idCardapio
            ]);
        }

       return view('edit_cardapio')->with('message', 'Cardapio alterado com sucesso!');
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

        $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->where('Paciente.ExcluidoPaciente','<>','1')->get();

        $varId = $request->buscaId;

        if ($varId == 0) {
            $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->where('ExcluidoPaciente','0')->with(['consulta' => function($query) {
            $query->where('AlteracaoConsulta', 0);
        }])->get();
        }
        else{
            $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->where('ExcluidoPaciente','0')->with(['consulta' => function($query) use($varId){
            $query->where('idConsulta', $varId);
        }])->get();
        }
        $var2 = Grupo::all();
        return view('cardapio_cadastro')->with('lista_nome', $lista_nome)->with('group', $var2);
        }


    public function busca2(Request $request){
        $var = $request->busca;
//        $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->where('Paciente.ExcluidoPaciente','<>','1')->get();

        $lista_nome = Paciente::where('NomePaciente',"like", "%".$var."%")->where('ExcluidoPaciente','0')->with(['consulta' => function($query) {
            $query->where('PrimeiraConsulta', 1)->orWhere('AlteracaoConsulta', 0)->orWhere('Cardapio_idCardapio', '<>', "")->with(['altClinica', 'altgastrointestinai', 'antfamiliare', 'atividade_fisica',
                'diagnostico','objetivo']);
        }])
            ->get();
//        dd($lista_nome);
        $var2 = Grupo::all();
//        dd(collect($lista_nome));
        foreach ($lista_nome as $paciente){
            $idPaciente = $paciente->idPaciente;
//            var_dump($idPaciente);
            $idCardapio = Cardapio::where('Paciente_idPaciente', $idPaciente)->get();
        }

//        foreach ($idCardapio as $horaCardapio) {
//            $horarioItemCardapio = Itemcardapio::where('Cardapio_idCardapio', $horaCardapio->idCardapio)->get();
//        }
//
//            dd(collect($horarioItemCardapio));

        return view('edit_cardapio')->with('lista_nome', $lista_nome)->with('group', $var2);
    }

    public function buscaCardapio(Request $request, $paciente_id)
    {
//        dump($paciente_id);
        $var = $request->busca;

        $paciente = Paciente::where('idPaciente', $paciente_id)->with(['cardapios' => function($query) {
            $query->orderBy('created_at', 'desc')->limit(1);
            $query->with('itemcardapios');
        }])->first();

        return response()->json([
           'data' => [
               'paciente_cardapio' => $paciente,
           ]
        ]);
    }

    public function resumo($id){
//        $lista_nome = Paciente::where('idPaciente', $id)->where('Paciente.ExcluidoPaciente','<>','1')->get();
//            dd($lista_nome);
//        $consulta = Consultum::where('Paciente_idPaciente', $id)->where('Paciente.ExcluidoPaciente','<>','1');

        $consultaPaciente = Paciente::where('idPaciente', $id)->where('ExcluidoPaciente','0')->with(['consulta' => function($query) {
            $query->where('PrimeiraConsulta', 1)->orWhere('AlteracaoConsulta', 1)->with(['altClinica', 'altgastrointestinai', 'antfamiliare', 'atividade_fisica','diagnostico','objetivo']);
        }])
            ->get();
        return view('resumo_paciente')->with('consultaPaciente', $consultaPaciente);
    }

    public function final($id){
        $varId = (int) $id;
        $var = Cardapio::where('Paciente_idPaciente', $varId)->orderBy('updated_at', 'DESC')->first();
        $varRefeicao = Itemcardapio::where('Cardapio_idCardapio', $var->idCardapio)
            ->with(['grupo.grupo_has_alimentos.cmvcoltaco3', 'grupo2.grupo_has_alimentos.cmvcoltaco3'])
            ->get();

        $varPaciente = Paciente::find($id);
//        dd(collect($varRefeicao));
        return view('cardapioCadastrado', [
            'nomeAlimento'  => $varRefeicao,
            'paciente' => $varPaciente
        ]);
    }
}
