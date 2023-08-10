<div class="single-product">
    <div class="product-img" style="max-width: 400px;">
        <a href="{{route('details-page',$product->id_sp)}}">
            <img class="default-img" src="{{$product-> hinh ?? 'https://via.placeholder.com/550x750'}} " alt="#" style="max-width: 550px;">
            <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
        </a>
        <div class="button-head">
            <div class="product-action">
                <a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
            </div>
            <div class="product-action-2">
                <a title="Add to cart" href="#">Add to cart</a>
            </div>
        </div>
    </div>
    <div class="product-content">
        <h3><a href="{{route('details-page',$product->id_sp)}}">{{$product -> ten_sp ?? ''}}</a></h3>
        <div class="product-price">
            <span>{{number_format( 0+str_replace(",","",$product -> gia))}} VND</span>
        </div>
    </div>
</div>