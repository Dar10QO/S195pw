
@extends('layouts.plantilla1')
    @section('titulo', 'Componentes Blade')
    @section('contenido')
            <x-Card encabezado="Hola S195" titulo="Titulo1" textoBoton="Guardar">
                Prueba Slot Para Contenido
            </x-Card>

            <x-Card encabezado="Nuevo Card" titulo="Titulo2" textoBoton="Guardar 2">
                Prueba Slot Para Contenido 2
            </x-Card>

            <x-Alert tipo="success">
                Terminado
            </x-Alert>

            <x-Alert tipo="primary">
                En progreso
            </x-Alert>
    @endsection
