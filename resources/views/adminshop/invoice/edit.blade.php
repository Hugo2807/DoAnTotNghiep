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
              <li class="breadcrumb-item"><a href="{{ route('adminshop.invoice.index') }}">Invoice</a></li>
              <li class="breadcrumb-item"><a href="{{ route('adminshop.invoice.detail') }}">Detail Invoice</a></li>
              <li class="breadcrumb-item active">Edit Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title">Edit Invoice</h1>
        </div>
        <!-- /.card-header -->
        <div class="card card-primary mb-0">
            <form action="" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputProduct_Name1">Order Date</label>
                    <input type="date" name="orderDate" class="form-control" value="{{$result->orderDate}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Delivery Date</label>
                    <input type="date" name="deliveryDate" class="form-control" value="{{$result->deliveryDate}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputAddress1">Delivery Address</label>
                      <input type="text" name="deliveryAddress" class="form-control" id="exampleInputAddress1" placeholder="Enter Address" value="{{$result->deliveryAddress}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPrice1">Invoice Status</label>
                      <select class="custom-select rounded-0" name="invoiceStatus" id="exampleSelectSupplier0">
                        <option selected>Choose Status</option>
                        <option>Stocking</option>
                        <option>Out Of Stock</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPrice1">Customer Name</label>
                      <input type="text" name="customerName" class="form-control" id="exampleInputPrice1" placeholder="Enter Price" value="{{$result->customerName}}">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPrice1">Employee Name</label>
                      <input type="text" name="employeeName" class="form-control" id="exampleInputPrice1" placeholder="Enter Price" value="{{$result->employeeName}}">
                  </div>
                </div>
                <!-- /.card-body -->
  
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{ route('adminshop.invoice.index') }}">
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