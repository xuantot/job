<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\{jobs,category};
// use Carbon\Carbon;
class IndexController extends Controller
{
    function getIndex(request $request){
        
        
        if($request->category)
        {
            
         $data['jobs']=category::find($request->category)->jobs()->paginate(15);
        }
        else
        {
         $data['jobs']=jobs::paginate(15);
        }
        $data['categorys']=category::all();
        return view("frontend.index",$data);
    
}
// function searchIndex(){

//     return view("frontend.index",$data);
// }
    function getContact(){
        return view("frontend.contact");
    }
    
}
