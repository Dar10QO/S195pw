<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<style>
    body, html {
        height: 100%;
    }
    .full-heigth{
        height: 100vh;
    }
</style>
<body>

    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
            <a class="navbar-brand text-white fs-3 fw-bold" href="{{route('welcome')}}">
                <img src="{{asset('img/logo.png')}}" style="background: white; padding:2%; border-radius:100%; ">
                Turistas sin Maps
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-white">
              <li class="nav-item text-end">
                <a class="nav-link active text-white {{ request()->routeIs('formulario')?'border-bottom border-white':'' }}" aria-current="page" href="{{route('formulario')}}">Registro de Clientes</a>
              </li>

              <li class="nav-item">
                <a class="nav-link  text-white {{ request()->routeIs('clientes')?'border-bottom border-white':'' }}" href="{{route('clientes')}}">Consultar Clientes</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      @yield('contenido')

      @yield('welcome')

      @yield('clientes_card')

</body>
</html>
