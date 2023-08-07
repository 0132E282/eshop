<div class="tab-single review-panel">
    <div class="row">
        <div class="col-12">
            <div class="ratting-main">
                <div class="avg-ratting">
                    <h4>4.5 <span>(Overall)</span></h4>
                    <span>Based on 1 Comments</span>
                </div>
                <div class="comment mt-3">
                    @include('includes/details-page/comment-preview')
                    @include('includes/details-page/comment-preview')
                    @include('includes/details-page/comment-preview')
                </div>

            </div>

            <div class="comment-review">
                <div class="add-review">
                    <h5>Add A Review</h5>
                    <p>Your email address will not be published. Required fields are marked</p>
                </div>
                <h4>Your Rating</h4>
                <div class="review-inner">
                    <ul class="rating d-flex p-0 m-0 m-1 fs-3" style="cursor: pointer;">
                        <li class="me-1" data-value='1'><i class=" text-warning fa fa-star"></i></li>
                        <li class="me-1" data-value='2'><i class="text-warning fa fa-star"></i></li>
                        <li class="me-1" data-value='3'><i class="text-warning fa fa-star"></i></li>
                        <li class="me-1" data-value='4'><i class="text-warning fa fa-star"></i></li>
                        <li class="me-1" data-value='5'><i class="text-warning fa fa-star"></i></li>
                    </ul>
                </div>
            </div>
            @include('includes/details-page/form-comment')
        </div>
    </div>
</div>