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
                                           
                                            <td> {{$paciente->Nome}}</td>
                                            <td> {{$paciente->Email}}</td>
                                            <td><?php echo date('d/m/Y', strtotime($paciente->DataDeNascimento)); ?></td>
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
                            <input type="text" name="paciente" value="{{$paciente->Nome}}" class="form-control ">
                        </label>
                    </div>
                    <!-- EMAIL -->
                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Email
                            <input id="prependedtext" name="email" value="{{$paciente->Email}}" class="form-control" placeholder="email@email.com" required="" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                        </label>
                        <label for="prependedtext" class="col-md-3">Telefone
                            <input id="prependedtext" name="telefone" value="{{$paciente->Telefone}}" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                   OnKeyPress="formatar('## #####-####', this)" ">
                        </label>
                    </div>
                    <!-- CPF, NASCIMENTO E SEXO -->
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Profissão
                            <input id="cpf" name="profissao" type="text" value="{{$paciente->Profissao}}" class="form-control" placeholder="Descreva.." maxlength="20">
                        </label>
                        <label for="nome" class="col-md-2">Nascimento
                            <input id="dtnasc" name="dtnasc" value="<?php echo date('d/m/Y', strtotime($paciente->DataDeNascimento)); ?>" placeholder="DD/MM/AAAA" type="text" class="form-control" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </label>
                        <label class="" for="radios">Sexo </label>
                        <label required="" class="radio-inline" for="radios-0" >
                            <input name="sexo" id="sexo" value='F' type="radio" required  {{$paciente->Sexo == 'F' ? 'checked' : '' }}>
                            Feminino
                        </label>
                        <label class="radio-inline" for="radios-1">
                            <input name="sexo" id="sexo" value='M' type="radio" {{$paciente->Sexo == 'M' ? 'checked' : '' }} >
                            Masculino
                        </label>
                    </div>
                </div>
                    <div class="col">
                      Trabalha quantas horas por dia:
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-2">
                            <input type="number" class="form-control" value="{{$paciente->TrabalhaHoraDia}}" name="hrsDia">
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
