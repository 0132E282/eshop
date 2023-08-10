@extends('layouts.web-default')
@section('seo')
@endsection
@section('content')
@php
$total = 0;
@endphp
<div class="shopping-cart section">
    <div class="container">
        @if(!isset($productBillList) || count($productBillList) > 0)
        @include('includes/cart/table')
        @include('includes/cart/total')
        @else
        @include('includes/cart/not-product')
        @endif
    </div>
</div>
<!--/ End Shopping Cart -->
@endsection