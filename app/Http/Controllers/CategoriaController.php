<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
  
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('layouts.create-categoria');
    }

    
    public function store(Request $request)
    {
        $category = new Categoria;
        $category->categoria = $request->categoria;
        $category->save();

        return redirect ('/nova_categoria')->with('msg', 'categoria salva!');


    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
