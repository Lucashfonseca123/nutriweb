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

        $varp->NomePaciente = $request->paciente;
        $varp->EmailPaciente = $request->email;
        $telefone = $request->telefone;
        $varp->TelefonePaciente = $telefone;
        $varp->SexoPaciente = $request->sexo;
        $varp->DataDeNascimentoPaciente=$request->dtnasc;
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
        $varp->RotinaPaciente = $request->horErotina;
        $varCid->save();
        $varEnd->save();
        $varEst->save();
        $varp->estado()->associate($varEst);
        $varp->cidade()->associate($varCid);
        $varp->endereco()->associate($varEnd);
        
        //Objetivo
        
        $varObj->NomeObjetivos = $request->objetivo;
        
        $varObj->save();
        //Atividade fisica
        $varAf->PraticaAtividade_Fisica = $request->pratica;
        $varAf->DescricaoAtividade_Fisica = $request->descricaoAf;
        $varAf->TempParouAtividade_Fisica = $request->tempoParado;
        $varAf->HorarioInicioAtividade_Fisica = $request->hrInicio;
        $varAf->HorarioFinalAtividade_Fisica = $request->hrFim;
        $varAf->FreqSemanaAtividade_Fisica = $request->frequencia;
        $varAf->save();
        //Diagnostico
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

         //Hábitos alimentares e sociais
        
        $varp->IntoleranciaAlimentarPaciente = $request->descrevaIntolerancia;
        $varp->MastigacaoPaciente = $request->mastigacao;
        $varp->PrefAlimentaresPaciente = $request->prefAlimentares;
        $varp->AversaoAlimentarPaciente = $request->aversoesAlimentares;
        $varp->TabagistaPaciente = $request->tabagista;
        $varp->Tempo_parouPaciente = $request->parou;
        $varp->Cigar_diaPaciente = $request->cigarDia;
        $varp->EtilistaPaciente = $request->etilista;
        $varp->ConsumoMedioPaciente = $request->consumo;
        $varp->ConsumoAguaPaciente = $request->consumoAgua;
        $varp->UsouSuplemPaciente = $request->suplementos;
        $varp->CozinhaCasaPaciente = $request->cozinha;
        $varp->DesjejumPaciente = $request->desjejum;
        $varp->Lanche1Paciente = $request->lanche;
        $varp->AlmocoPaciente = $request->almoco;
        $varp->Lanche2Paciente =$request->lanche1;
        $varp->JantarPaciente = $request->jantar;
        $varp->CeiaPaciente = $request->ceia;
        $varp->ExcluidoPaciente = 0;
        $varp->save();
        
        //Exames laboratoriais
        $varCon->PesoConsulta = $request->peso;
        $varCon->Circ_pantuConsulta = $request->circ_pantu;
        $varCon->EstaturaConsulta = $request->estatura; 
        $varCon->Circ_cinturaConsulta = $request->cirCintura;
        $varCon->Circ_abdomenConsulta = $request->circAbd;
        $varCon->Circ_quadrilConsulta = $request->cirQuad;
        $varCon->Circ_coxa_prox_dirConsulta = $request->cirCxDir;
        $varCon->Circ_coxa_prox_esqConsulta = $request->cirCxEsq;
        $varCon->Circ_braco_dirConsulta = $request->cirBraDir;
        $varCon->Circ_braco_esqConsulta = $request->cirBraEsq;
        $varCon->Circ_punhoConsulta = $request->cirPunho;
        $varCon->Porc_gorduraConsulta = $request->gordura;
        $varCon->Porc_muscularConsulta = $request->muscular;
        $varCon->TmbConsulta = $request->tmb;
        $varCon->Body_ageConsulta = $request->bodyAge;
        $varCon->Gord_visceralConsulta = $request->gordVisc;
        $varCon->AlteracaoConsulta = 0;
        $varCon->PrimeiraConsulta = 1;
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
        
        return redirect()->back();
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

    public function busca(Request $request){
        $var = $request->busca;
        $seleciona = Paciente::where('NomePaciente', "like", "%".$var."%")->get();    
        return view('paciente_info')->with('lista_nome', $seleciona);
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
