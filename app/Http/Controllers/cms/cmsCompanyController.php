<?php

namespace App\Http\Controllers\cms;
use App\Entities\{company,customer};
use App\Http\Requests\companyRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cmsCompanyController extends Controller
{
    //
    function getCompany(){
        $data['company']=company::paginate(5);
        // $cus=
        // Auth::guard('customer_web')->user()->company_id;
        
        // dd($cus)->all();
        
        return view('cms.company.company',$data);
    }
    function updateCompany(request $r){
       $cus=Auth::guard('customer_web')->user()->id;
       $data=customer::find($cus);
       $data->company_id=$r->id;
       $data->save();
       return redirect('company/cms/company/')->with('thongbao','Đã cập nhật thông tin công ty');
       
    }
    function addCompany(){
      
        return view('cms.company.addcompany');
    }
    function postaddCompany(companyRequest $companyRequest){
        // dd($companyRequest->all());
        $data=new company;

        $data->code=$companyRequest->code;
        $data->name=$companyRequest->name;
        $data->address=$companyRequest->address;
        $data->hotline=$companyRequest->hotline;
        $data->info_company=$companyRequest->info_company;
        $data->save();
        $cus=Auth::guard('customer_web')->user()->id;
        $company=customer::find($cus);
        $company->company_id=$data->id;
        $company->save();

        return redirect('company/cms/company/')->with('thongbao','Đã cập nhật thông tin công ty');
    }
    // function getCompany(){
    //     return "Update Info Company";
    // }

    function searchsCompany(request $r){
        $data['company']=company::where('name','like',"%$r->company%")->orwhere('code','like',"%$r->company%")->paginate(20);
        
        return view('cms.company.company',$data);
    }
}
