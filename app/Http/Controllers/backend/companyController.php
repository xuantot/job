<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\company;
use App\Http\Requests\addCompanyRequest;
use App\Http\Requests\editCompanyRequest;

class companyController extends Controller
{
    function getCompany(){
        $data['companies']=company::all();
        return view("backend.company.company",$data);
    }
    function postCompany(addCompanyRequest $r){
        $compa =new company() ;
        $compa->code=$r->code;
        $compa->name=$r->name;
        $compa->address=$r->address;
        $compa->hotline=$r->hotline;
        $compa->info_company=$r->info_company;
        $compa->save();
        return redirect("/admin/company")->with('thongbao',"Đã thêm công ty thành công");
        
    }

    function getEditCompany($id){
        $data['company']=company::find($id);
        return view("backend.company.editcompany", $data);
    }

    function postEditCompany($id, editCompanyRequest $r){
        $compa=company::find($id);
        $compa->name=$r->name;
        $compa->address=$r->address;
        $compa->hotline=$r->hotline;
        $compa->info_company=$r->info_company;
        $compa->save();
        return redirect("/admin/company")->with('thongbao',"Đã sửa công ty thành công");
    }

    function getDeleteCompany($id){
        $company=company::find($id);
        $company->delete();
        return redirect("/admin/company")->with('thongbao', "Đã xóa thành công");
    }

}
