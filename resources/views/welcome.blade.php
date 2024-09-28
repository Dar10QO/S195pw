
        @extends('layouts.plantilla1')
        @section('welcome')
            <div style="margin-top:16%;" class="d-flex flex-column justify-content-center align-items-center text-center full height">
                <h1 class="display-1">Bienvenido Turista!</h1>
                <p>Presiona el boton para iniciar...</p>
                <a href="{{route('formulario')}}" class="btn btn-primary">Ir al registro</a>
            </div>
        @endsection
