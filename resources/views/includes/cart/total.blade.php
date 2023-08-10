@php

$total = array_reduce($productBillList, function ($total , $product) {
return $total + ($product['quantity'] * $product['price']);
});
$Shipping = 0;

@endphp
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
                            <li>tổng giá<span>{{number_format( 0+str_replace(",","",$total))}} VND</span></li>
                            <li>phí vận chuyển <span>{{!$Shipping <= 0 ?number_format( 0+str_replace(",","",$Shipping)).'VNĐ': 'free' }} </span></li>
                            <li>You Save<span>$20.00</span></li>
                            <li class="last">thanh toán<span>{{number_format( 0+str_replace(",","", $total + $Shipping))}} VNĐ</span></li>
                        </ul>
                        <div class="button5">
                            <a href="{{route('check-out')}}" class="btn btn-primary py-3 px-2">mua hàng</a>
                            <a href="{{route('shop-page')}}" class="btn btn-primary py-3 px-2">tiếp tục mua</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Total Amount -->
    </div>
</div>