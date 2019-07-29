<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teste2;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $teste = Teste2::all();
        return view('welcome')->with($teste);
    }

    public function store(Request $request){
        $teste = new Teste2;
        $teste->nome = $request->usuario;
        $teste->save();
        return 'deu boa';
    }

}
