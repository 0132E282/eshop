@extends('layouts.web-default')
@section('seo')
@endsection
@section('content')
<div class="product-area shop-sidebar shop section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="shop-sidebar">
                    @include('includes.slider.slider-shop')
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                <div class="row">
                    <div class="col-12">
                        <!-- Shop Top -->
                        <div class="shop-top">
                            @include('includes.action.shop-filter')
                        </div>
                        <!--/ End Shop Top -->
                    </div>
                </div>
                <div class="row">
                    @foreach($productList as $product)
                    <div class="col-lg-4 col-md-6 col-12">
                        @include('includes.products.card.card-product')
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="mx-auto" style="max-width:570px;">
                        {{$productList->links()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection