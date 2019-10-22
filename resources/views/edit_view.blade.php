@extends('layouts.menu')
@section('content')
 
<main class="page-content">
    <div class="container">
    <div class="card">
    <div class="card-header"><br>
        <fieldset>
        <img class="logo3" src="img/logo.png">
                <div class="panel-heading col"><h4>Editar paciente</h4><br></div>
                <div class="panel-body">
                @if(isset($pacientes)) 
                @foreach($pacientes as $paciente)         
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
                            <input id="dtnasc" name="dtnasc" value="{{$paciente->DataDeNascimento}}" placeholder="DD/MM/AAAA" type="text" class="form-control" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                        </label>
                        <label class="" for="radios">Sexo </label>
                        <label required="" class="radio-inline" for="radios-0" >
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
                        <label for="nome" class="col-md-1">
                            <input type="number" class="form-control" value="{{$paciente->TrabalhaHoraDia}}" name="hrsDia">
                        </label>
                    </div>
                </div>   

                
                    <div class="form-group">
                        <label for="nome" class="col-md-3">Hábitos intestinais (Quantas vezes vai ao banheiros)
                            <input type="number"  name ="habitosIntestinais" class="form-control" col-md-3>
                        </label>
                        <div class="form-group">
                        <label for="nome" class="col-md-1">Frequência urinária(Vezes que urina ao dia)
                            <input type="number" name ="freUri" class="form-control ">
                        </label>
                        <label class="col" for="prependedtext">Passado cirurgico
                            <input id="profissao" type="text" name="passado" placeholder="" class="form-control col-md-4">
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
                            <input id="med2" name="descrevaMed" placeholder="Descreva..." class="form-control input-md" required="" value="" type="search" disabled>
                        </label>
                    </div>
                </div>
                </div>
                <button type="button" class="btn btn-secondary btn-lg btn-block mostrar" type="button" alvo="revelado6">Hábitos alimentares e sociais</button>
                <br>
                <div class="escondido" id="revelado6">
                    <h5 class="col"><br>Hábitos alimentares e sociais</h5>
                    <br>
                    <div class="form-group">
                        <label class="col" for="Filhos">Intolerância ou alergia alimentar</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
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
                        <label class="col" for="Filhos">Mastigação</label>
                        <div class="col-md-4">
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
                        <label class="col-md-1" for="Filhos">Tabagista</label>
                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="tabagista" id="filhos" value=0 onclick="desabilita('parou')" onclick="desabilita('cigarDia')" required>
                                        Não
                                    </label>
                                    <label class="radio-inline" for="radios-0">
                                        <input type="radio" name="tabagista" id="tab2" value=0 onclick="habilita('parou')" onclick="desabilita('cigarDia')" required>
                                        Parei
                                    </label>
                                    <label class="radio-inline" for="radios-1">
                                        <input type="radio" name="tabagista" id="tab4" value=0 onclick="habilita('cigarDia')"onclick="desabilita('parou')">
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
                        <label class="col-md-1" for="Filhos">Etilista</label>
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
                        <label for="nome" class="col-md-3">Consumo médio
                            <input type="text" id="eti" name="consumo" class="form-control col-md-4" disabled>
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="nome" class="col-md-4">Consumo de água(L/dia)
                            <input type="text" id="agua" name="consumoAgua" class="form-control col-md-4">
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
                            <input type="text" id="sup1" name="suplementos" class="form-control col-md-4" disabled>
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3" for="prependedtext">Quem cozinha em casa?
                            <input id="profissao" value="{{$paciente->CozinhaCasa}}" placeholder="Descreva..." class="form-control">
                        </label>
                    </div>
                </div>
                @endforeach
                @endif
                </form>
                </div>
            </div>
        </fieldset>
        </div>
        </div>
    </div>
</main>

@endsection