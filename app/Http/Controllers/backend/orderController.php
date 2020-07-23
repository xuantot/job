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

        $data['customer']= customer()->customer_jobs::where('type',1)->get();
        
        dd($data)->all();
        return view("backend.order.order",$data);
    }
    function getDetailOrder(){
        return view("backend.order.detailorder");
    }
    function getProcessedOrder(){
        return view("backend.order.orderprocessed");
    }
}
