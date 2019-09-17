@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <div class="card">
                <div class="card-header"><br>
                <h4 class="col">Nutriweb</h4><br>
                <img class="logo8" src="img/logo.png">
                <h6 class="col">Selecione paciente</h6>
                <form action="/selecionar_paciente" method="get">
                            {{csrf_field()}}
                                <div class="form-group col-md-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="busca" placeholder="Digite aqui..." >
                                        <div class="input-group-append">
                                            <span>
                                                <button class="btn btn-primary" value="busca" type="submit">Busca</button> &ensp;&ensp;
                                            </span> 
                                        </div>
                                    </div>
                                </div>
                            </form>
                <div class="col">
                    <br><h5>Próximas consultas</h5>
            </form>
            @if(isset($lista_nome))            
                    @forelse($lista_nome as $paciente)
                        <div class="container mt-4">
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
                                <form action=""></form>
                                <tbody>
                                    <th scope="row">  {{$paciente->idPaciente}}  </th>
                                    <td> {{$paciente->Nome}}</td>
                                    <td> {{$paciente->Email}}</td>
                                    <td><span style="cursor: pointer" onclick="window.open('/edit_paciente', '', 'width=600,height=300')"><td>
                                    <td><button class="btn btn-dark mostrar" alvo="{{$paciente->idPaciente}}">Editar</button> 
                                    <button class="btn btn-danger" type="button" >Remover</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            <div class="container mt-4">
                <table class="table">
                   
                    <!-- <tbody>
                        <th scope="row" >1</th>
                        <td>João da Silva</td>
                        <td>15/07</td>
                        <td><button class="btn btn-danger" type="button" >Remover</button>
                             <span style="cursor: pointer" onclick="window.open('/edit_paciente', '', 'width=600,height=300')"> -->
                            <!-- <button class="btn btn-dark" type="button" >Editar ficha</button></td> -->
                    </tr>
                    </tbody> 
                </table>
            </div>
            </div>
            @empty
                <div class="alert alert-danger">
                    Paciente não cadastrado
                </div>
                @endforelse
            @endif
            </div>
    </main>
@endsection