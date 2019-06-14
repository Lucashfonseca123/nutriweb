@extends('layouts.menu')
@section('content')
<main class="page-content">
    <div class="container">
        <form class="form-horizontal">
            <fieldset>
                <h3>Cardápio <br><br></h3>
                <span style="cursor: pointer" onclick="window.open('/alimentos', '', 'width=600,height=300')">
                    <button class="btn btn-success" type="button">Salvar cardapio </button>
                </span>
                <br><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Refeições</th>
                            <th scope="col">Opção 1</th>
                            <th scope="col">Opção 2</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="">
                        <th scope="row" style="vertical-align: middle">Café da manhã</th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                 <div class="input-group-append">
                                     <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                 </div>
                                <div class="input-group-append">
                                    <button class="btn btn-danger" id="btn2" type="button">Remover</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Adicionar</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Lanche da manhã</th>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Adicionar</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Almoço</th>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Adicionar</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Lanche da tarde 2</th>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Adicionar</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Jantar</th>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Adicionar</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Ceia</th>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 250px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">Adicionar</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </fieldset>
        </form>
    </div>
</main>
@endsection