<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        $data = Invoice::orderBy('id', 'ASC')->get();
        return view('adminshop.invoice.index', compact('data'));
    }

    public function create()
    {
        return view('adminshop.invoice.create');
    }

    public function postcreate(Request $request)
    {
        // $data = $request->all();
        // $invoice = new Invoice($data);
        // $invoice->save();

        $data = $request->all();
        $invoice = Invoice::create($data);

        return redirect()->route('adminshop.invoice.index')->with('msg', 'Thêm hóa đơn thành công');
    }

    public function detail(){
        return view('adminshop.invoice.index');
    }

    public function edit($id)
    {
        $result = Invoice::find($id);
        return view('adminshop.invoice.edit', compact('result'));
    }

    public function updateInvoice(Request $request, $id)
    {
        $data = Invoice::find($id);
        $data->orderDate = $request->orderDate;
        $data->deliveryDate = $request->deliveryDate;
        $data->deliveryAddress = $request->deliveryAddress;
        $data->invoiceStatus = $request->invoiceStatus;
        $data->customerName = $request->customerName;
        $data->employeeName = $request->employeeName;
        // $data = [
        //     $request->orderDate,
        //     $request->deliveryDate,
        //     $request->deliveryAddress,
        //     $request->invoiceStatus,
        //     $request->customerName,
        //     $request->employeeName,
        // ];
        //dd($data);
        $data->save();

        return redirect()->route('adminshop.invoice.index')->with('msg', 'Cập nhật nhà cung cấp thành công');
    }

    public function delete($id)
    {
        Invoice::find($id)->delete();
        return redirect()->route('adminshop.invoice.index')->with('msg', 'Xóa hóa đơn thành công');
    }
}
