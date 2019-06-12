    @extends('layouts.menu')
    @section('title', 'Nutriweb')
    @section('content')
    <main class="page-content">
        <div class="container">
            <h2>Bem vinda, Fernanda</h2>
            <img class="logo" src="img/logo.png">
            <div class="row">
                <div class="form-group col-md-12">
                  <h5>Selecione paciente:</h5>
                </div>
                <div class="form-group col-md-8">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <a href="" class="btn btn-outline-secondary" type="button" id="button-addon2">Busca
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </main>
    <!-- page-content" -->
    @endsection

