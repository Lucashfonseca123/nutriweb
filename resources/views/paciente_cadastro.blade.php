@extends('layouts.menu')
@section('title', 'Nutriweb')
@section('content')

<main class="page-content">
    <div class="container">
    <form class="form-horizontal">
        <fieldset>
            <div class="panel panel-primary">
                <div class="panel-heading col"><h4>Cadastro do paciente</h4><br></div>
                <img class="logo3" src="img/logo.png">
                <div class="panel-body">
                    <!-- NOME -->
                    <div class="form-group">
                        <label for="nome" class="col-md-5">Nome
                            <input type="text" class="form-control ">
                        </label>
                    </div>

                    <!-- EMAIL -->
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Email
                            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                        </label>
                        <label for="prependedtext" class="col-md-3">Telefone
                            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                   OnKeyPress="formatar('## #####-####', this)" ">
                        </label>
                    </div>

                    <!-- CPF, NASCIMENTO E SEXO -->
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Profissão
                            <input id="cpf" name="cpf" type="text" class="form-control" placeholder="Descreva.." maxlength="11">
                        </label>
                        <label for="nome" class="col-md-2">Nascimento
                            <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" type="text" class="form-control" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </label>
                        <label class="" for="radios">Sexo </label>
                            <label required="" class="radio-inline" for="radios-0" >
                                <input name="sexo" id="sexo" value="feminino" type="radio" required>
                                Feminino
                            </label>
                            <label class="radio-inline" for="radios-1">
                                <input name="sexo" id="sexo" value="masculino" type="radio">
                                Masculino
                            </label>
                    </div>
                    <div class="col">
                      Trabalha quantas horas por dia:
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-1">
                            <input type="number" class="form-control ">
                        </label>
                    </div>

                    <!-- CEP -->
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">CEP
                            <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
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
                            <input id="rua" name="rua" class="form-control" placeholder="Rua" required="" readonly="readonly" type="text">
                        </label>
                        <label class="col-md-3" for="prependedtext">
                            <span class="input-group-addon">Bairro</span>
                            <input id="bairro" name="bairro" class="form-control" placeholder="Bairro" required="" readonly="readonly" type="text" disabled>
                        </label>
                        <label class="col-md-1" for="prependedtext">
                            <span class="input-group-addon">N °</span>
                            <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text">
                        </label>
                    </div>

                    <!-- CIDADE, ESTADO-->
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">
                            <span class="input-group-addon">Cidade</span>
                            <input id="cidade" name="cidade" class="form-control" placeholder="Cidade" required=""  readonly="readonly" type="text">
                        </label>
                        <label class="col-md-1" for="prependedtext">
                            <span class="input-group-addon">Estado</span>
                            <input id="estado" name="estado" class="form-control" placeholder="UF" required=""  readonly="readonly" type="text" disabled>
                        </label>
                    </div>

                    <!-- HORARIO DE TRABALHO E ROTINA DIÁRIA -->
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Horário de trabalho e rotina diária</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="7"></textarea>
                    </div>

                    <!-- OBJETIVO DA CONSULTA -->

                    <label class="radio-inline col" for="radios-1"><br>Objetivo da consulta <br><br>
                        <input name="sexo" id="sexo" value="masculino" type="radio">
                        Manutenção de peso <br>
                        <input name="sexo" id="sexo" value="masculino" type="radio">
                        Ganho de peso <br>
                        <input name="sexo" id="sexo" value="masculino" type="radio">
                        Eliminação de peso <br>
                        <input name="sexo" id="sexo" value="masculino" type="radio">
                        Hipertrofia <br>
                        <input type="radio" name="obj2" id="obj2" value="sim" onclick="habilita('obj')">
                        Outros
                    </label>
                    <div class="form-group">
                        <label class="col-md-2" for="prependedtext">
                            <input id="obj" name="obj" placeholder="Descreva" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$" disabled>
                        </label>
                    </div>

                    <h6 class="col">Atividade física <br><br></h6>

                    <!-- ATIVIDADE FÍSICA -->

                    <span class="input-group-addon col">Pratica atividade física</span>
                    <span class="input-group-addon">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Tipo de atividade</span>
                    <span>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp; Há quanto tempo parou?</span>

                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">
                            <span class="input-group-addon"></span>
                            <input type="radio" name="atv" id="atv" value="sim" onclick="desabilita('atv2')">
                            Não
                            <input type="radio" name="atv" id="atv" value="sim" onclick="habilita('atv2')">
                            Sim <br>
                        </label>
                        <label class="col-md-3" for="prependedtext">
                            <input id="atv2" name="atv2" placeholder="Descreva..." class="form-control input-md" disabled>
                        </label>
                        <label class="col-md-2" for="prependedtext">
                            <input id="atv2" name="atv2" placeholder="Dias/Meses..." class="form-control input-md" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Horário ínicio
                            <input type="time" class="form-control col-md-8">
                        </label>
                        <label for="nome" class="col-md-2">Horário final
                            <input type="time" class="form-control ">
                        </label>
                    </div>
                    <label for="nome" class="col-md-3">Quantidades de horas por dia
                        <input type="time" class="form-control col-md-8">
                    </label>
                    <label for="nome" class="col-md-2">Frequência semanal
                        <input type="text" class="form-control">
                    </label>

                    <!-- DADOS CLÍNICOS -->

                    <h5 class="col"> <br>Dados clínicos <br></h5>
                    <h6 class="col"> <br>Diagnóstico <br><br></h6>

                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Diabetes Melitus &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            HAS &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            IC &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Dislipidemia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Cardiopata &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Nefropatia &emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Gastrite &emsp;&emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Neoplasia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Úlcera &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Hepatopatia &emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Ansiedade &emsp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Irritabilidade &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Depressão &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                             Renite/Sinusite &emsp;&ensp;
                        </label>
                        <input type="radio" name="obj4" id="obj4" value="sim" onclick="habilita('obj5')">
                        Outros
                        </label>
                    </span>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-6" for="prependedtext">
                            <input id="obj5" name="obj5" placeholder="Descreva" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$" disabled>
                        </label>
                    </div>

                    <!-- ANTECEDENTES FAMILIARES -->

                    <h6 class="col"><br>Antecedentes familiares<br><br></h6>

                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Diabetes Melitus &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            HAS &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            AVC &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Dislipidemia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Cardiopatia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Nefropatia &emsp;&emsp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Hepatopatia &emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Câncer &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Obesidade &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="obj6" id="obj6" value="sim" onclick="habilita('obj7')">
                            Outros
                        </label>
                    </span>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-6" for="prependedtext">
                            <input id="obj7" name="obj7" placeholder="Descreva" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$" disabled>
                        </label>
                    </div>

                    <!-- ALTERAÇÕES GASTROINTESTINAIS -->

                    <h6 class="col"><br>Alterações gastrointestinais <br><br></h6>

                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Disfagia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Pirose &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Náusea &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Vômitos &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Diarréia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Constipação &emsp;&emsp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                           &ensp;
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Anorexia &emsp;&emsp;&emsp;&ensp;&ensp;&ensp;&ensp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Dispepsia &emsp;&emsp;
                        </label>
                    </span>
                    <br>
                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Edema &emsp;&emsp;&emsp;&emsp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Flatulências &emsp;&emsp;&ensp;&emsp;&ensp;
                        </label>
                        <label class="radio" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Polidipsia &emsp;&ensp;&ensp;&ensp;
                        </label>
                    </span>
                    <br><br>

                    <!-- ALTERAÇÕES CLÍNICAS -->

                    <h6 class="col"><br>Alterações clínicas<br><br></h6>

                    <span class="input-group-addon col">
                        <label class="radio-inline" for="radios-0">
                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                             Cabelos clínicos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Unhas fracas &emsp;&emsp;&emsp;&ensp;
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                            Palidez &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        </label>
                    </span>
                    <br><br>
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Outros
                            <input id="profissao" name="profissao" placeholder="Descreva..." class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Hábitos intestinais (Quantas vezes vai ao banheiros)
                            <input type="number" class="form-control col-md-3">
                        </label>
                        <label for="nome" class="col-md-1">Frequência urinária
                            <input type="number" class="form-control ">
                        </label>
                        <label class="col" for="prependedtext">Passado cirurgico
                            <input id="profissao" type="text" name="profissao" placeholder="" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1" for="Filhos">Uso de medicamentos</label>
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
                            <input id="med2" name="med2" placeholder="Descreva..." class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$" disabled>
                        </label>
                    </div>

                    <!-- EXAMES LABORATORIAIS -->

                    <h5 class="col"><br>Exames laboratoriais</h5>
                    <h6 class="col"><br>Dados antropométricos<br><br></h6>

                    <div class="form-group">
                        <label for="nome" class="col-md-3">Peso
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Estatura
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circuferência da cintura
                            <input type="text" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Circuferência do abdômen
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circuferência do quadril
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circuferência coxa proximal direita
                            <input type="text" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Circuferência coxa proximal esquerda
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circuferência da panturrilha
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circuferência do braço direito
                            <input type="text" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Circuferência do braço esquerdo
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Circuferência do punho
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">IMC
                            <input type="text" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">% Gordura
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">% Muscular
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">TMB
                            <input type="text" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Body Age
                            <input type="text" class="form-control col-md-4">
                        </label>
                        <label for="nome" class="col-md-3">Gordura Viceral
                            <input type="text" class="form-control col-md-4">
                        </label>
                    </div>

                    <!-- HÁBITOS ALIMENTARES E SOCIAIS -->
                    <h5 class="col"><br>Hábitos alimentares e sociais</h5>
                    <br>
                    <div class="form-group">
                        <label class="col" for="Filhos">Intolerância ou alergia alimentar</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="int" id="int" value="nao" onclick="desabilita('int')" required>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="int" id="int" value="sim" onclick="habilita('int')">
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2" for="prependedtext">
                            <input id="int" name="int" placeholder="Descreva..." class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col" for="Filhos">Mastigação</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="int" id="int" value="nao" onclick="desabilita('int')" required>
                                        Lenta
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="int" id="int" value="sim" onclick="habilita('int')">
                                        Rápida
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 " for="Estado Civil">Mastigação</label>
                        <div class="col-md-2">
                            <select required id="Estado Civil" name="Estado Civil" class="form-control">
                                <option value=""></option>
                                <option value="lenta ">Lenta</option>
                                <option value="normal">Normal</option>
                                <option value="rapida">Rápida</option>
                                <option value="muito_rapida">Muito rápida</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Preferência alimentares
                            <input id="profissao" name="profissao" placeholder="" class="form-control">
                        </label>
                        <label class="col-md-3" for="prependedtext">Aversões alimentares
                            <input id="profissao" name="profissao" placeholder="" class="form-control">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1" for="Filhos">Tabagista</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="tab2" id="tab2" value="nao" onclick="habilita('tab')" required>
                                        Parei
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="tab4" id="tab4" value="sim" onclick="habilita('tab3')">
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Parou há quanto tempo?
                            <input type="text" id="tab" name="tab" class="form-control col-md-4" disabled>
                        </label>
                        <label for="nome" class="col-md-3">Cigarro por dia
                            <input type="number" id="tab3" name="tab3" class="form-control col-md-4" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-1" for="Filhos">Etilista</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('eti')" required>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="eti1" id="eti1" value="sim" onclick="habilita('eti')">
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Consumo médio
                            <input type="text" id="eti" name="eti" class="form-control col-md-4" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-4">Consumo de água
                            <input type="text" id="agua" name="agua" class="form-control col-md-4">
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="" style="vertical-align: top;" for="radios">&emsp;Usou suplementos</label><br>
                        <label required="" class="radio-inline" for="radios-0" >&emsp;
                            <input type="radio" name="sup" id="sup" value="nao" onclick="desabilita('sup1')" required>
                            Não
                        </label>
                        <label class="radio-inline col-md-2" for="radios-1">
                            <input type="radio" name="sup" id="sup" value="nao" onclick="habilita('sup1')" required>
                            Sim
                        </label>
                        <label for="nome" class="col-md-8">Quais?
                            <input type="text" id="sup1" name="sup1" class="form-control col-md-4" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Quem cozinha em casa?
                            <input id="profissao" name="profissao" placeholder="Descreva..." class="form-control">
                        </label>
                    </div>

                    <h6 class="col"><br>Inquérito dietético (Refeições nas ultimas 24 horas)</h6>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Desjejum/Horário</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Lanche/Horário</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Almoço/Horário</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Lanche/Horário</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Jantar/Horário</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Ceia/Horário</label>
                        <textarea class="form-control" id="exampleFormControlTextarea3" rows="5"></textarea>
                    </div>
                    <!-- Cadastrar -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-8">
                            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Salvar</button>
                            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
    </div>
</main>

@endsection
