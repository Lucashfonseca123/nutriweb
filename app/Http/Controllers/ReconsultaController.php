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
        $var2 = (int)($request->idpaciente);
        $varCon = new Consultum;
        $varCon->PesoConsulta = $request->peso;
        $varCon->Circ_pantuConsulta = $request->circ_pantu;
        $varCon->EstaturaConsulta = $request->estatura; 
        $varCon->Circ_cinturaConsulta = $request->cirCintura;
        $varCon->Circ_abdomenConsulta = $request->circAbd;
        $varCon->Circ_quadrilConsulta = $request->cirQuad;
        $varCon->Circ_coxa_prox_dirConsulta = $request->cirCxDir;
        $varCon->Circ_coxa_prox_esqConsulta = $request->cirCxEsq;
        $varCon->Circ_braco_dirConsulta = $request->cirBraDir;
        $varCon->Circ_braco_esqConsulta = $request->cirBraEsq;
        $varCon->Circ_punhoConsulta = $request->cirPunho;
        $varCon->Porc_gorduraConsulta = $request->gordura;
        $varCon->Porc_muscularConsulta = $request->muscular;
        $varCon->TmbConsulta = $request->tmb;
        $varCon->Body_ageConsulta = $request->bodyAge;
        $varCon->Gord_visceralConsulta = $request->gordVisc;
        $varCon->Paciente_idPaciente = $request->idpaciente;
        $varCon->Nutricionista_idNutricionista = $request->idnutricionista;
        $varCon->AlteracaoConsulta = 0;
        $varCon->PrimeiraConsulta = 0;
        $varCon->save();
        return redirect()->back()->with('message', 'Reconsulta cadastrado com sucesso!');
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
        $lista_nome = Paciente::where('NomePaciente', "like", "%".$var."%")->get();    
        return view('paciente_reconsulta')->with('lista_nome', $lista_nome);
    }

    public function retorne(){
        return view('testar_consulta');
    }

}
