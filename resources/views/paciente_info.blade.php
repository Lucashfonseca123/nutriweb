@extends('layouts.menu')
@section('content')
    <main class="page-content">
        <div class="container">
            <form class="form-horizontal">
            <div class="card">
                <div class="card-header"><br>
                <h4 class="col">Nutriweb</h4><br>
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
                <div class="col">
                    <br><h5>Cardápios pendentes</h5>
            </form>
            <div class="container mt-4">
                @if(isset($consultaPaciente)) 
                <input type="hidden" name="type" value="<?= $varp = 0?>" >
                
                        @foreach($consultaPaciente as $paciente)
                    
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Paciente</th>
                        <th scope="col">Data Consulta</th>
                        <th scope="col">Data próxima consulta</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                        
                        <th scope="row" >{{$varp = $varp+1}}</th>
                        <td> {{$paciente->Nome}}</td>
                        <td><?php echo date('d/m/Y', strtotime($paciente->created_at)); ?> </td>
                        
                        <td><button class="btn btn-dark" type="button" >Montar cardápio</button></td>
                    
                    </tr>
                    </tbody>
                </table>
                @endforeach

                    @endif
            </div>
            </div>
            </div>
    </main>
@endsection