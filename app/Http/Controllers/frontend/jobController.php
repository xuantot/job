<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\jobs;
use App\Entities\Category;
use App\Entities\company;

class jobController extends Controller
{
    function getJob(request $r){
        $data['categories']=Category::get();
        $data['companies']=company::get();

        
        // $name = $r->query("search");
        $jobs = jobs::query();

        if (!empty($r->search) ) {
            $jobs->where("job_name", "like", "%{$r->search}%");
        }

        if (!empty($r->location)) {
            $jobs->whereHas("company", function( $query ) use (&$r){ 
                $query->where("address", "like", "%{$r->location}%");
            });
        }

        if (!empty($r->category)){
            $jobs->where("category_id",$r->category);
        }
        
        // if ($name && $r->category=="Category"){
        //     $jobs->where("job_name", "like", "%{$name}%");
        // }
        // elseif ($name && $r->category) {
        //     $jobs->where("job_name", "like", "%{$name}%")->where("category_id", $r->category);
        // }
        // elseif($r->category){
        //     $jobs->where("company_id", $r->category);
        // }
        // elseif($r->location){
        //     $jobs->company()->where("address", "like", "%{$r->location}%");
        // }
        // elseif($r->nature && $r->category=="Category"){
        //     $jobs->where("nature", "like", "%{$r->nature}%");
        // }
    


        $data['jobs']= $jobs->where('status', 0)->paginate(5);
        // dd($data['jobs']->company())->all();

        return view("frontend.job.jobs",$data);
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
