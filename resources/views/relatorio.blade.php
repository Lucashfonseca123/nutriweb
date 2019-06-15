@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <h2>Situação paciente</h2><br>
            <h3>Relatórios</h3>
            <img class="logo" src="img/logo.png">
            <div class="row">
                <div class="form-group col-md-12">
                    <h5>Selecione paciente:</h5>
                </div>
                <div class="form-group col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" id="pessoas" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary mostrar_sempre" type="button" alvo="revelado">Busca</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="escondido" id="revelado">
                <h5>Ultimos relatórios</h5>
                <hr>
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="list-group">
                                <h6>Paciente</h6>
                                <li class="list-group-item">Gráfico 1</li>
                                <li class="list-group-item">Gráfico 2</li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <ul class="list-group">
                                <h6>Data</h6>
                                <li class="list-group-item"> 12/09</li>
                                <li class="list-group-item"> 19/07</li>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </main>
    <!-- page-content" -->
@endsection