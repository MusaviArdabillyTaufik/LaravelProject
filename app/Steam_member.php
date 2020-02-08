<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Steam_member extends Model
{
    protected $table = "steam_member";

    protected $fillable = ['users_id', 'steam_name', 'steam_id'];

    public function users() {
    	return $this->belongsTo('App\Users');
    }
}
