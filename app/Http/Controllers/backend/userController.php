<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    // Client
    function getUserClient(){
        return view('backend.usersClient.listuserclient');
    }



}
