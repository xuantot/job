<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\{users_adminRequest,EditUsers_adminRequest};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\{Users_admin,customer,company};
class userController extends Controller
{

    // Admin
    function getUser(){
        $data['users_admin']=users_admin::paginate(3);
        return view('backend.users.listuser',$data);
    }

    function getAddUser(){
        return view('backend.users.adduser');
    }
    function postAddUser(users_adminRequest $userRequest){
       $user=new users_admin();
       $user->email=$userRequest->email;
       $user->password=bcrypt($userRequest->email);
       $user->name=$userRequest->name;
       $user->address=$userRequest->address;
       $user->phone=$userRequest->phone;
       $user->level=$userRequest->level;
       $user->save();
       return redirect('admin/user')->with('thongbao','Đã thêm thành công');
    }


    function getEditUser($id){
        $data['user']=users_admin::find($id);
        return view('backend.users.edituser',$data);
    }
    function postEditUser(EditUsers_adminRequest $userRequest,$id){
        $user=users_admin::find($id);
        $user->email=$userRequest->email;
        if($userRequest->password!=""){
            $user->password=bcrypt($userRequest->password);
        }
        $user->name=$userRequest->name;
        $user->address=$userRequest->address;
        $user->phone=$userRequest->phone;
        $user->level=$userRequest->level;
        $user->save();
        return redirect()->back()->with('thongbao','Đã sữa thành cồng');
    }
     function deleteUser($id){
        users_admin::destroy($id);
        
        return redirect()->back()->with('thongbao','Bạn đã xóa thành công');
        
     }
    function getInfoUser(){
        return view('backend.users.infouser');
    }



    // Client Danh sach nha tuyen dung
    function getUserClient(){

        $data['customer']=customer::where('type',1)->paginate(5);
        return view('backend.usersClient.listuserclient',$data);
    }
    function deleteClient($id){
        customer::destroy($id);       
        return redirect()->back()->with('thongbao','Bạn đã xóa thành công');
    }
    // Danh sach ung vien
    function getUserCandidate(){
        $data['customer']=customer::where('type',2)->paginate(5);
        return view('backend.usersCandidate.listusercandidate',$data);
    }
    function deleteCandidate($id){
        customer::destroy($id);       
        return redirect()->back()->with('thongbao','Bạn đã xóa thành công');
       

    }


}
