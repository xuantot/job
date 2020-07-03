<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function getIndex(){
        return view("frontend.index");
    }

    function getContact(){
        return view("frontend.contact");
    }
    
}
