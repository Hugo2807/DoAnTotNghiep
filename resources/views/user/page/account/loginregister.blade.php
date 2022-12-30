@extends('user.usershop')
@section('usermain')
    <div class="huy">
        <div class="wrapper1">
            <div class="title-text">
                <div class="title login">ĐĂNG NHẬP</div>
                <div class="title signup">ĐĂNG KÝ</div>
            </div>
            <div class="form-container">
                <div class="slide-controls">
                    <input style="display: none;" type="radio" name="slide" id="login" checked>
                    <input style="display: none;" type="radio" name="slide" id="signup">
                    <label for="login" class="slide login">Đăng nhập</label>
                    <label for="signup" class="slide signup">Đăng ký</label>
                    <div class="slider-tab"></div>
                </div>
                <div class="form-inner">
                    <form action=""  method="post" class="login">
                        @csrf
                        <div class="field">
                            <input type="email" name="email" placeholder="Địa chỉ Email" required>
                        </div>
                        <div class="field">
                            <input type="password" name="password" placeholder="Mật khẩu" required>
                        </div>
                        <div class="pass-link"><a href="{{ route('user.forgotpass') }}">Quên mật khẩu?</a></div>
                        @if (session('msg'))
                            <div class="alert alert-success">{{session('msg')}}</div>
                        @endif
                        <div class="field btn" style="padding: 0; position: relative; overflow: hidden;">
                            <div class="btn-layer"></div>
                            <input type="submit" name="signin" value="Đăng nhập">
                        </div>
                        <div class="signup-link">Chưa có tài khoản? <a href="">Đăng ký ngay</a></div>
                    </form>
                    <form action="{{ route('user.handlelogin') }}" method="POST" class="signup">
                        @csrf
                        <div class="row" style="margin-left: 1px">
                            <div class="col-sm-6">
                                <div class="field">
                                    <input type="text" name="hoten" placeholder="Họ và tên" required>
                                </div>
                                <div class="ml-2 mt-4 pt-1">
                                    <input type="radio" name="gioitinh" value="1" checked>
                                    <label class="mr-2">Nam</label>
                                    <input type="radio" name="gioitinh" value="0">
                                    <label>Nữ</label>
                                </div>
                                <div class="field">
                                    <input type="text" name="diachi" placeholder="Địa chỉ" required>
                                </div>
                                <div class="field">
                                    <input type="password" name="password" placeholder="Mật khẩu" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="field">
                                    <input name="ngaysinh" type="date" required>
                                </div>
                                <div class="field">
                                    <input type="text" name="sdt" placeholder="Số điện thoại" pattern="[0-9]{10}" required>
                                </div>
                                <div class="field">
                                    <input type="email" name="email" placeholder="Địa chỉ Email" required>
                                </div>
                                <div class="field">
                                    <input type="password" name="confirmpass" placeholder="Xác nhận Mật khẩu" required>
                                </div>
                            </div>
                        </div>
                        @if (session('msg'))
                            <div class="alert alert-success">{{session('msg')}}</div>
                        @endif
                        <div class="field btn" style="padding: 0; position: relative; overflow: hidden;">
                            <div class="btn-layer"></div>
                            <input type="submit" name="signup" value="Đăng ký">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (()=>{
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (()=>{
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (()=>{
            signupBtn.click();
            return false;
        });
    </script>
@endsection