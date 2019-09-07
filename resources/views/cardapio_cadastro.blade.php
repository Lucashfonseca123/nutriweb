@extends('layouts.menu')
@section('content')
<main class="page-content">
    <div class="container">
        <form class="form-horizontal">
        <div class="card">
            <div class="card-header text-center">
            <fieldset>
                <h3>Cardápio <br><br></h3>
                <img class="logo5" src="img/logo.png">
                <div class="input-group">
                    <input type="text" class="form-control col-md-6" id="pessoas" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-primary mostrar_sempre" type="button" alvo="revelado">Busca</button>
                    &ensp;&ensp;
                    <span style="cursor: pointer" onclick="window.open('/grupo_final', '', 'width=600,height=300')">
                        <button class="btn btn-success" type="button">Salvar cardapio </button>
                    </span>&ensp;&ensp;
                    <span style="cursor: pointer" onclick="window.open('/resumo_paciente', '', 'width=600,height=300')">
                        <button class="btn btn-dark" type="button">Gerar resumo</button>
                    </span>
                </div>
                <br><br>
                <h4>Paciente 1</h4><br>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Refeições</th>
                            <th scope="col">Horario</th>
                            <th scope="col">Opção 1</th>
                            <th scope="col">Opção 2</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Café da manhã</th>
                        <th class="col">
                                <input type="time" class="form-control col-md-10">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                 <div class="input-group-append">
                                     <button class="btn btn-primary mostrar2" id="btn3" alvo="revelado" type="button">Adicionar</button>
                                 </div>
                            </div>
                            <label for="">
                                <label for="">
                                    <div id="cards" style="width: 258px">
                                    </div>
                                </label>
                                <label for="" class="escondido" id="revelado">
                                    <div>
                                         <button class="btn btn-danger" id="btn2" type="button">Remover</button>
                                    </div>
                                </label>
                            </label>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary mostrar2" id="btn3" alvo="revelado" type="button">Adicionar</button>
                                </div>
                            </div>
                            <label for="">
                                <label for="">
                                    <div id="cards" style="width: 258px">
                                    </div>
                                </label>
                                <label for="" class="escondido" id="revelado">
                                    <div >
                                        <button class="btn btn-danger" id="btn2" type="button">Remover</button>
                                    </div>
                                </label>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Lanche da manhã</th>
                        <th class="col">
                            <input type="time" class="form-control col-md-10">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Almoço</th>
                        <th class="col">
                            <input type="time" class="form-control col-md-10">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Lanche da tarde 2</th>
                        <th class="col">
                            <input type="time" class="form-control col-md-10">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Jantar</th>
                        <th class="col">
                            <input type="time" class="form-control col-md-10">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Ceia</th>
                        <th class="col">
                            <input type="time" class="form-control col-md-10">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <input type="text" class="form-control" id="grupo" placeholder="Buscar grupo...">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="btn3" type="button">Adicionar</button>
                                </div>
                            </div>
                            <div id="cards" style="width: 350px"></div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </fieldset>
           </div>
           </div>
        </form>
    </div>
</main>
@endsection