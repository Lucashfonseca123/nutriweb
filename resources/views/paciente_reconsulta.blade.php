@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
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
                                <input type="text" class="form-control" id="pessoas" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary mostrar_sempre" type="button" alvo="revelado">Busca</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="escondido" id="revelado">

                        <h5 class="col"><br>Novas medidas paciente 1</h5>
                        <h6 class="col"><br>Dados antropométricos<br><br></h6>

                        <div class="form-group">
                            <label for="nome" class="col-md-3">Peso
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Estatura
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência da cintura
                                <input type="text" class="form-control col-md-4">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-md-3">Circuferência do abdômen
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência do quadril
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência coxa proximal direita
                                <input type="text" class="form-control col-md-4">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-md-3">Circuferência coxa proximal esquerda
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência da panturrilha
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência do braço direito
                                <input type="text" class="form-control col-md-4">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-md-3">Circuferência do braço esquerdo
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Circuferência do punho
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">IMC
                                <input type="text" class="form-control col-md-4">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-md-3">% Gordura
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">% Muscular
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">TMB
                                <input type="text" class="form-control col-md-4">
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-md-3">Body Age
                                <input type="text" class="form-control col-md-4">
                            </label>
                            <label for="nome" class="col-md-3">Gordura Viceral
                                <input type="text" class="form-control col-md-4">
                            </label>
                        </div>
                        <button class="btn btn-success" style="position: absolute; left: 74%; top: 135%" type="button">Salvar</button>
                        <br><br><br>
                    </div>
            </form>

        </div>
    </main>
@endsection