<div class="container-fluid">
	<div class="row">
		<!-- Single Banner  -->
		@foreach( $bannerList['small-banner'] as $banner)
		<div class="col-lg-4 col-md-6 col-12">
			@include('includes.banner.item-banner')
		</div>

		@endforeach
		<!-- /End Single Banner  -->
	</div>
</div>