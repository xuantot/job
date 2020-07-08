<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\jobs;
use App\Entities\category;
use App\Entities\company;
use App\Http\Requests\addJobRequest;

class jobController extends Controller
{
    function getJob(){
        $data['jobs']=jobs::paginate(3);
        return view("backend.listjobs.listjob", $data);
    }
    function getEditJob(){
        return view("backend.listjobs.editjob");
    }
    function getAddJob(){
        $data['category']=category::all();
        $data['company']=company::all();
        return view("backend.listjobs.addjob",$data);
    }
    function postAddJob(addJobRequest $r){
    
        return view("backend.listjobs.addjob");
    }
}
