<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Socios extends Model
{
    public $timestamps = false;

    public function clube()
    {
        return $this->belongsTo('App\Clubes');
    }
}
