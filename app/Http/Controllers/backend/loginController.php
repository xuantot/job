<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function getLogin(){
        return view("backend.login");
    }

}
