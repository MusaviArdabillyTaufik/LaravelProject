<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';
    protected $primaryKey = 'id';

    protected $fillable = ['name', 'code', 'rank', 'avatar'];

}
