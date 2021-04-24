<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public function coaches(){
        return $this->belongsTo('App\Coach');
    }
    public function admins(){
        return $this->belongsTo('App\Admin');
    }
}
