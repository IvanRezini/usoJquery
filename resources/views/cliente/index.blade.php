<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Listar/Editar Cliente</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script>
            window.onload = function (){
            @if (session()->get('msg'))
                    alert('{{session()->get('msg')}}');
            @endif
            };
        </script>

    </head>
    <body style="background: #EEE">

        
        <br/><a href="{{ url('/') }}">Página Inicial</a><br/><br/>
        <br/> <a href="{{route('cliente.create')}}">Adicionar Cliente</a><br/><br/>


        <!-- Listagem de clientes -->  
        <div style="text-align: center">
 
        <table style="width: 70%;" >
            <thead>
                <tr style="background: #BEE9EA">
                    <td>Cód. </td>
                    <td>Nome </td>
                    <td>Cpf </td>
                    <td>Endereço </td>
                    <td>Número </td>
                    <td>Bairro </td>
                    <td>Cidade </td>
                    <td >Estado </td>
                    <td>Telefone </td>
                    <td>Ação </td>
                </tr> 
            </thead>
            <tbody > 
                @foreach ($clientes as $cli)
                <tr style="background: #BCD42A">
                    <td>{{$cli->codcli}}</td>
                    <td>{{$cli->nomcli}}</td>
                    <td>{{$cli->cpfcli}}</td>
                    <td>{{$cli->endcli}}</td>
                    <td>{{$cli->numcli}}</td>
                    <td>{{$cli->baicli}}</td>
                    <td>{{$cli->cidcli}}</td>
                    <td>{{$cli->ufcli}}</td>
                    <td>{{$cli->telcli}}</td>
                    
                    <td style="text-align: center; background: #9ba2ab;">
                        
                        <button onclick="location.href='{{route('cliente.edit', $cli->codcli)}}'" style="font-size: 80%; width: 90%;" type="button">Editar</button></br>
                        
                        <form action="{{route('cliente.destroy', $cli->codcli)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="font-size: 80%; width: 90%;">Excluir</button>
                            
                        </form>
                    </td>
                </tr> 
                @endforeach
            </tbody>
       
    </table>
                
        </div>
</body>
</html>


