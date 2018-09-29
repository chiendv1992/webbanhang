@extends('backend.master')
@section('title')
    Add Category
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
        </ul>
        <form method="post" action="{{route('admin.product.create')}}" class="form-horizontal" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header" >
                        <h2>Create New Product</h2>
                    </div>
                </div>
            </div>
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white edit"></i><span class="break"></span>Basic product</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Category</label>
                                <div class="controls">
                                    <select name="category">
                                        @foreach($category as $key=>$cate)
                                            <option value='{{$cate->id}}'>{{$cate->name}}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('category'))
                                        <p style="color: red"> {{$errors->first('category')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Status</label>
                                <div class="controls">
                                    <select name="status">
                                        <option value="1">Enable</option>
                                        <option value="0">Disibale</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Name </label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="focusedInput" type="text" name="name" value="{{ old('name',isset($product) ? $product['name'] : null) }}">
                                    @if($errors->has('name'))
                                        <p style="color: red"> {{$errors->first('name')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Code </label>
                                <div class="controls"><input class="input-xlarge focused" id="focusedInput" type="text" name="code" value="{{ old('code',isset($product) ? $product['code'] : null) }}">
                                    @if($errors->has('code'))
                                        <p style="color: red"> {{$errors->first('code')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Price</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="focusedInput" type="number" name="price" value="{{ old('price',isset($product) ? $product['price'] : null) }}">
                                    @if($errors->has('price'))
                                        <p style="color: red"> {{$errors->first('price')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Sale</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="focusedInput" type="text" name="sale" value="{{ old('sale',isset($product) ? $product['sale'] : null) }}">
                                    @if($errors->has('sale'))
                                        <p style="color: red"> {{$errors->first('sale')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">fromsale</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="focusedInput" type="date" name="fromsale" value="{{ old('fromsale',isset($product) ? $product['fromsale'] : null) }}">
                                    @if($errors->has('fromsale'))
                                        <p style="color: red"> {{$errors->first('fromsale')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">tosale</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="focusedInput" type="date" name="tosale" value="{{ old('tosale',isset($product) ? $product['tosale'] : null) }}">
                                    @if($errors->has('tosale'))
                                        <p style="color: red"> {{$errors->first('tosale')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Quanlity</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="focusedInput" type="text" name="qty" value="{{ old('qty',isset($product) ? $product['qty'] : null) }}">
                                    @if($errors->has('qty'))
                                        <p style="color: red"> {{$errors->first('qty')}} </p>
                                    @endif
                                </div>
                            </div>
                    </fieldset>
                </div>
            </div><!--/span-->
        </div><!--/row-->
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white edit"></i><span class="break"></span>Content</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <fieldset>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2"><d>Descriotion</d></label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="3" name="description">
                                    {{ old('description',isset($product) ? $product['description'] : null) }}
                                </textarea>
                            </div>
                        </div>
                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea3">Content</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea3" rows="3" name="contents">
                                    {{ old('contents',isset($product) ? $product['contents'] : null) }}
                                </textarea>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div><!--/span-->
        </div><!--/row-->
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white edit"></i><span class="break"></span>Image</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Image</label>
                            <div class="controls">
                                <div class="span6"><input class="input-xlarge focused" id="" type="file" name="image">
                                    @if($errors->has('image'))
                                        <p style="color: red"> {{$errors->first('image')}} </p>
                                    @endif
                                </div>
                                <div class="span6">
                                    <label class="control-label" for="focusedInput"><h3>Secondary Image</h3></label>
                                    @for($i=1;$i<=10;$i++)
                                        <div class="controls">
                                            <input class="input-xlarge focused" id="focusedInput" type="file" name="images[]" value="{{ old('images[]',isset($product) ? $product['images[]'] : null) }}">
                                            @if($errors->has('images[]'))
                                                <p style="color: red"> {{$errors->first('images[]')}} </p>
                                            @endif
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div><!--/span-->
        </div><!--/row-->
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Save Category</button>
                <button type="reset" class="btn btn-success">Reset</button>
                <button class="btn">Cancel</button>
            </div>
        </form>
    </div>

@endsection()

