<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="section-title">
				<h2>From Our Blog</h2>
			</div>
		</div>
	</div>
	<div class="row">
		@foreach($postList as $post)
		<div class="col-lg-4 col-md-6 col-12">
			@include('includes.blog.card-blog')
		</div>
		@endforeach
	</div>
</div>
</div>