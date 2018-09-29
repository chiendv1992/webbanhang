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
                            <a href="#" title="{{$brand->name}}"><img src="{{asset('upload/images/product/')}}/{{$brand->image}}" alt="" width="250px"/></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- /#brands -->
    </div>
</div><!-- /.brands -->
