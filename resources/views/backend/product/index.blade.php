@extends('backend.master')
@section('title')
    List Product
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
            <li><a href="{{asset('/product/list')}}">Subcategoty</a></li>
            <li><a style="margin-left: 1100px; color: #2B5797; " href="{{asset('/product/create')}}">Add Subcategoty</a></li>
        </ul>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white user"></i><span class="break"></span>List Product</h2>
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
                            <th>ID</th>
                            <th>Subcategory </th>
                            <th>Name </th>
                            <th>content</th>
                            <th>description</th>
                            <th>price</th>
                            <th>sale</th>
                            <th>tosale</th>
                            <th>fromsale</th>
                            <th>image</th>
                            <th>qty</th>
                            <th>Status</th>
                            <th>Actions (View - Edit - Delete)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($product as $key => $pro)
                            <tr>
                                <td>{{$pro->id}}</td>
                                <td class="center">{{$pro->subcategory->name}}</td>
                                <td class="center">{{$pro->category->name}}</td>
                                <td class="center">{{$pro->name}}</td>
                                <td class="center">{{$pro->content}}</td>
                                <td class="center">{{$pro->description}}</td>
                                <td class="center">{{$pro->price}}</td>
                                <td class="center">{{$pro->sale}}</td>
                                <td class="center">{{$pro->tosale}}</td>
                                <td class="center">{{$pro->fromsale}}</td>
                                <td class="center">{{$pro->image}}</td>
                                <td class="center">{{$pro->qty}}</td>
                                <td class="center">
                                    @if($pro->status==0)
                                        <span class="label label-danger">Disible</span>
                                    @else
                                        <span class="label label-success">Enable</span>
                                    @endif
                                </td>
                                <td class="center">
                                    <a class="btn btn-success" href="#" title="View">
                                        <i class="halflings-icon white zoom-in"></i>
                                    </a>
                                    <a class="btn btn-info" href="{{asset('subcategory/edit')}}/{{$pro->id}}">
                                        <i class="halflings-icon white edit" title="Edit"></i>
                                    </a>
                                    <a class="btn btn-danger" href="{{asset('subcategory/delete')}}/{{$pro->id}}" title="Delete" onclick="xacnhanxoa()">
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
