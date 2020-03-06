<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Steam_member;

class Members extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'code', 'rank', 'avatar', 'id_user', 'id_steam'];

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }
    public function steam_member(){
    	return $this->belongsTo('App\Steam_member', 'id_steam', 'id');
    }
}
