<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\probandoEnvios;
use Illuminate\Support\Facades\Mail;


class mailsController extends Controller
{
    public function store(Request $request){

        $request->validate([
            'Nombre' => 'required',
            'Apellido' => 'required',
            'Mail' => 'required',
            'Contenido' => 'requiered'
        ]);

        /*      mail      */
        Mail::to('sotelomati@gmail.com')->send(new probandoEnvios);


        return $request;
        //return 'procesando formulario';
    } 
}
