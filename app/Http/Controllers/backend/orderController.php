<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class orderController extends Controller
{
    function getOrder(){
        return view("backend.order.order");
    }
    function getDetailOrder(){
        return view("backend.order.detailorder");
    }
    function getProcessedOrder(){
        return view("backend.order.orderprocessed");
    }
}
