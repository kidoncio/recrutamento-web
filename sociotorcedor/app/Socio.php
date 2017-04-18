<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Socio extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function clube()
    {
        return $this->belongsTo('App\Clube');
    }
}
