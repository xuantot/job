<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $table="company";
    public $timestamps=false;
    public function jobs()
    {
        return $this->hasMany('App\Entities\jobs', 'company_id', 'id');
    }

    public function customer()
    {
        return $this->hasMany('App\Entities\customer', 'customer_id', 'id');
    }
}
