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
                                    <ul class="bxslider">
                                        @foreach($images as $image)
                                            @if($image->product_id == $productdetail->id)
                                                <li class="thumbnail-item">
                                                    <a href="" class="cloud-zoom-gallery" title="" name="{{asset('upload/images/product/detail/')}}/{{$image->images}}"
                                                       rel="useZoom: 'ma-zoom1', smallImage: '{{asset('upload/images/product/detail/')}}/{{$image->images}}'">
                                                        <img src="{{asset('upload/images/product/detail/')}}/{{$image->images}}" alt="" />
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-shop col-sm-7">
                            <div class="product-name">
                                <h1>{{$productdetail->name}}</h1>
                            </div>
                            <div class="ratings">
                                <div class="rating-box">
                                    <div style="width:67%" class="rating"></div>
                                </div>
                                <span class="amount"><a href="#">1 Review(s)</a></span>
                            </div>
                            <div class="box-container2">
                                <div class="price-box">
                                    <p class="special-price">
                                        <span class="price-label">Special Price</span>
                                        <span id="product-price-1" class="price">$99.00</span>
                                    </p>
                                    <p class="old-price">
                                        <span class="price-label">Regular Price:</span>
                                        <span id="old-price-1" class="price">$170.00</span>
                                    </p>
                                </div>
                            </div>
                            <div class="short-description">
                                <div class="std">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer enim purus, posuere at ultricies eu, placerat a felis.</div>
                            </div>
                            <p class="availability in-stock">Availability: <span>In stock</span></p>
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
                            <li><a href="#product-review" data-toggle="tab">Content</a></li>
                            <li><a href="#product-tags" data-toggle="tab">PRODUCT TAGS</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-desc">
                                {!! $productdetail->description !!}
                            </div>
                            <div class="tab-pane" id="product-review">
                                {!! $productdetail->content!!}
                            </div>
                            <div class="tab-pane" id="product-tags">...</div>
                        </div>
                    </div><!-- /.product-tab -->
                </div><!-- /.product-view -->
                <div class="featuredproductslider-container">
                    <div class="title-group1"><h2>Upsell products</h2></div>
                    <div id="featured-products" class="owl-container">
                        <div class="owl">
                            <div class='productslider-item item'>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <div class="product_icon">
                                            <div class='new-icon'><span>new</span></div>
                                        </div>
                                        <a href="#" title="Nunc facilisis" class="product-image">
                                            <img src="images/products/8.jpg" alt="Nunc facilisis" />
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
                                        <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">$169.99</span>
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
                            <div class='productslider-item item'>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <div class="product_icon">
                                            <div class='new-icon'><span>new</span></div>
                                        </div>
                                        <a href="#" title="Nunc facilisis" class="product-image">
                                            <img src="images/products/3.jpg" alt="Nunc facilisis" />
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
                                        <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">$169.99</span>
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
                            <div class='productslider-item item'>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <div class="product_icon">
                                            <div class='new-icon'><span>new</span></div>
                                        </div>
                                        <a href="#" title="Nunc facilisis" class="product-image">
                                            <img src="images/products/21.jpg" alt="Nunc facilisis" />
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
                                        <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">$169.99</span>
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
                            <div class='productslider-item item'>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <div class="product_icon">
                                            <div class='new-icon'><span>new</span></div>
                                        </div>
                                        <a href="#" title="Nunc facilisis" class="product-image">
                                            <img src="images/products/6.jpg" alt="Nunc facilisis" />
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
                                        <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">$169.99</span>
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
                            <div class='productslider-item item'>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <div class="product_icon">
                                            <div class='new-icon'><span>new</span></div>
                                        </div>
                                        <a href="#" title="Nunc facilisis" class="product-image">
                                            <img src="images/products/10.jpg" alt="Nunc facilisis" />
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
                                        <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">$169.99</span>
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
                            <div class='productslider-item item'>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <div class="product_icon">
                                            <div class='new-icon'><span>new</span></div>
                                        </div>
                                        <a href="#" title="Nunc facilisis" class="product-image">
                                            <img src="images/products/14.jpg" alt="Nunc facilisis" />
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
                                        <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">$169.99</span>
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
                            <div class='productslider-item item'>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <div class="product_icon">
                                            <div class='new-icon'><span>new</span></div>
                                        </div>
                                        <a href="#" title="Nunc facilisis" class="product-image">
                                            <img src="images/products/20.jpg" alt="Nunc facilisis" />
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
                                        <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">$169.99</span>
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
                    </div>
                </div><!-- /.featuredproductslider-container -->
            </div><!-- /.col-right -->
            <div class="col-sm-3 col-left">
                <div class="block">
                    <div class="title-group"><h2>Related</h2></div>
                    <div id="special-offer" class="owl-container">
                        <div class="owl">
                            <div class='sepecialoffer-item item'>
                                <div class="item-inner first">
                                    <div class="images-container">
                                        <a href="#" title="Primis in faucibus" class="product-image">
                                            <img src="images/products/15.jpg" alt="Primis in faucibus" />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="Primis in faucibus">Primis in faucibus</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price">$169.99</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price">$189.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:87%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <a href="#" title="Accumsan elit " class="product-image">
                                            <img src="images/products/14.jpg" alt="Accumsan elit " />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="Accumsan elit ">Accumsan elit </a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price">$169.99</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price">$189.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:67%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <a href="#" title="Nunc facilisis" class="product-image">
                                            <img src="images/products/5.jpg" alt="Nunc facilisis" />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="Nunc facilisis">Nunc facilisis</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price">$169.99</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price">$189.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:67%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner last">
                                    <div class="images-container">
                                        <a href="#" title="Fusce aliquam" class="product-image">
                                            <img src="images/products/8.jpg" alt="Fusce aliquam" />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="Fusce aliquam">Fusce aliquam</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price">$169.99</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price">$189.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:67%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='sepecialoffer-item item'>
                                <div class="item-inner first">
                                    <div class="images-container">
                                        <a href="h#" title="consequences" class="product-image">
                                            <img src="images/products/9.jpg" alt="consequences" />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="consequences">consequences</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price">$169.99</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price">$189.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:73%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner">
                                    <div class="images-container">
                                        <a href="#" title="Cras neque metus" class="product-image">
                                            <img src="images/products/12.jpg" alt="Cras neque metus" />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="Cras neque metus">Cras neque metus</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price">$169.99</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price">$189.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:67%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner ">
                                    <div class="images-container">
                                        <a href="#" title="Etiam gravida" class="product-image">
                                            <img src="images/products/4.jpg" alt="Etiam gravida" />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="Etiam gravida">Etiam gravida</a></h2>
                                        <div class="price-box">
                                            <p class="old-price">
                                                <span class="price-label">Regular Price: </span><span class="price">$432.00</span>
                                            </p>
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">$321.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:67%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner last">
                                    <div class="images-container">
                                        <a href="#" title="Donec non est" class="product-image">
                                            <img src="images/products/9.jpg" alt="Donec non est" />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="Donec non est">Donec non est</a></h2>
                                        <div class="price-box">
                                            <p class="old-price">
                                                <span class="price-label">Regular Price: </span><span class="price">$721.00</span>
                                            </p>
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">$631.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:73%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class='sepecialoffer-item item'>
                                <div class="item-inner first">
                                    <div class="images-container">
                                        <a href="#" title="pleasure rationally" class="product-image">
                                            <img src="images/products/10.jpg" alt="pleasure rationally" />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="pleasure rationally">pleasure rationally</a></h2>
                                        <div class="price-box">
                                            <p class="old-price">
                                                <span class="price-label">Regular Price: </span><span class="price">$333.00</span>
                                            </p>
                                            <p class="special-price">
                                                <span class="price-label">Special Price</span>
                                                <span class="price">$222.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:67%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner ">
                                    <div class="images-container">
                                        <a href="#" title="Aliquam consequat" class="product-image">
                                            <img src="images/products/5.jpg" alt="Aliquam consequat" />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="Aliquam consequat">Aliquam consequat</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price">$169.99</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price">$189.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:60%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner ">
                                    <div class="images-container">
                                        <a href="#" title=" Donec ac tempus " class="product-image">
                                            <img src="images/products/11.jpg" alt=" Donec ac tempus " />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title=" Donec ac tempus "> Donec ac tempus </a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price">$169.99</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price">$189.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:80%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-inner last">
                                    <div class="images-container">
                                        <a href="#" title="occaecati cupiditate" class="product-image">
                                            <img src="images/products/6.jpg" alt="occaecati cupiditate" />
                                        </a>
                                    </div>
                                    <div class="des-container">
                                        <h2 class="product-name"><a href="#" title="occaecati cupiditate">occaecati cupiditate</a></h2>
                                        <div class="price-box">
                                            <p class="special-price">
                                                <span class="price">$169.99</span>
                                            </p>
                                            <p class="old-price">
                                                <span class="price">$189.00</span>
                                            </p>
                                        </div>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <div class="rating" style="width:67%"></div>
                                            </div>
                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

@endsection
