@extends('backend.master')
@section('title')
    List Contact
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
            <li><a href="{{asset('/contact/list')}}">Contact</a></li>
            <li><a style="margin-left: 1100px; color: #2B5797; " href="{{asset('/category/create')}}">Add Contact</a></li>
        </ul>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white user"></i><span class="break"></span>List Category</h2>
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
                            <th>Name Customer</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Content</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($coments as $key => $cont)
                            @if($cont->customer->status==1)
                            <tr>
                                <td>{{$cont->id}}</td>
                                <td class="center">{{$cont->customer->name}}</td>
                                <td class="center">{{$cont->customer->phone}}</td>
                                <td class="center">{{$cont->customer->address}}</td>
                                <td class="center">
                                    <p class="cleditor" id="textarea2" rows="3" name="description">{{$cont->content}}</p>
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
