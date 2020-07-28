<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\cv;
use App\Entities\{jobs,category};
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\Auth;

class jobController extends Controller
{
    public function getJob(Request $request){
        // $url= route('link.reset.password', ['email' =>$request->email]);
        // $data['list_search'] = jobs::with('company')->with('category')->get();
        // if ($request->location) {
        //     $data['jobs'] = jobs::find($request->location);
        // }
        // else{
        //     $data['jobs'] = jobs::paginate(3);
        // }
        $data['jobs'] = jobs::paginate(5);
        $data['categories'] = category::get();
        return view("frontend.job.jobs", $data);
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
