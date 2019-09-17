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
			                                    <th scope="col">Paciente</th>
			                                    <th scope="col">Email</th>
			                                    <th scope="col">Data</th>
			                                    <th></th>
			                                </tr>
                            			</thead>
                            				<tr>
			                            <tbody>
			                               
			                                <td> {{$paciente->Nome}}</td>
			                                <td> {{$paciente->Email}}</td>
			                                <td> {{$paciente->created_at}}</td>
			                                <td><button class="btn btn-primary mostrar selecionar" value="busca" id = "btn-{{$paciente->idPaciente}}" type="submit" data-id = "{{$paciente->idPaciente}}" alvo="{{$paciente->idPaciente}}">Selecionar</button> &ensp;&ensp;
			                                </td>
			                            </tr>
			                        	</tbody>
                					</table>
                				</div>

            			@endforeach
            			<div class=" col-md-12 mt-2 escondido"  id="{{$paciente->idPaciente}}" >
                		<div class="row">
				                    <div class="col-md-6  mt-6">
				                        <h6>IMC</h6>
				                        <canvas id="imcChart"></canvas>
				                    </div>
				                </div>
				            </div>
                	@endif
                	
        </div>
        </div>
        </div>
    </main>
    
    <script type="text/javascript">
    let peso = [];
    let altura = [];
    let consulta = [];
    		$(".selecionar").click(function(){
    		let id = $(this).data('id');
    		console.log(id);
			$.ajax({
				method: "GET",
				url: '/grafico',
				data: id,
				success: function (response){
					console.log(response);
					peso = response[0].Peso;
					altura = response[0].Estatura;
					mostrarGrafico(peso, altura);

        			
            }
            });
			}); 
    </script>

    <script type="text/javascript">
    function mostrarGrafico(peso , altura){
    var d = [];    
    p = parseFloat(peso);
    console.log(p);
    a =parseFloat(altura/100);
    console.log(a);
    d[0] = p/(a*a);
    d.push(0);
    var c = [];
    for (i = 0; i < d.length; i++) {
    if (d[i] < 18.5)
        { 
            c[i] = "rgba(243,124,138,1.00)";
            
        }
         else if (d[i] >= 18.5 && d[i] < 25) 
        {
            c[i] = "rgba(154,226,125,1.00)";
        } 
        else if (d[i] >= 25 && d[i]<30)
        {

            c[i] = "rgba(243,233,7,1.00)";
            
            
            
        }
        else if (d[i] >= 30)
        {
            c[i] = "rgba(243,124,138,1.00)";
            
            
        }
         else 
        {
            c[i] = "rgba(255,255,255,1)";
        }
    }
    let imcChart = document.getElementById('imcChart').getContext('2d');
   
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(imcChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Março'],
        datasets:[{
          //label:['Abaixo','Normal','Acima','Obeso'],
          data: d,
          //backgroundColor:'green',
          backgroundColor:c,
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }]
      },
      options:{
        title:{
          display:false,
          text:'IMC',
          fontSize:25
        },
        layout:{
          padding:{
            left:0,
            right:0,
            bottom:0,
            top:0
          }
        },
        legend: {
            display: false
         },
        tooltips:{
          enabled:true
        }
      }
    });
}
	</script>

    
    

@endsection