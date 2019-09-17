<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class ProdutoController extends Controller
{
     public function index()
    {
        $produtos = \App\Produto::get();
        return view('produto.index', compact('produtos'));
    }

    public function create()
    {
        $categoria = \App\Categoria:: get();
       return view('produto.create',compact('categoria'));
    }

    public function store(Request $request)
    {
        $produto = new \App\Produto();
        $produto->codcat = $request->get('codcat');
        $produto->nompro = $request->get('nompro');
        $produto->despro = $request->get('despro');
        $produto->vlrpro = $request->get('vlrpro');
        $produto->save();
        
        return redirect('/produto')->with('msg', 'Produto cadastrado com sucesso !!!');
    }

    public function show()
    {
       
    }

    public function edit($codpro)
    {
         $produto = \App\Produto:: find($codpro);  // find = busca no banco de dados e faz o que se pede
         
         return view('produto.edit', compact('produto')); // COMPACT passa as variaveis para a view.
    }
    
    public function update(Request $request, $codpro)
    {
       $produto = \App\Produto::find($codpro);  // find = busca no banco de dados e faz o que se pede
       $produto->codcat = $request->get('codcat');
       $produto->nompro = $request->get('nompro');
       $produto->despro = $request->get('despro');
       $produto->vlrpro = $request->get('vlrpro');
       $produto->save();
        
        return redirect('/produto')->with('msg', 'Produto alterado com sucesso !!!');
    }

    
    public function destroy($codpro)
    {
       $produto = \App\Produto:: find($codpro); // find = busca no banco de dados e faz o que se pede
         $produto->delete();
         return redirect('/produto')->with('msg', 'Produto eliminado !!!');
    }
}
