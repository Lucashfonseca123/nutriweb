<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

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
        $pacientes = Paciente::where('idPaciente', $var)->get(); 
        return view('editar_paciente')->with('pacientes',  $pacientes );
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
         $id = (int)($request->idpaciente);
         $varp = Paciente::find($id);

        //$varEnd = new Endereco;
        //$varEst = new Estado;
        //$varCid = new Cidade;
       
        $varp->Nome = $request->paciente;
        $varp->Email = $request->email;
        $telefone = $request->telefone;
        $telefone = intval($telefone);
        $varp->Telefone = $telefone;
        $varp->Sexo = $request->sexo;
        //$varp->DataDeNascimento=$request->dtnasc;
        $varp->Profissao=$request->profissao;
        //Endereço
        //$varEnd->Cep = $request->cep;
        //$varEnd->Rua = $request->rua;
        //$varEnd->Numero = $request->numeroEndereco;
        //$varEnd->Bairo = $request->bairro;
        //$varCid->Nome = $request->cidade;
        //$varEst->Nome = $request->estado;
        //Horário de rabalho e rotina diária
        $varp->TrabalhaHoraDia = $request->hrsDia; 
        //$varp->Rotina = $request->horErotina;
        //$varCid->save();
        //$varEnd->save();
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
        $consultaPaciente = Paciente::where('Nome', "like", "%".$var."%")->get();  
        return view('editar_info')->with('consultaPaciente', $consultaPaciente);
    }
}
