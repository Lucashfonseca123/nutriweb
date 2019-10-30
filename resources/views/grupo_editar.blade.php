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
                                <input type="text" class="form-control" name="busca" placeholder="Digite aqui..." >
                                <div class="input-group-append">
                            <span>
                                <button class="btn btn-primary" value="busca" type="submit">Busca</button> &ensp;&ensp;
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

                                        <td><button class="btn btn-dark mostrar" alvo="{{$grupo->idGrupo}}" id="enviaDados">Editar</button> &ensp;&ensp;
                                        <button class="btn btn-danger " alvo="{{$grupo->idGrupo}}">Remover</button> &ensp;&ensp;
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row col escondido" id="{{$grupo->idGrupo}}" >
                                &ensp;&ensp;
                                <div class="col-md-5 card-header text-center">
                                    <div class="form-group text-center">
                                        <label for=""><h6>{{$grupo->NomeGrupo}}</h6></label>
                                    </div>
                                    <div class="form-group text-center">
                                        @foreach($lista_nome as $grupo2)
                                            <label for="">
                                                {{--<input type="text" id="Atr1" style="width: 150px" class="form-control" value="{{$grupo2->Alimento_id}}">--}}
                                                <select class="js-example-basic-single form-control" id="alimentoTaco" style="width: 180px" >
                                                    @if(isset($busca_alimentos))             {{--Se a variavel foi previamente definida--}}
                                                        @foreach($busca_alimentos as $alimentos)
                                                            <option id="{{$alimentos->id}}" value="{{$alimentos->id}}" name="">{{$alimentos->descricaoAlimento}}</option>
                                                            {{--<input type="hidden" value="{{$alimentos->id}}" name="id_alimento">--}}
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </label>
                                            <label for="">
                                                <input type="text" id="Atr2" style="width: 114px" class="form-control Atr1" value="{{$grupo2->Qtde_Alimento}}">
                                            </label>
                                        @endforeach
                                            <br><button class="btn btn-success" type="input">Salvar</button>
                                    </div>
                                </div>
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