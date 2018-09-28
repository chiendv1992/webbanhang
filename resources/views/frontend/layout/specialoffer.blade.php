
    <div class="block">
        <div class="title-group"><h2>Special Offer</h2></div>
        <div id="special-offer" class="owl-container">
            <div class="owl">
                <div class='sepecialoffer-item item'>
                    @foreach($pecialproduct as $peci)
                        <div class="item-inner first">
                            <div class="images-container">
                                <a href="#" title="Primis in faucibus" class="product-image">
                                    <img src="{{asset('upload/images/product/')}}/{{$peci->image}}" alt="Primis in faucibus" />
                                </a>
                            </div>
                            <div class="des-container">
                                <h2 class="product-name"><a href="#" title="Primis in faucibus">{{$peci->name}}</a></h2>
                                <div class="price-box">
                                    @if($peci->sale != 0)
                                        <p class="special-price">
                                            <span class="price">{{number_format($peci->price - ($peci->price*$peci->sale)/100)}}</span>
                                        </p>
                                        <p class="old-price">
                                            <span class="price">{{number_format($peci->price)}}</span>
                                        </p>
                                    @else
                                        <p class="special-price">
                                            <span class="price">{{number_format($peci->price)}}</span>
                                        </p>
                                    @endif
                                </div>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div class="rating" style="width:87%"></div>
                                    </div>
                                    {{--<span class="amount"><a href="#">1 Review(s)</a></span>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='sepecialoffer-item item'>
                    @foreach($pecialproduct as $peci)
                        <div class="item-inner first">
                            <div class="images-container">
                                <a href="#" title="Primis in faucibus" class="product-image">
                                    <img src="{{asset('upload/images/product/')}}/{{$peci->image}}" alt="Primis in faucibus" />
                                </a>
                            </div>
                            <div class="des-container">
                                <h2 class="product-name"><a href="#" title="Primis in faucibus">{{$peci->name}}</a></h2>
                                <div class="price-box">
                                    @if($peci->sale != 0)
                                        <p class="special-price">
                                            <span class="price">{{$peci->price - ($peci->price*$peci->sale)/100}}</span>
                                        </p>
                                        <p class="old-price">
                                            <span class="price">{{$peci->price}}</span>
                                        </p>
                                    @else
                                        <p class="special-price">
                                            <span class="price">{{$peci->price}}</span>
                                        </p>
                                    @endif
                                </div>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div class="rating" style="width:87%"></div>
                                    </div>
                                    {{--<span class="amount"><a href="#">1 Review(s)</a></span>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class='sepecialoffer-item item'>
                    @foreach($pecialproduct as $peci)
                        <div class="item-inner first">
                            <div class="images-container">
                                <a href="#" title="Primis in faucibus" class="product-image">
                                    <img src="{{asset('upload/images/product/')}}/{{$peci->image}}" alt="Primis in faucibus" />
                                </a>
                            </div>
                            <div class="des-container">
                                <h2 class="product-name"><a href="#" title="Primis in faucibus">{{$peci->name}}</a></h2>
                                <div class="price-box">
                                    @if($peci->sale != 0)
                                        <p class="special-price">
                                            <span class="price">{{$peci->price - ($peci->price*$peci->sale)/100}}</span>
                                        </p>
                                        <p class="old-price">
                                            <span class="price">{{$peci->price}}</span>
                                        </p>
                                    @else
                                        <p class="special-price">
                                            <span class="price">{{$peci->price}}</span>
                                        </p>
                                    @endif
                                </div>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div class="rating" style="width:87%"></div>
                                    </div>
                                    {{--<span class="amount"><a href="#">1 Review(s)</a></span>--}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div><!-- /.owl-container -->
    </div><!-- /.block - Special offer -->

