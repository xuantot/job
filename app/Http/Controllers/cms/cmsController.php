<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cmsController extends Controller
{
    function getCms(){
        return view('cms.index');
    }
    function getAccount(){
        return view('cms.user.infouser');
    }

}
