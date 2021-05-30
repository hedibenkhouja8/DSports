<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{protected $guarded = []; 
    public function users(){
        return $this->belongsTo('App\User');
    }
}
