@extends('layouts.web-default')
@section('seo')

@endsection
@section('content')
<div class="content">
    <section class="single-slider" style="height: 540px;">
        @include('includes.home.slider')
    </section>
    <section class="small-banner section">
        @include('includes.home.banner.small-banner')
    </section>
    <section class="product-area section">
        @include('includes.home.products-area')
    </section>
    <section class="midium-banner">
        @include('includes.home.banner.midium-banner')
    </section>
    <div class="product-area most-popular section">
        @include('includes.home.most-popular')
    </div>
    <section class="shop-home-list section">
        @include('includes.home.shop-home-list')
    </section>
    <section class="cown-down">
        @include('includes.home.cown-down')
    </section>
    <section class="shop-blog section">
        @include('includes.home.blog-shop')
    </section>
    <section class="shop-services section home">
        @include('includes.home.shop-services')
    </section>
    <section class="shop-newsletter section">
        @include('includes.home.shop-newsletter')
    </section>
</div>
@endsection