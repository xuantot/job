<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class cmsJobController extends Controller
{
    public function getCms()
    {
        return view("cms.jobs.listjobs");
    }
    public function getCmsJobAdd()
    {
        return view("cms.jobs.addjob");
    }
    public function getCmsJobEdit()
    {
        return view("cms.jobs.editjob");
    }
}
