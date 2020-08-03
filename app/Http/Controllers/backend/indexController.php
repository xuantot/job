<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\{customer,jobs};
use Illuminate\Support\Facades\Auth;

class indexController extends Controller
{
    function getIndex(){
        $data['jobs']=jobs::get()->count();
        $data['customer']=customer::get()->count();
     
        return view("backend.index", $data);
    }
}
