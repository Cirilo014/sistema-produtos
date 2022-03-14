<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sistema de produtos</title>

    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.min.css')}}">
</head>
<body>
    
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">UNIBELAS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item">
                        <a class="nav-link btn-primary" href="/novo" style="color: white;">Novo</a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="/listar" style="color: white;">Produtos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/nova_categoria" style="color: white;">Categorias</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="color: white;">Utilizador</a>
                    </li>

                </ul>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search" style="margin-right: 4px;">
                    <button class="btn btn-outline-success"  type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>   

    <div class="container">

        @yield('conteudo')
       
    </div>
<!-- Footer -->
<div class="container">
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: #0000000d;">
    © {{ date ("Y") }} Copyright: <span>Todos os direitos reservados</span>
  </div>
  <!-- Copyright -->
</footer>
</div>
<!-- Footer -->


</body>
</html>