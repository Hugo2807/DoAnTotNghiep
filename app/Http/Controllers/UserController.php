<?php

namespace App\Http\Controllers;

use App\Models\Member;

use Illuminate\Http\Request;
use App\Traits\StoreImageTrait;
use Illuminate\Support\Facades\Auth;
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
        return view('user.page.loginregister');
    }

    public function handlelogin(Request $request){
        // dd($request);
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
                // dd($request);
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
                // dd($member);
                Auth::guard('webuser')->attempt($request->only('email', 'password'));
                $request->session()->regenerate();
                return redirect()->route('home');
            }else{
                return redirect()->back()->with('msg', 'Xác nhận mật khẩu không khớp');
            }
        }
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
