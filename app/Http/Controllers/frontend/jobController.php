<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\{jobs,category,company,cv, Menu, Contact, Like_job};
use Illuminate\Support\Facades\Auth;
use App\Mail\SendMail;
Use Mail;

class jobController extends Controller
{
    function getJob(request $r)
    {
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


        // $idsJobs = $jobs->pluck("id")->toArray();
        // $currentUserId = Auth::guard('customer_web')->id();
        // $wishList = Like_job::where("id_customer", $currentUserId)->whereIn("id_job", $idsJobs)->get();

        $data['jobs']= $jobs->where('status', 0)->paginate(5);
        $data['menu'] = $this->getSubMenu(0);
        $data['contact'] = Contact::get();
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
        // dd($request->location);
    }

    function getJobDetail($id){
        $data['job']=jobs::find($id);
        $data['idCustomerCV'] = Auth::guard('customer_web')->id();
        $data['contact'] = Contact::get();
        $data['menu'] = $this->getSubMenu(0);
        return view("frontend.job.job_details",$data);
    }

    public function postJobDetail(Request $request,$id)
    {
        if(Auth::guard('customer_web')->check()){

                $request->validate([
                    'note' => 'max:200',
                    // 'name_file' => 'required|file|mimes:rar,zip,pdf|max:5120'
                    'name_file' => 'required|file|max:5120'
                ],[
                    'note.max' => 'Vùi lòng viết ngắn hơn 200 ký tự',
                    'name_file.required' => 'File phải thuộc đinh dạng: rar, zip, pdf',
                    'name_file.max' => 'File upload phải bé hơn 5MB'
                ]);

                $input = $request->only([
                    'customer_id',
                    'note',
                ]);
                if($request->hasFile('name_file')){
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
                }
        }else{
            return redirect('/company/cms/login')->with('success', 'Bạn vui lòng đăng nhập để tiếp tục nộp CV !!!');
        }
    }

    public function getCandidate(){
        $data['menu'] = $this->getSubMenu(0);
        $data['contact'] = Contact::get();
        return view("frontend.job.candidate", $data);
    }

    public function getElement(){
        return view("frontend.job.elements");
    }
    public function postLike(Request $request)
    {
        $request->validate([
            'job_id' => 'numeric',
        ]);
        $user_id = Auth::guard('customer_web')->id();
        $likeJobQuery = Like_job::where([['id_customer', '=', $user_id],['id_job', '=', $request->job_id],]);
        $isWishlist =  $likeJobQuery->count();

        if ($isWishlist > 0) {
            $likeJobQuery->delete();
            return response()->json([
                "status" => true,
                "isDelete" => true
            ]);
        }

        $likeJobQuery = new Like_job();
        $likeJobQuery->id_customer = $user_id;
        $likeJobQuery->id_job = $request->job_id;
        $likeJobQuery->save();

        return response()->json([
            "status" => true,
            "isDelete" => false
        ]);

    //     $like_Job = Like_job::where([['id_customer', '=', $request->user_id],['id_job', '=', $request->job_id],])->get();
    //     if(count($like_Job)==0){
    //         $likeJob = new Like_job();
    //         $likeJob->id_customer = $request->user_id;
    //         $likeJob->id_job = $request->job_id;
    //         $likeJob->save();
    //     }else{
    //     $deleteLikeJob = Like_job::where([['id_customer', '=', $request->user_id],['id_job', '=', $request->job_id],])->delete();
    // }

    }
}
