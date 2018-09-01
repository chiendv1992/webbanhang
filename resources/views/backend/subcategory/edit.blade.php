@extends('backend.master')
@section('title')
    Add SubCategory
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
            <li><a href="{{asset('/subcategory/list')}}">SubCategoty</a></li>
        </ul>
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white edit"></i><span class="break"></span>Add </h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form method="post" action="{{url('/subcategory/edit')}}/{{$subcategory->id}}" class="form-horizontal">
                        {{csrf_field()}}
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Category</label>
                                <div class="controls">
                                    <select name="category">
                                        @foreach($category as $cate)

                                                <option value="{{$cate->id}}"
                                                    @if($cate->id==$subcategory->cate_id)
                                                        selected="selected"
                                                    @endif
                                                >-- {{$cate->name}} --</option>

                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Name Subcategory</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="focusedInput" type="text" name="name" value="{{ old('name',isset($subcategory) ? $subcategory['name'] : null) }}">
                                    @if($errors->has('name'))
                                        <p style="color: red"> {{$errors->first('name')}} </p>
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
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save Category</button>
                                <button class="btn">Cancel</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!--/span-->

        </div><!--/row-->

    </div>
@endsection()
