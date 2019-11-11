@extends('layouts.pop_up')
@section('content')
    <br><br>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h3>Cardápio <br><br></h3>
                <img class="logo9" src="\img\logo.png">
                <h4>Paciente:    </h4>
            </div>
            {{--@if(isset($cardapio))--}}
                {{--@forelse($cardapio as $elementos)--}}
                <div class="container mt-4 ">
                    <table class="table menu" style="table-layout: fixed">
                        <thead>
                        <tr>
                            <th scope="col">Horário</th>
                            <th scope="col">Opção 1</th>
                            <th scope="col">Opção 2</th>
                        </tr>
                        </thead>
                        <tr>
                            <tbody>
                           <td>aksjdhs</td>
                            <td>Aqui tem algo </td>
                            <td></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                {{--@endforelse--}}
            {{--@endif--}}
            <button class="btn btn-success col-md-1" type="" onClick="window.print()">Gerar PDF</button>
        </div>

    </div>
@endsection




