@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <h3>Grupos <br><br></h3>
            <button class="btn btn-primary mostrar" type="button" alvo="revelado" title="Clique para selecionar grupo">Novo grupo</button>
            <button class="btn btn-danger escondido esconder" type="button" alvo="revelado">Cancelar</button>
            <button class="btn btn-success escondido esconder" type="button">Salvar grupo</button>
            <br><br>
                    <div class="row">
                        <div class="col-md-4 card-header escondido" id="revelado">
                            <div class="form-group">
                                <label for=""><h6>Nome do grupo</h6></label>
                                <input type="text" id="Nome" class="form-control" placeholder="Escreva o nome do grupo..">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-group"><h6>Alimentos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp; Quantidade</h6>
                                    <div>
                                        <label for="">
                                            <input type="text" style="width: 180px" id="alimentos" class="form-control" placeholder="Buscar alimento..">
                                        </label>
                                        <label for="">
                                            <input type="text" style="width: 114px" class="form-control" placeholder="Ex: 3 fatias..">
                                        </label>
                                    </div>
                                </label>
                                <label for="" class="form-group">
                                    <label for="">
                                        <div id="cards" style="width: 180px">
                                        </div>
                                    </label>
                                    <label for="">
                                        <div id="cards2" style="width: 114px">
                                        </div>
                                    </label>
                                </label>
                            </div>
                            <button class="btn btn-success" id="btn1">Adicionar alimento <br></button>
                            <button class="btn btn-danger" id="btn2">Remover <br></button>
                        </div>
                        <div class="col-md-4 card-header text-center">
                            <div class="form-group text-center">
                                <label for=""><h6>Low carb</h6></label>
                            </div>
                            <div class="form-group text-center">
                                <label for="">
                                    <input type="text" id="Nome" style="width: 180px" class="form-control" placeholder="Macarrão" disabled>
                                </label>
                                <label for="">
                                    <input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="4 colheres" disabled>
                                </label>
                                <label for="">
                                    <input type="text" id="Nome" style="width: 180px" class="form-control" placeholder="Arroz" disabled>
                                </label>
                                <label for="">
                                    <input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="2 colheres" disabled>
                                </label>
                                <label for="">
                                    <input type="text" id="Nome" style="width: 180px" class="form-control" placeholder="Frango" disabled>
                                </label>
                                <label for="">
                                    <input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="2 filés" disabled>
                                </label>
                                <label for="">
                                    <input type="text" id="Nome" style="width: 180px" class="form-control" placeholder="Suco" disabled>
                                </label>
                                <label for="">
                                    <input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="1 copo" disabled>
                                </label>
                            </div>
                            <button class="btn btn-danger" id="btn2">Remover grupo<br></button>
                        </div>
                    </div>
    </main>
@endsection