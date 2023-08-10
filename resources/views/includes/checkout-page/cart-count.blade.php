<h4 class="d-flex justify-content-between align-items-center mb-3">
    <span class="text-muted">giỏ hàng</span>
    <span class="badge badge-secondary badge-pill">{{count(Session::get('product_cart'))}}</span>
</h4>
<ul class="list-group mb-3">
    @if(Session::has('product_cart'))
    @foreach(Session::get('product_cart') as $key => $cartItem)
    <li class="list-group-item d-flex justify-content-between lh-condensed">
        @include('includes/cart/cart-card')
    </li>
    @endforeach
    @endif
</ul>

<form class="card p-2">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Promo code">
        <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
        </div>
    </div>
</form>