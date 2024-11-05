
  @extends('layouts.plantilla1')
    @section('titulo', 'Formulario de Clientes')
    @section('contenido')

    <center>
    <div class="mt-3" style="width: 50%">
        {{-- @dump($id) --}}
        @if (session('exito'))
            <x-Alert tipo="success">
                {{session('exito')}}
            </x-Alert>
        @endif

        <div class="card text-center">
            <div class="card-header">

              {{ __('Registro de Clientes') }}
            </div>

            <form action="{{route('procesarClientes')}}" method="POST">
                @csrf
                <div class="card-body ">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{__('Nombre')}}:</label>
                        <input type="text" class="form-control"  name="nombre" id="nombre" >
                        <small>{{$errors->first('nombre')}}</small>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">{{__('Apellido')}}:</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" >
                        <small>{{$errors->first('apellido')}}</small>

                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{__('Correo')}}:</label>
                        <input type="text" class="form-control" name="email" id="email" >
                        <small>{{$errors->first('email')}}</small>

                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">{{__('Telefono')}}:</label>
                        <input type="text" class="form-control" name="phone" id="phone" >
                        <small>{{$errors->first('phone')}}</small>

                    </div>
                </div>

                <div class="card-footer text-body-secondary">
                    <button class="btn btn-primary" type="submit">{{__('Guardar Cliente')}}</button>
          </form>
          </div>
        </div>
</center>
      </div>
      @endsection
