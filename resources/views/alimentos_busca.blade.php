@extends('layouts.pop_up')
@section('content')
    <br>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
        <img src="img/logo.png" style="width: 50px; float: right">
        <table class="tabela">
            <thead>
    {{--    <th>Id</th>--}}
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
                    <td> {{number_format((float)$nome_buscado->umidade, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->energiaKcal, 2,",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->energiaKj, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->proteina, 2, ",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->lipideos, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->coleterol, 2, ",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->carboidrato, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->fibraAlimentar, 2, ",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->calcio, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->magnesio, 2, ",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->manganes, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->fosforo, 2, ",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->ferro, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->sodio, 2, ",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->potassio, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->cobre, 2, ",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->zinco, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->retion1, 2, ",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->tiamina, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->riboflavina, 2, ",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->piridoxina, 2, ",", ".") }}</td>
                    <td> {{number_format((float)$nome_buscado->niacina, 2, ",", ".")}}</td>
                    <td> {{number_format((float)$nome_buscado->vitaminaC, 2, ",", ".")}}</td>


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




