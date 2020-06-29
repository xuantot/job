<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cmsController extends Controller
{
    function getcms(){
        return view('cms.elements');
    }
}
