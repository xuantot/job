<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\jobs;
use App\Entities\category;
use App\Entities\company;
use App\Http\Requests\addJobsRequest;
use App\Http\Requests\editJobsRequest;
use Illuminate\Support\Str;

class jobController extends Controller
{
    function getJob(){
        $data['jobs']=jobs::orderby('updated_at','desc')->where('status','0')->paginate(3);
        return view("backend.listjobs.listjob", $data);
    }

    function getEditJob($id){
        $data['category']=category::all();
        $data['company']=company::all();
        $data['jobs']=jobs::find($id);

        return view("backend.listjobs.editjob",$data);
    }

    function postEditJob(editJobsRequest $r, $id){
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
        $job->status=0;
        $job->category_id=$r->category;
        $job->company_id=$r->company;
        $job->save();
        return redirect()->back()->with('thongbao',"Đã sửa thành công");
    }

    function getAddJob(){
        $data['category']=category::all();
        $data['company']=company::all();
        return view("backend.listjobs.addjob",$data);
    }
    function postAddJob(addJobsRequest $r){
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
        $job->status=0;
        $job->category_id=$r->category;
        $job->company_id=$r->company;
       
        $job->save();

        return redirect("/admin/job")->with('thongbao',"Đã thêm thành công");
    }

    function getDeleteJob($id){
        $job= jobs::find($id);
        $job->delete();
        return redirect()->back()->with('thongbao', "Đã xóa thành công");
    }
}
