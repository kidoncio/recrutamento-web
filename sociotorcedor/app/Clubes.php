<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clubes extends Model
{
    public $timestamps = false;

    public function socios()
    {
        return $this->hasMany('App\Socios');
    }
}
