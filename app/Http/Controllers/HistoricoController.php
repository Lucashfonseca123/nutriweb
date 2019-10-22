<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultum;
use App\Models\Paciente;

class HistoricoController extends Controller
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
      $consultaPaciente = Paciente::where('NomePaciente', "like", "%".$var."%")->get();
      return view('historico_consultas')->with('consultaPaciente', $consultaPaciente);   
    }

    public function buscaId(Request $request){
      $var = $request->busca;
      $consultaPacientes = Consultum::where('Paciente_idPaciente', '=', $var)->paginate(1);
      return view('historico_consultas')->with('consultaPacientes', $consultaPacientes);   
    }
}
