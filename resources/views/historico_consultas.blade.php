@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
        <div class="card">
            <div class="card-header"><br>
            <h2 class="col">Situação paciente</h2><br>
            <h3 class="col">Histórico de Consultas</h3>
            <img class="logo" src="img/logo.png">
            <div class="row col">
                <div class="form-group col-md-12">
                    <h5>Selecione paciente:</h5>
             <form action="/buscar_consultas" method="get">
                        {{csrf_field()}}
                            <div class="form-group col-md-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="pessoas" name="busca" placeholder="Digite aqui..." >
                                    <div class="input-group-append">
                                        <span>
                                            <button class="btn btn-primary" value="busca" type="submit">Busca</button> &ensp;&ensp;
                                        </span> 
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div>
                      <br><br>
                      @if(isset($consultaPaciente))  
                        @forelse($consultaPaciente as $pacientes)
                            </div>
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
                                           
                                            <td> {{$pacientes->NomePaciente}}</td>
                                            <td> {{$pacientes->EmailPaciente}}</td>
                                            <td><?php echo date('d/m/Y', strtotime($pacientes->DataDeNascimentoPaciente)); ?></td>
                                             <form action="/buscar_consultas_id" method="get">
                                            {{csrf_field()}}
                                            <input type="text" class="form-control escondido" id="pessoas" name="busca"  value = "{{$pacientes->idPaciente}}" >
                                            <td><button class="btn btn-dark mostrar" type="submit" value = "busca" alvo="{{$pacientes->idPaciente}}">Selecionar</button>
                                            </form>
                                        </tr>
                                        </tbody>
                                    </table>
                                    @empty
                                    <div class="alert alert-danger">
                                        Paciente não cadastrado
                                    </div>
                                 @endforelse

                    @endif
                     @if(isset($consultaPacientes))  
                        @foreach($consultaPacientes as $paciente)
                       </div>
                                 <div>
                                <h6 class="col">Dados antropométricos<br><br></h6>   
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Peso
                                        <input type="text" name="peso" value="{{$paciente->PesoConsulta}}" class="form-control col-md-4" readonly >
                                    </label>
     
                                    <label for="nome" class="col-md-3">Estatura
                                        <input type="text" name="estatura" value="{{$paciente->EstaturaConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência da cintura
                                        <input type="text" name="cirCintura"  value="{{$paciente->Circ_cinturaConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Circuferência do abdômen
                                        <input type="text" name="circAbd"  value="{{$paciente->Circ_abdomenConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência do quadril
                                        <input type="text" name="cirQuad"  value="{{$paciente->Circ_quadrilConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência coxa proximal direita
                                        <input type="text" name="cirCxDir"  value="{{$paciente->Circ_coxa_prox_dirConsulta}}"  class="form-control col-md-4" readonly >
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Circuferência coxa proximal esquerda
                                        <input type="text" name="cirCxEsq"  value="{{$paciente->Circ_coxa_prox_esqConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência da panturrilha
                                        <input type="text" name="circ_pantu"  value="{{$paciente->Circ_pantuConsulta}}"  class="form-control col-md-4" readonly>
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência do braço direito
                                        <input type="text" name="cirBraDir"  value="{{$paciente->Circ_braco_dirConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Circuferência do braço esquerdo
                                        <input type="text" name="cirBraEsq"  value="{{$paciente->Circ_braco_esqConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                    <label for="nome" class="col-md-3">Circuferência do punho
                                        <input type="text" name="cirPunho"  value="{{$paciente->Circ_punhoConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                    <label for="nome" class="col-md-3">% Gordura
                                        <input type="text" name="gordura"  value="{{$paciente->Porc_gorduraConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">% Muscular
                                        <input type="text" name="muscular"  value="{{$paciente->Porc_muscularConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                    <label for="nome" class="col-md-3">TMB
                                        <input type="text" name="tmb"  value="{{$paciente->TmbConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                    <label for="nome" class="col-md-3">Body Age
                                        <input type="text" name="bodyAge"  value="{{$paciente->Body_ageConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Gordura Viceral
                                        <input type="text" name="gordVisc"  value="{{$paciente->Gord_visceralConsulta}}" class="form-control col-md-4" readonly>
                                    </label>
                                </div>        
                            </div>
                             @endforeach
                              {{ $consultaPacientes->appends(Illuminate\Support\Facades\Input::except('page'))->links() }}
                            @endif
                    
        </div>
        </div>
        </div>
    </main>
    @endsection
