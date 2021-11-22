<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    //
    protected $table = 'tool_report';
    // public $timestamps = false;
    public function oas()
    {
        return $this->belongsTo('App\OAS', 'oas_code');
    }

    public function tool()
    {
        return $this->belongsTo('App\Tool', 'tool_code');
    }

    public function sercom()
    {
        return $this->belongsTo('App\Sercom', 'sercom_code');
    }

    public function zone()
    {
        return $this->belongsTo('App\Zone', 'zona_code');
    }
    public function minStock(){
        return $this->belongsTo('App\MinStock', 'min_stock_id');
    }
}
