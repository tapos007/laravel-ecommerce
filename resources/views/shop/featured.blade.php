@extends('frontend.master')

@section('content')

    <div id="maincontainer">
        <section id="product">
            <div class="container">
                <!--  breadcrumb -->
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Home</a>
                        <span class="divider">/</span>
                    </li>
                    <li class="active">Category</li>
                </ul>
                <div class="row">
                    <!-- Sidebar Start-->
                @include('partials.category')
                    <!-- Sidebar End-->
                    <!-- Category-->
                    @include('shop.partials.product_listing')
                </div>
            </div>
        </section>
    </div>
@endsection

@section('custom_js')

  @include('shop.partials.product_related_js')
@endsection

