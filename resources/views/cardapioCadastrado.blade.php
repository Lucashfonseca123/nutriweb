@extends('layouts.pop_up')
@section('content')
    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Cardápio <br></h3>
                <img class="logo9" src="\img\logo.png">

                {{--@foreach($paciente as $nomePaciente)--}}
                    {{--<h4>Paciente: {{$nomePaciente->NomePaciente}} </h4>--}}
                {{--@endforeach--}}

                <div class="container mt-4 ">
                    <table class="table menu" style="table-layout: fixed">
                        <thead>
                        <tr>
                            <th scope="col">Horário</th>
                            <th scope="col">Opção 1</th>
                            <th scope="col">Opção 2</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($nomeAlimento as $elementos)
                            <tr>
                                <td>
                                    {{ $elementos->HorarioItemCardapio != null ? $elementos->HorarioItemCardapio : "Não cadastrado" }}
                                </td>
                                <td>
                                    @foreach($elementos->grupo->grupo_has_alimentos as $grupo)
                                        {{ $grupo->cmvcoltaco3->descricaoAlimento }}
                                        <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($elementos->grupo2->grupo_has_alimentos as $grupo)
                                        {{ $grupo->cmvcoltaco3->descricaoAlimento }}
                                        <br>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                           {{--@endforeach--}}
                    </tbody>
                    </table>
                </div>
                <div>
                   <h4>Orientações gerais:
                   </h4>
                </div>
                <button class="btn btn-success col-md-1" type="" onClick="this.style.visibility='hidden';window.print();">Gerar PDF</button>
            </div>
        </div>
        <br><br>
    </div>
@endsection




