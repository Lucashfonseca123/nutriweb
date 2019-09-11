@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">

        <div class="card">
            <div class="card-header"><br>
            <form class="form-horizontal">
                <h3>Reconsulta <br><br></h3>
                    <img class="logo4" src="img/logo.png">
                    <!-- EXAMES LABORATORIAIS -->
                    <div class="row">
                        <div class="form-group col-md-12">
                            <h5>Selecione paciente:</h5>
                        </div>
                        
                        <div class="form-group col-md-8">
                            <div class="input-group">
                                <input type="text" class="form-control" id="pessoas" name="busca" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <span>
                                        <button class="btn btn-primary mostrar" type="button" alvo="revelado">Busca</button> &ensp;&ensp;
                                    </span> 
                                    <span>
                                        <button class="btn btn-success" type="button">Salvar</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="post" action="{{route('reconsultarpaciente.store')}}">
                    {{csrf_field()}}
                    <div class="escondido" id="revelado">

                        <h6 class="col"><br>Dados antropométricos<br><br></h6>
                        
                        <div class="form-group">
                            <label for="nome" class="col-md-3">Peso
                                <input type="text" name="peso" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Estatura
                                <input type="text" name="estatura" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência da cintura
                                <input type="text" name="cirCintura" class="form-control col-md-4">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-md-3">Circuferência do abdômen
                                <input type="text" name="circAbd" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência do quadril
                                <input type="text" name="cirQuad" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência coxa proximal direita
                                <input type="text" name="cirCxDir" class="form-control col-md-4">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-md-3">Circuferência coxa proximal esquerda
                                <input type="text" name="cirCxEsq" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência da panturrilha
                                <input type="text" name="circ_pantu" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência do braço direito
                                <input type="text" name="cirBraDir" class="form-control col-md-4">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-md-3">Circuferência do braço esquerdo
                                <input type="text" name="cirBraEsq" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência do punho
                                <input type="text" name="cirPunho" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">% Gordura
                                <input type="text" name="gordura" class="form-control col-md-4">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-md-3">% Muscular
                                <input type="text" name="muscular" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">TMB
                                <input type="text" name="tmb" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Body Age
                                <input type="text" name="bodyAge" class="form-control col-md-4">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-md-3">Gordura Viceral
                                <input type="text" name="gordVisc" class="form-control col-md-4">
                            </label>
                        </div>
                    </div>
            </form>
            </div>
        </div>
        </div>
            <br><br>
            </div>
            </form>
        </div>
    </main>
@endsection