@extends('backend.master')
@section('title')
    List Order
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
            <li><a href="{{asset('/order/list')}}">Order</a></li>

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
                            <th>Customer</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Type</th>
                            <th>Actions (View - Edit - Delete)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $key => $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td class="center">{{$order->customer->name}}</td>
                                <td class="center">{{$order->customer->address}}</td>
                                <td class="center">{{$order->customer->phone}}</td>
                                <td class="center">{{$order->customer->email}}</td>
                                <td class="center">{{$order->date_orders}}</td>
                                <td class="center">
                                    @if($order->type==1)
                                        @if($order->status==0)
                                            <span class="label label-warning">successful</span>
                                        @elseif($order->status==1)
                                            <span class="label label-success">Pending</span>
                                        @elseif($order->status==2)
                                            <span class="label label-info">appro</span>
                                        @else
                                            <span class="label label-primary">cancel</span>
                                        @endif
                                    @else
                                        <span class="label label-warning">successful</span>
                                    @endif

                                </td>
                                <td class="center">
                                    @if ($order->type==0)
                                        {{'Payment via card'}}
                                     @else
                                        {{'Direct payment'}}
                                    @endif
                                </td>
                                <td class="center">

                                    <a class="btn btn-info" href="{{asset('order/show')}}/{{$order->id}}">
                                        <i class="halflings-icon white edit" title="Edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{asset('orrder/delete')}}/{{$order->id}}" title="Delete" onclick="xacnhanxoa()">
                                        <i class="halflings-icon white trash"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--/span-->
        </div><!--/row-->\
    </div>
@endsection()
