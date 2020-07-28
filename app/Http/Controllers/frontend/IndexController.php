<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    function getIndex(){
        return view("frontend.index");
    }

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
