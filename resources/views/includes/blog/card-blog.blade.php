	<!-- Start Single Blog  -->
	<div class="shop-single-blog">
		<img src="{{$post->thumb_url}}" alt="#">
		<div class="content">
			<p class="date">{{$post->create_at}}</p>
			<a href="{{route('detail-post',[$post->slug,$post->id_post])}}" class="title">{{$post->heading}}</a>
			<a href="{{route('detail-post',[$post->slug,$post->id_post])}}" class="more-btn">Continue Reading</a>
		</div>
	</div>
	<!-- End Single Blog  -->