<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>sản phẩm bán chạy</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="product-info">
					<div class="nav-main">
						<!-- Tab Nav -->
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							@foreach($titleListProduct as $item)
							<li class="nav-item">
								<a class="nav-link" href="?title-product={{$item->id_loai}}" role="tab">{{$item->ten_loai}}</a>
							</li>
							@endforeach
						</ul>
						<!--/ End Tab Nav -->
					</div>
					<div class="tab-content" id="myTabContent">
						<!-- Start Single Tab -->
						<div class="tab-pane fade show active" role="tabpanel">
							<div class="tab-single">
								<div class="row">
									@foreach($treadingProduct as $product)
									<div class="col-xl-3 col-lg-4 col-md-4 col-12">
										@include('includes.products.card.card-product')
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>