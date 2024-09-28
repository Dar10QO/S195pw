
  @extends('layouts.plantilla1')
    @section('titulo', 'Formulario de Clientes')
    @section('contenido')

    <center>
    <div class="mt-3" style="width: 50%">
        <div class="card text-center">
            <div class="card-header">
              Registro de Clientes
            </div>

            <form action="" >
              <div class="card-body ">
                  <div class="mb-3">
                      <label for="nombre" class="form-label">Nombre:</label>
                      <input type="text" class="form-control" id="nombre" >
                  </div>
                  <div class="mb-3">
                      <label for="apellido" class="form-label">Apellido:</label>
                      <input type="text" class="form-control" id="apellido" >
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Correo:</label>
                      <input type="text" class="form-control" id="email" >
                  </div>
                  <div class="mb-3">
                      <label for="email" class="form-label">Telefono:</label>
                      <input type="text" class="form-control" id="email" >
                  </div>
              </div>

              <div class="card-footer text-body-secondary">
                  <button class="btn btn-primary" type="submit">Enviar</button>
          </form>
          </div>
        </div>
</center>
      </div>
      @endsection
