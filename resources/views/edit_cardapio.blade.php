@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <form class="form-horizontal">
            <h4 class="col">Cardapio 1</h4><br>
                <div class="form-group col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" id="pessoas" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary mostrar_sempre" type="button" alvo="revelado">Busca</button>
                        </div>
                    </div>
                </div>
                <br>
            <div class="card-header escondido" id="revelado">
                <table class="table table-striped">
                    <thead>
                    <tr class="text-center">
                        <th scope="col">Refeições</th>
                        <th scope="col">Opção 1</th>
                        <th scope="col">Opção 2</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="">
                        <th scope="row" style="vertical-align: middle"><h5>Café da manhã</h5></th>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">1 fatia de pão integral com ovo</li>
                                    <li style="text-align: left">1 xicara de café c/ leite desnatado</li>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">1 unidade  de tapioca com banana</li>
                                    <li style="text-align: left">1 copo de suco de limão</li>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle"><h5>Lanche da manhã</h5></th>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">1 unidade de fruta</li>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">1 unidade de iogurte natural</li>
                                    <li style="text-align: left">3 unidade de bolacha integral</li>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle"><h5>Almoço</h5></th>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">1 colher de arroz</li>
                                    <li style="text-align: left">1 concha de feijão</li>
                                    <li style="text-align: left">1 unidade de filé de frango</li>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">1 unidade de batata salsa cozida</li>
                                    <li style="text-align: left">1 unidade de filé de batata cozida</li>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle"><h5>Lanche da tarde 2</h5></th>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">1 unidade de sanduiche natural</li>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">5 unidades de bolachas integrais</li>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle"><h5>Jantar</h5></th>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">1 unidade de crepioca</li>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">1 unidade de omelete com ovos mexidos</li>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle"><h5>Ceia</h5></th>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">3 unidades de bolachas integrais</li>
                                    <li style="text-align: left">1 xicara de chá de camomila</li>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card-header col-md-7">
                                <div class="form-group text-center">
                                    <li style="text-align: left">1 porção de mix de cereais</li>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            </form>
        </div>
    </main>
@endsection
