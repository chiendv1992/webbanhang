@extends('backend.master')
@section('title')
    View Order
@endsection
@section('content')
    <!-- start: Content -->
    <div id="content" class="span10">
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="{{url('/dashboard')}}">Dashboard</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="{{asset('/order/list')}}">Order Detail</a></li>

        </ul>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white user"></i><span class="break"></span>List Order</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>

                <div class="box-content">
                    <table class="table table-striped table-bordered bootstrap-datatable datatable">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Product</th>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Image</th>
                            <th>Total</th>
                            <th>QTY</th>
                            <th>Status</th>
                            <th>Sale</th>
                            <th>Status</th>
                            <th>Actions (View - Edit - Delete)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orderdetails as $key => $orderdetail)
                            @if($orders->id == $orderdetail->order_id)
                            <tr>
                                <td>{{$orderdetail->id}}</td>
                                <td class="center">{{$orderdetail->product->name}}</td>
                                <td class="center">{{$orderdetail->order->date_orders}}</td>
                                <td class="center">{{$orderdetail->order->total}}</td>
                                <td class="center">{{$orderdetail->product->image}}</td>
                                <td class="center">{{$orderdetail->order->status}}</td>
                                <td class="center">{{$orderdetail->order->type}}</td>
                                <td class="center">{{$orderdetail->order->qty}}</td>
                                <td class="center">{{$orderdetail->product->sale}}</td>
                                <td class="center">
                                    @if($orderdetail->status==0)
                                        <span class="label label-warning">Pending</span>
                                    @elseif($orderdetail->status==1)
                                        <span class="label label-success">successful</span>
                                    @elseif($orderdetail->status==2)
                                        <span class="label label-info">appro</span>
                                    @else
                                        <span class="label label-primary">cancel</span>
                                    @endif
                                </td>

                                <td class="center">
                                    <a class="btn btn-info" href="{{asset('order/edit')}}/{{$orderdetail->id}}">
                                        <i class="halflings-icon white edit" title="Edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{asset('$order/delete')}}/{{$orderdetail->id}}" title="Delete" onclick="xacnhanxoa()">
                                        <i class="halflings-icon white trash"></i>
                                    </a>

                                </td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--/span-->
        </div><!--/row-->\
    </div>
@endsection()
