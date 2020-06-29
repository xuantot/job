<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jobController extends Controller
{
    function getJob(){
        return view("backend.listjobs.listjob");
    }
    function getEditJob(){
        return view("backend.listjobs.editjob");
    }
    function getAddJob(){
        return view("backend.listjobs.addjob");
    }
}
