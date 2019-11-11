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
            {{--<img src="img/ajuda.png" id="1" class="help2">--}}
            <div class="row">
                <div class="form-group col-md-12">
                        <form action="/buscarRelatorio" method="get">
                        {{csrf_field()}}
                            <div class="form-group col-md-5">
                                <div class="input-group">
                                    <input type="hidden" name="idnutricionista" value="{{Auth::user()->Nutricionista_idNutricionista}}">
                                    <input type="text" class="form-control" id="pessoas" name="busca" placeholder="Selecione paciente   ..." >

                                    <div class="input-group-append">
                                        <span>
                                            <button class="btn btn-primary" value="busca" type="submit">Busca</button> &ensp;&ensp;
                                        </span> 
                                    </div>
                                    <span style="cursor: pointer" onclick="window.open('/help#div3', '', 'width=600,height=300')">
                                      <img src="img/ajuda.png" class="help5">
                                  </span>
                                   
                                </div>
                            </div>
                        </form>
                      <br><br>
                      @if(isset($consultaPaciente))  
                      	@foreach($consultaPaciente as $paciente)
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
                                                    <td><button class="btn btn-primary mostrar_esconder selecionar" value="busca" id = "btn-{{$paciente->idPaciente}}" type="submit" data-id = "{{$paciente->idPaciente}}" alvo="{{$paciente->idPaciente}}">Selecionar</button> &ensp;&ensp;
                                                    </td>
                                                </tbody>
                                            </tr>
                					</table>
                				</div>

                <div" class=" col-md-12  mt-12 escondido" id="{{$paciente->idPaciente}}" >
                    <h3>{{$paciente->NomePaciente}}</h3>
                    <div class="row">
                        <div class="col-md-12  mt-12">
                             <h6>Circunferencias (cm)</h6>
                             <canvas id="mostrarGraficoid{{$paciente->idPaciente}}" ></canvas>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6  mt-12">
                                <h6>%Gordura </h6>
                                <canvas id="mostrarGraficoGord{{$paciente->idPaciente}}" ></canvas>
                            </div>
                            <div class="col-md-6  mt-12">
                                <h6>%Muscular </h6>
                                <canvas id="mostrarGraficoMusc{{$paciente->idPaciente}}" ></canvas>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6  mt-12">
                                <h6>Tmb </h6>
                                <canvas id="mostrarGraficoTmb{{$paciente->idPaciente}}" ></canvas>
                            </div>
                            <div class="col-md-6  mt-12">
                                <h6>Gordura Visceral</h6>
                                <canvas id="mostrarGraficoGordVisc{{$paciente->idPaciente}}" ></canvas>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6  mt-12">
                                <h6>Body Age</h6>
                                <canvas id="mostrarGraficoBA{{$paciente->idPaciente}}" ></canvas>
                            </div>
                    </div>
                    <div class="row col">
                        <button class="btn btn-primary selecionar" onClick="window.print()" type="submit" >Imprimir</button>
                    </div>
                    </div>
            			@endforeach
                	@endif
            </div>

        </div>
        </div>
    </main>
    
    <script type="text/javascript">
    let cintura = [];
    let quadril = [];
    let coxaEsq = [];
    let coxaDir =[];
    let panturillha = [];
    let abdomen = [];
    let bracoDir = [];
    let bracoEsq = [];
    let punho = [];
    let musc = [];
    let gord = [];
    let gordV = [];
    let tMb = [];
    let bA = [];                
    let data = [];
    let consulta = [];
    		$(".selecionar").click(function(){
    		let id = $(this).data('id');
        id = parseInt(id);
    		console.log(id);
			$.ajax({
				method: "GET",
				url: '/grafico',
				data: {'id' : id},
				success: function (response){
					console.log(response.length);
                    var j  =0;
                    for (var i = response.length - 1; i >= 0 || j >=5 ; i--) {
                        cintura[j] = response[i].Circ_cinturaConsulta;
                        quadril[j] = response[i].Circ_quadrilConsulta;
                        coxaEsq[j] = response[i].Circ_coxa_prox_esqConsulta;
                       coxaDir[j] = response[i].Circ_coxa_prox_dirConsulta;
                       panturillha[j] = response[i].Circ_pantuConsulta;
                       abdomen[j] = response[i].Circ_abdomenConsulta;
                       bracoDir[j]  = response[i].Circ_braco_dirConsulta;
                       bracoEsq[j] = response[i].Circ_braco_esqConsulta;
                       punho[j]  = response[i].Circ_punhoConsulta;
                       musc[j]= response[i].Porc_muscularConsulta;
                       gord[j] = response[i].Porc_gorduraConsulta;
                       gordV[j] = response[i].Gord_visceralConsulta;
                       tMb[j] = response[i].TmbConsulta;
                       bA[j] = response[i].Body_ageConsulta;                
                       data[j] =response[i].created_at;
                       j++;
                    }
					mostrarGrafico(cintura, quadril, coxaEsq, coxaDir, panturillha, abdomen, bracoDir, bracoEsq, punho, data ,id, musc, gord, gordV, tMb, bA);
                        cintura = [];
                        quadril = [];
                        coxaEsq = [];
                        coxaDir =[];
                        panturillha = [];
                        abdomen = [];
                        bracoDir = [];
                        bracoEsq = [];
                        punho = [];                
                        data = [];
                        musc = [];
                        gord = [];
                        gordV = [];
                        tMb = [];
                        bA =[];
            }
            });
			}); 
    </script>

    <script type="text/javascript">
    function mostrarGrafico(cintura, quadril, coxaEsq, coxaDir, panturillha, abdomen, bracoDir, bracoEsq, punho, datas , id, pctMuscular, pctGordura, pctGorduraVisceral, tMb, bA){
    var c = [];
    var q = [];
    var cE = [];
    var cD = [];
    var p = [];
    var a = [];
    var bD = [];
    var bE = [];
    var pu = [];
    var m = [];
    var g = [];
    var gv = [];
    var t = [];
    var b = [];
    var datasFormatadas = [];
    var idp = id;  
   var j =0;
    for (var i = cintura.length - 1; i >= 0; i--) {
        c[j] = parseFloat(cintura[i]);
        q[j] = parseFloat(quadril[i]);
        cE[j] = parseFloat(coxaEsq[i]);
        cD[j] = parseFloat(coxaDir[i]);
        p[j]= parseFloat(panturillha[i]);
        bD[j] = parseFloat(bracoDir[i]);
        bE[j] = parseFloat(bracoEsq[i]);
        a[j] = parseFloat(abdomen[i]);
        p[j] = parseFloat(punho[i]);
        m[j] = parseFloat(pctMuscular[i]);
        g[j] = parseFloat(pctGordura[i]);
        gv[j] = parseFloat(pctGorduraVisceral[i]);
        t[j] = parseFloat(tMb[i]);
        b[j] = parseFloat(bA[i]);
        var date_arr = datas[i].split(" ");
        var date_aar2 = date_arr[0].split("-");
        datasFormatadas[j] = date_aar2[2] + "/" + date_aar2[1] + "/" + date_aar2[0];
        j++;
        
    }
    q.push(0);
    c.push(0);
    cE.push(0);

    let imcChart = document.getElementById('mostrarGraficoid'+idp).getContext('2d');
    let gorduraChart = document.getElementById('mostrarGraficoGord'+idp).getContext('2d');
    let muscularChart = document.getElementById('mostrarGraficoMusc'+idp).getContext('2d');
    let gordViscChart = document.getElementById('mostrarGraficoGordVisc'+idp).getContext('2d');
    let tmbChart = document.getElementById('mostrarGraficoTmb'+idp).getContext('2d');
    let baChart = document.getElementById('mostrarGraficoBA'+idp).getContext('2d');
   
    Chart.defaults.global.defaultFontFamily = 'Lato';
    Chart.defaults.global.defaultFontSize = 18;
    Chart.defaults.global.defaultFontColor = '#777';

    let massPopChart = new Chart(imcChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:['Cintura','Quadril', 'Coxa Esquerda', 'Coxa Direita' , 'Panturrilha', 'Braço direito', 'Braço Esquerdo', 'Abdomen', 'Punho'],
        datasets:[{
          label : datasFormatadas[0],
          data: [c[0],q[0],cE[0],cD[0],p[0],bD[0],bE[0],a[0],p[0]],
          backgroundColor:'green',
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }
        ,
        {
            backgroundColor: 'orange',
            data: [c[1],q[1],cE[1],cD[1],p[1],bD[1],bE[1],a[1],p[1]],
            label : datasFormatadas[1]
        },
        {
           backgroundColor: 'yellow',
            data : [c[2],q[2],cE[2],cD[2],p[2],bD[2],bE[2],a[2],p[2]],
            label : datasFormatadas[2]
        },
        { 
            backgroundColor: 'red',
            data : [c[3],q[3],cE[3],cD[3],p[3],bD[3],bE[3],a[3],p[3]],
            label : datasFormatadas[3]
        },
        {
            backgroundColor: 'blue',
            data : [c[4],q[4],cE[4],cD[4],p[4],bD[4],bE[4],a[4],p[4]],
            label : datasFormatadas[4]
        },
       
        ]
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

    let porgorduraChart = new Chart(gorduraChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:datasFormatadas,
        datasets:[{
          data: g,
          backgroundColor:['green','blue','red','brown','gray'],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }
        ]
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

    let massamuscularChart = new Chart(muscularChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:datasFormatadas,
        datasets:[{
          data: m,
          backgroundColor:['green','blue','red','brown','gray'],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }
        
        ]
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

    let gorduraVisceralChart = new Chart(gordViscChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:datasFormatadas,
        datasets:[{
          data: gv,
          backgroundColor:['green','blue','red','brown','gray'],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }
        
        ]
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

    let tMBChart = new Chart(tmbChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:datasFormatadas,
        datasets:[{
          data: t,
          backgroundColor:['green','blue','red','brown','gray'],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }
        ]
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

    let bodyAgeChart = new Chart(baChart, {
      type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
      data:{
        labels:datasFormatadas,
        datasets:[{
          data: b,
          backgroundColor:['green','blue','red','brown','gray'],
          borderWidth:1,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000'
        }
        ]
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