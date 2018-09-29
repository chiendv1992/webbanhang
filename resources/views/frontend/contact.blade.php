@extends('frontend.master')
@section('title')
    Contact
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contac us</li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="page-title page-title-line">
                        <h1>Contact Us</h1>
                    </div>
                    <p class="text-muted">All fields are required</p>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Full Name*</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name',isset($customer) ? $customer['name'] : null) }}">
                                    @if($errors->has('name'))
                                        <p style="color: red"> {{$errors->first('name')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="text" name="email" class="form-control" value="{{ old('email',isset($customer) ? $customer['email'] : null) }}">
                                    @if($errors->has('name'))
                                        <p style="color: red"> {{$errors->first('email')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Address*</label>
                                    <input type="text" name="address" class="form-control" value="{{ old('address',isset($customer) ? $customer['address'] : null) }}">
                                    @if($errors->has('address'))
                                        <p style="color: red"> {{$errors->first('address')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Phone*</label>
                                    <input type="number" name="phone" class="form-control" value="{{ old('phone',isset($customer) ? $customer['phone'] : null) }}">
                                    @if($errors->has('phone'))
                                        <p style="color: red"> {{$errors->first('phone')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Message (*)</label>
                                    <textarea class="form-control" rows="7" name="contents">{{ old('content',isset($comment) ? $comment['content'] : null) }}</textarea>
                                    @if($errors->has('content'))
                                        <p style="color: red"> {{$errors->first('contents')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="control-label">Gender</label><br>
                                <input type="radio"  name="gender"  value="1"> Male<br>
                                <input type="radio"  name="gender" value="0"> Female
                                @if($errors->has('gender'))
                                    <p style="color: red"> {{$errors->first('gender')}} </p>
                                @endif
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default btn-lg">Send Message </button>
                    </form>
                    <br>
                </div>
                <div class="col-sm-3">
                    <div class="block">
                        <div class="block-title">
                            <strong><span>Contact Info</span></strong>
                        </div>
                        <div class="block-content">
                            <div class="email add">
                                <p>Support@plazathemes.com</p>
                            </div>
                            <div class="phone add">
                                <p>(800) 0123 456 789</p>
                            </div>
                            <div class="address add">Address:
                                <p>1234 - Bandit Tringi lAliquam Vitae. New York</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map"></div>
        </div>
    </div><!-- /.main -->
@endsection
