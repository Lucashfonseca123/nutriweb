@extends('layouts.pop_up')
@section('content')
    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-header text-center"><br>
                <h3 style="font-family: sans-serif">Cardápio {{$paciente->NomePaciente}}<br></h3><br>
                <img class="logo9" src="\img\logo.png"><br><br>
                <h5 class="col" style="font-family: sans-serif">Olá {{$paciente->NomePaciente}} !!! Abaixo o cardápio você seguirá durante 30 dias após isso faremos algumas

                    alterações, até lá qualquer duvida é só entrar em contato comigo!</h5><br>
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
                                    <h6>
                                    {{ $elementos->HorarioItemCardapio != null ? $elementos->HorarioItemCardapio : "Não cadastrado" }}
                                    </h6>
                                </td>
                                <td>
                                    @foreach($elementos->grupo->grupo_has_alimentos as $grupo)
                                       <h6>
                                        <label for="">{{ $grupo->cmvcoltaco3->descricaoAlimento }}
                                        </label> -
                                        <label for="">
                                            {{ $grupo->Qtde_Alimento }}
                                        </label>
                                       </h6>

                                    @endforeach
                                </td>
                                <td>
                                    @foreach($elementos->grupo2->grupo_has_alimentos as $grupo)
                                        <h6>
                                        <label for="">
                                        {{ $grupo->cmvcoltaco3->descricaoAlimento }}
                                        </label> -
                                        <label for="">
                                            {{ $grupo->Qtde_Alimento }}
                                        </label>
                                        </h6>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                           {{--@endforeach--}}
                    </tbody>
                    </table>
                </div>
                <div style="text-align: left" class="col">

                   <h4 style="font-family: sans-serif">&emsp;Orientações gerais:
                   </h4>
                    <br>
                    <h6 style="font-family: sans-serif">&emsp;
                    • Tomar durante o dia ao menos 2,4 litros de água <br>
                        &emsp;
                    • Tomar durante a manhã ao menos 500 ml de chá de hibisco c/ amora,<br>
                        &emsp;
                    chá verde com abacaxi ou camomila e hortelã ou chá de gengibre ou
                    chá de canela <br>
                        &emsp;
                    • Mastigar ao menos 20 vezes cada bolo alimentar <br>
                        &emsp;
                    • Não pule nenhuma refeição <br>
                        &emsp;
                    • Caso sinta qualquer desconforto favor informar a nutricionista.
                    </h6>
                    <br>
                   <h4 style="font-family: auto">&ensp;
                    Fernanda Caroline Fonseca - CRN8 9605
                    </h4>
                </div>
                <br>
                <button class="btn btn-success col-md-1" type="" onClick="this.style.visibility='hidden';window.print();">Gerar PDF</button>
            </div>
        </div>
        <br><br>
    </div>
@endsection




