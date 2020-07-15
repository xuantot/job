<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cmsLoginController extends Controller
{
    function getLogin(){
        return view("cms.login.login");
    }

    function getAccount(){
        return view("cms.login.new_account");
    }
}
