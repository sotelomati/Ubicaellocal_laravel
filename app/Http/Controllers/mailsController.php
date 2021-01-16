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
        Mail::to($request->input('Mail'))->send(new probandoEnvios($request));


      //  return $request;
        //return 'procesando formulario';
    } 
}
