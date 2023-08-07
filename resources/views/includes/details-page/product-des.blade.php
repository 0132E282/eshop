<div class="short">
    <h4>{{$productDetails->ten_sp ?? ''}}</h4>
    <div class="rating-main d-flex">
        <ul class="rating d-flex p-0">
            <li class="ml-1" style="cursor: pointer;"><i class=" text-warning fa fa-star"></i></li>
            <li class="ml-1" style="cursor: pointer;"><i class=" text-warning fa fa-star"></i></li>
            <li class="ml-1" style="cursor: pointer;"><i class=" text-warning fa fa-star"></i></li>
            <li class="ml-1" style="cursor: pointer;"><i class=" text-warning fa fa-star-half-o"></i></li>
            <li class="ml-1" style="cursor: pointer;"><i class=" text-warning fa fa-star-o"></i></li>
        </ul>
        <a class="ml-2" href="#" class="total-review">(102) Review</a>
    </div>
    <p class="price fs-4 fw-bold">
        <span class="discount me-2  text-warning">
            {{
                $productDetails->gia_km ? number_format(0+str_replace(",","",$productDetails -> gia_km)) :
                number_format(0+str_replace(",","",$productDetails -> gia)) 
            }}đ
        </span>
        @if($productDetails->gia_km)
        <s>{{number_format(0+str_replace(",","",$productDetails -> gia))}}đ</s>
        @endif
    </p>
    <p class="description">{!!$productDetails->motangan ?? '' !!}</p>
    <hr>
    <table class="table" style="max-width: 400px;">
        <thead>
            <tr>
                <th class="text-center" scope="col" colspan="2">thông số sản phẩm</th>
            </tr>
        </thead>
        <tbody>

            @foreach($productParameter as $key => $value )
            <tr>
                <td>{{$key}}</td>
                <td>{{$value}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="product-buy">
    <form action="/cart?id={{$productDetails->id_sp}}" method="post" class="quantity">
        @csrf
        <h6>Quantity :</h6>
        <div class="action d-flex my-2">
            <div class="input-group d-flex border border-secondary" style="max-width: 120px;">
                <div class="button minus " style="width: 40px;">
                    <button type="button" class="btn border-0 bg-white btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                        <i class="ti-minus text-black"></i>
                    </button>
                </div>
                <input type="text" name="quant" style=" width:40px;" class=" border-0 input-number text-center" data-min="1" data-max="1000" value="1">
                <div class="button plus " style="width: 40px;">
                    <button type="button" class="btn border-0 btn-primary  bg-white btn-number" data-type="plus" data-field="quant[1]">
                        <i class="ti-plus text-black"></i>
                    </button>
                </div>
            </div>
            <div class="add-to-cart ms-3 d-flex">
                <a href="#" class="btn bg-danger text-white">mua ngay</a>
                <button class="btn bg-dark text-white ms-2">them vao gio hang</button>
                <a href="#" class="btn min"><i class="ti-heart fs-4"></i></a>
                <a href="#" class="btn min"><i class="fa fa-compress fs-4"></i></a>
            </div>
        </div>

    </form>

    <p class="cat">Category :<a href="#">Clothing</a></p>
    <p class="availability">Availability : 180 Products In Stock</p>
</div>