@extends('layout-log.login')

{{-- Formulário de login --}}

@section('content')
    
<div class="row">    
    <div class="col-md-3 col-md-offset-5">
        <img src="{{asset("images/unknow.png")}}" class="img-responsive text-center" alt="" style="margin-top: 25px;">
    </div>
    </div>


        <div class="row">
            <div class="col-md-4 col-md-offset-4 ">

                {{-- Apresentação de erros--}}
        
                    
                    <form method="POST" action="" >
                    
                    @csrf
        
                    <div class="form-group caixa">
                        <label for="usuario">Usuário:</label>
                        <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Nome de usuário">
                    </div>
                    
        
                    <div class="form-group caixa">
                        <label for="usuario">Senha:</label>
                        <input class="form-control" type="password" name="usuario" id="usuario" placeholder="Senha">
                    </div>
        
                    {{-- BOTÃO --}}
                    <div class="text-center caixa">
                        <button class="btn btn-primary form-control">Entrar</button>
                                
                        <div class="link">
                        <a href="/recuperar">Recuperar senha</a>
                        <a href="/criar">Criar uma nova conta</a> 
        
                      </div>          
                    
                    </form>

        </div>

       
        </div>
    </div>



</div>

@endsection