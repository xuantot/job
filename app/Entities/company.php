<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
<<<<<<< HEAD
    protected $table="company";
    public $timestamps=false;
    public function jobs()
    {
        return $this->hasMany('App\Entities\jobs', 'company_id', 'id');
    }

=======
    //
    protected $table='company';
    public $timestamps=false;
    
>>>>>>> admin/user
    public function customer()
    {
        return $this->hasMany('App\Entities\customer', 'customer_id', 'id');
    }
<<<<<<< HEAD
=======
    
>>>>>>> admin/user
}
