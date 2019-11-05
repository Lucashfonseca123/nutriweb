<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoHasAlimento;
use App\Models\Grupo;
use App\Models\Cmvcoltaco3;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var = Cmvcoltaco3::all();
        return view('grupo_editar')->with('busca_alimentos', $var);
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
        $var = new GrupoHasAlimento;
        $varG = new Grupo;

        $alimentoid = $request->id_alimento;
        $qtdealimento = $request->quantidadeAlimento;

        $varG->NomeGrupo = $request->nomesGrupo;
        $varG->save();
        $idgrupo = $varG->idGrupo;

        foreach($alimentoid as $key => $alimento){
        GrupoHasAlimento::create([
            'Alimento_id' => $alimentoid[$key],
            'Qtde_Alimento' => $qtdealimento[$key],
            'idBuscado' => $idgrupo
        ])->grupo()->associate($varG);
    }

        return redirect()->back()->with('message', 'Grupo cadastrado com sucesso!');
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
        $var = Grupo::find($id);
        $var->NomeGrupo = $request->nomesGrupo;
        $var->save();

        $alimentoid = $request->id_alimento;
        $qtdealimento = $request->quantidadeAlimento;


        foreach ($alimentoid as $key => $alimento) {
            GrupoHasAlimento::create([
                'Alimento_id' => $alimentoid[$key],
                'Qtde_Alimento' => $qtdealimento[$key],
                'idBuscado' => $idgrupo
            ])->grupo()->associate($var);
        }

        return redirect()->back();
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
//        $lista_nome = Grupo::where('NomeGrupo', "like", "%".$var."%")->get();
//        return view('grupo_editar')->with('lista_nome', $lista_nome);

        $consultaGrupo = Grupo::join('Grupo_has_alimento','Grupo.idGrupo','=','Grupo_has_alimento.idBuscado')->where('NomeGrupo', $var)->get();
        $var = Cmvcoltaco3::all();
        return view('grupo_editar')->with('lista_nome', $consultaGrupo)->with('busca_alimentos', $var);
    }

    public function alimentos(){
        $var = Cmvcoltaco3::all();
        dd($var);
        return view('grupo_editar')->with('busca_alimentos', $var);
    }
}
