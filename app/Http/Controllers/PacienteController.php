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
        $varAnf= new Antfamiliare;
        $varAf = new AtividadeFisica;
        $varObj = new Objetivo;
        $altg = new Altgastrointestinai;
        $varAltC = new Altclinica;
        $varCon = new Consultum;

        $varp->Nome = $request->paciente;
        $varp->Email = $request->email;
        $telefone = $request->telefone;
        $telefone = intval($telefone);
        $varp->Telefone = $telefone;
        $varp->Sexo = $request->sexo;
        //$varp->DataDeNascimento=$request->dtnasc;
        $varp->Profissao=$request->profissao;
        //Endereço
        $varEnd->Cep = $request->cep;
        $varEnd->Rua = $request->rua;
        $varEnd->Numero = $request->numeroEndereco;
        $varEnd->Bairo = $request->bairro;
        $varCid->Nome = $request->cidade;
        $varEst->Nome = $request->estado;
        //Horário de rabalho e rotina diária
        $varp->TrabalhaHoraDia = $request->hrsDia; 
        $varp->Rotina = $request->horErotina;
        $varCid->save();
        $varEnd->save();
        $varEst->save();
        $varp->estado()->associate($varEst);
        $varp->cidade()->associate($varCid);
        $varp->endereco()->associate($varEnd);
        
        //Objetivo
        
        $varObj->Nome = $request->objetivo;
        
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

        $altg->Disfagia = $request->disfagia;
        $altg->Pirose = $request->pirose;
        $altg->Nausea = $request->nausea;
        $altg->Vomitos = $request->vomitos;
        $altg->Diarreia = $request->diarreia;
        $altg->Constipacao = $request->constipacao;
        $altg->Anorexia = $request->anorexia;
        $altg->Dispepsia = $request->dispepsia; 
        $altg->Edema = $request->edema;
        $altg->Flatulencias = $request->flatulencias;
        $altg->Polidipsia = $request->polidipsia;
        $altg->save();
        
        //Antecedentes familiares
        
        $varAnf->Diabetes_melitus = $request->diabetesAF;
        $varAnf->Has = $request->hAsAF;
        $varAnf->Avc = $request->avc;
        $varAnf->Dislipedemia = $request->displidemiaAF;
        $varAnf->Cardiopatia = $request->cardiopataAF;
        $varAnf->Nefropatia = $request->nefropatiaAF;
        $varAnf->Hepatopatia = $request->hepatopatiaAF;
        $varAnf->Cancer = $request->cancer;
        $varAnf->Obesidade = $request->obesidade;
        $varAnf->Outras = $request->descrevaAF;
        $varAnf->save();
        

        
        //Alterações clínicas
        $varAltC->Cabelo_quebradico = $request->cabelos;
        $varAltC->Unhas_fracas = $request->unhas;
        $varAltC->Palidez = $request->palidez;
        $varAltC->Outros = $request->descrevaAC;
        $varAltC->HabitosIntestinal = $request->habitosIntestinais;
        $varAltC->Frequencia_urinaria = $request->freUri;
        $varAltC->Passado_Cirurgico = $request->passado;
        $varAltC->Meidcamentos = $request->descrevaMed;
        $varAltC->save();

         //Hábitos alimentares e sociais
        
        $varp->IntoleranciaAlimentar = $request->descrevaIntolerancia;
        $varp->Mastigacao = $request->mastigacao;
        $varp->PrefAlimentares = $request->prefAlimentares;
        $varp->AversaoAlimentar = $request->aversoesAlimentares;
        $varp->Tabagista = $request->tabagista;
        $varp->Tempo_parou = $request->parou;
        $varp->Cigar_dia = $request->cigarDia;
        $varp->Etilista = $request->etilista;
        $varp->ConsumoMedio = $request->consumo;
        $varp->ConsumoAgua = $request->consumoAgua;
        $varp->UsouSuplem = $request->suplementos;
        $varp->CozinhaCasa = $request->cozinha;
        $varp->Desjejum = $request->desjejum;
        $varp->Lanche1 = $request->lanche;
        $varp->Almoco = $request->almoco;
        $varp->Lanche2 =$request->lanche1;
        $varp->Jantar = $request->jantar;
        $varp->Ceia = $request->ceia;
        $varp->save();
        
        //Exames laboratoriais
        $varCon->Peso = $request->peso;
        $varCon->Circ_pantu = $request->circ_pantu;
        $varCon->Estatura = $request->estatura; 
        $varCon->Circ_cintura = $request->cirCintura;
        $varCon->Circ_abdomen = $request->circAbd;
        $varCon->Circ_quadril = $request->cirQuad;
        $varCon->Circ_coxa_prox_dir = $request->cirCxDir;
        $varCon->Circ_coxa_prox_esq = $request->cirCxEsq;
        $varCon->Circ_braco_dir = $request->cirBraDir;
        $varCon->Circ_braco_esq = $request->cirBraEsq;
        $varCon->Circ_punho = $request->cirPunho;
        $varCon->Porc_gordura = $request->gordura;
        $varCon->Porc_muscular = $request->muscular;
        $varCon->Tmb = $request->tmb;
        $varCon->Body_age = $request->bodyAge;
        $varCon->Gord_visceral = $request->gordVisc;
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
        $varCon->Nutricionista_idNutricionista = $request->idnutricionista;;
        $varCon->save();
        
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
        $var = Paciente::find($id);

        $varp = new Paciente;
        $varEnd = new Endereco;
        $varEst = new Estado;
        $varCid = new Cidade;
        $varDiag = new Diagnostico;
        $varAnf= new Antfamiliare;
        $varAf = new AtividadeFisica;
        $varObj = new Objetivo;
        $altg = new Altgastrointestinai;
        $varAltC = new Altclinica;
        $varCon = new Consultum;

        $varp->Nome = $request->paciente;
        $varp->Email = $request->email;
        $telefone = $request->telefone;
        $telefone = intval($telefone);
        $varp->Telefone = $telefone;
        $varp->Sexo = $request->sexo;
        //$varp->DataDeNascimento=$request->dtnasc;
        $varp->Profissao=$request->profissao;
        //Endereço
        $varEnd->Cep = $request->cep;
        $varEnd->Rua = $request->rua;
        $varEnd->Numero = $request->numeroEndereco;
        $varEnd->Bairo = $request->bairro;
        $varCid->Nome = $request->cidade;
        $varEst->Nome = $request->estado;
        //Horário de rabalho e rotina diária
        $varp->TrabalhaHoraDia = $request->hrsDia; 
        $varp->Rotina = $request->horErotina;
        $varCid->save();
        $varEnd->save();
        $varEst->save();
        $varp->estado()->associate($varEst);
        $varp->cidade()->associate($varCid);
        $varp->endereco()->associate($varEnd);
        
        //Objetivo
        
        $varObj->Nome = $request->objetivo;
        
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

        $altg->Disfagia = $request->disfagia;
        $altg->Pirose = $request->pirose;
        $altg->Nausea = $request->nausea;
        $altg->Vomitos = $request->vomitos;
        $altg->Diarreia = $request->diarreia;
        $altg->Constipacao = $request->constipacao;
        $altg->Anorexia = $request->anorexia;
        $altg->Dispepsia = $request->dispepsia; 
        $altg->Edema = $request->edema;
        $altg->Flatulencias = $request->flatulencias;
        $altg->Polidipsia = $request->polidipsia;
        $altg->save();
        
        //Antecedentes familiares
        
        $varAnf->Diabetes_melitus = $request->diabetesAF;
        $varAnf->Has = $request->hAsAF;
        $varAnf->Avc = $request->avc;
        $varAnf->Dislipedemia = $request->displidemiaAF;
        $varAnf->Cardiopatia = $request->cardiopataAF;
        $varAnf->Nefropatia = $request->nefropatiaAF;
        $varAnf->Hepatopatia = $request->hepatopatiaAF;
        $varAnf->Cancer = $request->cancer;
        $varAnf->Obesidade = $request->obesidade;
        $varAnf->Outras = $request->descrevaAF;
        $varAnf->save();
        

        
        //Alterações clínicas
        $varAltC->Cabelo_quebradico = $request->cabelos;
        $varAltC->Unhas_fracas = $request->unhas;
        $varAltC->Palidez = $request->palidez;
        $varAltC->Outros = $request->descrevaAC;
        $varAltC->HabitosIntestinal = $request->habitosIntestinais;
        $varAltC->Frequencia_urinaria = $request->freUri;
        $varAltC->Passado_Cirurgico = $request->passado;
        $varAltC->Meidcamentos = $request->descrevaMed;
        $varAltC->save();

         //Hábitos alimentares e sociais
        
        $varp->IntoleranciaAlimentar = $request->descrevaIntolerancia;
        $varp->Mastigacao = $request->mastigacao;
        $varp->PrefAlimentares = $request->prefAlimentares;
        $varp->AversaoAlimentar = $request->aversoesAlimentares;
        $varp->Tabagista = $request->tabagista;
        $varp->Tempo_parou = $request->parou;
        $varp->Cigar_dia = $request->cigarDia;
        $varp->Etilista = $request->etilista;
        $varp->ConsumoMedio = $request->consumo;
        $varp->ConsumoAgua = $request->consumoAgua;
        $varp->UsouSuplem = $request->suplementos;
        $varp->CozinhaCasa = $request->cozinha;
        $varp->Desjejum = $request->desjejum;
        $varp->Lanche1 = $request->lanche;
        $varp->Almoco = $request->almoco;
        $varp->Lanche2 =$request->lanche1;
        $varp->Jantar = $request->jantar;
        $varp->Ceia = $request->ceia;
        $varp->save();
        
        //Exames laboratoriais
        $varCon->Peso = $request->peso;
        $varCon->Circ_pantu = $request->circ_pantu;
        $varCon->Estatura = $request->estatura; 
        $varCon->Circ_cintura = $request->cirCintura;
        $varCon->Circ_abdomen = $request->circAbd;
        $varCon->Circ_quadril = $request->cirQuad;
        $varCon->Circ_coxa_prox_dir = $request->cirCxDir;
        $varCon->Circ_coxa_prox_esq = $request->cirCxEsq;
        $varCon->Circ_braco_dir = $request->cirBraDir;
        $varCon->Circ_braco_esq = $request->cirBraEsq;
        $varCon->Circ_punho = $request->cirPunho;
        $varCon->Porc_gordura = $request->gordura;
        $varCon->Porc_muscular = $request->muscular;
        $varCon->Tmb = $request->tmb;
        $varCon->Body_age = $request->bodyAge;
        $varCon->Gord_visceral = $request->gordVisc;
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
        $varCon->Nutricionista_idNutricionista = $request->idnutricionista;;
        $varCon->save();
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
