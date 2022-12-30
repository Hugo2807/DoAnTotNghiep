<?php

namespace App\Http\Controllers;

use App\Models\Member;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Traits\StoreImageTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Services\FrontendService;
use App\Http\Services\Posts\PostService;

class UserController extends Controller
{
    use StoreImageTrait;
    protected $posts, $frontend;

    public function __construct(PostService $posts, FrontendService $frontend){
        $this->posts = $posts;
        $this->frontend = $frontend;
    }

    public function index()
    {
        $index = $this->frontend->index();
        return $index;
    }

    public function login(){
        return view('user.page.account.loginregister');
    }

    public function handlelogin(Request $request){
        if($request->input('signin')){
            if(Auth::guard('webuser')->attempt($request->only('email', 'password'))){
                return redirect()->route('home');
            }
            else{
                return redirect()->back()->with('msg', 'Sai tài khoản hoặc mật khẩu');
            }
        }
        
        if($request->input('signup')){
            
            if($request->password == $request->confirmpass){
                $member = Member::create([
                    'hoten' => $request->hoten,
                    'gioitinh' => $request->gioitinh,
                    'ngaysinh' => $request->ngaysinh,
                    'sdt' => $request->sdt,
                    'diachi' => $request->diachi,
                    'image_path' => '/storage/imguser/imgdefault.png',
                    'image_name' => 'imgdefault.png',
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);
                Auth::guard('webuser')->attempt($request->only('email', 'password'));
                $request->session()->regenerate();
                return redirect()->route('home');
            }else{
                return redirect()->back()->with('msg', 'Xác nhận mật khẩu không khớp');
            }
        }
    }

    public function forgotPass(){
        return view('user.page.account.forgotPass');
    }

    public function postforgotPass(Request $request){
        $request->validate([
            'email' => 'required|exists:members'
        ],[
            'email.required' => 'Vui lòng nhập địa chỉ mail hợp lệ',
            'email.exists' => 'Email này không tồn tại',
        ]);
        
        $member = Member::where('email', $request->email)->first();
        $token = strtoupper(Str::random(10));
        $member->password_resets->where('email', $request->email)->update(['token' => $token]);

        Mail::send('user.page.account.check_email_forgot', compact('member', 'token'), function($email) use($member) {
            $email->subject('NaFruits - Lấy lại mật khẩu tài khoản');
            $email->to($member->email, $member->hoten);
        });
        return redirect()->back()->with('msg', 'Vui lòng kiểm tra email để thực hiện thay đổi mật khẩu');
    }

    public function resetPass(Member $member, $token){
        if($member->password_resets->token === $token){
            return view('user.page.account.resetPass');
        }
        return abort(404);
    }

    public function postresetPass(Request $request, Member $member, $token){
        $request->validate([
            'resetuserpass' => 'required',
            'confirm_resetuserpass' => 'required|same:resetuserpass',
        ], [
            'resetuserpass.required' => 'Vui lòng nhập mật khẩu',
            'confirm_resetuserpass.same' => 'Xác nhận mật khẩu không khớp',
            'confirm_resetuserpass.required' => 'Vui lòng xác nhận mật khẩu',
        ]);

        $member->update(['password' => bcrypt($request->resetuserpass),]);
        $member->password_resets->where('email', $member->email)->update(['token' => null,]);

        return redirect()->route('user.login')->with('msg', 'Đặt lại mật khẩu thành công');
    }

    public function logout(Request $request){
        Auth::guard('webuser')->logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }

    public function inf(Request $request, $id){
        $userinfs = Member::find($id);
        return view('user.page.userinf', compact('userinfs'));
    }

    public function editinf(Request $request, $id){
        $dataUpdate = [
            'hoten' => $request->hoten,
            'gioitinh' => $request->gioitinh,
            'ngaysinh' => $request->ntns,
            'sdt' => $request->sdt,
            'diachi' => $request->diachi,
        ];
    
        $userImage = $this->storageTraitUpLoad($request, 'image_path', 'imguser');
        if(!empty($userImage)){
            $dataUpdate['image_name'] = $userImage['file_name'];
            $dataUpdate['image_path'] = $userImage['file_path'];
        }
    
        Member::find($id)->update($dataUpdate);
    
        return redirect()->back()->with('msg', 'Cập nhật thông tin thành công');
    }

    public function blogIndex()
    {
        $result = $this->posts->postIndex();
        return $result;
    }
}
