@extends('layouts.plantilla1')
  @section('titulo', 'Clientes')

  @section('clientes_card')

  <div class="container mt-5 col-md-8">
    <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
            Dario Quintero
        </div>

        <div class="card-body">
            <h5 class="fw-bold">ldario.quintero10@gmail.com</h5>
            <h5 class="fw-medium">35213804447</h5>
            <p class="card-text fw-lighter"></p>
        </div>

        <div class="card-footer text-muted">
            <button type="submit" class="btn btn-warning btn-sm "> Actualizar</button>
            <button type="submit" class="btn btn-danger btn-sm "> Eliminar</button>
        </div>

    </div>
    <div class="card text-justify mt-5 font-monospace">

      <div class="card-header fs-5 text-primary">
          Luis Quintero
      </div>

      <div class="card-body">
          <h5 class="fw-bold">luis.quintero10@gmail.com</h5>
          <h5 class="fw-medium">35213804447</h5>
          <p class="card-text fw-lighter"></p>
      </div>

      <div class="card-footer text-muted">
          <button type="submit" class="btn btn-warning btn-sm "> Actualizar</button>
          <button type="submit" class="btn btn-danger btn-sm "> Eliminar</button>
      </div>

  </div>
</div>
  @endsection
