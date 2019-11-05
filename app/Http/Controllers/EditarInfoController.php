<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\database\migrations;
use App\Models\Paciente;
use App\Models\Estado;
use App\Models\Cidade;
use App\Models\Endereco;
use App\Models\Objetivo;
use App\Models\Diagnostico;
use App\Models\AtividadeFisica;
use App\Models\Antfamiliare;
use App\Models\Altgastrointestinai;
use App\Models\Altclinica;
use App\Models\Consultum;
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
    public function edit(Request $request)
    {
         $var = $request->busca;
        $consultaPaciente = Paciente::where('NomePaciente', "like", "%".$var."%")->where('ExcluidoPaciente','<>','1')->get(); 
        return view('editar_info')->with('consultaPaciente',  $consultaPaciente );
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
         $idp = (int)($request->idpaciente);
         $varp = Paciente::find($idp);

        $varEnd = new Endereco;
        $varEst = new Estado;
        $varCid = new Cidade;
        $varObj =  new Objetivo;
        $varDiag =  new Diagnostico;
        $varDiag = new Diagnostico;
        $varAnf= new Antfamiliare;
        $varAf = new AtividadeFisica;
        $varObj = new Objetivo;
        $altg = new Altgastrointestinai;
        $varAltC = new Altclinica;
        $varCon = new Consultum;
       
        $varp->NomePaciente = $request->paciente;
        $varp->EmailPaciente = $request->email;
        $telefone = $request->telefone;
        $varp->TelefonePaciente = $telefone;
        $varp->SexoPaciente = $request->sexo;
        $varp->ProfissaoPaciente=$request->profissao;
        //Endereço
        $varEnd->CepEndereco = $request->cep;
        $varEnd->RuaEndereco = $request->rua;
        $varEnd->NumeroEndereco = $request->numeroEndereco;
        $varEnd->BairoEndereco = $request->bairro;
        $varCid->NomeCidade = $request->cidade;
        $varEst->NomeEstado = $request->estado;
        //Horário de rabalho e rotina diária
        $varp->TrabalhaHoraDiaPaciente = $request->hrsDia; 
        $varCid->save();
        $varEnd->save();
        $varEst->save();
        $varp->estado()->associate($varEst);
        $varp->cidade()->associate($varCid);
        $varp->endereco()->associate($varEnd);
        $varp->IntoleranciaAlimentarPaciente = $request->descrevaIntolerancia;
        $varp->MastigacaoPaciente  = $request->mastigacao;
        $varp->PrefAlimentaresPaciente  = $request->prefAlimentares;
        $varp->AversaoAlimentarPaciente  = $request->aversoesAlimentares;
        $varp->TabagistaPaciente  = $request->tabagista;
        $varp->Tempo_parouPaciente  = $request->parou;
        $varp->Cigar_diaPaciente  = $request->cigarDia;
        $varp->EtilistaPaciente  = $request->etilista;
        $varp->ConsumoMedioPaciente  = $request->consumo;
        $varp->ConsumoAguaPaciente  = $request->consumoAgua;
        $varp->UsouSuplemPaciente  = $request->suplementos;
        $varp->update();
        //Objetivos
        $varObj->NomeObjetivos = $request->objetivo;
        //
        $varDiag->Diabetes_melitusDiagnostico = $request->diabetes;
        $varDiag->HasDiagnostico = $request->hAs;
        $varDiag->IcDiagnosticoDiagnostico = $request->ic;
        $varDiag->DisplidemiaDiagnostico = $request->displidemia;
        $varDiag->CardiopataDiagnostico = $request->cardiopata;
        $varDiag->NefropatiaDiagnostico =$request->nefropatia;
        $varDiag->GastriteDiagnostico = $request->gastrite;
        $varDiag->NeoplasiaDiagnostico =$request->neoplasia;
        $varDiag->UlceraDiagnostico = $request->ulcera;
        $varDiag->HepatopatiaDiagnostico = $request->hepatopatia;
        $varDiag->AnsiedadeDiagnostico = $request->ansiedade;
        $varDiag->IrritabilidadeDiagnostico = $request->irritabilidade;
        $varDiag->DepressaoDiagnostico = $request->depressao;
        $varDiag->Renite_sinusiteDiagnostico = $request->renSin;
        $varDiag->OutrasDiagnostico = $request->descreva;
        $varDiag->save();

        $altg->DisfagiaAltGastrointestinais = $request->disfagia;
        $altg->PiroseAltGastrointestinais = $request->pirose;
        $altg->NauseaAltGastrointestinais = $request->nausea;
        $altg->VomitosAltGastrointestinais = $request->vomitos;
        $altg->DiarreiaAltGastrointestinais = $request->diarreia;
        $altg->ConstipacaoAltGastrointestinais = $request->constipacao;
        $altg->AnorexiaAltGastrointestinais = $request->anorexia;
        $altg->DispepsiaAltGastrointestinais = $request->dispepsia; 
        $altg->EdemaAltGastrointestinais = $request->edema;
        $altg->FlatulenciasAltGastrointestinais = $request->flatulencias;
        $altg->PolidipsiaAltGastrointestinais = $request->polidipsia;
        $altg->save();
        
        //Antecedentes familiares
        
        $varAnf->Diabetes_melitusAntFamiliares = $request->diabetesAF;
        $varAnf->HasAntFamiliares = $request->hAsAF;
        $varAnf->AvcAntFamiliares = $request->avc;
        $varAnf->DislipedemiaAntFamiliares = $request->displidemiaAF;
        $varAnf->CardiopatiaAntFamiliares = $request->cardiopataAF;
        $varAnf->NefropatiaAntFamiliares = $request->nefropatiaAF;
        $varAnf->HepatopatiaAntFamiliares = $request->hepatopatiaAF;
        $varAnf->CancerAntFamiliares = $request->cancer;
        $varAnf->ObesidadeAntFamiliares = $request->obesidade;
        $varAnf->OutrasAntFamiliares = $request->descrevaAF;
        $varAnf->save();
        

        
        //Alterações clínicas
        $varAltC->Cabelo_quebradicoAltCinicas = $request->cabelos;
        $varAltC->Unhas_fracasAltCinicas = $request->unhas;
        $varAltC->PalidezAltCinicas = $request->palidez;
        $varAltC->OutrosAltCinicas = $request->descrevaAC;
        $varAltC->HabitosIntestinalAltCinicas = $request->habitosIntestinais;
        $varAltC->Frequencia_urinariaAltCinicas = $request->freUri;
        $varAltC->Passado_CirurgicoAltCinicas = $request->passado;
        $varAltC->MedicamentosAltCinicas = $request->descrevaMed;
        $varAltC->save();

        $varCon->AlteracaoConsulta = 1;
        $varCon->PrimeiraConsulta = 0;
        $varAltC->save();
        $varAnf->save();
        $varAf->save();
        $altg->save();
        $varDiag->save();
        $varAf->save();
        $varObj->save();
        $varCon->altclinica()->associate($varAltC);
        $varCon->altgastrointestinai()->associate($altg);
        $varCon->antfamiliare()->associate($varAnf);
        $varCon->atividade_fisica()->associate($varAf);
        $varCon->diagnostico()->associate($varDiag);
        $varCon->objetivo()->associate($varObj);
        $varCon->paciente()->associate($varp);
        $varCon->Nutricionista_idNutricionista = 1;
        $varCon->save();

        return view('editar_info')->with('message', 'Paciente editado com sucesso!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         
         $idp = (int)($request->idp);
         $varp = Paciente::find($idp);
         $varp->ExcluidoPaciente = 1;
         $varp->update();
        return view('editar_info')->with('message', 'Paciente excluído com sucesso!');
    }
    /**

     *@param  int  $id
     * @return \Illuminate\Http\Response
*/
    public function buscar($id){
       
        $consultaPaciente = Paciente::join('Endereco','Endereco_idEndereco','=','Endereco.idEndereco')->join('Estado','Estado_idEstado','=','Estado.idEstado')->join('Cidade','Cidade_idCidade','=','Cidade.idCidade')->where('idPaciente', $id)->where('ExcluidoPaciente','0')->with(['consulta' => function($query) {
            $query->where('PrimeiraConsulta', 1)->orWhere('AlteracaoConsulta', 1)->with(['altClinica', 'altgastrointestinai', 'antfamiliare', 'atividade_fisica','diagnostico','objetivo']);
        }])
        ->get();  
        //dd($consultaPaciente);
        //$pacientes = Consultum::join('Paciente''Paciente_idPaciente','=','Paciente.idPaciente')->join('Objetivo',)->where('Alteracao','=','1')->orWhere('Primeira','=','1')->latest('upload_time')->first();
        return view('edit_view')->with('consultaPaciente', $consultaPaciente);
        
    }

    public function buscarInfo(Request $request){
        $var = $request->idpaciente;
            $consultaPaciente = Paciente::join('Endereco','Endereco_idEndereco','=','Endereco.idEndereco')->join('Estado','Estado_idEstado','=','Estado.idEstado')->join('Cidade','Cidade_idCidade','=','Cidade.idCidade')->where('idPaciente', $var)->where('ExcluidoPaciente','0')->with(['consulta' => function($query) {
            $query->where('PrimeiraConsulta', 1)->orWhere('AlteracaoConsulta', 1)->with(['altClinica', 'altgastrointestinai', 'antfamiliare', 'atividade_fisica','diagnostico','objetivo']);
        }])
        ->get();  
        return view('edit_view')->with('consultaPaciente', $consultaPaciente);
    }
  }
