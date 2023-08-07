@extends('layouts.web-default')
@section('seo')
<link rel="stylesheet" href="/assets-web/details-page.css" type="text/css" />
@endsection
@section('content')
<div class="container mt-3 mb-5">
    <div class="row">
        <div class="col-12">
            <div class="row mb-4">
                <div class="col-lg-6 col-12">
                    <div class="product-gallery">
                        @include('includes/details-page/product-gallery')
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="product-des">
                        @include('includes/details-page/product-des')
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews</a></li>
                            </ul>

                        </div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel">
                                @include('includes/details-page/description')
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel">
                                @include('includes/details-page/review')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @include('includes.slider.popular-slider-product')
        </div>
    </div>
</div>

@endsection