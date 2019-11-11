@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <div class="card">
                <div class="card-header text-center">
                    <h3>Editar cardápio <br><br></h3>
                    <img class="logo5" src="img/logo.png">
                    <form action="/buscarEditPessoa" method="post">
                        {{csrf_field()}}
                        <div class="col input-group">
                            <input type="text" class="form-control col-md-6" name="busca" placeholder="Digite aqui...">
                            <button class="btn btn-primary" type="submit" value="busca">Busca</button>
                            &ensp;&ensp;
                            <span style="cursor: pointer" onclick="window.open('/help#6', '', 'width=600,height=300')">
                                      <img src="img/ajuda.png" class="help5">
                                  </span>
                            &ensp;&ensp;
                    </form>
                </div>
                <br><br>
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
                                    <td><button class="btn btn-primary mostrar_esconder" alvo="{{$paciente->idPaciente}}">Editar</button>
                                    </td>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>
                        <div class="table escondido" id="{{$paciente->idPaciente}}">
                            <table>
{{--                                <form action="{{route('cardapioCadastro.update', ['id'=>$paciente->idPaciente])}}" method="post">--}}
                                    <form action="/cardapioCadastro2" method="post">
                                    {{csrf_field()}}
                                    <h4>
                                        <label for="">
                                            Paciente: {{$paciente->NomePaciente}}
                                        </label>
                                        <input type="hidden" name="idCardapio" value="{{$paciente->consulta->last()->Cardapio_idCardapio}}">
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
