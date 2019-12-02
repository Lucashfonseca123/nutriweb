@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <div class="card">
                <div class="card-header"><br>
                    <h2 class="col">Reativar pacientes</h2><br>
                    <h3 class="col">Pacientes</h3>
                    <img class="logo" src="img/logo.png">
                    <div class="row col">
                        <div class="form-group col-md-12">
                            <br>
                            <form action="/reativa_paciente" method="get">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="pessoas" name="busca" placeholder="Digite aqui..." >
                                        <div class="input-group-append">
                                        <span>
                                            <button class="btn btn-primary" value="busca" type="submit">Busca</button> &ensp;&ensp;
                                        </span>
                                        </div>
                                        <span style="cursor: pointer" onclick="window.open('/help#12', '', 'width=600,height=300')">
                                      <img src="img/ajuda.png" class="help5">
                                  </span>
                                    </div>
                                </div>
                            </form>
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                                <br>
                            @endif
                            <br>
                            @if(isset($consultaPaciente))
                                @forelse($consultaPaciente->sortBy('NomePaciente') as $paciente)
                                    <div class="container mt-4">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col">Paciente</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Data de nascimento</th>
                                                <th scope="col"></th>
                                            </tr>
                                            </thead>
                                            <tr>
                                                <tbody>
                                                <td> {{$paciente->NomePaciente}}</td>
                                                <td> {{$paciente->EmailPaciente}}</td>
                                                <td><?php echo date('d/m/Y', strtotime($paciente->DataDeNascimentoPaciente)); ?></td>
                                                <td>
                                                    <label for="">
                                                        <form action="/ativarPaciente" method="post">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="idp" value="{{$paciente->idPaciente}}">
                                                            <input type="hidden" name='idnutricionista' value="{{Auth::user()->id}}">
                                                            <button class="btn btn-success" type="submit" > Ativar</button>
                                                        </form>
                                                    </label>
                                                </td>
                                                </tr>
                                                </tbody>
                                        </table>
                                    </div>
                                    @empty
                                    <div class="alert alert-danger">
                                     Lista vazia
                                    </div>
                                @endforelse
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
