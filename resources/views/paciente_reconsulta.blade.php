@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <form class="form-horizontal">
                <fieldset>
                <h3>TESTE PAGE CONTENT <br><br></h3>
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active">
                            Cras justo odio
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Paciente 1</a>
                        <a href="#" class="list-group-item list-group-item-action">Paciente 2</a>
                        <a href="#" class="list-group-item list-group-item-action">Pàciente 3</a>
                        <a href="#" class="list-group-item list-group-item-action disabled">Paciente 4</a>
                    </div>
                </fieldset>
            </form>
        </div>
    </main>
@endsection