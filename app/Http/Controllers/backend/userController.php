<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\customer;

class userController extends Controller
{

    // Admin
    function getUser(){
        return view('backend.users.listuser');
    }
    function getAddUser(){
        return view('backend.users.adduser');
    }
    function getEditUser(){
        return view('backend.users.edituser');
    }

    function getInfoUser(){
        return view('backend.users.infouser');
    }



    // Client
    function getUserCompany(){
        $data['clients']=customer::where('type',1)->paginate(5);
        return view('backend.usersClient.listuserclient',$data);
    }

    function getUserCandidate(){
        $data['candidate']=customer::where('type',2)->paginate(5);
        return view('backend.usersCandidate.listusercandidate',$data);
    }





}
