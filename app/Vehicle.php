<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected  $primaryKey='reg_number';

    public function driver(){
        return $this->belongsTo('App\Driver','driver_id','id_number');
    }
}
