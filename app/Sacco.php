<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sacco extends Model
{
 protected  $primaryKey='registration_number';

 public function systemadmin(){
     return $this->belongsTo(SystemAdmin::class);
 }
}
