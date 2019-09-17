<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Atualizar Categoria</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <br/><a href="{{ url('/categoria') }}">Voltar</a><br/><br/>

        <br/><a href="{{ url('/') }}">Página Inicial</a><br/><br/>
        
     <h3 style="width: 0%;padding: 10px; display: table; margin: auto">Atualizar Categoria: {{$categoria->nomcat}}</h3>
        
        <form action="{{route('categoria.update', $categoria->codcat)}}" method="post" style="width: 0%;padding: 10px; display: table; margin: auto">
            @csrf <!--para evitar envio de formularios atraves de outras pessoas ao site-->
            @method('patch')
            
            
            <label for='nomcat'>Nome da categoria</label><br/>
            <input type="text" name="nomcat" id="nomcat" value="{{$categoria->nomcat}}"/><br/><br/>
            <button type="submit" style="width: 50%;padding: 10px; display: table; margin: auto">Salvar</button>
           
        </form> 
        
        
    </body>
</html>


