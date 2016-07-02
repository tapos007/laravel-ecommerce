@extends('frontend.master')

@section('content')

    <div id="maincontainer">
        <section id="product">
            <div class="container">

                <div class="row">
                    @include('partials.category')
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

