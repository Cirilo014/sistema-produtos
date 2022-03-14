<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutosController extends Controller
{
   
    /* Método usado para chamar 
    o form de criação do produto
     */
    
    public function create(){

        $categoria = Categoria::all();
        return view('layouts.create', compact('categoria'));
    }

    /* 
    Método para salvar os dados no BD
    */
    public function store(Request $request){

        /* Criando uma variável que
         receba os dados da model: (produtos) 
         */
        $dados = new Produto;

        $dados->nome = $request->nome;
        $dados->valor = $request->valor;
        $dados->quantidade = $request->quantidade;
        $dados->id_categoria = $request->categoria;
        $dados->descricao = $request->descricao;
        $dados->save();

        //return redirect ('/listar');
        return redirect ('/novo')->with('msg', 'produto cadastrado!');


    }


    /* 
    Método para mostrar todos
    os dados do BD
    */
    public function show(){

        $produto = Produto::all();
        return view('layouts.listar', compact('produto'));
    }

    
    /* 
    Método para editar regitos    
    */

    public function edit($id){

        $informacao = Produto::find($id);
        return view('layouts.editar', compact('informacao'));

    }

    /*
    Método para atualizar
    */
    public function update(Request $request, $id){

        $informacao = Produto::find($id);

        $informacao->nome = $request->nome;
        $informacao->valor = $request->valor;
        $informacao->quantidade = $request->quantidade;
        $informacao->descricao = $request->descricao;

        $informacao->save();
        
        return redirect('listar');

    }

    /* 
    Método para apagar dados no DB

    */

    public function destroy($id){

        Produto::destroy($id);
        return redirect('/listar');
    }



    
}
