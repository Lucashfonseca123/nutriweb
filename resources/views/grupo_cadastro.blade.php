@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container" id="div">
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

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Nome</label>
                    <input type="text" id="Nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="" class="form-group">Descrição</label>
                    <textarea class="form-control" name="desc" id="texto" cols="30" rows="10"></textarea>
                </div>
                <button class="btn btn-success" id="btn1">Adicionar alimento</button>
            </div>

            <div id="cards">

             </div>
        </div>
    </main>
@endsection