<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    //
    protected $table='company'; 
    public $timestamps =false;
    
    public function customer()
    {
        return $this->hasMany('App\Entities\customer', 'company_id', 'id');
    }
    
}
