@extends('adminshop.mastershop')
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('adminshop.index') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('adminshop.menu.index') }}">Menu</a></li>
              <li class="breadcrumb-item active">Edit Menu</li>
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
        {{-- <div class="card-header">
          <h1 class="card-title">Edit Menu</h1>
        </div> --}}
        <!-- /.card-header -->
        <form action="" method="post">
          @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Menu</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="menuname" class="form-control" placeholder="Enter Name" value="{{$result->name}}">
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Position</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  @foreach($optionSelect3 as $key => $value)
                    @foreach($menulocations as $item)
                      @if ($item->pos == $key)
                        <input type="checkbox" name="pos" value="{{$key}}" checked> {{$value}}<br/>
                      @else
                        <input type="checkbox" name="pos" value="{{$key}}"> {{$value}}<br/>
                      @endif
                    @endforeach
                  @endforeach
                  <!-- Color Picker -->
                  {{-- <div class="form-group">
                    <label>Color picker:</label>
                    <input type="text" class="form-control my-colorpicker1">
                  </div>
                  <!-- /.form group -->
  
                  <!-- Color Picker -->
                  <div class="form-group">
                    <label>Color picker with addon:</label>
  
                    <div class="input-group my-colorpicker2">
                      <input type="text" class="form-control">
  
                      <div class="input-group-append">
                        <span class="input-group-text"><i class="fas fa-square"></i></span>
                      </div>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
  
                  <!-- time Picker -->
                  <div class="bootstrap-timepicker">
                    <div class="form-group">
                      <label>Time picker:</label>
  
                      <div class="input-group date" id="timepicker" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker"/>
                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                        </div>
                      <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                  </div> --}}
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
            </div>
            <!-- /.col (left) -->
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Menu Note</h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  {{-- <div class="card-header">
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
                  </div> --}}
                  <div class="row">
                    <div class="col-md-10">
                      <div class="card-tools mb-2">
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
                    <div class="col-md-2">
                      <div class="card-tools mb-2">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                          ADD
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Create MenuNote</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="" method="post">
                            @csrf
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Name</label>
                                  <input type="text" name="name" class="form-control" placeholder="Enter Name">
                                </div>
                
                                <div class="form-group">
                                    <label>Chọn Menu cha</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0">Chọn menu cha</option>
                                        {{-- {!! $optionSelect !!} --}}
                                        @foreach($optionSelect4 as $val)
                                          <option value="{{$val->id}}">
                                            @php
                                              $str = '';
                                              for($i = 0; $i < $val->level; $i++){
                                                echo $str;
                                                $str = '--';
                                              }   
                                            @endphp
                                            {{$val->name}}
                                          </option>
                                        @endforeach
                                    </select>
                                </div>
                              </div>
                              <!-- /.card-body -->
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-primary" name="addmenunote" value="Add">
                                {{-- <button type="submit" class="btn btn-primary" name="Save">Save</button> --}}
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: auto">STT</th>
                          {{-- <th style="width: auto">Id</th> --}}
                          <th style="width: auto">Name</th>
                          <th style="width: auto">Action</th>
                        </tr>
                      </thead>
                      <?php $stt=1?>
                      <tbody>
                        @if (!empty($menunotes))
                        {{-- for cha --}}
                          @foreach ($menunotes as $item)
                            <tr>
                              <td>{{$stt++}}</td>
                              {{-- <td>{{$item['id']}}</td> --}}
                              <td>{{$item['name']}}</td>
                              <td>
                                <div class="btn-group">
                                  <abbr title="Sửa dữ liệu">
                                    <button type="button" class="btn btn-default btn-sm mr-2" data-target="#exampleModal1{{$item->id}}" data-toggle="modal">
                                      <i class="nav-icon fas fa-edit"></i>
                                    </button> 
                                    {{-- <button type="button" class="btn btn-default editbtn btn-sm mr-2" value="{{$item->id}}"><i class="nav-icon fas fa-edit"></i></button> --}}
                                  </abbr>
                                  <div class="modal fade" id="exampleModal1{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Edit MenuNote</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <form action="{{route('adminshop.menu.edit', $item['menu_id'])}}" method="post">
                                            @csrf
                                              <input type="hidden" name="noteid" id="noteid" value="{{$item->id}}"/>
                                              
                                              <div class="card-body">
                                                <div class="form-group">
                                                  <label>Name</label>
                                                  <input type="text" name="menunotename" id="menunotename" class="form-control" placeholder="Enter Name" value="{{$item->name}}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Chọn Menu cha</label>
                                                    <select class="form-control" name="parent_id" id="parent_id">
                                                      <option value="0">Danh mục cha</option>
                                                      @foreach($optionSelect4 as $val)
                                                        <option {{$item->parent_id == $val->id ? 'selected' : ''}} value="{{$val->id}}">
                                                          @php
                                                            $str = '';
                                                            for($i = 0; $i < $val->level; $i++){
                                                              echo $str;
                                                              $str = '--';
                                                            }   
                                                          @endphp
                                                          {{$val->name}}
                                                        </option>
                                                      @endforeach
                                                    </select>
                                                </div>
                                              </div>
                                              
                                              <!-- /.card-body -->
                                              <div class="modal-footer">
                                                <input type="submit" class="btn btn-primary" name="editmenunote" value="Save">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <abbr title="Xóa dữ liệu">
                                    <a onclick="return confirm('Do you want to delete this menunote?')" href="{{ route('adminshop.menu.deletenote', $item['id'])}}">
                                      <button type="button" class="btn btn-default btn-sm" name="deletemenunote">
                                        <i class="fas fa-trash-alt"></i>
                                      </button>
                                    </a>
                                  </abbr>
                                </div>
                              </td>
                            </tr>
                          @endforeach
                        @else
                            <td>Không có MenuNote</td>
                        @endif
                      </tbody>
                    </table>
                  {{-- <div>
                    {{$data->appends(request()->all())->links()}}
                  </div> --}}
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col (right) -->
            <div class="card-footer">
              <input type="submit" class="btn btn-primary" name="savemenu" value="Save">
              {{-- <button type="submit" class="btn btn-primary">Save</button> --}}
              <a href="{{ route('adminshop.menu.index') }}">
                  <button type="button" class="btn btn-primary">Back</button>
              </a>
            </div>
          </div>
        </form>
        {{-- <div class="card card-primary mb-0">
          <form action="" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$result->name}}">
              </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$result->name}}">
                </div>

                <div class="form-group">
                    <label>Chọn Menu cha</label>
                    <select class="form-control" name="parent_id">
                        <option value="0">Chọn menu cha</option>
                        {!! $optionSelect !!}
                    </select>
                </div>
              </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Save</button>
              <a href="{{ route('adminshop.menu.index') }}">
                  <button type="button" class="btn btn-primary">Back</button>
              </a>
            </div>
          </form>
        </div> --}}
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection