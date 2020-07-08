<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table="category";
    public $timestamps=false;
    public function jobs()
    {
        return $this->hasMany('App\Entities\jobs', 'category_id', 'id');
    }
}
