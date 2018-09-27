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
                    <form action="" method="post">
                        {{csrf_field()}}
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Name </th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Type</th>
                            <th>Gender</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$orders->id}}</td>
                            <td class="center">{{$orders->customer->name}}</td>
                            <td class="center">{{$orders->customer->email}}</td>
                            <td class="center">{{$orders->customer->address}}</td>
                            <td class="center">{{$orders->customer->phone}}</td>
                            <td class="center">
                                @if($orders->type==1)
                                    {{'Direct payment'}}
                                @else
                                    {{'Payment via card'}}
                                @endif
                            </td>
                            <td class="center">
                                @if($orders->customer->gender==1)
                                    {{'Male'}}
                                @else
                                    {{'Female'}}
                                @endif
                            </td>
                            <td class="center">
                                @if($orders->type==1)
                                    <select name="status" id="">
                                        @if($orders->status==0)
                                            <option value="0" selected="selected">Success</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Appro</option>
                                            <option value="3">Cancel</option>
                                        @elseif($orders->status==1)
                                            <option value="0" >Success</option>
                                            <option value="1" selected="selected">Pending</option>
                                            <option value="2">Appro</option>
                                            <option value="3">Cancel</option>
                                        @elseif($orders->status==2)
                                            <option value="0">Success</option>
                                            <option value="1">Pending</option>
                                            <option value="2"selected="selected">Appro</option>
                                            <option value="3">Cancel</option>
                                        @else
                                            <option value="0">Success</option>
                                            <option value="1">Pending</option>
                                            <option value="2">Appro</option>
                                            <option value="3" selected="selected">Cancel</option>
                                        @endif
                                    </select>
                                @else
                                    <span class="label label-warning">successful</span>
                                @endif
                            </td>
                            <td class="center">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div><!--/span-->
        </div><!--/row-->\
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
                    <hr>
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
                            <th>Sale</th>
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
                                <td class="center">{{$orderdetail->order->type}}</td>
                                <td class="center">{{$orderdetail->order->qty}}</td>
                                <td class="center">{{$orderdetail->product->sale}}</td>
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
