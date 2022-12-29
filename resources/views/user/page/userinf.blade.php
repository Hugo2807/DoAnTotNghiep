@extends('user.usershop')
@section('usermain')
    {{-- @php
        foreach ($userinfs as $value) {
            dd({{$value['hoten']}})
        }
        dd($userinfs)
    @endphp --}}
    <div class="container py-5">
        <form method="POST" enctype="multipart/form-data">
            @csrf
            @if (session('msg'))
                <div class="alert alert-success">{{session('msg')}}</div>
            @endif
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <img class="img-fluid mb-3 mt-4" src="{{$userinfs->image_path}}" alt="Image"
                        style="width: 300px; height: 300px; resize: vertical; object-fit: contain">
                    <input type="file" name="image_path" class="form-control-file">
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5">
                    <table>
                        <tr>
                            <td><p><b>Họ và tên &emsp;&emsp;&emsp;</b></p></td>
                            <td>
                                <input
                                    class="form-control"
                                    style="border-radius: 50px;"
                                    type="text"
                                    name="hoten"
                                    required
                                    value="{{$userinfs->hoten}}"
                                ><br>
                            </td>
                        </tr>
                        <tr>
                            <td><p style="margin-bottom: 1rem;"><b>Giới tính</b></p></td>
                            <td>
                            <input type="radio" name="gioitinh" value="1" 
                                @php
                                    if ($userinfs->gioitinh == 1) {
                                        echo 'checked';
                                    }   
                                @endphp>
                            <label class="mr-2">Nam</label>
                            <input type="radio" name="gioitinh" value="0"
                                @php
                                    if ($userinfs->gioitinh == 0) {
                                        echo 'checked';
                                    }   
                                @endphp>
                            <label>Nữ</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td><p><b>Ngày sinh</b></p></td>
                            <td>
                                <input
                                    class="form-control"
                                    style="border-radius: 50px;"
                                    type="date"
                                    name="ntns"
                                    required
                                    value="{{$userinfs->ngaysinh}}"
                                ><br>
                            </td>
                        </tr>
                        <tr>
                            <td><p><b>SĐT</b></p></td>
                            <td>
                                <input
                                    class="form-control"
                                    style="border-radius: 50px;"
                                    type="text"
                                    pattern="[0-9]{10}" 
                                    name="sdt"
                                    required
                                    value="{{$userinfs->sdt}}"
                                ><br>
                            </td>
                        </tr>
                        <tr>
                            <td><p><b>Địa chỉ</b></p></td>
                            <td>
                                <input
                                    class="form-control"
                                    style="border-radius: 50px;"
                                    type="text"
                                    name="diachi"
                                    required
                                    value="{{$userinfs->diachi}}"
                                ><br>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-primary rounded-3 px-4 py-1 "
                                    name="save">Lưu</button>
                            </td>
                        </tr>   
                    </table>
                </div>
                <div class="col-sm-1"></div>
            </div>
        </form>
    </div>
@endsection