<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Users as Authenticatable;

class Users extends Authenticatable
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'username', 'password'];
    protected $hidden = ['password'];
}
