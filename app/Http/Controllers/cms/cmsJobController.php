<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cmsJobController extends Controller
{
    function getCmsJob(){
        return view("cms.listjobs.listjob");
    }
    function getCmsJobAdd(){
        return view("cms.listjobs.addjob");
    }
    function getCmsJobEdit(){
        return view("cms.listjobs.editjob");
    }
}
