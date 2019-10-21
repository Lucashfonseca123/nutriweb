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
                    <br><h5>Cardápios pendentes</h5> 
            </form>
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
                        
                        <td><button class="btn btn-dark" type="button" >Montar cardápio</button></td>
                    
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
                                    <td><button class="btn btn-dark mostrar" alvo="{{$paciente->idPaciente}}">Montar Cardápio</button> 
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