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

class PacienteController extends Controller
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
        $varp = new Paciente;
        $varEnd = new Endereco;
        $varEst = new Estado;
        $varCid = new Cidade;
        $varDiag = new Diagnostico;
        $varAf = new AtividadeFisica;
        $varObj = new Objetivo;
        /*$varp->Nome = $request->paciente;
        $varp->Email = $request->email;
        //$varp->Telefone = $request->telefone;
        $varp->Sexo = $request->sexo;
        //$varp->DataDeNascimento=$request->dtnasc;
        $varp->Profissao=$request->profissao;
        $request->hrsDia;
       //varp->Estado_idEstado=$varEst->idEstado;
        //Endereço
        $varEnd->Cep = $request->cep;
        $varEnd->Rua = $request->rua;
        $varEnd->Numero = $request->numeroEndereco;
        $varEnd->Bairo = $request->bairro;
        $varCid->Nome = $request->cidade;
        $varEst->Nome = $request->estado;
        //Horário de rabalho e rotina diária
        //$varp->TrabalhaHoraDia = $request-> $horErotina;
        
        $varCid->save();
        $varEnd->save();
        $varEst->save();
        $varp->estado()->associate($varEst);
        $varp->cidade()->associate($varCid);
        $varp->endereco()->associate($varEnd);
        
        $varp->save();*/
        
        //Objetivo
        $varObj->Nome = $request->objetivo;
        //$varObj->Descricao = $request->descricao
        $varObj->save();

        //Atividade fisica
        $varAf->Pratica = $request->pratica;
        $varAf->Descricao = $request->descricaoAf;
        $varAf->TempParou = $request->tempoParado;
        //$varAf->HorarioInicio = $request->hrInicio;
        //$varAf->HorarioFinal = $request->hrFim;
        $varAf->FreqSemana = $request->frequencia;
        $varAf->save();
        //Diagnostico
        $varDiag->Diabetes_melitus = $request->diabetes;
        $varDiag->Has = $request->hAs;
        $varDiag->Ic = $request->ic;
        $varDiag->Displidemia = $request->displidemia;
        $varDiag->Cardiopata = $request->cardiopata;
        $varDiag->Nefropatia =$request->nefropatia;
        $varDiag->Gastrite = $request->gastrite;
        $varDiag->Neoplasia =$request->neoplasia;
        $varDiag->Ulcera = $request->ulcera;
        $varDiag->Hepatopatia = $request->hepatopatia;
        $varDiag->Ansiedade = $request->ansiedade;
        $varDiag->Irritabilidade = $request->irritabilidade;
        $varDiag->Depressao = $request->depressao;
        $varDiag->Renite_sinusite = $request->renSin;
        $varDiag->Outras = $request->descreva;
        $varDiag->save();
        /*
        //Antecedentes familiares
        $varAf->Diabetes_melitus$request->diabetesAF;
        $varAf->Has = $request->hAsAF;
        $varAf->Avc = $request->avc;
        $varAf->Displidemia = $request->displidemiaAF;
        $varAf->Cardiopata = $request->cardiopataAF;
        $varAf->Nefropatia = $request->nefropatiaAF;
        $varAf->Hepatopatia = $request->hepatopatiaAF;
        $varAf->Cancer = $request->cancer;
        $varAf->Obesidade = $request->obesidade;
        $varAf->Outras = $request->descrevaAF;
        //Alterações gastrointestinais 
        $varAltG->Disfagia = $request->disfagia;
        $varAltG->Pirose = $request->pirose;
        $varAltG->Nausea =$request->nausea;          
        $varAltG->Vomitos = $request->vomitos;  
        $varAltG->Diarreia = $request->diarreia;  
        $varAltG->Constipacao = $request->constipacao;
        $varAltG->Anorexia = $request->anorexia; 
        $varAltG->Dispepsia = $request->dispepsia;   
        $varAltG->Edema = $request->edema; 
        $varAltG->Flatulencias$request->flatulencias;
        $varAltG->Polidipsia = $request->polidipsia; 
        //Alterações clínicas
        $varAltC->Cabelo_quebradico = $request->cabelos;
        $varAltC->Unhas_fracas = $request->unhas;
        $varAltC->Palidez = $request->palidez;
        $varAltC->Outros = $request->descrevaAC;
        $varAltC->HabitosIntestinail = $request->habitosIntestinais;
        $varAltC->Frequencia_urinaria = $request->freUri;
        $varAltC->Passado_Cirurgico = $request->passado;
        $varAltC->Medicamentos = $request->descrevaMed;
        //Exames laboratoriais
        $varCon->Peso = $request->peso;
        $varCon->Estatura = $request->estatura; 
        $varCon->Circ_cintura = $request->cirCintura;
        $varCon->Circ_abdomen = $request->circAbd;
        $varCon->Circ_quadril = $request->cirQuad;
        $varCon->Circ_coxa_prox_dir = $request->cirCxDir;
        $varCon->Circ_coxa_prox_esq = $request->cirCxEsq;
        $varCon->Circ_braco_dir = $request->cirBraDir;
        $varCon->Circ_braco_esq = $request->cirBraEsq;
        $varCon->Circ_punho = $request->cirPunho;
        $varCon->Porc_gordura$request->gordura;
        $varCon->Porc_muscular = $request->muscular;
        $varCon->Tmb = $request->tmb;
        $varCon->Body_age = $request->bodyAge;
        $varCon->Gord_visceral = $request->gordVisc;
        //Hábitos alimentares e sociais
        $varHab->IntoleranciaAlimentar = $request->descrevaIntolerancia;
        $varHab->Mastigacao = $request->mastigacao;
        $varHab->PrefAlimentares = $request->prefAlimentares;
        $varHab->AversaoAlimentar = $request->aversoesAlimentares;
        $varHab->Tabagista = $request->tabagista;
        $varHab->Tempo_parou = $request->parou;
        $varHab->Cigar_dia = $request->cigarDia;
        $varHab->Etilista = $request->etilista;
        $varHab->ConsumoMedio = $request->consumo;
        $varHab->ConsumoAgua = $request->consumoAgua;
        $varHab->UsouSuplem = $request->suplementos;
        $varHab->CozinhaCasa = $request->cozinha;


        $varHab->Desjejum = $request->desjejum;
        $varHab->Lanche1 = $request->lanche;
        $varHab->Almoco = $request->almoco
        $varHab->Lanche2 =$request->lanche;
        $varHab->Jantar = $request->jantar;
        $varHab->Ceia = $request->ceia;*/



        
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
}
