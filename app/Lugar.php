<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lugar extends Model
{
    //
    protected $table      = 'lugar';
    protected $primaryKey = 'id_lugar';
    public $timestamps    = false;
    protected $fillable   = ['pais', 'ciudad', 'dueno'];
}
