@extends('layouts.pop_up')
@section('content')
    <br>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
        <img src="img/logo.png" style="width: 50px; float: right">
        <table class="tabela">
            <thead>
    {{--        <th>Id</th>--}}
            <th>Categoria</th>
            <th>Descrição alimento</th>
            <th>Umidade</th>
            <th>Energia (Kcal)</th>
            <th>Energia (Kj)</th>
            <th>Proteína</th>
            <th>Lipideos</th>
            <th>Colesterol</th>
            <th>Carboidratos</th>
            <th>Fibra alimentar</th>
            <th>Calcio</th>
            <th>Magnésio</th>
            <th>Manganes</th>
            <th>Fósforo</th>
            <th>Ferro</th>
            <th>Sódio</th>
            <th>Potássio</th>
            <th>Cobre</th>
            <th>Zinco</th>
            <th>Retinol</th>
            <th>Tiamina</th>
            <th>Riboflavina</th>
            <th>Piridoxina</th>
            <th>Niacina</th>
            <th>Vitamina C</th>
            {{--<th>Create at</th>--}}
            {{--<th>Update</th>--}}
            </thead>
            <tbody>
            @foreach($teste as $nome_buscado)
                <tr>
    {{--                <td> {{$nome_buscado->id}}</td>--}}
                    <td> {{$nome_buscado->categoria}}</td>
                    <td> {{$nome_buscado->descricaoAlimento}}</td>
                    <td> {{ number_format($nome_buscado->umidade, 2, ',', '.') }}</td>
    {{--                <td> {{$nome_buscado->umidade}}</td>--}}
                    <td> {{$nome_buscado->energiaKcal}}</td>
                    <td> {{$nome_buscado->energiaKj}}</td>
                    <td> {{$nome_buscado->proteina}}</td>
                    <td> {{$nome_buscado->lipideos}}</td>
                    <td> {{$nome_buscado->coleterol}}</td>
                    <td> {{$nome_buscado->carboidrato}}</td>
                    <td> {{$nome_buscado->fibraAlimentar}}</td>
                    <td> {{$nome_buscado->calcio}}</td>
                    <td> {{$nome_buscado->magnesio}}</td>
                    <td> {{$nome_buscado->manganes}}</td>
                    <td> {{$nome_buscado->fosforo}}</td>
                    <td> {{$nome_buscado->ferro}}</td>
                    <td> {{$nome_buscado->sodio}}</td>
                    <td> {{$nome_buscado->potassio}}</td>
                    <td> {{$nome_buscado->cobre}}</td>
                    <td> {{$nome_buscado->zinco}}</td>
                    <td> {{$nome_buscado->retino1}}</td>
                    <td> {{$nome_buscado->tiamina}}</td>
                    <td> {{$nome_buscado->riboflavina}}</td>
                    <td> {{$nome_buscado->piridoxina}}</td>
                    <td> {{$nome_buscado->niacina}}</td>
                    <td> {{$nome_buscado->vitaminaC}}</td>
                    {{--<td> {{$nome_buscado->created_at}}</td>--}}
                    {{--<td> {{$nome_buscado->update_at}}</td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        </div>  
</div>
<script>
    $(document).ready( function () {
        $('.tabela').DataTable();
    });
</script>
</html>
<br>
@endsection




