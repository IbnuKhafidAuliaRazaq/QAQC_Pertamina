<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    //
    protected $table = 'division';
    public $timestamps = false;

    public function tools()
    {
        return $this->hasMany('App\Tool');
    }
}
