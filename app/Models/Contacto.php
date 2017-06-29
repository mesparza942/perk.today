<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //
    protected $table = 'pr_contacto';
	protected $primaryKey = 'id_contacto';
	public $timestamps = false;
	protected $fillable = ['nombre_contacto', 'apellido_contacto', 'telefono_contacto', 'email_contacto'];
}
