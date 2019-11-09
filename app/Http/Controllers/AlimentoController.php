<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cmvcoltaco3;

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
        $var->categoria = 0;
        $var->numeroAlimento = 0;
        $var->umidade = 0;
        $var->energiaKj = 0;
        $var->colesterol = 0;
        $var->cinzas = 0;
        $var->magnesio = 0;
        $var->manganes = 0;
        $var->fosforo = 0;
        $var->sodio = 0;
        $var->potassio = 0;
        $var->cobre = 0;
        $var->zinco = 0;
        $var->retinol = 0;
        $var->re = 0;
        $var->rae = 0;
        $var->tiamina = 0;
        $var->riboflavina = 0;
        $var->piridoxina = 0;
        $var->niacina = 0;
        $var->vitaminaC = 0;
        $var->vitaminaC = 0;

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
