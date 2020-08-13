<?php

namespace App\Http\Controllers\cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Entities\customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class cmsLoginController extends Controller
{
    public function showLoginForm(){
        return view("cms.auth.login");
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('customer_web')->attempt($credentials)) {
            return redirect('/company/cms/job');
        }
        else{
        return back()->withInput(['email'])
            ->withErrors(['email' => 'Tài khoản hoặc mật khẩu nhập không đúng']);
        }
    }
    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('/company/cms/login');
    }


    public function showRegistration(){
        return view("cms.auth.registration");
    }

    public function registration(Request $request){
        $request ->validate([
            'name' => 'required',
            'email' => 'required|email|unique:App\Entities\User,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'address' => 'required',
            'phone' => 'required',
            'role' => 'required',
        ]);
        $customer = new customer();
        $customer->name =$request->name;
        $customer->email =$request->email;
        $customer->address =$request->address;
        $customer->phone =$request->phone;
        $customer->password = bcrypt($request->password);
        $customer->type = $request->role;
        $customer->save();
        return redirect("/company/cms/login");
    }

    public function showFormForgetPassword(Request $request)
    {
        return view('cms.auth.forget_password');
    }

    public function sendCodeResetPassword(Request $request)
    {
        $request ->validate([
            'email' => 'required|email|unique:App\Entities\User,email',
        ]);
        $email = customer::where('email', $request->email)->get();
        foreach($email as $item){
            $url= route('link.reset.password', ['email' =>$request->email]);
        }
        if(isset($url)){
            $data = [
                'email' => $email,
                'route' => $url
            ];
            if($email){
                Mail::send('cms.auth.email.send_forget_password', $data,
                function($message) use($request, $email )
                {
                    foreach($email as $item){
                        $message->to($request->email, $item->name);
                        $message->subject('Forget password');
                    }
                });
                return redirect($url)->withInput()->with('success', 'Mã code đã được gửi về email, vui lòng kiểm tra hộp thư!');
            }else{
                return redirect()->back()->with('success', 'Email bạn điền không đúng vui lòng điền lại!!!');
            }
        }else{
            return redirect('/company/cms/login/forget_password')->with('success', 'Email không tồn tại.');
        }
    }

    public function resetPassword(Request $request)
    {
        $email = $request->email;

        $check_code = customer::where([
            'email' => $email
        ])->get();
        if(!$check_code){
            return redirect('/company/cms/login/forget_password')->with('success', 'Xin lỗi!! Đường dẫn lấy lại mật khẩu không đùng vui lòng thử lại sau.');
        }
        return view('cms.auth.reset_password', compact('check_code'));
    }

    public function saveResetPassword(Request $request)
    {
        $request ->validate([
            'code_reset' => 'required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
        ]);
        $email = $request->email;
        $check_code = customer::where([
            'email' => $email
        ])->get();
        if(!$check_code){
            return redirect('/company/cms/login/forget_password')->with('success', 'Xin lỗi!! Đường dẫn lấy lại mật khẩu không đùng vui lòng thử lại sau.');
        }else{
            $check_code_id=customer::find($request->id);
            if($check_code_id->password==$request->code_reset){
                $check_code_id->password=bcrypt($request->password);
                $check_code_id->save();
                return redirect('/company/cms/login')->with('success', 'Mật khẩu của bạn được thay đổi thành công');
            }else{
                return redirect(route('link.saveResetPassword', ['email' =>$check_code_id->email]))->with('success', 'Mã code bạn vừa nhập không đúng, vui lòng nhập lại !!!.');
            }


        }
    }

}
