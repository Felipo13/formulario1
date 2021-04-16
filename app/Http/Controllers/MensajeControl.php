<?php

namespace App\Http\Controllers;

use App\Mail\Recibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MensajeControl extends Controller
{
    public function store(){

        $mensaje = request()->validate([
            'nombre' => 'required|min:3|max:25',
            'paterno' => 'required',
            'materno' => 'required',
            'correo' => '',
            'carrera' => ''   
        ], [
            'nombre.required' => 'Por favor ingresa tu nombre'
        ]);

        Mail::to('psycho.1359@gmail.com')->queue(new Recibido($mensaje));
        

        return "Mensaje enviado";

    }
}
