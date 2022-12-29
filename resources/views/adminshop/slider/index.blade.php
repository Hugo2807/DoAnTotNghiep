@extends('adminshop.mastershop')
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('adminshop.index') }}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Slider</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        @if (session('msg'))
          <div class="alert alert-success">{{session('msg')}}</div>
        @endif
        <div class="card-header">
          <a href="{{ route('adminshop.slider.create') }}">
            <h3 class="card-title">Thêm mới</h3>
          </a>
          <div class="card-tools">
            <form action="">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="key" class="form-control float-right" placeholder="Search">
  
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: auto">Tên Slider</th>
                    <th style="width: auto">Mô tả</th>
                    <th style="width: auto">Ảnh slider</th>
                    <th style="width: auto">Chức năng</th>
                  </tr>
                </thead>
                <tbody>
                  @if (!empty($sliders))
                    @foreach ($sliders as $slider)
                      <tr>
                        <td>{{$slider['name']}}</td>
                        <td>{{$slider['description']}}</td>
                        <td>
                          <img src="{{$slider->image_path}}" width="150px" height="100px" alt="Image">
                        </td>
                        <td>
                          <div class="btn-group">
                            <abbr title="Sửa dữ liệu">
                              <a href="{{ route('adminshop.slider.edit', $slider['id'])}}">
                                <button type="button" class="btn btn-default btn-sm mr-2">
                                  <i class="nav-icon fas fa-edit"></i>
                                </button>
                              </a>
                            </abbr>
                            <abbr title="Xóa dữ liệu">
                              <a onclick="return confirm('Do you want to delete this slider?')" href="{{ route('adminshop.slider.delete', $slider['id'])}}">
                                <button type="button" class="btn btn-default btn-sm">
                                  <i class="fas fa-trash-alt"></i>
                                </button>
                              </a>
                            </abbr>
                          </div>
                        </td>
                      </tr>
                    @endforeach
                  @else
                      <td>Không có slider</td>
                  @endif
                </tbody>
              </table>
            <hr>
            <div>
              {{$sliders->appends(request()->all())->links()}}
            </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection