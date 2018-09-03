@extends('backend.master')
@section('title')
    Show Product
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
            <li><a href="{{asset('/product/list')}}">Product</a></li>
            <li><a style="margin-left: 1100px; color: #2B5797; " href="{{asset('/product/create')}}">Add Product</a></li>
        </ul>
        <div class="row-fluid "><h2>Detail Product</h2></div>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white user"></i><span class="break"></span>Detail </h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>

                <div class="box-content">
                    <div class="row-fluid">
                        <div class="span12">
                            <h2>Basic product specifications</h2><br>
                            <div class="row-fluid">
                                <div class="span6">
                                    <table class="table table-striped table-bordered ">
                                        <tr>
                                            <th>Category</th>
                                            <td>{{$product->category->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Name</th>
                                            <td>{{$product->name}}</td>
                                        </tr>
                                        <tr>
                                            <th>Code</th>
                                            <td>{{$product->code}}</td>
                                        </tr>
                                        <tr>
                                            <th>Slug</th>
                                            <td>{{$product->slug}}</td>
                                        </tr>
                                        <tr>
                                            <th>Rrice</th>
                                            <td>{{$product->price}}</td>
                                        </tr>
                                        <tr>
                                            <th>Sale</th>
                                            <td>{{$product->sale}}</td>
                                        </tr>
                                        <tr>
                                            <th>From sale</th>
                                            <td>{{$product->fromsale}}</td>
                                        </tr>
                                        <tr>
                                            <th>To sale</th>
                                            <td>{{$product->tosale}}</td>
                                        </tr>
                                        <tr>
                                            <th>Quanlity</th>
                                            <td>{{$product->qty}}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>
                                                @if($product->status==0)
                                                    <span class="label label-danger">Disible</span>
                                                @else
                                                    <span class="label label-success">Enable</span>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Image</th>
                                            <td><img src="{{asset('/upload/image/product/')}}/{{$product->image}}" alt="" width="300px"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="span6">
                                    <div class="control-group hidden-phone">
                                        <label class="control-label" for="textarea2"><d>Descriotion</d></label>
                                        <div class="controls">
                                            <textarea class="cleditor" id="textarea2" rows="3" name="description">{{$product->description}}</textarea>
                                        </div>
                                    </div>
                                    <div class="control-group hidden-phone">
                                        <label class="control-label" for="textarea3">Content</label>
                                        <div class="controls">
                                            <textarea class="cleditor" id="textarea3" rows="3" name="contents">{{$product->content}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/span-->
        </div><!--/row-->
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white user"></i><span class="break"></span>Image Detail</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>

                <div class="box-content">
                    <fieldset>
                        <div class="control-group">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Product </th>
                                    <th>Images Detail </th>
                                    <th>Action </th>
                                </tr>
                                </thead>
                                <tbody>

                                {{--{{dd($product->category->name)}}--}}
                                @foreach($image as $img)
                                    @if($img->product_id == $product->id)
                                        <tr>
                                            <td>{{$img->id}}</td>
                                            <td class="center">{{$img->product->name}}</td>
                                            <td class="center"><img src="{{asset('/upload/images/product/detail')}}/{{$img->images}}" alt="" width="300px"></td>
                                            <td class="center">
                                                <a class="btn btn-success" href="#" title="View">
                                                    <i class="halflings-icon white zoom-in"></i>
                                                </a>
                                                <a class="btn btn-info" href="{{asset('product/edit')}}/{{$img->id}}">
                                                    <i class="halflings-icon white edit" title="Edit"></i>
                                                </a>
                                                <a class="btn btn-danger" href="{{asset('product/delete')}}/{{$img->id}}" title="Delete" onclick="xacnhanxoa()">
                                                    <i class="halflings-icon white trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                    </fieldset>

                </div>
            </div><!--/span-->
        </div><!--/row-->
    </div>
@endsection()
