<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table="customer";
    public $timestamps=false;
    public function cv()
    {
        return $this->hasMany('App\Entities\cv', 'cv_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo('App\Entities\company', 'company_id', 'id');
    }

    public function jobs()
    {
        return $this->belongsToMany('App\Entities\jobs', 'customer','customer_id', 'jobs_id');
    }
}
