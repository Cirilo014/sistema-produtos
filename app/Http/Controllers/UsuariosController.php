<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuarios;

class UsuariosController extends Controller
{
    /* Apresentar o formulário de login*/
   
    public function index()
    {
        return view('authentication');

    }

    public function create(){
        return view('layout-log.create-login');
    }

    public function recoverpassword(){
        return view('layout-log.recover');
    }

    public function logando(Request $request){

  
    
        }
      
    // Encriptação da senha
      
        /* 
        // Verificar os inputs
       $this->validate($request, [ 
        'usuario' => 'required | alpha', 
        'senha' => 'required | min:8'


       ]);  
        return 'Validado';
        */
    


    public function CreateUser(){

        
        $novo = new Usuarios;
        $novo->usuario = 'liro';
        $novo->senha = Hash::make('liro');
        $novo->email = 'liro@outlook.com';

        $novo->save();

        return('usuário inserido na BD com sucesso..');


    }
}
