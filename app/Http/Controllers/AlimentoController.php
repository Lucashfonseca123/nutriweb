<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alimentos_taco;

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
        $var = new Alimentos_taco;
        $var->id = $request->id;
        $var->categoria = 1;
        $var->numeroAlimento =1;
        $var->descricaoAlimento = $request->nomealimento;
        $var->umidade = 1;
        $var->energiaKcal = $request->qtd_calorica;
        $var->energiaKj = 1;
        $var->proteina = 1;
        $var->lipideos = 1;
        $var->colesterol = 1;
        $var->carboidrato = 1;
        $var->fibraAlimentar = 1;
        $var->cinzas = 1;
        $var->calcio = 1;
        $var->magnesio = 1;
        $var->manganes = 1;
        $var->fosforo = 1;
        $var->ferro = 1;
        $var->sodio = 1;
        $var->potassio = 1;
        $var->cobre = 1;
        $var->zinco = 1;
        $var->retinol = 1;
        $var->re = 1;
        $var->rae = 1;
        $var->tiamina = 1;
        $var->riboflavina = 1;
        $var->piridoxina = 1;
        $var->niacina = 1;
        $var->vitaminaC = 1;
        $var->created_at = 1;
        $var->updated_at = 1;

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
