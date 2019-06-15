@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <form class="form-horizontal">
                <h4 class="col">Editar paciente</h4><br>
                <img class="logo3" src="img/logo.png">
                <h6 class="col">Selecione paciente</h6>
                <div class="form-group col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="pessoas" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary mostrar_sempre" type="button" alvo="revelado">Busca</button>
                        </div>
                    </div>
                </div>
                <div class="col">
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
                                <li class="list-group-item"> 12/09</li>
                                <li class="list-group-item"> 19/07</li>
                                <li class="list-group-item"> 06/10</li>
                                <li class="list-group-item"> 16/08</li>
                            </ul>
                        </div>
                    </div>
            </form>
        </div>
    </main>
@endsection