<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
    protected $table = 'pr_owner';
	protected $primaryKey = 'id_owner';
	public $timestamps = false;
}
