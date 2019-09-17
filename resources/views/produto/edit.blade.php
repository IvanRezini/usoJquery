<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Atualizar Produto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
       <br/><a href="{{ url('/produto') }}">Voltar</a><br/><br/>
       <br/><a href="{{ url('/') }}">Página Inicial</a><br/><br/>
       <h3 style="width: 0%;padding: 10px; display: table; margin: auto">Atualizar dados do Produto: {{$produto->nompro}}</h3>
        
        <form action="{{route('produto.update', $produto->codpro)}}" method="post" style="width: 0%;padding: 10px; display: table; margin: auto">
            @csrf <!--para evitar envio de formularios atraves de outras pessoas ao site-->
            @method('patch')

            <label for='codcat'>Cód. Categoria</label><br/>
            <select name="codcat" id="codcat">
                <option>Categoria</option>}
                 @foreach ($categoria as $cat)
                <option  value="{{$cat->codcat}}">{{$cat->nomcat}}</option>
              
                @endforeach
            </select> <br/><br/> 
            
            <label for='nompro'>Nome do Produto</label><br/>
            <input type="text" name="nompro" id="nompro" value="{{$produto->nompro}}"/><br/><br/>
            
            <label for='despro'>Descrição</label><br/>
            <input type="text" name="despro" id="despro" value="{{$produto->despro}}"/><br/><br/>
            
            <label for='vlrpro'>Valor</label><br/>
            <input type="text" name="vlrpro" id="vlrpro" value="{{$produto->vlrpro}}"/><br/><br/>
                        
            <button type="submit" style="width: 50%;padding: 10px; display: table; margin: auto">Salvar</button>
           
        </form>
    </body>
</html>



