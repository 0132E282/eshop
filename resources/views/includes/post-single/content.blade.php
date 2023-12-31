<div class="blog-single-main">
    <div class="row">
        <div class="col-12">
            <div class="image">
                <img src="{{$post->thumb_url ?? ''}}" alt="#">
            </div>
            <div class="blog-detail">
                <h2 class="blog-title">{{$post->heading ?? '' }}</h2>
                <div class="blog-meta">
                    <span class="author"><a href="#"><i class="fa fa-user"></i>By Admin</a><a href="#"><i class="fa fa-calendar"></i>Dec 24, 2018</a><a href="#"><i class="fa fa-comments"></i>Comment (15)</a></span>
                </div>
                <div class="content">
                    {!!$post->content!!}
                </div>
            </div>
            <div class="share-social">
                <div class="row">
                    <div class="col-12">
                        <div class="content-tags">
                            <h4>Tags:</h4>
                            <ul class="tag-inner">
                                <li><a href="#">Glass</a></li>
                                <li><a href="#">Pant</a></li>
                                <li><a href="#">t-shirt</a></li>
                                <li><a href="#">swater</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="comments">
                <h3 class="comment-title">Comments (3)</h3>
                <!-- Single Comment -->
                <div class="single-comment">
                    <img src="https://via.placeholder.com/80x80" alt="#">
                    <div class="content">
                        <h4>Alisa harm <span>At 8:59 pm On Feb 28, 2018</span></h4>
                        <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee Phosfluorescently leverage.</p>
                        <div class="button">
                            <a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Comment -->
                <!-- Single Comment -->
                <div class="single-comment left">
                    <img src="https://via.placeholder.com/80x80" alt="#">
                    <div class="content">
                        <h4>john deo <span>Feb 28, 2018 at 8:59 pm</span></h4>
                        <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee Phosfluorescently leverage.</p>
                        <div class="button">
                            <a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Comment -->
                <!-- Single Comment -->
                <div class="single-comment">
                    <img src="https://via.placeholder.com/80x80" alt="#">
                    <div class="content">
                        <h4>megan mart <span>Feb 28, 2018 at 8:59 pm</span></h4>
                        <p>Enthusiastically leverage existing premium quality vectors with enterprise-wide innovation collaboration Phosfluorescently leverage others enterprisee Phosfluorescently leverage.</p>
                        <div class="button">
                            <a href="#" class="btn"><i class="fa fa-reply" aria-hidden="true"></i>Reply</a>
                        </div>
                    </div>
                </div>
                <!-- End Single Comment -->
            </div>
        </div>
        <div class="col-12">
            <div class="reply">
                <div class="reply-head">
                    <h2 class="reply-title">Leave a Comment</h2>
                    <!-- Comment Form -->
                    <form class="form" action="#">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Your Name<span>*</span></label>
                                    <input type="text" name="name" placeholder="" required="required">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <label>Your Email<span>*</span></label>
                                    <input type="email" name="email" placeholder="" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Your Message<span>*</span></label>
                                    <textarea name="message" placeholder=""></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group button">
                                    <button type="submit" class="btn">Post comment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End Comment Form -->
                </div>
            </div>
        </div>
    </div>
</div>