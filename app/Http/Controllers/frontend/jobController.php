<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class jobController extends Controller
{
    function getJob(){
        return view("frontend.job.jobs");
    }
    function getJobDetail(){
        return view("frontend.job.job_details");
    }
    function getCandidate(){
        return view("frontend.job.candidate");
    }
    function getElement(){
        return view("frontend.job.elements");
    }
}
