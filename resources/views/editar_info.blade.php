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
                            <input id="bairro" name="bairro" class="form-control" placeholder="Bairro" value="{{$paciente->BairroEndereco}}" required="" readonly="readonly" type="text" disabled>
                        </label>
                        <label class="col-md-1" for="prependedtext">
                            <span class="input-group-addon">N °</span>
                            <input id="numero" name="numeroEndereco" class="form-control" placeholder="" required=""  type="text">
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
                    <div class="form-group col-md-4">
                        <label for="exampleFormControlTextarea3">Horário de trabalho e rotina diária</label>
                        <textarea class="form-control" name="horErotina" id="exampleFormControlTextarea3" value="{{$paciente->RotinaPaciente}}" rows="7"></textarea>
                    </div>
                    
                    <label class="radio-inline col" for="radios-1"><br>Objetivo da consulta <br><br>
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
                            <input id="obj" name="obj" placeholder="Descreva" class="form-control input-md" required="" value="" type="search"  pattern="[0-9]+$" disabled>
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
