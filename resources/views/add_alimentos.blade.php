@extends ('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
        <div class="card">
        <div class="card-header"><br>
            <h4 class="col">Adicionar alimentos</h4><br>
            <img class="logo8" src="img/logo.png">
                <form action="{{route('salvarAlimentos.store')}}" method="post">
                {{csrf_field()}}
                    <div class="form-group ">
                        <div class="input-group col-md-11">
                            <input type="text" class="form-control" placeholder="Nome do alimento..." name="nomealimento" aria-describedby="button-addon2">
                            <input type="text" class="form-control col-md-3" id="alimentos" name="qtd_calorica" placeholder="Quantidade calórica (Kcal)..." aria-describedby="button-addon2">
                            <input type="text" class="form-control col-md-2" id="alimentos" name="proteina" placeholder="Proteína" aria-describedby="button-addon2">
                        </div>
                        <br>
                        <div class=" col">
                            <button class="btn btn-success" id="" type="submit">Adicionar</button>
                        </div>
                    </div>
                </form>
        </div>
        </div>
        </div>
    </main>
@endsection
