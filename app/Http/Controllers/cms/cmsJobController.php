<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use App\Http\Requests\addJobsRequest;
use Illuminate\Http\Request;
use App\Entities\jobs;
use App\Entities\Category;
use App\Http\Requests\editJobsRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Entities\customer_jobs;
use App\Entities\company;

class cmsJobController extends Controller
{
    function getCmsJob(){
        if(Auth::guard('customer_web')->user()->company_id==NULL){
            return redirect("/company/cms/company")->with('thongbao','Vui lòng chọn công ty trước khi đăng bài');
        }else{
        $customer=Auth::guard('customer_web')->user();
        $data['jobs']=$customer->jobs()->where('status',0)->paginate(5);
        return view("cms.jobs.listjobs",$data);
        }
    }

    function getCmsJobAdd(){
        
            $data['category']=Category::all();
            $data['company']=company::find(Auth::guard('customer_web')->user()->company_id);
            return view("cms.jobs.addjob",$data);
        
        
    }
    function postCmsJobAdd(addJobsRequest $r){

        $job = new jobs;
        $job->job_code=$r->job_code;
        $job->job_name=$r->job_name;
        $job->salary=$r->salary;
        $job->experience=$r->experience;
        $job->nature=$r->nature;
        $job->info_job=$r->info_job;
        if($r->hasFile('logo')){
            $file = $r->logo;
            $filename=Str::slug($r->logo, '-').'.'.$file->getClientOriginalExtension();
            $file->move('backend/img',$filename);
            $job->logo= $filename;
        }
        else {
            $job->logo='no-img.jpg';
        }
        $job->status=1;
        $job->category_id=$r->category;
      

        $job->company_id=Auth::guard('customer_web')->user()->company_id;
        
        $job->save();

        $customer_jobs=new customer_jobs;
        $customer_jobs->jobs_id=$job->id;
        $customer_jobs->customer_id=Auth::guard('customer_web')->user()->id;
        $customer_jobs->save();


        

        return redirect("/company/cms/job")->with('thongbao',"Đã thêm thành công");
       
    }


    function getCmsJobEdit($id){
        $data['category']=category::all();
        $data['jobs']=jobs::find($id);
        
        return view("cms.jobs.editjob",$data);
    }
    function postCmsJobEdit(editJobsRequest $r, $id){
        $job = jobs::find($id);
        $job->job_code=$r->job_code;
        $job->job_name=$r->job_name;
        $job->salary=$r->salary;
        $job->experience=$r->experience;
        $job->nature=$r->nature;
        $job->info_job=$r->info_job;
        if($r->hasFile('logo')){
            if($job->logo!='no-img.jpg'){
                unlink('backend/img/'.$job->logo);
            }
            $file = $r->logo;
            $filename=Str::slug($r->logo, '-').'.'.$file->getClientOriginalExtension();
            $file->move('backend/img',$filename);
            $job->logo= $filename;
        }
        $job->status=1;
        $job->category_id=$r->category;
        $job->company_id=Auth::guard('customer_web')->user()->company_id;

        $job->save();
        return redirect()->back()->with('thongbao',"Đã sửa thành công");
    }


    function getCmsJobQueue(){
        $customer=Auth::guard('customer_web')->user();
        $data['jobs']=$customer->jobs()->where('status',1)->paginate(5);
        
        return view("cms.jobs.queuejob", $data);
    }

    function getDeleteJob($id){
        $job= jobs::find($id);
        $job->delete();
        return redirect()->back()->with('thongbao', "Đã xóa thành công");
    }
}
