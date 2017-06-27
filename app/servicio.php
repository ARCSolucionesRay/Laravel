<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    /*protected $fillable = [
     'nombreHojaRuta'    
    ];*/
    public function hojaRuta()
    {
        return $this->belongTo(hojaRuta::class);        
    }
    //
}
