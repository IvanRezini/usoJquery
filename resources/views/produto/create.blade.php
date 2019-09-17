<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro Produto</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <br/><a href="{{ url('/produto') }}">Voltar</a><br/><br/>
        <br/><a href="{{ url('/') }}">Página Inicial</a><br/><br/>
        <h3 style="width: 0%;padding: 10px; display: table; margin: auto">Cadastrar Produto</h3></br></br>

        <form action="{{route('produto.store')}}" method="post" style="width: 0%;padding: 10px; display: table; margin: auto">

            @csrf <!--para evitar envio de formularios atraves de outras pessoas ao site-->

            <label for='codcat'>Cód. Categoria</label><br/>
            <select name="codcat" id="codcat">
                <option>Categoria</option>
                @foreach ($categoria as $cat)
                <option  value="{{$cat->codcat}}">{{$cat->nomcat}}</option>
              
                @endforeach
            </select> <br/><br/>          

            <label for='nompro'>Nome do produto</label><br/>
            <input type="text" name="nompro" id="nompro"/><br/><br/>

            <label for='despro'>Descrição</label><br/>
            <input type="text" name="despro" id="despro"/><br/><br/>

            <label for='vlrpro'>Valor</label><br/>
            <input type="text" name="vlrpro" id="vlrpro"/><br/><br/>

            <button type="submit" style="width: 50%;padding: 10px; display: table; margin: auto">Adicionar</button>

        </form></br>

    </body>
</html>

