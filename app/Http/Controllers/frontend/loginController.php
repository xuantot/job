<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    function getLogin(){
        return view("frontend.login.login");
    }
    function getAccount(){
        return view("frontend.login.newaccount");
    }
}
