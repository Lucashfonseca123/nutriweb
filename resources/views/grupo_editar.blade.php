@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <div class="card">
                <div class="card-header"><br>
                    <h3 class="col">Editar grupo <br><br></h3>
                    <img class="logo4" src="\img\logo.png">
                    <form action="/testar_grupo" method="get">
                        {{csrf_field()}}
                        <div class="form-group col-md-8">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <select class="js-example-basic-single form-control" style="width: 250px" name="busca" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group as $grupos)
                                                <option value="{{$grupos->NomeGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    &ensp;&ensp;
                            <span>
                                <button class="btn btn-primary" value="busca" type="submit">Selecionar</button> &ensp;&ensp;
                            </span>
                                    <span style="cursor: pointer" onclick="window.open('/help#7', '', 'width=600,height=300')">
                                      <img src="\img\ajuda.png" class="help5">
                                  </span>
                                </div>
                            </div>
                        </div>
                    </form>
                    <br><br>
                    <?php
                    $i = 1;
                    ?>
                    @if(isset($lista_nome))             {{--Se a variavel foi previamente definida--}}
                         @forelse($lista_nome as $grupo)
                            @if($i == 1)
                            <div class="container mt-4">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Grupo</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tr>
                                        <th scope="row">  {{$grupo->idGrupo}}  </th>
                                        <td><h6>{{$grupo->NomeGrupo}}</h6> </td>
                                        <td>
                                            <label for="">
                                                <button class="btn btn-dark mostrar" alvo="{{$grupo->idGrupo}}">Editar</button> &ensp;&ensp;
                                            </label>
                                            <label for="">
                                                <form action="/grupoCadastro3/{{$grupo->idGrupo}}">
                                                    <button class="btn btn-danger " value="{{$grupo->idGrupo}}" alvo="{{$grupo->idGrupo}}">Remover</button> &ensp;&ensp;
                                                </form>
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                                <div class=" col escondido" id="{{$grupo->idGrupo}}" >
                                    &ensp;&ensp;
                                    {{--<form action="{{route('grupoCadastro', ['id'=> $grupo->idGrupo])}}" method="post">--}}

                                      <div class="row">
                                        <div class="col-md-5 card-header text-center">
                                            <form action="/grupoCadastro2/{{$grupo->idGrupo}}" method="post">
                                                {{csrf_field()}}
                                            <div class="form-group text-center">
                                                <input type="text" id="Atr2" style="display: inline; width: 114px" class="form-control Atr1" name="nomesGrupos" value="{{$grupo->NomeGrupo}}">
                                            </div>
                                            <div class="form-group text-center">
                                                <label for="">
                                                @foreach($lista_nome as $grupo2)
                                                        <select class="js-example-basic-single form-control" id="alimentoTaco" name="id_alimento[]" style="width: 180px" >
                                                            @if(isset($busca_alimentos))             Se a variavel foi previamente definida
                                                                @foreach($busca_alimentos as $alimentos)
                                                                <option id="{{$alimentos->id}}" value="{{$alimentos->id}}" >{{$alimentos->descricaoAlimento}}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                @endforeach
                                                </label>
                                                <label for="">
                                                    @foreach($lista_nome as $grupo2)
                                                        <input type="text" id="Atr2" style="width: 114px" class="form-control Atr1" name="quantidadeAlimento[]" value="{{$grupo2->Qtde_Alimento}}">
                                                    @endforeach
                                                </label>
                                                {{--<label for="">--}}
                                                {{--@foreach($alimento as $nomeAlimento)--}}
                                                        {{--<input type="text" style="width: 174px" class="form-control" value="{{$nomeAlimento}}" name="nomeElemento[]">--}}
                                                {{--@endforeach--}}
                                                {{--</label>--}}

                                                <br><button class="btn btn-success" type="submit">Salvar</button>
                                            </div>
                                            </form>
                                        </div>

                                    &emsp;&emsp;
                                        <div class="col-md-5 card-header text-center">
                                            <div class="form-group text-center">
                                                <label for=""><h6>{{$grupo->NomeGrupo}} antigo</h6></label>
                                            </div>
                                            <div class="form-group text-center">
                                                <label for="">
                                                @foreach($alimento as $nomeAlimento)
                                                    <input type="text" style="width: 174px" class="form-control" value="{{$nomeAlimento}}" name="nomeElemento" disabled>
                                                @endforeach
                                                </label>
                                                <label for="">
                                                @foreach($lista_nome as $grupo2)
                                                    <input type="text" id="Atr2" style="width: 114px" class="form-control Atr1" name="quantidadeAlimento[]" value="{{$grupo2->Qtde_Alimento}}" disabled>
                                                @endforeach
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                 </div>
                            </label>
                            <?php $i++;
                            ?>
                        @endif
                    @empty
                        <div class="alert alert-danger">
                            Grupo não cadastrado
                        </div>
                    @endforelse
                    @endif
                </div>
    </main>
  @endsection