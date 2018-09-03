@extends('frontend.master')
@section('title')
    Home
@endsection
@section('content')
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
                                <div class='timer-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <a href="#" title="Fusce aliquam" class="product-image"><img src="images/accessories/1.jpg" alt="Fusce aliquam" /></a>
                                            <div class="box-timer">
                                                <div class="countbox_1 timer-grid"></div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <h2 class="product-name"><a href="#" title="Fusce aliquam">Fusce aliquam</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$99.00</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$170.00</span>
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
                                <div class='timer-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <a href="#" title="Quisque in arcu" class="product-image"><img src="images/accessories/2.jpg" alt="Quisque in arcu" /></a>
                                            <div class="box-timer">
                                                <div class="countbox_2 timer-grid"></div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <h2 class="product-name"><a href="#" title="Quisque in arcu">Quisque in arcu</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$699.00</span>
                                                </p>
                                                <p class="old-price">
                                                    <span class="price-label">Regular Price: </span>
                                                    <span class="price">$800.00</span>
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
                                <div class='timer-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <a href="#" title="pleasure rationally" class="product-image"><img src="images/accessories/3.jpg" alt="pleasure rationally" /></a>
                                            <div class="box-timer">
                                                <div class="countbox_3 timer-grid"></div>
                                            </div>
                                        </div>
                                        <div class="content-box">
                                            <h2 class="product-name"><a href="#" title="pleasure rationally">pleasure rationally</a></h2>
                                            <div class="price-box">
                                                <p class="special-price">
                                                    <span class="price-label">Special Price</span>
                                                    <span class="price">$222.00</span>
                                                </p>
                                                <p class="old-price"><span class="price-label">Regular Price: </span><span class="price">$333.00</span>
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
                        </div><!-- /#timely-owl -->
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel-products-container">
                        <div class="title-group2"><h2>Featured</h2></div>
                        <div id="featured-products" class="owl-container">
                            <div class="owl">
                                <div class='productslider-item item'>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <div class="product_icon">
                                                <div class='new-icon'><span>new</span></div>
                                            </div>
                                            <a href="#" title="Nunc facilisis" class="product-image">
                                                <img src="images/accessories/8.jpg" alt="Nunc facilisis" />
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
                                                <img src="images/accessories/3.jpg" alt="Nunc facilisis" />
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
                                                <img src="images/accessories/12.jpg" alt="Nunc facilisis" />
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
                                                <img src="images/accessories/6.jpg" alt="Nunc facilisis" />
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
                                                <img src="images/accessories/10.jpg" alt="Nunc facilisis" />
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
                                                <img src="images/accessories/14.jpg" alt="Nunc facilisis" />
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
                                                <img src="images/accessories/11.jpg" alt="Nunc facilisis" />
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
                        </div> <!-- /#featured-products -->
                    </div>
                </div>
            </div><!-- /Hot Deal & Featured -->

            <div class="row">
                <div class="col-sm-3 col-left">
                    <div class="block">
                        <div class="title-group"><h2>Special Offer</h2></div>
                        <div id="special-offer" class="owl-container">
                            <div class="owl">
                                <div class='sepecialoffer-item item'>
                                    <div class="item-inner first">
                                        <div class="images-container">
                                            <a href="#" title="Primis in faucibus" class="product-image">
                                                <img src="images/accessories/1.jpg" alt="Primis in faucibus" />
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
                                                <img src="images/accessories/14.jpg" alt="Accumsan elit " />
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
                                                <img src="images/accessories/5.jpg" alt="Nunc facilisis" />
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
                                                <img src="images/accessories/8.jpg" alt="Fusce aliquam" />
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
                                                <img src="images/accessories/9.jpg" alt="consequences" />
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
                                                <img src="images/accessories/12.jpg" alt="Cras neque metus" />
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
                                                <img src="images/accessories/4.jpg" alt="Etiam gravida" />
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
                                                <img src="images/accessories/9.jpg" alt="Donec non est" />
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
                                                <img src="images/accessories/10.jpg" alt="pleasure rationally" />
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
                                                <img src="images/accessories/5.jpg" alt="Aliquam consequat" />
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
                                                <img src="images/accessories/11.jpg" alt=" Donec ac tempus " />
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
                                                <img src="images/accessories/6.jpg" alt="occaecati cupiditate" />
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
                        <a href="#"><img alt="" src="images/ads/ads-13.jpg"></a>
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/1.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/2.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/3.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/4.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/5.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/6.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/7.jpg" alt="Nunc facilisis" />
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
                                </div><!-- /#new-products -->
                            </div>
                            <div class="tab-pane" id="products-popular">
                                <div id="popular-products" class="owl-container">
                                    <div class="owl">
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/10.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/12.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/13.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/14.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/15.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/16.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/7.jpg" alt="Nunc facilisis" />
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
                                </div><!-- /#popular-products -->
                            </div>
                            <div class="tab-pane" id="products-random">
                                <div id="random-products" class="owl-container">
                                    <div class="owl">
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/16.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/15.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/14.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/13.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                        <div class="sale-icon"><span>sale</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/12.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/11.jpg" alt="Nunc facilisis" />
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
                                        <div class='productslider-item item'>
                                            <div class="item-inner">
                                                <div class="images-container">
                                                    <div class="product_icon">
                                                        <div class='new-icon'><span>new</span></div>
                                                    </div>
                                                    <a href="#" title="Nunc facilisis" class="product-image">
                                                        <img src="images/accessories/10.jpg" alt="Nunc facilisis" />
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
                                <div>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <a href="#"> <img alt="" src="images/blog/blog-01.jpg" /> </a>
                                        </div>
                                        <div class="des-container">
                                            <div class="date-comments">
                                                <div class="time"><span class="date">August 04, 2015</span></div>
                                            </div>
                                            <div class="des">
                                                <h4><a href="#" class="title-blog"><span>swimwear for women</span></a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                                <a href="#" class="btn btn-default fwb">CONTINUS READING...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <a href="#"> <img alt="" src="images/blog/blog-02.jpg" /> </a>
                                        </div>
                                        <div class="des-container">
                                            <div class="date-comments">
                                                <div class="time"><span class="date">January 05, 2015</span></div>
                                            </div>
                                            <div class="des">
                                                <h4><a href="#" class="title-blog"><span>Burberry sport for men</span></a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                                <a href="#" class="btn btn-default fwb">CONTINUS READING...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="item-inner">
                                        <div class="images-container">
                                            <a href="#"> <img alt="" src="images/blog/blog-01.jpg" /> </a>
                                        </div>
                                        <div class="des-container">
                                            <div class="date-comments">
                                                <div class="time"><span class="date">August 04, 2015</span></div>
                                            </div>
                                            <div class="des">
                                                <h4><a href="#" class="title-blog"><span>swimwear for women</span></a></h4>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                                                <a href="#" class="btn btn-default fwb">CONTINUS READING...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.block - Latest News -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="block">
                        <div class="title-group"><h2>Clients Say</h2></div>
                        <div id="clients-say" class="owl-container">
                            <div class="owl">
                                <div class='testimonial-list'>
                                    <div class="testimonial-content">
                                        <div class="content">
                                            <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros...</a>
                                        </div>
                                        <div class="post-by">
                                            <div class="testimonial-content-avatar">
                                                <img src="images/avatar/avatar-01.jpg" alt="test" />
                                            </div>
                                            <div class="box-author">
                                                <span class="testimonial-author">Mr rooney</span>
                                                <span class="testimonial-date">March 24, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="content">
                                            <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et...</a>
                                        </div>
                                        <div class="post-by">
                                            <div class="testimonial-content-avatar">
                                                <img src="images/avatar/avatar-02.jpg" alt="test" />
                                            </div>
                                            <div class="box-author">
                                                <span class="testimonial-author">Robert Carlo</span>
                                                <span class="testimonial-date">January 30, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class='testimonial-list'>
                                    <div class="testimonial-content">
                                        <div class="content">
                                            <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et... </a>
                                        </div>
                                        <div class="post-by">
                                            <div class="testimonial-content-avatar">
                                                <img src="images/avatar/avatar-03.jpg" alt="test" />
                                            </div>
                                            <div class="box-author">
                                                <span class="testimonial-author">mr Lee</span>
                                                <span class="testimonial-date">January 30, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <div class="content">
                                            <a href="#">Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros...</a>
                                        </div>
                                        <div class="post-by">
                                            <div class="testimonial-content-avatar">
                                                <img src="images/avatar/avatar-01.jpg" alt="test" />
                                            </div>
                                            <div class="box-author">
                                                <span class="testimonial-author">Mr rooney</span>
                                                <span class="testimonial-date">March 24, 2015</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.block - Clients Say -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="title-group"><h2>Bestseller</h2></div>
                    <div class="product-list">
                        <div class="products-grid">
                            <div class="images-container">
                                <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="images/accessories/1.jpg"></a>
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
                                        <span class="price">$189.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid">
                            <div class="images-container">
                                <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="images/accessories/2.jpg"></a>
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
                                        <span class="price">$189.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid">
                            <div class="images-container">
                                <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="images/accessories/3.jpg"></a>
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
                                        <span class="price">$189.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-list -->
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="title-group"><h2>Hot sale</h2></div>
                    <div class="product-list">
                        <div class="products-grid">
                            <div class="images-container">
                                <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="images/accessories/4.jpg"></a>
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
                                        <span class="price">$189.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid">
                            <div class="images-container">
                                <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="images/accessories/5.jpg"></a>
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
                                        <span class="price">$189.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid">
                            <div class="images-container">
                                <a class="product-image" title="Accumsan elit " href="#"><img alt="Accumsan elit " src="images/accessories/6.jpg"></a>
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
                                        <span class="price">$189.00</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.product-list -->
                </div>
            </div>

        </div><!-- /.container -->
    </div><!-- /.main -->
@endsection
