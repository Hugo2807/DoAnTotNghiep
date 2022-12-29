@extends('adminshop.mastershop')
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1>Edit_Product</h1> --}}
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('adminshop.index') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('adminshop.product.index') }}">Product</a></li>
              <li class="breadcrumb-item active">Edit Product</li>
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

        @if ($errors->any())
          <div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ. Vui lòng kiểm tra lại</div>
        @endif

        <div class="card-header">
          <h1 class="card-title">Edit Product</h1>
        </div>
        <!-- /.card-header -->
        <div class="card card-primary mb-0">
          <form action="" method="post">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputProduct_Name1">Name</label>
                <input type="text" class="form-control" name="name" id="exampleInputProduct_Name1" placeholder="Enter Name" value="{{$productDetail->name}}">
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Img</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" name="image" id="exampleInputFile" value="{{$productDetail->image}}">
                  </div>
                </div>
              </div>
              <div class="form-group">
                  <label for="exampleInputAmount1">Amount</label>
                  <input type="text" class="form-control" name="amount" id="exampleInputAmount1" placeholder="Enter Amount" value="{{$productDetail->amount}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputPrice1">Price</label>
                  <input type="text" class="form-control" name="price" id="exampleInputPrice1" placeholder="Enter Price" value="{{$productDetail->price}}">
              </div>
              <div class="form-group">
                  <label for="exampleSelectCategory0">Category</label>
                  <select class="custom-select rounded-0" name="category" id="exampleSelectCategory0" value="{{$productDetail->category}}">
                    <option @if($productDetail->category == 'Apple') selected @endif>Apple</option>
                    <option @if($productDetail->category == 'Orange') selected @endif>Orange</option>
                    <option @if($productDetail->category == 'Guava') selected @endif>Guava</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="exampleSelectSupplier0">Supplier</label>
                  <select class="custom-select rounded-0" name="supplier" id="exampleSelectSupplier0" value="{{$productDetail->supplier}}">
                    <option @if($productDetail->supplier == 'Dam Market') selected @endif>Dam Market</option>
                    <option @if($productDetail->supplier == 'Xom Moi Market') selected @endif>Xom Moi Market</option>
                    <option @if($productDetail->supplier == 'Vinh Hai Market') selected @endif>Vinh Hai Market</option>
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleSelectSupplier0">Status</label>
                <select class="custom-select rounded-0" name="status" id="exampleSelectSupplier0" value="{{$productDetail->status}}">
                  <option @if($productDetail->status == 'Stocking') selected @endif>Stocking</option>
                  <option @if($productDetail->status == 'Out Of Stock') selected @endif>Out Of Stock</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Save</button>
              <a href="{{ route('adminshop.product.index') }}">
                  <button type="button" class="btn btn-primary">Back</button>
              </a>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection