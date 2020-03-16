<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Csgos extends Model
{
    protected $table = 'csgos';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'main_role', 'tactical_role', 'rank', 'server_region'];

    public function Members(){
        return $this->hasOne('App\Members', 'id');
    }
}
