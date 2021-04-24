<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //
    public function coach(){
        return $this->belongsTo('App\coach' , 'code_coach');
    }
}
