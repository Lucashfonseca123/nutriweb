@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <form class="form-horizontal">
                <h4 class="col">Editar grupos</h4><br>
                <h6 class="col">Selecione grupo</h6>
                <div class="form-group col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" id="pessoas" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary mostrar_sempre" type="button" alvo="revelado">Busca</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 card-header text-center escondido" id="revelado">
                    <div class="form-group text-center">
                        <label for=""><h6>Infos paciente 1</h6></label>
                    </div>
                    <div class="form-group text-center">
                        <label for="">
                            <input type="text" id="Nome" style="width: 180px" class="form-control" placeholder="Gráfico aqui" disabled>
                        </label>
                    </div>
                  </div>
            </form>
        </div>
    </main>
@endsection