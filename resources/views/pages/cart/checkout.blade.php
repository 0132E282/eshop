@extends('layouts.web-default');
@section('content')
<div class="container">
    <div class="row my-5">
        <div class="col-md-4 order-md-2 mb-4">
            @include('includes/checkout-page/cart-count')
        </div>
        <div class="col-md-8 order-md-1">
            @include('includes/checkout-page/form')
        </div>
    </div>
</div>
@endsection