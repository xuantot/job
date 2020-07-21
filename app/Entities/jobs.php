<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    protected $table="jobs";
    public function category()
    {
        return $this->belongsTo('App\Entities\category', 'category_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo('App\Entities\company', 'company_id', 'id');
    }

    public function customer()
    {
        return $this->hasManyThrough('App\Entities\customer', 'customer', 'job_sid', 'customer_id');
    }
}
