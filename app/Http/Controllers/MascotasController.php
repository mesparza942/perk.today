<?php

namespace App\Http\Controllers;

use App\Mascota;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    //
    /**
     * Display a listing of the resource
     *
     * @return Response
     */
    public function create(Request $request) //INGRESA UNA MASCOTA CON SU DUEñO

    {
        $name  = $request['nombre'];
        $race  = $request['raza'];
        $age   = $request['edad'];
        $dueno = $request['dueno'];

        $mascota = Mascota::create(['nombre' => $name, 'raza' => $race, 'edad' => $age, 'dueno' => $dueno]);

        return $mascota;
    }

    public function show(Request $request) //MUESTRA LAS MASCOTAS DE UN DUENO

    {
        $dueno    = $request['dueno'];
        $mascotas = Mascota::where('dueno', $dueno)->first();
        return $mascotas;
    }

    public function store() //MUESTRA TODAS LAS MASCOTAS DE LA BASE

    {
        $todasmascotas = Mascota::get();
        return $todasmascotas;
    }
}
