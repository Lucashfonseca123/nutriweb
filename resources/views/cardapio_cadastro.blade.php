@extends('layouts.menu')
@section('content')
<main class="page-content">
    <div class="container">
        <form class="form-horizontal">
            <fieldset>
                <h3>Cardápio <br><br></h3>
                <!-- NOME -->
                <div class="form-group">
                    <label for="nome" >
                        <input id="cpf" name="cpf" type="text" class="form-control" placeholder="Busca grupos.." maxlength="11">
                    </label>
                    <label for="nome" >
                        <button id="Busca" name="Busca" class="btn btn-success" type="Submit">Busca</button>
                    </label>
                </div>
                <div class="list-group">
                    <div class="list-group-item list-group-item-dark">
                        Pacientes
                    </div>
                    <a href="#" class="list-group-item list-group-item-action">Paciente 1</a>
                    <a href="#" class="list-group-item list-group-item-action">Paciente 2</a>
                    <a href="#" class="list-group-item list-group-item-action">Pàciente 3</a>
                    <a href="#" class="list-group-item list-group-item-action disabled">Paciente 4</a>
                </div>
            </fieldset>
        </form>
    </div>
</main>
@endsection