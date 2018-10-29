<div class="header">
    <div class="topbar">
        <div class="container">
            <div class="topbar-left">
                <ul class="topbar-nav clearfix">
                    <li><span class="phone">0(123) 456 789</span></li>
                    <li><span class="email">info@plazathemes.com</span></li>
                    <!-- <li><span class="address">info@plazathemes.com</span></li> -->
                </ul>
            </div>
            <div class="topbar-right">
                <ul class="topbar-nav clearfix">

                    <li><a href="" class="login">Login</a></li>
                    <li class="dropdown">
                        <a href="#" class="account dropdown-toggle" data-toggle="dropdown">My Acount</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a title="My Account" href="account.html">My Account</a></li>
                            {{--<li><a title="My Wishlist" href="wishlist.html">My Wishlist</a></li>--}}
                            <li><a title="My Cart" href="{{url('/card')}}">My Cart</a></li>
                            {{--<li><a title="Checkout" href="checkout.html">Checkout</a></li>--}}
                            {{--<li><a title="Testimonial" href="testimonial.html">Testimonial</a></li>--}}
                        </ul>
                    </li>
                   <!--  <li class="dropdown">
                        <a href="#" class="currency dropdown-toggle" data-toggle="dropdown">USD</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#">Euro</a></li>
                            <li><a href="#">US Dollar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="language dropdown-toggle" data-toggle="dropdown"><img src="images/flag-us.png" alt=""> English</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="#"><img src="images/flag-us.png" alt=""> &nbsp;English</a></li>
                            <li><a href="#"><img src="images/flag-spain.png" alt=""> &nbsp;Spanish</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div><!-- /.container -->
    </div><!-- /.topbar -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{asset('/')}}" class="logo"><img src="{{asset('frontend/images/logo-green.png')}}" alt=""></a>
                </div>
                <div class="col-md-9">
                    <div class="support-client">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="box-container time">
                                    <div class="box-inner">
                                        <h2>working time</h2>
                                        <p>Mon- Sun: 8.00 - 18.00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box-container free-shipping">
                                    <div class="box-inner">
                                        <h2>Free shipping</h2>
                                        <p>On order over $199</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="box-container money-back">
                                    <div class="box-inner">
                                        <h2>Money back 100%</h2>
                                        <p>Within 30 Days after delivery</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.support-client -->
                    <form class="form-search"  method="post" action="{{route('search')}}">
                        {{csrf_field()}}
                        <input type="text" class="input-text" name="search" id="search" placeholder="Search ..." value="">
                        <div class="dropdown">
                            <button type="button" class="btn" data-toggle="dropdown">All category <span class="fa fa-angle-down"></span></button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                @foreach($categories as $cate)
                                    <li><a href="{{asset('product/list/')}}/{{$cate->id}}">{{$cate->name}}</a></li>
                                @endforeach
                              
                            </ul>
                        </div>
                        <button type="submit" class="btn btn-danger"><span class="fa fa-search"></span></button>
                    </form>
                    <div class="mini-cart">
                        <a href="{{url('/card')}}">
                        <div class="top-cart-title">
                            {{--<a href="{{url('/card')}}" class="dropdown-toggle" data-toggle="dropdown">--}}
                                {{--your cart--}}
                                {{--<span class="price">{{$total}}</span>--}}
                            {{--</a>--}}
                            {{--<div class="dropdown-menu dropdown-menu-right">--}}
                                {{--<div class="cart-listing">--}}

                                    {{--<div class="media">--}}
                                        {{--<div class="media-left">--}}
                                            {{--<a href="#"><img src="{{asset('upload/images/product')}}/{{$ct->options->img}}" alt="" class="img-responsive"></a>--}}
                                        {{--</div>--}}
                                        {{--<div class="media-body">--}}
                                            {{--<button type="button" class="remove-cart-item" >&times;</button>--}}
                                            {{--<h4>{{$ct->name}}</h4>--}}
                                            {{--<div class="mini-cart-qty">{{$ct->qty}}</div>--}}
                                            {{--<div class="mini-cart-price">--}}
                                                {{--{{number_format(($ct->price-($ct->price*$ct->sale)/100)*$ct->qty)}}--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}

                                {{--</div><!-- /.cart-listing -->--}}
                                {{--<div class="mini-cart-subtotal">Shipping: <span class="price">{{$shiping}}</span></div>--}}
                                {{--<div class="mini-cart-subtotal">Total: <span class="price">{{$total}}</span></div>--}}
                                {{--<div class="checkout-btn">--}}
                                    {{--<a href="{{url('card')}}" class="btn btn-default btn-md fwb">Detail Card</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="mega-container visible-lg visible-md">
                        <div class="navleft-container">
                            <div class="mega-menu-title"><h3>Category</h3></div>
                            <div class="mega-menu-category" style="display:none;">
                                <ul class="nav">
                                    @foreach($categories as $key => $cate)
                                        @if($key < 8)
                                            <li class="nosub"><a href="{{asset('product/list/')}}/{{$cate->id}}">{{$cate->name}}</a></li>
                                        @else
                                            <li class="more-menu"><a href="{{asset('product/list/')}}/{{$cate->id}}">{{$cate->name}}</a></li>
                                        @endif
                                    @endforeach
                                    {{--<li class="more-menu"><a href="#">Bags &amp; Cases</a></li>--}}
                                    {{--<li class="more-menu"><a href="#">Accessories</a></li>--}}
                                    <li class="view-more"><a href="#">More category</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <ul class="menu clearfix visible-lg visible-md">
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Introduce</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">New</a></li>
                        {{--<li><a href="{{url('/login')}}">Login</a></li>--}}
                        <li><a href="{{url('/registration')}}">Register</a></li>
                        <li><a href="{{url('/contact')}}">Contact</a></li>                      
                    </ul>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-primary navbar-static-top hidden-lg hidden-md">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h2 class="navbar-brand visible-xs">Menu</h2>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}">Home</a></li> 
                         @foreach($categories as $key => $cate)                          
                            <li class="nosub"><a href="{{asset('product/list/')}}/{{$cate->id}}">{{$cate->name}}</a></li>                            
                        @endforeach                     
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </div><!-- /.header-bottom -->
</div><!-- /.header -->
