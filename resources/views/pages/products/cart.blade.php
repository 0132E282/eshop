@extends('layouts.web-default')
@section('seo')
@endsection
@section('content')
<div class="shopping-cart section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Shopping Summery -->
                <table class="table shopping-summery">
                    <thead>
                        <tr class="main-hading ">
                            <th class="text-black">PRODUCT</th>
                            <th class="text-black">NAME</th>
                            <th class="text-center text-black">UNIT PRICE</th>
                            <th class="text-center  text-black">QUANTITY</th>
                            <th class="text-center text-black">TOTAL</th>
                            <th class="text-center text-black"><i class="ti-trash remove-icon"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productBillList as $key => $cartItem)
                        <tr>
                            <td class="image" data-title="No"><img src="{{$cartItem['url_image']}}" alt="#"></td>
                            <td class="product-des" data-title="Description">
                                <p class="product-name"><a href="#">{{$cartItem['product_name']}}</a></p>
                                <!-- <p class="product-des">Maboriosam in a tonto nesciung eget distingy magndapibus.</p> -->
                            </td>
                            <td class="price" data-title="Price" data-value="{{$cartItem['price']}}"><span> {{number_format( 0+str_replace(",","",$cartItem['price']))}} VND</span></td>
                            <td class="qty" data-title="Qty"><!-- Input Order -->
                                <div class="input-group">
                                    <div class="button minus">
                                        <button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[{{$key}}]">
                                            <i class="ti-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" name="quant[{{$key}}]" class="input-number" data-min="1" data-max="100" value="{{$cartItem['quantity']}}">
                                    <div class="button plus">
                                        <button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[{{$key}}]">
                                            <i class="ti-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <!--/ End Input Order -->
                            </td>
                            <td class="total-amount" data-title="Total"><span>$220.88</span></td>
                            <td class="action" data-title="Remove"><a href="/cart/{{$key}}"><i class="ti-trash remove-icon"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--/ End Shopping Summery -->
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <!-- Total Amount -->
                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-5 col-12">
                            <div class="left">
                                <div class="coupon">
                                    <form action="#" target="_blank">
                                        <input name="Coupon" placeholder="Enter Your Coupon">
                                        <button class="btn">Apply</button>
                                    </form>
                                </div>
                                <div class="checkbox">
                                    <label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox"> Shipping (+10$)</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-7 col-12">
                            <div class="right">
                                <ul>
                                    <li>Cart Subtotal<span>$330.00</span></li>
                                    <li>Shipping<span>Free</span></li>
                                    <li>You Save<span>$20.00</span></li>
                                    <li class="last">You Pay<span>$310.00</span></li>
                                </ul>
                                <div class="button5">
                                    <a href="/cart/checkout" class="btn primary">Checkout</a>
                                    <a href="#" class="btn">Continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Total Amount -->
            </div>
        </div>
    </div>
</div>
<!--/ End Shopping Cart -->
@endsection