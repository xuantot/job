<?php

namespace App\Http\Controllers\cms;
<<<<<<< HEAD
use App\Entities\{company,customer};
use Auth;
use App\Http\Requests\companyRequest;
=======

>>>>>>> permission/cms
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cmsCompanyController extends Controller
{
<<<<<<< HEAD
    //
    function getCompany(){
        $data['company']=company::paginate(5);
        return view('cms.company.company',$data);
    }
    function updateCompany(request $r){
       $data=customer::find(2);
      //  $cus=customer::all();
       $data->company_id=$r->id;
       $data->save();
       return "da update copany thanh cong"; 
    }
    function addCompany(){
      
        return view('cms.company.addcompany');
    }
    function postaddCompany(companyRequest $companyRequest){
        // dd($companyRequest->all());
        $data=new company;
        $data->name=$companyRequest->name;
        $data->address=$companyRequest->address;
        $data->hotline=$companyRequest->hotline;
        $data->info_company=$companyRequest->info_company;
        $data->save();
        return redirect('company/cms/company/')->with('thongbao','Đã cập nhật thông tin công ty');
        
=======
    function getCompany(){
        return "Update Info Company";
>>>>>>> permission/cms
    }
}
