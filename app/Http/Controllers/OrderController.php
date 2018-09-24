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
        //
    }


    public function destroy($id)
    {
        //
    }
}
