<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\jobs;
use App\Entities\Category;
use App\Entities\company;

class jobController extends Controller
{
    function getJob(request $r){
        $data['categories']=Category::get();
        $data['companies']=company::get();

        
        // $name = $r->query("search");
        $jobs = jobs::query();

        if (!empty($r->search) ) {
            $jobs->where("job_name", "like", "%{$r->search}%");
        }

        if (!empty($r->location)) {
            $jobs->whereHas("company", function( $query ) use (&$r){ 
                $query->where("address", "like", "%{$r->location}%");
            });
        }

        if (!empty($r->category)){
            $jobs->where("category_id",$r->category);
        }
        
        // if ($name && $r->category=="Category"){
        //     $jobs->where("job_name", "like", "%{$name}%");
        // }
        // elseif ($name && $r->category) {
        //     $jobs->where("job_name", "like", "%{$name}%")->where("category_id", $r->category);
        // }
        // elseif($r->category){
        //     $jobs->where("company_id", $r->category);
        // }
        // elseif($r->location){
        //     $jobs->company()->where("address", "like", "%{$r->location}%");
        // }
        // elseif($r->nature && $r->category=="Category"){
        //     $jobs->where("nature", "like", "%{$r->nature}%");
        // }
    


        $data['jobs']= $jobs->where('status', 0)->paginate(5);
        // dd($data['jobs']->company())->all();

        return view("frontend.job.jobs",$data);
    }

    public function postJob(Request $request)
    {
        dd($request->location);
        // return redirect(route('search', ['key-word' =>$request->search]));
    }



    // public function search(Request $request)
    // {
    //     return view('frontend.job.search');

    // }


    public function getJobDetail(Request $request){
        $idCustomerCV = Auth::guard('customer_web')->id();
        return view("frontend.job.job_details", compact('idCustomerCV'));
    }

    public function upLoadCV(Request $request)
    {
        if(Auth::guard('customer_web')->check()){
            $request->validate([
                'note' => 'max:100',
            ]);

            $input = $request->only([
                'customer_id',
                'note',
            ]);
            if($request->hasFile('name_file')){
                if($request->name_file->getClientOriginalExtension()==="rar" || $request->name_file->getClientOriginalExtension()==="zip" || $request->name_file->getClientOriginalExtension()==="pdf"){
                    $file = $request->file('name_file');
                    $fileName = $file->getClientOriginalName('name_file');
                    $file->move(public_path('fileCV'), $fileName);
                    $input['name_file'] = asset("fileCV/{$fileName}");
                    $cv = cv::create($input);
                    return redirect('/job/detail')->with('success', 'Nộp CV thành công');
                }else{
                    return redirect('/job/detail')->with('success', 'Sai định dạng file vui lòng thử lại!!!');
                }
            }
        }else{
            return redirect('/company/cms/login')->with('success', 'Bạn vui lòng đăng nhập để tiếp tục nộp CV !!!');
        }

    }

    public function getCandidate(){
        return view("frontend.job.candidate");
    }

    public function getElement(){
        return view("frontend.job.elements");
    }
}
