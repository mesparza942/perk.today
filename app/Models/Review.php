<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'pr_review';
	protected $primaryKey = 'id_review';
	public $timestamps = false;
}
