@extends('layouts.pop_up')
@section ('content')
    <div class="container">
        <h2 style="text-align: center" class="mt-5  ">Cardápio paciente 3</h2><br><br>
        <img class="logo2" src="img/logo.png">
        <h6 class="text-center">Olá paciente 3 !!! Abaixo o cardápio você seguirá durante 30 dias após isso faremos algumas alterações, até lá qualquer duvida é só entrar em contato comigo!</h6>
        <br><br><br>
        <div class="card-header">
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
        <br>
        <h5>Orientações gerais: <br><br>
            • Tomar durante o dia ao menos 2,4 litros de água <br>
            • Tomar durante a manhã ao menos 500 ml de chá de hibisco c/ amora,
            chá verde com abacaxi ou camomila e hortelã ou chá de gengibre ou
            chá de canela <br>
            • Mastigar ao menos 20 vezes cada bolo alimentar <br>
            • Não pule nenhuma refeição br
            • Caso sinta qualquer desconforto favor informar a nutricionista. <br>
        </h5>
            <button class="btn btn-success" style="position: absolute; left: 80%; top: 198%" type="button">Gerar PDF</button>
        <br><br><br><br><br><br>
    </div>
@endsection