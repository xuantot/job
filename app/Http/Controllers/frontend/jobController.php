<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\{jobs,category,company,cv, Menu};
// use App\Entities\Category;
// use App\Entities\company;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendMail;
Use Mail;

class jobController extends Controller
{
    function getJob(request $r){
        $data['categories']=Category::get();
        $data['companies']=company::get();
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
        if (!empty($r->nature)){
            $jobs->where("nature",$r->nature);
        }



        $data['jobs']= $jobs->where('status', 0)->paginate(5);
        $data['menu'] = $this->getSubMenu(0);
        return view("frontend.job.jobs",$data);
    }

    private function getSubMenu($parentId, $ignoreId = null)
    {
        $menu = Menu::whereParentId($parentId)
            ->where('id', '<>', $ignoreId)
            ->get();
        $menu->map(function ($menuCount) use($ignoreId) {
            $menuCount->sub = $this->getSubMenu($menuCount->id, $ignoreId);
            return $menuCount;
        });
        return $menu;
    }

    public function postJob(Request $request)
    {
        dd($request->location);
    }

    function getJobDetail($id){
        $data['job']=jobs::find($id);
        $data['idCustomerCV'] = Auth::guard('customer_web')->id();
        return view("frontend.job.job_details",$data);
    }

    public function postJobDetail(Request $request,$id)
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
                if($request->name_file->getClientOriginalExtension()==="rar"
                || $request->name_file->getClientOriginalExtension()==="zip"
                || $request->name_file->getClientOriginalExtension()==="pdf"){
                    $file = $request->file('name_file');
                    $fileName = $file->getClientOriginalName('name_file');
                    $file->move(public_path('fileCV'), $fileName);
                    $input['name_file'] = asset("fileCV/{$fileName}");
                    $cv = cv::create($input);

                    //send mail
                    $job=jobs::find($id);
                    $data['name']=Auth::guard('customer_web')->user()->name;
                    $data['email']=Auth::guard('customer_web')->user()->email;
                    $data['job']=$job->job_name;


                    Mail::to($data['email'])->send(new SendMail($data));



                    return redirect()->back()->with('success', 'Nộp CV thành công, Vui lòng check email để nhận phản hồi');
                }else{
                    return redirect()->back()->with('success', 'Sai định dạng file vui lòng thử lại!!!');
                }
            }
        }else{
            return redirect('/company/cms/login')->with('success', 'Bạn vui lòng đăng nhập để tiếp tục nộp CV !!!');
        }

    }

    public function getCandidate(){
        $data['menu'] = $this->getSubMenu(0);
        return view("frontend.job.candidate", $data);
    }

    public function getElement(){
        return view("frontend.job.elements");
    }
}
