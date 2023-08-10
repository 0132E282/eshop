<div class="single-banner">
    <img src="{{$banner->url_banner ?? ''}}" alt="#">
    <div class="content">
        @if(isset($banner->description) || isset($banner->title))
        <p>{{$banner->title ?? ''}}</p>
        <h3>{{$banner->description ?? ''}}</h3>
        @endif
        @if(!isset($banner->links))
        <a href="{{$banner->links ?? 1}}">Discover Now</a>
        @endif
    </div>
</div>