<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Customer;
use App\BillDetail;
use Illuminate\Http\Request;
use App\Traits\DeleteModelTrait;
use Illuminate\Support\Facades\DB;

class BillAdminController extends Controller
{

    public function index()
    {
        $customers = Customer::latest()->get();

        return view('order.index', [
            'customers' => $customers,

        ]);
    }

    public function edit($id)
    {

        $customerInfo = DB::table('customers')
            ->join('bills', 'customers.id', '=', 'bills.customer_id')
            ->select('customers.*', 'bills.id as bill_id', 'bills.total as bill_total', 'bills.note as bill_note', 'bills.status as bill_status')
            ->where('customers.id', '=', $id)
            ->first();

        $billInfo = DB::table('bills')
            ->join('bill_details', 'bills.id', '=', 'bill_details.bill_id')
            ->leftjoin('products', 'bill_details.product_id', '=', 'products.id')
            ->where('bills.customer_id', '=', $id)
            ->select('bills.*', 'bill_details.*', 'products.name as product_name')
            ->get();

        return view('order.edit', [
            'customerInfo' => $customerInfo,
            'billInfo' => $billInfo,
        ]);
    }

    public function update(Request $request, $id)
    {

        $bill = Bill::find($id);
        $bill->status = $request->input('status');
        $bill->save();

        return redirect()->route('orders.index');
    }

    public function delete(Customer $customer)
    {


            $billId = Bill::where('customer_id', $customer->id)->first();
            BillDetail::where('bill_id', $billId->id)->delete();
            Bill::where('customer_id', $customer->id)->delete();
            Customer::where('id', $customer->id)->delete();
             return response()->json([
                 'code' => 200,
                 'message' => 'success',
             ], 200);




    }
}
