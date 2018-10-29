@extends('frontend.master')
@section('title')
    {{$cate->name}}
@endsection
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Category Grid</li>
        </ul>
    </div>
</div>
<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-left">
                @include('frontend.layout.specialoffer')
            </div><!-- /.col-left -->
            <div class="col-sm-9 col-right">
                {{--<div class="banner">--}}
                    {{--<a href="#"><img alt="" src="{{asset('frontend/images/ads/ads-17.jpg')}}"></a>--}}
                {{--</div>--}}
                <div class="page-title">
                    <h1>CATEGORY GRID</h1>
                </div>
               <hr>
                <div class="row products">
                    @foreach($data as $key=>$pro )                    
                        @if($cate->id == $pro->cate_id)
                            <div class="col-md-3 col-sm-6">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="{{url('/detail/product')}}/{{$pro->id}}" title="Nunc facilisis" class="product-image">
                                                <img src="{{asset('upload/images/product/')}}/{{$pro->image}}" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="{{asset('purchase/')}}/{{$pro->id}}/{{$pro->slug}}" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="{{url('/detail/product')}}/{{$pro->id}}" title="Nunc facilisis">{{$pro->name}}</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">{{number_format($pro->price - $pro->price*$pro->sale/100)}}</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">
                                                        @if($pro->sale!=0)
                                                            {{$pro->price}}
                                                        @endif
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:67%"></div>
                                                </div>
                                                {{--<span class="amount"><a href="#">3 Review(s)</a></span>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                       
                        @endif
                    @endforeach
                </div><!-- /.product -->
                {{$data->links()}}
                <hr>
            </div><!-- /.col-right -->
        </div>
    </div>
</div><!-- /.main -->

@include('frontend.layout.topproduct')

@include('frontend.layout.brands')

@endsection
