<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    protected $table="cv";
    public $timestamps=false;
    public function customer()
    {
        return $this->belongsTo('App\Entities\customer', 'customer_id', 'id');
    }
}
