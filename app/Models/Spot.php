<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    //
    protected $table      = 'spot';
    protected $primaryKey = 'id_spot';
    public $timestamps    = false;
    protected $fillable   = ['address_spot', 'latitud_spot', 'longitud_spot', 'tipo_spot', 'quantity_spot', 'schedule_spot', 'time_spot', 'cost_spot', 'detail_spot', 'accessmethod_spot', 'password_spot', 'id_owner'];
}
