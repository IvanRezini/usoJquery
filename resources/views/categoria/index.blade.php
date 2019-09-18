<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar/Listar Categoria</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
        </script>

    </head>
    <body>
        <script>
            function eliminarCategoria(idForm, destino){
                
                dadosForm = $('#'+idForm).serialize();
                $.ajax({
                    method: 'post',
                    url: destino,
                    data: dadosForm,
                    dataType: 'html',
                    success: function (data) {
                        //Açao de sucessso
                        if(data == 'true'){
                        $('#linha'+idForm).remove();
                    }
                    else{
                        alert('Nao foi posivel eliminar a categoria');
                    }
                        
                    },
                    error: function (argument) {
                        //Açaõ de erro
                        alert('Erro ao eliminar a categoria');
                    }
                });
                return false;
                
            }
        </script>
        
        <br/><a href="{{ url('/') }}">Página Inicial</a><br/><br/>
        </br></br><a href="{{route('categoria.create')}}">Adicionar Categoria</a></br></br>
        <div style="text-align: center">
            <!-- Listagem de categorias -->   
            <table style="width: 40%;">
                <thead>
                    <tr style="background: #BEE9EA">
                        <td>Cód.</td>
                        <td>Nome</td>
                        <td>Ação</td>
                    </tr> 
                </thead>
                <tbody>
                    @foreach ($categorias as $c)
                    <tr style="background: #9ba2ab" id="linhadel{{$c->codcat}}">
                        <td>{{$c->codcat}}</td>
                        <td>{{$c->nomcat}}</td>
                        <td>
                            <button onclick="location.href ='{{route('categoria.edit', $c->codcat)}}'" style="font-size: 80%; width: 60%;" type="button">Editar</button></br>

                            <form onsubmit="return eliminarCategoria('del{{$c->codcat}}', '{{route('categoria.destroy', $c->codcat)}}');" id="del{{$c->codcat}}" action="{{route('categoria.destroy', $c->codcat)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="font-size: 80%; width: 60%;">Excluir</button>

                            </form>
                        </td> 
                    </tr>

                    @endforeach
                </tbody>

            </table>
        </div>
    </body>

</html>

