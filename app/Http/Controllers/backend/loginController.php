<?php

namespace App\Http\Controllers\backend;

use App\Entities\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function getLogin(){
        return view("backend.auth.login");
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $credentials = $request->only(['email', 'password']);
        // $credentials = array_merge($credentials, ['type' => 'admin']);
        // $credentials['type'] = 'admin';
        if (Auth::attempt($credentials)) {
            return redirect('/admin');
        }
        return back()->withInput(['email'])
            ->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect('/admin/login');
    }

    public function showRegistration(){

        return view("backend.auth.registration");
    }

    public function registration(Request $request){
        $request ->validate([
            'name' => 'required',
            'email' => 'required|email|unique:App\Entities\User,email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'address' => 'required',
            'phone' => 'required',


        ]);
        // $input = $request->only([
        //     'name',
        //     'email',
        //     bcrypt('password'),
        //     'address',
        //     'phone',
        // ]);
        // $user = User::create($input);
        $user = new User();
        $user->name =$request->name;
        $user->email =$request->email;
        $user->address =$request->address;
        $user->phone =$request->phone;
        $user->password = bcrypt($request->password);
        $user->level = 2;
        $user->save();
        return redirect("/admin/login");
    }
}
