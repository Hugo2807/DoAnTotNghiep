@extends('adminshop.mastershop')
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('adminshop.index') }}">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header">
          <a href="{{ route('adminshop.invoice.create') }}">
            <h3 class="card-title">Add New</h3>
          </a>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: auto">Id</th>
                    <th style="width: auto">Order Date</th>
                    <th style="width: auto">Delivery Date</th>
                    <th style="width: auto">Delivery Address</th>
                    <th style="width: auto">Status</th>
                    <th style="width: auto">Customer Name</th>
                    <th style="width: auto">Customer Phone</th>
                    <th style="width: auto">Employee Name</th>
                    <th style="width: auto">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @if (!empty($data))
                    @foreach ($data as $item)
                      <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{date('d-m-Y',strtotime($item->orderDate))}}</td>
                        <td>{{date('d-m-Y',strtotime($item->deliveryDate))}}</td>
                        <td>{{$item['deliveryAddress']}}</td>
                        <td>{{$item['invoiceStatus']}}</td>
                        <td>{{$item['customerName']}}</td>
                        <td>{{$item['employeeName']}}</td>
                        <td>
                          <div class="btn-group">
                            <abbr title="Sửa dữ liệu">
                              <a href="{{ route('adminshop.invoice.edit', $item['id'])}}" class="mr-1">
                                <button type="button" class="btn btn-default btn-sm">
                                  <i class="nav-icon fas fa-edit"></i>
                                </button>
                              </a>
                            </abbr>
                            <abbr title="Xem chi tiết">
                              <a href="{{ route('adminshop.invoice.detail', $item['id'])}}" class="mr-1">
                                <button type="button" class="btn btn-default btn-sm">
                                  <i class="far fa-file-alt"></i>
                                </button>
                              </a>
                            </abbr>
                            <abbr title="Xóa dữ liệu">
                              <a onclick="return confirm('Do you want to delete this invoice?')" href="{{ route('adminshop.invoice.delete', $item['id'])}}">
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
                      <td>Không có hóa đơn</td>
                  @endif
                </tbody>
              </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection