<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    // protected $guarded = ['id'];
    public function jobs()
    {
        return $this->hasMany('App\Entities\jobs', 'category_id', 'id');
    }
}


