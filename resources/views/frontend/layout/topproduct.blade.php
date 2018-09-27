<div class="catlist">
    <div class="container">
        <div class="title-group1">
            <h2>Top Product</h2>
        </div>
        <div class="row">
            @foreach($top as $tp)
                <div class="col-md-3 col-sm-6">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="image-cat">
                                <a href="#/"><img alt="Electronic" src="{{asset('upload/images/product/')}}/{{$tp->image}}"></a>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="name-cat"><h3>{{$tp->name}}</h3></div>
                            <a class="view-more" href="#">view more</a>
                        </div>
                    </div>
                    {{--<div class="list-cat">--}}
                    {{--<ul>--}}
                    {{--<li><a href="#">Batteries &amp; Chargers</a></li>--}}
                    {{--<li><a href="#">Headphone, Headset</a></li>--}}
                    {{--<li><a href="#">Home Audio</a></li>--}}
                    {{--<li><a href="#">Mp3 Player Accessories</a></li>--}}
                    {{--</ul>--}}
                    {{--</div>--}}
                </div>
            @endforeach
        </div>
    </div>
</div><!-- /.catlist -->
