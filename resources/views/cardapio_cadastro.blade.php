@extends('layouts.menu')
@section('content')
<main class="page-content">
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Cardápio <br><br></h3>
                <img class="logo5" src="img/logo.png">
                <form action="/buscarPessoa" method="post">
                {{csrf_field()}}
                    <div class="input-group">
                        <input type="text" class="form-control col-md-6" name="busca" placeholder="Digite aqui...">
                        <button class="btn btn-primary" type="submit" value="busca">Busca</button>
                        &ensp;&ensp;
                        <span style="cursor: pointer" onclick="window.open('/grupo_final', '', 'width=600,height=300')">
                            <button class="btn btn-success" type="button">Salvar cardapio </button>
                        </span>&ensp;&ensp;
                        <span style="cursor: pointer" onclick="window.open('/resumo_paciente', '', 'width=600,height=300')">
                            <button class="btn btn-dark" type="button">Gerar resumo</button>
                        </span>
                    </div>
                </form>
                <br><br>
                @if(isset($lista_nome))
                    @forelse($lista_nome as $paciente)
                    <div class="container mt-4 mostrar_esconder">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Paciente</th>
                                        <th scope="col">Email</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tr>
                                    <tbody>
                                        <th scope="row">{{$paciente->idPaciente}}</th>
                                        <td> {{$paciente->Nome}}</td>
                                        <td> {{$paciente->Email}}</td>
                                        <td><button class="btn btn-primary mostrar_esconder" data-id="{{$paciente->idPaciente}}" alvo="revelado">Selecionar</button>
                                        </td>
                                    </tr>
                                    </tbody>
                            </table>
                        </div>
                <div class="table escondido" id="revelado">
                <table>
                <h4>
                Paciente: {{$paciente->Nome}}
                </h4>
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
                                     <button class="btn btn-primary mostrar" alvo="revelado2" onclick="adicionaElemento()" type="button">Adicionar</button>
                                 </div>
                            </div>
                            <!--    <label for="">
                                    <div id="cards" style="width: 258px">
                                    </div>
                                </label>
                            -->
                            <!--
                            <ul class="list-group" id="adicionaElemento">
                                <li class="list-group-item">Cras justo odio</li>
                            </ul>
                            -->
                            <form>
                                <select id="adicionarElemento" class="browser-default custom-select custom-select-lg mb-3" size="4">
                                    <li></li>
                                </select>
                            </form>
                                <label for="">
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
                                <label for="">
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
           </div>
           @empty
                        <div class="alert alert-danger">
                        Paciente não cadastrado
                        </div>
                        @endforelse
            @endif
        </form>
    </div>
    </div>
</main>
@endsection