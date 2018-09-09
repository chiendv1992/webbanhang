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
                    <form>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>First Name*</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Last Name*</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Subject*</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Message*</label>
                                    <textarea class="form-control" rows="7"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default btn-lg">SUBMIT FORM</button>
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
