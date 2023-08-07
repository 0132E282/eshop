<div class="container">
    <div class="row">
        @for($i = 0; $i < 3 ; $i++) <div class="col-lg-4 col-md-6 col-12">
            <div class="row">
                <div class="col-12">
                    <div class="shop-section-title">
                        <h1>On sale</h1>
                    </div>
                </div>
            </div>
            <!-- Start Single List  -->
            @for($i = 0; $i < 3 ; $i++) <div class="single-list">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="list-image overlay">
                            <img src="https://via.placeholder.com/115x140" alt="#">
                            <a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 no-padding">
                        <div class="content">
                            <h4 class="title"><a href="#">Licity jelly leg flat Sandals</a></h4>
                            <p class="price with-discount">$59</p>
                        </div>
                    </div>
                </div>
    </div>
    @endfor

    <!-- End Single List  -->
</div>
@endfor
</div>
</div>