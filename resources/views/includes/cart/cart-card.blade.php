<div style="width: 100%;">
    <a href="/bill/delete/{{$key}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
    <a class="cart-img"><img src="{{$cartItem['url_image'] ??  ''}}" alt="#"></a>
    <h4><a href="#">{{$cartItem['product_name'] ?? ''}}</a></h4>
    <p class="quantity">{{$cartItem['quantity'] ?? ''}} - <span class="amount">{{number_format( 0+str_replace(",","",$cartItem['price'])) ??0 }} VND</span></p>
</div>