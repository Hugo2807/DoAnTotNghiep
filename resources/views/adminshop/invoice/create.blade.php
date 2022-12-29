@extends('adminshop.mastershop')
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1>Create_Product</h1> --}}
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('adminshop.index') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('adminshop.invoice.index') }}">Invoice</a></li>
              <li class="breadcrumb-item active">Create Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <h1 class="card-title">Create Invoice</h1>
        </div>
        <!-- /.card-header -->
        <div class="card card-primary mb-0">
            <form action="" method="post">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputProduct_Name1">Order Date</label>
                  <div class="input-group">
                    {{-- <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div> --}}
                    <input type="date" name="orderDate" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Delivery Date</label>
                  <div class="input-group">
                    {{-- <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div> --}}
                    <input type="date" name="deliveryDate" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputAddress1">Delivery Address</label>
                    <input type="text" name="deliveryAddress" class="form-control" id="exampleInputAddress1" placeholder="Enter Address">
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
                    <input type="text" name="customerName" class="form-control" id="exampleInputPrice1" placeholder="Enter Price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPrice1">Employee Name</label>
                    <input type="text" name="employeeName" class="form-control" id="exampleInputPrice1" placeholder="Enter Price">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
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