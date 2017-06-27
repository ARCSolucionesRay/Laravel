<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hojaRuta extends Model
{
    public function servicios()
    {
        return $this->hasMany(servicios::class);        
    }
    //
}
