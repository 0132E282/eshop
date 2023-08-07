@php
$total = 0;
@endphp
<a href="/cart" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{Session::has('product_cart') ? count(Session::get('product_cart')) : 0}}</span></a>
<!-- Shopping Item -->
<div class="shopping-item">

    <div class="dropdown-cart-header">
        <span>{{ Session::has('product_cart') ? count(Session::get('product_cart')) : 0}}</span>
        <a href="#">View Cart</a>
    </div>
    <ul class="shopping-list overflow-y-scroll p-0 me-0" style="max-height: 400px; ">
        @if(Session::has('product_cart'))

        @foreach(Session::get('product_cart') as $key => $cartItem)
        @php
        $total += $cartItem['price'] * $cartItem['quantity'];
        @endphp
        <li>
            @include('includes/cart.cart-card')
        </li>
        @endforeach
        @endif
    </ul>
    <div class="bottom">
        <div class="total">
            <span>Total</span>
            <span class="total-amount">{{number_format( 0+str_replace(",","",$total))}} VND</span>
        </div>

        <a href="checkout.html" class="btn animate">Checkout</a>
    </div>
</div>