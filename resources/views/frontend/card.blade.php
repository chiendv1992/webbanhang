@extends('frontend.master')
@section('title')
    Cart
@endsection
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Shopping Cart</li>
        </ul>
    </div>
</div>

<div class="main">
    <div class="container">
        <div class="cart">

            <form action="card" method="post">
                {{csrf_field()}}
                <div class="table-responsive">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @endif
                    <table class="table custom-table">
                        <thead>
                        <tr class="first last">

                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Remove</th>
                            <th>Update</th>
                            <th>Sale</th>
                            <th>Price</th>
                            <th>Total</th>
                            <th>Grandtotal</th>
                        </tr>
                        </thead>
                        <tbody>
                        <form action="" method="post">
                            {{csrf_field()}}
                            @foreach($content as $key => $nd)
                                {{--{{  dd($nd)}}--}}
                                <tr>

                                    <td><a class="product-image" title="Primis in faucibus" href="#">
                                            <img alt="Primis in faucibus" src="{{asset('upload/images/product')}}/{{$nd->options->img}}">
                                        </a></td>
                                    <td>
                                        <a href="#">{{$nd->name}}</a>
                                        <input type="hidden" value=" {{$nd->id}}" name="id">

                                    </td>
                                    <td class="qty">
                                        <div class="input-group">
                                                {{--<span class="input-group-btn">--}}
                                                    {{--<button class="btn" type="button">-</button>--}}
                                                {{--</span>--}}
                                            <input type="number" name="qty" class="form-control" value="{{$nd->qty}}">
                                            {{--<span class="input-group-btn">--}}
                                                    {{--<button class="btn" type="button">+</button>--}}
                                                {{--</span>--}}
                                        </div><!-- /input-group -->
                                    </td>
                                    <td class="text-center">
                                        <a class="btn-remove" href="{{url('delete-card')}}/{{$nd->rowId}}">
                                            <img src="{{asset('upload/delete.png')}}" width="50px" alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <a class="updatecart" href="" >
                                            <input type="hidden" name="row" value="{{$nd->rowId}}" >
                                            <img src="{{asset('upload/update.jpg')}}" width="50px" alt="" >
                                        </a>
                                    </td>
                                    <td class="subtotal">
                                        {{number_format($nd->options->sale).'%'}}
                                        <input type="hidden" value=" {{number_format($nd->options->sale)}}" name="sale">
                                    </td>
                                    <td class="subtotal">
                                        {{number_format($nd->options->priceold)}}
                                        <input type="hidden" value=" {{$nd->options->priceold}}" name="price">
                                    </td>
                                    <td class="subtotal">
                                        {{number_format($nd->options->priceold*$nd->qty)}}
                                        <input type="hidden" value=" {{$nd->options->priceold*$nd->qty}}" name="total">
                                    </td>
                                    <td class="grandtotal">
                                        {{number_format($nd->price*$nd->qty)}}
                                        <input type="hidden" value=" {{$nd->price*$nd->qty}}" name="grantotal">
                                    </td>
                                </tr>
                            @endforeach
                        </form>
                        </tbody>
                    </table>
                </div>
                <div class="text-right">
                    <a href="{{asset('/')}}" class="btn btn-default btn-md">CONTINUE SHOPPING</a>
                    {{--<button type="button" class="btn btn-danger btn-md">UPDATE SHOPPING CART</button>--}}
                </div>
                <div class="line2"></div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-cart-total">
                            <tr>
                                <td>Grandtotal:</td>
                                <td class="text-right">{{$total}}</td>
                            </tr>
                        </table>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Customer Info</h4>
                        <p class="text-muted">Enter your destination to get shipping</p>
                        <div class="form-group">
                            <label class="control-label">Name <em>*</em></label>
                            <input type="text" class="form-control" name="name">
                            @if($errors->has('name'))
                                <p style="color: red"> {{$errors->first('name')}} </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email <em>*</em></label>
                            <input type="email" class="form-control" name="email">
                            @if($errors->has('email'))
                                <p style="color: red"> {{$errors->first('email')}} </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Phone <em>*</em></label>
                            <input type="number" class="form-control" name="phone">
                            @if($errors->has('phone'))
                                <p style="color: red"> {{$errors->first('phone')}} </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input type="text" class="form-control" name="address">
                            @if($errors->has('address'))
                                <p style="color: red"> {{$errors->first('address')}} </p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Gender</label><br>
                            <input type="radio"  name="gender"  value="1"> Male<br>
                            <input type="radio"  name="gender" value="0"> Female
                            @if($errors->has('gender'))
                                <p style="color: red"> {{$errors->first('gender')}} </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <h4>SHIPPING METHOD</h4>
                        {{--<p class="text-muted">Enter your coupon code if you have one</p>--}}

                        <div class="form-group">
                            <label class="control-label">Choose Shipping</label><br>
                            <input type="radio"  name="payment"  value="1"> Direct payment<br>
                            <input type="radio"  name="payment" value="0"> Payment via card
                            @if($errors->has('payment'))
                                <p style="color: red"> {{$errors->first('payment')}} </p>
                            @endif
                        </div>

                    </div>
                </div>
                <div class="row col-sm-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-md">Agree to Order</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div><!-- /.main -->

@endsection
