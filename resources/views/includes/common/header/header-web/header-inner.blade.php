<div class="container">
    <div class="cat-nav-head">
        <div class="row">

            @if(isset($isShowCategories) && $isShowCategories)
            <div class="col-lg-3">
                <div class="all-category" style="margin: 0 -12px; ">
                    <h3 class="cat-heading m-0"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                    <ul class="main-category overflow-y-scroll " style="max-height: 470px;">
                        <!-- <li><a href="#">New Arrivals <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="sub-category">
                                    <li><a href="#">accessories</a></li>
                                    <li><a href="#">best selling</a></li>
                                    <li><a href="#">top 100 offer</a></li>
                                    <li><a href="#">sunglass</a></li>
                                    <li><a href="#">watch</a></li>
                                    <li><a href="#">man’s product</a></li>
                                    <li><a href="#">ladies</a></li>
                                    <li><a href="#">westrn dress</a></li>
                                    <li><a href="#">denim </a></li>
                                </ul>
                            </li> -->
                        <!-- <li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class="mega-menu">
                                    <li class="single-menu">
                                        <a href="#" class="title-link">Shop Kid's</a>
                                        <div class="image">
                                            <img src="https://via.placeholder.com/225x155" alt="#">
                                        </div>
                                        <div class="inner-link">
                                            <a href="#">Kids Toys</a>
                                            <a href="#">Kids Travel Car</a>
                                            <a href="#">Kids Color Shape</a>
                                            <a href="#">Kids Tent</a>
                                        </div>
                                    </li>
                                    <li class="single-menu">
                                        <a href="#" class="title-link">Shop Men's</a>
                                        <div class="image">
                                            <img src="https://via.placeholder.com/225x155" alt="#">
                                        </div>
                                        <div class="inner-link">
                                            <a href="#">Watch</a>
                                            <a href="#">T-shirt</a>
                                            <a href="#">Hoodies</a>
                                            <a href="#">Formal Pant</a>
                                        </div>
                                    </li>
                                    <li class="single-menu">
                                        <a href="#" class="title-link">Shop Women's</a>
                                        <div class="image">
                                            <img src="https://via.placeholder.com/225x155" alt="#">
                                        </div>
                                        <div class="inner-link">
                                            <a href="#">Ladies Shirt</a>
                                            <a href="#">Ladies Frog</a>
                                            <a href="#">Ladies Sun Glass</a>
                                            <a href="#">Ladies Watch</a>
                                        </div>
                                    </li>
                                </ul>
                            </li> -->
                        @if($categories)
                        @foreach($categories as $item)
                        <li><a href="/shop?text-search={{$item->ten_loai}}">{{$item->ten_loai}}</a></li>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            @endif

            <div class="{{isset($isShowCategories) && $isShowCategories ?'col-lg-9' : 'col-lg-12'}} col-12">
                <div class="menu-area">
                    <!-- Main Menu -->
                    <nav class="navbar navbar-expand-lg">
                        <div class="navbar-collapse">
                            <div class="nav-inner">
                                <ul class="nav main-menu menu navbar-nav menu-main-list">
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!--/ End Main Menu -->
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const mainMenu = document.querySelectorAll('.menu-main-list');
    const menuListArray = [{
            title: 'trang chủ',
            url: "{{route('home-page')}}",
        },
        {
            title: 'cửa hàng',
            url: "{{route('shop-page')}}",
        },
        {
            title: 'dịch vụ',
            url: ""
        },
        {
            title: 'tin tức công nghệ',
            url: "{{route('blog-page')}}",
        },
        {
            title: 'liên hện',
            url: ""
        }
    ]
    mainMenu.forEach((item) => {
        item.innerHTML = menuListArray.map((item) => `<li><a href="${item.url}">${item.title}</a></li> `).join('');
    })
</script>