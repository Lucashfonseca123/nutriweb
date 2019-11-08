<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cmvcoltaco3;

class AlimentoController extends Controller
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
        $var = new Cmvcoltaco3;
       
        $var->descricaoAlimento = $request->nomealimento;
        $var->energiaKcal = $request->qtd_calorica;
        $var->proteina = $request->proteina;
        $var->lipideos = $request->lipideos;
        $var->carboidrato = $request->carboidratos;
        $var->fibraAlimentar = $request->fibra;
        $var->calcio = $request->calcio;
        $var->ferro = $request->ferro;
        $var->save();
        return redirect()->back();
//        return "certo";
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
}
