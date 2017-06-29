<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'pr_user';
    protected $primaryKey = 'id_user';

    protected $fillable = [
        'id_user','firstname_user', 'lastname_user', 'socialname_user', 'e-mail_user', 'password_user' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password' ];
    //

	
	public $timestamps = false;

}
