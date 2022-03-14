
  @extends('layouts.header-footer')
  @section('conteudo')


  {{-- verifica não existe dados no DB--}}

    @if(count($produto) == 0)
    
    <p class="alert alert-danger text-center">Não existem dados armazenados</p>

    @else

    
  <table class="table table-hover" style="margin-top: 3.2rem;">
    <thead class="bg bg-danger" style="color: white;">
   
      <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Valor</th>     
      <th scope="col">Quantidade</th>
      <th scope="col">Categoria</th>
      <th scope="col">Descrição</th>      
      <th scope="col">Atualizado a</th>
      <th scope="col">Opções</th>

    </tr>    
  </thead>

  <tbody>

    
      @foreach($produto as $informacao)
      <tr>
          <td>{{ $informacao->id }}</td>          
          <td>{{ $informacao->nome }}</td>
          <td>{{ $informacao->valor }}</td>
          <td>{{ $informacao->quantidade }}</td>
          <td>{{ $informacao->categoria->categoria }}</td>
          <td>{{ $informacao->descricao }}</td>
          <td>{{ $informacao->updated_at->diffForHumans() }}</td>
          
    <td>
        <a href="editar/{{ $informacao->id }}" class="btn btn-secondary fa fa-edit"></a> 
        <a href="apagar/{{ $informacao->id }}" class="btn btn-danger fa fa-trash"></a>

    </td>
    </tr>

    @endforeach

  </tbody>

  @endif

</table>

@endsection
