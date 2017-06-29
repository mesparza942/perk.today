<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contacto;

class FunctionsController extends Controller
{
    /**
    * Display a listing of the resource
    *
    * @return Response
    */
    public function create(Request $request){
        
        $html = 'Datos enviados !';
        $fname = $request['nombre'];
        $lname = $request['apellido'];
        $phone = $request['celular'];
        $mail = $request['mail']; 
        
        Contacto::create(['nombre_contacto' => $fname, 'apellido_contacto' => $lname, 'telefono_contacto' => $phone, 'email_contacto' => $mail]);
        
        return $html;
    }
}
