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
                    <br><h5>Próximas consultas</h5>
            </form>
            <div class="container mt-4 card-header">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Paciente</th>
                        <th scope="col">Data</th>
                        <th scope="col">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" >1</th>
                        <td>João da Silva</td>
                        <td>15/07</td>
                        <td><button class="btn btn-danger" type="button" >Remover</button>
                            <button class="btn btn-dark" type="button" >Editar ficha</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>André borato</td>
                        <td>07/06</td>
                        <td><button class="btn btn-danger" type="button" >Remover</button>
                            <button class="btn btn-dark" type="button" >Editar ficha</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Marcos Henrique</td>
                        <td>06/07</td>
                        <td><button class="btn btn-danger" type="button" >Remover</button>
                            <button class="btn btn-dark" type="button" >Editar ficha</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
    </main>
@endsection