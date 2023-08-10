<div style="width: 100%;" class="py-2">
    <form action="{{route('delete-cart' ,$key)}}" method="POST" class=" d-flex">
        @csrf
        @method('delete')
        <button class="p-2 btn" type="submit"> <i class="fa fa-remove"></i></button>
        <a class="cart-img me-3" style="max-width: 80px;"><img src="{{$cartItem['url_image'] ??  ''}}" alt="#"></a>
        <div>
            <h4 class="fs-6"><a href="#">{{$cartItem['product_name'] ?? ''}}</a></h4>
            <p class="quantity m-0">{{$cartItem['quantity'] ?? ''}} - <span class="amount">{{number_format( 0+str_replace(",","",$cartItem['price'])) ??0 }} VND</span></p>
        </div>
    </form>
</div>