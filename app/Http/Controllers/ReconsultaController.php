<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Consultum;

class ReconsultaController extends Controller
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
        $var = 1;
        $varCon = new Consultum;
        $varCon->Peso = $request->peso;
        $varCon->Circ_pantu = $request->circ_pantu;
        $varCon->Estatura = $request->estatura; 
        $varCon->Circ_cintura = $request->cirCintura;
        $varCon->Circ_abdomen = $request->circAbd;
        $varCon->Circ_quadril = $request->cirQuad;
        $varCon->Circ_coxa_prox_dir = $request->cirCxDir;
        $varCon->Circ_coxa_prox_esq = $request->cirCxEsq;
        $varCon->Circ_braco_dir = $request->cirBraDir;
        $varCon->Circ_braco_esq = $request->cirBraEsq;
        $varCon->Circ_punho = $request->cirPunho;
        $varCon->Porc_gordura = $request->gordura;
        $varCon->Porc_muscular = $request->muscular;
        $varCon->Tmb = $request->tmb;
        $varCon->Body_age = $request->bodyAge;
        $varCon->Gord_visceral = $request->gordVisc;
        $varCon->Paciente_idPaciente = 1;
        $varCon->Objetivos_idObjetivos = 1;
        $varCon->AltGastrointestinais_idAltGastrointestinais = 1;
        $varCon->AntFamiliares_idAntFamiliares = 1;
        $varCon->AltClinicas_idAltClinicas = 1;
        $varCon->diagnostico()->associate($var);
        $varCon->Atividade_Fisica_idAtividade_Fisica = 1;
        $varCon->Nutricionista_idNutricionista = 1;
        $varCon->Cardapio_idCardapio = 1;
        $varCon->save();
        return 'certo';
        
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
        //
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
        $lista_nome = Paciente::where('Nome', "like", "%".$var."%")->get();    
        return view('paciente_reconsulta')->with('lista_nome', $lista_nome);
    }

    public function retorne(){
        return view('testar_consulta');
    }
}
