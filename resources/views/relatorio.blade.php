@extends('layouts.menu')
@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
    <main class="page-content">
        <div class="container">
        <div class="card">
            <div class="card-header"><br>
            <h2 class="col">Situação paciente</h2><br>
            <h3 class="col">Relatórios</h3>
            <img class="logo" src="img/logo.png">
            <div class="row col">
                <div class="form-group col-md-12">
                    <h5>Selecione paciente:</h5>
             <form action="/buscarRelatorio" method="get">
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
                      	@foreach($consultaPaciente as $paciente)
                    		</div>
                    			<div class="container mt-4">
                        			<table class="table">
                            			<thead>
			                                <tr>
			                                    <th scope="col">Id</th>
			                                    <th scope="col">Paciente</th>
			                                    <th scope="col">Email</th>
			                                    <th scope="col">Data</th>
			                                    <th></th>
			                                </tr>
                            			</thead>
                            				<tr>
			                            <tbody>
			                                <th scope="row">  {{$paciente->idPaciente}}  </th>
			                                <td> {{$paciente->Nome}}</td>
			                                <td> {{$paciente->Email}}</td>
			                                <td> {{$paciente->created_at}}</td>
			                                <td><button class="btn btn-primary mostrar" value="busca" type="submit" alvo="{{$paciente->idPaciente}}">Selecionar</button> &ensp;&ensp;
			                                </td>
			                            </tr>
			                        	</tbody>
                					</table>
                				</div>
							<div class=" col-md-12 mt-2 escondido"  id="{{$paciente->idPaciente}}" >
								<script type="text/javascript">
									$.ajax({
										method: "POST",
										url: '/grafico',
										data: {{$paciente->idPaciente}}
								})   
								</script>
	                			<div class="row">
				                    <div class="col-md-6  mt-6">
				                        <h6>Peso/Estatura</h6>
				                        <canvas id="imcChart"></canvas>
				                    </div>
				                </div>
           					</div>
            			@endforeach
                	@endif
        </div>
        </div>
        </div>
    </main>


    
    
    

@endsection