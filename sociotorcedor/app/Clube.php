<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clube extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function socios()
    {
        return $this->hasMany('App\Socio');
    }
}
