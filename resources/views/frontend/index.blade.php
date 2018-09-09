@extends('frontend.master')
@section('title')
    Home
@endsection
@section('content')
    <!-- banner -->
    <div class="flexslider ma-nivoslider">
        <div class="ma-loading"></div>
        <div id="ma-inivoslider-banner7" class="slides">
            @foreach($banner as $key => $bn)
                @if($bn->status == 1)
                    <img src="{{asset('/upload/images/banner/')}}/{{$bn->images}}" class="dn" alt="" title="{{$bn->title}}"  />
                @endif

            @endforeach
        </div>
        <div id="banner7-caption1" class="banner7-caption nivo-html-caption nivo-caption">
            <div class="timethai"></div>
            <div class="banner7-content slider-1">
                <div class="title-container">
                    <h1 class="title1">shopping bags</h1>
                    <h2 class="title2">fashion collection 2015</h2>
                </div>
                <div class="banner7-des">
                    <div class="des">
                        <h1>sale up to!</h1>
                        <h2>30% off</h2>
                        <div class="check-box">
                            <ul class="list-unstyled">
                                <li>With all products in shop</li>
                                <li>All combos $69.96</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="banner7-caption2" class="banner7-caption nivo-html-caption nivo-caption">
            <div class="timethai"></div>
            <div class="banner7-content slider-2">
                <div class="title-container">
                    <h1 class="title1">Our new range of</h1>
                    <h2 class="title2">women</h2>
                    <h3 class="title3">For less than $199.00</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- /.flexslider -->
    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="banner-left">
                        <div class="banner-box banner-box1">
                            <div class="box-inner">
                                <a href="#"><img alt="" src="{{asset('/frontend/images/ads/ads-09.jpg')}}" /></a>
                                <div class="text">
                                    <h1>sale up to</h1>
                                    <h2 class="font-style2">20% off</h2>
                                    <p class="font-style1">On selected products</p>
                                    <a class="link" href="#">buy now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="banner banner-double"><a href="#"><img alt="" src="images/ads/ads-10.jpg"></a></div>
                    <div class="banner banner-double"><a href="#"><img alt="" src="images/ads/ads-11.jpg"></a></div>
                </div>
                <div class="col-sm-4">
                    <div class="banner"><a href="#"><img alt="" src="images/ads/ads-12.jpg"></a></div>
                </div>
            </div><!-- /advertisement -->

            <div class="row">
                <div class="col-sm-6">
                    <div class="panel-products-container">
                        <div class="title-group2"><h2>Hot Deals</h2></div>
                        <div id="timely-owl" class="owl-container">
                            <div class="owl">
                                @foreach($hotdeals as $hotdeal)
                                    <div class='timer-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <a href="#" title="Fusce aliquam" class="product-image"><img src="{{asset('upload/images/product/')}}/{{$hotdeal->image}}" alt="Fusce aliquam" /></a>
                                            <div class="box-timer">
                                                <div class="countbox_1 timer-grid"></div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <h2 class="product-name"><a href="#" title="Fusce aliquam">{{$hotdeal->name}}</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$99.00</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">{{$hotdeal->price}}</span>
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
                                @endforeach
                            </div>
                        </div><!-- /#timely-owl -->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel-products-container">
                        <div class="title-group2"><h2>Featured</h2></div>
                        <div id="featured-products" class="owl-container">
                            <div class="owl">
                                @foreach($featured as $key =>$fea)
                                    <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            {{--<div class="product_icon">--}}
                                                {{--<div class='new-icon'><span>new </span></div>--}}
                                            {{--</div>--}}
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="{{asset('upload/images/product/')}}/{{$fea->image}}" alt="Nunc facilisis" />
                                            </a>
                                            <div class="box-hover">
                                                <ul class="add-to-links">
                                                    <li><a href="#" class="link-quickview">Quick View</a></li>
                                                    <li><a href="#" class="link-wishlist">Add to Wishlist</a></li>
                                                    <li><a href="#" class="link-compare">Add to Compare</a></li>
                                                    <li><a href="{{asset('purchase/')}}/{{$fea->id}}/{{$fea->slug}}" class="link-cart">Add to Cart</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="des-container">
                                            <h2 class="product-name"><a href="#" title="Nunc facilisis">{{$fea->name}}</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$169.99</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">{{$fea->price}}</span>
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
                                 @endforeach

                            </div>
                        </div> <!-- /#featured-products -->
                    </div>
                </div>
            </div><!-- /Hot Deal & Featured -->

            <div class="row">
                <div class="col-sm-3 col-left">
                    @include('frontend.layout.specialoffer')
                </div><!-- /.col-left -->
                <div class="col-sm-9 col-right">
                    <div class="banner">
                        <a href="#"><img alt="" src="{{asset('upload/images/bannerproduct.jpg')}}"></a>
                    </div>
                    <div class="newproductslider-container">
                        <div class="title-group1">
                            <ul id="producttabs">
                                <li class="active"><h3><a href="#products-newarrival" data-toggle="pill">New Arrival</a></h3></li>
                                <li><h3><a href="#products-popular" data-toggle="pill">Popular</a></h3></li>
                                <li><h3><a href="#products-random" data-toggle="pill">Random</a></h3></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="products-newarrival">
                                <div id="new-products" class="owl-container">
                                    <div class="owl">
                                        {{-- arrival product--}}
                                        @foreach($arrival as $arri)
                                            <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="{{asset('upload/images/product/')}}/{{$arri->image}}" alt="Nunc facilisis" />
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
                                                    <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                                    <div class="price-box">
                                                        <p class="special-price">
                                                            <span class="price-label">{{$arri->price}}</span>
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
                                       @endforeach
                                    </div>
                                </div><!-- /#new-products -->
                            </div>
                            <div class="tab-pane" id="products-popular">
                                <div id="popular-products" class="owl-container">
                                    <div class="owl">
                                        @foreach($arrival as $arri)
                                            <div class='productslider-item item'>
                                                <div class="item-inner">
                                                    <div class="images-container">
                                                        <div class="product_icon">
                                                            <div class='new-icon'><span>new</span></div>
                                                            <div class="sale-icon"><span>sale</span></div>
                                                        </div>
                                                        <a href="#" title="Nunc facilisis" class="product-image">
                                                            <img src="{{asset('upload/images/product/')}}/{{$arri->image}}" alt="Nunc facilisis" />
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
                                                        <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                                        <div class="price-box">
                                                            <p class="special-price">
                                                                <span class="price-label">{{$arri->price}}</span>
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
                                        @endforeach

                                    </div>
                                </div><!-- /#popular-products -->
                            </div>
                            <div class="tab-pane" id="products-random">
                                <div id="random-products" class="owl-container">
                                    <div class="owl">
                                        @foreach($arrival as $arri)
                                            <div class='productslider-item item'>
                                                <div class="item-inner">
                                                    <div class="images-container">
                                                        <div class="product_icon">
                                                            <div class='new-icon'><span>new</span></div>
                                                            <div class="sale-icon"><span>sale</span></div>
                                                        </div>
                                                        <a href="#" title="Nunc facilisis" class="product-image">
                                                            <img src="{{asset('upload/images/product/')}}/{{$arri->image}}" alt="Nunc facilisis" />
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
                                                        <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
                                                        <div class="price-box">
                                                            <p class="special-price">
                                                                <span class="price-label">{{$arri->price}}</span>
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
                                        @endforeach
                                    </div>
                                </div><!-- /#random-products -->
                            </div>
                        </div>
                    </div><!-- /.newproductslider-container -->
                </div><!-- /.col-right -->
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="banner">
                        <a href="#"><img alt="" src="images/ads/ads-14.jpg"></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="banner">
                        <a href="#"><img alt="" src="images/ads/ads-15.jpg"></a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="banner">
                        <a href="#"><img alt="" src="images/ads/ads-16.jpg"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="menu-recent block">
                        <div class="title-group"><h2>Latest News</h2></div>
                        <div id="latest-news" class="owl-container">
                            <div class="owl">
                                @foreach($lastnew as $ln)
                                    <div>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <a href="#"> <img alt="" src="{{asset('upload/images/product/')}}/{{$ln->image}}" /> </a>
                                        </div>
                                        <div class="des-container">
                                            <div class="date-comments">
                                                <div class="time"><span class="date">
                                                       <?php $tm = new DateTime();?>
                                                        {{$tm->format('Y-m-d H:i:s')}}
                                                    </span></div>
                                            </div>
                                            <div class="des">
                                                <h4><a href="#" class="title-blog"><span>swimwear for women</span></a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                                <a href="#" class="btn btn-default fwb">CONTINUS READING...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div><!-- /.block - Latest News -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="block">
                        <div class="title-group"><h2>Clients Say</h2></div>
                        <div id="clients-say" class="owl-container">
                            <div class="owl">
                                @foreach($clientssay as $clientssays)
                                    <div class='testimonial-list'>
                                    <div class="testimonial-content">
                                        <div class="content">
                                            <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros...</a>
                                        </div>
                                        <div class="post-by">
                                            <div class="testimonial-content-avatar">
                                                <img src="{{asset('upload/images/product/')}}/{{$clientssays->image}}" alt="test" />
                                            </div>
                                            <div class="box-author">
                                                <span class="testimonial-author">Mr rooney</span>
                                                <span class="testimonial-date">March 24, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="content">
                                            <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</a>
                                        </div>
                                        <div class="post-by">
                                            <div class="testimonial-content-avatar">
                                                <img src="{{asset('upload/images/product/')}}/{{$clientssays->image}}" alt="test" />
                                            </div>
                                            <div class="box-author">
                                                <span class="testimonial-author">Robert Carlo</span>
                                                <span class="testimonial-date">January 30, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div><!-- /.block - Clients Say -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="title-group"><h2>Bestseller</h2></div>
                    <div class="product-list">
                        @foreach($bestseller as $best)
                        <div class="products-grid">
                            <div class="images-container">
                                <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{{asset('upload/images/product/')}}/{{$best->image}}"></a>
                            </div>
                            <div class="des-container">
                                <h2 class="product-name"><a title="Accumsan elit " href="#">Demonstraverunt lectores</a></h2>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div style="width:67%" class="rating"></div>
                                    </div>
                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                </div>
                                <div class="price-box">
                                    <p class="special-price">
                                        <span class="price">$169.99</span>
                                    </p>
                                    <p class="old-price">
                                        <span class="price">{{$best->price}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!-- /.product-list -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="title-group"><h2>Hot sale</h2></div>
                    <div class="product-list">
                        @foreach($hotsale as $hot)
                        <div class="products-grid">
                            <div class="images-container">
                                <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="{{asset('upload/images/product/')}}/{{$hot->image}}"></a>
                            </div>
                            <div class="des-container">
                                <h2 class="product-name"><a title="Accumsan elit " href="#">Accumsan elit </a></h2>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div style="width:67%" class="rating"></div>
                                    </div>
                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                </div>
                                <div class="price-box">
                                    <p class="special-price">
                                        <span class="price">$169.99</span>
                                    </p>
                                    <p class="old-price">
                                        <span class="price">{{$hot->price}}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                            @endforeach()
                    </div><!-- /.product-list -->
                </div>
            </div>

        </div><!-- /.container -->
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
                                <a href="#/"><img alt="Women" src="images/accessories/img-09.jpg"></a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="name-cat"><h3>Women</h3></div>
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
                                <a href="#/"><img alt="Men" src="images/accessories/img-10.jpg"></a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="name-cat"><h3>Men</h3></div>
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
                                <a href="#/"><img alt="shoes & Bags" src="images/accessories/img-11.jpg"></a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="name-cat"><h3>shoes &amp; Bags</h3></div>
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
                                <a href="#/"><img alt="Accessories" src="images/accessories/img-12.jpg"></a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="name-cat"><h3>Accessories</h3></div>
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
                    @foreach($brands as $brand)
                        <div class='item'>
                            <div class="item-innner">
                                <a href="#" title="{{$brand->name}}"><img src="{{asset('upload/images/product/')}}/{{$brand->image}}" alt="" /></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div><!-- /#brands -->
        </div>
    </div><!-- /.brands -->
@endsection
