@extends('layouts.menu')
@section('content')
<main class="page-content">
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Cardápio <br><br></h3>
                <img class="logo5" src="img/logo.png">
                <form action="/buscarPessoas" method="post">
                {{csrf_field()}}
                    <div class="input-group">
                        <input type="text" class="form-control col-md-6" name="busca" title = "Insira o nome do paciente desejado" placeholder="Digite aqui...">
                        <input type="hidden" name="buscaId" value = "0">
                        <button class="btn btn-primary" type="submit" value="busca">Busca</button>
                        &ensp;&ensp;
                </form>
                    <span style="cursor: pointer" onclick="window.open('/help#4', '', 'width=600,height=300')">
                                      <img src="img/ajuda.png" class="help3">
                                  </span>
                    </div>
                <br><br>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                 @if(session()->has('message2'))
                    <div class="alert alert-danger">
                        {{ session()->get('message') }}
                    </div>
                @endif
                @if(isset($lista_nome))
                    @forelse($lista_nome->sortBy('NomePaciente') as $paciente)
                    <div class="container mt-4 mostrar esconder">
                            <table class="table menu">
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
                                        <td><button class="btn btn-primary mostrar_esconder" alvo="{{$paciente->idPaciente}}">Selecionar</button>
                                        </td>
                                        <td>
                                        {{--<form target="_blank" action="/resumo_paciente" method="get">--}}
                                            {{csrf_field()}}
                                        <span style="cursor: pointer" onclick="window.open('/resumo_paciente/{{$paciente->idPaciente}}', '', 'width=600,height=300')">
                                            <input type="hidden" name="idPaciente" value="{{$paciente->idPaciente}}">
                                            <button class="btn btn-dark" type="submit">Gerar resumo</button>
                                        </span>
                                        {{--</form>--}}
                                        </td>
                                        <td>
                                            {{--<span style="cursor: pointer" onclick="window.open('/cardapioFinal/{{$paciente->idPaciente}}', '', 'width=600,height=300')">--}}
                                            {{--<input type="hidden" name="idPaciente" value="{{$paciente->idPaciente}}">--}}
                                            {{--<button class="btn btn-success" type="" >Gerar PDF</button>--}}
                                            {{--</span>--}}
                                        </td>
                                    </tr>
                                    </tbody>
                            </table>
                    </div>
                <div class="table escondido" id="{{$paciente->idPaciente}}">
                <table>
                <form action="{{route('cardapioCadastro.store')}}" method="post">
                {{csrf_field()}}
                <h4>
                    <label for="">
                        Paciente: {{$paciente->NomePaciente}}
                        <input type="hidden" name="idpaciente" value="{{$paciente->idPaciente}}">
                        <input type="hidden" name="idconsulta" value="{{$paciente->consulta->last()->idConsulta}}">
                    </label>
                    &emsp;&emsp;
                    <label for="">
                           <span style="cursor: pointer" onclick="window.open('/cardapioFinal/{{$paciente->idPaciente}}', '', 'width=600,height=300')">
                               <button class="btn btn-success" id="btn2" type="input">Salvar cardápio</button>
                           </span>
                    </label>
                <br><br>
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

                                <input type="time" name="time[1]" id="time1"  class="form-control col-md-10">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo[1]" id="idgrupo">
                                    @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                        @foreach($group->sortBy('NomeGrupo') as $grupos)
                                            <option value="{{$grupos->idGrupo}}" nombre="{{$grupos->NomeGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                        @endforeach
                                    @endif
                                </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo2[1]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Lanche da manhã</th>
                        <th class="col">
                            <input type="time" name="time[2]" id="time2"  maxlength="time" class="form-control col-md-10 validaHorario1">
                            <input type="hidden" value="2" name="idrefeicao[2]">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo[2]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                                <label for="" class="escondido" id="revelado2">
                                    <div>
                                         <button class="btn btn-danger" id="btn2" type="button">Remover</button>
                                    </div>
                                </label>
                            </label>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo2[2]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Almoço</th>
                        <th class="col">
                            <input type="time" name="time[3]" id = time3 class="form-control col-md-10 validaHorario2">
                            <input type="hidden" value="3" name="idrefeicao[3]">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo[3]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control " title = "Busque o grupo desejado" style="width: 250px" name="grupo2[3]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Lanche da tarde </th>
                        <th class="col">
                            <input type="time" name="time[4]" id = time4  class="form-control col-md-10 validaHorario3">
                            <input type="hidden" value="4" name="idrefeicao[4]">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo[4]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo2[4]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Jantar</th>
                        <th class="col">
                            <input type="time" name="time[5]" id = time5 class="form-control col-md-10 validaHorario4">
                            <input type="hidden" value="5" name="idrefeicao[5]">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo[5]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo2[5]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row" style="vertical-align: middle">Ceia</th>
                        <th class="col">
                            <input type="time" name="time[6]" id = time6 class="form-control col-md-10 validaHorario5">
                            <input type="hidden" value="6" name="idrefeicao[6]">
                        </th>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo[6]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="input-group" style="width: 350px">
                                <div class="input-group" style="width: 350px">
                                    <select class="js-example-basic-single form-control" title = "Busque o grupo desejado" style="width: 250px" name="grupo2[6]" id="idgrupo">
                                        @if(isset($group))             {{--Se a variavel foi previamente definida--}}
                                            @foreach($group->sortBy('NomeGrupo') as $grupos)
                                                <option value="{{$grupos->idGrupo}}" name="">{{$grupos->NomeGrupo}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    </form>
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
<script type="text/javascript">

	$( ".validaHorario1" ).change(function() {
		var t1 = $("#time1").val();
		var t2 = $("#time2").val();
		var data1 = '11/11/2011'+t1+'00 am';
		var d1 = Date.parse('Wed, 09 Aug 1995 ' + t1+ ':00');
        var d2 = Date.parse('Wed, 09 Aug 1995 ' + t2+ ':00');
        console.log(d1);
        console.log(d2);
        if(d1>=d2){
        	var date_arr = t1.split(":");
        	var tn1 = parseInt(date_arr[0])+3;
        	if(tn1==21){
               tn1 = tn1-1
        	}
        	if(tn1==22){
               tn1 = tn1-2
        	}
        	if(tn1 == 23){
        		tn1 = 0
        		tn1 = tn1.toString() + "0";
        	}
        	var tn2 = parseInt(date_arr[1]);
        	if(tn2 == 0){
        	var final = (tn1.toString()) + ":" + (tn2.toString()) + "0";
            console.log(final);
            this.value = final;
            }
            else if(tn2>0 && tn2<10){
            var final = (tn1.toString()) + ":" + "0" + (tn2.toString()) ;
            this.value = (final);
            }
            else{
            var final = (tn1.toString()) + ":" + (tn2.toString()) ;
            console.log(final);
            this.value = final;
            }
        }
	
	});
	$( ".validaHorario2" ).change(function() {
		var t1 = $("#time2").val();
		var t2 = $("#time3").val();
		var data1 = '11/11/2011'+t1+'00 am';
		var d1 = Date.parse('Wed, 09 Aug 1995 ' + t1+ ':00');
        var d2 = Date.parse('Wed, 09 Aug 1995 ' + t2+ ':00');
        console.log(d1);
        console.log(d2);
       if(d1>=d2){
        	var date_arr = t1.split(":");
        	var tn1 = parseInt(date_arr[0])+3;
        	if(tn1==21){
               tn1 = tn1-1
        	}
        	if(tn1==22){
               tn1 = tn1-2
        	}
        	if(tn1 == 23){
        		tn1 = 0
        		tn1 = tn1.toString() + "0";
        	}
        	var tn2 = parseInt(date_arr[1]);
        	if(tn2 == 0){
        	var final = (tn1.toString()) + ":" + (tn2.toString()) + "0";
            console.log(final);
            this.value = final;
            }
            else if(tn2>0 && tn2<10){
            var final = (tn1.toString()) + ":" + "0" + (tn2.toString()) ;
            this.value = (final);
            }
            else{
            var final = (tn1.toString()) + ":" + (tn2.toString()) ;
            console.log(final);
            this.value = final;
            }
        }
	});
	$( ".validaHorario3" ).change(function() {
		var t1 = $("#time3").val();
		var t2 = $("#time4").val();
		var data1 = '11/11/2011'+t1+'00 am';
		var d1 = Date.parse('Wed, 09 Aug 1995 ' + t1+ ':00');
        var d2 = Date.parse('Wed, 09 Aug 1995 ' + t2+ ':00');
        if(d1>=d2){
        	var date_arr = t1.split(":");
        	var tn1 = parseInt(date_arr[0])+3;
        	if(tn1==21){
               tn1 = tn1-1
        	}
        	if(tn1==22){
               tn1 = tn1-2
        	}
        	if(tn1 == 23){
        		tn1 = 0
        		tn1 = tn1.toString() + "0";
        	}
        	var tn2 = parseInt(date_arr[1]);
        	if(tn2 == 0){
        	var final = (tn1.toString()) + ":" + (tn2.toString()) + "0";
            console.log(final);
            this.value = final;
            }
            else if(tn2>0 && tn2<10){
            var final = (tn1.toString()) + ":" + "0" + (tn2.toString()) ;
            this.value = (final);
            }
            else{
            var final = (tn1.toString()) + ":" + (tn2.toString()) ;
            console.log(final);
            this.value = final;
            }
        }
	});
	$( ".validaHorario4" ).change(function() {
		var t1 = $("#time4").val();
		var t2 = $("#time5").val();
		var data1 = '11/11/2011'+t1+'00 am';
		var d1 = Date.parse('Wed, 09 Aug 1995 ' + t1+ ':00');
        var d2 = Date.parse('Wed, 09 Aug 1995 ' + t2+ ':00');
        console.log(d1);
        console.log(d2);
       if(d1>=d2){
        	var date_arr = t1.split(":");
        	var tn1 = parseInt(date_arr[0])+3;
        	if(tn1==21){
               tn1 = tn1-1
        	}
        	if(tn1==22){
               tn1 = tn1-2
        	}
        	if(tn1 == 23){
        		tn1 = 0
        		tn1 = tn1.toString() + "0";
        	}
        	var tn2 = parseInt(date_arr[1]);
        	if(tn2 == 0){
        	var final = (tn1.toString()) + ":" + (tn2.toString()) + "0";
            console.log(final);
            this.value = final;
            }
            else if(tn2>0 && tn2<10){
            var final = (tn1.toString()) + ":" + "0" + (tn2.toString()) ;
            this.value = (final);
            }
            else{
            var final = (tn1.toString()) + ":" + (tn2.toString()) ;
            console.log(final);
            this.value = final;
            }
        }
	});
	$( ".validaHorario5" ).change(function() {
		var t1 = $("#time5").val();
		var t2 = $("#time6").val();
		var data1 = '11/11/2011'+t1+'00 am';
		var d1 = Date.parse('Wed, 09 Aug 1995 ' + t1+ ':00');
        var d2 = Date.parse('Wed, 09 Aug 1995 ' + t2+ ':00');
        console.log(d1);
        console.log(d2);
       if(d1>=d2){
        	var date_arr = t1.split(":");
        	var tn1 = parseInt(date_arr[0])+3;
        	if(tn1==21){
               tn1 = tn1-1
        	}
        	if(tn1==22){
               tn1 = tn1-2
        	}
        	if(tn1 == 23){
        		tn1 = 0
        		tn1 = tn1.toString() + "0";
        	}
        	var tn2 = parseInt(date_arr[1]);
        	if(tn2 == 0){
        	var final = (tn1.toString()) + ":" + (tn2.toString()) + "0";
            console.log(final);
            this.value = final;
            }
            else if(tn2>0 && tn2<10){
            var final = (tn1.toString()) + ":" + "0" + (tn2.toString()) ;
            this.value = (final);
            }
            else{
            var final = (tn1.toString()) + ":" + (tn2.toString()) ;
            console.log(final);
            this.value = final;
            }
        }
	});
	

</script>
@endsection