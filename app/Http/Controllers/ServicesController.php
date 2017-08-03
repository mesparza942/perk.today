<?php

namespace App\Http\Controllers;

use App\Models\Spot;

class ServicesController extends Controller
{
    //
    public function index() //MUESTRA LAS MASCOTAS DE UN DUENO

    {
        $spots = Spot::get();
        return $spots;
    }
}
