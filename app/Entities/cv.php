<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    protected $table="cv";
    public $timestamps=false;
    protected $fillable = [
        'name_file', 'customer_id', 'note'
    ];
    public function customer()
    {
        return $this->belongsTo('App\Entities\customer', 'customer_id', 'id');
    }
}
