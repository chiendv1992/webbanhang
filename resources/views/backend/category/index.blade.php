@extends('backend.master')
@section('title')
    List Category
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
		<li><a href="{{asset('/category/list')}}">Categoty</a></li>
        <li><a style="margin-left: 1100px; color: #2B5797; " href="{{asset('/category/create')}}">Add Categoty</a></li>
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
                            <th>Name Category</th>
                            <th>Status</th>
                            <th>Actions (View - Edit - Delete)</th>
                        </tr>
                    </thead>
                    <tbody>
                            @foreach($category as $key => $cate)
                                <tr>
                                    <td>{{$cate->id}}</td>
                                    <td class="center">{{$cate->name}}</td>
                                    <td class="center">
                                        @if($cate->status==0)
                                            <span class="label label-danger">Disible</span>
                                        @else
                                            <span class="label label-success">Enable</span>
                                        @endif
                                    </td>
                                    <td class="center">
                                         <a class="btn btn-success" href="#" title="View">
                                             <i class="halflings-icon white zoom-in"></i>
                                         </a>
                                         <a class="btn btn-info" href="{{asset('category/edit')}}/{{$cate->id}}">
                                             <i class="halflings-icon white edit" title="Edit"></i>
                                         </a>
                                         <a class="btn btn-danger" href="{{asset('category/delete')}}/{{$cate->id}}" title="Delete" onclick="xacnhanxoa()">
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
