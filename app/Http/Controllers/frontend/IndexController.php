<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\jobs;
use App\Entities\{category, Testimonial};
use Illuminate\Support\Facades\Auth;
use App\Entities\Menu;

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
        $data['testimonial']=Testimonial::get();

        $data['menu'] = $this->getSubMenu(0);
        return view("frontend.index",$data);
    }

    private function getSubMenu($parentId, $ignoreId = null)
    {
        $menu = Menu::whereParentId($parentId)
            ->where('id', '<>', $ignoreId)
            ->get();
        $menu->map(function ($menuCount) use($ignoreId) {
            $menuCount->sub = $this->getSubMenu($menuCount->id, $ignoreId);
            return $menuCount;
        });
        return $menu;
    }

//     return view("frontend.index",$data);
// }
    function getContact(){
        $data['menu'] = $this->getSubMenu(0);
        return view("frontend.contact", $data);
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('/');
    }

}
