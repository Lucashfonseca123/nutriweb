@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <h2 class="col">Situação paciente</h2><br>
            <h3 class="col">Relatórios</h3>
            <img class="logo" src="img/logo.png">
            <div class="row col">
                <div class="form-group col-md-12">
                    <h5>Selecione paciente:</h5>
                </div>
                <div class="form-group col-md-8">
                    <div class="input-group">
                        <input type="text" class="form-control" id="pessoas" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary mostrar_sempre" type="button" alvo="revelado">Busca</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-md-12 mt-2" id="revelado" ><div>
                   <h6>Legenda:</h6>
                    <div><h6>Parâmetro 1/Parâmetro 2</h6></div>&ensp;&ensp;&ensp;&ensp;&ensp;
                    <div class="bolaazul">&ensp;</div>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                    <div class="bolaverm">&ensp;</div>
                <br><br>
                </div>
                    <div class="row">
                    <div class="col-md-4  mt-4">
                        <h6>Peso/Estatura</h6>
                        <img class="mt-4" src="img/graficos.jpg">
                    </div>
                    <div class="col-md-4 mt-4">
                        <h6>Circ. da cintura/Circ. do abdômen</h6>
                        <img class="mt-4" src="img/graficos.jpg">
                    </div>
                    <div class="col-md-4 ">
                        <h6>Circ. coxa prox. direita/Circ. coxa prox. esquerda</h6>
                        <img class="mt-4" src="img/graficos.jpg">
                    </div>
                    <br>
                    <div class="col-md-4 mt-4">
                        <h6> Circ. do quadril/Circ. da panturrilha</h6>
                        <img class="mt-4" src="img/graficos.jpg">
                    </div>
                    <div class="col-md-4 mt-4">
                        <h6> Circ. braço direito/Circ braço esquerdo</h6>
                        <img class="mt-4" src="img/graficos.jpg">
                    </div>
                    <div class="col-md-4 mt-4">
                        <h6> Circ. do punho/IMC</h6>
                        <img class="mt-4" src="img/graficos.jpg">
                    </div>
                    <br>
                    <div class="col-md-4 mt-4">
                        <h6> %Gordura/%Muscular</h6>
                        <img class="mt-4" src="img/graficos.jpg">
                    </div>
                    <br>
                    <div class="col-md-4 mt-4">
                        <h6> TMB/Body Age</h6>
                        <img class="mt-4" src="img/graficos.jpg">
                    </div>
                    <div class="col-md-4 mt-4">
                        <h6> Gordura Visceral</h6>
                        <img class="mt-4" src="img/graficos.jpg">
                    </div>
            </div>
            </div>
        </div>
    </main>
    <!-- page-content" -->
@endsection