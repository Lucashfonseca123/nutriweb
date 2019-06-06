@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <h2>Relatório</h2>
            <img class="logo" src="img/logo.png">
            <div class="row">
                <div class="form-group col-md-12">
                    <h5>Selecione paciente:</h5>
                </div>
                <div class="form-group col-md-8">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <a href="" class="btn btn-outline-secondary" type="button" id="button-addon2">Busca
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <h5>Ultimos relatórios</h5>
            <hr>
            <div class="row">
                <div class="col-md-8">
                    <ul class="list-group">
                        <h6>Paciente</h6>
                        <li class="list-group-item">Paciente 1</li>
                        <li class="list-group-item">Paciente 2</li>
                        <li class="list-group-item">Paciente 3</li>
                        <li class="list-group-item">Paciente 4</li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <ul class="list-group">
                        <h6>Data</h6>
                        <li class="list-group-item"> 1</li>
                        <li class="list-group-item"> 2</li>
                        <li class="list-group-item"> 3</li>
                        <li class="list-group-item"> 4</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <!-- page-content" -->
@endsection