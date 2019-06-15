@extends('layouts.menu')
@section('title', 'Nutriweb')
@section('content')

<main class="page-content">
    <div class="container">
    <form class="form-horizontal">
        <fieldset>
            <div class="panel panel-primary">
                <div class="panel-heading"><h4>Cadastro de Cliente</h4><br></div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="nome" class="col-md-5"><b>* Campo obrigatório</b>
                        </label>
                    </div>

                    <!-- NOME -->
                    <div class="form-group">
                        <label for="nome" class="col-md-5">Nome <b>*</b>
                            <input type="text" class="form-control ">
                        </label>
                    </div>

                    <!-- EMAIL -->
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Email <b>*</b>
                            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" required="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                        </label>
                        <label for="prependedtext" class="col-md-3">Telefone
                            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                   OnKeyPress="formatar('## #####-####', this)" ">
                        </label>
                    </div>

                    <!-- CPF, NASCIMENTO E SEXO -->
                    <div class="form-group">
                        <label for="nome" class="col-md-2">Profissão
                            <input id="cpf" name="cpf" type="text" class="form-control" placeholder="Descreva.." maxlength="11">
                        </label>
                        <label for="nome" class="col-md-2">Nascimento <b>*</b>
                            <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" type="text" class="form-control" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </label>
                        <label class="" for="radios">Sexo<b>*</b></label>
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
                        <label class="col-md-3" for="prependedtext">CEP <b>*</b>
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
                        <label for="nome" class="col-md-2">Horário
                            <input type="time" class="form-control ">
                        </label>
                        <label for="nome" class="col-md-2">
                            <input type="time" class="form-control ">
                        </label>
                    </div>

                    <!-- ESTADO CIVIL -->
                    <div class="form-group">
                        <label class="col-md-2 " for="Estado Civil">Estado Civil <h11>*</h11></label>
                        <div class="col-md-2">
                            <select required id="Estado Civil" name="Estado Civil" class="form-control">
                                <option value=""></option>
                                <option value="Solteiro(a)">Solteiro(a)</option>
                                <option value="Casado(a)">Casado(a)</option>
                                <option value="Divorciado(a)">Divorciado(a)</option>
                                <option value="Viuvo(a)">Viuvo(a)</option>
                            </select>
                        </div>
                    </div>

                    <!-- FILHOS -->
                    <div class="form-group">
                        <label class="col-md-1" for="Filhos">Filhos</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                                        Sim
                                    </label>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2" for="prependedtext">
                            <input id="filhos_qtd" name="filhos_qtd" placeholder="Quantos?" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$" disabled>
                        </label>
                    </div>

                    <!-- ESCOLARIDADE -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="selectbasic">Escolaridade <h11>*</h11></label>
                        <div class="col-md-3">
                            <select required id="escolaridade" name="escolaridade" class="form-control">
                                <option value=""></option>
                                <option value="Analfabeto">Analfabeto</option>
                                <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                                <option value="Fundamental Completo">Fundamental Completo</option>
                                <option value="Médio Incompleto">Médio Incompleto</option>
                                <option value="Médio Completo">Médio Completo</option>
                                <option value="Superior Incompleto">Superior Incompleto</option>
                                <option value="Superior Completo">Superior Completo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Profissão <b>*</b>
                            <input id="profissao" name="profissao" placeholder="" class="form-control">
                        </label>
                    </div>

                    <!-- Cadastrar -->
                    <div class="form-group">
                        <label class="col-md-2 control-label" for="Cadastrar"></label>
                        <div class="col-md-8">
                            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
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
