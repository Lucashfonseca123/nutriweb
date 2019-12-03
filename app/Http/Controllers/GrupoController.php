<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GrupoHasAlimento;
use App\Models\Grupo;
use App\Models\Cmvcoltaco3;
use App\Models\Itemcardapio;

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
        $group = Grupo::all();
        return view('grupo_editar')->with('busca_alimentos', $var)->with('group', $group);
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
        $var->NomeGrupo = $request->nomesGrupos;
        $var->save();

        $varHasAlimento = GrupoHasAlimento::where('idBuscado', $id)->get();

        $alimentoid = $request->id_alimento;
        $qtdealimento = $request->quantidadeAlimento;

        foreach ($varHasAlimento as $grupo){
            $grupo->delete();
        }

        foreach($alimentoid as $key => $alimento) {
            GrupoHasAlimento::create([
                'Alimento_id' => $alimentoid[$key],
                'Qtde_Alimento' => $qtdealimento[$key],
                'idBuscado' => $id
            ])->grupo()->associate($var);
        }

        $var = Cmvcoltaco3::all();
        $group = Grupo::all();

        return view('grupo_editar')->with('busca_alimentos', $var)->with('group', $group)->with('message', 'Grupo editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
//        dd($id);
        $varHasAlimento = GrupoHasAlimento::where('idBuscado', $request->id)->get();
//        dd($varHasAlimento);
        foreach ($varHasAlimento as $grupo){
            $salvoEmCardapio = Itemcardapio::where('Grupo_idGrupo',$grupo->idBuscado)->get();
            $salvoEmCardapio2 = Itemcardapio::where('Grupo_idGrupo2',$grupo->idBuscado)->get();
        }
//        dd($salvoEmCardapio2);
        if ($salvoEmCardapio->isEmpty() && $salvoEmCardapio2->isEmpty()){
            foreach ($varHasAlimento as $grupo) {
                $grupo->delete();
            }
            $idg = (int)$request->id;
            $var = Grupo::find($idg);
            $var->delete();
            $varAlimento = Cmvcoltaco3::all();
            $group = Grupo::all();
            return view('grupo_editar')->with('busca_alimentos', $varAlimento)->with('group', $group);
//            return redirect()->back()->with('message2', 'Grupo excluído com sucesso!');
        }
        else {

            return redirect()->back()->with('message', 'Grupo utilizado em cardápio!');
        }
    }

    public function busca(Request $request){
        $var = $request->busca;
//        $lista_nome = Grupo::where('NomeGrupo', "like", "%".$var."%")->get();
//        return view('grupo_editar')->with('lista_nome', $lista_nome);
        $group = Grupo::all();

        $consultaGrupo = Grupo::join('Grupo_has_alimento','Grupo.idGrupo','=','Grupo_has_alimento.idBuscado')->where('NomeGrupo', $var)->get();
        $var = Cmvcoltaco3::all();
        foreach ($consultaGrupo as $grupo){
            $alimento = $grupo->Alimento_id;
            $elementoAlimento = Cmvcoltaco3::where('id', $alimento)->get();
            foreach ($elementoAlimento as $nome){
                $nomeAlimento[] = $nome->descricaoAlimento;
            }
        }
//        dd($nomeAlimento);
        return view('grupo_editar')->with('lista_nome', $consultaGrupo)->with('busca_alimentos', $var)->with('group', $group)->with('alimento', $nomeAlimento);
    }

    public function alimentos(){
        $var = Cmvcoltaco3::all();
        dd($var);
        return view('grupo_editar')->with('busca_alimentos', $var);
    }
}
