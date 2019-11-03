<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected  $primaryKey='id_number';

    public function vehicle(){
        return $this->hasOne('App\Vehicle','driver_id','id_number');
    }
}
