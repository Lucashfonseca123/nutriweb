@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <form class="form-horizontal">
                <fieldset>
                    <h3>Grupos <br><br></h3>
                    <!-- NOME -->
                    <div class="form-group">
                        <label for="nome" >
                            <input id="cpf" name="cpf" type="text" class="form-control" placeholder="Selecionar alimentos.." maxlength="11">
                        </label>
                        <label for="nome" >
                            <button id="Busca" name="Busca" class="btn btn-success" type="Submit">Busca</button>
                        </label>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
@endsection