<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    public function clients()
    {
        return $this->hasMany('App\Client');
    }
    public function admins(){
        return $this->belongsTo('App\Admin');
    }
}
