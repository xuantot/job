<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cmsController extends Controller
{
    function getCms(){
        return view('cms.index');
    }
    function getCmsJob(){
        return view('cms.listjobs.listjob_cms');
    }

    function getCmsAddJob(){
        return view('cms.listjobs.addjob_cms');
    }

    function getCmsEditJob(){
        return view('cms.listjobs.editjob_cms');
    }
}
