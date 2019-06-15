@extends ('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <form class="form-horizontal">
                <h4 class="col">Adicionar alimentos</h4><br>
                <div class="form-group ">
                    <div class="input-group col-md-7">
                        <input type="text" class="form-control" id="alimentos" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-success mostrar_sempre" id="btn1" type="button" alvo="revelado">Adicionar</button>
                        </div>
                    </div>
                        <label for="" class="form-group col ">
                            <label for="">
                                <div id="cards" style="width: 180px">
                                </div>
                            </label>
                        </label>
                </div>
            </form>
        </div>
    </main>
@endsection
