<?php

namespace App\Http\Controllers;

use App\Dueno;
use Illuminate\Http\Request;

class DuenosController extends Controller
{
    //
    /**
     * Display a listing of the resource
     *
     * @return Response
     */
    public function create(Request $request) // INGRESA UN NUEVO USUARIO FUTURO DUENO DE MASCOTA

    {
        $mail = $request['correo'];
        $name = $request['nombre'];
        $pass = $request['contrasena'];

        $dueno = Dueno::create(['correo' => $mail, 'nombre' => $name, 'contrasena' => $pass]);

        return $dueno;
    }
}
