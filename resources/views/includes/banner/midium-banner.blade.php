<div class="container">
	<div class="row">
		@foreach( $bannerList['medium-banner'] as $banner)
		<div class="col-lg-6 col-md-6 col-12">
			@include('includes.banner.item-banner')
		</div>
		@endforeach
	</div>
</div>