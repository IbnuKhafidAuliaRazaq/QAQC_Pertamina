<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sercom extends Model
{
    //

    protected $table = 'sercom';
    public $timestamps = false;

    public function reports()
    {
        $this->hasMany('App\Report');
    }
}
