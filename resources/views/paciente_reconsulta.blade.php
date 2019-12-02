@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <div class="card">
                <div class="card-header"><br>
                    <h3>Reconsulta <br><br></h3>
                        <img class="logo4" src="img/logo.png">
                        <!-- EXAMES LABORATORIAIS -->
                        <div class="row">
                            <div class="form-group col-md-12">
                                <h5>Selecione paciente:</h5>
                            </div>
                            <form action="/testar_consulta" method="get">
                            {{csrf_field()}}
                                <div class="form-group col-md-12">
                                    <div class="input-group">
                                        <input type="text" class="form-control" title = "Insira o nome do paciente desejado" name="busca" placeholder="Digite aqui..." >
                                        <div class="input-group-append">
                                            <span>
                                                <button class="btn btn-primary" value="busca" type="submit">Busca</button> &ensp;&ensp;
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <span style="cursor: pointer"   onclick="window.open('/help#2', '', 'width=600,height=300')">
                                      <img src="img/ajuda.png" class="help5">
                                  </span>
                            <div>
                        <br><br>
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                            </div>
                        @if(isset($lista_nome))             {{--Se a variavel foi previamente definida--}}
                            @forelse($lista_nome as $paciente)
                        <div class="container mt-4 menu">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Paciente</th>
                                        <th scope="col">Email</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tr>
                                <tbody>
                                    <td> {{$paciente->NomePaciente}}</td>
                                    <td> {{$paciente->EmailPaciente}}</td>
                                    <td><button class="btn btn-primary mostrar_esconder" alvo="{{$paciente->idPaciente}}">Selecionar</button> &ensp;&ensp;
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <form method="post" action="{{route('reconsultarpaciente.store')}}">
                        <!-- <form method="post"  action="{{route('reconsultarpaciente.store', ['id' => $paciente->idPaciente])}}"> -->
                        {{csrf_field()}}
                        <input type="hidden" name="idpaciente" value="{{$paciente->idPaciente}}">
                        <input type="hidden" name='idnutricionista' value="{{Auth::user()->Nutricionista_idNutricionista}}">
                            <div class="escondido" id="{{$paciente->idPaciente}}">
                                <br><br>
                                <h4 class="col">Paciente: {{$paciente->NomePaciente}}</h4>
                                <br><br>
                                <h6 class="col">Dados antropométricos<br><br></h6>   
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Peso(kg)
                                        <input type="text" name="peso" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Altura(m)
                                        <input type="text" name="estatura" OnKeyPress="formatar('#.##', this)" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência da cintura(cm)
                                        <input type="text" name="cirCintura" class="form-control col-md-4">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Circuferência do abdômen(cm)
                                        <input type="text" name="circAbd" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência do quadril(cm)
                                        <input type="text" name="cirQuad" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência coxa proximal direita(cm)
                                        <input type="text" name="cirCxDir" class="form-control col-md-4">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Circuferência coxa proximal esquerda(cm)
                                        <input type="text" name="cirCxEsq" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência da panturrilha(cm)
                                        <input type="text" name="circ_pantu" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência do braço direito(cm)
                                        <input type="text" name="cirBraDir" class="form-control col-md-4">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Circuferência do braço esquerdo(cm)
                                        <input type="text" name="cirBraEsq" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência do punho(cm)
                                        <input type="text" name="cirPunho" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">% Gordura
                                        <input type="text" name="gordura" class="form-control col-md-4">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">% Muscular
                                        <input type="text" name="muscular" min="0" max="99" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">TMB
                                        <input type="text" name="tmb" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Body Age
                                        <input type="text" name="bodyAge" class="form-control col-md-4">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Gordura Viceral
                                        <input type="number" min="1" max= "60" name="gordVisc" class="form-control col-md-4">
                                    </label>
                                </div>
                                <div class="col">
                                    <label for="">
                                    <span>
                                        <button class="btn btn-success col" type="submit">Salvar</button>
                                    </span>
                                    </label>
                                </div>
                            </div>
                        </form>
                        @empty
                        <div class="alert alert-danger">
                        Paciente não cadastrado
                        </div>
                        @endforelse
                    @endif
                </div>  
            </div>
        </div>
</main>
@endsection