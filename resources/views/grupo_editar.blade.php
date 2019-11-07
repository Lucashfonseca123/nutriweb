@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <div class="card">
                <div class="card-header"><br>
                    <h3 class="col">Editar grupo <br><br></h3>
                    <img class="logo4" src="img/logo.png">
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
                                        <td><button class="btn btn-dark mostrar" alvo="{{$grupo->idGrupo}}">Editar</button> &ensp;&ensp;
                                        <button class="btn btn-danger " alvo="{{$grupo->idGrupo}}">Remover</button> &ensp;&ensp;
                                        </td>
                                    </tr>
                                </table>
                            </div>
                                <div class=" col escondido" id="{{$grupo->idGrupo}}" >
                                    &ensp;&ensp;
                                    {{--<form action="{{route('grupoCadastro', ['id'=> $grupo->idGrupo])}}" method="post">--}}
                                    <form action="/grupoCadastro2/{{$grupo->idGrupo}}" method="post">
                                    {{csrf_field()}}
                                      <div class="row">
                                        <div class="col-md-5 card-header text-center">
                                            <div class="form-group text-center">
                                                <input type="text" id="Atr2" style="display: inline; width: 114px" class="form-control Atr1" name="nomesGrupos" value="{{$grupo->NomeGrupo}}">
                                            </div>
                                            <div class="form-group text-center">
                                                @foreach($lista_nome as $grupo2)
                                                    <label for="">
                                                        <select class="js-example-basic-single form-control" id="alimentoTaco" style="width: 180px" name="id_alimento" >
                                                            @if(isset($busca_alimentos))             {{--Se a variavel foi previamente definida--}}
                                                                @foreach($busca_alimentos as $alimentos)
                                                                    <option id="{{$alimentos->id}}" value="{{$alimentos->id}}" name="id_alimento[]">{{$alimentos->descricaoAlimento}}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </label>
                                                    <label for="">
                                                        <input type="text" id="Atr2" style="width: 114px" class="form-control Atr1" name="quantidadeAlimento[]" value="{{$grupo2->Qtde_Alimento}}">
                                                    </label>
                                                @endforeach
                                                <br><button class="btn btn-success" type="submit">Salvar</button>
                                            </div>
                                        </div>
                                    </form>
                                    &emsp;&emsp;
                                        <div class="col-md-5 card-header text-center">
                                            <div class="form-group text-center">
                                                <label for=""><h6>{{$grupo->NomeGrupo}} antigo</h6></label>
                                            </div>
                                            <div class="form-group text-center">
                                                @foreach($lista_nome as $grupo2)
                                                    <label for="">
                                                        <input type="text" id="Atr1" style="width: 150px" class="form-control" value="{{$grupo2->Alimento_id}}" disabled>
                                                    </label>
                                                    <label for="">
                                                        <input type="text" id="Atr2" style="width: 114px" class="form-control Atr1" value="{{$grupo2->Qtde_Alimento}}" disabled>
                                                    </label>
                                                @endforeach
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