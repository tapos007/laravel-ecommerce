@extends('frontend.master')

@section('content')

    <div id="maincontainer">

    </div>
@endsection

@section('custom_js')
    @include('shop.partials.cartjs')
    <script src="{{asset('js/bundle.js')}}"></script>
@endsection

