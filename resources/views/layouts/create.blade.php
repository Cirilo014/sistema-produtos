    @extends('layouts.header-footer')
    @section('conteudo')

    <div class="col-md-7 col-lg-8">
    <h4 class="mb-3 col-12">Cadastrar Produto</h4>
    <hr>
    
    <div class="container">
        <div class="row">
            
            @if(session('msg'))
                <p class="alert alert-success text-center">{{session('msg')}}</p>
            @endif
        </div>


    </div>
    <form action="/salvar"  method="POST" class="needs-validation" novalidate>
        @csrf
        <div class="col-12">
            <label for="username"  class="form-label">Nome</label>
            <div class="input-group">
                <input type="text" class="form-control" name="nome" id="username" placeholder="Digite o nome do produto" required>
            </div>
         </div>
         
        <div class="row g-3 col-12">
            <div class="col-sm-6">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" class="form-control" name="valor" id="valor" placeholder="Informe o valor" value="" required>
            </div>
        </div>

            <div class="col-sm-6">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="text" class="form-control" name="quantidade" id="quantidade" placeholder="Informe a quantidade" value="" required>
            </div>
        </div>

        <div class="col-8">
        <div class="form-group">
            <label class="form-label" for="">Categoria</label>
            <select class="form-control" name="categoria" id="">
                @foreach($categoria as $categorias)
                <option value="{{ $categorias->id_categoria }}">{{$categorias->categoria}}</option>
                @endforeach

            </select>
                   
        </div>
        </div>
  


        <div class="col-8">
            <label for="descricao" class="form-label">Descrição </label>
            <textarea type="text" name="descricao" id="descricao" class="form-control" ></textarea>
        </div>

		<div class="form-group">
                <div class="col-sm-2 col-sm-offset-3">
                    <input type="submit" class="btn btn-primary" value="Salvar" style="margin: 3px;">
        
        </div>
        </div>

    </form>
</div>
@endsection