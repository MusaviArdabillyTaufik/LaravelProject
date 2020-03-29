<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Csgos extends Model
{
    protected $table = 'csgos';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'main_role1', 'main_role2', 'main_role3', 'tactical_role1', 'tactical_role2', 'tactical_role3', 'rank',  'friend_code', 'server_region'];

    public function Members(){
        return $this->hasOne('App\Members', 'id');
    }
}
