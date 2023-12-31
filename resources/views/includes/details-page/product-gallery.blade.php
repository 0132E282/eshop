<div class="flexslider-thumbnails">
    <div class="flex-viewport " style="overflow: hidden; position: relative;">
        <ul class="slides" style="width: 1200%; transition-duration: 0.6s; transform: translate3d(-1665px, 0px, 0px);">
            <li data-thumb="{{$productDetails->hinh ?? ''}}" class="clone flex-active-slide" style="width: 555px; float: left; display: block; height: 100%;">
                <img src="{{$productDetails->hinh?? ''}}" alt="#" style=" height: 100%;">
            </li>
            <li data-thumb="{{$productDetails->hinh ?? ''}}" class="clone flex-active-slide" style="width: 555px; float: left; display: block; height: 100%;">
                <img src="{{$productDetails->hinh?? ''}}" alt="#" style=" height: 100%;">
            </li>
            @if(isset($productDetails->description_images))
            @foreach($productDetails->description_images as $image)
            <li data-thumb="{{$image ?? ''}}" class="clone flex-active-slide" style="width: 555px; float: left; display: block; height: 100%;">
                <img src="{{$image ?? ''}}" alt="#" style=" height: 100%;">
            </li>
            @endforeach
            @endif
        </ul>
    </div>
    <ul class="flex-direction-nav">
        <li><a class="flex-prev" href="#"></a></li>
        <li><a class="flex-next" href="#"></a></li>
    </ul>
</div>