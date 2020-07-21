<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    protected $table='customer'; 
    public $timestamps =false;
    
    public function company()
    {
        return $this->belongsTo('App\Entities\company', 'company_id', 'id');
    }
    
}
