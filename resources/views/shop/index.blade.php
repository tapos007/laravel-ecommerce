@extends('frontend.master')

@section('content')
    <div id="maincontainer">
        <!-- Slider Start-->
        <section class="slider">
            <div class="container">
                <div class="flexslider" id="mainslider">
                    <ul class="slides">
                        <li>
                            <img src="img/banner1.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="img/banner2.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="img/banner1.jpg" alt=""/>
                        </li>
                        <li>
                            <img src="img/banner2.jpg" alt=""/>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Slider End-->

        <!-- Section Start-->
        <section class="container otherddetails">
            <div class="otherddetailspart">
                <div class="innerclass free">
                    <h2>Free shipping</h2>
                    All over in world over $200
                </div>
            </div>
            <div class="otherddetailspart">
                <div class="innerclass payment">
                    <h2>Easy Payment</h2>
                    Payment Gatway support
                </div>
            </div>
            <div class="otherddetailspart">
                <div class="innerclass shipping">
                    <h2>24hrs Shipping</h2>
                    Free For UK Customers
                </div>
            </div>
            <div class="otherddetailspart">
                <div class="innerclass choice">
                    <h2>Over 5000 Choice</h2>
                    50,000+ Products
                </div>
            </div>
        </section>
        <!-- Section End-->

        <!-- Featured Product-->
        <section id="featured" class="row mt40">
            <div class="container">
                <h1 class="heading1"><span class="maintext">Featured Products</span><span class="subtext"> See Our Most featured Products</span>
                </h1>
                <ul class="thumbnails">
                    @if(count($featuredProduct)>0)
                        @foreach($featuredProduct as $product)
                            @include('partials.single_product', ['product' => $product,'class'=>'col-lg-3 col-sm-6'])
                        @endforeach
                    @endif


                </ul>
            </div>
        </section>

        <!-- Latest Product-->
        <section id="latest" class="row">
            <div class="container">
                <h1 class="heading1"><span class="maintext">Latest Products</span><span class="subtext"> See Our  Latest Products</span>
                </h1>
                <ul class="thumbnails">
                    @if(count($latestProduct)>0)
                        @foreach($latestProduct as $product)
                            @include('partials.single_product', ['product' => $product,'class'=>'col-lg-3 col-sm-6'])

                        @endforeach
                    @endif


                </ul>
            </div>
        </section>


        <!-- Featured Product-->
        @if(count($visitedProduct)>0)
            <section id="visitedProduct" class="row mt40">
                <div class="container">
                    <h1 class="heading1"><span class="maintext">Visited Products</span><span class="subtext"> See Our Most Visited Products</span>
                    </h1>
                    <ul class="thumbnails">

                        @foreach($visitedProduct as $product)
                            @include('partials.single_product', ['product' => $product,'class'=>'col-lg-3 col-sm-6'])

                        @endforeach


                    </ul>
                </div>
            </section>
    @endif
    <!-- Section  Banner Start-->
        <section class="container smbanner">
            <div class="row">
                <div class="col-lg-3 col-sm-6"><a href="#"><img src="img/smbanner.jpg" alt="" title=""></a>
                </div>
                <div class="col-lg-3 col-sm-6"><a href="#"><img src="img/smbanner.jpg" alt="" title=""></a>
                </div>
                <div class="col-lg-3 col-sm-6"><a href="#"><img src="img/smbanner.jpg" alt="" title=""></a>
                </div>
                <div class="col-lg-3 col-sm-6"><a href="#"><img src="img/smbanner.jpg" alt="" title=""></a>
                </div>
            </div>
        </section>
        <!-- Section  End-->

        <!-- Popular Brands-->
        <section id="popularbrands" class="container mt40">
            <h1 class="heading1"><span class="maintext">Popular Brands</span><span class="subtext"> See Our  Popular Brands</span>
            </h1>
            <div class="brandcarousalrelative">
                <ul id="brandcarousal">
                    <li><img src="img/brand1.jpg" alt="" title=""/></li>
                    <li><img src="img/brand2.jpg" alt="" title=""/></li>
                    <li><img src="img/brand3.jpg" alt="" title=""/></li>
                    <li><img src="img/brand4.jpg" alt="" title=""/></li>
                    <li><img src="img/brand1.jpg" alt="" title=""/></li>
                    <li><img src="img/brand2.jpg" alt="" title=""/></li>
                    <li><img src="img/brand3.jpg" alt="" title=""/></li>
                    <li><img src="img/brand4.jpg" alt="" title=""/></li>
                    <li><img src="img/brand1.jpg" alt="" title=""/></li>
                    <li><img src="img/brand2.jpg" alt="" title=""/></li>
                    <li><img src="img/brand3.jpg" alt="" title=""/></li>
                    <li><img src="img/brand4.jpg" alt="" title=""/></li>
                </ul>
                <div class="clearfix"></div>
                <a id="prev" class="prev" href="#">&lt;</a>
                <a id="next" class="next" href="#">&gt;</a>
            </div>
        </section>

        <!-- Newsletter Signup-->
        <section id="newslettersignup" class="mt40">
            <div class="container">
                <div class="pull-left newsletter">
                    <h2> Newsletters Signup</h2>
                    Sign up to Our Newsletter & get attractive Offers by subscribing to our newsletters.
                </div>
                <div class="pull-right">
                    <form class="form-horizontal">
                        <div class="input-prepend">
                            <input type="text" placeholder="Subscribe to Newsletter" id="inputIcon"
                                   class="input-xlarge">
                            <input value="Subscribe" class="btn btn-orange" type="submit">
                            Sign in
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <!-- /maincontainer -->
@endsection

