<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dueno extends Model
{
    //
    protected $table      = 'dueno';
    protected $primaryKey = 'id_dueno';
    public $timestamps    = false;
    protected $fillable   = ['correo', 'nombre', 'contrasena'];
}
