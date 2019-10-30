@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
        <div class="card">
            <div class="card-header"><br>
            <h2 class="col">Situação paciente</h2><br>
            <h3 class="col">Relatórios</h3>
            <img class="logo" src="img/logo.png">
            <div class="row col">
                <div class="form-group col-md-12">
                    <h5>Selecione paciente:</h5>
             <form action="/buscarPaciente" method="get">
                        {{csrf_field()}}
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="pessoas" name="busca" placeholder="Digite aqui..." >
                                    <div class="input-group-append">
                                        <span>
                                            <button class="btn btn-primary" value="busca" type="submit">Busca</button> &ensp;&ensp;
                                        </span> 
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div>
                      <br><br>
                      @if(isset($consultaPaciente))  
                        @foreach($consultaPaciente as $paciente)
                            </div>
                                <div class="container mt-4">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Paciente</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Data de nascimento</th>
                                                <th scope="col"></th>
                                            </tr>
                                            </thead>
                                            <tr>
                                        <tbody>
                                           
                                            <td> {{$paciente->NomePaciente}}</td>
                                            <td> {{$paciente->EmailPaciente}}</td>
                                            <td><?php echo date('d/m/Y', strtotime($paciente->DataDeNascimentoPaciente)); ?></td>
                                            <td><button class="btn btn-dark mostrar" type="button" alvo="{{$paciente->idPaciente}}">Editar</button>
                                            <button class="btn btn-danger" type="button" > Excluir</button></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
           <div class="escondido" id="{{$paciente->idPaciente}}">
                    <div class="panel-heading col"><h4>Editar paciente</h4><br></div>
                   <form method="post" action="/edit_paciente">
                        {{csrf_field()}}
                        <input type="hidden" name="idpaciente" value="{{$paciente->idPaciente}}">
                        <input type="hidden" name='idnutricionista' value="{{Auth::user()->id}}">
                <div class="panel-body">   
                    <!-- NOME -->
                    <div class="form-group">
                        <label for="nome" class="col-md-5">Nome
                            <input type="text" name="paciente" value="{{$paciente->NomePaciente}}" class="form-control ">
                        </label>
                    </div>
                    <!-- EMAIL -->
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Email
                            <input id="prependedtext" name="email" value="{{$paciente->EmailPaciente}}" class="form-control" placeholder="email@email.com" required="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                        </label>
                        <label for="prependedtext" class="col-md-3">Telefone
                            <input id="prependedtext" name="telefone" value="{{$paciente->TelefonePaciente}}" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                   OnKeyPress="formatar('## #####-####', this)" ">
                        </label>
                    </div>
                    <!-- CPF, NASCIMENTO E SEXO -->
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Profissão
                            <input id="cpf" name="profissao" type="text" value="{{$paciente->ProfissaoPaciente}}" class="form-control" placeholder="Descreva.." maxlength="20">
                        </label>
                        <label for="nome" class="col-md-2">Nascimento
                            <input id="dtnasc" name="dtnasc" value="<?php echo date('d/m/Y', strtotime($paciente->DataDeNascimentoPaciente)); ?>" placeholder="DD/MM/AAAA" type="text" class="form-control" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </label>
                        <label class="" for="radios">Sexo </label>
                        <label required="" class="radio-inline" for="radios-0" >
                            <input name="sexo" id="sexo" value='F' type="radio" required  {{$paciente->SexoPaciente == 'F' ? 'checked' : '' }}>
                            Feminino
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input name="sexo" id="sexo" value='M' type="radio" {{$paciente->SexoPaciente == 'M' ? 'checked' : '' }} >
                            Masculino
                        </label>
                    </div>
                </div>
                    <div class="col">
                      Trabalha quantas horas por dia:
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-2">
                            <input type="number" class="form-control" value="{{$paciente->TrabalhaHoraDiaPaciente}}" name="hrsDia">
                        </label>
                    </div>
                    
                <!-- CEP -->

                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">CEP
                            <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="{{$paciente->CepEndereco}}" type="search" maxlength="8" pattern="[0-9]+$">
                        </label>
                        <label class="col-md-3" for="prependedtext">
                            <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                        </label>
                    </div>

                    <!-- ENDEREÇO -->
                    <div class="form-group">
                        <h6 class="col-md-3">Enredeço</h6>
                        <label class="col-md-3" for="prependedtext">
                            <span class="input-group-addon">Rua</span>
                            <input id="rua" name="rua" class="form-control"  required="" value="{{$paciente->RuaEndereco}}" readonly="readonly" type="text">
                        </label>
                        <label class="col-md-3" for="prependedtext">
                            <span class="input-group-addon">Bairro</span>
                            <input id="bairro" name="bairro" class="form-control" value="{{$paciente->BairoEndereco}}" required="" readonly="readonly" type="text">
                        </label>
                        <label class="col-md-1" for="prependedtext">
                            <span class="input-group-addon">N °</span>
                            <input id="numero" name="numeroEndereco" class="form-control" value="{{$paciente->NumeroEndereco}}" required=""  type="text">
                        </label>
                    </div>

                    <!-- CIDADE, ESTADO -->
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">
                            <span class="input-group-addon">Cidade</span>
                            <input id="cidade" name="cidade" class="form-control" placeholder="Cidade" required=""  readonly="readonly" type="text">
                        </label>
                        <label class="col-md-1" for="prependedtext">
                            <span class="input-group-addon">Estado</span>
                            <input id="estado" name="estado" class="form-control" placeholder="UF" required=""  readonly="readonly" type="text" >
                        </label>
                    </div> 
                    <div>
                    <label class="radio-inline col" for="radios-1"><br>Objetivo da consulta <br><br>
                        <input name="objetivo" id="objetivo" value="Manutenção de peso"  type="radio"onclick="desabilita('obj')" {{$paciente->SexoPaciente == 'F' ? 'checked' : '' }}">
                        Manutenção de peso <br>
                        <input name="objetivo" id="objetivo" value="Ganho de peso" value="{{$paciente->RotinaPaciente}}" type="radio"onclick="desabilita('obj')" {{$paciente->SexoPaciente == 'F' ? 'checked' : '' }}>
                        Ganho de peso <br>
                        <input name="objetivo" id="objetivo" value="Eliminação de peso" type="radio"onclick="desabilita('obj')" {{$paciente->SexoPaciente == 'F' ? 'checked' : '' }}>
                        Eliminação de peso <br>
                        <input name="objetivo" id="objetivo" value="Hipertrofia" type="radio"onclick="desabilita('obj')" {{$paciente->SexoPaciente == 'F' ? 'checked' : '' }}>
                        Hipertrofia <br>
                        <input type="radio" name="objetivo" id="objetivo" value="outros" onclick="habilita('obj')" {{$paciente->SexoPaciente == 'F' ? 'checked' : '' }}>
                        Outros
                    </label>
                    <div class="form-group">
                        <label class="col-md-4" for="prependedtext">
                            <input id="obj" name="obj" placeholder="Descreva" class="form-control input-md" required="" value="" type="search"  pattern="[0-9]+$" disabled>
                        </label>
                    </div> 
                    <
            
                <br>

                    <h5 class="col"> <br>Dados clínicos <br></h5>
                    <h6 class="col"> <br>Diagnóstico <br><br></h6>

                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="diabetes" id="doencas" value=1 {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }} >
                             Diabetes Melitus &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="hAs" id="doencas" value=1 {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                            HAS &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="ic" id="doencas" value=1  {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                            IC &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="displidemia" id="doencas" value=1  {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                            Dislipidemia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="cardiopata" id="doencas" value=1  {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                            Cardiopatia &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="nefropatia" id="doencas" value=1  {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                            Nefropatia &emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="gastrite" id="doencas" value=1  {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                            Gastrite &emsp;&emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="neoplasia" id="doencas" value=1  {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                            Neoplasia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="ulcera" id="doencas" value=1  {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }} >
                             Úlcera &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="hepatopatia" id="doencas" value=1  {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                            Hepatopatia &emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="ansiedade" id="doencas" value=1  {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                            Ansiedade &emsp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="irritabilidade" id="doencas" value=1  {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                            Irritabilidade &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="depressao" id="doencas" value=1 {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                             Depressão &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="renSin" id="doencas" value=1 {{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                             Renite/Sinusite &emsp;&ensp;
                        </label>
                        <input type="checkbox" name="obj4" id="obj4" value=1 onclick="habilita('obj5')"{{$paciente->consulta->first()->diagnostico->CardiopataDiagnostico == 1 ? 'checked' : '' }}>
                        Outros
                        </label>
                    </span>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-6" for="prependedtext">
                            <input id="obj5" name="descreva" placeholder="Descreva" class="form-control input-md" required="" value="" type="text" maxlength="8" pattern="[0-9]+$" disabled>
                        </label>
                    </div>

                  

                    <h6 class="col"><br>Antecedentes familiares<br><br></h6>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox"  name="diabetesAF" id="filhos" value=1 onclick="desabilita('filhos_qtd')" {{$paciente->consulta->first()->antfamiliare->Diabetes_melitusAntFamiliares == 1 ? 'checked' : '' }}>
                            Diabetes Meltius &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox"  name="hAsAF" id="filhos" value=1 {{$paciente->consulta->first()->antfamiliare->Diabetes_melitusAntFamiliares == 1 ? 'checked' : '' }} >
                            HAS &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox"  name="avc" id="filhos" value=1 {{$paciente->consulta->first()->antfamiliare->Diabetes_melitusAntFamiliares == 1 ? 'checked' : '' }} >
                            AVC &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox"  name="displidemiaAF" id="filhos" value=1 {{$paciente->consulta->first()->antfamiliare->Diabetes_melitusAntFamiliares == 1 ? 'checked' : '' }}>
                            Dislipidemia &emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox"  name="cardiopataAF" id="filhos" value=1 {{$paciente->consulta->first()->antfamiliare->Diabetes_melitusAntFamiliares == 1 ? 'checked' : '' }}>
                             Cardiopatia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox"  name="nefropatiaAF" id="filhos" value=1 {{$paciente->consulta->first()->antfamiliare->Diabetes_melitusAntFamiliares == 1 ? 'checked' : '' }}>
                            Nefropatia &emsp;&emsp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox"  name="hepatopatiaAF" id="filhos" value=1 {{$paciente->consulta->first()->antfamiliare->Diabetes_melitusAntFamiliares == 1 ? 'checked' : '' }}>
                            Hepatopatia &emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox"  name="cancer" id="filhos" value=1 {{$paciente->consulta->first()->antfamiliare->Diabetes_melitusAntFamiliares == 1 ? 'checked' : '' }}>
                            Câncer &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox"  name="obesidade" id="filhos" value=1 {{$paciente->consulta->first()->antfamiliare->Diabetes_melitusAntFamiliares == 1 ? 'checked' : '' }} >
                             Obesidade &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox"  name="obj6" id="obj6" value=1 {{$paciente->consulta->first()->antfamiliare->OutrasAntFamiliares != '' ? 'checked' : '' }}>
                            Outros
                        </label>
                    </span>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-6" for="prependedtext">
                            <input id="descrevaAF" name="descrevaAF" placeholder="Descreva" class="form-control input-md" required="" value="" type="search" disabled>
                        </label>
                    </div>


                    <h6 class="col"><br>Alterações gastrointestinais <br><br></h6>

                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox"  name="disfagia" id="filhos" value=1 {{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                             Disfagia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox"  name="pirose" id="filhos" value=1 {{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                            Pirose &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="nausea" id="filhos" value=1{{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                            Náusea &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="vomitos" id="filhos" value=1 {{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                            Vômitos &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="diarreia" id="filhos" value=1 {{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                             Diarréia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="constipacao" id="filhos" value=1 {{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                            Constipação &emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                           &ensp;
                            <input type="checkbox" name="anorexia" id="filhos" value=1 {{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                            Anorexia &emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="dispepsia" id="filhos" value=1 {{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                            Dispepsia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="edema" id="filhos" value=1 {{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                             Edema &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="flatulencias" id="filhos" value=1 {{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                            Flatulências &emsp;&emsp;&ensp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="polidipsia" id="filhos" value=1 {{$paciente->consulta->first()->altgastrointestinai->DisfagiaAltGastrointestinais == 1 ? 'checked' : '' }}>
                            Polidipsia &emsp;&ensp;&ensp;&ensp;
                        </label>
                    </span>
                    <br><br>

                   altclinica

                    <h6 class="col"><br>Alterações clínicas<br><br></h6>

                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="cabelos" id="filhos" value=1 {{$paciente->consulta->first()->altclinica->Cabelo_quebradicoAltCinicas == 1 ? 'checked' : '' }}>
                             Cabelos quebradiços &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="unhas" id="filhos" value=1 {{$paciente->consulta->first()->altclinica->Cabelo_quebradicoAltCinicas == 1 ? 'checked' : '' }}>
                            Unhas fracas &emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="palidez" id="filhos" value=1 {{$paciente->consulta->first()->altclinica->Cabelo_quebradicoAltCinicas == 1 ? 'checked' : '' }}>
                            Palidez &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="outros2" id="filhos" value=1 {{$paciente->consulta->first()->altclinica->Cabelo_quebradicoAltCinicas == 1 ? 'checked' : '' }}>
                            Outros &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                    </span>
                    <br><br>

                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">
                            <input id="descrevaAC" name="descrevaAC" placeholder="Descreva..." class="form-control" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Hábitos intestinais (Quantas vezes vai ao banheiros)
                            <input type="number"  name ="habitosIntestinais" value="{{$paciente->consulta->first()->altclinica->HabitosIntestinalAltCinicas}}" class="form-control" col-md-3>
                        </label>
                        <div class="form-group">
                        <label for="nome" class="col-md-3">Frequência urinária(Quantas vezes urina ao dia)
                            <input type="number" name ="freUri" value="{{$paciente->consulta->first()->altclinica->Frequencia_urinariaAltCinicas}}" class="form-control ">
                        </label>
                        <label class="col" for="prependedtext">Passado cirurgico
                            <input id="profissao" type="text" name="passado" value="{{$paciente->consulta->first()->altclinica->Passado_CirurgicoAltCinicas}}" placeholder="" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1" for="Filhos">Uso de medicamentos</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="med" id="med" value="nao" onclick="desabilita('med2')" {{$paciente->SexoPaciente == 'F' ? 'checked' : '' }} >
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="med" id="med" value="sim" onclick="habilita('med2')" {{$paciente->SexoPaciente == 'F' ? 'checked' : '' }}>
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2" for="prependedtext">
                            <input id="med2" name="descrevaMed" placeholder="Descreva..." class="form-control input-md" required="" value="" type="search" disabled>
                        </label>
                    </div>
                </div>
                    <h5 class="col"><br>Hábitos alimentares e sociais</h5>
                    <br>
                    <div class="form-group">
                        <label class="col" for="Filhos">Intolerância ou alergia alimentar</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="int" id="int" value="nao" onclick="desabilita('descrevaIntolerancia')" required {{$paciente->IntoleranciaAlimentarPaciente != 1 ? 'checked' : '' }}>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="int" id="int" value="sim" onclick="habilita('descrevaIntolerancia')" {{$paciente->IntoleranciaAlimentarPaciente == '1' ? 'checked' : '' }}>
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2" for="prependedtext">
                            <input id="descrevaIntolerancia" name="descrevaIntolerancia" placeholder="Descreva..." class="form-control input-md" required="" value="{{$paciente->IntoleranciaAlimentarPaciente}}" type="search"   >
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col" for="Filhos">Mastigação</label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="mastigacao" id="int" value="Lenta" onclick="desabilita('mastigacao')" required {{$paciente->MastigacaoPaciente == 'Lenta' ? 'checked' : '' }}>
                                        Lenta
                                    </label>
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="mastigacao" id="int" value="Normal" onclick="desabilita('mastigacao')" required {{$paciente->MastigacaoPaciente == 'Normal' ? 'checked' : '' }}>
                                        Normal
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="mastigacao" id="int" value="Rápida" onclick="desabilita('mastigacao')" {{$paciente->MastigacaoPaciente == 'Rápida' ? 'checked' : '' }}>
                                        Rápida
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="mastigacao" id="int" value="Muito Rápida" onclick="desabilita('mastigacao')" {{$paciente->MastigacaoPaciente == 'Muito Rápida' ? 'checked' : '' }}>
                                    Muito Rápida
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Preferência alimentares
                            <input id="profissao" name="prefAlimentares" value="{{$paciente->PrefAlimentaresPaciente}}" placeholder="" class="form-control">
                        </label>
                        <label class="col-md-3" for="prependedtext">Aversões alimentares
                            <input id="profissao" name="aversoesAlimentares" value="{{$paciente->AversaoAlimentarPaciente}}" placeholder="" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2" for="Filhos">Tabagista *</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="tabagista" id="filhos" value=0 onclick="desabilita('parou')" onclick="desabilita('cigarDia')" required {{$paciente->TabagistaPaciente== 'Não' ? 'checked' : '' }}>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="tabagista" id="tab2" value=0 onclick="habilita('parou')" onclick="desabilita('cigarDia')" required {{$paciente->TabagistaPaciente== 'Parei' ? 'checked' : '' }}>
                                        Parei
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="tabagista" id="tab4" value=0 onclick="habilita('cigarDia')"onclick="desabilita('parou')" {{$paciente->TabagistaPaciente == 'Sim' ? 'checked' : '' }}>
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Parou há quanto tempo?
                            <input type="text" id="parou" name="parou" value = "{{$paciente->Tempo_parouPaciente}}" class="form-control col-md-4" disabled>
                        </label>
                        <label for="nome" class="col-md-3">Cigarro por dia
                            <input type="number" id="cigarDia" name="cigarDia" value = "{{$paciente->Cigar_diaPaciente}}" class="form-control col-md-4" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1" for="Filhos">Etilista</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="etilista" id="etilista" value=0 onclick="desabilita('eti')" required {{$paciente->EtilistaPaciente == '0' ? 'checked' : '' }}>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="etilista" id="etilista" value=1 onclick="habilita('eti')" {{$paciente->EtilistaPaciente == '1' ? 'checked' : '' }}>
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Consumo médio
                            <input type="text" id="eti" name="consumo" value = "{{$paciente->ConsumoMedioPaciente}} " class="form-control col-md-4" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-4">Consumo de água(L/dia)
                            <input type="text" id="agua" name="consumoAgua" value = "{{$paciente->ConsumoAguaPaciente}}" class="form-control col-md-4">
                        </label>
                    </div>
                        
                     <label for="">
                    <span>
                        <button class="btn btn-success" type="submit"> Salvar </button>
                    </span>
                </label> 
                </form>  
                </div>

                
            @endforeach

                    @endif
                    
        </div>
        </div>
        </div>
    </main>
    @endsection
