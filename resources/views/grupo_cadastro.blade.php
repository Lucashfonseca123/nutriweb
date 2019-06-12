@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container" id="div">
            <form class="form-horizontal">
                <fieldset>
                    <h3>Grupos <br><br></h3>
                    <!-- NOME -->
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome" >
                                <button id="Busca" name="Busca" class="btn btn-success" type="Submit">Novo grupo</button>
                            </label>
                        </div>
                    </div>
                </fieldset>
            </form>

            <div class="col-md-4 card">
                <div class="form-group">
                    <label for=""><h6>Nome do grupo</h6></label>
                    <input type="text" id="Nome" class="form-control" placeholder="Escreva o nome do grupo..">
                </div>
                <div class="form-group">
                    <label for="" class="form-group"><h6>Alimentos</h6></label>
                    <input type="text" id="Nome" class="form-control" placeholder="Escreva o nome alimento..">
                    <div id="cards">
                    </div>
                </div>
                <button class="btn btn-success" id="btn1">Adicionar alimento <br></button>
            </div>
            <div class="col-md-4 text-center">
                 <button class="btn btn-success" id="btn2" style="text-align: center">Salvar</button>
             </div>

        </div>
    </main>
@endsection