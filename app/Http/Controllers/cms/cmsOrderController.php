<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cmsOrderController extends Controller
{
    function getCmsOrder(){
        return view("cms.order.order");
    }
    function getCmsOrderProcessed(){
        return view("cms.order.orderprocessed");
    }
}
