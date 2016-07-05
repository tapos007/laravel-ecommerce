<li class="{{$class}}">
    <a class="prdocutname"
       href="{{route('shop.product',[$product->id])}}">{{$product->title}}</a>
    <div class="thumbnail">
        <a href="{{route('shop.product',[$product->id])}}"><img alt="{{$product->title}}"
                                                                src="{{asset('images/thurmb_image/'.$product->files[0]->thurm_url)}}"></a>
        <div class="shortlinks">
            <a class="details" href="{{route('shop.product',[$product->id])}}">DETAILS</a>
            <a class="wishlist mywishlist" data-id="{{$product->id}}" data-link="{{route('shop.ajax.wishlist')}}" href="#">WISHLIST</a>
            <a class="compare" href="#">COMPARE</a>
        </div>
        <div class="pricetag">
            <span class="spiral"></span><a href="{{route('shop.addcard',[$product->id])}}" class="productcart">ADD TO CART</a>
            <div class="price">
                <div class="pricenew">${{$product->sell_price}}</div>
                <div class="priceold"></div>
            </div>
        </div>
    </div>
</li>