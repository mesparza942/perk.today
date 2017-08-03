<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    //
    protected $table      = 'mascota';
    protected $primaryKey = 'id_mascota';
    public $timestamps    = false;
    protected $fillable   = ['nombre', 'edad', 'raza', 'dueno'];
}
