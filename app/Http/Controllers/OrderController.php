<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Orderdetail;
use App\Model\Order;

class OrderController extends Controller
{

    public function index()
    {
        $orderdetails = Orderdetail::all();
        $orders = Order::all();
        return view('backend.order.index',['orderdetail'=>$orderdetails,'orders'=>$orders]);
    }
    public function show($id)
    {
       $orders = Order::find($id);
       $orderdetails = Orderdetail::all();
       return view('backend.order.view',['orders'=>$orders,'orderdetails'=>$orderdetails]);

    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        return redirect()->route('list')->with('success','Update Order Success !!!');
    }


    public function destroy($id)
    {
        //
    }
}
