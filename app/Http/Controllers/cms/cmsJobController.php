<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cmsJobController extends Controller
{
    function getCmsJob(){
        return view("cms.jobs.listjobs");
    }
    function getCmsJobAdd(){
        return view("cms.jobs.addjob");
    }
    function getCmsJobEdit(){
        return view("cms.jobs.editjob");
    }
}
