<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class customer extends Model
{
    //
    protected $table='customer'; 
    public $timestamps =false;
    
=======
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;



class customer extends Authenticatable
{
    protected $table="customer";
    public $timestamps=false;
    protected $fillable = [
        'name', 'email', 'password','address','phone', 'role',
    ];

    public function cv()
    {
        return $this->hasMany('App\Entities\cv', 'cv_id', 'id');
    }

>>>>>>> permission/cms
    public function company()
    {
        return $this->belongsTo('App\Entities\company', 'company_id', 'id');
    }
<<<<<<< HEAD
    
=======

    public function jobs()
    {
        return $this->belongsToMany('App\Entities\jobs', 'customer','customer_id', 'jobs_id');
    }
>>>>>>> permission/cms
}
