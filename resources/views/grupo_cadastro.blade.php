@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <h3>Grupos <br><br></h3>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Novo grupo</button>
            <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Salvar grupo</button>
            <br><br>
            <div class="row">
                <div class="col-md-4 card-header">
                    <div class="form-group">
                        <label for=""><h6>Nome do grupo</h6></label>
                        <input type="text" id="Nome" class="form-control" placeholder="Escreva o nome do grupo..">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-group"><h6>Alimentos</h6></label>
                        <input type="text" id="alimentos" class="form-control" placeholder="Escreva o nome alimento..">
                        <div id="cards">
                        </div>
                    </div>
                    <button class="btn btn-success" id="btn1">Adicionar alimento <br></button>
                    <button class="btn btn-danger" id="btn2">Remover <br></button>
                </div>
                <div class="col-md-4 card-header">
                    <div class="form-group text-center">
                        <label for=""><h6>Low carb</h6></label>
                    </div>
                    <div class="form-group text-center">
                        <input type="text" id="Nome" class="form-control" placeholder="Macarrao" disabled>
                        <input type="text" id="Nome" class="form-control" placeholder="Peixe" disabled>
                        <input type="text" id="Nome" class="form-control" placeholder="Feijão" disabled>
                    </div>
                </div>
            </div>
    </main>
@endsection