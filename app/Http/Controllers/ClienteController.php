<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function index()
    {
        $clientes = \App\Cliente::get();
        
        return view('cliente.index', compact('clientes'));
    }

    public function create()
    {
       return view('cliente.create');
    }

    public function store(Request $request)
    {
        $cliente = new \App\Cliente();
        $cliente->codcli = $request->get('codcli');
        $cliente->nomcli = $request->get('nomcli');
        $cliente->cpfcli = $request->get('cpfcli');
        $cliente->endcli = $request->get('endcli'); 
        $cliente->numcli = $request->get('numcli');
        $cliente->baicli = $request->get('baicli'); 
        $cliente->cidcli = $request->get('cidcli');
        $cliente->ufcli = $request->get('ufcli');
        $cliente->telcli = $request->get('telcli');
        $cliente->save();
        
        return redirect('/cliente')->with('msg', 'Cliente cadastrado com sucesso !!!');
    }


    public function edit($codcli)
    {
         $cliente = \App\Cliente:: find($codcli);  // find = busca no banco de dados e faz o que se pede
         
         return view('cliente.edit', compact('cliente')); // COMPACT passa as variaveis para a view.
    }
    
    public function update(Request $request, $codcli)
    {
       $cliente = \App\Cliente::find($codcli);  // find = busca no banco de dados e faz o que se pede
       $cliente->nomcli = $request->get('nomcli');
       $cliente->cpfcli = $request->get('cpfcli');
       $cliente->endcli = $request->get('endcli'); 
       $cliente->numcli = $request->get('numcli');
       $cliente->baicli = $request->get('baicli'); 
       $cliente->cidcli = $request->get('cidcli');
       $cliente->ufcli = $request->get('ufcli');
       $cliente->telcli = $request->get('telcli');
       
       $cliente->save();
        
        return redirect('/cliente')->with('msg', 'Cliente alterado com sucesso !!!');
    }

    
    public function destroy($codcli)
    {
       $cliente = \App\Cliente:: find($codcli); // find = busca no banco de dados e faz o que se pede
         $cliente->delete();
         return redirect('/cliente')->with('msg', 'Cliente eliminado !!!');
    }
}
