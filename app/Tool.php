<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    //
    protected $table = 'tool';
    public $timestamps = false;

    public function division()
    {
        return $this->belongsTo('App\Division', 'division_id');
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }
}
