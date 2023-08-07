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

@if(Session::has('message'))
<div class="modal" tabindex="-1" style="display:flex">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">thanh toán sản phẩm</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>{{Session::get('message')}}</p>
            </div>
            <div class="modal-footer">
                <a href="/" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endif
@endsection