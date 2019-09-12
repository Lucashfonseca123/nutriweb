<html>
<head>
</head>
        <body>
            <form action="/testar_consulta" method="post">
                        {{csrf_field()}}
                            <div class="form-group col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="pessoas" name="busca" placeholder="Digite aqui..." aria-label="Recipient's username" aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <span>
                                            <button class="btn btn-primary" value="busca" type="submit">Busca</button> &ensp;&ensp;
                                        </span> 
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div>
                        @if(isset($lista_nome))             {{--Se a variavel foi previamente definida--}}
                          @foreach($lista_nome as $nome_buscado)
                                  {{$nome_buscado->nome}}
                          @endforeach
                        @endif
        </body>
</html>