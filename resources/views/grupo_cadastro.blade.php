@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
        <form method="post" action="{{route('grupoCadastro.store')}}">
        {{csrf_field()}} 
            <h3>Grupos <br><br></h3>
            <img class="logo4" src="img/logo.png">
            <button class="btn btn-primary mostrar" type="button" alvo="revelado3" title="Clique para selecionar grupo">Novo grupo</button>
            <button class="btn btn-danger" type="button" alvo="revelado">Cancelar</button>
            <button class="btn btn-success" id="enviado" type="submit">Salvar grupo</button>
            <br><br>
                    <div class="row">
                        <div class="col-md-5 card-header escondido" id="revelado3">
                            <div class="form-group">
                                <label for=""><h6>Nome do grupo</h6></label>
                                <input type="text" name="nomesGrupo" class="form-control" placeholder="Escreva o nome do grupo..">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-group"><h6>Alimentos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp; Quantidade</h6>
                                    <div>
                                        <div class="input-group control-group after-add-more">
                                            <label for="">
                                                {{--<input type="text" style="width: 180px" id="buscarAlimentos" name="alimento" class="form-control" placeholder="Buscar alimento..">--}}
                                                <select class="js-example-basic-single form-control" id="alimentoTaco" style="width: 180px" >
                                                    @if(isset($busca_alimentos))             {{--Se a variavel foi previamente definida--}}
                                                        @foreach($busca_alimentos as $alimentos)
                                                            <option id="{{$alimentos->id}}" value="{{$alimentos->id}}" name="">{{$alimentos->descricaoAlimento}}</option>
                                                            {{--<input type="hidden" value="{{$alimentos->id}}" name="id_alimento">--}}
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </label>
                                            &emsp;
                                            <label for="">
                                                <input type="text" style="width: 114px" id="quantidadeAli" name="" class="form-control" placeholder="Ex: 3 fatias..">
                                            </label>
                                            <div class="input-group-btn">
                                                &emsp;
                                                <button class="btn btn-success add-more" type="reset"><i class="glyphicon glyphicon-plus"></i>+</button>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                    <div class="copy" id="alimento">

                                    </div>
                            </div>  
                        </div>
                    </div>
                    </form>
                    <br>
                        {{--<div class="col-md-4 card-header text-center">--}}
                            {{--<div class="form-group text-center">--}}
                                {{--<label for=""><h6>Low carb</h6></label>--}}
                            {{--</div>--}}
                            {{--<div class="form-group text-center">--}}
                                {{--<label for="">--}}
                                    {{--<input type="text" id="Atr1" style="width: 150px" class="form-control" placeholder="Macarrão" disabled>--}}
                                {{--</label>--}}
                                {{--<label for="">--}}
                                    {{--<input type="text" id="Atr2" style="width: 114px" class="form-control Atr1" placeholder="4 colheres" disabled>--}}
                                {{--</label>--}}
                                {{--<label for="">--}}
                                    {{--<input type="text" id="Nome" style="width: 150px" class="form-control" placeholder="Arroz" disabled>--}}
                                {{--</label>--}}
                                {{--<label for="">--}}
                                    {{--<input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="2 colheres" disabled>--}}
                                {{--</label>--}}
                                {{--<label for="">--}}
                                    {{--<input type="text" id="Nome" style="width: 150px" class="form-control" placeholder="Frango" disabled>--}}
                                {{--</label>--}}
                                {{--<label for="">--}}
                                    {{--<input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="2 filés" disabled>--}}
                                {{--</label>--}}
                                {{--<label for="">--}}
                                    {{--<input type="text" id="Nome" style="width: 150px" class="form-control" placeholder="Suco" disabled>--}}
                                {{--</label>--}}
                                {{--<label for="">--}}
                                    {{--<input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="1 copo" disabled>--}}
                                {{--</label>--}}
                            {{--</div>--}}
                            {{--<button class="btn btn-danger" id="btn2">Remover grupo<br></button>--}}
                            {{--<button class="btn btn-dark" id="btn2" onclick="habilita('Atr1')">Editar grupo<br></button>--}}
                        {{--</div>--}}
                      
                    </div>
    </main>
    <script src="js/grupo.js"></script>
@endsection