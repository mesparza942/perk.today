<?php

namespace App\Http\Controllers;

use App\Lugar;
use Illuminate\Http\Request;

class LugaresController extends Controller
{
    //
    public function create(Request $request) //LUGAR DEL DUEñO PARA UBICAR MASCOTAS POR SU UBICACION

    {
        $pais  = $request['pais'];
        $city  = $request['ciudad'];
        $dueno = $request['dueno'];

        $lugar = Lugar::create(['pais' => $pais, 'ciudad' => $city, 'dueno' => $dueno]);

        return true;
    }
}
