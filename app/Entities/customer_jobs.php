<?php

namespace App\Entities;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class customer_jobs extends Authenticatable
{
    protected $table="customer_jobs";
    public $timestamps=false;
}
