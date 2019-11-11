@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <div class="card">
                <div class="card-header"><br>
                <h4 class="col">Nutriweb</h4><br>
                <img class="logo5" src="\img\logo.png">
                <h5 class="col">Selecione paciente</h5>
                    <br>
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
                                        <span style="cursor: pointer" onclick="window.open('/help#10', '', 'width=600,height=300')">
                                            <img src="\img\ajuda.png" id="1" class="help5">
                                        </span>
                                    </div>
                                </div>
                </form>
                <div class="col">
                    <br><h5>Cardápios pendentes</h5> 

            <div class="container mt-4">
                @if(isset($consultaPaciente)) 
                <input type="hidden" name="type" value="<?= $varp = 0?>" >
                
                        @foreach($consultaPaciente as $paciente)
                    
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Paciente</th>
                        <th scope="col">Data Consulta</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                        
                        <th scope="row" >{{$varp = $varp+1}}</th>
                        <td> {{$paciente->NomePaciente}}</td>
                        <td><?php echo date('d/m/Y', strtotime($paciente->created_at)); ?> </td>
                        <form action="/buscarPessoa" method="post">
                            {{csrf_field()}}
                        <td><input type="hidden" name="busca" value="{{$paciente->NomePaciente}}">
                            <input type="hidden" name="buscaId" value="{{$paciente->idConsulta}}">
                            <button class="btn btn-dark" type="submit" >Montar cardápio</button></td>
                        </form>
                    </tr>
                    </tbody>
                    </tr>
                    </tbody> 
                </table>
                @endforeach

                    @endif
            </div>
            @if(isset($lista_nome))            
                    @forelse($lista_nome as $paciente)
                        <div class="container mt-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Paciente</th>
                                        <th scope="col">Data Consulta</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tr>
                                <form action=""></form>
                                <tbody>
                                    <td> {{$paciente->NomePaciente}}</td>
                                    <td> <?php echo date('d/m/Y', strtotime($paciente->created_at)); ?></td>
                                    <td><span style="cursor: pointer" onclick="window.open('/edit_paciente', '', 'width=600,height=300')"><td>
                                    <td><form action="/buscarPessoa" method="post">
                                    {{csrf_field()}}
                                    <td><input type="hidden" name="busca" value="{{$paciente->NomePaciente}}">
                                        <input type="hidden" name="buscaId" value="{{$paciente->idConsulta}}">
                                        <button class="btn btn-dark" type="submit" >Montar cardápio</button></td>
                                    </form>
                                    </td>
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