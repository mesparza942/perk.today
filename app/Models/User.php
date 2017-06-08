<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    //
    protected $table = 'pr_user';
	protected $primaryKey = 'id_user';
	public $timestamps = false;
}
