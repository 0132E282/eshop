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
                @php $total = $total +($cartItem['quantity'] * $cartItem['price']);
                @endphp
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
                    <td class="total-amount" data-title="Total"><span>{{number_format( 0+str_replace(",","",$cartItem['price'] * $cartItem['quantity']))}} VND</span></td>
                    <td class="action" data-title="Remove">
                        <form action="{{route('delete-cart',$key ?? '' )}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">
                                <i class="ti-trash remove-icon"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!--/ End Shopping Summery -->
    </div>
</div>