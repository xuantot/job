<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table="testimonial";
    protected $guarded = ['id'];
}
