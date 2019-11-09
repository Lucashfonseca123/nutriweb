@extends('layouts.menu')
@section('content')
<main class="page-content">
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Cardápio <br><br></h3>
                <img class="logo5" src="img/logo.png">
                <form action="/buscarPessoa" method="post">
                {{csrf_field()}}
                    <div class="input-group">
                        <input type="text" class="form-control col-md-6" name="busca" placeholder="Digite aqui...">
                        <input type="hidden" name="buscaId" value = "0">
                        <button class="btn btn-primary" type="submit" value="busca">Busca</button>
                        &ensp;&ensp;
                </form>
                    {{--<a href="/cardapio">--}}
                        {{--<img src="img/ajuda.png" id="1" class="help3">--}}
                    {{--</a>--}}
                    </div>
                <br><br>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if(isset($lista_nome))
                    @forelse($lista_nome as $paciente)
                    <div class="container mt-4 mostrar esconder">
                            <table class="table menu">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Paciente</th>
                                        <th scope="col">Email</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tr>
                                    <tbody>
                                        <th scope="row">{{$paciente->idPaciente}}</th>
                                        <td> {{$paciente->NomePaciente}}</td>
                                        <td> {{$paciente->EmailPaciente}}</td>
                                        <td><button class="btn btn-primary mostrar_esconder" alvo="{{$paciente->idPaciente}}">Selecionar</button>
                                        </td>
                                        <td>
                                        {{--<form target="_blank" action="/resumo_paciente" method="get">--}}
                                            {{csrf_field()}}
                                        <span style="cursor: pointer" onclick="window.open('/resumo_paciente/{{$paciente->idPaciente}}', '', 'width=600,height=300')">
                                            <input type="hidden" name="idPaciente" value="{{$paciente->idPaciente}}">
                                            <button class="btn btn-dark" type="submit">Gerar resumo</button>
                                        </span>
                                        {{--</form>--}}
                                        </td>
                                        <td>
                                            <span style="cursor: pointer" onclick="window.open('/cardapioFinal/{{$paciente->idPaciente}}', '', 'width=600,height=300')">
                                            <input type="hidden" name="idPaciente" value="{{$paciente->idPaciente}}">
                                            <button class="btn btn-success" type="submit">Gerar PDF</button>
                                        </span>
                                        </td>
                                    </tr>
                                    </tbody>
                            </table>
                    </div>
                <div class="table escondido" id="{{$paciente->idPaciente}}">
                <table>
                <form action="{{route('cardapioCadastro.store')}}" method="post">
                {{csrf_field()}}
                <h4>
                    <label for="">
                        Paciente: {{$paciente->NomePaciente}}
                        <input type="hidden" name="idpaciente" value="{{$paciente->idPaciente}}">
                        <input type="hidden" name="idconsulta" value="{{$paciente->consulta->last()->idConsulta}}">
                    </label>
                    &emsp;&emsp;
                    <label for="">
                        <button class="btn btn-success" id="btn2" type="input">Salvar cardápio</button>
                    </label>
                <br><br>
                </h4>
                    <thead>
                        <tr>
                            <th scope="col">Refeições</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Opção 1</th>
                            <th scope="col">Opção 2</th>
                        </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <th scope="row" style="vertical-align: middle">Café da manhã</th>
                        <th class="col">
                                <input type="time" name="time[1]" class="form-control col-md-10">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                <select class="js-example-basic-single form-control" style="width: 250px" name="grupo[1]" id="idgrupo">
                                    @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                        @foreach($group as $grupos)
                                            <option value="{{$grupos->idGrupo}}" nombre="{{$grupos->NomeGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo2[1]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Lanche da manhã</th>
                        <th class="col">
                            <input type="time" name="time[2]" class="form-control col-md-10">
                            <input type="hidden" value="2" name="idrefeicao[2]">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo[2]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                                <label for="" class="escondido" id="revelado2">
                                    <div>
                                         <button class="btn btn-danger" id="btn2" type="button">Remover</button>
                                    </div>
                                </label>
                            </label>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo2[2]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Almoço</th>
                        <th class="col">
                            <input type="time" name="time[3]" class="form-control col-md-10">
                            <input type="hidden" value="3" name="idrefeicao[3]">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo[3]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo2[3]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Lanche da tarde 2</th>
                        <th class="col">
                            <input type="time" name="time[4]" class="form-control col-md-10">
                            <input type="hidden" value="4" name="idrefeicao[4]">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo[4]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo2[4]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Jantar</th>
                        <th class="col">
                            <input type="time" name="time[5]" class="form-control col-md-10">
                            <input type="hidden" value="5" name="idrefeicao[5]">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo[5]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo2[5]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Ceia</th>
                        <th class="col">
                            <input type="time" name="time[6]" class="form-control col-md-10">
                            <input type="hidden" value="6" name="idrefeicao[6]">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo[6]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="grupo2[6]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    </form>
                </table>

           </div>
                @empty
                        <div class="alert alert-danger">
                        Paciente não cadastrado
                        </div>
                        @endforelse
            @endif
        </form>
    </div>
    </div>
</main>
@endsection