<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Entities\customer;
use App\Entities\jobs;
use App\Entities\customer_jobs;
use Illuminate\Http\Request;

class orderController extends Controller
{
    function getOrder(){
        $data['customer']= customer::where('type',1)->whereHas('jobs', function( $query ){
            $query->where("status", 1);
        })->get();
        // dd($data);
        return view("backend.order.order",$data);
    }

    function getDetailOrder($id){
        $data['customer']= customer::find($id); 
        $data['jobs']=$data['customer']->jobs()->where('status',1)->get();
       
        return view("backend.order.detailorder",$data);
    }

    function getUpdate($id){
        $job=jobs::find($id);
        $job->status=0;
        $job->save();
        return redirect()->back()->with('thongbao','Đã duyệt thành công');
        
    }

    function getDelete($id){
        $job=jobs::find($id);
        $job->status=2;
        $job->save();
        return redirect()->back()->with('thongbao','Đã bỏ qua bài đăng');
        
    }

    function postDetailOrder(request $r, $id){

        $mang=array();
        foreach($r->id as $item){
            $mang[]=$item;
            
        }
        
        foreach($mang as $value){
            $job = jobs::find($value);
            $job->status=0;
            $job->save();
        }
        
        return redirect("/admin/order");
    }


    function getProcessedOrder(){
        $data['customer']= customer::where('type',1)->has('jobs')->get();     
        return view("backend.order.orderprocessed",$data);
    }

    function getDetailRemoved($id){
        $data['customer']= customer::find($id); 
        $data['jobs']=$data['customer']->jobs()->where('status',2)->get();
       
        return view("backend.order.detail_order_removed",$data);
    }

    function postDetailRemoved(request $r, $id){

        $mang=array();
        foreach($r->id as $item){
            $mang[]=$item;
            
        }
        
        foreach($mang as $value){
            $job = jobs::find($value);
            $job->status=0;
            $job->save();
        }
        
        return redirect("/admin/order");
    }

}
