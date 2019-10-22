<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Endereco;
use App\Models\Objetivo;
class EditarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        $var = $id;
        $pacientes = Paciente::join('Endereco','Paciente.idPaciente','=','Endereco.Paciente_idPaciente')->join('Objetivo','Paciente.idPaciente','=','Objetivo.Paciente_idPaciente')->where('idPaciente', $var)->get(); 
        dd($pacientes);
        return view('editar_info')->with('pacientes',  $pacientes );
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
         $idp = (int)($request->idpaciente);
         $varp = Paciente::find($idp);

        $varEnd = new Endereco;
        //$varEst = new Estado;
        //$varCid = new Cidade;
       
        $varp->NomePaciente = $request->paciente;
        $varp->EmailPaciente = $request->email;
        $telefone = $request->telefone;
        $varp->TelefonePaciente = $telefone;
        $varp->SexoPaciente = $request->sexo;
        //$varp->DataDeNascimento=$request->dtnasc;
        $varp->ProfissaoPaciente=$request->profissao;
        //Endereço
        $varEnd->CepEndereco = $request->cep;
        $varEnd->RuaEndereco = $request->rua;
        $varEnd->NumeroEndereco = $request->numeroEndereco;
        $varEnd->BairoEndereco = $request->bairro;
        //$varCid->Nome = $request->cidade;
        //$varEst->Nome = $request->estado;
        //Horário de rabalho e rotina diária
        $varp->TrabalhaHoraDiaPaciente = $request->hrsDia; 
        //$varp->Rotina = $request->horErotina;
        //$varCid->save();
        $varEnd->update();
        //$varEst->save();
        //$varp->estado()->associate($varEst);
        //$varp->cidade()->associate($varCid);
        //$varp->endereco()->associate($varEnd);
        
        //Objetivo
        
        
        //$varp->IntoleranciaAlimentar = $request->descrevaIntolerancia;
        //$varp->Mastigacao = $request->mastigacao;
        //$varp->PrefAlimentares = $request->prefAlimentares;
        //$varp->AversaoAlimentar = $request->aversoesAlimentares;
        //$varp->Tabagista = $request->tabagista;
       // $varp->Tempo_parou = $request->parou;
       // $varp->Cigar_dia = $request->cigarDia;
       // $varp->Etilista = $request->etilista;
       // $varp->ConsumoMedio = $request->consumo;
       // $varp->ConsumoAgua = $request->consumoAgua;
      //  $varp->UsouSuplem = $request->suplementos;
      //  $varp->CozinhaCasa = $request->cozinha;
      //  $varp->Desjejum = $request->desjejum;
      //  $varp->Lanche1 = $request->lanche;
      //  $varp->Almoco = $request->almoco;
      //  $varp->Lanche2 =$request->lanche1;
      //  $varp->Jantar = $request->jantar;
      //  $varp->Ceia = $request->ceia;
        $varp->update();
        
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
        $consultaPaciente = Paciente::join('Endereco','Endereco_idEndereco','=','Endereco.idEndereco')->where('NomePaciente', "like", "%".$var."%")->get();  
        return view('editar_info')->with('consultaPaciente', $consultaPaciente);
    }
}
