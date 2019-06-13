@extends('layouts.pop_up')
@section('title', 'Nutriweb')
@section('content')
    <main class="page-content">
        <div class="container mt-4   card-header">
            <h2>Informação nutricional: </h2>
            <img class="logo" src="img/logo.png">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Alimento</th>
                    <th scope="col">Quantidade calórica (Kcal)</th>
                    <th scope="col">Sódio (mg)</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" >1</th>
                    <td>Macarrão</td>
                    <td>1550</td>
                    <td>370</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Feijão</td>
                    <td>791</td>
                    <td>420</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Leite</td>
                    <td>659</td>
                    <td>200</td>
                </tr>
                </tbody>
            </table>
        </div>
    </main>
    <!-- page-content" -->
@endsection

