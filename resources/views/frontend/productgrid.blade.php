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
                {{--<div class="block block-layered-nav">--}}
                    {{--<div class="block-title">--}}
                        {{--<strong><span>Sort By</span></strong>--}}
                    {{--</div>--}}
                    {{--<div class="block-content">--}}
                        {{--<p class="block-subtitle">Shopping Options</p>--}}
                        {{--<div id="narrow-by-list">--}}
                            {{--<div class="layered layered-Category">--}}
                                {{--<h2>Category</h2>--}}
                                {{--<div class="content-shopby">--}}
                                    {{--<ol>--}}
                                        {{--<li><a href="#">Clothing</a></li>--}}
                                        {{--<li><a href="#">Accessories</a></li>--}}
                                        {{--<li><a href="#">Bags</a></li>--}}
                                        {{--<li><a href="#">Shoes</a></li>--}}
                                        {{--<li><a href="#">HandBag</a></li>--}}
                                        {{--<li><a href="#">Fashion</a></li>--}}
                                    {{--</ol>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="layered layered-price">--}}
                                {{--<h2>Price</h2>--}}
                                {{--<div class="content-shopby">--}}
                                    {{--<div id="slider-range"></div>--}}
                                    {{--<div id="search_pr">--}}
                                        {{--<input type="text" name="first_price" class="form-control">--}}
                                        {{--<input type="text" name="last_price" class="form-control">--}}
                                        {{--<button id="search_price" name="search_price" type="button" class="btn btn-default">SHOW</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="layered layered-Manufacturer">--}}
                                {{--<h2>Manufacturer</h2>--}}
                                {{--<div class="content-shopby">--}}
                                    {{--<ol>--}}
                                        {{--<li><a href="#">Aliquam</a></li>--}}
                                        {{--<li><a href="#">Duis tempus id </a></li>--}}
                                        {{--<li><a href="#">Leo quis molestie. </a></li>--}}
                                        {{--<li><a href="#">Suspendisse </a></li>--}}
                                        {{--<li><a href="#">Nunc gravida </a></li>--}}
                                    {{--</ol>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="layered layered-Color">--}}
                                {{--<h2>Color</h2>--}}
                                {{--<div class="content-shopby">--}}
                                    {{--<ol>--}}
                                        {{--<li><a href="#">Red</a></li>--}}
                                        {{--<li><a href="#">Orange</a></li>--}}
                                        {{--<li><a href="#">Blue</a></li>--}}
                                        {{--<li><a href="#">Black</a></li>--}}
                                        {{--<li><a href="#">Green</a></li>--}}
                                    {{--</ol>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div><!-- /sort -->--}}
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
                </div>
                <div class="block">
                    <div class="title-group"><h2>Special Offer</h2></div>
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
            </div><!-- /.col-left -->
            <div class="col-sm-9 col-right">
                <div class="banner">
                    <a href="#"><img alt="" src="images/ads/ads-17.jpg"></a>
                </div>
                <div class="page-title">
                    <h1>CATEGORY GRID</h1>
                </div>
                <div class="toolbar">
                    <div class="sorter">
                        <p class="view-mode">
                            <label>View as:</label>
                            <strong class="grid" title="Grid">Grid</strong>&nbsp;
                            <a class="list" title="List" href="#">List</a>&nbsp;
                        </p>
                    </div><!-- /.sorter -->
                    <div class="pager">
                        <div class="sort-by hidden-xs">
                            <label>Sort By:</label>
                            <select class="form-control input-sm">
                                <option selected="selected">Position</option>
                                <option>Name</option>
                                <option>Price</option>
                            </select>
                            <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                        </div>
                        <div class="limiter hidden-xs">
                            <label>Show:</label>
                            <div class="limiter-inner">
                                <select class="form-control input-sm">
                                    <option>9</option>
                                    <option selected="selected">12</option>
                                    <option>24</option>
                                    <option>36</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- /.pager -->
                </div><!-- /.toolbar -->
                <div class="row products">
                    <div class="col-md-3 col-sm-6">
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
                    </div>
                    <div class="col-md-3 col-sm-6">
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
                    </div>
                    <div class="col-md-3 col-sm-6">
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
                    </div>
                    <div class="col-md-3 col-sm-6">
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
                    </div>
                    <div class="col-md-3 col-sm-6">
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
                    </div>
                    <div class="col-md-3 col-sm-6">
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
                    </div>
                    <div class="col-md-3 col-sm-6">
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                        <div class="sale-icon"><span>sale</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="images/products/1.jpg" alt="Nunc facilisis" />
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                        <div class="sale-icon"><span>sale</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="images/products/2.jpg" alt="Nunc facilisis" />
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                        <div class="sale-icon"><span>sale</span></div>
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
                                    <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                        <div class="sale-icon"><span>sale</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="images/products/4.jpg" alt="Nunc facilisis" />
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                        <div class="sale-icon"><span>sale</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="images/products/5.jpg" alt="Nunc facilisis" />
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
                    <div class="col-md-3 col-sm-6">
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
                                    <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="images/products/7.jpg" alt="Nunc facilisis" />
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                        <div class="sale-icon"><span>sale</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="images/products/1.jpg" alt="Nunc facilisis" />
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                        <div class="sale-icon"><span>sale</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="images/products/2.jpg" alt="Nunc facilisis" />
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                        <div class="sale-icon"><span>sale</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="images/products/4.jpg" alt="Nunc facilisis" />
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                        <div class="sale-icon"><span>sale</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="images/products/5.jpg" alt="Nunc facilisis" />
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
                    <div class="col-md-3 col-sm-6">
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
                                    <h2 class="product-name"><a href="#" title="Nunc facilisis">Demonstraverunt lectores</a></h2>
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
                    <div class="col-md-3 col-sm-6">
                        <div class='productslider-item item'>
                            <div class="item-inner">
                                <div class="images-container">
                                    <div class="product_icon">
                                        <div class='new-icon'><span>new</span></div>
                                    </div>
                                    <a href="#" title="Nunc facilisis" class="product-image">
                                        <img src="images/products/7.jpg" alt="Nunc facilisis" />
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
                </div><!-- /.product -->
                <div class="toolbar">
                    <div class="sorter">
                        <p class="view-mode">
                            <label>View as:</label>
                            <strong class="grid" title="Grid">Grid</strong>&nbsp;
                            <a class="list" title="List" href="#">List</a>&nbsp;
                        </p>
                    </div><!-- /.sorter -->
                    <div class="pager">
                        <div class="sort-by hidden-xs">
                            <label>Sort By:</label>
                            <select class="form-control input-sm">
                                <option selected="selected">Position</option>
                                <option>Name</option>
                                <option>Price</option>
                            </select>
                            <a title="Set Descending Direction" href="#"><span class="fa fa-sort-amount-desc"></span></a>
                        </div>
                        <div class="limiter hidden-xs">
                            <label>Show:</label>
                            <div class="limiter-inner">
                                <select class="form-control input-sm">
                                    <option>9</option>
                                    <option selected="selected">12</option>
                                    <option>24</option>
                                    <option>36</option>
                                </select>
                            </div>
                        </div>
                    </div><!-- /.pager -->
                </div><!-- /.toolbar -->
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
