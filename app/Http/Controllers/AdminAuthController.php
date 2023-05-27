<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Str;
use App\Mail\ForgotPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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
        if(Auth::guard('web')->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember))
        {
            return redirect()->route('adminshop.index');
        }
        else{
            return redirect('login')->with('msg', 'Sai tài khoản hoặc mật khẩu');
        }
    }

    public function forgotPass(){
        return view('adminshop.account.forgotPass');
    }

    public function postforgotPass(Request $request){
        $request->validate([
            'email' => 'required|exists:users'
        ],[
            'email.required' => 'Vui lòng nhập địa chỉ mail hợp lệ',
            'email.exists' => 'Email này không tồn tại',
        ]);
        
        $user = User::where('email', $request->email)->first();
        $token = strtoupper(Str::random(10));
        $user->password_resets->where('email', $request->email)->update(['token' => $token]);

        // Cách 1
        // Mail::send('adminshop.account.check_email_forgot', compact('user', 'token'), function($email) use($user) {
        //     $email->subject('NaFruits - Lấy lại mật khẩu tài khoản');
        //     $email->to($user->email, $user->name);
        // });

        // Cách 2
        Mail::to($user->email)->send(new ForgotPassword($user, $token));

        return redirect()->back()->with('msg', 'Vui lòng kiểm tra email để thực hiện thay đổi mật khẩu');
    }

    public function resetPass(User $user, $token){
        if($user->password_resets->token === $token){
            return view('adminshop.account.resetPass');
        }
        return abort(404);
    }

    public function postresetPass(Request $request, User $user, $token){
        $request->validate([
            'resetpass' => 'required',
            'confirm_resetpass' => 'required|same:resetpass',
        ], [
            'resetpass.required' => 'Vui lòng nhập mật khẩu',
            'confirm_resetpass.same' => 'Xác nhận mật khẩu không khớp',
            'confirm_resetpass.required' => 'Vui lòng xác nhận mật khẩu',
        ]);

        $user->update(['password' => bcrypt($request->resetpass),]);
        $user->password_resets->where('email', $user->email)->update(['token' => null,]);

        return redirect('login')->with('msg', 'Đặt lại mật khẩu thành công');
    }

    public function changePass(){
        return view('adminshop.account.changePass');
    }

    public function postchangePass(Request $request){
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
