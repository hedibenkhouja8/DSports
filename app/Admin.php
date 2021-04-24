<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function coaches(){
        return $this->hasMany('App\Coach');
    }
    public function clients()
    {
        return $this->hasMany('App\Client');
    }

}
