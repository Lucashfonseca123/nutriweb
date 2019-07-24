@extends('layouts.pop_up')
@section('title', 'Nutriweb')
@section('content')
    <div class="panel panel-primary container">
        <div class="panel-heading col mt-4 "><h4>Resumo paciente 1</h4><br></div>
        <img class="logo3" src="img/logo.png">
        <div class="panel-body">

            <!-- EXAMES LABORATORIAIS -->

            <h5 class="col"><br>Exames laboratoriais</h5>
            <h6 class="col"><br>Dados antropométricos<br><br></h6>

            <div class="form-group">
                <label for="nome" class="col-md-3">Peso (kg)
                    <input type="text" class="form-control col-md-4" value="50,5" disabled>
                </label>
                <label for="nome" class="col-md-3">Estatura (m)
                    <input type="text" class="form-control col-md-4" value="1,9" disabled>
                </label>
                <label for="nome" class="col-md-3">Circuferência da cintura (cm)
                    <input type="text" class="form-control col-md-4" value="3,5" disabled>
                </label>
            </div>
            <div class="form-group">
                <label for="nome" class="col-md-3">Circuferência do abdômen (cm)
                    <input type="text" class="form-control col-md-4" value="3,2" disabled>
                </label>
                <label for="nome" class="col-md-3">Circuferência do quadril (cm)
                    <input type="text" class="form-control col-md-4" value="2,9" disabled>
                </label>
                <label for="nome" class="col-md-3">Circuferência coxa proximal direita (cm)
                    <input type="text" class="form-control col-md-4" value="8,2" disabled>
                </label>
            </div>
            <div class="form-group">
                <label for="nome" class="col-md-3">Circuferência coxa proximal esquerda (cm)
                    <input type="text" class="form-control col-md-4" value="10,5" disabled>
                </label>
                <label for="nome" class="col-md-3">Circuferência da panturrilha (cm)
                    <input type="text" class="form-control col-md-4" value="13,2" disabled>
                </label>
                <label for="nome" class="col-md-3">Circuferência do braço direito (cm)
                    <input type="text" class="form-control col-md-4" value="8,3" disabled>
                </label>
            </div>
            <div class="form-group">
                <label for="nome" class="col-md-3">Circuferência do braço esquerdo (cm)
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
@endsection

