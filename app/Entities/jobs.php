<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Auth;

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
        return $this->belongsToMany('App\Entities\customer', "customer_jobs", "jobs_id", "customer_id");
    }

    public function Like_job()
    {
        return $this->hasMany('App\Entities\Like_job', 'id_job', 'id');
    }

    public function getIsCurrentUserWishListAttribute(){
        $userId = Auth::guard('customer_web')->id();
        $isUserWishList = $this->Like_job()->where("id_customer", $userId)->count();
        return $isUserWishList > 0 ? true : false;
    }
}
