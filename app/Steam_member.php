<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\Members;

class Steam_member extends Model
{
    protected $table = "steam_members";

    protected $fillable = ['id', 'friend_code', 'name'];

    // public function members() {
    // 	return $this->belongsTo('App\Members', 'member_id', 'id');
    // }
}
