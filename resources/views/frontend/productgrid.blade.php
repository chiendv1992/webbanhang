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
                    @foreach($product as $key=>$pro)
                        <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="{{asset('upload/images/product/')}}/{{$pro['img']['image']}}" alt="Nunc facilisis" />
                                    </a>
                                    <div class="box-hover">
                                        <ul class="add-to-links">
                                            <li><a href="#" class="link-quickview">Quick View</a></li>
                                            <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                            <li><a href="#" class="link-compare">Add to Compare</a></li>
                                            <li><a href="#" class="link-cart">Add to Cart</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="des-container">
                                    <h2 class="product-name"><a href="#" title="Nunc facilisis">{{$pro->name}}</a></h2>
                                    <div class="price-box">
                                        <p class="special-price">
                                            <span class="price-label">Special Price</span>
                                            <span class="price">{{$pro->price}}</span>
                                        </p>
                                        <p class="old-price">
                                            <span class="price-label">Regular Price: </span>
                                            <span class="price">$189.00</span>
                                        </p>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div class="rating" style="width:67%"></div>
                                        </div>
                                        <span class="amount"><a href="#">3 Review(s)</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- /.product -->
                {{$product->links()}}
                <hr>
            </div><!-- /.col-right -->
        </div>
    </div>
</div><!-- /.main -->

<div class="catlist">
    <div class="container">
        <div class="title-group1">
            <h2>Top Categories</h2>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="image-cat">
                            <a href="#/"><img alt="Electronic" src="images/products/img-05.jpg"></a>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="name-cat"><h3>Electronics</h3></div>
                        <a class="view-more" href="#">view more</a>
                    </div>
                </div>
                <div class="list-cat">
                    <ul>
                        <li><a href="#">Batteries &amp; Chargers</a></li>
                        <li><a href="#">Headphone, Headset</a></li>
                        <li><a href="#">Home Audio</a></li>
                        <li><a href="#">Mp3 Player Accessories</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="image-cat">
                            <a href="#/"><img alt="Electronic" src="images/products/img-06.jpg"></a>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="name-cat"><h3>jewelry &amp; watches</h3></div>
                        <a class="view-more" href="#">view more</a>
                    </div>
                </div>
                <div class="list-cat">
                    <ul>
                        <li><a href="#">Men Watches</a></li>
                        <li><a href="#">Wedding Rings</a></li>
                        <li><a href="#">Earring</a></li>
                        <li><a href="#">Necklaces</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="image-cat">
                            <a href="#/"><img alt="Electronic" src="images/products/img-07.jpg"></a>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="name-cat"><h3>Smartphones &amp; tablets</h3></div>
                        <a class="view-more" href="#">view more</a>
                    </div>
                </div>
                <div class="list-cat">
                    <ul>
                        <li><a href="#">Accessories for iPhone</a></li>
                        <li><a href="#">Accessories for iPad</a></li>
                        <li><a href="#">Accessories for Tablet PC</a></li>
                        <li><a href="#">Tablet PC</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="image-cat">
                            <a href="#/"><img alt="Electronic" src="images/products/img-08.jpg"></a>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="name-cat"><h3>camera &amp; hobbies</h3></div>
                        <a class="view-more" href="#">view more</a>
                    </div>
                </div>
                <div class="list-cat">
                    <ul>
                        <li><a href="#">Walkera</a></li>
                        <li><a href="#">Fpv System &amp; Parts</a></li>
                        <li><a href="#">RC Cars &amp; Parts</a></li>
                        <li><a href="#">Helicopters &amp; Part</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.catlist -->

<div class="brands">
    <div class="container">
        <div class="title-group1">
            <h2>popular brand</h2>
        </div>
        <div id="brands" class="owl-container">
            <div class="owl">
                <div class='item'>
                    <div class="item-innner">
                        <a href="#" title=""><img src="images/brand/logo_brand5.png" alt="" /></a>
                    </div>
                </div>
                <div class='item'>
                    <div class="item-innner">
                        <a href="#" title=""><img src="images/brand/logo_brand4.png" alt="" /></a>
                    </div>
                </div>
                <div class='item'>
                    <div class="item-innner">
                        <a href="#" title=""><img src="images/brand/logo_brand3.png" alt="" /></a>
                    </div>
                </div>
                <div class='item'>
                    <div class="item-innner">
                        <a href="#" title=""><img src="images/brand/logo_brand2.png" alt="" /></a>
                    </div>
                </div>
                <div class='item'>
                    <div class="item-innner">
                        <a href="#" title=""><img src="images/brand/logo_brand1.png" alt="" /></a>
                    </div>
                </div>
                <div class='item'>
                    <div class="item-innner">
                        <a href="#" title=""><img src="images/brand/logo_brand3.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div><!-- /#brands -->
    </div>
</div><!-- /.brands -->

@endsection
