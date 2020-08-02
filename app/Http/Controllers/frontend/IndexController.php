<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\jobs;

class IndexController extends Controller
{
    function getIndex(request $r){
        $jobs = jobs::query();

        if (!empty($r->name) ) {
            $jobs->where("job_name", "like", "%{$r->name}%");
        }

        if (!empty($r->location)) {
            $jobs->whereHas("company", function( $query ) use (&$r){ 
                $query->where("address", "like", "%{$r->location}%");
            });
        }

        if (!empty($r->category)){
            $jobs->where("category_id",$r->category);
        }
 
        $data['jobs']= $jobs->where('status', 0)->paginate(5);
       
        

        return view("frontend.index",$data);
    }

    function getContact(){
        return view("frontend.contact");
    }
    
}
