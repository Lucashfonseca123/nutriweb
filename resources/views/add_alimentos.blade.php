@extends ('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
        <div class="card">
        <div class="card-header"><br>
            <form class="form-horizontal">
                <h4 class="col">Adicionar alimentos</h4><br>
                <img class="logo3" src="img/logo.png">
                <div class="form-group ">
                    <div class="input-group col-md-11">
                        <input type="text" class="form-control" placeholder="Nome do alimentos..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <input type="text" class="form-control col-md-3" id="alimentos" placeholder="Quantidade calórica (Kcal)..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <input type="text" class="form-control col-md-2" id="alimentos" placeholder="Sódio (mg)..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    </div>
                    <br>
                    <div class=" col">
                        <button class="btn btn-success" id="btn1" type="button">Adicionar</button>
                    </div>
                    <div class="container mt-4">
                        <h2>Alimentos cadastrados: </h2>
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Alimento</th>
                                <th scope="col">Quantidade calórica (Kcal)</th>
                                <th scope="col">Sódio (mg)</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row" >1</th>
                                <td>Macarrão</td>
                                <td>1550</td>
                                <td>370</td>
                                <td><button class="btn btn-danger" type="button" >Remover</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Feijão</td>
                                <td>791</td>
                                <td>420</td>
                                <td><button class="btn btn-danger" type="button" >Remover</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Leite</td>
                                <td>659</td>
                                <td>200</td>
                                <td><button class="btn btn-danger" type="button" >Remover</button></td>
                            </tr>
                            </tbody>
                        </table>
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
        </div>
        </div>
    </main>
@endsection
