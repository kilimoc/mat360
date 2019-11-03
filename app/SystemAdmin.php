<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SystemAdmin extends Authenticatable
{
     use Notifiable;
    protected  $guard='systemadmin';

    protected $fillable=['first_name','last_name','phone','email_address','username','p_image','password'];
    protected  $hidden=['password','remember_token'];


    public function saccos(){
        return $this->hasMany(Sacco::class,'system_adminID');
    }
}
