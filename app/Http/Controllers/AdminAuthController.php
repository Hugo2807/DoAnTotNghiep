<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function loginAdmin(){
        //dd(bcrypt('admin'));
        return view('adminshop.account.login');
    }

    public function postloginAdmin(Request $request){
        $email = User::get('email');
        $pass = User::get('password');
        $remember = $request->has('remember_me') ? true : false;
        if(auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember))
        {
            return redirect()->route('adminshop.index');
        }
        else{
            return redirect('login')->with('msg', 'Sai tài khoản hoặc mật khẩu');
            // return view('adminshop.login')->with('msg', 'Sai tài khoản hoặc mật khẩu');
        }
    }

    public function forgotPass(){
        return view('adminshop.account.forgotPass');
    }

    public function postforgotPass(Request $request){
        return redirect()->back()->with('msg', 'Đổi mật khẩu thành công');
    }

    public function resetPass(){
        return view('adminshop.account.forgotPass');
    }

    public function postresetPass(Request $request){
        return redirect('login');
    }

    public function changePass(){
        return view('adminshop.account.changePass');
    }

    public function postchangePass(Request $request){
        // dd(Hash::check($request->curentpass, Auth::user()->password));
        if(Hash::check($request->curentpass, Auth::user()->password)){
            if($request->confirmnewpass == $request->newpass){
                User::find(1)->update([
                    'password' => bcrypt($request->newpass),
                ]);
                return redirect()->back()->with('msg', 'Đổi mật khẩu thành công');
            }else{
                return redirect()->back()->with('msg', 'Xác nhận mật khẩu không khớp');
            }
        }else{
            return redirect()->back()->with('msg', 'Mật khẩu hiện tại không đúng');
        }
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('login');
    }
}
