@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <form class="form-horizontal">
                <h4 class="col">Editar paciente</h4><br>
                <img class="logo3" src="img/logo.png">
                <h6 class="col">Selecione paciente</h6>
                <div class="form-group col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="pessoas" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary mostrar_sempre" type="button" alvo="revelado">Busca</button>
                        </div>
                    </div>
                </div>
                <div>
                <div class="form-group escondido " id="revelado">
                    <label for="" class="col">
                        <input type="text" style="width: 180px" id="alimentos" class="form-control" placeholder="Tem um gráfico aqui.." disabled>
                    </label>
                </div>
            </form>
        </div>
    </main>
@endsection