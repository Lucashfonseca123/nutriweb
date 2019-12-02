@extends('layouts.menu')
@section('title', 'Nutriweb')
@section('content')

<main class="page-content">
    <div class="container">
    <div class="card">
    <div class="card-header"><br>
        <form class="form-horizontal" method="post" action="{{route('cadastrarpaciente.store')}}">
        {{csrf_field()}}
        <fieldset>

        <img class="logo3" src="img/logo.png">
        <br>
            <div class="panel panel-primary">
            @if(session()->has('message'))
                <div class="alert alert-success">
                     {{ session()->get('message') }}
                </div>
            @endif
            <!-- Esconder campo até sexo --> 
            <div>
                <span style="cursor: pointer" onclick="window.open('/help#1', '', 'width=600,height=300')">
                    <img src="img/ajuda.png" id="1" class="help">
                </span>
        </div>
            <button type="button" class="btn btn-secondary btn-lg btn-block mostrar" type="button" alvo="revelado">Inscrição paciente</button>
            <br>
            <div class="escondido" id="revelado">
                <div class="panel-heading col"></div>
                <div class="panel-body">
                <input type="hidden" name='idnutricionista' value="{{Auth::user()->Nutricionista_idNutricionista}}">
                    <!-- NOME -->
                    <div class="form-group">
                        <label for="nome" class="col-md-5">Nome *
                            <input type="text" required name="paciente"  value="{{ old('paciente') }}" class="form-control ">
                        </label>
                    </div>
                    <!-- EMAIL -->
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Email *
                            <input id="prependedtext" name="email"  value="{{ old('email') }}" class="form-control" placeholder="email@email.com"  required type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                        </label>
                        <label for="prependedtext" class="col-md-3">Telefone *
                            <input id="prependedtext" name="telefone"  value="{{ old('telefone') }}" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" required pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                   OnKeyPress="formatar('## #####-####', this)" ">
                        </label>
                    </div>
                    <!-- CPF, NASCIMENTO E SEXO -->
                    <div class="form-group">
                        <label for="nome" class="col-md-3 ">Profissão
                            <input id="cpf"  name="profissao" type="text"  value="{{ old('profissao') }}" class="form-control" placeholder="Descreva.." maxlength="20">
                        </label>
                        <label for="nome" class="col-md-3 ">Data de nascimento *
                            <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA"
                                   value="{{ old('dtnasc') }}"
                                   type="date" class="form-control selecionarData" min="1900-04-01" max="2019-11-19" required maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </label>

                        @if($errors->has('dtnasc'))
                            <div class="alert alert-warning">
                            {{ $errors->first("dtnasc") }}
                            </div>
                        @endif

                        <label class="" for="radios">Sexo * </label>
                        <label  class="radio-inline" for="radios-0" >
                            <input name="sexo" id="sexo" value='F' type="radio" required>
                            Feminino
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input name="sexo" id="sexo" value='M' type="radio">
                            Masculino
                        </label>
                    </div>
                </div>
                    <div class="col">
                      Trabalha quantas horas por dia:
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-2">
                            <input type="number" min="0" max= "23"  value="{{ old('hrsDia') }}" class="form-control " name="hrsDia">
                        </label>

                    </div>

                </div>

                <button type="button" class="btn btn-secondary btn-lg btn-block mostrar" type="button" alvo="revelado2">Inscrição endereço paciente</button>
                <br>
                <div class="escondido" id="revelado2">
                <!-- CEP -->

                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">CEP *
                            <input id="cep" name="cep" placeholder="Apenas números"  value="{{ old('cep') }}" class="form-control input-md" required value="" type="search" maxlength="8" pattern="[0-9]+$">
                        </label>
                        <label class="col-md-3" for="prependedtext">
                            <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                        </label>
                    </div>

                    <!-- ENDEREÇO -->
                    <div class="form-group">
                        <h6 class="col-md-3">Endereço</h6>
                        <label class="col-md-3" for="prependedtext">
                            <span class="input-group-addon">Rua</span>
                            <input id="rua" name="rua" class="form-control" placeholder="Rua"  value="{{ old('rua') }}" required="" readonly="readonly" type="text">
                        </label>
                        <label class="col-md-3" for="prependedtext">
                            <span class="input-group-addon">Bairro</span>
                            <input id="bairro" name="bairro" class="form-control"  value="{{ old('bairro') }}" placeholder="Bairro" required="" readonly="readonly" type="text" >
                        </label>
                        <label class="col-md-1" for="prependedtext">
                            <span class="input-group-addon">N °</span>
                            <input id="numero" name="numeroEndereco" class="form-control"  value="{{ old('numero') }}" placeholder="" required=""  type="text">
                        </label>
                    </div>

                    <!-- CIDADE, ESTADO -->
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">
                            <span class="input-group-addon">Cidade</span>
                            <input id="cidade" name="cidade" class="form-control"  value="{{ old('cidade') }}" placeholder="Cidade" required=""  readonly="readonly" type="text">
                        </label>
                        <label class="col-md-1" for="prependedtext">
                            <span class="input-group-addon">Estado</span>
                            <input id="estado" name="estado" class="form-control"  value="{{ old('estado') }}" placeholder="UF" required=""  readonly="readonly" type="text" >
                        </label>
                    </div>
                </div>

                    <!-- HORARIO DE TRABALHO E ROTINA DIÁRIA
                     /*$varObj->Nome = $request->objetivo
                     $varObj->Descricao = $request->descricao-->

                <button type="button" class="btn btn-secondary btn-lg btn-block mostrar" type="button" alvo="revelado3">Rotina e objetivo</button>
                <br>
                <div class="escondido" id="revelado3">
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Horário de trabalho e rotina diária</label>
                        <textarea class="form-control" title = "Descrever o horário de inicio e fim de expediente, além de outros aspectos que formam a rotina" name="horErotina" id="exampleFormControlTextarea3" rows="7"></textarea>
                    </div>

                    <label class="radio-inline col" required for="radios-1"><br>Objetivo da consulta <br><br>
                        <input name="objetivo" id="objetivo" value="Manutenção de peso" type="radio"onclick="desabilita('obj')">
                        Manutenção de peso <br>
                        <input name="objetivo" id="objetivo" value="Ganho de peso" type="radio"onclick="desabilita('obj')">
                        Ganho de peso <br>
                        <input name="objetivo" id="objetivo" value="Eliminação de peso" type="radio"onclick="desabilita('obj')">
                        Eliminação de peso <br>
                        <input name="objetivo" id="objetivo" value="Hipertrofia" type="radio"onclick="desabilita('obj')">
                        Hipertrofia <br>
                        <input type="radio" name="objetivo" id="objetivo" value="outros" onclick="habilita('obj')">
                        Outros
                    </label>
                    <div class="form-group">
                        <label class="col-md-4" for="prependedtext">
                            <input id="obj" name="objetivo" placeholder="Descreva" class="form-control input-md" required="" value="" type="search"  pattern="[0-9]+$" disabled>
                        </label>
                    </div>

                    <h6 class="col">Atividade física <br><br></h6>

                    <!-- ATIVIDADE FÍSICA $varAf->Pratica = $request->pratica;
                    $varAf->Descricao = $request->descricaoAf;
                    $varAf->TempParou = $request->tempoParado;
                    $varAf->HorarioInicio = $request->hrInicio;
                    $varAf->HorarioFinal = $request->hrFim;
                    $varAf->FreqSemana = $request->frequencia;-->

                    <span class="input-group-addon col">Pratica atividade física *</span>
                    
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">
                            <span class="input-group-addon" required></span>

                            <input type="radio" name="pratica" id="atv" value=0 onclick="desabilita('atv2')" >
                            Não
                            <input type="radio" name="pratica" id="atv" value=1 onclick="habilita('atv2')">
                            Sim <br>

                        </label>
                        <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Descrição atividade física</label>
                        <textarea class="form-control" title = "Descrever os horários, a frequência e quais atividades físicas realiza" name="descricaoAf" id="atv2" rows="7"></textarea>
                    </div>
                        
                    </div>
                </div>

                <button type="button" class="btn btn-secondary btn-lg btn-block mostrar" type="button" alvo="revelado4">Dados clínicos</button>
                <br>
                <div class="escondido" id="revelado4">

                    
                    <h6 class="col"> <br>Diagnóstico <br><br></h6>

                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="hidden" name="diabetes" value="0" />
                            <input type="checkbox" name="diabetes" id="doencas" value=1 onclick="desabilita('doencas_qtd')" >
                             Diabetes Melitus &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="hAs" id="doencas" value=1 onclick="habilita('doencas_qtd')">
                            HAS &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="ic" id="doencas" value=1 onclick="habilita('doencas_qtd')">
                            IC &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="displidemia" id="doencas" value=1 onclick="habilita('doencas_qtd')">
                            Dislipidemia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="cardiopata" id="doencas" value=1 onclick="desabilita('doencas_qtd')">
                             Cardiopata &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="nefropatia" id="doencas" value=1 onclick="habilita('doencas_qtd')">
                            Nefropatia &emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="gastrite" id="doencas" value=1 onclick="habilita('doencas_qtd')">
                            Gastrite &emsp;&emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="neoplasia" id="doencas" value=1 onclick="habilita('doencas_qtd')">
                            Neoplasia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="ulcera" id="doencas" value=1 onclick="desabilita('doencas_qtd')" >
                             Úlcera &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="hepatopatia" id="doencas" value=1 onclick="habilita('doencas_qtd')">
                            Hepatopatia &emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="ansiedade" id="doencas" value=1 onclick="habilita('doencas_qtd')">
                            Ansiedade &emsp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="irritabilidade" id="doencas" value=1 onclick="habilita('doencas_qtd')">
                            Irritabilidade &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="depressao" id="doencas" value=1 onclick="desabilita('doencas_qtd')">
                             Depressão &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="renSin" id="doencas" value=1 onclick="habilita('filhos_qtd')">
                             Renite/Sinusite &emsp;&ensp;
                        </label>
                        <input type="checkbox" name="obj4" id="obj4" value=1 onclick="habilita('obj5')">
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

                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox"  name="diabetesAF" id="filhos" value=1 onclick="desabilita('filhos_qtd')" >
                             Diabetes Melitus &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox"  name="hAsAF" id="filhos" value=1 >
                            HAS &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox"  name="avc" id="filhos" value=1 >
                            AVC &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox"  name="displidemiaAF" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Dislipidemia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox"  name="cardiopataAF" id="filhos" value=1 onclick="desabilita('filhos_qtd')" >
                             Cardiopatia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox"  name="nefropatiaAF" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Nefropatia &emsp;&emsp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox"  name="hepatopatiaAF" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Hepatopatia &emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox"  name="cancer" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Câncer &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox"  name="obesidade" id="filhos" value=1 onclick="desabilita('filhos_qtd')" >
                             Obesidade &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="obj6" id="obj6" value=1 onclick="habilita('descrevaAF')">
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
                            <input type="checkbox" name="disfagia" id="filhos" value=1 onclick="desabilita('filhos_qtd')" >
                             Disfagia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox"  name="pirose" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Pirose &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox"  name="nausea" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Náusea &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox"  name="vomitos" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Vômitos &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox"  name="diarreia" id="filhos" value=1 onclick="desabilita('filhos_qtd')">
                             Diarreia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox" name="constipacao" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Constipação &emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                           &ensp;
                            <input type="checkbox"  name="anorexia" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Anorexia &emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox"  name="dispepsia" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Dispepsia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox"  name="edema" id="filhos" value=1 onclick="desabilita('filhos_qtd')" >
                             Edema &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox"  name="flatulencias" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Flatulências &emsp;&emsp;&ensp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="checkbox"  name="polidipsia" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Polidipsia &emsp;&ensp;&ensp;&ensp;
                        </label>
                    </span>
                    <br><br>


                    <h6 class="col"><br>Alterações clínicas<br><br></h6>

                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="checkbox" name="cabelos" id="filhos" value=1 onclick="desabilita('filhos_qtd')" >
                             Cabelos quebradiços &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="unhas" id="filhos" value=1 onclick="habilita('filhos_qtd')">
                            Unhas fracas &emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="palidez" id="filhos" value=1 onclick="habilita('filhos_qtd') ">
                            Palidez &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="checkbox" name="outros2" id="filhos" value=1 onclick="habilita('descrevaAC')">
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
                            <input type="number"  name ="habitosIntestinais" class="form-control" col-md-3>
                        </label>
                        <div class="form-group">
                        <label for="nome" class="col-md-3">Frequência urinária(Quantas vezes urina ao dia)
                            <input type="number" name ="freUri" class="form-control ">
                        </label>
                        <label class="col" for="prependedtext">Passado cirurgico
                            <input id="profissao" type="text" name="passado" placeholder="" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3" for="Filhos">Uso de medicamentos *</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="med" id="med" value="nao" onclick="desabilita('med2')" required>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="med" id="med" value="sim" onclick="habilita('med2')">
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
                </div>


            <button type="button" class="btn btn-secondary btn-lg btn-block mostrar" type="button" alvo="revelado5">Avaliação antropométrica</button>
            <br>
            <div class="escondido" id="revelado5">

                    <h6 class="col"><br>Dados antropométricos<br><br></h6>

                    <div class="form-group">
                        <label for="nome" class="col-md-3">Peso(kg)
                            <input type="text" name="peso" class="form-control col-md-4" pattern="[0-9]+$">
                        </label>
                        <label for="nome" class="col-md-3">Altura(m)
                            <input type="text" name="estatura" OnKeyPress="formatar('#.##', this)" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circunferência da cintura(cm)
                            <input type="text" name="cirCintura" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Circunferência do abdômen(cm)
                            <input type="text" name="circAbd" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circunferência do quadril(cm)
                            <input type="text" name="cirQuad" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circunferência coxa proximal direita(cm)
                            <input type="text" name="cirCxDir" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Circunferência coxa proximal esquerda(cm)
                            <input type="text" name="cirCxEsq" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circunferência da panturrilha(cm)
                            <input type="text" name="circ_pantu" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circunferência do braço direito(cm)
                            <input type="text" name="cirBraDir" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Circunferência do braço esquerdo(cm)
                            <input type="text" name="cirBraEsq" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circunferência do punho(cm)
                            <input type="text" name="cirPunho" class="form-control col-md-4">
                        </label>
                         <label for="nome" class="col-md-3">% Gordura
                            <input type="text" name="gordura" class="form-control col-md-4">
                        </label>

                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">% Muscular
                            <input type="text" name="muscular" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">TMB
                            <input type="text" name="tmb" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Body Age
                            <input type="text" name="bodyAge" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Gordura Visceral
                            <input type="number" min="1" max= "60" name="gordVisc" class="form-control col-md-4">
                        </label>
                    </div>
                </div>


                <button type="button" class="btn btn-secondary btn-lg btn-block mostrar" type="button" alvo="revelado6">Hábitos alimentares e sociais</button>
                <br>
                <div class="escondido" id="revelado6">
                    <h5 class="col"><br>Hábitos alimentares e sociais</h5>
                    <br>
                    <div class="form-group">
                        <label class="col" for="Filhos">Intolerância ou alergia alimentar *</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" required for="radios-0">
                                        <input type="radio" name="int" id="int" value="nao" onclick="desabilita('descrevaIntolerancia')" required>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="int" id="int" value="sim" onclick="habilita('descrevaIntolerancia')">
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2" for="prependedtext">
                            <input id="descrevaIntolerancia" name="descrevaIntolerancia" placeholder="Descreva..." class="form-control input-md" required="" value="" type="search"   >
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col" for="Filhos">Mastigação *</label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="mastigacao" id="int" value="Lenta" onclick="desabilita('mastigacao')" required>
                                        Lenta
                                    </label>
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="mastigacao" id="int" value="Normal" onclick="desabilita('mastigacao')" required>
                                        Normal
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="mastigacao" id="int" value="Rápida" onclick="desabilita('mastigacao')">
                                        Rápida
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="mastigacao" id="int" value="Muito Rápida" onclick="desabilita('mastigacao')">
                                    Muito Rápida
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Preferência alimentares
                            <input id="profissao" name="prefAlimentares" placeholder="" class="form-control">
                        </label>
                        <label class="col-md-3" for="prependedtext">Aversões alimentares
                            <input id="profissao" name="aversoesAlimentares" placeholder="" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2" for="Filhos">Tabagista *</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="tabagista" id="filhos" value='N' onclick="desabilita('parou')" onclick="desabilita('cigarDia')" required>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="tabagista" id="tab2" value='P' onclick="habilita('parou')" onclick="desabilita('cigarDia')" required>
                                        Parei
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="tabagista" id="tab4" value='S' onclick="habilita('cigarDia')"onclick="desabilita('parou')">
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Parou há quanto tempo?
                            <input type="text" id="parou" name="parou" class="form-control col-md-4" disabled>
                        </label>
                        <label for="nome" class="col-md-3">Cigarro por dia
                            <input type="number" id="cigarDia" name="cigarDia" class="form-control col-md-4" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1" for="Filhos">Etilista *</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="etilista" id="etilista" value=0 onclick="desabilita('eti')" required>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="etilista" id="etilista" value=1 onclick="habilita('eti')">
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Consumo médio(L/dia)
                            <input type="text" id="eti" name="consumo" class="form-control col-md-4" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-4">Consumo de água(L/dia)
                            <input type="text" id="agua" name="consumoAgua" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="" style="vertical-align: top;" for="radios">&emsp;Usou suplementos *</label><br>
                        <label required="" class="radio-inline" for="radios-0" >&emsp;
                            <input type="radio" name="sup" id="sup" value="nao" onclick="desabilita('sup1')" required>
                            Não
                        </label>
                        <label class="radio-inline col-md-2" for="radios-1">
                            <input type="radio" name="sup" id="sup" value="nao" onclick="habilita('sup1')" required>
                            Sim
                        </label>
                        <label for="nome" class="col-md-8">Quais?
                            <input type="text" id="sup1" name="suplementos" class="form-control col-md-4" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Quem cozinha em casa?
                            <input id="profissao"  placeholder="Descreva..." class="form-control">
                        </label>
                    </div>
                </div>
                <button type="button" class="btn btn-secondary btn-lg btn-block mostrar" type="button" alvo="revelado7">Inquerito dietético</button>
                <br>
                <div class="escondido" id="revelado7">
                    <h6 class="col"><br>Inquérito dietético (Refeições nas ultimas 24 horas)</h6>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Desjejum/Horário</label>
                        <textarea class="form-control"name="desjejum"  value="{{ old('desjejum') }}" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Lanche/Horário</label>
                        <textarea class="form-control" name="lanche"  value="{{ old('lanche') }}" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Almoço/Horário</label>
                        <textarea class="form-control" name="almoco"  value="{{ old('almoco') }}" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Lanche/Horário</label>
                        <textarea class="form-control" name="lanche1"  value="{{ old('lanche1') }}" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Jantar/Horário</label>
                        <textarea class="form-control" name="jantar"  value="{{ old('jantar') }}" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Ceia/Horário</label>
                        <textarea class="form-control" name="ceia"  value="{{ old('ceia') }}" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                   <div class="form-group">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-8">
                            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Salvar</button>
                            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </div>
        </fieldset>
        </div>
        </div>
    </div>
</main>

@endsection

