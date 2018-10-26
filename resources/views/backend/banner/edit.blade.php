@extends('backend.master')
@section('title')
    Edit Banner
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
            <li><a href="{{asset('/banner/list')}}">Banner</a></li>
        </ul>
        <div class="row-fluid sortable">
            <div class="box span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon white edit"></i><span class="break"></span>Edit Banner</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <form method="post" action="" class="form-horizontal" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Title</label>
                                <div class="controls">
                                    <input class="input-xlarge focused" id="focusedInput" type="text" name="title" value="{{ old('title',isset($banner) ? $banner['title'] : null) }}">
                                    @if($errors->has('title'))
                                        <p style="color: red"> {{$errors->first('title')}} </p>
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
                            <div class="box-content">
                                <fieldset>
                                    <div class="control-group">
                                        <label class="control-label" for="focusedInput">Image</label>
                                        <div class="controls">
                                            <div class="span6">
                                                <img src="{{asset('/upload/images/banner/')}}/{{$banner->images}}" alt="" width="200px">
                                                <input type="hidden" name="img_curr" value="{{$banner->images}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="span6">
                                                <input type="file" name="images">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary">Save Banner</button>
                                <button class="btn">Cancel</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div><!--/span-->

        </div><!--/row-->

    </div>
@endsection()
