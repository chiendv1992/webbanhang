@extends('frontend.master')
@section('title')
    Login
@endsection
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Login</li>
            </ul>
        </div>
    </div>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title page-title-line">
                        <h1>Login</h1>
                        <hr>
                    </div>
                    <p class="text-muted">All fields are required</p>
                    @if(session('err'))
                        <div class="alert alert-danger">
                            {{session('err')}}
                        </div>
                    @endif
                    <form action="" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="text" name="email" class="form-control" value="{{ old('email',isset($user) ? $user['email'] : null) }}">
                                    @if($errors->has('name'))
                                        <p style="color: red"> {{$errors->first('email')}} </p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>Password *</label>
                                    <input type="password" name="password" class="form-control" value="{{ old('address',isset($user) ? $user['password'] : null) }}">
                                    @if($errors->has('password'))
                                        <p style="color: red"> {{$errors->first('password')}} </p>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-default btn-lg">Login </button>
                        <button type="reset" class="btn btn-danger btn-lg">Reset </button>
                        <button type="button" class="btn btn-primary btn-lg">Registration </button>
                    </form>
                    <br>
                </div>

                <div id="map"></div>
            </div>
        </div><!-- /.main -->
    </div>
    <hr>
    @include('frontend.layout.topproduct')
    @include('frontend.layout.brands')
@endsection
