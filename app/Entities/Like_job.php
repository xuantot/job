<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Like_job extends Model
{
    protected $table = 'like_job';
    protected $guarded = ['id'];

    public function Like_job()
    {
        return $this->hasMany('App\Entities\jobs', 'id_job', 'id');
    }
}
