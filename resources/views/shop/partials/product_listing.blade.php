<div class="col-lg-9">
    <!-- Category Products-->
    <section id="category">
        <!-- Sorting-->
        <div class="sorting well">
            <form class=" form-inline pull-left">
                Sort By :
                {!! Form::select('filter', ['title' => 'Title', 'sell_price' => 'Price'], \Illuminate\Support\Facades\Request::input('filter'), ['placeholder' => 'Pick a size...','id'=>"changeFilter"]) !!}

                &nbsp;&nbsp;
                Show:
                {!! Form::select('limit',[ 6 => 6, 12 => 12, 18 => 18, 24 => 24,  30 => 30], \Illuminate\Support\Facades\Request::input('limit'), ['placeholder' => 'Pick a size...','id'=>"changeNumberOfProduct"]) !!}
            </form>
            <div class="btn-group pull-right">
                <button class="btn" id="list"><i class="icon-th-list"></i>
                </button>
                <button class="btn btn-orange" id="grid"><i class="icon-th icon-white"></i></button>
            </div>
        </div>
        <!-- Category-->
        <section id="categorygrid">
            <ul class="thumbnails grid">
                @if(count($latestProduct)>0)
                    @foreach($latestProduct as $product)
                        <li class="col-lg-4 col-sm-6">
                            <a class="prdocutname" href="product.html">{{$product->title}}</a>
                            <div class="thumbnail">
                                <a href="#"><img alt="{{$product->title}}"
                                                 src="{{asset('images/thurmb_image/'.$product->files[0]->thurm_url)}}"></a>
                                <div class="shortlinks">
                                    <a class="details" href="#">DETAILS</a>
                                    <a class="wishlist" href="#">WISHLIST</a>
                                    <a class="compare" href="#">COMPARE</a>
                                </div>
                                <div class="pricetag">
                                    <span class="spiral"></span><a href="#" class="productcart">ADD
                                        TO CART</a>
                                    <div class="price">
                                        <div class="pricenew">${{$product->sell_price}}</div>
                                        <div class="priceold"></div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    @endforeach
                @endif
            </ul>
            <ul class="thumbnails list row">
                @if(count($latestProduct)>0)
                    @foreach($latestProduct as $product)
                        <li>
                            <div class="thumbnail">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4">
                                        <span class="offer tooltip-test">Offer</span>
                                        <a href="#"><img alt="{{$product->title}}"
                                                         src="{{asset('images/thurmb_image/'.$product->files[0]->thurm_url)}}"></a>
                                    </div>
                                    <div class="col-lg-8 col-sm-8">
                                        <a class="prdocutname"
                                           href="product.html">{{$product->title}}</a>
                                        <div class="productdiscrption"> Lorem Ipsum is simply dummy
                                            text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard.<br>
                                            <br>
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the
                                            industry's standard.
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry. Lorem Ipsum has been the
                                            industry's stan
                                        </div>
                                        <div class="pricetag">
                                            <span class="spiral"></span><a href="#"
                                                                           class="productcart">ADD
                                                TO CART</a>
                                            <div class="price">
                                                <div class="pricenew">
                                                    ${{$product->sell_price}}</div>
                                                <div class="priceold"></div>
                                            </div>
                                        </div>
                                        <div class="shortlinks">
                                            <a class="details" href="#">DETAILS</a>
                                            <a class="wishlist" href="#">WISHLIST</a>
                                            <a class="compare" href="#">COMPARE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endif


            </ul>
            <div>
                {{ $latestProduct->appends(\Illuminate\Support\Facades\Request::all())->links() }}
            </div>
        </section>
    </section>
</div>