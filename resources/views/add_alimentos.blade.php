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
                    <div class="form-group">
                                    <label for="nome" class="col-md-3">Nome Alimento
                                        <input type="text" name="nomealimento" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Quantidade de calorias(Kcal)
                                        <input type="text" name="qtd_calorica" OnKeyPress="formatar('#.##', this)" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Qauntidade de Proteínas
                                        <input type="text" name="proteina" class="form-control col-md-4">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Quantidade de Lípideos
                                        <input type="text" name="lipideos" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Quantidade de fibras
                                        <input type="text" name="fibra" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Quantida de Cálcio
                                        <input type="text" name="calcio" class="form-control col-md-4">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="nome" class="col-md-3">Quantidade de Ferro
                                        <input type="text" name="ferro" class="form-control col-md-4">
                                    </label>
                                    <label for="nome" class="col-md-3">Quantida de Carboidratos
                                        <input type="text" name="carboidratos" class="form-control col-md-4">
                                    </label>
                                </div>
                            <button class="btn btn-success" id="" type="submit">Adicionar</button>
                        </div>
                    </div>
                </form>
        </div>
        </div>
        </div>
    </main>
@endsection
