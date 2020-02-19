<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Members;

class Steam_member extends Model
{
    protected $table = "steam_member";

    protected $fillable = ['member_id', 'steam_name', 'steam_id'];

    public function members() {
    	return $this->belongsTo('App\Members', 'member_id', 'id');
    }
}
