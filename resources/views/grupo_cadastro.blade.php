@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
        <form method="post" action="{{route('grupoCadastro.store')}}">
        {{csrf_field()}} 
            <h3>Grupos <br><br></h3>
            <img class="logo4" src="img/logo.png">
            <button class="btn btn-primary mostrar" type="button" alvo="revelado3" title="Clique para selecionar grupo">Novo grupo</button>
            <button class="btn btn-success" id="enviado" type="submit">Salvar grupo</button>
            <span style="cursor: pointer" onclick="window.open('/help#5', '', 'width=600,height=300')">
                                      <img src="img/ajuda.png" class="help5">
                                  </span>
            <br><br>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <br><br>
                    <div class="row">
                        <div class="col-md-5 card-header escondido" id="revelado3">
                            <div class="form-group">
                                <label for=""><h6>Nome do grupo</h6></label>
                                <input type="text" name="nomesGrupo" title = "Insira o nome desejado" class="form-control" placeholder="Escreva o nome do grupo..">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-group"><h6>Alimentos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp; Quantidade</h6>
                                    <div>
                                        <div class="input-group control-group after-add-more">
                                            <label for="">
                                                {{--<input type="text" style="width: 180px" id="buscarAlimentos" name="alimento" class="form-control" placeholder="Buscar alimento..">--}}
                                                <select class="js-example-basic-single form-control" title = "Busque o alimento desejado" id="alimentoTaco" style="width: 180px" >
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

                      
                    </div>
    </main>
    <script src="js/grupo.js"></script>
@endsection