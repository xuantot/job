<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cmsCategoryController extends Controller
{
    function getCmsCategory(){
        return view("cms.category.category");
    }
    function getCmsCategoryEdit(){
        return view("cms.category.editcategory");
    }
}
