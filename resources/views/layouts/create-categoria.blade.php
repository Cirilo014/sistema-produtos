@extends('layouts.header-footer')
@section('conteudo')

<div class="col-md-7 col-lg-8">
    <h4 class="mb-3 col-12">Cadastrar Categoria</h4>
    <hr>
    
    <div class="container">
    <div class="row">
        
        @if(session('msg'))
            <p class="alert alert-success text-center">{{session('msg')}}</p>
        
        @endif

    </div>
</div>

    <form action="/salvar_categoria" method="POST" class="needs-validation" novalidate>
    @csrf    

         <div class="col-6">

        <label for="username"  class="form-label">Categoria</label>
        
            <div class="form-group">
                
                <input class="form-control" name="categoria" type="text">      
            
            </div>
            </div>

             <div class="form-group">
             <div class="col-6" style="margin-top: .2rem;">
            <input type="submit" class="btn btn-success" value="Salvar" style="margin: 3px;">

</div>
</div>
     
   

</div>

    </form>

@endsection