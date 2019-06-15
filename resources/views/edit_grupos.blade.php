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
                        <label for=""><h6>Low carb</h6></label>
                    </div>
                    <div class="form-group text-center">
                        <label for="">
                            <input type="text" id="Nome" style="width: 180px" class="form-control" placeholder="Macarrão" disabled>
                        </label>
                        <label for="">
                            <input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="4 colheres" disabled>
                        </label>
                        <label for="">
                            <input type="text" id="Nome" style="width: 180px" class="form-control" placeholder="Arroz" disabled>
                        </label>
                        <label for="">
                            <input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="2 colheres" disabled>
                        </label>
                        <label for="">
                            <input type="text" id="Nome" style="width: 180px" class="form-control" placeholder="Frango" disabled>
                        </label>
                        <label for="">
                            <input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="2 filés" disabled>
                        </label>
                        <label for="">
                            <input type="text" id="Nome" style="width: 180px" class="form-control" placeholder="Suco" disabled>
                        </label>
                        <label for="">
                            <input type="text" id="Nome" style="width: 114px" class="form-control" placeholder="1 copo" disabled>
                        </label>
                    </div>
                    <button class="btn btn-danger" id="btn2">Remover grupo<br></button>
                </div>
            </form>
        </div>
    </main>
@endsection
