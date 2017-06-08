<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    protected $table = 'pr_reservation';
	protected $primaryKey = 'id_reservation';
	public $timestamps = false;
	protected $fillable = ['id_owner', 'id_spot', 'id_rentee'];
}
