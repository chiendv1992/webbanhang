@extends('frontend.master')
@section('title')
    Detail
@endsection
@section('content')
<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Detail Product</li>
        </ul>
    </div>
</div><!-- /.breadcrumbs -->

<div class="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-right">
                <div class="product-view">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="product-img-box">
                                <p class="product-image">
                                    <a href="{{asset('upload/images/product')}}/{{$productdetail->image}}" class="cloud-zoom" id="ma-zoom1">
                                        <img src="{{asset('upload/images/product')}}/{{$productdetail->image}}" alt="Fusce aliquam" title="Fusce aliquam" />
                                    </a>
                                </p>
                                <div class="more-views thumbnail-container">
                                    {{--<ul class="bxslider">--}}
                                        {{--@foreach($images as $image)--}}
                                            {{--@if($image->product_id == $productdetail->id)--}}
                                                {{--<li class="thumbnail-item">--}}
                                                    {{--<a href="" class="cloud-zoom-gallery" title="" name="{{asset('upload/images/product/detail/')}}/{{$image->images}}"--}}
                                                       {{--rel="useZoom: 'ma-zoom1', smallImage: '{{asset('upload/images/product/detail/')}}/{{$image->images}}'">--}}
                                                        {{--<img src="{{asset('upload/images/product/detail/')}}/{{$image->images}}" alt="" />--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                            {{--@endif--}}
                                        {{--@endforeach--}}
                                    {{--</ul>--}}
                                </div>
                            </div>
                        </div>
                        <div class="product-shop col-sm-7">
                            <div class="product-name">
                                <h1>{{$productdetail->name}}</h1>
                            </div>
                            {{--<div class="ratings">--}}
                                {{--<div class="rating-box">--}}
                                    {{--<div style="width:67%" class="rating"></div>--}}
                                {{--</div>--}}
                                {{--<span class="amount"><a href="#"></a></span>--}}
                            {{--</div>--}}
                            <div class="box-container2">
                                <div class="price-box">
                                    <p class="special-price">
                                        <span class="price-label">Special Price</span>
                                        <span id="product-price-1" class="price">{{number_format($productdetail->price - $productdetail->price*$productdetail->sale/100)}}</span>
                                    </p>
                                    <p class="old-price">
                                        <span class="price-label">Regular Price:</span>
                                        @if($productdetail->sale!=0)
                                            <span id="old-price-1" class="price">{{number_format($productdetail->price)}}</span>
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="short-description">
                                <div class="std">
                                    {!! $productdetail->description !!}
                                </div>
                            </div>
                            <p class="availability in-stock">Availability:
                                <span>
                                    @if(count($productdetail->qty!=0))
                                        {{'In stock'}}
                                    @else
                                        {{'Out stock'}}
                                    @endif

                                </span></p>
                            <form class="form-horizontal">
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-md-2 col-sm-3 control-label">Size <em>*</em></label>--}}
                                    {{--<div class="col-sm-7">--}}
                                        {{--<select class="form-control">--}}
                                            {{--<option value="">-- Please Select --</option>--}}
                                            {{--<option value="2">L +$2.00</option>--}}
                                            {{--<option value="1">M +$1.00</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-md-2 col-sm-3 control-label">Color <em>*</em></label>--}}
                                    {{--<div class="col-sm-7">--}}
                                        {{--<select class="form-control">--}}
                                            {{--<option value="">-- Please Select --</option>--}}
                                            {{--<option value="4">black +$2.00</option>--}}
                                            {{--<option value="3">blue +$1.00</option>--}}
                                            {{--<option value="5">yellow +$1.00</option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group">--}}
                                    {{--<label class="col-md-2 col-sm-3 control-label">Quantity:</label>--}}
                                    {{--<div class="col-md-3 col-sm-5">--}}
                                        {{--<div class="input-group qty">--}}
                                                    {{--<span class="input-group-btn">--}}
                                                        {{--<button class="btn" type="button">-</button>--}}
                                                    {{--</span>--}}
                                            {{--<input type="text" class="form-control" value="3">--}}
                                            {{--<span class="input-group-btn">--}}
                                                        {{--<button class="btn" type="button">+</button>--}}
                                                    {{--</span>--}}
                                        {{--</div><!-- /input-group -->--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<button type="submit" class="btn btn-danger btn-cart">Add to cart</button>--}}
                                {{--<button type="button" class="btn btn-default btn-wishlist">Add to wishlist</button>--}}
                                <a href="{{asset('purchase/')}}/{{$productdetail->id}}/{{$productdetail->slug}}" class="btn btn-default btn-compare">Add to cart</a>
                            </form>
                        </div><!-- /.product-shop -->
                    </div>
                    <div class="product-tab tab-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#product-desc" data-toggle="tab">PRODUCT DESCRIPTION</a></li>
                            <li><a href="#product-review" data-toggle="tab">CONTENT</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-desc">
                                {!! $productdetail->description !!}
                            </div>
                            <div class="tab-pane" id="product-review">
                                {!! $productdetail->content!!}
                            </div>

                        </div>
                    </div><!-- /.product-tab -->
                </div><!-- /.product-view -->
                <div class="featuredproductslider-container">
                    <div class="title-group1"><h2>Upsell products</h2></div>
                    <div id="featured-products" class="owl-container">
                        <div class="owl">
                            @foreach($usell as $us)
                                <div class='productslider-item item'>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <div class="product_icon">
                                            <div class='new-icon'><span>new</span></div>
                                        </div>
                                        <a href="{{url('/detail/product')}}/{{$us->id}}" title="Nunc facilisis" class="product-image">
                                            <img src="{{asset('upload/images/product/')}}/{{$us->image}}" alt="Nunc facilisis" />
                                        </a>
                                        <div class="box-hover">
                                            <ul class="add-to-links">
                                                {{--<li><a href="#" class="link-quickview">Quick View</a></li>--}}
                                                {{--<li><a href="#" class="link-wishlist">Add to Wishlist</a></li>--}}
                                                {{--<li><a href="#" class="link-compare">Add to Compare</a></li>--}}
                                                <li><a href="{{asset('purchase/')}}/{{$us->id}}/{{$us->slug}}" class="link-cart">Add to Cart</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="{{url('/detail/product')}}/{{$us->id}}" title="Nunc facilisis">{{$us->name}}</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">
                                                    @if($us->sale!=0)
                                                        {{number_format($us->price - $us->sale*$us->price/100)}}
                                                    @endif
                                                </span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price-label">Regular Price: </span>
                                                <span class="price">
                                                    @if($us->sale!=0)
                                                    {{number_format($us->price)}}
                                                        @endif
                                                </span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:67%"></div>
                                            </div>
                                            <span class="amount"><a href="#"></a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </div>
                </div><!-- /.featuredproductslider-container -->
            </div><!-- /.col-right -->
            <div class="col-sm-3 col-left">
                <div class="block">
                    <div class="title-group"><h2>Related</h2></div>
                    <div id="special-offer" class="owl-container">
                        <div class="owl">
                            @for($i=1; $i<=3; $i++)
                                <div class='sepecialoffer-item item'>
                                    @foreach($related as $rale)
                                        <div class="item-inner first">
                                        <div class="images-container">
                                            <a href="{{url('/detail/product')}}/{{$rale->id}}" title="Primis in faucibus" class="product-image">
                                                <img src="{{asset('upload/images/product/')}}/{{$rale->image}}" alt="Primis in faucibus" />
                                            </a>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="{{url('/detail/product')}}/{{$rale->id}}" title="Primis in faucibus">{{$rale->name}}</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price">{{number_format($rale->price - $rale->sale*$rale->price/100)}}</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price">
                                                        @if($rale->sale!=0)
                                                            {{number_format($rale->prce)}}
                                                        @endif
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="ratings">
                                                <div class="rating-box">
                                                    <div class="rating" style="width:87%"></div>
                                                </div>
                                                <span class="amount"><a href="#"></a></span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            @endfor

                        </div>
                    </div><!-- /.owl-container -->
                </div><!-- /.block - Special offer -->
                <div class="block block-list">
                    <div class="block-title">
                        <strong><span>Compare</span></strong>
                    </div>
                    <div class="block-content">
                        <p class="empty">You have no items to compare.</p>
                    </div>
                </div><!-- /.compare -->
                <div class="banner-left"><a href="#"><img src="images/ads/ads-01.jpg" alt=""></a>
                    <div class="banner-content">
                        <h1>sale up to</h1>
                        <h2>20% off</h2>
                        <p>on selected products</p>
                        <a href="#">buy now</a>
                    </div>
                </div><!-- /.banner-left -->
            </div><!-- /.col-left -->
        </div>
    </div>
</div><!-- /.main -->

@include('frontend.layout.topproduct')

@endsection
