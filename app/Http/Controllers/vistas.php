<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistas extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function clientes()
    {
        return view('clientes');
    }

    public function procesarClientes(Request $peticion)
    {
        // return 'Llego tu formulario al controlador';
        // return $peticion->all();

        //redireccion con mensaje en sesion

        // return $peticion->path();
        // return $peticion->url();
        // return $peticion->ip();

        //Esta funciona para el redireccionamiento a la ruta en especifico:
            // return redirect('/');

            //Esta funciona para el redireccionamiento al igual que la anterior, pero atraves del nombre de la ruta:
            // return redirect()->route('clientes');

            //redirección al origen de la petición:
            // return back();

            //redireccionamiento con valores del usuario
            // $id = [['usuario' => 1], ['usuario' => 2]];


            $validacion = $peticion->validate([
                'nombre'=>'required|min:3|max:255',
                'apellido'=>'required|min:3|max:255',
                'email'=>'required|email:rfc,dns',
                'phone'=>'required|min:3|max:255'
            ]);

            $usuario = $peticion->input('phone');

            session()->flash('exito', 'Se guardo el usuario: '.$usuario);

        return to_route('formulario');
    }
}
