<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\jobs;
use App\Entities\category;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    function getIndex(request $r){
        
        $jobs = jobs::query();

        if (!empty($r->name) ) {
            $jobs->where("job_name", "like", "%{$r->name}%");
        }
        // if (!empty($r->location)) {
        //     $jobs->whereHas("company", function( $query ) use (&$r){ 
        //         $query->where("address", "like", "%{$r->location}%");
        //     });
        // }
        // if (!empty($r->category)){
        //     $jobs->where("category_id",$r->category);
        // }
        $data['jobs']= $jobs->where('status', 0)->paginate(5);
       
        if($r->category)
        {

         $data['jobs']=category::find($r->category)->jobs()->paginate(15);
        }
        else
        {
         $data['jobs']=jobs::paginate(10);
        }
        $data['categorys']=category::all();
        

        return view("frontend.index",$data);
    }

//     return view("frontend.index",$data);
// }
    function getContact(){
        return view("frontend.contact");
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('/');
    }

}
