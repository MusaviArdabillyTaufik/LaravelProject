<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'nim', 'faculty', 'filename'];

    public function steam_member(){
    	return $this->hasOne('App/Steam_member');
    }
}
