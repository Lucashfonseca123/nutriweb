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
            <p>This is a paragraph.</p>
            <p>This is another paragraph.</p>

            <ol>
                <li>List item 1</li>
                <li>List item 2</li>
                <li>List item 3</li>
            </ol>

            <button id="btn1">Append text</button>
            <button id="btn2">Append list items</button>

            <div class="col-md-4 test">
                <div class="card mt-4">
                    <div class="card-header">
                      <center><h6> Frango </h6></center>
                    </div>
                    <div class="card-body">
                        O teor de lipídios variou de 0,78% para o peito sem pele a 26,54% para a pele pura.
                        Os teores de colesterol variaram de 115mg/100g para pele pura e peito sem pele a 220mg/100g
                        para asa sem pele.
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Adicionar alimento</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection